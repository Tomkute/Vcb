<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class CoremainbatchController extends BaseController
{
    public function  showCoremainbatch()
    {
        return view('vcbs.coremainbatch');
    }
}
