<?php

namespace App\Http\Controllers\Asso;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\IsAssociations;
use App\setting;
use App\User;
use App\Role;
use Auth;
use File;
use Validator;

class AssoDashboardUsersController extends Controller
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
        // GET Users
        $Users = User::with('role')->simplePaginate(10);
        return view('asso.assodashboardUsers.index',compact('Users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET Roles
        $Roles = Role::all();
        return view('asso.assodashboardUsers.create',compact('Roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // GET validate
        $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required'
        ]);
        //validate
        $this->validate($request, [
            'avatar' => 'mimes:jpeg,png,jpg', //only allow this type extension file.
        ]);
        // GET new User
        $User = new User;
        $User->role_id = $request->input('role_id');
        $User->name = $request->input('name');
        $User->email = $request->input('email');
        $User->password = Hash::make($request->password);
        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
        if ($request->file('avatar')){  
          $file = $request->file('avatar');
          $destinationPath = public_path('images');
          $viewimage = 'images/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $User->avatar = $filename;
          // THIS TO SAVE  Settings UPDATE //
          $User->save(); 
        }
        $User->save();  

                return redirect()->TO('asso/assodashboardUsers')

                        ->with('success','User created successfully.');


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        //To Get All User 
        $User = User::where('name', '=', $name)->firstOrFail();
        // GET Roles
        $Roles = Role::all();
        return view('asso.assodashboardUsers.edit',compact('User','Roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
        
         // GET User
        $User = User::where('name', '=', $name)->firstOrFail();
        // GET validate
         $request->validate([
        'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', //only allow this type extension file.
        'password' => 'required|min:6|confirmed'
        ]);
         //validate
        $this->validate($request, [
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', //only allow this type extension file.
        ]);
        
        $User->role_id = $request->input('role_id');
        $User->name = $request->input('name');
        $User->email = $request->input('email');
        $User->password = bcrypt(request('password'));
        // THIS FUNCTION UPDATE NEW IMAGE Settings IN PAGE Settings UPDATE //
        if ($request->file('avatar')){  
          $file = $request->file('avatar');
          Storage::delete($User->avatar);
          // File 
          $destinationPath = public_path('images');
          $viewimage = 'images/';         
          $filename = $viewimage.$file->getClientOriginalName();
          $file->move($destinationPath, $filename); 
          $User->avatar = $filename;
          // THIS TO SAVE  Settings UPDATE //
          $User->save(); 
        }else{
          $User->save(); 
        }
         
                return redirect()->TO('asso/assodashboardUsers')

                        ->with('success','User Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          // User Delete
        $User = User::findOrFail($id);
        Storage::delete($User->avatar);
        // File 
        $User->delete();
        return back()->with('Delete','User deleted successfully');
    }
}
