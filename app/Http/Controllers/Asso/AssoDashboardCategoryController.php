<?php

namespace App\Http\Controllers\Asso;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\IsAssociations;
use App\setting;
use App\Category;
use App\Role;
use App\User;
use App\Post;
use Auth;

class AssoDashboardCategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('associations');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Categores //
        $Categores = Category::simplePaginate(10);
        return view('asso.assodashboardCategores.index',compact('Categores'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asso.assodashboardCategores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate //
        $request->validate([

        'title' => 'required',
        'slug' => 'required',

        ]);
        // New Category //
        $Category = new Category;
        $Category->order  = $request->input('order');
        $Category->title  = $request->input('title');
        $Category->slug   = $request->input('slug');
        $Category->color  = $request->input('color');
        $Category->save();  

                return redirect()->TO('asso/assodashboardCategores')

                        ->with('success','Category created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //To Get slug Category
        $Category = Category::where('slug', '=', $slug)->firstOrFail();
        return view('asso.assodashboardCategores.edit',compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        //To Get Category
        $request->Category([

        'title' => 'required',
        'slug' => 'required',

        ]);
        //To EDIT Category
        $Category = Category::where('slug', '=', $slug)->firstOrFail();
        $Category->order  = $request->input('order');
        $Category->title  = $request->input('title');
        $Category->slug   = $request->input('slug');
        $Category->color  = $request->input('color');
        $Category->save();  

                return redirect()->TO('asso/assodashboardCategores')

                        ->with('success','Category Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Category Delete
        $Category = Category::findOrFail($id);
        $Category->delete();
        return back()->with('Delete','Category deleted successfully');
    }
}
