<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Dingdan extends Model
{
    //
     /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'orders';

    protected $primaryKey = 'id';

    public $timestamps = false;

    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = ['u_id','cnt','sum','status','create_at','name','phone','address'];
}
