<?php

namespace App\Http\Controllers;
use App\User;
use App\Hospital;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Carbon\Carbon;

use Carbon\Carbon as time;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mytime=time::now();
        $dates=$mytime->toRfc850String();

        $usercount = User::count();
        $hospitalcount = Hospital::count();
        $rolecount = Role::count();
        $permissioncount = permission::count();
        return view('home',compact('usercount','rolecount','permissioncount','dates','mytime','hospitalcount'));
    }
}
