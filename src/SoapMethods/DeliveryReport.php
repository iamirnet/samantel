<?php


namespace iAmirNet\SamanTel\SoapMethods;


trait DeliveryReport
{
    public function deliveryReport(string $sender, string $id, string $fromId = null) {
        $parameters = [
            'srcNumber' => $sender,
            'id' => $id,
            'fromid' => $fromId
        ];
        $result = $this->request('DeliveryReport', $parameters);
        foreach ($result as $index => $item) {
            $result[$index] = [];
            $result[$index]['status'] = is_numeric($item->ID);
            if ($result[$index]['status']) {
                $result[$index]['id'] = $item->ID;
                $result[$index]['message'] = $item->Status;
            } else $result[$index]['msg'] = $this->getError($item->ID);
            $result[$index] = (object) $result[$index];
        }
        return count($result) == 1 ? $result[0] : $result;
    }
}
