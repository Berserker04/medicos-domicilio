<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\TypeProfession;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
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
    public function index(Request $request)
    {
        //     $textFilter = "Andrés";
        //     $text = $request->get("textFilter");
        //     if (isset($text)) {
        //         $textFilter = $text;
        //     }
        $doctors = User::with(["person", "role", "typeProfession"])
            ->where("role_id", "=", 2)
            ->get();

        $person = $this->person();

        return view('admin.doctor.index', compact("doctors", "person"));

        // => function ($query) use ($textFilter) {
        //     $query->where("firstName", 'LIKE', '%' . "Adrian" . '%');
        // }
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

        $typeProfessions = TypeProfession::all();
        return view('admin.doctor.create', compact("typeProfessions", "person"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $image->move('uploads', $image->getClientOriginalName());

        $person = Person::create([
            "firstName" => $request['firstName'],
            "lastName" => $request['lastName'],
            "document" => $request['document'],
            "birthDate" => $request['birthDate'],
            "image" => $image->getClientOriginalName(),
            "state" => 1
        ]);

        User::create([
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'person_id'  => $person->id,
            'role_id'  => $request['role_id'],
            'typeProfession_id'  => isset($request['typeProfession_id']) ? $request['typeProfession_id'] : null,
            'state'  => 1
        ]);

        return redirect('/doctores');
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
        $typeProfessions = TypeProfession::all();
        $doctor = User::with(["person", "role", "typeProfession"])
            ->where("id", "=", $id)
            ->get()[0];
        return view('admin.doctor.edit', compact("doctor", "typeProfessions", "person"));
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
        $doctor =  User::with(["person", "role", "typeProfession"])
            ->where("id", "=", $id)
            ->get()[0];

        $image = $request->file('image');
        $image->move('uploads', $image->getClientOriginalName());



        $person = Person::find($doctor->person->id);
        $user = User::find($id);


        $person->firstName = $request['firstName'];
        $person->lastName = $request['lastName'];
        $person->document = $request['document'];
        $person->birthDate = $request['birthDate'];
        $person->image = $image->getClientOriginalName();
        $person->save();

        $user->password = Hash::make($request['password']);
        $user->typeProfession_id  = isset($request['typeProfession_id']) ? $request['typeProfession_id'] : null;
        $user->save();

        return redirect('/doctores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $person = Person::find($user->person_id);

        $user->delete();
        $person->delete();

        return redirect('/doctores');
    }
}
