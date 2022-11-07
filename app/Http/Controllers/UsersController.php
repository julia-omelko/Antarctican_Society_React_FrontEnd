<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use DB;
use Illuminate\Pagination\Paginator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        //$stations = DB::select('SELECT * FROM posts');
        $users = Users::all();
        $users = Users::paginate(13);

        //dd($stations);
        return view('pages.users')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.createusers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'FirstName' => 'required',
            'LastName' => 'required',
            'Organization' => 'required',
        ]);

        //Create user
        $user = new Users;
        $user->member_id;
        $user->FirstName = $request->input('FirstName');
        $user->LastName = $request->input('LastName');
        $user->Organization = $request->input('Organization');
        $user->user_id = auth()->user()->id;
        $user->save();

        return redirect('/users')->with('success', 'User Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($member_id)
    {
        $user = Users::find($member_id);
        return view('pages.showusers')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($member_id)
    {
        $user = Users::find($member_id);
        return view('pages.editusers')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $member_id)
    {
            $this->validate($request, [
            'FirstName' => 'required',
            'LastName' => 'required',
            'Organization' => 'required',
        ]);

        //Update post
        $user = Users::find($member_id);
        //$station->Station_ID = $station->Station_ID;
        $user->FirstName = $request->input('FirstName');
        $user->LastName = $request->input('LastName');
        $user->Organization = $request->input('Organization');
        $user->save();

        return redirect('/users')->with('success', 'User Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($member_id)
    {
        $user = Users::find($member_id);
        $user->delete();
        return redirect('/users')->with('success', 'User Deleted');
    }
}

