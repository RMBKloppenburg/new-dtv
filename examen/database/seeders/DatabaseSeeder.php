<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		//Test data voor de LID tabel
		DB::table("lids")->insert
		([
			'voornaam' => "Rick",
			'tussenvoegsel' => "",
			'achternaam' => "Steenderen",
			'wachtwoord' => Hash::make('Rick@Steenderen'),
			'address' => Str::random(5),
			'postcode' => Str::random(6),
			'telefoonnummer' => Str::random(10),
			'email' => "r.steenderen".'@gmail.com',
			'geslacht' => "man",
			'geboortedatum' => Carbon::create('1991', '03', '13'),
			//'lidsindsdatum' => Carbon::create('2020', '11', '26'),

		]);

		DB::table("baans")->insert
		([
			'afmetingen' => "60x60",
			'vloer' => "Grind",
			'checkdatum' => Carbon::create('2020', '11', '29'),
			'servicedatum' => Carbon::create('2020', '12', '28'),
		]);

		DB::table("kantines")->insert
		([
			'naam' => "Broodje Kip Chili",
			'catogorie' => "Brood",
			'bedrijf' => "DTV",
			'prijs' => 4.99,
			'soort' => 1,
			'hoeveelheid' => 12,

		]);

		DB::table("kantines")->insert
		([
			'naam' => "Pepsi Cola Max",
			'catogorie' => "Cola",
			'bedrijf' => "Pepsi",
			'prijs' => 2.45,
			'soort' => 2,
			'hoeveelheid' => 47,

		]);

		DB::table("kantines")->insert
		([
			'naam' => "Kip Sate",
			'catogorie' => "Kip",
			'bedrijf' => "DTV",
			'prijs' => 3.49,
			'soort' => 1,
			'hoeveelheid' => 22,

		]);

		DB::table("kantines")->insert
		([
			'naam' => "cappuccino",
			'catogorie' => "Koffie",
			'bedrijf' => "DTV",
			'prijs' => 2.99,
			'soort' => 2,
			'hoeveelheid' => 56,

		]);

		DB::table("reserverings")->insert
		([
			'baancode' => "1",
			'reserveringdatum' => Carbon::create('2020', '11', '30'),
			'reserveringtijd' => Carbon::createFromTimestampUTC(4.41),
		]);

		DB::table("toernoois")->insert
		([
			//
			'baancode' => "1",
			'lidid' => "1",
			'beschrijving' => "Dit is de eerste toernooi",
			'toernooidatum' => Carbon::tomorrow(),
		]);
    }
}
