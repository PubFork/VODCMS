{layout name="layout/index" /}
<div class="panel panel-default panel-intro">
<div class="panel-body" style="padding:0px;">
          <div class="form-group">
            <div class="col-xs-12 col-sm-6" id="vodhtml" tid="{$tid|default='0'}" nid="{$nid|default='0'}" did="{$vid|default='0'}">
            </div>
            <div class="col-xs-12 col-sm-6" id="contents">
            <div style="text-align:center; line-height:45px;">等待收录文章列表</div>
              <table id="table2" class="table table-striped table-bordered table-hover" width="100%">
                <thead>
                  <tr>
                    <th style="text-align:center;vertical-align: middle;">ID</th>
                    <th class="col" style="text-align:left">文章标题</th>
                    <th class="col" style="text-align:center">相关操作</th>
                  </tr>
                </thead>
                <tbody>
                {notempty name="list"}
                {volist name="list" id="vo"}
                <tr style="height:35px;">
                  <td align="center">{$vo.news_id}</td>
                  <td align="left"><a href="{:zanpian_data_url('home/news/read',array('id'=>$vo['news_id'],'cid'=>$vo['news_cid'],'dir'=>$vo['list_dir']))}" target="_blank" class="btn-link">{$vo.news_name|msubstr=0,16}</a></td>
                  <td align="center"><a href="javascript:;" class="btn btn-info btn-xs addajax" id="{$vo.news_id}_{$tid|default='0'}_{$vid|default='0'}_add_0_vod_1"><i class="fa fa-plus-square"></i> 添加</a></td>
                </tr>
                {/volist}
                {else/}
                 <tr>
   <td style="text-align:center;vertical-align: middle;" colspan="4">没有数据，请先添加数据！</td>
   </tr>
                {/notempty}
                </tbody>
              </table>
 <div class="fixed-table-pagination" style="overflow:hidden;">
             <div class="commonsearch-table pull-left" style=" position:absolute; left:-100%">
<form class="form-inline form-commonsearch nice-validator n-default" method="post" action="" role="form">
<div class="form-group" style="padding:0 10px 0 0px;position: relative;"><label for="createtime" class="control-label" style="padding:0 10px">搜索</label><input class="form-control" placeholder="新闻名称" type="text" name="wd">
</div>
                <div class="form-group">
                  <div class="col-sm-12 text-center" style="margin:0px; padding:0px;">
                    <button type="submit" class="btn btn-success ajax-posturl" target-form="form-commonsearch">提交</button>
                    <button type="reset" class="btn btn-default">重置</button>
                    <a href="{:admin_url('admin/news/index',array('vid'=>$vid))}" class="btn btn-primary ajax-url"><i class="fa fa-refresh"></i> </a>
                  </div>
                </div>
              </form>
            </div>   
              <div class="pull-right pagination" style="margin:0px; padding:0px;">
                <ul class="pagination">
                  {$page}
                </ul>
              </div>
            </div>
             
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