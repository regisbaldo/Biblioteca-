<?php

namespace App\Http\Controllers;

use App\PublishingHouse;
use Illuminate\Http\Request;

class PublishingHouseController extends Controller
{
   public function index(){
        
        dd(PublishingHouse::all());
    }

    public function create(){
        $ph = PublishingHouse::create(['name' => 'editora 2']);
        dd($ph);
    }

}
