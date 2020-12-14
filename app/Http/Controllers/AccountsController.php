<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\UserInformation;
use Carbon\Carbon;

class AccountsController extends Controller
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
        $user_information = Auth::user()->users_information;

        return view('accounts.index', ['user_information' => $user_information]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'firstname' => ['required', 'string', 'min:5', 'max:50'],
            'lastname' => ['required', 'string', 'min:5', 'max:50'],
            'middlename' => ['required', 'string', 'min:5', 'max:50'],
            'contact' => ['required', 'string', 'min:10', 'max:20'],
        ]);

        $user_information = new UserInformation;
        $user_information->user_id = Auth::id();
        $user_information->firstname = $request->input('firstname');
        $user_information->lastname = $request->input('lastname');
        $user_information->middlename = $request->input('middlename');
        $user_information->contact = $request->input('contact');
        $user_information->save();

        return redirect("account")->with('success', 'Your profile has been created');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_information_id)
    {
        $validatedData = $request->validate([
            'firstname' => ['required', 'string', 'min:5', 'max:50'],
            'lastname' => ['required', 'string', 'min:5', 'max:50'],
            'middlename' => ['required', 'string', 'min:5', 'max:50'],
            'contact' => ['required', 'string', 'min:10', 'max:20'],
        ]);

        $user_information = UserInformation::find($user_information_id);
        $user_information->user_id = Auth::id();
        $user_information->firstname = $request->input('firstname');
        $user_information->lastname = $request->input('lastname');
        $user_information->middlename = $request->input('middlename');
        $user_information->contact = $request->input('contact');
        $user_information->save();

        return redirect("account")->with('success', 'Your profile has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
