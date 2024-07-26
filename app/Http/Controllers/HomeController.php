<?php

namespace App\Http\Controllers;

use App\Models\MainBanner;
use App\Models\Service;
use App\Models\setting;


class HomeController extends Controller 
{
    //
    public function index()
    {
        $data_banner = MainBanner::get();
        //select * from main_banner
        $data_setting = setting::get();
        //select * from data_setting

        $data_service = Service::get();
       //dd($data_setting);
        return View('home',compact('data_banner','data_service', 'data_setting'));
    }

}
