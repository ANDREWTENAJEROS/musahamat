<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier  extends Model
{
    // Table Name
    protected $table = 'supplier';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = false;

    // public function user(){
    //     return $this->belongsTo('App\User');
    // }

}
