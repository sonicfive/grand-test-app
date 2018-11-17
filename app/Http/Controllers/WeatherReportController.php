<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class WeatherReportController extends Controller
{

    public function __construct(){
        $this->client = new Client();
    }
     /**
     * Make Request to OpenWeatherMap
     *
     * @param  Request $request [post]
     * @return Response
     */
    public function get(Request $request){
        try{
            $zipcode = $request->zipcode;
            $result = $this->client->post('http://api.openweathermap.org/data/2.5/weather?zip='.$zipcode.'&appid=8563aa29105648a974764cd4bb6db2c4');
            return $result;
        }catch(\Exception $e){
            return response('Exception', 418);
        }
    }
}
