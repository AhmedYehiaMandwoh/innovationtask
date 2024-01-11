<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\City;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoreyController extends Controller
{
     //*** JSON Request
 public function datatables(Request $request)
 {
      $datas = Category::orderBy('id','desc')->get();
      //--- Integrating This Collection Into Datatables
      return Datatables::of($datas)
          ->addColumn('image', function(Category $data) {
              return '<img src="' . $data->image . '" alt="' . $data->name . '" style="width: 100px;">';
          })
          ->addColumn('status', function(Category $data) {
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
          ->addColumn('options', function(Category $data) {
              return '<a class="btn btn-icon btn-info btn-round" href="'.route("categories.edit", [app()->getLocale(), $data->uuid]).'"><i class="fa fa-pencil" ></i></a>
              <button class="btn btn-icon btn-danger btn-round" onclick="deleteCategory('.$data->id.')"  href=""><i class="fa fa-trash mx-1" ></i></button>';
          })
          
          ->rawColumns(['image', 'status', 'options'])
          ->toJson(); //--- Returning Json Data To Client Side
}

    public function index()
    {
       
        return view('backend.admin.pages.categories.index');

    }
    public function create()
    {
        return view('backend.admin.pages.categories.create');

    }
    public function edit($lang, $uuid)
    {
        $categorey = Category::where('uuid', $uuid)->first();
        return view('backend.admin.pages.categories.edit', compact('categorey'));

    }

    public function status()
    {
        $Category = Category::where('id', $_GET['id'])->first();     
        $Category->status = $_GET['status'];
        $Category->save();
        return response()->json($Category);
    }
    public function delete()
    {
        $Category = Category::where('id', $_GET['id'])->first();     
        $Category->delete();
        return response()->json($Category);
    }
    public function store(Request $request)
    {
      // validation input field
    $validator = Validator::make($request->all(),[
            "title" => "required",
            "title_ar" => "required",
            "alt" => "required",
            "alt_ar" => "required",
            "image" => "required",

        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            //input file information
            $Category                       = new Category();
            //Category name
            $Category->title                 = $request->title;
            $Category->title_ar                 = $request->title_ar;
            $Category->alt                 = $request->alt;
            $Category->status                 = 1;
            $Category->alt_ar                 = $request->alt_ar;
            $Category->image                 = $request->image;
            $Category->uuid                 = Str::uuid()->toString();
            $Category->save();

            return redirect()->route('categories.index', app()->getLocale());

        }catch (Exception $exception){
            $this->setError($exception->getMessage());
            return redirect()->back() ;

        }
    }
    public function update(Request $request, $lang,$uuid)
    {
      // validation input field
    $validator = Validator::make($request->all(),[
        "title" => "required",
        "title_ar" => "required",
        "alt" => "required",
        "alt_ar" => "required",
        "image" => "required",
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            //input file information
            $Category                       = Category::where('uuid',$uuid)->first();
            //Category name
            $Category->title                 = $request->title;
            $Category->title_ar                 = $request->title_ar;
            $Category->alt                 = $request->alt;
            $Category->alt_ar                 = $request->alt_ar;
            $Category->image                 = $request->image;
            $Category->save();

            return redirect()->route('categories.index', app()->getLocale());

        }catch (Exception $exception){
            $this->setError($exception->getMessage());
            return redirect()->back() ;

        }
    }
}
