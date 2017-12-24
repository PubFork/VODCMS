<?php
/**
 * laravel.
 * @author: Lvhulin <lvhl2@lenovo.com>
 * @version 1.0
 * @date: 2017/12/23 14:56
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;


class BaseController extends CommonController
{
    protected $requireConf = [];

    public function __construct()
    {
        $this->requireConf = config('require');
        $ref = Input::get('ref', '');
        $currPath = parse_url($_SERVER['REQUEST_URI'])['path'];
        $arrPath = explode('/', trim($currPath, '/'));
        $controller = $arrPath[1];
        $action = count($arrPath) > 2 ? $arrPath[2] : 'index';
        if ($controller != 'index') {
            if ($ref == 'addtabs') {
                header('Location:'.url('/admin/index?redirect='.$currPath));die;
                //return redirect(url('/admin/index?refer='.$currPath));
            }
        }
    }


    protected function getRequireConf($js = 'index', $contrl = 'index', $acton = 'index')
    {
        $requireConf = $this->requireConf;
        $requireConf['controllername'] = $contrl;
        $requireConf['actionname'] = $acton;
        $requireConf['jsname'] = 'backend/'.$js;
        $requireConf['referer'] = '';
        $data['require_config'] = '{config:'.json_encode($requireConf).'}';;
        view()->share($data);
    }
}