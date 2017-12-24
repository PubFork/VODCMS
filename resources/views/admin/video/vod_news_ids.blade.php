<div style="text-align:center; line-height:45px;">已收录文章列表(<font color="#FF0000">{$count}</font>)篇</div>
<table id="table1" class="table table-striped table-bordered table-hover" width="100%">
  <thead>
      <tr>
        <th style="text-align:center;vertical-align: middle;">ID</th>
        <th style="text-align:left">文章标题</th>
        <th style="text-align:center">相关操作</th>
     </tr>    
  </thead>
  <tbody>
  {notempty name="list_news"}
  {volist name="list_news" id="vo"}
  <tr style="height:35px;">
    <td align="center">{$vo.news_id}</td>
    <td align="left"><a class="btn-link" href="{:zanpian_data_url('home/news/read',array('id'=>$vo['news_id'],'cid'=>$vo['news_cid'],'dir'=>$vo['list_dir']))}" target="_blank">{$vo.news_name|msubstr=0,16}</a></td>
    <td align="center"><a href="javascript:;" class="btn-link addajax" id="{$vo.news_id}_{$tid|default='0'}_{$did|default='0'}_del_{$vo.news_id}_vod_1" title="从明星中移除新闻">删除</a></td>
  </tr>
  {/volist}
  {else/}
  <tr>
   <td style="text-align:center;vertical-align: middle;" colspan="4" >该视频未收录任何文章！</td>
   </tr>
   {/notempty}
  </tbody>
</table>
