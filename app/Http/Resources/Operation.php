<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Operation extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'date_debut' => $this->date_debut,
            'date_fin' => $this->date_fin,
            'createur_id' => $this->createur_id,
            'total_recolter' => $this->total_recolter,
            'total_promis' => $this->total_promis
        ];
    }

    public function with($request){
        return [
            'version' => '1.0.0',
            'author_url' => url('http://momo.com'),
        ];
    }
}