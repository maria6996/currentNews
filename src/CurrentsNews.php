<?php
namespace lightweb\currentsnews;
use Illuminate\Support\Facades\Http;

class CurrentsNews
{
    public static function getNews()
    {

//        $client = App\Http\::get('https://api.currentsapi.services/v1/latest-news', 'apikey'=>config('currentsnews.api_key'));
//        dd(config('currentsnews.api_key'));

        $client = Http::get('https://newsapi.org/v2/everything',[
            'apiKey' =>config('currentsnews.api_key'),
            'q' =>'tesla',
            'from' =>'2022-03-13',
            'sortBy' =>'publishedAt',
        ]);
        return $client->json();
    }
}
