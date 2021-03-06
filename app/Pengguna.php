<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id_user';

    public function komentars()
    {
        return $this->hasMany('App\Komentar','id_user','id_user');
    }

    public function projects()
    {
        return $this->hasMany('App\Project','id_project_owner','id_user');
    }

    public function sent_messages()
    {
        return $this->hasMany('App\Pesan','id_sender','id_user');
    }

    public function recv_messages()
    {
        return $this->hasMany('App\Pesan','id_receiver','id_user');
    }
}
