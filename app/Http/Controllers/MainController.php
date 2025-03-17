<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class MainController extends Controller
{
    
    public function index(){
        $key=env('NEWS_API_AI');
        $lang=App::getLocale()=='ar'?'ara':'eng';
        $cacheKey = 'latest_news_response'.$lang;
    $cacheHours = 3;

       $url="https://eventregistry.org/api/v1/article/getArticles?query=%7B%22%24query%22%3A%7B%22%24and%22%3A%5B%7B%22conceptUri%22%3A%22http%3A%2F%2Fen.wikipedia.org%2Fwiki%2FSport%22%7D%2C%7B%22lang%22%3A%22{$lang}%22%7D%5D%7D%7D&recentActivityArticlesMaxArticleCount=50&recentActivityArticlesUpdatesAfterMinsAgo=240&apiKey={$key}";

    $responseData = Cache::remember($cacheKey, now()->addHours($cacheHours), function () use ($url) {
        $response = Http::withoutVerifying()->get($url);
        if ($response->successful()) {
            return $response->json(); // Extract the JSON data
        } else {
            return null; // Or handle the error appropriately
        }
    });


   
        if($responseData['articles']['results']){
            $activity = $responseData['articles']['results'];
            $first20Articles = array_slice($activity, 0, 20);
            return view('main',['articles'=>$first20Articles]);
        }else{
            return view('main',['articles'=>null]);

        }
    }

}
