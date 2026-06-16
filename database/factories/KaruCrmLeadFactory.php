<?php

namespace Database\Factories;

use App\Models\KaruCrmLead;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<KaruCrmLead>
 */
class KaruCrmLeadFactory extends Factory
{
  protected $model = KaruCrmLead::class;


  public function definition(): array
  {
    return [
      'external_source_id' => fake()->uuid(),
      'name'        => fake()->lastName(),
      'phone'          => $this->saPhoneNumber(),
      'email'           => fake()->unique()->safeEmail(),

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

