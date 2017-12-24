@extends('admin.layout.default')
@section('content')
<div class="panel panel-default panel-intro">
  <div class="panel-heading">
    <div class="panel-lead"><em>{{  $nav_title['title'] }}</em>{{  $nav_title['remark'] }}</div>
  </div>
  <div class="panel-body" id="contents">
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade active in">
        <div class="widget-body no-padding">
          <div class="bootstrap-table">
 <div class="commonsearch-table hidden">
<form class="form-inline form-commonsearch nice-validator n-default" method="post" action="" role="form">
<div class="form-group" style="padding:0 10px 0 0px;position: relative;"><label for="createtime" class="control-label" style="padding:0 10px">关键词搜索</label><input class="form-control" placeholder="搜索视频名称,演员,导演" type="text" name="wd">
</div>
                
                <div class="form-group" style="margin:5px">
                  <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-success ajax-posturl" target-form="form-commonsearch">提交</button>
                    <button type="reset" class="btn btn-default">重置</button>
                  </div>
                </div>
              </form>
            </div>          
            <div class="fixed-table-toolbar">
              <div class="columns-right pull-right" style="margin-top:10px;">
                <a href="javascript:;" class="btn  btn-default hidedsearch" title="普通搜索"><i class="glyphicon glyphicon-search"></i> </a>
              </div>
               <div class="pull-right search">
    <select name="cid" class="form-control" type="get-select" style="margin:0 0 0 10px;">
   <option value="{{ admin_url('admin/vod/index',array('stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}">分类筛选</option>
{volist name="listvod" id="vo"}}<option value="{:admin_url('admin/vod/index',array('cid'=>$vo.list_id,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}" {eq name="vo.list_id" value="$cid"}}selected{/eq}}>{$vo.list_name}}</option>
{if isset($vo['son'])}}{volist name="vo['son']" id="splist"}}<option value="{:admin_url('admin/vod/index',array('cid'=>$splist.list_id,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}" {eq name="splist.list_id" value="$cid"}}selected{/eq}}>├ {$splist.list_name}}</option>{/volist}}{/if}}
{/volist}}
</select>
              </div>  
                   <div class="pull-right search">
    <select name="cid" class="form-control" type="get-select" style="margin:0 0 0 10px;border-right:none">
    <option value="{:admin_url('admin/vod/index')}}">其他筛选</option>
<option value="{:admin_url('admin/vod/index',array('cid'=>$cid,'stars'=>$stars,'status'=>3,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}" {eq name="status" value="3"}}selected{/eq}}>复查</option>
<option value="{:admin_url('admin/vod/index',array('cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>1,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}" {eq name="isfilm" value="1"}}selected{/eq}}>已上映</option>
<option value="{:admin_url('admin/vod/index',array('cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>2,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}" {eq name="isfilm" value="2"}}selected{/eq}}>未上映</option>
<option value="{:admin_url('admin/vod/index',array('cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>3,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}" {eq name="isfilm" value="3"}}selected{/eq}}>热映中</option>
<option value="{:admin_url('admin/vod/index',array('cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>1,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}" {eq name="url" value="1"}}selected{/eq}}>无播放地址</option>
</select>
              </div>                
                   <div class="pull-right search">
    <select name="cid" class="form-control" type="get-select" style="margin:0 0 0 10px;border-right:none">
    <option value="{:admin_url('admin/vod/index',array('cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}">播放筛选</option>
{volist name=":F('_data/player')" id="vo"}}
<option value="{:admin_url('admin/vod/index',array('cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$vo.play_name,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}" {eq name="vo.play_name" value="$player"}}selected{/eq}}>{$vo.play_title}}</option>
{/volist}}
</select>
              </div>  
                   <div class="pull-right search">
    <select name="cid" class="form-control" type="get-select" style="margin:0 0 0 10px;border-right:none">
