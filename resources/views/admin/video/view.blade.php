{layout name="layout/index" /}
<div class="panel panel-default panel-intro">
  <div class="panel-body" id="contents">
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade active in">
        <div class="widget-body no-padding">
          <div class="bootstrap-table">        
            <div class="fixed-table-toolbar">
             <div class="columns-right pull-right" style="margin-top:10px;">
                <form class="form-inline form-commonsearch nice-validator n-default" method="post" action="">
                  <input class="form-control" placeholder="搜索" type="text" name="wd">
                  <button type="submit" class="btn btn-default ajax-posturl"  title="普通搜索"  target-form="form-commonsearch"><i class="glyphicon glyphicon-search"></i></button>
                </form>
              </div>
               <div class="pull-right search">
    <select name="cid" class="form-control" type="get-select" style="margin:0 0 0 10px;">
   <option value="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}">分类筛选</option>
{volist name="listvod" id="vo"}<option value="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$vo.list_id,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}" {eq name="vo.list_id" value="$cid"}selected{/eq}>{$vo.list_name}</option>
{if isset($vo['son'])}{volist name="vo['son']" id="splist"}<option value="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$splist.list_id,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}" {eq name="splist.list_id" value="$cid"}selected{/eq}>├ {$splist.list_name}</option>{/volist}{/if}
{/volist}
</select>
              </div>  
                   <div class="pull-right search">
    <select name="cid" class="form-control" type="get-select" style="margin:0 0 0 10px;border-right:none">
    <option value="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid))}">其他筛选</option>
<option value="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>3,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}" {eq name="status" value="3"}selected{/eq}>复查</option>
<option value="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>1,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}" {eq name="isfilm" value="1"}selected{/eq}>已上映</option>
<option value="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>2,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}" {eq name="isfilm" value="2"}selected{/eq}>未上映</option>
<option value="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>3,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}" {eq name="isfilm" value="3"}selected{/eq}>热映中</option>
<option value="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>1,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}" {eq name="url" value="1"}selected{/eq}>无播放地址</option>
</select>
              </div>                
                   <div class="pull-right search">
    <select name="cid" class="form-control" type="get-select" style="margin:0 0 0 10px;border-right:none">
