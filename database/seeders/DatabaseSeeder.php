<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $clientes = [
            [
                "cpf" => "12345678901",
                "nome" => "João da Silva",
                "data_nascimento" => "1990-05-15",
                "protocolo" => "PROT-001",
                "tel1" => "11999999999",
                "tel2" => "11888888888",
                "tel3" => "11777777777",
                "email" => "joao@email.com",
                "concluido" => 1,
                "observacao" => "Cliente regular com histórico positivo."
            ],
            [
                "cpf" => "98765432109",
                "nome" => "Maria Oliveira",
                "data_nascimento" => "1985-10-22",
                "protocolo" => "PROT-002",
                "tel1" => "21999999999",
                "tel2" => "21888888888",
                "tel3" => "21777777777",
                "email" => "maria@email.com",
                "concluido" => 0,
                "observacao" => "Cliente novo, sem histórico."
            ],
            // ... (adicione os outros objetos de cliente aqui)
        ];

        foreach ($clientes as $cliente) {
            DB::table('clientes')->insert($cliente);
        }
    }
}
