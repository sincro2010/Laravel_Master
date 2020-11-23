<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YandexWeatherController extends Controller
{
    
    public function parseWeather() 
    {
        $timestamp = time();
       
        $opts = array(
            'http' => array(
              'method' => "GET",
              'header' => "X-Yandex-API-Key: 878a60b0-0163-4d8a-88b8-2c5a6570f185"
            )
          );

        $context = stream_context_create($opts);
        $contents = file_get_contents('https://api.weather.yandex.ru/v2/forecast?geoid=191&lang=ru', false,
            $context);
        $clima = json_decode($contents);



        

        $time = $clima->fact->obs_time;
        $name = $clima->info->tzinfo->name;
        $daytime = $clima->fact->daytime;
        $temp = $clima->fact->temp;
        $windspeed = $clima->fact->wind_speed;
        $pressure = $clima->fact->pressure_mm;
        $humidity = $clima->fact->humidity;

    
        return view('weather', ['time' => $time, 'name' => $name, 'daytime' => $daytime, 'temp' => $temp, 'windspeed' => $windspeed, 'pressure' => $pressure, 'humidity' => $humidity]
        );
    }

}

