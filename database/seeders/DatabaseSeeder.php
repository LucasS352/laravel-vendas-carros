<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Cria um usuário admin padrão (Opcional, mas bom pro professor logar fácil)
        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'), // Senha: password
        ]);

        // Roda o nosso seeder de veículos
        $this->call(VeiculoSeeder::class);
    }
}