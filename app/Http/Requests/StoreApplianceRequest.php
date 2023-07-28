<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplianceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'category' => 'required|in:Adega,Bebedouro e Purificador,Centrífuga de Roupas,Cervejeira Residencial,Coifa e Depurador de Ar,Cooktop,Fogão,Forno,Freezer,Frigobar,Geladeira / Refrigerador,Lava e Seca,Lava-Louças,Máquina de Costura,Máquina de Lavar,Micro-ondas,Secadora de Roupas,Tanquinho',
            'brand' => 'required|in:A PARTS,Agratto,Alado,Aliança,ARNO,Atlas,Benter,Brasforma,Brastemp,Brastemp,Consul,Burdog,Chamalar,CHAMALUX,Clean Capas,Colormaq,CONSUL,Consul/Brastemp,Continental,CONTUFLEX,Covitech,CP PLACAS,CP Placas Eletrônicas,Dako,DISMAR,Electrolux,emicol,Emmeti,Esmaltec,FISCHER,Fogatti,Formalivre,Galvocalhas,GDN CAPAS,ILPEA,Itatiaia,LG,MIDEA,Mold,mondial,Mueller,Nardelli,NAÇÃO DETAIL,OU,PANASONIC,PEÇAS BRASTEMP / CONSUL,PHILCO,Progás,Samsung,SEMELHANTE ,Suggar,TND,Tramontina,Valtec Shop,VENAX,Venâncio,Viag Capas,Vida Pratika,VIP CAPAS,Wanke,WHIRLPOOL',
            'color' => 'required|in:Branco,Preto,Cinza,Vermelho',
            'voltage' => 'required|in:110v,220v,Bivolt',
            'weight' => 'required',
            'height' => 'required|numeric',
            'width' => 'required|numeric',
            'depth' => 'required|numeric'
        ];
    }
}
