<?php

namespace App\Http\Controllers;
use App\Models\DashModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
   	
    public function re()
    {
	  return view('dashboard');
    }
}
