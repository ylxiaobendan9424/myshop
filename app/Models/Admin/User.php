<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'user';

    protected $primaryKey = 'id';

    public $timestamps = false;


    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = ['username','password','email','phone','profile','status','token'];

    public function user_detail()
    {
        return $this->hasOne('App\Models\Admin\User_detail','u_id');
    }
}
