<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserRegisterController extends Controller
{
    public function create()
    {
        return view('vendor.adminlte.register');
    }

    public function store(Request $request)
    {
    	$contact = [];

	    $contact['name'] = $request->get('name');
	    $contact['email'] = $request->get('email');
	    $contact['phone'] = $request->get('phone');
	    $contact['address'] = $request->get('address');
	    $contact['nationality'] = $request->get('nationality');
	    $contact['bday'] = $request->get('bday');
	    $contact['gender'] = $request->get('gender');
	    $contact['modeofContact'] = $request->get('modeofContact');
	    $contact['educationbackground'] = $request->get('educationbackground');
	    
	    // $contact['password'] = $request->get('password');
	    // error_log('Value of name is:::: ');//to print the passed value in console
	    // error_log($contact['name']);
	    // error_log('---------------------------------------');
	     // echo $contact['name'];
	    
	    $filename = "contacts.csv";
	    if (file_exists($filename)) {
    		$handle = fopen($filename, 'a');
	    } else {
	    	$handle = fopen($filename, 'w');
	    			// echo readfile("contact.csv");
        	fputcsv($handle, array('name','email','phone','address','nationality','bday','gender','modeofcontact','educationbackground'));
	    }

		// echo readfile("contact.csv");
        fputcsv($handle, array($contact['name'],$contact['email'],$contact['phone'],$contact['address'],$contact['nationality'],$contact['bday'],$contact['gender'],$contact['modeofContact'],$contact['educationbackground']));
        fclose($handle);
       
	    return redirect()->route('listtable'); 
	    // return view('vendor.adminlte.register');
    }
}
