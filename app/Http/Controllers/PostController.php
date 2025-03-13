<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function show($id){
        $key=env('NEWS_API_AI');
        $cacheKey = $id;
        $cacheHours = 3;
        $url= "https://eventregistry.org/api/v1/article/getArticle?articleUri={$id}&resultType=info&apiKey={$key}";


        $responseData=Cache::remember($cacheKey,now()->addHour($cacheHours),function() use($url){

            $response=Http::withoutVerifying()->get($url);
            if($response->successful()){
                return $response->json();
            }else{
                return null;
            }
            
        });

       if($responseData){
        return view('post',['post'=>$responseData[$id]['info']]);
       }else{
        return view('post',['post'=>null]);
       }
    }


}
