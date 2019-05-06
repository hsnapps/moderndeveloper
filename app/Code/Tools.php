<?php

namespace App\Code;

class Tools {
    public static function CallAPI($url, $method = 'GET', $data = null) {
        $curl = curl_init();

        switch ($method) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data){
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                }
                break;

            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;

            default:
                if ($data) {
                    $url = sprintf("%s?%s", $url, http_build_query($data));
                }
        }

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        $result = curl_exec($curl);

        if($result === FALSE) {
            $error = curl_error($curl);
            logger($error);
        }

        curl_close($curl);
        return $result;
    }
}
