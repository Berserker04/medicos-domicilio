<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\TypeProfession;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // reports
        $totalClient = User::where("role_id", "=", 3)->get()->count();
        $totalDoctor = User::where("role_id", "=", 2)->get()->count();
        $totalAppointmet = Appointment::all()->count();
        $totalProfessition = TypeProfession::all()->count();
        return view('client.home', compact("totalClient", "totalDoctor", "totalAppointmet", "totalProfessition"));
    }
}
