<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class VcbbatchController extends BaseController
{
    public function  showVcbbatch()
    {
        return view('vcbs.vcbbatch');
    }
}
