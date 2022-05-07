<?php

namespace App\Http\Controllers;

use App\Models\ChineseTeachers;
use App\Models\Clubs;
use App\Models\Managers;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{

public function Index(){
    $teachers= ChineseTeachers::all();
    $news = News::latest()->take(2)->get();
    $clubs = Clubs::all();
    $managers=Managers::whereHas('positions', function ($query) {
        return $query->where('ManagementTeam', '=', 1);
    })->get();
    $instuctores = Managers::whereHas('positions', function ($query) {
        return $query->where('ManagementTeam', '!=', 1 && 'id', '=', 8);
    })->get();
     $coaches= Managers::whereHas('positions', function ($query) {
        return $query->where('ManagementTeam', '!=', 1 && 'id', '=', 7);
    })->get();
     $presidiums= Managers::whereHas('positions', function ($query) {
        return $query->where('ManagementTeam', '!=', 1 && 'id', '=', 9 && 'id','=',9);
    })->get();
    return view('welcome',['news'=>$news,'presidiums'=>$presidiums,'instuctores'=>$instuctores, 'managers'=>$managers,'coaches'=>$coaches, 'clubs'=>$clubs, 'teachers'=>$teachers]);

}

}
