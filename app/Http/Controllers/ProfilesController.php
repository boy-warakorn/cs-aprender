<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        
        $user = DB::table('users')->where('id',$id)->first();
        
        return view('edit-tutor')->with('user',$user);
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
        // $user = DB::table('users')->where('id',Auth::id())->first();
        // $user->name = $request->input('name');
        // $user->nickname = $request->input('nickname');
        // $user->nickname = $request->input('subject');
    
        //$user->COL_NAME = $request->input('NAME');
        DB::table('users')->where('id', Auth::id())->update(['name' => $request->input('name'), 'nickname' => $request->input('nickname'),
        'institution'=> $request->input('institution'), 'status' => $request->input('status'), 'faculty' => $request->input('faculty'),
        'department' => $request->input('department'), 'subject' => $request->input('subject'), 'level' => $request->input('level')]);
        

        return redirect('tutor-setting');
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
