<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Gonggao extends Model
{
    //
     /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'gonggao';

    protected $primaryKey = 'id';

    public $timestamps = false;

    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = ['title','url','create_at'];
}
