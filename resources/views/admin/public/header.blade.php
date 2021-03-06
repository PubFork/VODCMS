<!-- Logo -->
<a href="javascript:;" class="logo">
    <!-- 迷你模式下Logo的大小为50X50 -->
    <span class="logo-mini">Cms</span>
    <!-- 普通模式下Logo -->
    <span class="logo-lg">VodCms</span>
</a>
<!-- 顶部通栏样式 -->
<nav class="navbar navbar-static-top">
    <!-- 边栏切换按钮-->
    <a href="javascript:;" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"></span>
    </a>

    <div id="nav" class="pull-left">
        <!--如果不想在顶部显示角标,则给ul加上disable-top-badge类即可-->
        <ul class="nav nav-tabs nav-addtabs disable-top-badge" role="tablist">
        </ul>
    </div>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

            <li>
                <a href="{:config('site_url')}" target="_blank"><i class="fa fa-home" style="font-size:14px;"></i></a>
            </li>

            <li class="dropdown notifications-menu">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning"></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">最新信息</li>
                    <li>
                        <ul class="menu">

                        </ul>
                    </li>
                    <li class="footer"><a href="javascript:;" target="_blank">更多信息</a></li>
                </ul>
            </li>

           <li><a href="javascript:;" data-toggle="checkupdate" title="检测更新"><i class="fa fa-refresh"></i></a></li>

            <li>
                <a href="javascript:;" data-toggle="wipecache" title="清空缓存">
                    <i class="fa fa-trash"></i>
                </a>
            </li>
            <li class="hidden-xs">
                <a href="javascript:;" data-toggle="fullscreen"><i class="fa fa-arrows-alt"></i></a>
            </li>

            <!-- 账号信息下拉框 -->
            <li class="dropdown user user-menu">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{:session('member_auth.avatar')}" class="user-image" alt="{:session('member_auth.username')}">
                    <span class="hidden-xs">{:session('member_auth.username')}</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="{:session('member_auth.avatar')}" class="img-circle" alt="{:session('member_auth.username')}">

                        <p>{:session('member_auth.username')}<small>{:session('member_auth.last_login_time')}</small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <a href="{:config('zanpiancms.cmsurl')}" target="_blank"><i class="fa fa-send"></i> 官网</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="{:config('zanpiancms.bbsurl')}" target="_blank"><i class="fa fa-comment"></i> 论坛</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="{:config('zanpiancms.helpurl')}" target="_blank"><i class="fa fa-file-word-o"></i> 文档</a>
                            </div>
                        </div>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                        <a href="javascript:;" data-url="{:admin_url('admin/member/editpwd')}"  data-name="修改{:session('member_auth.username')}登录密码" class="btn btn-default btn-flat btn-detail">修改密码</a>
                        </div>
                        <div class="pull-right">
                            <a href="javascript:;" url="{:admin_url('admin/login/logout')}" class="btn btn-default btn-flat logout">退出后台</a>
                        </div>
                    </li>
                </ul>
            </li>
            <!-- 控制栏切换按钮 -->
            <li>
                <a href="javascript:;" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
        </ul>
    </div>
</nav>