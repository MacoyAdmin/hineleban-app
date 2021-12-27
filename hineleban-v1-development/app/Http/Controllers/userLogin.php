<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class userLogin extends Controller
{
    function getData(Request $req)
    {
        
        $data=$req->input();  
        $query =  DB::select('select * from customertbls where emailaddress="'.$data['username'].'" and password="'.$data['userPass'].'"')[0];
        if($query->FirstName != '')
        {
        $req->session()->put('firstname',$query->FirstName);
        $req->session()->put('lastname',$query->LastName);
        $req->session()->put('customerId',$query->CustomerId);
        $req->session()->put('contactno',$query->ContactNo);
        $req->session()->put('emailaddress',$query->EmailAddress);
        //$req->session()->put('userPass',$data['userPass']);
        }
        
        return redirect('/');
   
    }
}