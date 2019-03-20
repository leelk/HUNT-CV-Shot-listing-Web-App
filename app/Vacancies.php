<?php

namespace App;

use App\Admin;

use Illuminate\Database\Eloquent\Model;

    class Vacancies extends Model
{
    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }
}
