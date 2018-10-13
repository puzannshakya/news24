<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\News;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }




         // To save new category to the database
    public function store(Request $request)
    {
        try {
            $this->validate($request, [

                'category_name' => 'required',



            ]);
        } catch (ValidationException $e) {
        }

        $category = new Category;

        $name=$request->input('category_name');
        $sname = str_slug($name, '-');
        $category->name = $sname;
        $category->display_name = $name;



        $category->save();

        return redirect('/')->with('status','Category Saved');



    }






    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    //To deleted the selected category and news belonging to that category
    public function destroy($name)
    {

        $query= DB::table('categories')->where('display_name', $name);
        $query->delete();
        $finds = DB::table('news')->where('category_name', $name);
        $finds->delete();

        return redirect('/view_categories')->with('status','Category Deleted');


    }




    //To get Category list for displaying  when clicked on News in navbar
    public function getCategoryForViewCategories()
    {
        $categories = Category::all();


        return view('categories/view_category')->with('categories', $categories);


    }


    //To get Categpry list for displaying in checkboxes  in create news form

    public function getCategoryForCreateNews()
    {
        $categories = Category::all();


        return view('news/create_news')->with('categories', $categories);


    }
}
