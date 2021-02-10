<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profilmember extends Model
{
    protected $table = 'profilmembers';
    protected $fillable = ['user_id', 'jenis_kelamin', 'alamat'];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
    
}