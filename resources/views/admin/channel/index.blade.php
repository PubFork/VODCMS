@extends('admin.layout.default')
@section('content')
<div class="panel panel-default panel-intro">
    <div class="panel-heading"><div class="panel-lead"><em>{{$nav_title['title']}}</em>{$nav_title.remark}</div></div>
    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in">
                <div class="widget-body no-padding">
                <div class="bootstrap-table"><div class="fixed-table-toolbar"><div class="bs-bars pull-left"><div id="toolbar" class="toolbar">
                <a target-form="ids" url="{:admin_url('admin/channel/up')}" type="submit" class="btn btn-primary btn-disabled ajax-post disabled"><i class="fa fa-refresh"></i> 更新</a> <a href="javascript:;" data-name="添加分类" data-url="{:admin_url('admin/channel/add')}" class="btn btn-success btn-add btn-editone"><i class="fa fa-plus"></i> 添加</a>   <a  url="{:admin_url('admin/channel/del')}" target-form="ids" class="confirm btn btn-danger btn-del btn-disabled ajax-post"><i class="fa fa-trash"></i> 删除</a> 
                      <span id="selectedChks" style="display:none">已选择<strong></strong>记录</span>
                    </div></div></div></div>
                    <div class="fixed-table-container" style="padding-bottom: 0px;">
                    <div class="fixed-table-body" id="contents">
                    <form class="ids"> 
                   <table id="table" class="table table-striped table-bordered table-hover" style="margin-top: 0px;" width="100%">
                   <thead>
                   <tr style="height:45px;">
                   <th align="center" class="bs-checkbox"><input name="chkall" type="checkbox" id="chkall"></th>
                   <th style="text-align:center;vertical-align: middle; ">ID</th>
                   <th style="text-align:center;vertical-align: middle; ">标题</th>
                   <th style="text-align:center;vertical-align: middle; ">模型</th>
                   <th style="text-align:center;vertical-align: middle; ">名称</th>
                   <th style="text-align:center;vertical-align: middle; ">拼音</th>
                   <th style="text-align:center;vertical-align: middle; ">模版</th>
                   <th style="text-align:center;vertical-align: middle; width:60px">排序</th>
                   <th style="text-align:center;vertical-align: middle; ">状态</th>
                   <th style="text-align:center;vertical-align: middle; ">操作</th>
                  </tr>
                 </thead>
               <tbody>                
                {notempty name="list"}
                {volist name="list" id="menu"}
               <tr>
             <td class="bs-checkbox" style="text-align:center;vertical-align: middle;"><input name="id[]" type="checkbox" value="{$menu['list_id']}" id="checkbox"></td>
                    <td style="text-align:center;vertical-align:middle;">{$menu.list_id}</td> 
                    <td style="text-align:left;vertical-align:middle;">{$menu.level_show}{$menu.list_name}{notin name="menu.list_sid" value="8,9,11"}&nbsp;&nbsp;
(<font color="red">{:getcount($menu['list_id'],$menu['list_sid'])}</font>){/notin}{eq name="menu.list_pid" value="0"}<a href="{:admin_url('admin/channel/add',array('pid'=>$menu['list_id']))}"><i class="fa fa-plus" style="color:#F30; margin-left:8px;"></i></a>{/eq}</td> 
                    <td style="text-align:center;vertical-align: middle;">{$menu.title|default='无'}</td>
                    <td style="text-align:center;vertical-align: middle;"><input name="list_name[{$menu.list_id}]" class="form-control input-sm" value="{$menu.list_name}" type="text" style="text-align:center; width:80%; margin:0 auto"></td>
                    <td style="text-align:center;vertical-align: middle;"><input name="list_dir[{$menu.list_id}]" class="form-control input-sm" value="{$menu.list_dir}" type="text" style="text-align:center; width:80%; margin:0 auto"></td> 
                    <td style="text-align:center;vertical-align: middle;"><input name="list_skin[{$menu.list_id}]" class="form-control input-sm" value="{$menu.list_skin}" type="text" style="text-align:center; width:80%; margin:0 auto"></td>
                    <td style="text-align:center;vertical-align: middle;"><input name="list_oid[{$menu.list_id}]" class="form-control input-sm" value="{$menu.list_oid}" type="text" style="text-align:center;"></td> 
                     
                    <td style="text-align:center;vertical-align: middle;">{eq name="menu.list_status" value="1"}
                 <a class="btn  btn-xs btn-default ajax-get" url="{:admin_url('admin/channel/status',array('id'=> $menu['list_id'],'status'=>0))}">显示</a>{else /}<a class="btn btn-info btn-xs btn-danger ajax-get" url="{:admin_url('admin/channel/status',array('id'=> $menu['list_id'],'status'=>1))}">隐藏</a>{/eq}</td>
                    
                    <td style="text-align:center;vertical-align: middle;"><a href="javascript:;" data-name="编辑分类" data-url="{:admin_url('admin/channel/edit',array('id'=>$menu['list_id']))}" class="btn btn-success btn-editone btn-xs"><i class="fa fa-pencil"></i></a> <a  url="{:admin_url('admin/channel/del',array('id'=>$menu['list_id']))}" class="confirm btn btn-danger btn-xs ajax-get"><i class="fa fa-trash"></i></a></td>
                    
                    </tr>                
                     {/volist}
                 {else/}<tr><td style="text-align:center;vertical-align: middle;" colspan="10" >抱歉，没有找到相关内容！</td></tr>{/notempty}
          </tbody>
        </table>
        </form>
                    </div></div></div><div class="clearfix total" total="{:count($list)}"></div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection