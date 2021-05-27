<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Session;

class VkLoginController extends Controller
{
    public function login()
    {
        $vkUser = Socialite::driver('vkontakte')->user();

        $user = \App\Models\User::whereEmail($vkUser->getEmail())->first();

        if (!$user) {
            $user = \App\Models\User::create([
                'name' => $vkUser->getName(),
                'email' => $vkUser->getEmail(),
                'vk_id' => $vkUser->getId()
            ]);
        }

        Auth::loginUsingId($user->id);

        Session::regenerate();
        return redirect()->route('dashboard');
    }
}