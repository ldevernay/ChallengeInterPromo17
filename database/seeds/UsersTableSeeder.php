<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(Faker\Generator $faker)
  {

    DB::table('users')->insert([
      'last_name' => 'Admin',
      'first_name' => 'Admin',
      'email' => 'admin@admin.com',
      'password' => bcrypt('admin'),
    ]);

    for ($i=2; $i < 50; $i++) {
      DB::table('users')->insert([
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        'email' => $faker->unique()->email,
        'civility' => 'M',
        'birth_date' => $faker->date,
        'maiden_name' => $faker->lastName,
        'native_city' => $faker->city,
        'native_country' => $faker->country,
        'nationality' => 'français',
        'entry_date' => $faker->date,
        'marital_status' => 'single',
        'number_children' => $faker->randomNumber($nbDigits = 1, $strict = false),
        'age_children' => $faker->randomNumber($nbDigits = 2, $strict = false),
        'accomodation' => $faker->word,
        'number_social_security' => $faker->randomDigit,
        'number_cmu' => $faker->randomDigit,
        'end_visit_date' => $faker->date,
        'address' => $faker->address,
        'postal_code' => $faker->postcode,
        'city' => $faker->city,
        'phone' => $faker->phoneNumber,
        'cellphone' => $faker->phoneNumber,
        'emergency_contact' => $faker->name,
        'emergency_phone' => $faker->phoneNumber,

        'hero' => $faker->name,
        'experience_programming' => $faker->text($maxNbChars = 100),
        'hack_story' => $faker->text($maxNbChars = 100),
        'course' => $faker->word,
        'super_power' => $faker->text($maxNbChars = 100),
        'motivation' => $faker->text($maxNbChars = 100),

        'leisure' => $faker->bs,

        'availability' => $faker->word,
        'constraints' => $faker->text($maxNbChars = 100),
        'income' => $faker->word,

        'codecademy_profile' => $faker->url,
        'openclassroom_profile' => $faker->url,
        'other_profile' => $faker->url,
        'codecademy_badges' => $faker->randomNumber($nbDigits = 2, $strict = false),

        'prescriber_contact' => $faker->name,
        'prescriber_phone' => $faker->phoneNumber,

        'pro_project' => $faker->bs,

        'pole_emploi_registration' => 'yes',
        'number_pole_emploi' => $faker->randomDigit,
        'first_pole_emploi_registration' => $faker->date,
        'pole_emploi_password' => $faker->password,
        'last_pole_emploi_registration' => $faker->date,
        'pole_emploi_registration_reason' => 'end of studies',
        'pole_emploi_registration_duration' => $faker->randomDigit. ' mois',
        'paid_by_pole_emploi' => 'yes',
        'pole_emploi_allocation' => $faker->date,
        'rsa' => 'yes',
        'caf_number' => $faker->randomDigit,
        'rqth' => 'no',
        'handicapped_allocations' => 'no',
        'transportation' => 'car',
        'driving_license' => 'yes',
        'free_transports_card' => 'yes',
        'free_transports_card_validity' => $faker->date,

        'password' => bcrypt('azerty'),
      ]);
    }


    DB::table('users')->insert([
      'last_name' => 'Formateur',
      'first_name' => 'Formateur',
      'email' => 'formateur@formateur.com',
      'password' => bcrypt('azerty'),
    ]);

    DB::table('users')->insert([
      'last_name' => 'Formateur2',
      'first_name' => 'Formateur2',
      'email' => 'formateur2@formateur.com',
      'password' => bcrypt('azerty'),
    ]);
  }
}
