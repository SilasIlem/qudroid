<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('super');
    }

    public function index()
    {
        return view('role_controlled.superadmin', ['users' => User::all()]);
    }
}
