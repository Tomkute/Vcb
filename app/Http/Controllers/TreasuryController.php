<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;


class TreasuryController extends BaseController
{
    public function  showTreasury()
    {
//        $jobs = DBB::table
        return view('vcbs.treasury');
    }
}
