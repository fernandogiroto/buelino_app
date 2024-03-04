<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Clinic;
use App\Models\User;
use App\Models\Employee;
use App\Models\Patient;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create('pt_BR');

        $clinic = Clinic::create([
            'name' => 'Lar Amanhecer',
            'phone' => '+351935730868',
            'address' => 'Avenida Cristo Rei 6 - Almada',
        ]);

        $user = User::create([
            'name' => 'Fernando Giroto',
            'email' => 'teste@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => $faker->phoneNumber
        ]);

        Employee::create([
            'user_id' => $user->id,
            'clinic_id' => $clinic->id,
            'role' => 'Diretor',
        ]);

        for ($i = 1; $i <= 10; $i++) {
            $entryDate = $faker->dateTimeBetween('-2 years', 'now');
            $leavingDate = $faker->optional()->dateTimeBetween($entryDate, 'now');
            Patient::create([
                'clinic_id' => $clinic->id,
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'phone' => $faker->phoneNumber,
                'email' => strtolower(str_replace(' ', '_', $faker->name)) . '@example.com',
                'birthday' => $faker->date($format = 'Y-m-d', $max = '2000-01-01'),
                'responsible' => $faker->unique()->firstName . ' ' . $faker->lastName,
                'avatar' => 'avatar' . $i . '.jpg',
                'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'entry_date' => $entryDate,
                'leaving_date' => $leavingDate,
            ]);
        }

        $roles = ['Enfermeiro', 'Enfermeira', 'Gestor', 'Gestora', 'Médico', 'Médica', 'Psicólogo', 'Psicóloga'];
        for ($i = 1; $i <= 8; $i++) {
            $userName = $faker->unique()->firstName . ' ' . $faker->lastName;
            $newUser = User::create([
                'name' => $userName,
                'email' => strtolower(str_replace(' ', '_', $userName)) . '@gmail.com',
                'password' => Hash::make('12345678'),
                'phone' => $faker->phoneNumber,
            ]);

            Employee::create([
                'user_id' => $newUser->id,
                'clinic_id' => $clinic->id,
                'role' => $roles[array_rand($roles)]
            ]);
        }
    }
}
