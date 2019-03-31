<?php

namespace App\Http\Controllers;

use App\Teacher;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    public function search(Request $request){
    
    $term=$request->term;
    //dd($term);
    $item= Teacher::where('name','LIKE','%'.$term.'%')->get();
    //$item1=$item->name;
    //dd($item);

    //dd($item);
    if(count($item) == 0){
    	$searchResult[]='No Teacher Found.' ;
    }
    else{
    	foreach($item as $keys=>$values){
    		$searchResult[]  = $values->name;
    	}
    }
    
    //dd($searchResult);
    return $searchResult;
    //return $item;

    //dd($item);
    //return $term;
    /*return $teachers = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
      ];
      */
    }
}
