<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware("admin");
    }

    public function index()
    {
        return view('role_controlled.admin');
    }

    public function tables()
    {
        return view('role_controlled.table');
    }
}
