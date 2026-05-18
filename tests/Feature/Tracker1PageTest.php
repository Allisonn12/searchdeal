<?php

namespace Tests\Feature;

use Tests\TestCase;

class Tracker1PageTest extends TestCase
{
	public function test_tracker1_page_renders_with_tracker_quote_form(): void
	{
		$response = $this->get(route('tracker1'));

		$response->assertOk();
		$response->assertSeeText('The 5 Tracker Companies Every Security-Conscious South African Driver Trusts');
		$response->assertSeeText('Introducing: The Provider Intelligence Engine');
		$response->assertSee(route('tracker.submit'), false);
		$response->assertSee('name="form_source" value="car_track_landing"', false);
	}
}
