<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
// A resource class represents a single model that needs to be transformed into a JSON
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    //Every resource class defines a toArray method which returns the array of attributes that should be converted to JSON when sending the response.
    {
        //return parent::toArray($request);
        return [
            'id'=>$this->id,//id pf thr article
            'title'=>$this->title,
            'body'=>$this->body
               ];
    }
    //we can access model properties directly from the $this variable. This is because a resource class will automatically proxy property and method access down to the underlying model for convenient access. Once the resource is defined, it may be returned from a route or controller

     public function with($request)//to return stuff with data
     {
        return [
            'version'=>'1.0.0',
            'author_url'=> url('http://google.com')
        ];
     }
}
