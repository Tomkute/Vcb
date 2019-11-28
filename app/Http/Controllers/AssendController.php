<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use DB;

class AssendController extends BaseController
{
    public function  showAssend()
    {
        return view('vcbs.assend');


    }
}
