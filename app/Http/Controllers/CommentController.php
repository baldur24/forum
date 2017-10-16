<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Thread;
use Auth;

class CommentController extends Controller
{
    public function store($id)
    {
    	dd('CommentController');
    }
}