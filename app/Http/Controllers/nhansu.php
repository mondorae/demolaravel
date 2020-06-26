<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;
use PDO;

class nhansu extends Controller
{
    public function postForm(Request $request){
        print_r($request->all());
        if($request->has('Tuoi'))
            echo "co tuoi la: ".$request->tuoi;
        else
            echo "khong co 'Tuoi'";
    }

    public function setCookie(){
        $response = new Response();
        $response->withCookie(                  //truyền 3 tham số : tên cookie, giá trị, thời gian tồn tại tính theo phút
                        'NhanVien',
                        'Thanh Bui',
                        0.1
                    ); 
        echo "set cookie thành công";
        return $response;
    }

    public function getCookie(Request $request){
        echo "cookie của mài nè 6s thôi : ";
        return $request->cookie('NhanVien');
    }

    public function myView(){
        return view('myView');
    }

    public function Time($t){
        return view('myView',['t'=>$t]);
    }
}