<option value="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}">连载筛选</option>
<option value="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>1,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}" {eq name="continu" value="1"}selected{/eq}>连载中</option>
<option value="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>2,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}" {eq name="continu" value="2"}selected{/eq}>已完结</option>
</select>
              </div>                                                                               
              <div class="pull-right search">
                <select name="status" class="form-control" type="get-select" style="margin:0 0 0 10px;border-right:none">
                  <option value="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}">状态筛选</option>
                  <option value="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>1,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}" {eq name="status" value="1"}selected{/eq}>
                  显示
                  </option>
                  <option value="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>2,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}" {eq name="status" value="2"}selected{/eq}>
                  隐藏
                  </option>
                </select>
              </div>
              <div class="bs-bars pull-left">
                <div id="toolbar" class="toolbar pull-left"><a href="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid))}" class="btn btn-primary ajax-url"><i class="fa fa-refresh"></i> </a></div>
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
                      <th style="text-align:center;vertical-align: middle;">{eq name="orders" value="vod_id desc"}<a href="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>'vod_id','order'=>'asc'))}" class="btn-link sort ajax-url">编号 <i class="fa fa-angle-up"></i></a>{else/}<a href="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>'vod_id','order'=>'desc'))}" class="btn-link sort ajax-url">编号 <i class="fa fa-angle-down"></i></a>{/eq}</th>
                      <th style="text-align:left;vertical-align: middle;">{eq name="orders" value="vod_cid desc"}<a href="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>'vod_cid','order'=>'asc'))}" class="btn-link sort ajax-url">视频分类 <i class="fa fa-angle-up"></i></a>{else/}<a href="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>'vod_cid','order'=>'desc'))}" class="btn-link sort ajax-url">视频分类 <i class="fa fa-angle-down"></i></a>{/eq}</th>
                      
                      <th style="text-align:left;vertical-align: middle;">{eq name="orders" value="vod_name desc"}<a href="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>'vod_name','order'=>'asc'))}" class="btn-link sort ajax-url">视频名称 <i class="fa fa-angle-up"></i></a>{else/}<a href="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>'vod_name','order'=>'desc'))}" class="btn-link sort ajax-url">视频名称 <i class="fa fa-angle-down"></i></a>{/eq}</th>
                      <th style="text-align:center;vertical-align: middle;">{eq name="orders" value="vod_hits desc"}<a href="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>'vod_hits','order'=>'asc'))}" class="btn-link sort ajax-url">视频人气 <i class="fa fa-angle-up"></i></a>{else/}<a href="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>'vod_hits','order'=>'desc'))}" class="btn-link sort ajax-url">视频人气 <i class="fa fa-angle-down"></i></a>{/eq}</th>
                      <th style="text-align:center;vertical-align: middle;">{eq name="orders" value="vod_addtime desc"}<a href="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>'vod_addtime','order'=>'asc'))}" class="btn-link sort ajax-url">更新时间 <i class="fa fa-angle-up"></i></a>{else/}<a href="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$cid,'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>'vod_addtime','order'=>'desc'))}" class="btn-link sort ajax-url">更新时间 <i class="fa fa-angle-down"></i></a>{/eq}</th>
                      <th style="text-align:center;vertical-align: middle;">相关操作</th>
                    </tr>
                  </thead>
            <tbody>
                  {notempty name="list"}
                  {volist name="list" id="vo"}
                <tr>
                <td class="bs-checkbox"><input data-index="{$vo['vod_id']}" name="id[]" type="checkbox"  value="{$vo['vod_id']}"></td>
                <td style="text-align:center;vertical-align: middle;"><a href="{:zanpian_data_url('home/vod/read',array('id'=>$vo['vod_id'],'pinyin'=>$vo['vod_letters'],'cid'=>$vo['vod_cid'],'dir'=>getlistname($vo['vod_cid'],'list_dir'),'jumpurl'=>$vo['vod_jumpurl']))}" class="btn-link" target="_blank">{$vo['vod_id']}</a></td>
                
                <td style="text-align:center;vertical-align: middle;"><a href="{:admin_url('admin/vod/index',array('view'=>$view,'sid'=>$sid,'cid'=>$vo['vod_cid'],'stars'=>$stars,'status'=>$status,'continu'=>$continu,'isfilm'=>$isfilm,'player'=>$player,'url'=>$url,'wd'=>$wd,'tag'=>$tag,'type'=>$type,'order'=>$order))}" class="btn-link ajax-url">{:getlistname($vo['vod_cid'])}</a>{$vo.vod_hits|default='0'}</a></td>
                
                <td style="text-align:left;vertical-align: middle;"><a href="javascript:;" class="btn-link editable editable-click" data-id="{$vo['vod_id']}" data-name="vod_name" data-type="text" data-pk="{$vo['vod_id']}" data-url="{:admin_url('admin/vod/editable')}">{$vo.vod_name|msubstr=0,10,'.'}</a> </td>
           
                <td style="text-align:center;vertical-align: middle;"><a href="javascript:;" class="btn-link editable editable-click" data-id="{$vo['vod_id']}" data-name="vod_hits" data-type="text" data-pk="{$vo['vod_id']}" data-url="{:admin_url('admin/vod/editable')}">{$vo.vod_hits|default='0'}</a></td>
                <td style="text-align:center;vertical-align: middle;">{$vo.vod_addtime|date='Y-m-d H:i:s',###}</td>              
                <td style="text-align:center;vertical-align: middle;">
                <a href="javascript:;" data="{$vo.vod_name}#{$vo.vod_id}_{$sid}" class="btn btn-info btn-xs add-vod-name"><i class="fa fa-plus-square"></i> 添加</a>
               </td>             
            </tr>
 {/volist}   
                  {else/}
                  <tr>
                    <td style="text-align:center;vertical-align: middle;" colspan="7" >抱歉，没有找到相关内容！</td>
                  </tr>
                  {/notempty}
                  </tbody>
 </table>
              </form>
            </div>
            {gt name="list->lastPage()" value="1"}
            <div class="fixed-table-pagination" style="overflow:hidden">
              <div class="pull-left pagination-detail"><span class="pagination-info">共{$list->total()}条数据 {$list->currentPage()}/{$list->lastPage()} </span><span class="page-list">每页显示 {$list->listRows()} 条数据</span></div>
              <div class="pull-right pagination">
                <ul class="pagination">
                  {$page}
                </ul>
              </div>
            </div>
            {/gt}
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="hide layer-footer">
    <label class="control-label col-xs-12 col-sm-2"></label>
    <div class="col-xs-12 col-sm-8">
        <button type="reset" class="btn btn-primary btn-embossed btn-close" onclick="Layer.closeAll();">关闭</button>
    </div>
</div>
