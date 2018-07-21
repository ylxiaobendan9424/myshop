<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
      
    protected $table = 'collection';

    protected $primaryKey = 'id';

    public $timestamps = false;


    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = ['id','goods_id','user_id'];
    public function goodspic(){
    	return $this->hasMany('App\Models\Admin\Goodspic','gid');
    }
}
