<?php
namespace iAmirNet\SamanTel;

class SamanTelSOAP {
    use SoapMethods\Request,
        SoapMethods\Calls,
        SoapMethods\Redirect,
        SoapMethods\Error,
        SoapMethods\Send,
        SoapMethods\SendMultiple,
        SoapMethods\ViewReceive,
        SoapMethods\Balance,
        SoapMethods\DeliveryReport,
        SoapMethods\GetStatuses,
        SoapMethods\GetStatuses_OriginalID,
        SoapMethods\Acknowledge;

    public $userName, $password, $order, $lang = 'fa';

    public function __construct($userName, $password)
    {
        $this->setUserName($userName);
        $this->setPassword($password);
    }
}
