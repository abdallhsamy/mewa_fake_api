<?php

namespace App\Http\Controllers;


use App\Http\Requests\MewaRequest;

class MewaController extends Controller
{
    public function index(MewaRequest $request)
    {
        $faker = \Faker\Factory::create('ar_SA');

        return response()->json([
            'ID' => 8186,
            'NAME' => $faker->name,
            'NATIONALITY' => 'المملكة العربية السعودية',
            'MOBILE' => $faker->phoneNumber,
        ]);
    }
}
