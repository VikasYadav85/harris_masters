<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function re()
    {
	  return view('about');
    }
	   
}
