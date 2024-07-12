<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use IsAdmin;
use App\setting;
use App\Category;
use App\Role;
use App\User;
use App\Cause;
use File;
use Auth;
use Validator;

class dashboardCauseController extends Controller
{


  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('admin');
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $Causes = Cause::with('Category')->simplePaginate(10);
    return view('dashboard.dashboardCauses.index', compact('Causes'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $Categores = Category::all();
    return view('dashboard.dashboardCauses.create', compact('Categores'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //validate
    $this->validate($request, [
      'image' => 'mimes:jpeg,png,jpg', //only allow this type extension file.
    ]);
    $Cause = new Cause;
    $Cause->Title_en = $request->input('Title_en');
    $Cause->slug = $request->input('slug');
    $Cause->Raised = $request->input('Raised');
    $Cause->Goal = $request->input('Goal');
    $Cause->Content_en = $request->input('Content_en');
    $Cause->Donors = $request->input('Donors');
    $Cause->category_id = $request->input('category_id');
    // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
    if ($request->file('image')) {
      $file = $request->file('image');
      $destinationPath = public_path('images');
      $viewimage = 'images/';
      $filename = $viewimage . $file->getClientOriginalName();
      $file->move($destinationPath, $filename);
      $Cause->image = $filename;
      // THIS TO SAVE  Settings UPDATE //
      $Cause->save();
    } else {
      $Cause->save();
    }
    $Cause->save();

    return redirect()->TO('dashboard/dashboardCauses')

      ->with('success', 'Cause created successfully.');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $slug
   * @return \Illuminate\Http\Response
   */
  public function edit($slug)
  {
    //To Get All Cause 
    $Cause = Cause::where('slug', '=', $slug)->firstOrFail();
    //To Get All Categores
    $Categores = Category::all();
    return view('dashboard.dashboardCauses.edit', compact('Cause', 'Categores'));
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
    $Cause = Cause::where('slug', '=', $slug)->firstOrFail()
      ->update(
        [
          'Title_en' => $request->input('Title_en'),
          'slug' => $request->input('slug'),
          'Raised' => $request->input('Raised'),
          'Goal' => $request->input('Goal'),
          'Content_en' => $request->input('Content_en'),
          'Donors' => $request->input('Donors'),
          'category_id' => $request->input('category_id'),
        ]
      );
    request()->validate([

      'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

    ]);
   /*  $Cause->Title_en = $request->input('Title_en');
    $Cause->slug = $request->input('slug');
    $Cause->Raised = $request->input('Raised');
    $Cause->Goal = $request->input('Goal');
    $Cause->Content_en = $request->input('Content_en');
    $Cause->Donors = $request->input('Donors');
    $Cause->category_id = $request->input('category_id');
    // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE // */
    if ($request->file('image')) {
      Storage::delete($Cause->image);
      //  File 
      $file = $request->file('image');
      $destinationPath = public_path('images');
      $viewimage = 'images/';
      $filename = $viewimage . $file->getClientOriginalName();
      $file->move($destinationPath, $filename);
      $Cause->image = $filename;
      // THIS TO SAVE  Settings UPDATE //
      $Cause->save();
    }
    // $Cause->save();

    return redirect()->TO('dashboard/dashboardCauses')

      ->with('success', 'Cause Update successfully.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    // Causes Delete
    $Cause = Cause::findOrFail($id);
    Storage::delete($Cause->image);
    // File 
    $Cause->delete();
    return back()->with('Delete', 'Cause Deleted successfully');
  }
}
