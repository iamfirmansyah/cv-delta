<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Message;

use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;


class BlogController extends Controller
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
        $blogs = Blog::latest()->paginate(10);

        return view('admin.blog.index',compact('blogs','messagess'))
                ->with('i',(request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $messagess = Message::latest()->paginate(4);
        return view('admin.blog.create',compact('messagess'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $foto = $request->file('img1');
       $namaFile = Carbon::now()->timestamp . '_' . '.' . $foto->getClientOriginalExtension();
       $foto->move(public_path('upload/'),$namaFile);

       $foto2 = $request->file('img2');
       $namaFile2 = Carbon::now()->timestamp . '__' . '.' . $foto2->getClientOriginalExtension();
       $foto2->move(public_path('upload/'),$namaFile2);
       Blog::create([
            'title' => $request->title,
            'text1' => $request->text1,
            'text2' => $request->text2,
            'writer' => $request->writer,
            'status' => $request->status,
            'category' => $request->category,
            'img1' => $namaFile,
            'img2' => $namaFile2
       ]);
       return redirect ('admin/blog/')->with('success','Data Has Been Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $messagess = Message::latest()->paginate(4);
        return view('admin.blog.show',compact('blog','messagess'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        
        $messagess = Message::latest()->paginate(4);
        return view('admin.blog.edit',compact('blog','messagess'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $fotoLama = $request->fotoLama;
        $foto = $request->file('img1');

        $fotoLama2 = $request->fotoLama2;
        $foto2 = $request->file('img2');

        if(!empty($foto)){
            $foto = $request->file('img1');
           $namaFile = Carbon::now()->timestamp . '_' . '.' . $foto->getClientOriginalExtension();
           $foto->move(public_path('upload/'),$namaFile);
        }else {
            $foto = $fotoLama;
            $namaFile = $foto;

        }
        if(!empty($foto2)){
           $foto2 = $request->file('img2');
           $namaFile2 = Carbon::now()->timestamp . '__' . '.' . $foto2->getClientOriginalExtension();
           $foto2->move(public_path('upload/'),$namaFile2);
        }else {
            $foto2 = $fotoLama2;
            $namaFile2 = $foto2;

        }
            Blog::whereId($blog->id)->update([
            'title' => $request->title,
            'text1' => $request->text1,
            'text2' => $request->text2,
            'category' => $request->category,
            'status' => $request->status,
            'writer' => $request->writer,
            'img1' => $namaFile,
            'img2' => $namaFile2,
       ]);
        return redirect()->route('blog.index')
                ->with('warning','Data Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')
                ->with('destroy','1 Article Has Been Destroy.');
    }
}
