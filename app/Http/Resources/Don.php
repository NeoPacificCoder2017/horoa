<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Don extends Resource
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
            'prenom' => $this->prenom,
            'mail' => $this->mail,
            'password' => $this->password,
            'telephone' => $this->telephone,
            'addresse' => $this->addresse,
            'don' => $this->don,
            'mode_don_id' => $this->mode_don_id,
            'date' => $this->date,
            'heure' => $this->heure,
            'validate' => $this->validate,
            'admin_id' => $this->admin_id,
            'somme_verse' => $this->somme_verse,
            'operation_id' => $this->operation_id
        ];
    }

    public function with($request){
        return [
            'version' => '1.0.0',
            'author_url' => url('http://monadressbidon.com'),
        ];
    }
}
