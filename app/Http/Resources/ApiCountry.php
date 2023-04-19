<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Http;

class ApiCountry extends JsonResource
{
    public static $wrap = false;
    public function toArray($request)
    {
        $GetCities = Http::withHeaders([
            'Content-Type' => 'application/json; charset=UTF-8',
            'charset' => 'utf-8'
        ])->get('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/countries.json');
        $array = json_decode($GetCities, true);
        foreach ($array as $value) {
            $Country[] = $value["name"];
        }
        return $Country;
    }
}
