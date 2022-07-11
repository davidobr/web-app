<?php

namespace App\Http\Controllers;
use App\Http\Controllers\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function fetchData(Request $request)
    {
        $APIKey = "API Key goes here";
        $request = request()->get('weather');
        //$request = "London";
        $response = Http::get('http://api.weatherapi.com/v1/current.json?key=' . $APIKey . '&q=' . $request . '&aqi=no');

        $data = array
        (
            'location'=>$response['location']['name'],
            'current'=>$response['current']['temp_c'],
            'feels like'=>$response['current']['feelslike_c'],
            'condition'=>$response['current']['condition']['text'],
            'icon'=>$response['current']['condition']['icon'],
        );
        
        return view('weather-checker', with([
                                            "location"=>$data['location'], 
                                            "current"=>$data['current'], 
                                            "feelslike"=>$data['feels like'], 
                                            "condition"=>$data['condition'],
                                            "icon"=>$data['icon'],
                                        ]));
    }

}
