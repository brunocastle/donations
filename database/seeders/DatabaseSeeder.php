<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Donation;
use App\Models\Organization;
use App\Models\RequestCategory;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
         User::factory()->create([
             'name' => 'Bruno Castle',
             'email' => 'brunocastle89@gmail.com',
             'type' => 1,
         ]);

         Organization::factory()
             ->create([
                 'name' => 'Camaleão Azul, Família e Inclusão',
                 'email' => 'camaleaoazulcontato@gmail.com',
                 'phone' => '51 99849 6795',
                 'address' => 'Arquimino Bitencurt, 21 - Gravataí, RS, Brazil',
             ]);

         Donation::factory(20)->create();
    }
}
