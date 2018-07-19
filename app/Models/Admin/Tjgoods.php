<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Tjgoods extends Model
{
    //
    protected $table = 'tjgoods';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['gid','gprice'];

}
