<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Article extends Model
{

    use SoftDeletes;
    //
    //protected $table = 'articles';
    //protected $primaryKey = 'id';


    //public $timestamps = false;
    protected $fillable = ['id','name','text'];
    //protected $guarded = ['*'];
    protected $dates=['deleted_at'];
    protected $casts = [

        'text'=>'array'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function getNameAttribute($value){

        return 'Hello World - '.$value.'- Hello';
    }
    public function setNameAttribute($value){

        //

        $this->attributes['name']= '| '.$value.' |';
    }

}
