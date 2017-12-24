<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel hidden-xs">
        <div class="pull-left image">
            <img src="{:session('member_auth.avatar')}" class="img-circle" />
        </div>
        <div class="pull-left info">
            <p>管理员</p>
            <i class="fa fa-circle text-success"></i> 
        </div>
    </div>
    <!-- search form -->
<!--    <form action="#" method="get" class="sidebar-form hidden-xs" style="overflow:visible;border:none;">
        <select class="form-control fastmenujump btn">
            <option value=""></option>
        </select>
    </form>-->
    <!-- /.search form -->

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <!--如果想始终显示子菜单,则给ul class加上show-submenu类即可-->

    <ul class="sidebar-menu">
        <li class="">
            <a href="/admin/index" addtabs="1" url="/admin/index/show" data="admin/index/show">
                <i class="fa fa-home"></i>
                <span>后台首页</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li class=" treeview">
            <a href="javascript:;" addtabs="2" url="javascript:;" data="admin/config/config">
                <i class="fa fa-cogs"></i>
                <span>系统管理</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left"></i>
    </span>
            </a>
            <ul class="treeview-menu">
                <li class="">
                    <a href="/index.php?s=/admin-config-index.html" addtabs="3" url="/index.php?s=/admin-config-index.html" data="admin/config/index">
                        <i class="fa fa-gear"></i>
                        <span>系统设置</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-config-show.html" addtabs="4" url="/index.php?s=/admin-config-show.html" data="admin/config/show">
                        <i class="fa fa-list-ul"></i>
                        <span>配置列表</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-play-index.html" addtabs="11" url="/index.php?s=/admin-play-index.html" data="admin/play/index">
                        <i class="fa fa-play-circle"></i>
                        <span>播放器管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-model-index.html" addtabs="20" url="/index.php?s=/admin-model-index.html" data="admin/model/index">
                        <i class="fa fa-cogs"></i>
                        <span>模型管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class=" treeview">
                    <a href="javascript:;" addtabs="58" url="javascript:;" data="admin/data/show">
                        <i class="fa fa-database"></i>
                        <span>数据管理</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left"></i>
        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="/index.php?s=/admin-data-index-type-export.html" addtabs="59" url="/index.php?s=/admin-data-index-type-export.html" data="admin/data/index?type=export">
                                <i class="fa fa-save"></i>
                                <span>数据库备份</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/index.php?s=/admin-data-index-type-import.html" addtabs="60" url="/index.php?s=/admin-data-index-type-import.html" data="admin/data/index?type=import">
                                <i class="fa fa-futbol-o"></i>
                                <span>数据库恢复</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/index.php?s=/admin-data-replace.html" addtabs="61" url="/index.php?s=/admin-data-replace.html" data="admin/data/replace">
                                <i class="fa fa-hospital-o"></i>
                                <span>数据批量替换</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=" treeview">
            <a href="javascript:;" addtabs="67" url="javascript:;" data="admin/vod/show">
                <i class="fa fa-wpforms"></i>
                <span>内容管理</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left"></i>
    </span>
            </a>
            <ul class="treeview-menu">
                <li class="">
                    <a href="/admin/channel/index" addtabs="68" url="/admin/channel/index" data="admin/channel/index">
                        <i class="fa fa-bars"></i>
                        <span>栏目管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/admin/mcat/index" addtabs="76" url="/admin/mcat/index" data="admin/mcat/index">
                        <i class="fa fa-list-ul"></i>
                        <span>类型管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/admin/video/index" addtabs="82" url="/admin/video/index" data="admin/vod/index">
                        <i class="fa fa-video-camera"></i>
                        <span>视频管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-tag-index.html" addtabs="91" url="/index.php?s=/admin-tag-index.html" data="admin/tag/index">
                        <i class="fa fa-tags"></i>
                        <span>TAG管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-story-index.html" addtabs="93" url="/index.php?s=/admin-story-index.html" data="admin/story/index">
                        <i class="fa fa-list-ul"></i>
                        <span>剧情管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-star-index.html" addtabs="101" url="/index.php?s=/admin-star-index.html" data="admin/star/index">
                        <i class="fa fa-star"></i>
                        <span>明星管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-actor-index.html" addtabs="109" url="/index.php?s=/admin-actor-index.html" data="admin/actor/index">
                        <i class="fa fa-vcard-o"></i>
                        <span>演员管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-role-index.html" addtabs="118" url="/index.php?s=/admin-role-index.html" data="admin/role/index">
                        <i class="fa fa-user-circle-o"></i>
                        <span>角色管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-news-index.html" addtabs="126" url="/index.php?s=/admin-news-index.html" data="admin/news/index">
                        <i class="fa fa-newspaper-o"></i>
                        <span>新闻管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-tv-index.html" addtabs="135" url="/index.php?s=/admin-tv-index.html" data="admin/tv/index">
                        <i class="fa fa-television"></i>
                        <span>节目管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-special-index.html" addtabs="144" url="/index.php?s=/admin-special-index.html" data="admin/special/index">
                        <i class="fa fa-drivers-license-o"></i>
                        <span>专题管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
            </ul>
        </li>
        <li class=" treeview">
            <a href="javascript:;" addtabs="155" url="javascript:;" data="admin/link/show">
                <i class="fa fa-tags"></i>
                <span>附件工具</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left"></i>
    </span>
            </a>
            <ul class="treeview-menu">
                <li class="">
                    <a href="/index.php?s=/admin-slide-index.html" addtabs="156" url="/index.php?s=/admin-slide-index.html" data="admin/slide/index">
                        <i class="fa fa-photo"></i>
                        <span>幻灯管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-annunciate-index.html" addtabs="162" url="/index.php?s=/admin-annunciate-index.html" data="admin/annunciate/index">
                        <i class="fa fa-buysellads"></i>
                        <span>广告管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-link-index.html" addtabs="168" url="/index.php?s=/admin-link-index.html" data="admin/link/index">
                        <i class="fa fa-link"></i>
                        <span>连接管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class=" treeview">
                    <a href="javascript:;" addtabs="174" url="javascript:;" data="admin/pic">
                        <i class="fa fa-tags"></i>
                        <span>附件管理</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left"></i>
        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=" treeview">
                            <a href="javascript:;" addtabs="175" url="javascript:;" data="admin/pic/vod">
                                <i class="fa fa-video-camera"></i>
                                <span>视频附件</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left"></i>
            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="">
                                    <a href="/index.php?s=/admin-pic-down-id-1-type-vod_pic.html" addtabs="179" url="/index.php?s=/admin-pic-down-id-1-type-vod_pic.html" data="admin/pic/down?id=1&type=vod_pic">
                                        <i class="fa fa-circle-o"></i>
                                        <span>下载视频缩略图</span>
                                        <span class="pull-right-container"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/index.php?s=/admin-pic-down-id-1-type-vod_bigpic.html" addtabs="180" url="/index.php?s=/admin-pic-down-id-1-type-vod_bigpic.html" data="admin/pic/down?id=1&type=vod_bigpic">
                                        <i class="fa fa-circle-o"></i>
                                        <span>下载视频海报图</span>
                                        <span class="pull-right-container"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/index.php?s=/admin-pic-content-id-1-type-content.html" addtabs="181" url="/index.php?s=/admin-pic-content-id-1-type-content.html" data="admin/pic/content?id=1&type=content">
                                        <i class="fa fa-circle-o"></i>
                                        <span>下载视频内容图</span>
                                        <span class="pull-right-container"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" treeview">
                            <a href="javascript:;" addtabs="176" url="javascript:;" data="admin/pic/news">
                                <i class="fa fa-hacker-news"></i>
                                <span>文章附件</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left"></i>
            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="">
                                    <a href="/index.php?s=/admin-pic-down-id-2-type-news_pic.html" addtabs="182" url="/index.php?s=/admin-pic-down-id-2-type-news_pic.html" data="admin/pic/down?id=2&type=news_pic">
                                        <i class="fa fa-circle-o"></i>
                                        <span>下载文章缩略图</span>
                                        <span class="pull-right-container"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/index.php?s=/admin-pic-content-id-2-type-content.html" addtabs="183" url="/index.php?s=/admin-pic-content-id-2-type-content.html" data="admin/pic/content?id=2&type=content">
                                        <i class="fa fa-circle-o"></i>
                                        <span>下载文章内容图</span>
                                        <span class="pull-right-container"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" treeview">
                            <a href="javascript:;" addtabs="177" url="javascript:;" data="admin/pic/star">
                                <i class="fa fa-star"></i>
                                <span>明星附件</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left"></i>
            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="">
                                    <a href="/index.php?s=/admin-pic-down-id-3-type-star_pic.html" addtabs="184" url="/index.php?s=/admin-pic-down-id-3-type-star_pic.html" data="admin/pic/down?id=3&type=star_pic">
                                        <i class="fa fa-circle-o"></i>
                                        <span>下载明星缩略图</span>
                                        <span class="pull-right-container"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/index.php?s=/admin-pic-down-id-3-type-star_bigpic.html" addtabs="185" url="/index.php?s=/admin-pic-down-id-3-type-star_bigpic.html" data="admin/pic/down?id=3&type=star_bigpic">
                                        <i class="fa fa-circle-o"></i>
                                        <span>下载明星海报图</span>
                                        <span class="pull-right-container"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="/index.php?s=/admin-pic-content-id-3-type-content.html" addtabs="186" url="/index.php?s=/admin-pic-content-id-3-type-content.html" data="admin/pic/content?id=3&type=content">
                                        <i class="fa fa-circle-o"></i>
                                        <span>下载明星内容图</span>
                                        <span class="pull-right-container"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" treeview">
                            <a href="javascript:;" addtabs="178" url="javascript:;" data="admin/pic/role">
                                <i class="fa fa-user"></i>
                                <span>角色附件</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left"></i>
            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="">
                                    <a href="/index.php?s=/admin-pic-down-id-5-type-role_pic.html" addtabs="187" url="/index.php?s=/admin-pic-down-id-5-type-role_pic.html" data="admin/pic/down?id=5&type=role_pic">
                                        <i class="fa fa-circle-o"></i>
                                        <span>下载角色缩略图</span>
                                        <span class="pull-right-container"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=" treeview">
            <a href="javascript:;" addtabs="188" url="javascript:;" data="admin/collect/show">
                <i class="fa fa-futbol-o"></i>
                <span>采集管理</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left"></i>
    </span>
            </a>
            <ul class="treeview-menu">
                <li class=" treeview">
                    <a href="javascript:;" addtabs="189" url="javascript:;" data="admin/collect/vod">
                        <i class="fa fa-tv"></i>
                        <span>资源列表</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left"></i>
        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="/index.php?s=/admin-collect-index.html" addtabs="194" url="/index.php?s=/admin-collect-index.html" data="admin/collect/index">
                                <i class="fa fa-circle-o"></i>
                                <span>视频采集</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/index.php?s=/admin-collect-index-cid-2.html" addtabs="294" url="/index.php?s=/admin-collect-index-cid-2.html" data="admin/collect/index?cid=2">
                                <i class="fa fa-circle-o"></i>
                                <span>新闻采集</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/index.php?s=/admin-collect-index-cid-3.html" addtabs="295" url="/index.php?s=/admin-collect-index-cid-3.html" data="admin/collect/index?cid=3">
                                <i class="fa fa-circle-o"></i>
                                <span>明星采集</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/index.php?s=/admin-collect-index-cid-4.html" addtabs="296" url="/index.php?s=/admin-collect-index-cid-4.html" data="admin/collect/index?cid=4">
                                <i class="fa fa-circle-o"></i>
                                <span>剧情采集</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/index.php?s=/admin-collect-index-cid-6.html" addtabs="297" url="/index.php?s=/admin-collect-index-cid-6.html" data="admin/collect/index?cid=6">
                                <i class="fa fa-circle-o"></i>
                                <span>演员采集</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/index.php?s=/admin-collect-index-cid-99.html" addtabs="298" url="/index.php?s=/admin-collect-index-cid-99.html" data="admin/collect/index?cid=99">
                                <i class="fa fa-circle-o"></i>
                                <span>评论采集</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/index.php?s=/admin-collect-win.html" addtabs="195" url="/index.php?s=/admin-collect-win.html" data="admin/collect/win">
                                <i class="fa fa-calendar-times-o"></i>
                                <span>定时采集</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" treeview">
                    <a href="javascript:;" addtabs="190" url="javascript:;" data="admin/collect/info">
                        <i class="fa fa-info-circle"></i>
                        <span>资料采集</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left"></i>
        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="/index.php?s=/admin-get-doubanid.html" addtabs="196" url="/index.php?s=/admin-get-doubanid.html" data="admin/get/doubanid">
                                <i class="fa fa-text-width"></i>
                                <span>采集所有豆瓣ID</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/index.php?s=/admin-get-doubanid-d-2.html" addtabs="197" url="/index.php?s=/admin-get-doubanid-d-2.html" data="admin/get/doubanid?d=2">
                                <i class="fa fa-text-width"></i>
                                <span>采集2天内豆瓣ID</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/index.php?s=/admin-get-doubaninfo.html" addtabs="198" url="/index.php?s=/admin-get-doubaninfo.html" data="admin/get/doubaninfo">
                                <i class="fa fa-text-width"></i>
                                <span>采集所有豆瓣资料</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/index.php?s=/admin-get-doubaninfo-d-2.html" addtabs="199" url="/index.php?s=/admin-get-doubaninfo-d-2.html" data="admin/get/doubaninfo?d=2">
                                <i class="fa fa-text-width"></i>
                                <span>采集2天内豆瓣资料</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" treeview">
                    <a href="javascript:;" addtabs="191" url="javascript:;" data="admin/collect/role">
                        <i class="fa fa-align-justify"></i>
                        <span>角色剧情</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left"></i>
        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="/index.php?s=/admin-get-all.html" addtabs="201" url="/index.php?s=/admin-get-all.html" data="admin/get/all">
                                <i class="fa fa-circle-o"></i>
                                <span>采集角色剧情</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/index.php?s=/admin-get-all-d-2.html" addtabs="202" url="/index.php?s=/admin-get-all-d-2.html" data="admin/get/all?d=2">
                                <i class="fa fa-circle-o"></i>
                                <span>采集最近角色剧情</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/index.php?s=/admin-getstory-up.html" addtabs="203" url="/index.php?s=/admin-getstory-up.html" data="admin/getstory/up">
                                <i class="fa fa-circle-o"></i>
                                <span>更新所有剧情</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/index.php?s=/admin-getstory-up-d-2.html" addtabs="204" url="/index.php?s=/admin-getstory-up-d-2.html" data="admin/getstory/up?d=2">
                                <i class="fa fa-circle-o"></i>
                                <span>更新2天内剧情</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" treeview">
                    <a href="javascript:;" addtabs="192" url="javascript:;" data="admin/collect/star">
                        <i class="fa fa-user-md"></i>
                        <span>明星采集</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left"></i>
        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="/index.php?s=/admin-getstar-index-type-1.html" addtabs="205" url="/index.php?s=/admin-getstar-index-type-1.html" data="admin/getstar/index?type=1">
                                <i class="fa fa-circle-o"></i>
                                <span>明星采集</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" treeview">
                    <a href="javascript:;" addtabs="193" url="javascript:;" data="admin/collect/cm">
                        <i class="fa fa-commenting-o"></i>
                        <span>评论采集</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left"></i>
        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="/index.php?s=/admin-getcm-douban.html" addtabs="206" url="/index.php?s=/admin-getcm-douban.html" data="admin/getcm/douban">
                                <i class="fa fa-circle-o"></i>
                                <span>采集所有豆瓣评论</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/index.php?s=/admin-getcm-douban-d-2.html" addtabs="207" url="/index.php?s=/admin-getcm-douban-d-2.html" data="admin/getcm/douban?d=2">
                                <i class="fa fa-circle-o"></i>
                                <span>采集2天内豆瓣评论</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="/index.php?s=/admin-caches-index.html" addtabs="209" url="/index.php?s=/admin-caches-index.html" data="admin/caches/index">
                <i class="fa fa-edge"></i>
                <span>缓存管理</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li class=" treeview">
            <a href="javascript:;" addtabs="210" url="javascript:;" data="admin/user/center">
                <i class="fa fa-user-o"></i>
                <span>会员中心</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left"></i>
    </span>
            </a>
            <ul class="treeview-menu">
                <li class="">
                    <a href="/index.php?s=/admin-user-index.html" addtabs="211" url="/index.php?s=/admin-user-index.html" data="admin/user/index">
                        <i class="fa fa-gears"></i>
                        <span>配置管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-user-nav.html" addtabs="212" url="/index.php?s=/admin-user-nav.html" data="admin/user/nav">
                        <i class="fa fa-navicon"></i>
                        <span>导航管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-user-show.html" addtabs="213" url="/index.php?s=/admin-user-show.html" data="admin/user/show">
                        <i class="fa fa-user-o"></i>
                        <span>会员管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-cm-index.html" addtabs="214" url="/index.php?s=/admin-cm-index.html" data="admin/cm/index">
                        <i class="fa fa-wechat"></i>
                        <span>评论管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-gb-index.html" addtabs="215" url="/index.php?s=/admin-gb-index.html" data="admin/gb/index">
                        <i class="fa fa-wpforms"></i>
                        <span>留言管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-gb-error.html" addtabs="216" url="/index.php?s=/admin-gb-error.html" data="admin/gb/error">
                        <i class="fa fa-commenting-o"></i>
                        <span>报错管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="">
                    <a href="/index.php?s=/admin-playlog-index.html" addtabs="217" url="/index.php?s=/admin-playlog-index.html" data="admin/playlog/index">
                        <i class="fa fa-play"></i>
                        <span>云播管理</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</section>
<!-- /.sidebar -->