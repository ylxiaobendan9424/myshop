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
    protected $fillable = ['goods_id','user_id','content','create_at','appraise'];
}
