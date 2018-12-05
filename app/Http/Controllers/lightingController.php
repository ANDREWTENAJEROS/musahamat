<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\lighting;

use DB;

class lightingController extends Controller
{
    public function toggle()
    {
        if($value == 0){
            $value = 1;
        }
        else{
            $value = 0;
        }

    }

}
