<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{

    public function isRole()
    {
        if (Auth::user()->role_id == User::ROLE_ADMIN) {
            return 'admin';
        }
        if (Auth::user()->role_id == User::ROLE_MODERATOR) {
            return 'moderator';
        }
        return 'user';
    }


}
