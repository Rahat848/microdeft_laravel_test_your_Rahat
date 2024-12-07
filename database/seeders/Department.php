<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class Department extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/user.json');
        $users = collect(json_decode($json));

        $users->each(function($user){
            Department::create([
                'Business_and_Corporate'=>$user->Business_and_Corporate,
                'Constitutional '=>$user->Constitutional,
                'Customs'=>$user->Customs,
                'VAT_and_Income_Tax'=>$user->VAT_and_Income_Tax,
                'Crime'=>$user->Crime,

            ]);
        });
    }
}
