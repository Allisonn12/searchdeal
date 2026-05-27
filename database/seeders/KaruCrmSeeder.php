<?php

namespace Database\Seeders;

use App\Models\KaruCrmLead;
use Illuminate\Database\Seeder;

class KaruCrmSeeder extends Seeder
{
  /**
   * Total leads to create per run.
   * Override via --count if you ever call this seeder directly.
   */
  private const TOTAL = 50;

  public function run(): void
  {
      KaruCrmLead::factory(self::TOTAL)->create();

  }
}

