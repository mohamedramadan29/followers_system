<?php

namespace App\Services;

class Api
{
    /** API URL */
    public $api_url = 'https://drd3m.me/api/v2';

    /** Your API key */
    public $api_key = '698537e2ce4e3e8069ce577ee8ed160e';

    /** Get services */
    public function services()
    {
        return json_decode(
            $this->connect([
                'key' => $this->api_key,
                'action' => 'services',
            ])
        );
    }

    /** Connect to API */
    private function connect($data)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->api_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query($data),
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }
}

// // استدعاء الكلاس واستخدامه في مكان آخر
// $api = new Api();

// // جلب الخدمات
// $services = $api->services(); // Return all services
// //dd($services);
