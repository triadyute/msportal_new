<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Company;
use App\Role;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        $companies = Company::all();
        $roles = Role::all();
        return view('users.index', compact('users', 'companies', 'roles'));
    }

    public function show(User $user){
        return view('users.show', compact('user'));
    }

    public function store(Request $request){
        //return $request->photo_id;
        $data = $request->validate([
            'company' => 'required|integer',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'string|max:255',
            'fax' =>'nullable|string|max:255',
            'photo_id' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_expires_on' => 'nullable|date',
        ]);
        $random_password = base64_encode(random_bytes(15));
        $user = User::create([
            'company_id' => Auth::user()->hasDCRole() ? $data['company'] : Auth::user()->company->id,
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'fax' => $data['fax'],
            'photo_id' => $photo_id,
            'password' => bcrypt($random_password),
            'id_expires_on' => request()->id_expires_on
        ]);
    }
}
