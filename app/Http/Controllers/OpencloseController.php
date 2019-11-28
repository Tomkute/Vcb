<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class OpencloseController extends BaseController
{
    public function  showOpenclose()
    {
        return view('vcbs.openclose');
    }
}
