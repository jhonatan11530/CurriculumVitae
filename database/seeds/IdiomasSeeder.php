<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdiomasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('idiomas')->insert([
            array('nombre' => 'Chino mandarín'),
            array('nombre' => 'Español'),
            array('nombre' => 'Inglés'),
            array('nombre' => 'Hindi'),
            array('nombre' => 'Árabe'),
            array('nombre' => 'Portugués'),
            array('nombre' => 'Bengalí'),
            array('nombre' => 'Ruso'),
            array('nombre' => 'Japonés'),
            array('nombre' => 'Punjabi'),
            array('nombre' => 'Alemán'),
            array('nombre' => 'Javanés'),
            array('nombre' => 'Francés'),
            array('nombre' => 'Telugu'),
            array('nombre' => 'Vietnamita'),
            array('nombre' => 'Coreano'),
            array('nombre' => 'Tamil'),
            array('nombre' => 'Turco'),
            array('nombre' => 'Italiano'),
            array('nombre' => 'Yue (Cantones)'),
            array('nombre' => 'Urdu'),
            array('nombre' => 'Min Nan'),
            array('nombre' => 'Polaco'),
            array('nombre' => 'Bhojpuri'),
            array('nombre' => 'Ucraniano'),
            array('nombre' => 'Igbo'),
            array('nombre' => 'Persa (Farsi)'),
            array('nombre' => 'Xiang'),
            array('nombre' => 'Malayalam'),
            array('nombre' => 'Sundanés'),
            array('nombre' => 'Marathi'),
            array('nombre' => 'Hakka'),
            array('nombre' => 'Serbio'),
            array('nombre' => 'Jin'),
            array('nombre' => 'Hokkien'),
            array('nombre' => 'Árabe egipcio'),
            array('nombre' => 'Pashto'),
            array('nombre' => 'Kannada'),
            array('nombre' => 'Oriya'),
            array('nombre' => 'Azerbaiyano'),
            array('nombre' => 'Hausa'),
            array('nombre' => 'Malayo'),
            array('nombre' => 'Punjabi Occidental'),
            array('nombre' => 'Oriya'),
            array('nombre' => 'Fula'),
            array('nombre' => 'Birmano'),
            array('nombre' => 'Amárico'),
            array('nombre' => 'Oromo'),
            array('nombre' => 'Zhuang'),
            array('nombre' => 'Sinhala'),
        ]);
    }
}
