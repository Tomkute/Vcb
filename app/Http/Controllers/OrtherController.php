<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class OrtherController extends BaseController
{
    public function  showOrtherbatch()
    {
        return view('vcbs.ortherbatch');
    }
}
