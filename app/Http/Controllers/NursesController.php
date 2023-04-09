<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\QueryException ;
class NursesController extends Controller
{
    function up() {
        Schema::create('nursess', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('duty');
            $table->string('status');

            $table->timestamps();
        });
    }
   
   
    
}
