<?php

namespace App\Http\Controllers;


use App\Http\Requests\MewaRequest;

class MewaController extends Controller
{
    public function index(MewaRequest $request)
    {
        $faker = \Faker\Factory::create('ar_SA');

        return response()->json([
            'ID' => $faker->numberBetween(1,10000000),
            'NAME' => $faker->name,
            'NATIONALITY' => 'المملكة العربية السعودية',
            'MOBILE' => $faker->phoneNumber,
        ]);
    }
}
