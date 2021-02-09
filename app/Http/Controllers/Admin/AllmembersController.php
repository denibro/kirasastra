<?php

namespace App\Http\Controllers\Admin;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllmembersController extends Controller
{
    public function show(){

        $users = User::all();
        return view('admin.allmembers', compact('users'));
    }
}