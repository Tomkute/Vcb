<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use batch_execute;

class BatchController extends BaseController
{
    public function  Batch(Request $req)
    {
        $username = $req->session()->get('username');
//        $errors = new MessageBag();
//        if (!empty($req->post())) {
//            $validator = Validator::make($req->post(), [
//                'WareHouseName'        => 'required|unique:tb_warehouse,warehouse_name|min:5',
//                'WareHouseAddress'        => 'required|min:5',
//                'Branch' => 'required',
//            ]);
//            if (!$validator->fails()) {
//                $newWarehouse = new Warehouse();
//                $newWarehouse->warehouse_name = $req->post('WareHouseName');
//                $newWarehouse->warehouse_address = $req->post('WareHouseAddress');
////                $newWarehouse->priority = $req->post('Priority');
//                $newWarehouse->branch = $req->post('Branch');
//                $newWarehouse->save();
////                var_dump($newUser);exit;
//                return redirect('/warehouse');
//            }
//
//            $errors = $validator->errors();
//        }
        $batch_executes = DB::table('batch_execute')->get();
//        print_r($batch_executes);exit;
//        if (!empty($batch_executes) {
//
//            $batch_executes = new batch_execute();
//
//
//        }
        // job card
        $jobs_card = DB::table('system_jobs')
        ->select('system_jobs.*')
        ->join('job_groups', 'system_jobs.group_id', '=', 'job_groups.id')
            ->where([
                'job_groups.key' => 'card',
                'system_jobs.status' => 1
            ])
            ->orderBy('system_jobs.priority')
        ->get();
        //job core
        $jobs_core = DB::table('system_jobs')
            ->select('system_jobs.*')
            ->join('job_groups', 'system_jobs.group_id', '=', 'job_groups.id')
            ->where([
                'job_groups.key' => 'core',
                'system_jobs.status' => 1
            ])
            ->orderBy('system_jobs.priority')
            ->get();
        //job treasury
        $jobs_treasury = DB::table('system_jobs')
            ->select('system_jobs.*')
            ->join('job_groups', 'system_jobs.group_id', '=', 'job_groups.id')
            ->where([
                'job_groups.key' => 'treasury',
                'system_jobs.status' => 1
            ])
            ->orderBy('system_jobs.priority')
            ->get();
        return view('vcbs.batchprocessing',[
            'username'=> $username,
            'jobs_card' => $jobs_card,
            'jobs_core' => $jobs_core,
            'jobs_treasury' => $jobs_treasury,
            'isLogin'  => $req->session()->get('isLoggedIn')
        ]);

    }
}
