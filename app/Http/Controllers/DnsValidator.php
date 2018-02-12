<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DnsValidator extends Controller
{   
    
    public function checkEmail(){
        $mxhostlist = ['g.com','google.com', 'yahoo.com', 'mxn.com'];
        $emailArray = explode('@','math@googrl.com');
        $emailhost = $emailArray[1];

        dump(dns_get_mx($emailhost, $mxhostlist)); 
    }
}
