<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Storage;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all_page'] = Page::all();
        return view('page.all_page', $data);
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
        $page = new Page;

        $request->validate([
            'page_title' => 'required|max:255',
            'page_text' => 'required',
            'page_tag' => 'required|max:100',
            'page_image' => 'required|file|image|mimes:jpg,jpeg,png,gif,webp|max:2048'
        ]);

        $page->page_title = $request->page_title;
        $page->page_text = $request->page_text;
        $page->page_tag = $request->page_tag;
        $path = $request->file('page_image')->store('pages');
        $page->page_image = $path;

        $page->save();
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
        $data['page_info'] = Page::find($id);
        //echo "<pre>";print_r($data['page_info']);die();
        return view('page.edit_page', $data);
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
        $page = Page::find($id);

        $request->validate([
            'page_title' => 'required|max:255',
            'page_text' => 'required',
            'page_tag' => 'required|max:100',
            'page_image' => 'file|image|mimes:jpg,jpeg,png,gif,webp|max:2048'
        ]);

        $page->page_title = $request->page_title;
        $page->page_text = $request->page_text;
        $page->page_tag = $request->page_tag;

        if ($page->page_image) {
            $exists = Storage::get($request->pre_img);
            if ($exists) {
                Storage::delete($request->pre_img);
            }
        }

        $path = $request->file('page_image')->store('pages');
        $page->page_image = $path;

        $page->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);

        $exists = Storage::get($page->page_image);
        if ($exists) {
            Storage::delete($page->page_image);
        }
        $page->delete();
        return redirect('pages');
    }
}
