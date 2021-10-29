<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class UserEdit extends Controller
{
    /**
     * Show the edit profile page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(): View
    {
        $user = Auth::user();

        return view('scenes.users.edit', compact('user'));
    }
}
