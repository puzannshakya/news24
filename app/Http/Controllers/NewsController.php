<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;
use App\Category;

class NewsController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    //To save the new News
    public function store(Request $request)
    {

        try {
            $this->validate($request, [

                'title' => 'required',
                'content' => 'required',
                'author' => 'required',
                'publish_date' => 'required',
                'categoryArr' => 'required',



            ]);
        } catch (ValidationException $e) {
        }


        $contentt=$request -> input('content');
        $highlights = implode(' ', array_slice(explode(' ', $contentt), 0, 50));

        $a=implode(' ', array_slice(explode(' ', $contentt), 0, 1));


        $array_category= $request->input('categoryArr');


        $cat_id= $a.rand(0,1000).$array_category[0];



            $news = new News;
            $news->title = $request->input('title');
            $news->content = $contentt;
            $news->highlights= $highlights;
            $news->author= $request -> input('author');
            $news->publish_date =$request -> input('publish_date');


            $news->category_id   = $cat_id;
            $news->category_name  = implode(",", $array_category);
            $news->save();







        return redirect('/view_categories')->with('status','News Saved');




    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }



    //To Update existing news

    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [

                'title' => 'required',
                'content' => 'required',
                'author' => 'required',
                'publish_date' => 'required',
                'categoryArr' => 'required',



            ]);
        } catch (ValidationException $e) {
        }




        $contentt=$request -> input('content');
        $highlights = implode(' ', array_slice(explode(' ', $contentt), 0, 50));

        $a=implode(' ', array_slice(explode(' ', $contentt), 0, 1));


        $array_category= $request->input('categoryArr');


        $cat_id= $a.rand(0,1000).$array_category[0];



        $news = News::find($id);
        $news->title = $request->input('title');
        $news->content = $contentt;
        $news->highlights= $highlights;
        $news->author= $request -> input('author');
        $news->publish_date =$request -> input('publish_date');


        $news->category_id   = $cat_id;
        $news->category_name  = implode(",", $array_category);

        $news->save();


        return redirect('/view_categories')->with('status','News Updated');

    }

    //To Delete the news
    public function destroy($id)
    {

        $finds = DB::table('news')->where('id', $id);
        $finds->delete();

        return redirect('/view_categories')->with('status','News Deleted');


    }




    //To get the list of news of a particular category
    public function getNewsList($cat_name)
    {

     /*   $finds = DB::table('news')->where('category_name', '%'.$cat_name.'%')->orderByDesc('id')->get();*/


        $news_list = DB::table('news')->where('category_name', 'like', '%'.$cat_name.'%')->orderByDesc('id')->get();




       return view('news/view_list_news')->with(compact('news_list','cat_name'));

    }

    //to  retreieve a particular news
    public function getNews($id)
    {

        $finds = DB::table('news')->where('id', $id)->first();







        return view('news/view_news')->with('news', $finds);

    }



    //To edit a particular news
    public function editNews($id)
    {

        $news = DB::table('news')->where('id', $id)->first();

        $categories = Category::all();

              $categoryArr=explode(",",$news->category_name);



        return view('news/edit_news')->with(compact('news', 'categories','categoryArr'));

    }
}
