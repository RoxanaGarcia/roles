<?php

namespace App\usuarioperm\Models;
namespace App\usuarioperm\Models;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //es: desde aqui
    //en: from here
    protected $fillable = [
        'name', 'slug', 'description','full-access',
    ];
    public function users(){
        return $this->belongsToMany('App\User')->withTimesTamps();
    }
    public function permissions(){
        return $this->belongsToMany('App\usuarioperm\Models\Permission')->withTimesTamps();
    }
}
