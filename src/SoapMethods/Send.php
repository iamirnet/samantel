<?php


namespace iAmirNet\SamanTel\SoapMethods;


trait Send
{
    public function send($sender, $recipient, $body, $flash = 1)
    {
        $parameters = [
            'srcNumber' => $sender,
            'body' => $body,
            'destNo' => is_array($recipient) ? $recipient : [$recipient],
            'flash' => (string)$flash
        ];
        $result = $this->request('Send', $parameters);
        foreach ($result as $index => $item) {
            $result[$index] = [];
            $result[$index]['status'] = is_numeric($item->ID);
            if ($result[$index]['status']) {
                $result[$index]['id'] = $item->ID;
                $result[$index]['mobile'] = $item->Mobile;
            } else $result[$index]['msg'] = $this->getError($item->ID);
            $result[$index] = (object) $result[$index];
        }
        return count($result) == 1 ? $result[0] : $result;
    }
}
