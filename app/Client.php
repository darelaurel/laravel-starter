<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /*
    **création d'un scope pour status accesible aux controllers
    **migration donne la nomenclature de la table
    **model cree les fonctions liées a la table
    */
    
    //protected $fillable=['nom','email','status'];

    protected $guarded=[];

    protected $attributes=[
        'status'=>'2'
    ];

    public function scopeStatus($query)
    {
        return $query->where('status',1)->get();
    }

    public function entreprise()
    {
        return $this->belongsTo('App\Entreprise');
    }

    //condition sur un attribut
    //utilisé pour la liste des users

    public function getStatusAttribute($attributes)
    {
        return $this->getStatusOptions()[$attributes];
    }

    public function getStatusOptions()
    {
        return [
            '1' =>"Actif",
            '2' =>"Inactif"
        ];
    }

}