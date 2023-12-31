<?php


namespace iAmirNet\SamanTel\SoapMethods;


trait Balance
{
    public function balance() {
        $result = $this->request('Balance', []);
        return (object) ['status' => true, 'balance' => $result];
    }
}
