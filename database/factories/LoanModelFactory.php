<?php

namespace Database\Factories;

use App\Models\Loan as LoanModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LoanModel>
 */
class LoanModelFactory extends Factory
{
  protected $model = LoanModel::class;

  // Realistic South African loan amount ranges (string, matching the schema).
  private const LOAN_AMOUNTS = [
    '1000', '2500', '5000', '7500', '10000',
    '15000', '20000', '30000', '50000', '75000', '100000',
  ];

  public function definition(): array
  {
    return [
      'firstname'       => fake()->firstName(),
      'lastname'        => fake()->lastName(),
      'phone1'          => $this->saPhoneNumber(),
      'email'           => fake()->unique()->safeEmail(),
      'title'           => fake()->randomElement(['Mr', 'Mrs', 'Ms', 'Dr', 'Prof']),
      'loanamount'      => fake()->randomElement(self::LOAN_AMOUNTS),
      'idnumber'        => $this->saIdNumber(),
      'underdebtreview' => fake()->randomElement(['Yes', 'No']),

      // Weighted distribution: most submissions are still pending.
      'status'          => fake()->randomElement([
        'pending', 'pending', 'pending',
        'success', 'success',
        'failed',
      ]),
    ];
  }

  // ---------------------------------------------------------------------------
  // Named states
  // ---------------------------------------------------------------------------

  public function pending(): static
  {
    return $this->state(['status' => 'pending']);
  }

  public function successful(): static
  {
    return $this->state(['status' => 'success']);
  }

  public function failed(): static
  {
    return $this->state(['status' => 'failed']);
  }

  public function underDebtReview(): static
  {
    return $this->state(['underdebtreview' => 'Yes']);
  }

  // ---------------------------------------------------------------------------
  // Private helpers
  // ---------------------------------------------------------------------------

  /** Generates a realistic South African mobile number. */
  private function saPhoneNumber(): string
  {
    $prefixes = ['060', '061', '062', '063', '071', '072', '073', '074', '076', '078', '079', '081', '082', '083', '084'];

    return fake()->randomElement($prefixes) . fake()->numerify('#######');
  }

  /**
   * Generates a plausible (but fake) South African 13-digit ID number.
   * Format: YYMMDD SSSS C A Z
   *   YY   = birth year (last 2 digits)
   *   MM   = birth month
   *   DD   = birth day
   *   SSSS = gender sequence (0000–4999 female, 5000–9999 male)
   *   C    = citizenship (0 = SA citizen)
   *   A    = usually 8 (old) or 9 (new)
   *   Z    = Luhn check digit (simplified — not validated by the API)
   */
  private function saIdNumber(): string
  {
    $dob      = fake()->dateTimeBetween('-60 years', '-18 years');
    $yymmdd   = $dob->format('ymd');
    $sequence = str_pad((string) fake()->numberBetween(0, 9999), 4, '0', STR_PAD_LEFT);
    $suffix   = '08'; // citizenship + race digit

    $partial  = $yymmdd . $sequence . $suffix;

    // Luhn check digit
    $luhn = $this->luhnDigit($partial);

    return $partial . $luhn;
  }

  /** Computes the Luhn check digit for a numeric string. */
  private function luhnDigit(string $number): string
  {
    $sum    = 0;
    $toggle = true;

    foreach (array_reverse(str_split($number)) as $digit) {
      $n = (int) $digit;
      if ($toggle) {
        $n *= 2;
        if ($n > 9) {
          $n -= 9;
        }
      }
      $sum   += $n;
      $toggle = !$toggle;
    }

    return (string) ((10 - ($sum % 10)) % 10);
  }
}

