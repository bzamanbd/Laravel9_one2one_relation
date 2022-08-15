<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Company;

class MemberController extends Controller
{
    function index(){
        return Member::find(1)->getcompanyData;
    }
}