<?php

namespace Tests\Feature;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class LoanSubmissionTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        config()->set('database.default', 'sqlite');
        config()->set('database.connections.sqlite.database', ':memory:');

        DB::purge('sqlite');
        DB::reconnect('sqlite');

        Schema::dropIfExists('loans');
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone1', 20);
            $table->string('email');
            $table->string('title', 20);
            $table->decimal('loanamount', 12, 2);
            $table->boolean('underdebtreview');
            $table->char('idnumber', 13)->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function test_valid_loan_submission_posts_form_fields_to_provider_and_redirects(): void
    {
        Http::fake([
            'returnxdigital.leadbyte.co.uk/*' => Http::response([
                'code' => 1,
                'response' => 'Accepted',
            ], 200),
        ]);

        $payload = [
            'firstname' => 'Taylor',
            'lastname' => 'Smith',
            'phone1' => '0821234567',
            'email' => 'taylor@example.com',
            'title' => 'Mr',
            'loanamount' => '2500',
            'underdebtreview' => 'false',
            'idnumber' => '9001011234087',
            'acceptterms' => 'true',
            'form_source' => 'personal_loans_landing',
            'optinurl' => 'https://searchadeal.online/',
            'optindate' => '2026-06-16 10:00:00',
        ];

        $response = $this->from('/personal-loan')->post(route('loan.submit'), $payload);

        $response->assertRedirect(route('success'));

        Http::assertSent(function ($request) {
            parse_str($request->body(), $data);

            return $request->url() === 'https://returnxdigital.leadbyte.co.uk/api/submit.php'
                && ($data['firstname'] ?? null) === 'Taylor'
                && ($data['lastname'] ?? null) === 'Smith'
                && ($data['title'] ?? null) === 'mr'
                && ($data['underdebtreview'] ?? null) === 'no'
                && ($data['idnumber'] ?? null) === '9001011234087'
                && ($data['campid'] ?? null) === 'KONGA'
                && ($data['sid'] ?? null) === '25154'
                && ($data['returnjson'] ?? null) === 'yes';
        });

        $this->assertDatabaseHas('loans', [
            'firstname' => 'Taylor',
            'lastname' => 'Smith',
            'phone1' => '0821234567',
            'email' => 'taylor@example.com',
            'title' => 'mr',
            'underdebtreview' => 0,
            'idnumber' => '9001011234087',
            'status' => 'Accepted',
        ]);
    }

    public function test_invalid_loan_submission_redirects_back_with_errors_without_hitting_provider(): void
    {
        Http::fake();

        $response = $this->from('/personal-loan')->post(route('loan.submit'), [
            'firstname' => '',
            'lastname' => '',
            'phone1' => 'abc',
            'email' => 'not-an-email',
            'title' => '',
            'loanamount' => '999',
            'underdebtreview' => '',
            'idnumber' => '1234',
        ]);

        $response->assertRedirect('/personal-loan');
        $response->assertSessionHasErrors([
            'firstname',
            'lastname',
            'phone1',
            'email',
            'title',
            'loanamount',
            'underdebtreview',
            'idnumber',
            'acceptterms',
        ]);

        Http::assertNothingSent();
    }
}
