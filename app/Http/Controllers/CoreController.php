<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class CoreController extends BaseController
{
    public function showCore(Request $req)
    {
        if ($req->isMethod('POST')) {
            var_dump($req->toArray());exit;
        }

        $jobs = DB::table('system_jobs')
            ->select('system_jobs.*')
            ->join('job_groups', 'system_jobs.group_id', '=', 'job_groups.id')
//            ->where([
//                'job_groups.key' => 'core',
//                'system_jobs.status' => 1
//            ])
//            ->orderBy('system_jobs.priority')
            ->get();

        $groups = DB::table('groups')
            ->select(['id','description','fullname'])
            ->get();
//        $dbs = DB::insert('')

        return view('vcbs/core', [
            'jobs' => $jobs,
            'groups' => $groups
        ]);
    }
}


