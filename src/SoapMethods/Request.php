<?php


namespace iAmirNet\SamanTel\SoapMethods;

use SoapClient;

trait Request
{
    public function request($method, $parameters) {
        $client = new SoapClient('https://sms.samantel.ir/services/?wsdl');
        $data = array_merge([
            'username' => $this->getUserName(),
            'password' => $this->getPassword()
        ],$parameters);
        //dd($client->__getTypes());
        return $client->$method(...$data);
    }
}
