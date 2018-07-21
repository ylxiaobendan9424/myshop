<?php

namespace App\Models\home;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'dizhi';

    protected $primaryKey = 'id';

    public $timestamps = false;


    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = ['uid','name','address','xxaddress','phone','status'];
}
