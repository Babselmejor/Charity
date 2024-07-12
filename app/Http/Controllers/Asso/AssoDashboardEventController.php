<?php

namespace App\Http\Controllers\Asso;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Middleware\IsAssociations;
use App\setting;
use App\Category;
use App\Role;
use App\User;
use App\Event;
use File;
use Auth;
use Validator;

class AssoDashboardEventController extends Controller
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
        $Events = Event::simplePaginate(10);
        return view('asso.assodashboardEvents.index',compact('Events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //To Get All dashboardEvents
        return view('asso.assodashboardEvents.create');
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
        $Event = new Event;
        $Event->Title_en = $request->input('Title_en');
        // $Event->Title_ar = $request->input('Title_ar');
        // $Event->Title_gr = $request->input('Title_gr');
        $Event->Content_en = $request->input('Content_en');
        // $Event->Content_ar = $request->input('Content_ar');
        // $Event->Content_gr = $request->input('Content_gr');
        $Event->StartTime = $request->input('StartTime');
        $Event->slug = $request->input('slug');
        $Event->Days = $request->input('Days');
        $Event->Hours = $request->input('Hours');
        $Event->Address = $request->input('Address');
        $Event->Minutes = $request->input('Minutes');
        $Event->FinishTime = $request->input('FinishTime');
        $Event->StartTime = $request->input('StartTime');
        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
        if ($request->file('image')){  
          $file = $request->file('image');
          $destinationPath = public_path('images');
          $viewimage = 'images/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $Event->image = $filename;
          // THIS TO SAVE  Settings UPDATE //
          $Event->save(); 
        }else{
          $Event->save();  
        }
          $Event->save();

                return redirect()->TO('asso/assodashboardEvents')

                        ->with('success','Event created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //To Get All Event 
        $Event = Event::where('slug', '=', $slug)->firstOrFail();
        return view('asso.assodashboardEvents.edit',compact('Event'));
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
        $Event = Event::where('slug', '=', $slug)->firstOrFail()
        ->update(
          [
            'Title_en' => $request->input('Title_en'),
            'Content_en' => $request->input('Content_en'),
            'slug' => $request->input('slug'),
            'StartTime' => $request->input('StartTime'),
            'Days' => $request->input('Days'),
            'Hours' => $request->input('Hours'),
            'Address' => $request->input('Address'),
            'Minutes' => $request->input('Minutes'),
            'FinishTime' => $request->input('FinishTime'),
            'StartTime' => $request->input('StartTime'),
           
          ]
        );
        request()->validate([

         'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

       ]);
      /*   $Event->Title_en = $request->input('Title_en');
        // $Event->Title_ar = $request->input('Title_ar');
        // $Event->Title_gr = $request->input('Title_gr');
        $Event->Content_en = $request->input('Content_en');
        // $Event->Content_ar = $request->input('Content_ar');
        // $Event->Content_gr = $request->input('Content_gr');
        $Event->StartTime = $request->input('StartTime');
        $Event->slug = $request->input('slug');
        $Event->Days = $request->input('Days');
        $Event->Hours = $request->input('Hours');
        $Event->Address = $request->input('Address');
        $Event->Minutes = $request->input('Minutes');
        $Event->FinishTime = $request->input('FinishTime');
        $Event->StartTime = $request->input('StartTime'); */
        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
        if ($request->file('image')){  
          Storage::delete($Event->image);
          // File
          $file = $request->file('image');
          $destinationPath = public_path('images');
          $viewimage = 'images/';         
          $filename = $viewimage . $file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $Event->image = $filename;
          // THIS TO SAVE  Settings UPDATE //

          $Event->save(); 
        }/* else{
          $Event->save();  
        } */
          // $Event->save();

                return redirect()->TO('asso/assodashboardEvents')

                        ->with('success','Event created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    **/
    public function destroy($id)
    {
        // Event Delete
        $Event = Event::findOrFail($id);
        Storage::delete($Event->image);
        // File 
        $Event->delete();
        return back()->with('Delete','Event Deleted successfully');
    }
}
