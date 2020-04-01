<?php

namespace App\Http\Controllers;

use App\Veneu;
use Auth;
use App\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VeneuController extends Controller
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
        $messagess = Message::latest()->paginate(4);
        $veneus = Veneu::latest()->paginate(10);
        return view('admin/veneu/index',compact('veneus','messagess'))
                ->with('i',(request()->input('page', 1) -1 ) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $messagess = Message::latest()->paginate(4);

        return view('admin.veneu.create',compact('messagess'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $foto = $request->file('pict1');
       $namaFile = Carbon::now()->timestamp . '_' . '.' . $foto->getClientOriginalExtension();
       $foto->move(public_path('upload/'),$namaFile);

       $foto2 = $request->file('pict2');
       $namaFile2 = Carbon::now()->timestamp . '___' . '.' . $foto2->getClientOriginalExtension();
       $foto2->move(public_path('upload/'),$namaFile2);

       $foto3 = $request->file('pict3');
       $namaFile3 = Carbon::now()->timestamp . '___________' . '.' . $foto3->getClientOriginalExtension();
       $foto3->move(public_path('upload/'),$namaFile3);

       $foto4 = $request->file('pict4');
       $namaFile4 = Carbon::now()->timestamp . '______' . '.' . $foto4->getClientOriginalExtension();
       $foto4->move(public_path('upload/'),$namaFile4);

       $foto5 = $request->file('cover');
       $namaFile5 = Carbon::now()->timestamp . '_________' . '.' . $foto5->getClientOriginalExtension();
       $foto5->move(public_path('upload/'),$namaFile5);

       Veneu::create([
            'title' => $request->title,
            'text1' => $request->text1,
            'text2' => $request->text2,
            'location' => $request->location,
            'status' => $request->status,
            'pict1' => $namaFile,
            'pict2' => $namaFile2,
            'pict3' => $namaFile3,
            'pict4' => $namaFile4,
            'cover' => $namaFile5
       ]);
       return redirect ('admin/veneu/')->with('success','Data Has Been Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Veneu  $veneu
     * @return \Illuminate\Http\Response
     */
    public function show(Veneu $veneu)
    {
        $messagess = Message::latest()->paginate(4);
        return view('admin.veneu.show',compact('veneu','messagess'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Veneu  $veneu
     * @return \Illuminate\Http\Response
     */
    public function edit(Veneu $veneu)
    {
        $messagess = Message::latest()->paginate(4);

        return view('admin.veneu.edit',compact('veneu','messagess'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Veneu  $veneu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Veneu $veneu )
    {
        $fotoLama = $request->fotoLama;
        $foto = $request->file('pict1');

        $fotoLama2 = $request->fotoLama2;
        $foto2 = $request->file('pict2');

        $fotoLama3 = $request->fotoLama3;
        $foto3 = $request->file('pict3');

        $fotoLama4 = $request->fotoLama4;
        $foto4 = $request->file('pict4');

        $fotoLama5 = $request->fotoLama5;
        $foto5 = $request->file('cover');

        if(!empty($foto)){
            $foto = $request->file('pict1');
            $namaFile = Carbon::now()->timestamp . '_' . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('upload/'),$namaFile);
        }else {
            $foto = $fotoLama;
            $namaFile = $foto;

        }
        if(!empty($foto2)){
           $foto2 = $request->file('pict2');
           $namaFile2 = Carbon::now()->timestamp . '___' . '.' . $foto2->getClientOriginalExtension();
           $foto2->move(public_path('upload/'),$namaFile2);
        }else {
            $foto2 = $fotoLama2;
            $namaFile2 = $foto2;

        }
        if(!empty($foto3)){
           $foto3 = $request->file('pict3');
           $namaFile3 = Carbon::now()->timestamp . '___________' . '.' . $foto3->getClientOriginalExtension();
           $foto3->move(public_path('upload/'),$namaFile3);
        }else {
            $foto3 = $fotoLama3;
            $namaFile3 = $foto3;

        }
        if(!empty($foto4)){
           $foto4 = $request->file('pict4');
           $namaFile4 = Carbon::now()->timestamp . '______' . '.' . $foto4->getClientOriginalExtension();
           $foto4->move(public_path('upload/'),$namaFile4);
        }else {
            $foto4 = $fotoLama4;
            $namaFile4 = $foto4;

        }
        if(!empty($foto5)){
           $foto5 = $request->file('cover');
           $namaFile5 = Carbon::now()->timestamp . '_________' . '.' . $foto5->getClientOriginalExtension();
           $foto5->move(public_path('upload/'),$namaFile5);
        }else {
            $foto5 = $fotoLama5;
            $namaFile5 = $foto5;

        }

       Veneu::whereId($veneu->id)->update([
            'title' => $request->title,
            'text1' => $request->text1,
            'text2' => $request->text2,
            'location' => $request->location,
            'status' => $request->status,
            'pict1' => $namaFile,
            'pict2' => $namaFile2,
            'pict3' => $namaFile3,
            'pict4' => $namaFile4,
            'cover' => $namaFile5,


       ]);

        return redirect()->route('veneu.index')
                ->with('warning','Data Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Veneu  $veneu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Veneu $veneu)
    {
        $veneu->delete();
        return redirect()->route('veneu.index')
                ->with('destroy','1 Veneu Has Been Destroy.');
    }
}
