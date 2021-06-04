<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    //
    function trangchu()
    {
        return view('Pages-user.trangchu');
    }

     function tourdetail()
    {
     return view('Pages-user.tour-detail');
    }

     function booking()
    {
     return view('Pages-user.booking');
    }

}
