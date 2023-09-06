<?php

use PHPUnit\Framework\TestCase;
use Rclemon93\DigitalCep\Search;

class SearchTest extends TestCase
{
    public function testGetAddressFromZipCodeDefaultUsage() {
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipCode('42710400');

        $esperado = [
            "cep" => "42710-400",
            "logradouro" => "Rua Ministro Antônio Carlos Magalhães",
            "complemento" => "",
            "bairro" => "Buraquinho",
            "localidade" => "Lauro de Freitas",
            "uf" => "BA",
            "ibge" => "2919207",
            "gia" => "",
            "ddd" => "71",
            "siafi" => "3685"
        ];

        $this->assertEquals($esperado, $resultado);
    }

    // public function dadosTeste() {
    //     return [
    //         "Endereço Praça da Sé": [
    //             "cep":"01001000"

    //         ],
    //     ];
    // } paramos na ultima aula
}
?>