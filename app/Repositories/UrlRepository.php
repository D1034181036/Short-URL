<?php

namespace App\Repositories;

use App\Models\Url;

class UrlRepository
{
    private $model;

    public function __construct(Url $model){
        $this->model = $model;
    }

    public function getFullUrl($code){
        return $this->model->where('short_url', $code)->first();
    }

    public function generateShortUrl($full_url){
        return $this->model->firstOrCreate(
            [
                'full_url' => $full_url,
            ],
            [
                'short_url' => $this->generateRandomCode(),
            ]
        );
    }

    private function generateRandomCode(){
        $code = strtoupper(substr(md5(uniqid()), 0, 6));
        
        while($this->model->where('short_url', $code)->exists()){
            $code = strtoupper(substr(md5(uniqid()), 0, 6));
        }

        return $code;
    }
}