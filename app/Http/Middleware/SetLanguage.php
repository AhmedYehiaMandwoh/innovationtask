<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);
        $locales=['ar','en','cn','de','es','fr','id','ph','ru','tr'];
        $localeMapper=[
            'en' => 1,
            'ar' => 2,
            'cn' => 3,
            'de' => 4,
            'es' => 5,
            'fr' => 6,
            'id' => 7,
            'ph' => 8,
            'ru' => 9,
            'tr' => 10,
        ];

        if(!in_array($locale,$locales)){
            $locale='en';
        }
        app()->setLocale($locale);
        session(['textlanguage' => $locale]);
        session(['language' => $localeMapper[$locale]]);

        return $next($request);
    }
}