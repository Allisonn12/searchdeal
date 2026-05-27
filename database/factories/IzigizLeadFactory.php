<?php

namespace Database\Factories;

use App\Models\IzigizLead;
use App\Services\IzigizService;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<IzigizLead>
 */
class IzigizLeadFactory extends Factory
{
  protected $model = IzigizLead::class;

  // South African car makes and their common models.
  private const VEHICLES = [
    'Toyota'      => ['Corolla', 'Hilux', 'Fortuner', 'Yaris', 'Starlet'],
    'Volkswagen'  => ['Polo', 'Golf', 'Tiguan', 'Amarok', 'Caddy'],
    'Ford'        => ['Ranger', 'Fiesta', 'EcoSport', 'Focus', 'Puma'],
    'Hyundai'     => ['i20', 'Tucson', 'Creta', 'Grand i10', 'ix35'],
    'Kia'         => ['Picanto', 'Sportage', 'Rio', 'Sorento', 'Seltos'],
    'BMW'         => ['3 Series', '1 Series', 'X3', 'X5', '5 Series'],
    'Mercedes'    => ['C-Class', 'A-Class', 'GLC', 'E-Class', 'CLA'],
    'Renault'     => ['Kwid', 'Sandero', 'Duster', 'Captur', 'Triber'],
    'Nissan'      => ['Navara', 'Micra', 'Qashqai', 'X-Trail', 'Magnite'],
    'Suzuki'      => ['Swift', 'Jimny', 'Baleno', 'Vitara', 'Ertiga'],
  ];

  private const PREFERRED_CALL_TIMES = [
    'Morning (8am–12pm)',
    'Afternoon (12pm–4pm)',
    'Evening (4pm–6pm)',
    'Anytime',
  ];

  public function definition(): array
  {
    [$make, $model] = $this->randomVehicle();

    return [
      // Pull a random campaign code from the canonical list.
      'campaign_code'       => fake()->randomElement(array_values(IzigizService::CAMPAIGNS)),

      'firstname'           => fake()->firstName(),
      'lastname'            => fake()->lastName(),
      'phone'               => $this->saPhoneNumber(),
      'email'               => fake()->unique()->safeEmail(),
      'date_of_birth'       => fake()->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),

      'car_make'            => $make,
      'car_model'           => $model,
      'car_year'            => (string) fake()->numberBetween(2010, 2025),
      'car_usage'           => fake()->randomElement(['Private', 'Business', 'Both']),

      'preferred_call_time' => fake()->randomElement(self::PREFERRED_CALL_TIMES),

      // Realistic distribution: most leads are still pending.
      'status'              => fake()->randomElement([
        IzigizLead::STATUS_PENDING,
        IzigizLead::STATUS_PENDING,
        IzigizLead::STATUS_PENDING,
        IzigizLead::STATUS_SUCCESS,
        IzigizLead::STATUS_SUCCESS,
        IzigizLead::STATUS_FAILED,
      ]),

      'api_response'        => null,
    ];
  }

  // ---------------------------------------------------------------------------
  // Named states — useful in tests and specific seed scenarios
  // ---------------------------------------------------------------------------

  /** Force status = pending. */
  public function pending(): static
  {
    return $this->state(['status' => IzigizLead::STATUS_PENDING]);
  }

  /** Force status = success and attach a minimal mock API response. */
  public function successful(): static
  {
    return $this->state([
      'status'       => IzigizLead::STATUS_SUCCESS,
      'api_response' => ['status' => 'submitted', 'reference' => fake()->uuid()],
    ]);
  }

  /** Force status = failed and attach a minimal error response. */
  public function failed(): static
  {
    return $this->state([
      'status'       => IzigizLead::STATUS_FAILED,
      'api_response' => ['error' => 'Upstream timeout', 'code' => 504],
    ]);
  }

  /** Scope to the car insurance campaign only. */
  public function carInsurance(): static
  {
    return $this->state(['campaign_code' => IzigizService::CAMPAIGNS['car_insurance']]);
  }

  /** Scope to the tracker campaign only. */
  public function tracker(): static
  {
    return $this->state(['campaign_code' => IzigizService::CAMPAIGNS['tracker']]);
  }

  // ---------------------------------------------------------------------------
  // Private helpers
  // ---------------------------------------------------------------------------

  /** Returns a realistic South African mobile number. */
  private function saPhoneNumber(): string
  {
    $prefixes = ['060', '061', '062', '063', '071', '072', '073', '074', '076', '078', '079', '081', '082', '083', '084'];

    return fake()->randomElement($prefixes) . fake()->numerify('#######');
  }

  /** Returns a [make, model] tuple from the local vehicle list. */
  private function randomVehicle(): array
  {
    $make   = fake()->randomElement(array_keys(self::VEHICLES));
    $model  = fake()->randomElement(self::VEHICLES[$make]);

    return [$make, $model];
  }
}

