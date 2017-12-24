<!DOCTYPE html>
<html lang="">
    <head>
        @include('admin.public.meta')
    </head>
    <body class="hold-transition skin-green sidebar-mini fixed" id="tabs">
        <div class="wrapper">

            <header id="header" class="main-header">
                @include('admin.public.header')
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                @include('admin.public.menu')
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper tab-content tab-addtabs">

            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer hide">
                <div class="pull-right hidden-xs">
                </div>
                <strong>Copyright &copy; 2017-2018 VodCms.</strong> All rights
                reserved.
            </footer>

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
            @include('admin.public.control')
        </div>
        <!-- ./wrapper -->
        <!-- end main content -->
        @include('admin.public.script')
    </body>
</html>