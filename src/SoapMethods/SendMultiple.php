<?php


namespace iAmirNet\SamanTel\SoapMethods;


trait SendMultiple
{
    public function sendMultiple(array $senders,array $recipients,array $bodys,array $flashes = [],array $checkingMessageIds = [])
    {
        $parameters = [
            'srcNumbers' => $senders,
            'bodys' => $bodys,
            'destNos' => $recipients,
            'flashs' => $flashes,
            'checkingMessageIds' => $checkingMessageIds
        ];
        $result = $this->request('SendMultiple', $parameters);
        foreach ($result as $index => $item) {
            $result[$index] = [];
            $result[$index]['status'] = is_numeric($item->ID);
            if ($result[$index]['status']) {
                $result[$index]['id'] = $item->ID;
            } else $result[$index]['msg'] = $this->getError($item->ID);
            $result[$index] = (object) $result[$index];
        }
        return count($result) == 1 ? $result[0] : $result;
    }
}
