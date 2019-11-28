<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class MonitorairController extends BaseController
{
    public function  showMonitorair()
    {
        return view('vcbs.monitorair');
    }
}
