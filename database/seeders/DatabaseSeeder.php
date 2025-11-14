<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // usuário admin padrão 
        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'), // Senha: password
        ]);

        // Roda o nosso seeder de veículos
        $this->call(VeiculoSeeder::class);
    }
}