<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class RemintanceController extends BaseController
{
    public function  showRemintance()
    {
        return view('vcbs.remintance');
    }
}
