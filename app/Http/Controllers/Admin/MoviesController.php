<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Movie;
use App\Models\Admin\City;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MoviesController extends Controller
{
   //*** JSON Request
 public function datatables(Request $request)
 {
      $datas = Movie::orderBy('id','desc');
      //--- Integrating This Collection Into Datatables
      return Datatables::of($datas)
          ->addColumn('image', function($data) {
              return '<img src="' . $data->image . '" alt="' . $data->name . '" style="width: 100px;">';
          })
          ->addColumn('status', function($data) {
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
          ->addColumn('options', function($data) {
              return '<a class="btn btn-icon btn-info btn-round" href="'.route("movies.edit", [app()->getLocale(), $data->uuid]).'"><i class="fa fa-pencil" ></i></a>
              <button class="btn btn-icon btn-danger btn-round" onclick="deleteMovie('.$data->id.')"  href=""><i class="fa fa-trash mx-1" ></i></button>';
          })
          ->filterColumn('id', function ($query, $keyword) {
            $query->where('id', 'LIKE', "%$keyword%");
        })
          ->filterColumn('title', function ($query, $keyword) {
            $query->where('title', 'LIKE', "%$keyword%");
        })
          ->filterColumn('title_ar', function ($query, $keyword) {
            $query->where('title_ar', 'LIKE', "%$keyword%");
        })
    

          ->rawColumns(['image', 'status', 'options'])
          ->make(true);


}

    public function index()
    {
       
        return view('backend.admin.pages.Movies.index');

    }
    public function create()
    {
        return view('backend.admin.pages.Movies.create');

    }
    public function edit($lang, $uuid)
    {
        $Movie = Movie::where('uuid', $uuid)->first();
        return view('backend.admin.pages.Movies.edit', compact('Movie'));

    }

  
    public function status()
    {
        $Movie = Movie::where('id', $_GET['id'])->first();     
        $Movie->status = $_GET['status'];
        $Movie->save();
        return response()->json($Movie);
    }
    public function delete()
    {
        $Movie = Movie::where('id', $_GET['id'])->first();     
        $Movie->delete();
        return response()->json($Movie);
    }
    public function store(Request $request)
    {
      // validation input field
    $validator = Validator::make($request->all(),[
            "title" => "required",
            "title_ar" => "required",
            "slug" => "required",
            "slug_ar" => "required",
            "description" => "required",
            "description_ar" => "required",
            "image" => "required",
            "meta_tag" => "required",
            "keywords" => "required",
            "keywords_ar" => "required",
            "video_link" => "required",
            "meta_tag_ar" => "required",
            "meta_description" => "required",
            "meta_description_ar" => "required"
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            //input file information
            $Movie                       = new Movie();
            //Movie name
            $Movie->cat_id                 = $request->cat_id;
            $Movie->title                 = $request->title;
            $Movie->title_ar                 = $request->title_ar;
            $Movie->slug                 = $request->slug;
            $Movie->slug_ar                 = $request->slug_ar;
            $Movie->description                 = $request->description;
            $Movie->description_ar                 = $request->description_ar;
            $Movie->status                 = 1;
            $Movie->image                 = $request->image;
            $Movie->meta_tag                 = $request->meta_tag;
            $Movie->keywords                 = $request->keywords;
            $Movie->keywords_ar                 = $request->keywords_ar;
            $Movie->video_link                 = $request->video_link;
            $Movie->meta_tag_ar                 = $request->meta_tag_ar;
            $Movie->meta_description                 = $request->meta_description;
            $Movie->meta_description_ar                 = $request->meta_description_ar;
            $Movie->uuid                 = Str::uuid()->toString();
            $Movie->save();

            return redirect()->route('movies.index', app()->getLocale());

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
            "slug" => "required",
            "slug_ar" => "required",
            "description" => "required",
            "description_ar" => "required",
            "image" => "required",
            "meta_tag" => "required",
            "keywords" => "required",
            "keywords_ar" => "required",
            "video_link" => "required",
            "meta_tag_ar" => "required",
            "meta_description" => "required",
            "meta_description_ar" => "required"
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            //input file information
            $Movie                       = Movie::where('uuid',$uuid)->first();
            //Movie name
            $Movie->cat_id                 = $request->cat_id;
            $Movie->title                 = $request->title;
            $Movie->title_ar                 = $request->title_ar;
            $Movie->slug                 = $request->slug;
            $Movie->slug_ar                 = $request->slug_ar;
            $Movie->description                 = $request->description;
            $Movie->description_ar                 = $request->description_ar;
            $Movie->image                 = $request->image;
            $Movie->meta_tag                 = $request->meta_tag;
            $Movie->keywords                 = $request->keywords;
            $Movie->keywords_ar                 = $request->keywords_ar;
            $Movie->video_link                 = $request->video_link;
            $Movie->meta_tag_ar                 = $request->meta_tag_ar;
            $Movie->meta_description                 = $request->meta_description;
            $Movie->meta_description_ar                 = $request->meta_description_ar;
            $Movie->save();

            return redirect()->route('movies.index', app()->getLocale());

        }catch (Exception $exception){
            $this->setError($exception->getMessage());
            return redirect()->back() ;

        }
    }
}
