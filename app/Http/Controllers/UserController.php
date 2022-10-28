<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('isAdmin')->except(['show', 'edit', 'index', 'update']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $cr)
    {
        $cr = Auth::user();
        return view('users.index', compact('cr' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        User::create($data);
        return redirect()->route('users.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(User $cr)
    {
        return view('users.show', compact('cr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(User $cr)
    {
        $cr = Auth::user();
        return view('users.edit')->with('cr', $cr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $cr)
    {
        $request->validate([
            'name' =>'required|min:3|string|max:255',
            'email'=>'required|email|string|max:255'
        ]);

        $cr = Auth::user();
        $cr->name = $request->name;
        $cr->password = $request->password;
        $cr->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }

    public function makeAdmin()
    {

    }

    public function removeAdmin()
    {

    }


}
