<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Http;

class ApiStatesCountry extends JsonResource
{
    public static $wrap = false;
    public function toArray($request)
    {
        $States = Http::withHeaders([
            'Content-Type' => 'application/json; charset=UTF-8',
            'charset' => 'utf-8'
        ])->get('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/states.json');
        $array = json_decode($States, true);

        foreach ($array as $value) {
            $GetCitie[] = array('country_name' => $value["country_name"], 'name' => $value["name"]);
        }

        $expected = array_filter($GetCitie, function ($value) use ($request) {
            if (strpos($value['country_name'], $request->id) !== false) {
                return $value['country_name'];
            }
        });

        foreach ($expected as $value) {
            $estados[] = $value["name"];
        }

        return $estados;
    }
}
