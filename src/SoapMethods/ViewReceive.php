<?php


namespace iAmirNet\SamanTel\SoapMethods;


trait ViewReceive
{
    public function viewReceive($number, $id = null){
        $parameters = [
            'number' => $number,
            'id' => $id,
        ];
        $result = $this->request('ViewReceive', $parameters);
        foreach ($result as $index => $item) {
            $result[$index] = [];
            $result[$index]['status'] = is_numeric($item->ID);
            if ($result[$index]['status']) {
                $result[$index]['id'] = $item->ID;
                $result[$index]['from'] = $item->drom;
                $result[$index]['date'] = $item->Date;
                $result[$index]['text'] = $item->Body;
            } else $result[$index]['msg'] = $this->getError($item->ID);
            $result[$index] = (object) $result[$index];
        }
        return count($result) == 1 ? $result[0] : $result;
    }
}
