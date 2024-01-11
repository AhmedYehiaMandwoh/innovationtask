<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

class UsersController extends Controller
{
     //*** JSON Request
 public function datatables(Request $request)
 {
      $datas = User::orderBy('id','desc')->get();
      //--- Integrating This Collection Into Datatables
      return Datatables::of($datas)
         
          ->addColumn('status', function(User $data) {
              $stausBox ='';
              $statusActi = 0;
              if($data->status == 1) {
                  $statusActi = 0;
              }else{
                  $statusActi = 1;
              }
                  $class = $data->status == 1 ? 'checked=""' : '';
                  $s = $data->status == 1 ? 'selected' : '';
                  $ns = $data->status == 0 ? 'selected' : '';
               
                  $stausBox.='<div class="form-check form-check-success form-switch">
                  <input type="checkbox" '.$class.'  class="form-check-input form-check-toggle" id="customSwitch3'.$data->id.'" onchange="ActiveDeactive('.$data->id.','.$statusActi.')">
              </div>';

              return $stausBox;
          })
          ->addColumn('options', function(User $data) {
              return '<a class="btn btn-icon btn-info btn-round" href="'.route("users.edit", [app()->getLocale(), $data->id]).'"><i class="fa fa-pencil" ></i></a>
              <button class="btn btn-icon btn-danger btn-round" onclick="deleteUser('.$data->id.')"  href=""><i class="fa fa-trash mx-1" ></i></button>';
          })
          
          ->rawColumns(['status', 'options'])
          ->toJson(); //--- Returning Json Data To Client Side
}

    public function index()
    {
       
        return view('backend.admin.pages.users.index');

    }
    public function create()
    {
        return view('backend.admin.pages.users.create');

    }
    public function edit($lang, $id)
    {
        $user = User::where('id', $id)->first();
        return view('backend.admin.pages.users.edit', compact('user'));

    }

    public function status()
    {
        $User = User::where('id', $_GET['id'])->first();     
        $User->status = $_GET['status'];
        $User->save();
        return response()->json($User);
    }
    public function delete()
    {
        $User = User::where('id', $_GET['id'])->first();     
        $User->delete();
        return response()->json($User);
    }
    public function store(Request $request)
    {
      // validation input field
    $validator = Validator::make($request->all(),[
            "name" => "required",
            "email" => "required",
            "password" => "required",

        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::where('email', $request->email)->first();

       
        try {
            if(isset($user)) {
                return response()->json([
                    'status' => false,
                    'message' => 'user already exist',
                    'errors' => $errors
                ], 200);
            }else{
    
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
            }
            return redirect()->route('users.index', app()->getLocale());

        }catch (Exception $exception){
            $this->setError($exception->getMessage());
            return redirect()->back() ;

        }
    }
    
    public function update(Request $request, $lang,$id)
    {
      // validation input field
    $validator = Validator::make($request->all(),[
        "name" => "required",
        "email" => "required",
        "password" => "required",
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            //input file information
            $User                       = User::where('id',$id)->first();
            //User name
            $User->name                 = $request->name;
            $User->email                 = $request->email;
            $User->password             =  Hash::make($request->password);
            $User->save();

            return redirect()->route('users.index', app()->getLocale());

        }catch (Exception $exception){
            $this->setError($exception->getMessage());
            return redirect()->back() ;

        }
    }
}
