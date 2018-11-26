<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class withdrawals  extends Model
{
    // Table Name
    protected $table = 'withdrawals';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = false;

    // public function user(){
    //     return $this->belongsTo('App\User');
    // }

}
