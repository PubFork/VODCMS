<?php
/**
 * laravel.
 * @author: Lvhulin <lvhl2@lenovo.com>
 * @version 1.0
 * @date: 2017/12/24 16:38
 */

namespace App\Http\Controllers\Admin;


class ChannelController extends BaseController
{
    const CONTRL = 'channel';
    const JS = 'channel';

    public function index()
    {
        $this->getRequireConf(self::JS, self::CONTRL, 'index');
        $data['nav_title'] = ['title' => '栏目管理', 'remark' => ''];

        return $this->renderPage('admin.channel.index', [], $data);
    }
}