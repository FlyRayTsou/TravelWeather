<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    private $weather_api_key = 'c17055de8dfd5c5f23ca798461ee906d';
    private $weather_api_url = 'http://api.openweathermap.org/data/2.5/';
    private $citys = ['tokyo'=>'Jezael Melgoza', 
                      'yokohama'=>'Jezael Melgoza',
                      'kyoto'=>'Sorasak',
                      'osaka'=>'Koi Visuals',
                      'sapporo'=>'Jaeyoung Geoffrey',
                      'nagoya'=>'Teo Zac'];

    public function index()
    {
        $weathers = [];
        foreach ($this->citys as $city => $author)
        {
            $weathers[$city] = $this->getCurrentWeatherByCityName($city, $author);
            $weathers[$city]['author'] = $author;
        }
        return view("weather")->with("weathers", $weathers);
    }

    private function getCurrentWeatherByCityName($city, $author)
    {
        $client = new \GuzzleHttp\Client();
        $api_method = 'weather';
        $response = $client->request('GET', $this->weather_api_url.$api_method.'?q='.$city.'&APPID='.$this->weather_api_key);
        return json_decode($response->getBody(), true);
    }
}
