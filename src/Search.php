<?php

namespace Rclemon93\DigitalCep;

class Search
{
    private $url = "https://viacep.com.br/ws/";

    public function getAddressFromZipCode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = $this->getFromServer($zipCode);

        return (array) json_decode($get);
    }

    private function getFromServer($zipCode)
    {
        $get = file_get_contents($this->url . $zipCode . "/json/");

        return $get;
    }
}
