<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@getHome');        //for Routing to Home page
Route::get('/create_category', 'PagesController@getCreateCategory');        //for routing to create category form page


Route::get('/create_news', 'CategoriesController@getCategoryForCreateNews');        //To get Categpry list for displaying in checkboxes  in create news form
Route::get('/view_categories', 'CategoriesController@getCategoryForViewCategories');  //In nav bar , when you click on News , It will routed to this to show list of categories
Route::resource('categories','CategoriesController');                   //  for CRUD operations of Categories


Route::get('/view_newslist/{category}', 'NewsController@getNewsList');            // to get list of news of particular category
Route::get('/view_news/{news}', 'NewsController@getNews');                           // to be routed to View_news page to read the whole news
Route::get('/edit_news/{news}', 'NewsController@editNews');             // to edit the news
Route::resource('news','NewsController');          //for CRUD operation of News


