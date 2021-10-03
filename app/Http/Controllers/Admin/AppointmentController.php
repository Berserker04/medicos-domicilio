<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person = $this->person();
        if (Auth::user()->role_id == 1) {
            $appointments = Appointment::all();
            return view('admin.appointment.indexAdmin', compact("person", "appointments"));
        } else if (Auth::user()->role_id == 2) {
            $appointments = Appointment::with("client", "doctor")->where("doctor_id", Auth::user()->id)->get();
            return view('admin.appointment.index', compact("person", "appointments"));
        }
        $appointments = Appointment::with("client", "doctor")->where("client_id", Auth::user()->id)->get();
        return view('admin.appointment.index', compact("person", "appointments"));
    }

    public function person()
    {
        return User::with(["person", "role", "typeProfession"])
            ->where("id", "=", Auth::user()->id)
            ->get()[0];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $person = $this->person();

        return view('admin.appointment.create', compact("person"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment = new Appointment();

        $appointment->email = $request["email"];
        $appointment->direction = $request["direction"];
        $appointment->cellPhone = $request["cellPhone"];
        $appointment->description = $request["description"];
        $appointment->state = "Pendiente";
        $appointment->client_id = Auth::user()->id;
        $appointment->save();

        return redirect("/citas");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = $this->person();
        $appointment = Appointment::find($id);
        $doctors = User::with("person")
            ->where("role_id", "=", 2)
            ->get();
        return view('admin.appointment.edit', compact("person", "appointment", "doctors"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $appointment = Appointment::find($id);
        $appointment->date = $request['date'];
        $appointment->time = $request['time'];
        $appointment->doctor_id = $request['doctor_id'];
        $appointment->state = "Agendada";
        $appointment->save();


        return redirect('/citas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::find($id);
        $appointment->state = "Cancelada";
        $appointment->save();

        return redirect('/citas');
    }
}
