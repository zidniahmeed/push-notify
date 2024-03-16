<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\UserFollow;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function notify(){
        if(auth()->user()){
            $user = User::first();
            auth()->user()->notify(new UserFollow($user));
        }
    }
}
