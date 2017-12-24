<?php
/**
 * laravel.
 * @author: Lvhulin <lvhl2@lenovo.com>
 * @version 1.0
 * @date: 2017/12/23 14:55
 */

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class IndexController extends BaseController
{
    public function index()
    {
        $redirect = Input::get('redirect', '');
        $requireConf = $this->requireConf;
        $requireConf['referer'] = $redirect;
        $data['require_config'] = '{config:'.json_encode($requireConf).'}';;
        view()->share($data);

        return $this->renderPage('admin.index.index');
    }

    public function show()
    {
        $ref = Input::get('ref', '');
        $requireConf = $this->requireConf;
        $requireConf['referer'] = '';
        $data['require_config'] = '{config:'.json_encode($requireConf).'}';;
        view()->share($data);
        if (!empty($ref)) {
            return redirect(url('/admin/index'));
        } else {
            return $this->renderPage('admin.index.show');
        }
    }

}