<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_documentos')->insert([
            ['id' => 1, 'nombre' => 'DNI', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'nombre' => 'RUC', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'nombre' => 'Pasaporte', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
