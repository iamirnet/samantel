<?php


namespace iAmirNet\SamanTel\SoapMethods;


trait Acknowledge
{
    public function acknowledge(array $checkingMessageIds) {
        $parameters = [
            'checkingMessageIds' => $checkingMessageIds,
        ];
        $result = $this->request('Acknowledge', $parameters);
        return array_map(function ($item) {
            $is_e = $this->getError($item, null);
            return  (object) ['status' => !$is_e, 'message' => $is_e];
        }, $result);
    }
}
