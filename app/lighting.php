<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lighting  extends Model
{
    // Table Name
    protected $table = 'lighting';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = false;

    // public function user(){
    //     return $this->belongsTo('App\User');
    // }

}
