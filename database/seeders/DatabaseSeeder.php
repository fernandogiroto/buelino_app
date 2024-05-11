<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Clinic;
use App\Models\User;
use App\Models\Task;
use App\Models\Employee;
use App\Models\Service;
use App\Models\Patient;
use App\Models\Activity;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Http;
use App\Models\Medication;

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
            'password' => Hash::make('1234'),
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
            $name = $faker->firstName;
            Patient::create([
                'clinic_id' => $clinic->id,
                'name' => $name,
                'surname' => $faker->lastName,
                'phone' => $faker->phoneNumber,
                'email' => strtolower($name) . '@example.com',
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
                'password' => Hash::make('1234'),
                'phone' => $faker->phoneNumber,
            ]);

            Employee::create([
                'user_id' => $newUser->id,
                'clinic_id' => $clinic->id,
                'role' => $roles[array_rand($roles)]
            ]);
        }

        $response = Http::get('https://api.fda.gov/drug/label.json?limit=700');
        $data = $response->json();

        foreach ($data['results'] as $result) {
            if (isset($result['openfda']['brand_name'][0]) && isset($result['active_ingredient'][0]) && isset($result['purpose'][0])) {
                $drug = new Medication();
                $drug->name = ucfirst($result['openfda']['brand_name'][0]);
                if (isset($result['active_ingredient'][0])) {
                    $activeIngredient = $result['active_ingredient'][0];
                    $activeIngredient = preg_replace('/^(Active\s*ingredient[s]?:?\s*)/i', '', $activeIngredient);
                    $drug->active_ingredients = trim($activeIngredient);
                }
                if (isset($result['purpose'][0])) {
                    $purpose = $result['purpose'][0];
                    $purpose = preg_replace('/^(USES\s*)?(USE[s]?\s*)?(Purpose\s*)?(Use\s*)?:?\s*/i', '', $purpose);
                    $drug->purpose = ucfirst(trim($purpose));
                }

                $drug->save();
            }
        }

        $userIds = User::pluck('id');
        $clinicIds = Clinic::pluck('id');

        $tasks = [
            ['name' => 'Administrar medicamentos', 'status' => true],
            ['name' => 'Fazer curativos', 'status' => true],
            ['name' => 'Realizar banho em pacientes', 'status' => false],
            ['name' => 'Auxiliar nas refeições', 'status' => true],
            ['name' => 'Realizar exercícios físicos', 'status' => false],
        ];

        foreach ($tasks as $task) {
            Task::create([
                'name' => $task['name'],
                'status' => $task['status'],
                'user_id' => $userIds->random(),
                'clinic_id' => $clinicIds->random(),
            ]);
        }

        $services = [
            ['name' => 'Bathing', 'type' => 'Personal hygiene'],
            ['name' => 'Giving Medicine', 'type' => 'Health'],
            ['name' => 'Physiotherapy', 'type' => 'Health'],
            ['name' => 'Leisure', 'type' => 'Wellbeing'],
            ['name' => 'Lunch', 'type' => 'Food'],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        $employees = Employee::all();
        $patients = Patient::all();
        $servicesCreated = Service::all();

        foreach ($employees as $employee) {
            $clinicId = $employee->clinic_id;
            $patientId = $patients->where('clinic_id', $clinicId)->random()->id;
            $service = $servicesCreated->random();

            Activity::create([
                'service_id' => $service->id,
                'clinic_id' => $clinicId,
                'patient_id' => $patientId,
                'employee_id' => $employee->id,
            ]);
        }
    }
}
