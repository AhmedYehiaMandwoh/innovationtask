<?php
use App\Models\Admin\Category;
// This is For Languages


function LanguageDatatable() {
    $Language ='';
    if(app()->getLocale() == "ar") {

        $Language = asset('/theme-back/app-assets/ar.json');
    }else{

        $Language = asset('/theme-back/app-assets/en.json');

    }

    return $Language;
}



 function categories(){
    return Category::where('status', 1)->get();
}
