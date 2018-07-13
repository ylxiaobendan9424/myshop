<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comment';
    protected $primaryKey = 'id';
    public $timestamps = false;


    //可以被批量赋值的属性
    protected $fillable = ['g_id','u_id','content','appraise','create_at'];
}
