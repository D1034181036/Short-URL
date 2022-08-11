<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenerateUrlRequest;
use App\Repositories\UrlRepository;

class UrlController extends Controller
{
    private $urlRepository;
    
    public function __construct(UrlRepository $urlRepository){
        $this->urlRepository = $urlRepository;
    }

    public function index(){
        return view('index');
    }

    public function redirect($code){
        if($url = $this->urlRepository->getFullUrl($code)){
            $url->clicks++;
            $url->save();

            return redirect($url->full_url);
        }

        return redirect('/');
    }

    public function generate(GenerateUrlRequest $request){
        $url = $this->urlRepository->generateShortUrl($request->full_url);
        
        return view('generate', ['short_url' => "{$request->getHost()}/{$url->short_url}"]);
    }
}
