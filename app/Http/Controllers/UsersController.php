<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function users() {
        $users = Buyer::all();
        return view('/pengguna', ['users' => $users]);
    }
}