<option value="{{admin_url('admin/video/index',array('cid'=>$cid,'stars'=>$stars,'status'=>$status,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}">连载筛选</option>
<option value="{{admin_url('admin/video/index',array('cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>1,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}" {{ $continu == 1 ? 'selected' : '' }}>连载中</option>
<option value="{{admin_url('admin/video/index',array('cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>2,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}" {{ $continu == 2 ? 'selected' : '' }}>已完结</option>
</select>
              </div>                                                                               
              <div class="pull-right search">
                <select name="status" class="form-control" type="get-select" style="margin:0 0 0 10px;border-right:none">
                  <option value="{{admin_url('admin/video/index',array('cid'=>$cid,'stars'=>$stars,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}">状态筛选</option>
                  <option value="{{admin_url('admin/video/index',array('cid'=>$cid,'stars'=>$stars,'status'=>1,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}" {{ $status==1? 'selected' : '' }}>
                  显示
                  </option>
                  <option value="{{admin_url('admin/video/index',array('cid'=>$cid,'stars'=>$stars,'status'=>2,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}}" {{ $status==2? 'selected' : '' }}>
                  隐藏
                  </option>
                </select>
              </div>
              <div class="bs-bars pull-left">
                <div id="toolbar" class="toolbar pull-left"><a href="{:admin_url('admin/vod/index')}}" class="btn btn-primary ajax-url"><i class="fa fa-refresh"></i> </a> <a href="{{ url('admin/video/add') }}}}" data-name="添加视频" data-url="{:admin_url('admin/vod/add')}}" class="btn btn-success btn-add"><i class="fa fa-plus"></i> 添加</a> <a  url="{:admin_url('admin/vod/status',array('status'=>1))}}" target-form="ids" class="confirm btn btn-info btn-disabled ajax-post disabled"><i class="fa fa-unlock"></i> 显示</a> <a  url="{:admin_url('admin/vod/status',array('status'=>0))}}" target-form="ids" class="confirm btn btn-warning btn-disabled ajax-post disabled"><i class="fa fa-lock"></i> 隐藏</a> <a  url="{:admin_url('admin/vod/del')}}" target-form="ids" class="confirm btn btn-danger btn-del btn-disabled ajax-post disabled"><i class="fa fa-trash"></i> 删除</a> <a  url="{:admin_url('admin/vod/del')}}" target-form="ids" class="confirm btn bg-purple btn-disabled disabled btn-move"><i class="fa fa-life-ring"></i> 移动</a> </div><span style="display:none" class="move-cid ids"><select name="pestcid" class="form-control" style="float:left; width:auto; padding:0 10px 0 10px;margin:3px 10px 0 10px;"><option value="">选择分类</option>{volist name="listvod" id="vo"}}<option value="{$vo.list_id}}" {eq name="vo.list_id" value="$cid"}}selected{/eq}}>{$vo.list_name}}</option>
{if isset($vo['son'])}}{volist name="vo['son']" id="splist"}}<option value="{$splist.list_id}}" {eq name="splist.list_id" value="$cid"}}selected{/eq}}>├ {$splist.list_name}}</option>{/volist}}{/if}}
{/volist}}</select><a url="{:admin_url('admin/vod/pestcid')}}" target-form="ids,pestcid" class="confirm btn bg-olive btn-disabled disabled ajax-post"> 确 认</a></span><span id="selectedChks" style="display:none; margin-left:10px;">已选择<strong></strong>记录</span> </div>
              </div>
            </div>
          </div>
          <div class="fixed-table-container" style="padding-bottom: 0px;">
            <div class="fixed-table-body">
              <form class="ids">
                <table id="table" class="table table-striped table-bordered table-hover" style="margin-top: 0px;" width="100%">
                  <thead>
                    <tr style="height:45px;">
                      <th class="bs-checkbox "><input name="btSelectAll" type="checkbox"></th>
                      <th style="text-align:center;vertical-align: middle;">
                          @if(true)
                              <a href="/admin/video/index" class="btn-link sort ajax-url">编号 <i class="fa fa-angle-up"></i></a>
                          @else
                              <a href="/admin/video/index" class="btn-link sort ajax-url">编号 <i class="fa fa-angle-down"></i></a>
                          @endif
                      </th>
                      <th style="text-align:left;vertical-align: middle;">
                          @if(true)
                          <a href="" class="btn-link sort ajax-url">视频名称 <i class="fa fa-angle-up"></i></a>
                          @else
                          <a href="" class="btn-link sort ajax-url">视频名称 <i class="fa fa-angle-down"></i></a>
                          @endif
                      </th>
                      <th style="text-align:center;vertical-align: middle;">播放器</th>
                      <th style="text-align:center;vertical-align: middle;">关联文章</th>
                      <th style="text-align:center;vertical-align: middle;">视频类型</th>
                      <th style="text-align:center;vertical-align: middle;">
                          @if(true)
                          <a href="" class="btn-link sort ajax-url">视频人气 <i class="fa fa-angle-up"></i></a>
                          @else
                          <a href="" class="btn-link sort ajax-url">视频人气 <i class="fa fa-angle-down"></i></a>
                          @endif
                      </th>
                      <th style="text-align:left;vertical-align: middle;">
                          @if(true)
                          <a href="" class="btn-link sort ajax-url">视频评分 <i class="fa fa-angle-up"></i></a>
                          @else
                          <a href="" class="btn-link sort ajax-url">视频评分 <i class="fa fa-angle-down"></i></a>
                          @endif
                      </th>
                        <th style="text-align:center;vertical-align: middle;">
                        @if(true)
                            <a href="" class="btn-link sort ajax-url">视频星级 <i class="fa fa-angle-up"></i></a>
                        @else
                            <a href="" class="btn-link sort ajax-url">视频星级 <i class="fa fa-angle-down"></i></a>
                        @endif
                        </th>
                      <th style="text-align:center;vertical-align: middle;">
                          @if(true)
                          <a href="" class="btn-link sort ajax-url">更新时间 <i class="fa fa-angle-up"></i></a>
                          @else
                          <a href="" class="btn-link sort ajax-url">更新时间 <i class="fa fa-angle-down"></i></a>
                          @endif
                      </th>
                      <th style="text-align:center;vertical-align: middle;">相关操作</th>
                    </tr>
                  </thead>
            <tbody>
          @if(!$list->isEmpty())
              @foreach($list as $vo)
                <tr>
                    <td class="bs-checkbox"><input data-index="{{$vo['vod_id']}}" name="id[]" type="checkbox"  value="{{$vo['vod_id']}}"></td>
                    <td style="text-align:center;vertical-align: middle;"><a href="" class="btn-link" target="_blank">{{$vo['vod_id']}}</a></td>
                    <td style="text-align:left;vertical-align: middle;">『<a href="" class="btn-link ajax-url">测试</a>』
                        <a href="javascript:;" class="btn-link editable editable-click" data-id="{{$vo['vod_id']}}"
                           data-name="vod_name" data-type="text" data-pk="{{$vo['vod_id']}}"
                           data-url="{:admin_url('admin/vod/editable')}}">{{$vo['vod_name']}}</a>
                        @if($role = true)
                        <a href="javascript:;" id="{{$vo['vod_id']}}" class="btn-link btn-editone"
                           data-url="{:admin_url('admin/role/actor',array('vid'=> $vo['vod_id']))}}"
                           data-name="添加角色到视频{{$vo['vod_name']}}" data-height="95%">
                            <i class="fa fa-user-secret" style="color:#e74c3c"></i>
                        @else
                            <a href="javascript:;" id="{{$vo['vod_id']}}" class="btn-link btn-editone"
                               data-url="{:admin_url('admin/vod/addrole',array('vid'=> $vo['vod_id']))}}"
                               data-name="添加角色到视频{{$vo['vod_name']}}" ><i class="fa fa-user-plus"></i>
                        @endif</a>
                            @if($story = true)&nbsp;&nbsp;
                            <a href="{:admin_url('admin/story/edit',array('id'=> $vo['story_id']))}}" class="btn-link">
                                <i class="fa fa-calendar" style="color:#e74c3c"></i></a>
                            @else &nbsp;&nbsp;
                            <a href="{:admin_url('admin/story/add',array('vid'=> $vo['vod_id']))}}" class="btn-link">
                                <i class="fa fa-calendar-plus-o"></i></a>
                            @endif </td>
                    <td style="text-align:center;vertical-align: middle;">{{$vo['vod_play']}}</td>
                    <td style="text-align:center;vertical-align: middle;">
                        <a href="javascript:;" id="{{$vo['vod_id']}}" class="btn-editone btn-link"
                           data-url="" data-name="添加文章到视频{{$vo['vod_name']}}">(1)篇</a></td>
                    <td style="text-align:center;vertical-align: middle;">
                        <a href="javascript:;" id="{{$vo['vod_id']}}" class="btn-editone btn-link"
                           data-url="" data-name="编辑添加{{$vo['vod_name']}}类型" >{{$vo['vod_mcid']}}</a></td>
                    <td style="text-align:center;vertical-align: middle;">
                        <a href="javascript:;" class="btn-link editable editable-click" data-id="{{$vo['vod_id']}}" data-name="vod_hits" data-type="text" data-pk="{{$vo['vod_id']}}" data-url="{admin/vod/editable')}}">{{$vo['vod_hits']}}</a></td>
                    <td style="text-align:center;vertical-align: middle;">
                        <a href="javascript:;" class="btn-link editable editable-click" data-id="{{$vo['vod_id']}}" data-name="vod_gold" data-type="text" data-pk="{{$vo['vod_id']}}" data-url="{:admin_url('admin/vod/editable')}}">{{$vo['vod_gold']}}</a></td>
                    <td style="text-align:center;vertical-align: middle;"><img src="/style/admin/vodcms/img/star5.gif"  id="vod_{{$vo['vod_id']}}_{$i}}" class="setstars"></td>
                    <td style="text-align:center;vertical-align: middle;">{{$vo['vod_addtime']}}</td>
                    <td style="text-align:center;vertical-align: middle;">
                    @if($vo['vod_status'] == 1)
                            <a class="btn btn-info btn-xs btn-success ajax-get" url="">显示</a>
                    @else
                            <a class="btn btn-info btn-xs btn-danger ajax-get" url="">隐藏</a>
                    @endif
                    <a href="/admin/video/edit?id={{$vo['vod_id']}}" data-url="/admin/video/edit?id={{$vo['vod_id']}}"  data-name="编辑视频" class="btn btn-success btn-edit btn-xs"><i class="fa fa-pencil"></i> 编辑</a>
                    <a url="" class="confirm btn btn-danger btn-xs confirm ajax-get"><i class="fa fa-trash-o"></i> 删除</a>
                   </td>
                </tr>
            @endforeach
          @else
                  <tr>
                    <td style="text-align:center;vertical-align: middle;" colspan="12" >抱歉，没有找到相关内容！</td>
                  </tr>
          @endif
                  </tbody>
 </table>
              </form>
            </div>
            <div class="fixed-table-pagination" style="overflow:hidden">
              <div class="pull-left pagination-detail"><span class="pagination-info" total="{{$list->total()}}}}">共{{$list->total()}}条数据 {{$list->currentPage()}}/{{$list->lastPage()}} </span><span class="page-list">每页显示 20 条数据</span></div>

              <div class="pull-right pagination">
                <ul class="pagination">
                  {{ $list->render() }}
                </ul>
              </div>

            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
