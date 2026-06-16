<?php

namespace Database\Seeders;

use App\Models\Loan as LoanModel;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
  /**
   * Total leads to create per run.
   * Override via --count if you ever call this seeder directly.
   */
  private const TOTAL = 50;

  public function run(): void
  {
    LoanModel::factory(self::TOTAL)->create();

  }
}

