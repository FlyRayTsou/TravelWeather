<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
	public function index()
	{
		$api_key = 'c17055de8dfd5c5f23ca798461ee906d';
		$weather_api = 'http://api.openweathermap.org/data/2.5/';
		$get_current_method = 'weather';
		$client = new \GuzzleHttp\Client();
		$citys = ['tokyo'=>'Jezael Melgoza', 'yokohama'=>'Jezael Melgoza', 'kyoto'=>'Sorasak', 'osaka'=>'Koi Visuals', 'sapporo'=>'Jaeyoung Geoffrey', 'nagoya'=>'Teo Zac'];
		$weathers = [];
		foreach ($citys as $city => $author)
		{
			$response = $client->request('GET', $weather_api.$get_current_method.'?q='.$city.'&APPID='.$api_key);
			$weathers[$city] = json_decode($response->getBody(), true);
			$weathers[$city]['author'] = $author;
		}
		return view("weather")->with("weathers", $weathers);
	}
}
