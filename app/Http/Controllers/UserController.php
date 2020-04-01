<?php

namespace App\Http\Controllers;

use App\Alluser;
use App\User;
use App\Message;

use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   
        $messages = Message::latest()->paginate(4);
        $users = Alluser::first()->paginate(10);
        return view('admin.user.index', compact('users','messages'))
                ->with('i',(request()->input('page', 1) -1) *5);
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
     * @param  \App\Alluser  $alluser
     * @return \Illuminate\Http\Response
     */
    public function show(Alluser $alluser)
    {
        $messages = Message::latest()->paginate(4);
        return view('admin.user.show',compact('messages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alluser  $alluser
     * @return \Illuminate\Http\Response
     */
    public function edit(Alluser $alluser)
    {
        return view('admin/user/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alluser  $alluser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alluser $alluser)
    {
            $fotoLama = $request->fotoLama;
            $foto = $request->file('foto');
            if(!empty($foto)){
                $foto = $request->file('foto');
                $namaBaru = Carbon::now()->timestamp . '_' . '.' . $foto->getClientOriginalExtension();
                $foto->move(public_path('avatar/'),$namaBaru);
            }else{
                $foto = $fotoLama;
                $namaBaru = $foto;
            }

               User::whereId(auth()->user()->id)->update([
                "name"     => $request->name,
                'email'     => $request->email,
                "foto"        => $namaBaru,
                ]);  
       return redirect ('admin/user')->with('success','Data Has Been Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alluser  $alluser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alluser $alluser)
    {

    }
}
