<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
//use Faker\Provider\Image;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller {

    public function index() {
        $all_category = Category::all();
        return view('category.all_category', compact('all_category'));
    }

    public function create() {
        $all_category = Category::all();
        $all_brand = Brand::all();
        return view('category.add_category', compact('all_category','all_brand'));
    }

    public function store(Request $request) {
        $category = new Category;

        $request->validate([
            'category_name' => 'required|max:255',
            'category_cover_image' => 'file|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'category_menu_image' => 'required|file|image|mimes:jpg,jpeg,png,gif,webp|max:1048'
        ]);

        $response['status'] = 'Error';

        $category->category_name = $request->category_name;
        $category->brand_id = 1;
        $category->slug = $request->category_slug;
        $category->parent_id = $request->parent_id;

//        $cover_photo = $request->file('category_cover_image')->store('category/category_cover');
        $menu_photo = $request->file('category_menu_image')->store('category/category_menu');

//        $category->category_cover_image = $cover_photo;
        $category->category_menu_image = $menu_photo;

//     Start   Category Thumbnail
//        $file = $request->file('category_cover_image')->hashName();
//        $resize = Image::make($request->file('category_cover_image'))->resize(600, 200, function ($constraint) {
//
//                })->encode('jpg');

        // Put image to storage
//        Storage::put("category/category_thumbnail/{$file}", $resize->__toString());
//     End   Category Thumbnail

//        $category->category_thumbnail = 'category_thumbnail/' . $file;
        $category->category_description = $request->category_description;
        $category->meta_title = $request->category_meta_title;
        $category->meta_description = $request->category_meta_description;
        $category->meta_keywords = $request->category_meta_keywords;
        $category->save();

        if(isset($category->id)) {
            $response['status'] = 'Success';
        }

        echo json_encode($response);
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $data['category_data'] = Category::find($id);
        $data['all_category'] = Category::all();
        return view("category.edit_category", $data);
    }

    public function update(Request $request, $id) {
        $category = Category::find($id);
        $request->validate([
            'category_name' => 'required|max:255',
//            'category_cover_image' => 'required|file|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
//            'category_menu_image' => 'required|file|image|mimes:jpg,jpeg,png,gif,webp|max:2048'
        ]);

        $category->category_name = $request->category_name;
        $category->slug = $request->category_slug;
        $category->parent_id = $request->parent_id;
        if ($request->hasFile('category_cover_image')) {
            if (File::exists('storage/app/category/' . $category->category_cover_image)) {
                File::delete('storage/app/category/' . $category->category_cover_image);
                File::delete('storage/app/category/' . $category->category_thumbnail);
            }
            $cover_photo = $request->file('category_cover_image')->store('category_cover');
            $category->category_cover_image = $cover_photo;

            $file = $request->file('category_cover_image')->hashName();
            $resize = Image::make($request->file('category_cover_image'))->resize(600, 200, function ($constraint) {

                    })->encode('jpg');

            Storage::put("category/category_thumbnail/{$file}", $resize->__toString());
            $category->category_thumbnail = 'category_thumbnail/' . $file;
        }
        if ($request->hasFile('category_menu_image')) {
            if (File::exists('storage/app/category/' . $category->category_menu_image)) {
                File::delete('storage/app/category/' . $category->category_menu_image);
            }
            $menu_photo = $request->file('category_menu_image')->store('category_menu');
            $category->category_menu_image = $menu_photo;
        }

        $category->category_description = $request->category_description;
        $category->meta_title = $request->category_meta_title;
        $category->meta_description = $request->category_meta_description;
        $category->meta_keywords = $request->category_meta_keywords;

        $category->save();

        echo json_encode("Done");
    }

    public function destroy($id) {
        $category = Category::find($id);
        $child_category = Category::where('parent_id', $id)->get();
        if (!$child_category->isEmpty()) {
            Category::where('parent_id', $id)->delete();
        }

        $category->delete();

        return redirect('admin/categories');
    }

}
