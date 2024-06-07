<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post 
{

    public static function all(){
        $response = Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pkmqdbd/endpoint/getAllNews');
        // mengubah nya menjadi colection untuk mendapatkan bebrapa method pada colection laravel

        if ($response->successful()) {
            // Mengembalikan data dalam bentuk array
            return $response->json();
        } else {
            // Jika terjadi kesalahan, kembalikan array kosong
            return [];
        }

        
    }

    public static function allwisata(){
        $response = Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pkmqdbd/endpoint/getallwisata');
  
        if ($response->successful()) {
            return $response->json();
        } else {
            return [];
        }
    }



    public static function find($_id){

        $databaseblog = static::all();
    //     $hasil = [];
    //     foreach ($databaseblog as $posts){
    //     if ($posts["idblogdb"] === $idblogdb) {
    //         $hasil = $posts ;
    //     }
    // }

    // return $hasil;
    return collect($databaseblog)->firstWhere('_id',$_id);
    }

    public static function findwisata($_id){

        $databaseblog = static::allwisata();
    //     $hasil = [];
    //     foreach ($databaseblog as $posts){
    //     if ($posts["idblogdb"] === $idblogdb) {
    //         $hasil = $posts ;
    //     }
    // }

    // return $hasil;
    return collect($databaseblog)->firstWhere('_id',$_id);
    }

    // Controller.php



    public static function search($request)
    {
        // Make a request to your external API to perform the search
        $keyword = $request->input('search');
        $url = "https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pkmqdbd/endpoint/adddatabyname?judul={$keyword}";
        $response = Http::get($url);

        if ($response->successful()) {
            // If the request is successful, return the JSON response
            return $response->json();
        } else {
            // If there's an error or no results, return an empty array
            return [];
        }
    


    }
   
}
