<?php
/**
 * laravel.
 * @author: Lvhulin <lvhl2@lenovo.com>
 * @version 1.0
 * @date: 2017/12/23 15:21
 */

namespace App\Http\Controllers;


class CommonController extends Controller
{
    public function renderPage($tpl, $data = [], $var = '')
    {
        return view($tpl)->with($var, $data);
    }


    public function renderAjax($code, $data = [], $msg = '')
    {
        return json_encode(['code'=>$code, 'data'=>$data, 'msg'=>$msg]);
    }

}