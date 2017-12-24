<?php
/**
 * laravel.
 * @author: Lvhulin <lvhl2@lenovo.com>
 * @version 1.0
 * @date: 2017/12/24 16:52
 */

namespace App\Http\Controllers\Admin;


class McatController extends BaseController
{
    const CONTRL = 'mcat';
    const JS = 'mcat';

    public function index()
    {
        $this->getRequireConf(self::JS, self::CONTRL, 'index');
        $data['nav_title'] = ['title' => '类型管理', 'remark' => ''];

        return $this->renderPage('admin.mcat.index', [], $data);
    }
}