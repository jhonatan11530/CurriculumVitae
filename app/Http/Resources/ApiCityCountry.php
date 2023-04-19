<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Http;

class ApiCityCountry extends JsonResource
{
    public static $wrap = false;
    public function toArray($request)
    {
        $GetCities = Http::withHeaders([
            'Content-Type' => 'application/json; charset=UTF-8',
            'charset' => 'utf-8'
        ])->get('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/cities.json');

        $array = json_decode($GetCities, true);

        foreach ($array as $value) {
            $GetCitie[] = array('state_name' => $value["state_name"], 'name' => $value["name"]);
        }

        $expected = array_filter($GetCitie, function ($value) use ($request) {
            if (strpos($value['state_name'], $request->id) !== false) {
                return $value['state_name'];
            }
        });

        foreach ($expected as $key => $value) {
            $ciudades[] = $value["name"];
        }

        return $ciudades;
    }
}
