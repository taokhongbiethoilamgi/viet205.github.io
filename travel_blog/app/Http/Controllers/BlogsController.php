<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trangchu(){
        $post = Post::orderBy('id_post','DESC')->paginate(4);
        $category = Category::all();
        return view('pages.home')->with(compact('category','post'));
    }
    public function bai_viet($id){
        $get_post = Post::find($id);
        $category = Category::all();
        $relate = Post::where('id_category',$get_post->id_category)->whereNotIn('id_post',[$id])->get();
        return view('pages.details')->with(compact('category','get_post','relate'));
    }
    public function tim_kiem(){
        $tukhoa = $_GET['tukhoa'];

        $get_post = Post::where('title_post','LIKE','%'.$tukhoa.'%')->Orwhere('summary_post','LIKE','%'.$tukhoa.'%')->Orwhere('content_post','LIKE','%'.$tukhoa.'%')->get();
        $category = Category::all();
        return view('pages.search')->with(compact('category','get_post','tukhoa'));
    }
    public function index()
    {
        // $post = Post::all();
        // return view('pages.blogs')->with(compact('post'));
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
        $category = Category::all();
        $get_category = Post::with('category')->where('id_category',$id)->get();
        return view('pages.blogs')->with(compact('get_category','category'));
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
    public function update(Request $request, $id)
    {
        //
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
