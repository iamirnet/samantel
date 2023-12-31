<?php


namespace iAmirNet\SamanTel\SoapMethods;


trait GetStatuses_OriginalID
{
    public function getStatuses_OriginalID(array $checkingMessageIds) {
        $parameters = [
            'checkingMessageIds' => $checkingMessageIds,
        ];
        $result = $this->request('getStatuses_OriginalID', $parameters);
        return array_map(function ($item) {
            $is_e = $this->getError($item, null);
            return  (object) ['status' => !$is_e, 'message' => $is_e];
        }, $result);
    }
}
