<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {	
    	$users = DB::select('select * from users');

    	$links = [
    				['anchor' => 'https://laravel.com/docs/5.5/controllers']
    	];

    	return view('threads.profile', compact('users', 'links', 'anchor'));
    }
}
