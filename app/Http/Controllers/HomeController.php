<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;


class HomeController extends BaseController
{

    public function showTrangchu(Request $req)
    {
//        var_dump($req->session()->get('isLoggedIn'));
        return view('vcbs.trangchu');
    }

    public function login(Request $req){
        $errors = new MessageBag();
        if (!empty($req->post())){
            $validator = Validator::make($req->post(), [
                'username' => 'required|min:5',
                'password' => 'required|min:5'
            ]);
            if (!$validator->fails()) {
                $username = $req->post('username');
                $password = $req->post('password');

                $user = User::query()->where('username', $username)->get();
//                var_dump($user->count());exit;
                if (!$user->count()== 0){
                    $user = $user[0];
                    if ($password === $user->password){
                        if ($user->status == 1){
                            $req->session()->put('isLoggedIn', true);
                            $req->session()->put('username', $username);
                            // $req-> section()-> put('role',
//                            return redirect('vcbs.batchprocessing');
                            return redirect()->route('showbatch');
                        }else{
                            $errors->add("", "This user has been locked");
                        }
                    }
                }else{
                    $errors->add("", "The credentials are incorrect");
                }
            }else{
                $errors = $validator->errors();
            }
        }
        return view("login", [
            'errors' => $errors
        ]);
//        return view('login');
    }

    public function Logout(Request $req){
        $req->session()->flush();
        return redirect('/login');
    }
    public function showbatch(){

        return view('vcbs.batchprocessing');
    }


//    public function showCore()
//    {
//        return view('vcbs.core');
//    }
//    public function showAssend(){
//        return view('vcbs.assend');
//    }
//    public function showTreasury(){
//        return view('vcbs.treasury');
//    }
//    public function showRemintance(){
//        return view('vcbs.remitance');
//    }
//    public function showvcbsbatch(){
//        return view('vcbs.vcbsbatch');
//    }
//    public function showOtherbatch(){
//        return view('vcbs.otherbatch');
//    }
//    public function showOpenclose(){
//        return view('vcbs.openclose');
//    }
//    public function showCoremainbatch(){
//        return view('vcbs.coremainbatch');
//    }
//    public function showMonitorair(){
//        return view('vcbs.monitorair');
//    }
}
