<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index()
    {	
    	$threads = DB::select('select * from threads');

    	return view('threads.index', compact('threads'));
    }
    public function create()
    {
    	$tasks = [
    		['title' => 'laga', 'complete' => true, 'anchor' => 'http://www.okkarbakari.is/assets/Bubbibyggirmynd.jpg'],
    		['title' => 'lifa', 'complete' => true, 'anchor' => 'http://makambaonline.com/wp-content/uploads/2016/11/life.jpg'],
    		['title' => 'læra', 'complete' => false, 'anchor' => 'https://qph.ec.quoracdn.net/main-qimg-6039724e28f7bb2d3679f594ac214706-c'],
    		['title' => 'lesa', 'complete' => true, 'anchor' => 'http://cdn2.hubspot.net/hub/360031/file-2431800788-jpg/body_reading.jpg'],
    		['title' => 'lúra', 'complete' => false, 'anchor' => 'http://sites.psu.edu/siowfa15/wp-content/uploads/sites/29639/2015/10/baby.jpg']
    	 ];

    	return view('threads.create', compact('tasks','title','complete', 'anchor'));
    }
    public function show($id)
    {
        $thread = DB::select('select * from threads where id=?', [$id]);
        
        return view('threads.show', compact('thread'));
    }
}