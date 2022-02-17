<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //All Admin List
    public function allAdminList(){
        $admins = User::where('is_admin', 1)->get();
        return view('backend.users.admin', compact('admins'));
    }

    //All User List
    public function allUserList(){
        $admins = User::where('is_admin', 1)->get();
        return view('backend.users.user', compact('admins'));
    }
}
