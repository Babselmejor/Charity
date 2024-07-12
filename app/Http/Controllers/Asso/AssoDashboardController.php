<?php

namespace App\Http\Controllers\Asso;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\IsAssociations;
use App\setting;
use App\Role;
use App\User;
use Auth;

class AssoDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('associations');
    }

    public function index()
    {
        return view('asso.admin');
    }
}
