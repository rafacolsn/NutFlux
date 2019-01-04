<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersAll = User::orderBy('lastname')->get();
        return view('users.index', compact('usersAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'firstname' => 'required',
            'lastname' => 'required',
            'avatar' => 'required',
            
        ]);

        $user = new User([
            'firstname' => $request->get('firstname'),
            'lastname'=> $request->get('lastname'),
            'avatar'=> $request->get('avatar'),
            'account_id' => 1
          ]);
          $user->save();
          return redirect('/users')->with('success', 'User has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usersObj = User::find($id);
        
        return view('users.show', compact('usersObj'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
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
        $request->validate([
            'userFirstname' => 'required',
            'userLastname' => 'required',
            'userAvatar' => 'required',
        ]);
        
        $user = User::find($id);
        $user->firstname = $request->get('userFirstname');
        $user->lastname = $request->get('userLastname');
        $user->avatar = $request->get('userAvatar');
        $user->save();
  
        return redirect()->route('users.index')->with('success','User updated successfully');
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
        $user->delete();
        return redirect()->route('users.index')->with('success', $user->firstname.' '.$user->lastname.' has been deleted');
    }
}