<?php
/**
 * laravel.
 * @author: Lvhulin <lvhl2@lenovo.com>
 * @version 1.0
 * @date: 2017/12/23 17:47
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Admin\Brand\IntroController;
use App\Model\Tables\Video;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class VideoController extends BaseController
{
    const CONTRL = 'video';
    const JS = 'video';

    /**
     * 视频管理列表
     * @return view
     */
    public function index()
    {
        $this->getRequireConf(self::JS, self::CONTRL, 'index');
        $data['nav_title'] = ['title' => '视频管理', 'remark' => ''];
        $vodObj = new Video();

        //条件筛选
        $where = [];
        //状态
        $data ['status'] = $where['vod_status'] = Input::get('status', '');
        //连载
        $data['continu'] = $where['vod_continu'] = Input::get('continu', '');
        $data['stars'] = $where['vod_stars'] = Input::get('starts', '');
        $data['isfilm'] = $where['vod_isfilm'] = Input::get('isfilm', '');
        $data['player'] = $where['player'] = Input::get('player', '');
        $data['url'] = '';
        $data['wd'] = '';
        $data['tag'] = '';
        $data['type'] = '';
        $data['order'] = '';
        $data['cid'] = '';

        $where = array_filter($where);
        if (empty($where)) {
            $data['list'] = $vodObj->paginate(10);
        } else {
            $data['list'] = $vodObj->where($where)->paginate(10);
        }




        return $this->renderPage('admin.video.index', [], $data);
    }

    /**
     * 视频添加
     * @return view
     */
    public function add()
    {
        $this->getRequireConf(self::JS, self::CONTRL, 'add');

        return $this->renderPage('admin.video.edit');
    }

    /**
     * 视频修改
     * @return view
     */
    public function edit()
    {
        $this->getRequireConf(self::JS, self::CONTRL, 'edit');

        return $this->renderPage('admin.video.edit');
    }

}