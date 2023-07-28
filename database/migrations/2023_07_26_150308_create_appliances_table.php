<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appliances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->enum('category', array('Adega', 'Bebedouro e Purificador', 'Centrífuga de Roupas', 'Cervejeira Residencial', 'Coifa e Depurador de Ar', 'Cooktop', 'Fogão', 'Forno', 'Freezer', 'Frigobar', 'Geladeira / Refrigerador', 'Lava e Seca', 'Lava-Louças', 'Máquina de Costura', 'Máquina de Lavar', 'Micro-ondas', 'Secadora de Roupas', 'Tanquinho'));
            $table->enum('brand', array('A PARTS', 'Agratto', 'Alado', 'Aliança', 'ARNO', 'Atlas', 'Benter', 'Brasforma', 'Brastemp', 'Brastemp, Consul', 'Burdog', 'Chamalar', 'CHAMALUX', 'Clean Capas', 'Colormaq', 'CONSUL', 'Consul/Brastemp', 'Continental', 'CONTUFLEX', 'Covitech', 'CP PLACAS', 'CP Placas Eletrônicas', 'Dako', 'DISMAR', 'Electrolux', 'emicol', 'Emmeti', 'Esmaltec', 'FISCHER', 'Fogatti', 'Formalivre', 'Galvocalhas', 'GDN CAPAS', 'ILPEA', 'Itatiaia', 'LG', 'MIDEA', 'Mold', 'mondial', 'Mueller', 'Nardelli', 'NAÇÃO DETAIL', 'OU', 'PANASONIC', 'PEÇAS BRASTEMP / CONSUL', 'PHILCO', 'Progás', 'Samsung', 'SEMELHANTE ', 'Suggar', 'TND', 'Tramontina', 'Valtec Shop', 'VENAX', 'Venâncio', 'Viag Capas', 'Vida Pratika', 'VIP CAPAS', 'Wanke', 'WHIRLPOOL'));
            $table->enum('color', array('Branco', 'Preto', 'Cinza', 'Vermelho'));
            $table->enum('voltage', array('110v', '220v', 'Bivolt'));
            $table->string('weight');
            $table->float('height');
            $table->float('width');
            $table->float('depth');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appliances');
    }
};
