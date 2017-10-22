<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class Article extends Model
{

    use SoftDeletes;
    //
    //protected $table = 'articles';
    //protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'uuid';

    //public $timestamps = false;
    protected $fillable = ['id','name','text'];
    //protected $guarded = ['*'];
    protected $dates=['deleted_at'];


}
