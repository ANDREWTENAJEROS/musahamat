<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_lines extends Model
{

    // Table Name
    protected $table = 'product_lines';
    // Primary Key
    public $primaryKey = 'product_line_id';

    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User');
    }

    
}
