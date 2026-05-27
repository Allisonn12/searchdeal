<?php

namespace Database\Seeders;

use App\Models\IzigizLead;
use Illuminate\Database\Seeder;

class IzigizLeadSeeder extends Seeder
{
  /**
   * Total leads to create per run.
   * Override via --count if you ever call this seeder directly.
   */
  private const TOTAL = 50;

  public function run(): void
  {
    // Spread across all four campaigns with a realistic status mix.
    IzigizLead::factory(self::TOTAL)->create();

    // Guarantee at least a few of every explicit status so the admin table
    // always has visible examples for each badge colour.
    IzigizLead::factory(5)->successful()->create();
    IzigizLead::factory(5)->failed()->create();
    IzigizLead::factory(10)->pending()->create();
  }
}

