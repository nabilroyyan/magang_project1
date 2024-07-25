<?php

namespace App\Http\Controllers;

use App\Models\MainBanner;
use App\Models\Service;

class HomeController extends Controller 
{
    //
    public function index()
    {
        $data_banner = MainBanner::get();
        //select * from main_banner

        $data_service = Service::get();
       //dd($data_banner);
        return View('home',compact('data_banner','data_service'));
    }

}
