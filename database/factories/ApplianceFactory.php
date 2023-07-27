<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appliance>
 */
class ApplianceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = fake()->randomElement(['Adega', 'Bebedouro e Purificador', 'Centrífuga de Roupas', 'Cervejeira Residencial', 'Coifa e Depurador de Ar', 'Cooktop', 'Fogão', 'Forno', 'Freezer', 'Frigobar', 'Geladeira / Refrigerador', 'Lava e Seca', 'Lava-Louças', 'Máquina de Costura', 'Máquina de Lavar', 'Micro-ondas', 'Secadora de Roupas', 'Tanquinho']);
        $brand = fake()->randomElement(['A PARTS', 'Agratto', 'Alado', 'Aliança', 'ARNO', 'Atlas', 'Benter', 'Brasforma', 'Brastemp', 'Brastemp, Consul', 'Burdog', 'Chamalar', 'CHAMALUX', 'Clean Capas', 'Colormaq', 'CONSUL', 'Consul/Brastemp', 'Continental', 'CONTUFLEX', 'Covitech', 'CP PLACAS', 'CP Placas Eletrônicas', 'Dako', 'DISMAR', 'Electrolux', 'emicol', 'Emmeti', 'Esmaltec', 'FISCHER', 'Fogatti', 'Formalivre', 'Galvocalhas', 'GDN CAPAS', 'ILPEA', 'Itatiaia', 'LG', 'MIDEA', 'Mold', 'mondial', 'Mueller', 'Nardelli', 'NAÇÃO DETAIL', 'OU', 'PANASONIC', 'PEÇAS BRASTEMP / CONSUL', 'PHILCO', 'Progás', 'Samsung', 'SEMELHANTE ', 'Suggar', 'TND', 'Tramontina', 'Valtec Shop', 'VENAX', 'Venâncio', 'Viag Capas', 'Vida Pratika', 'VIP CAPAS', 'Wanke', 'WHIRLPOOL']);
        $color = fake()->randomElement(['Branco', 'Preto', 'Cinza', 'Vermelho']);
        $voltage = fake()->randomElement(['110v', '220v']);

        return [
            'name' => $category . ' ' . $brand . ' - ' . $color . ' ' . $voltage,
            'description' => fake()->paragraph(2),
            'category' => $category,
            'brand' => $brand,
            'color' => $color,
            'voltage' => $voltage,
            'weight' => fake()->randomFloat(2, 1, 900) . fake()->randomElement(['g', 'kg']),
            'height' => fake()->randomFloat(2, 1, 200),
            'width' => fake()->randomFloat(2, 1, 200),
            'depth' => fake()->randomFloat(2, 1, 200)
        ];
    }
}
