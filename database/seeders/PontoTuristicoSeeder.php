<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PontoTuristicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('ponto_turistico')->insert([
            [
                'nome' => 'Praia Pedra do Sal',
                'descricao' => '',
                'latitude' => '-2.804149',
                'longitude' => '-41.729625',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Parnaíba Shopping',
                'descricao' => '',
                'latitude' => '-2.909555',
                'longitude' => '-41.746835',
                'created_at' => now(),
                
            ],
        ]);
    }
}
