<?php

use PHPUnit\Framework\TestCase;
use Rclemon93\DigitalCep\Search;

class SearchTest extends TestCase
{
    /*
    * @dataProvider dadosTeste
    */ 
    public function testGetAddressFromZipCodeDefaultUsage(string $zipCode, array $esperado)
    {
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipCode($zipCode);

        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste() 
    {
        return [
            "Endereço Praça da Sé" => [
                "01001000",
                    [
                        "cep" => "01001-000",
                        "logradouro" => "Praça da Sé",
                        "complemento" => "lado ímpar",
                        "bairro" => "Sé",
                        "localidade" => "São Paulo",
                        "uf" => "SP",
                        "unidade" => "",
                        "ibge" => "3550308",
                        "gia" => "1004",
                        "ddd" => "11",
                    ]
                ],
            "Endereço Qualquer" => [
                "42710400",
                    [
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
                    ]
                ]
        ];
    } 
}
?>