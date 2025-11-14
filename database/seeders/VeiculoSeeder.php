<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Veiculo; // Importar o Model

class VeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carros = [
            [
                'marca' => 'Fiat',
                'modelo' => 'Pulse Audace 1.0 Turbo',
                'cor' => 'Prata',
                'ano' => 2024,
                'quilometragem' => 15537,
                'valor' => 115990.00,
                'descricao' => 'SUV compacto com motor turbo, câmbio automático CVT, multimídia de 10 polegadas e ar-condicionado digital.',
                'foto1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251111/fiat-pulse-1.0-turbo-200-flex-audace-cvt-wmimagem01483618123.jpg?s=fill&w=1920&h=1440&q=75',
                'foto2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251111/fiat-pulse-1.0-turbo-200-flex-audace-cvt-wmimagem01483725818.jpg?s=fill&w=1920&h=1440&q=75',
                'foto3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251111/fiat-pulse-1.0-turbo-200-flex-audace-cvt-wmimagem01483847222.jpg?s=fill&w=1920&h=1440&q=75',
            ],
            [
                'marca' => 'Toyota',
                'modelo' => 'Corolla XEi 2.0',
                'cor' => 'Branco Pérola',
                'ano' => 2023,
                'quilometragem' => 15000,
                'valor' => 145000.00,
                'descricao' => 'Sedã médio líder de mercado. Confiabilidade Toyota, motor 2.0 Dynamic Force e sistema de segurança Safety Sense.',
                'foto1' => 'https://s3.ecompletocarros.dev/images/lojas/125/veiculos/227352/veiculoInfoVeiculoImagesMobile/vehicle_image_1739218646_d41d8cd98f00b204e9800998ecf8427e.jpeg',
                'foto2' => 'https://s3.ecompletocarros.dev/images/lojas/125/veiculos/227352/veiculoInfoVeiculoImagesMobile/vehicle_image_1739218648_d41d8cd98f00b204e9800998ecf8427e.jpeg', // Placeholder genérico se link quebrar
                'foto3' => 'https://s3.ecompletocarros.dev/images/lojas/125/veiculos/227352/veiculoInfoVeiculoImagesMobile/vehicle_image_1739218659_d41d8cd98f00b204e9800998ecf8427e.jpeg',

            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Civic Touring 1.5 Turbo',
                'cor' => 'Cinza',
                'ano' => 2021,
                'quilometragem' => 45000,
                'valor' => 159900.00,
                'descricao' => 'Esportividade e elegância. Teto solar, bancos em couro, motor turbo potente e excelente estabilidade.',
                'foto1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251027/honda-civic-1.5-16v-turbo-gasolina-touring-4p-cvt-wmimagem02094963038.jpg?s=fill&w=1920&h=1440&q=75',
                'foto2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251027/honda-civic-1.5-16v-turbo-gasolina-touring-4p-cvt-wmimagem02094987010.jpg?s=fill&w=1920&h=1440&q=75',
                'foto3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251027/honda-civic-1.5-16v-turbo-gasolina-touring-4p-cvt-wmimagem02095010637.jpg?s=fill&w=1920&h=1440&q=75',
            ],
            [
                'marca' => 'Jeep',
                'modelo' => 'Compass Longitude',
                'cor' => 'Preto',
                'ano' => 2022,
                'quilometragem' => 32000,
                'valor' => 138500.00,
                'descricao' => 'O SUV médio mais vendido. Interior sofisticado, motor T270 turbo flex e tração dianteira.',
                'foto1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251105/jeep-compass-1.3-t270-turbo-flex-longitude-at6-wmimagem10445395977.jpg?s=fill&w=1920&h=1440&q=75',
                'foto2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251105/jeep-compass-1.3-t270-turbo-flex-longitude-at6-wmimagem10445390111.jpg?s=fill&w=1920&h=1440&q=75',
                'foto3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251105/jeep-compass-1.3-t270-turbo-flex-longitude-at6-wmimagem10445595374.jpg?s=fill&w=1920&h=1440&q=75',
            ],
            [
                'marca' => 'Volkswagen',
                'modelo' => 'Polo Highline',
                'cor' => 'Prata',
                'ano' => 2023,
                'quilometragem' => 12000,
                'valor' => 105000.00,
                'descricao' => 'Hatch premium com painel digital Active Info Display, rodas de liga leve 17" e motor TSI econômico.',
                'foto1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251031/volkswagen-polo-1.0-mpi-track-manual-wmimagem15554973335.jpg?s=fill&w=1920&h=1440&q=75',
                'foto2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251031/volkswagen-polo-1.0-mpi-track-manual-wmimagem15562080975.jpg?s=fill&w=1920&h=1440&q=75',
                'foto3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251031/volkswagen-polo-1.0-mpi-track-manual-wmimagem15565666467.jpg?s=fill&w=1920&h=1440&q=75',
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Onix Plus Premier',
                'cor' => 'Vermelho',
                'ano' => 2024,
                'quilometragem' => 5000,
                'valor' => 112000.00,
                'descricao' => 'Sedã compacto muito espaçoso, com Wi-Fi nativo, estacionamento automático e 6 airbags.',
                'foto1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251109/chevrolet-onix-1.0-turbo-flex-plus-premier-automatico-wmimagem01063843934.jpg?s=fill&w=1920&h=1440&q=75',
                'foto2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251109/chevrolet-onix-1.0-turbo-flex-plus-premier-automatico-wmimagem01063868326.jpg?s=fill&w=1920&h=1440&q=75',
                'foto3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251109/chevrolet-onix-1.0-turbo-flex-plus-premier-automatico-wmimagem01063940426.jpg?s=fill&w=1920&h=1440&q=75',
            ],
            [
                'marca' => 'Ford',
                'modelo' => 'Ranger Limited 3.2',
                'cor' => 'Azul',
                'ano' => 2020,
                'quilometragem' => 85000,
                'valor' => 210000.00,
                'descricao' => 'Picape robusta para trabalho e lazer. Tração 4x4, motor diesel 3.2 e assistente de permanência em faixa.',
                'foto1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251113/ford-ranger-3-2-limited-4x4-cd-20v-diesel-4p-automatico-wmimagem14250291622.webp?s=fill&w=552&h=414&q=60',
                'foto2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251113/ford-ranger-3-2-limited-4x4-cd-20v-diesel-4p-automatico-wmimagem14250309031.webp?s=fill&w=552&h=414&q=60',
                'foto3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251113/ford-ranger-3-2-limited-4x4-cd-20v-diesel-4p-automatico-wmimagem14250375725.webp?s=fill&w=552&h=414&q=60',
            ],
            [
                'marca' => 'Hyundai',
                'modelo' => 'HB20 Platinum',
                'cor' => 'Branco',
                'ano' => 2023,
                'quilometragem' => 20000,
                'valor' => 89900.00,
                'descricao' => 'Design renovado, motor 1.0 Turbo GDI, frenagem autônoma de emergência e conectividade Bluelink.',
                'foto1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251105/hyundai-hb20-1.0-tgdi-flex-comfort-automatico-wmimagem16061812973.jpg?s=fill&w=552&h=414&q=60',
                'foto2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251105/hyundai-hb20-1.0-tgdi-flex-comfort-automatico-wmimagem16062023136.jpg?s=fill&w=552&h=414&q=60',
                'foto3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251105/hyundai-hb20-1.0-tgdi-flex-comfort-automatico-wmimagem16062403111.jpg?s=fill&w=552&h=414&q=60',
            ],
            [
                'marca' => 'Nissan',
                'modelo' => 'Kicks Exclusive',
                'cor' => 'Preto',
                'ano' => 2022,
                'quilometragem' => 35000,
                'valor' => 119000.00,
                'descricao' => 'SUV tecnológico com sistema de som Bose no encosto de cabeça, visão 360 graus e bancos Zero Gravity.',
                'foto1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251107/nissan-kicks-1.6-16v-flexstart-advance-xtronic-wmimagem16281218824.jpg?s=fill&w=552&h=414&q=60',
                'foto2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251107/nissan-kicks-1.6-16v-flexstart-advance-xtronic-wmimagem16281439130.jpg?s=fill&w=552&h=414&q=60',
                'foto3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251107/nissan-kicks-1.6-16v-flexstart-advance-xtronic-wmimagem16281662631.jpg?s=fill&w=552&h=414&q=60',
            ],
            [
                'marca' => 'Volkswagen',
                'modelo' => 'JETTA',
                'cor' => 'Branco',
                'ano' => 2016,
                'quilometragem' => 97555,
                'valor' => 72990.00,
                'descricao' => 'O SUV dos compactos. Econômico, prático para a cidade, com visual aventureiro e central multimídia.',
                'foto1' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251113/volkswagen-jetta-2.0-trendline-flex-4p-tiptronic-wmimagem16551999039.jpg?s=fill&w=1920&h=1440&q=75',
                'foto2' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251113/volkswagen-jetta-2.0-trendline-flex-4p-tiptronic-wmimagem16552021234.jpg?s=fill&w=1920&h=1440&q=75',
                'foto3' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251113/volkswagen-jetta-2.0-trendline-flex-4p-tiptronic-wmimagem16552046637.jpg?s=fill&w=1920&h=1440&q=75',
            ]
        ];

        foreach ($carros as $carro) {
            Veiculo::create($carro);
        }
    }
}