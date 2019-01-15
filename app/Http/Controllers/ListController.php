<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ListController extends Controller
{
    public function create()
    {	  
  
        $headers = array(
        'Content-Type' => 'text/csv');

        $filename = "contacts.csv";
    	$handle = fopen($filename, 'r');

	    while (!feof($handle) ) {
	        $lineoftexts[] = fgetcsv($handle, 1024);
	    }
	    fclose($handle);
    	
    	foreach ($lineoftexts as $line) {
    		$mylines[] = $line;  //covert array to string
    	}
        
        array_slice($mylines, 1, count($mylines));
        // dd($mylines);
    	return view('vendor.adminlte.listtable')->with(array('mylines'=>$mylines)); ;
    }
      public function store(Request $request)
    {
  	}

  }

