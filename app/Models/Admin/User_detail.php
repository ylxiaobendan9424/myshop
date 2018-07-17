<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class User_detail extends Model
{
    //
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'user_detail';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['id','u_id','nickname','sex'];

}
