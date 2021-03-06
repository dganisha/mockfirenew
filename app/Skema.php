<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skema extends Model
{
	protected $table = "skema";

    protected $fillable = [
    	'resource_id', 'name_schema', 'type_schema', 'parent_id', 'child_id','field'
    ];

    public function schema() {
        return $this->belongsTo('App\Resource');
    }
    

    public function child(){
        return $this->hasMany('App\Skema', 'parent_id');
    }
}
