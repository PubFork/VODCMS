@extends('admin.layout.default')
@section('content')
<div class="panel panel-default panel-intro">
    <div class="panel-heading">
        <div class="panel-lead"><em>{$nav_title.title}</em>{$nav_title.remark}</div>
        <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab_1" data-toggle="tab">基本设置</a></li>
                   <li ><a href="#tab_2" data-toggle="tab">扩展设置</a></li> 
                   <li ><a href="#tab_3" data-toggle="tab">上映设置</a></li> 
                   <li ><a href="#tab_4" data-toggle="tab">剧情设置</a></li> 
                   <li ><a href="#tab_5" data-toggle="tab">演员角色</a></li> 
        </ul>
    </div>
<div class="panel-body is-dialog">    
<form id="edit-form" class="form-horizontal form-ajax ajax-no-close" role="form" data-toggle="validator" method="post">    
<div id="myTabContent" class="tab-content">
<div class="tab-pane fade active in" id="tab_1">
    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">视频名称:</label>
        <div class="col-xs-12 col-sm-3">
         <input type="text" id="vod_name" name="vod_name" value="{$info.vod_name|default=''}" class="form-control">
         </div>        
         <div class="col-xs-12" style="width:auto">
          <select id="vod_cid" name="vod_cid" class="form-control" style="width:auto">
<option value="">选择分类</option> 
{volist name="listvod" id="vo"}<option value="{$vo.list_id}" {if isset($info['vod_cid'])} {eq name="vo.list_id" value="$info['vod_cid']"}selected{/eq}{/if}>{$vo.list_name}</option>
{if isset($vo['son'])}{volist name="vo['son']" id="splist"}<option value="{$splist.list_id}" {eq name="splist.list_id" value="$info['vod_cid']"}selected{/eq}>├ {$splist.list_name}</option>{/volist}{/if}
{/volist}
</select>
         </div>
         <div class="col-xs-12" style="width:auto">
          <select id="vod_language" name="vod_language" class="form-control" style="width:auto">
<option value="">对白</option> 
{notempty name="info.vod_language"}<option value='{$info.vod_language}' selected>{$info.vod_language}</option>{/notempty}<option value=''>对白</option>{volist name="info.vod_language_list" id="val"} <option value="{$val}">{$val}</option>{/volist}
</select>
         </div>
          <div class="col-xs-12" style="width:auto">
          <select id="vod_area" name="vod_area" class="form-control" style="width:auto">
<option value="">地区</option> 
{notempty name="info.vod_area"}<option value='{$info.vod_area}' selected>{$info.vod_area}</option>{/notempty}<option value=''>地区</option>{volist name="info.vod_area_list" id="val"} <option value="{$val}">{$val}</option>{/volist}
</select>
         </div> 
          <div class="col-xs-12" style="width:auto">
          <select id="vod_year" name="vod_year" class="form-control" style="width:auto">
<option value="">年代</option> 
{notempty name="info.vod_year"}<option value='{$info.vod_year}' selected>{$info.vod_year}</option>{/notempty}<option value=''>年代</option>{volist name="info.vod_year_list" id="val"} <option value="{$val}">{$val}</option>{/volist}
</select>
         </div> 
          <div class="col-xs-12" style="width:auto">
          <select id="vod_isfilm" name="vod_isfilm" class="form-control" style="width:auto">
<option value="1" {eq name="info.vod_isfilm" value="1"}selected{/eq}>已上映</option>
<option value="2" {eq name="info.vod_isfilm" value="2"}selected{/eq}>未上映</option
><option value="3" {eq name="info.vod_isfilm" value="3"}selected{/eq}>热映中</option>
</select>
         </div> 
         <span style="line-height:30px;">推送百度：</span><input name="insertseo" type="checkbox" {empty name="info['vod_id']"}checked{/empty} title="勾选推送到百度" style="border:none;width:auto; position:relative; top:2px;margin-bottom:3px;margin-right:8px;" >                                                  
    </div> 
     <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">视频别名:</label>
        <div class="col-xs-12 col-sm-3">
         <input type="text" id="vod_aliases" name="vod_aliases" value="{$info.vod_aliases|default=''}" class="form-control">
         </div>        
         <label for="c-keywords" class="control-label col-xs-12" style="width:auto; padding-left:0; padding-right:0">备注:</label>
         <div class="col-xs-12" style="width:auto">
         <input type="text" id="vod_title" name="vod_title" value="{$info.vod_title|default=''}" class="form-control" style="width:150px;text-align:center">
         </div>
          <label for="c-keywords" class="control-label col-xs-12" style="width:auto; padding-left:0; padding-right:0">连载:</label>
          <div class="col-xs-12" style="width:auto">
        <input type="text" id="vod_continu" name="vod_continu" value="{$info.vod_continu|default=''}" class="form-control" style="width:100px;text-align:center">
         </div> 
         <label for="c-keywords" class="control-label col-xs-12" style="width:auto; padding-left:0; padding-right:0">集数:</label>
          <div class="col-xs-12" style="width:auto">
         <input type="text" id="vod_total" name="vod_total" value="{$info.vod_total|default=''}" class="form-control" style="width:50px; text-align:center">
         </div>
         <label for="c-keywords" class="control-label col-xs-12" style="width:auto; padding-left:0; padding-right:0">时长:</label>
          <div class="col-xs-12" style="width:auto">
         <input type="text" id="vod_length" name="vod_length" value="{$info.vod_length|default=''}" class="form-control" style="width:50px; text-align:center">
         </div>           
    </div>    
      <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">视频类型:</label>
        <div class="col-xs-12 col-sm-11" style=" line-height:35px;">
        <ul style="padding:0 10px 0 10px; line-height:25px;" id="vod_cat_list">
 {volist name="info.vod_cat_list" id="vo"}<span style=" margin-right:10px;display:block; float:left"><input style="border:none;width:auto; margin-bottom:3px;margin-right:5px;position:relative; top:2px;" type="checkbox"  name="vod_mcids[]"   value="{$vo.m_cid}"{if in_array($vo['m_cid'],$info.vod_mcid_array)}checked="checked"{/if} /> {$vo.m_name}</span>
            {/volist} 
            </ul>    
        </div>
    </div>
     <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">视频属性:</label>
        <div class="col-xs-12 col-sm-6" style=" line-height:35px;">
   {volist name=":config('document_position')" id="vo"}<input  style="border:none;width:auto; position:relative; top:2px;margin-bottom:3px;margin-right:8px;{if $key != 1}margin-left:10px;{/if}" type="checkbox" value="{$key}" name="vod_prty[]"   {if  isset($info['vod_prty_array']) && in_array($key,$info.vod_prty_array)}checked="checked"{/if} />{$vo}
            {/volist}         
        </div>
    </div>
     <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">视频周期:</label>
        <div class="col-xs-12 col-sm-6" style=" line-height:35px;">
{volist name=":config('week_list')" id="vo"}<input  style="border:none;width:auto; position:relative; top:0px;margin-bottom:3px;margin-right:5px; {if $key != 1}margin-left:10px;{/if}" type="checkbox" value="{$key}" name="vod_weekday[]"  {if isset($info['vod_week_array']) && in_array($key,$info.vod_week_array)}checked="checked"{/if} />{$vo}
            {/volist}        
        </div>
    </div>             
     <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">资料采集:</label>
         <div class="col-xs-12 col-sm-3">
         <input type="text" id="vod_doubanid" name="vod_doubanid" value="{$info.vod_doubanid|default=''}" class="form-control" placeholder="豆瓣ID"><a href="javascript:;" id="getdoubancm" class="btn btn-info btn-add" style="cursor:pointer; position:absolute; right:85px;top:0">采集评论</a><a href="javascript:;" id="getdoubaninfo" class="btn btn-success btn-add" style="cursor:pointer; position:absolute; right:15px;top:0">采集资料</a>
        </div>        
        <div class="col-xs-12 col-sm-6">
         <input type="text" id="vod_baike" name="vod_baike" value="{$info.vod_baike|default=''}" class="form-control" placeholder="百度百科，360百科,TV2345视频地址" data-tip="百度,360百科,TV2345视频地址"><a href="javascript:;" id="getbaikeinfo" class="btn btn-success btn-add" style="cursor:pointer; position:absolute; right:15px;top:0">获取资料</a>
        </div> 
    </div>    
       <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">视频演员:</label>
        <div class="col-xs-12 col-sm-6">
         <input type="text"  id="vod_actor" name="vod_actor" value="{$info.vod_actor|default=''}" class="form-control">
        </div> 
        <label for="c-keywords" class="control-label col-xs-12" style="width:auto">视频导演:</label>
        <div class="col-xs-12 col-sm-2">
        <input type="text"  id="vod_director" name="vod_director" value="{$info.vod_director|default=''}" class="form-control">
        </div>          
    </div> 
       <div class="form-group">
            <label for="c-image" class="control-label col-xs-12 col-sm-1">视频缩略:</label>
            <div class="col-xs-12" style="width:auto">
            <div class="form-inline">
                <input id="vod_pic" class="form-control" size="45" name="vod_pic" type="text" value="{$info['vod_pic']|default=''}">
                <span><button type="button" id="plupload-image" class="btn btn-danger plupload" data-input-id="vod_pic" data-mimetype="image/*" data-multipart='{"sid":"vod"}' data-multiple="false" data-preview-id="p-image"><i class="fa fa-upload"></i> 上传</button></span>
                <ul class="row list-inline plupload-preview" id="p-image"></ul>
            </div>
            </div>
             <label for="c-image" class="control-label col-xs-12 col-sm-1">视频海报:</label>
            <div class="col-xs-12" style="width:auto">
            <div class="form-inline">
                <input id="vod_bigpic" class="form-control" size="45" name="vod_bigpic" type="text" value="{$info['vod_bigpic']|default=''}">
                <span><button type="button" id="plupload-images" class="btn btn-danger plupload" data-input-id="vod_bigpic" data-mimetype="image/*" data-multipart='{"sid":"vod"}' data-multiple="false" data-preview-id="p-images"><i class="fa fa-upload"></i> 上传</button></span>
                <ul class="row list-inline plupload-preview" id="p-images"></ul>
            </div>
            </div>
          </div>
         <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">视频版权:</label>
        <div class="col-xs-12" style="width:auto;line-height:35px;">
<input style="border:none;width:auto; position:relative; top:0px;margin-right:3px;" name="vod_copyright" type="radio" value="0" {empty name="info.vod_copyright"}checked{/empty}/>关闭<input style="border:none;width:auto; position:relative; top:0px;margin-right:3px;margin-left:10px;"  name="vod_copyright" type="radio" value="1" {eq name="info.vod_copyright" value="1"}checked{/eq}/>提示<input style="border:none;width:auto; position:relative; top:0px;margin-right:3px;margin-left:10px;"  name="vod_copyright" type="radio" value="2" {eq name="info.vod_copyright" value="2"}checked{/eq}/>播放页跳转<input style="border:none;width:auto; position:relative; top:0px;margin-right:3px;margin-left:10px;"  name="vod_copyright" type="radio" value="3" {eq name="info.vod_copyright" value="3"}checked{/eq}/>内容页跳转&nbsp;&nbsp;&nbsp;&nbsp;!注意:选择提示请在：系统设置-视频板块-版权提示中：输入提示的文字 选择跳转请将播放地址设置为官方视频网址
        </div>          
    </div>     
          <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">地址排序:</label>
        <div class="col-xs-12" style="width:auto;line-height:35px;">
<input style="border:none;width:auto; position:relative; top:0px;margin-right:3px;" name="vod_playoid" type="radio" value="0" {empty name="info.vod_playoid"}checked{/empty}/>默认<input style="border:none;width:auto; position:relative; top:0px;margin-right:3px;margin-left:10px;"  name="vod_playoid" type="radio" value="1" {eq name="info.vod_playoid" value="1"}checked{/eq}/>内容&nbsp;&nbsp;&nbsp;&nbsp;!注意:默认按照 播放器管理中播放器排序 内容按照内容中播放器排序方式排序
        </div>          
    </div> 
    <div class="form-group" id="urldata">
     {volist name="info.vod_url" id="url" key="uu"}
    <div class="urldata" id="data_{$uu}" style="background:#f9f9f9; overflow:hidden; padding:10px 0px;">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">播放地址{$uu}</label>
        <div class="col-xs-12 col-sm-11">
        <div class="col-xs-12 col-sm-1" style=" width:auto;padding-left:0px;">
        <select name="vod_play[]" id="vod_play" class="form-control" style="width:auto">{volist name=":F('_data/player')" id="play"}<option value="{$play['play_name']}" {if condition="$play['play_name'] eq $info.vod_play[$uu-1]"}selected{/if}>{$i}.{$play['play_name']}.{$play['play_title']}</option>{/volist}</select>
        </div>
        <div class="col-xs-12 col-sm-7 vodtool" style="line-height:30px; float:left">
        <a href="javascript:;" class="btn-link clearurl"> <i class="fa fa-trash-o"></i> 清空</a>
        <a href="javascript:;" class="btn-link delurl"> <i class="fa fa-times-rectangle"></i> 删除</a>
        <a href="javascript:;"  class="btn-link sorturl"> <i class="fa fa-refresh"></i> 反序</a>
        <a href="javascript:;" class="btn-link upurl"> <i class="fa fa-arrow-up"></i> 上移</a>
        <a href="javascript:;"  class="btn-link downurl"> <i class="fa fa-arrow-down"></i> 下移</a>
        <a href="javascript:;"  class="btn-link removeurl"> <i class="fa fa-bars"></i> 去前缀</a>
        <a href="javascript:;"  class="btn-link checkurl"> <i class="fa fa-th-list"></i> 校正地址</a>
        </div>
         <div class="col-xs-12 col-sm-11" style="padding-left:0px; padding-top:10px;">
         <textarea name='vod_url[]' id="vod_url" class="form-control" style="height:150px;">{$url}</textarea>
        </div>       
        </div>
        </div>
     {/volist}    
    </div>   
      <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1" style="padding-left:10px; padding-right:10px;">添加播放组:</label>
        <div class="col-xs-12 col-sm-9">
        <a href="javascript:;"  class="btn btn-success btn-add addurl"><i class="fa fa-plus"></i> 添加一组观看地址</a>
        </div>
    </div>   
               
    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">视频介绍:</label>
        <div class="col-xs-12 col-sm-11">
         <textarea class="summernote" id="vod_content" name="vod_content" style="height:200px;">{:zanpian_news_img_array($info['vod_content'])}</textarea>
        </div>
    </div>         
       <div class="form-group">
                <label for="content" class="control-label col-xs-12 col-sm-1">视频状态:</label>
                <div class="col-xs-12" style="width:auto">
                    <select name="vod_status" class="form-control">
                        <option value="1">显示</option>
                        <option value="0" {eq name="info.vod_status" value="0" }selected{/eq}>隐藏</option>
                    </select>
                </div>
            </div>  
    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">视频时间:</label>
        <div class="col-xs-12" style="width:auto">
         <input type="text" name="vod_addtime" value="{notempty name="info.vod_addtime"}{$info.vod_addtime|date='Y-m-d H:i:s',###}{else/}{:date('Y-m-d H:i:s',time())}{/notempty}" class="form-control">
        </div>
        <input name="checktime" type="checkbox" style="border:none;width:auto;position:relative; top:5px;" value="1" {notempty name="info.admin_time_edit"}checked{/notempty} title="勾选则使用系统当前时间">
    </div>             
            
     </div>
<div class="tab-pane fade" id="tab_2">
       <div class="form-group">
                <label for="content" class="control-label col-xs-12 col-sm-1">影片权限:</label>
                <div class="col-xs-12" style="width:auto">
                    <select name="vod_vipplay" class="form-control selectpicker">
                        <option value="0">免费点播</option>
                        <option value="1" {eq name="info.vod_vipplay" value="1" }selected{/eq}>会员点播</option>
<!--                        <option value="2" {eq name="info.vod_vipplay" value="2" }selected{/eq}>VIP点播</option>-->
                        <option value="3" {eq name="info.vod_vipplay" value="3" }selected{/eq}>微信扫码</option>
                    </select>
                </div>
            </div>
<!--       <div class="form-group">
        <label for="content" class="control-label col-xs-12 col-sm-1">点播付费:</label>
        <div class="col-xs-12 col-sm-2">
         <input type="text" name="vod_pay"  value="{$info.vod_pay|default=''}" class="form-control" style="width:80px;text-align:center" data-tip="影币数量">
        </div>
            </div> -->
        <div class="form-group" id="trysee" {notempty name="info.vod_vipplay"}style="display:block"{else/}style="display:none"{/notempty}>
        <label for="content" class="control-label col-xs-12 col-sm-1">试看时间:</label>
        <div class="col-xs-12 col-sm-2">
         <input type="text" name="vod_trysee"  value="{$info.vod_trysee}" class="form-control" style="width:80px;text-align:center" data-tip="试看时间单位分钟">
        </div>
            </div>                         
 <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1" style="padding-left:10px; padding-right:10px;">视频标题:</label>
        <div class="col-xs-12 col-sm-8">
         <input type="text" id="vod_stitle"  name="vod_stitle" value="{$info.vod_stitle|default=''}" placeholder="用于前台视频页面的SEO标题" class="form-control" data-tip="用于前台视频页面的SEO标题">
        </div>
    </div>
     <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1" style="padding-left:10px; padding-right:10px;">视频关键词:</label>
        <div class="col-xs-12 col-sm-8">
         <input type="text" id="vod_skeywords"  name="vod_skeywords" value="{$info.vod_skeywords|default=''}" placeholder="用于前台视频页面的关键词" class="form-control" data-tip="用于前台视频页面的关键词"><a href="javascript:;" id="getkeywords" class="btn btn-success btn-add" style="cursor:pointer; position:absolute; right:15px;top:0">获取关键词</a>
        </div>
    </div>              
    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">视频描述:</label>
        <div class="col-xs-12 col-sm-8">
         <textarea  class="form-control" name="vod_sdescription" id="vod_sdescription">{$info['vod_sdescription']|default=''}</textarea>
        </div>
    </div>             
   <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">TAG标签:</label>
        <div class="col-xs-12 col-sm-8" style="position:relative">
         <input type="text" id="vod_keywords"  name="vod_keywords" value="{$info.vod_keywords|default=''}" class="form-control tag" data-tip="视频TAG标签"><a href="javascript:;"  data-url="{:admin_url('admin/tag/showajax',array('sid'=>1))}" data-name="添加TAG标签到视频{$info.vod_name}" class="btn btn-info btn-add btn-editone" style="cursor:pointer; position:absolute; right:15px;top:0"><i class="fa fa-plus"></i> 添加TAG</a>
        </div>
    </div>   
    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1" style="padding-left:10px; padding-right:10px;">视频拼音:</label>
        <div class="col-xs-12" style="width:auto">
         <input type="text" name="vod_letters"  value="{$info.vod_letters|default=''}" class="form-control" data-tip="留空自动获取">
        </div>
    </div>
     <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1" style="padding-left:10px; padding-right:10px;">视频首字母:</label>
        <div class="col-xs-12" style="width:auto">
         <input type="text" name="vod_letter"  value="{$info.vod_letter|default=''}" class="form-control" data-tip="留空自动获取">
        </div>
    </div>   
     <div class="form-group">
                <label for="content" class="control-label col-xs-12 col-sm-1">推荐星级:</label>
                <div class="col-xs-12 col-sm-6" style="position:relative; top:5px;">
                 <input name="vod_stars" id="vod_stars" type="hidden" value="{$info.vod_stars|default=''}">{volist name=":admin_star_arr($info.vod_stars)" id="ajaxstar"}<img src="{$config.site.cdnurl}admin/zanpiancms/img/star{$ajaxstar}.gif" id="vod_{$i}" class="addstars">{/volist}
                </div>
            </div>          
      <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">标题颜色:</label>
        <div class="col-xs-12 col-sm-2">
         <input type="text" name="vod_color"  value="{$info.vod_color|default=''}" class="form-control" data-tip="点击选色" style="width:80px;text-align:center" id="color">
        </div>
    </div>
      <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">总人气:</label>
        <div class="col-xs-12 col-sm-2">
         <input type="text" name="vod_hits"  value="{$info.vod_hits|default=''}" class="form-control" style="width:80px;text-align:center">
        </div>
    </div>    
      <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">月人气:</label>
        <div class="col-xs-12 col-sm-2">
         <input type="text" name="vod_hits_month"  value="{$info.vod_hits_month|default=''}" class="form-control" style="width:80px;text-align:center">
        </div>
    </div> 
       <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">周人气:</label>
        <div class="col-xs-12 col-sm-2">
         <input type="text" name="vod_hits_week"  value="{$info.vod_hits_week|default=''}" class="form-control" style="width:80px;text-align:center">
        </div>
    </div> 
      <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">日人气:</label>
        <div class="col-xs-12 col-sm-2">
         <input type="text" name="vod_hits_day"  value="{$info.vod_hits_day|default=''}" class="form-control" style="width:80px;text-align:center">
        </div>
    </div>   
  <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">评分值:</label>
        <div class="col-xs-12 col-sm-2">
         <input type="text" name="vod_gold"  value="{$info.vod_gold|default=''}" class="form-control" style="width:80px;text-align:center">
        </div>
    </div> 
      <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">评分人数:</label>
        <div class="col-xs-12 col-sm-2">
         <input type="text" name="vod_golder"  value="{$info.vod_golder|default=''}" class="form-control" style="width:80px;text-align:center">
        </div>
    </div>                  
      <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">顶:</label>
        <div class="col-xs-12 col-sm-2">
         <input type="text" name="vod_up"  value="{$info.vod_up|default=''}" class="form-control" style="width:80px;text-align:center">
        </div>
    </div>
      <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">踩:</label>
        <div class="col-xs-12 col-sm-2">
         <input type="text" name="vod_down"  value="{$info.vod_down|default=''}" class="form-control" style="width:80px;text-align:center">
        </div>
    </div> 
  <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">录入编辑:</label>
        <div class="col-xs-12" style="width:auto">
         <input type="text" name="vod_inputer" id="vod_inputer"  value="{$info.vod_inputer|default=''}" class="form-control" style="width:150px;">
        </div>
    </div>     
      <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">独立模版:</label>
        <div class="col-xs-12" style="width:auto">
         <input type="text" name="vod_skin"  value="{$info.vod_skin|default=''}" class="form-control" placeholder="留空使用分类中内容模版">
        </div> 
    </div> 
      <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">来源地址:</label>
        <div class="col-xs-12 col-sm-6">
         <input type="text" name="vod_reurl" id="vod_reurl" value="{$info.vod_reurl|default=''}" class="form-control" placeholder="多个来源地址请用逗号,隔开">
        </div>
    </div>
       <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">跳转地址:</label>
        <div class="col-xs-12 col-sm-6">
         <input type="text" name="vod_jumpurl" id="vod_jumpurl" value="{$info.vod_jumpurl|default=''}" class="form-control" >
        </div>
    </div>              
     </div> 
<div class="tab-pane fade" id="tab_3">
     <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">上映时间:</label>
         <div class="col-xs-12 col-sm-2">
                 <input  type="text" class="form-control datetimepicker" id="vod_filmtime" name="vod_filmtime" value="{notempty name="info.vod_filmtime"}{$info.vod_filmtime|date='Y-m-d',###}{/notempty}"  data-date-format="YYYY-MM-DD" type="datetime" data-tip="格式：2016-12-20" style="text-align:center">
        </div>
    </div>
 <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">播出电台:</label>
        <div class="col-xs-12 col-sm-6">
<input type="text" name="vod_diantai" id="vod_diantai" value="{$info.vod_diantai|default=''}" class="form-control" data-tip="多个请用逗号,分割">
        </div>
    </div>
 <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">播出提示:</label>
        <div class="col-xs-12 col-sm-6">
<input type="text" name="vod_tvcont" id="vod_tvcont" value="{$info.vod_tvcont|default=''}" class="form-control">
        </div>
    </div>    
     <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">上映说明:</label>
        <div class="col-xs-12 col-sm-8">
         <textarea  class="form-control summernote" name="vod_tvexp" id="vod_tvexp">{:zanpian_news_img_array($info['vod_tvexp'])}</textarea>
        </div>
    </div>              
     </div>
<div class="tab-pane fade" id="tab_4">

    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1" style="padding-left:10px; padding-right:10px;">剧情标题:</label>
        <div class="col-xs-12 col-sm-7">
         <input type="text" id="story_stitle" name="story_stitle" value="{$info.story_stitle|default=''}" class="form-control" placeholder="用于前台剧情页面的标题">
        </div>
         <div class="col-xs-12" style="width:auto">
          <select id="story_cid" name="story_cid" class="form-control" style="width:auto">
<option value="">选择分类</option> 
{volist name="liststory" id="vo"}<option value="{$vo.list_id}" {if isset($info['story_cid'])} {eq name="vo.list_id" value="$info['story_cid']"}selected{/eq}{/if}>{$vo.list_name}</option>
{volist name="vo['son']" id="splist"}<option value="{$splist.list_id}" {eq name="splist.list_id" value="$info['story_cid']"}selected{/eq}>├ {$splist.list_name}</option>{/volist}
{/volist}
</select>
     </div>
    </div>    
     <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1" style="padding-left:10px; padding-right:10px;">剧情关键词:</label>
        <div class="col-xs-12 col-sm-8">
         <input type="text" id="story_keywords" name="story_keywords" value="{$info.story_keywords|default=''}" class="form-control" data-tip="用于前台剧情页面的关键词"><a href="javascript:;" id="getstorykeywords" class="btn btn-success btn-add" style="cursor:pointer; position:absolute; right:15px;top:0">获取关键词</a>
        </div>
    </div> 
    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">剧情描述:</label>
        <div class="col-xs-12 col-sm-8">
         <textarea  class="form-control" id="story_description" name="story_description">{$info.story_description|default=''}</textarea>
        </div>
    </div> 
    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">剧情采集:</label>
        <div class="col-xs-12 col-sm-8">
         <input type="text" id="story_url" name="story_url" value="{$info['story_url']|default=''}" class="form-control" placeholder="支持百度百科，TVMAO剧情,TV2345明星地址" data-tip="支持百度百科，TVMAO剧情,TV2345明星地址"><a href="javascript:;" id="getstory" class="btn btn-success btn-add" style="cursor:pointer; position:absolute; right:15px;top:0">获取剧情</a>
        </div> 
    </div>      
    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">剧情内容:</label>
        <div class="col-xs-12 col-sm-11">
         <div class="col-xs-12 col-sm-11" style="line-height:35px; padding-left:0px">
        格式：第1集@@标题1@@剧情1||第2集@@标题2@@剧情1
        </div>
        <div class="col-xs-12 col-sm-11" style="padding-left:0px">
         <textarea class="summernote" id="story_content" name="story_content" style="height:200px;">{:zanpian_news_img_array($info['story_content'])}</textarea>
         </div>
        </div>
    </div>
    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">连载集数:</label>
        <div class="col-xs-12" style="width:auto">
         <input type="text" id="story_continu" name="story_continu"  value="{$info.story_continu|default=''}" class="form-control" data-tip="已经添加的剧情集数，后台采集 火车头采集会匹配是否相同" style="text-align:center;">
        </div>
    </div>  
     <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">分页数量:</label>
        <div class="col-xs-12" style="width:auto">
         <input type="text" id="story_page" name="story_page"  value="{$info.story_page|default=''}" class="form-control" data-tip="自动获取" style="text-align:center;" readonly>
        </div>
    </div>
     <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">最后标题:</label>
        <div class="col-xs-12" style="width:auto">
         <input type="text" id="story_title" name="story_title"  value="{$info.story_title|default=''}" class="form-control" data-tip="自动获取" style="text-align:center;" readonly>
        </div>
    </div>                             
       <div class="form-group">
                <label for="content" class="control-label col-xs-12 col-sm-1">连载状态:</label>
                <div class="col-xs-12" style="width:auto">
                    <select id="story_cont" name="story_cont" class="form-control">
                        <option value="0">连载中</option>
                        <option value="1" {eq name="info['story_cont']" value="1" }selected{/eq}>已完结</option>
                    </select>
                </div>
        </div>   
    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">剧情时间:</label>
        <div class="col-xs-12" style="width:auto">
         <input type="text" name="story_addtime" value="{notempty name="info.story_addtime"} {$info.story_addtime|date='Y-m-d H:i:s',###}{else/}{:date('Y-m-d H:i:s',time())}{/notempty}" class="form-control">
        </div>
        <input name="checktime" type="checkbox" style="border:none;width:auto;position:relative; top:5px;" value="1" {notempty name="info.admin_time_edit"}checked{/notempty} title="勾选则使用系统当前时间">
    </div>                     
</div>  

<div class="tab-pane fade" id="tab_5">

    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1" style="padding-left:10px; padding-right:10px;">演员表标题:</label>
        <div class="col-xs-12 col-sm-7">
         <input type="text" id="actor_title" name="actor_title" value="{$info['actor_title']|default=''}" class="form-control" placeholder="用于前台演员表页面的标题">
        </div>
         <div class="col-xs-12" style="width:auto">
          <select id="actor_cid" name="actor_cid" class="form-control" style="width:auto">
<option value="">选择分类</option> 
{volist name="listactor" id="vo"}<option value="{$vo.list_id}" {if isset($info['actor_cid'])} {eq name="vo.list_id" value="$info['actor_cid']"}selected{/eq}{/if}>{$vo.list_name}</option>
{volist name="vo['son']" id="splist"}<option value="{$splist.list_id}" {eq name="splist.list_id" value="$info['actor_cid']"}selected{/eq}>├ {$splist.list_name}</option>{/volist}
{/volist}
</select>
     </div>
    </div>    
    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1" style="padding-left:10px; padding-right:10px;">演员关键词:</label>
        <div class="col-xs-12 col-sm-8">
         <input type="text" id="actor_keywords" name="actor_keywords" value="{$info['actor_keywords']|default=''}" class="form-control" data-tip="用于前台演员表页面的关键词"><a href="javascript:;" id="getactorkeywords" class="btn btn-success btn-add" style="cursor:pointer; position:absolute; right:15px;top:0">获取关键词</a>
        </div>
    </div>              
    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1" style="padding-left:10px; padding-right:10px;">演员表描述:</label>
        <div class="col-xs-12 col-sm-8">
         <textarea  class="form-control" name="actor_description">{$info['actor_description']|default=''}</textarea>
        </div>
    </div> 
    {notempty name="info.vod_id"}
    <div class="form-group">
        <label for="c-keywords" class="control-label col-xs-12 col-sm-1">角色采集:</label>
        <div class="col-xs-12 col-sm-8">
         <input type="text" id="actor_reurl" name="actor_reurl" value="{$info.actor_reurl|default=''}" class="form-control" placeholder="慢慢看角色表,TV2345角色表,百度百科,好搜百科" data-tip="慢慢看角色表,TV2345角色表,百度百科,好搜百科"><a href="javascript:;" id="getrole" class="btn btn-success btn-add" style="cursor:pointer; position:absolute; right:15px;top:0">采集角色</a>
        </div> 
    </div>    
    <div  id="contents"> 
     </div>
    {/notempty} 
</div>        
</div>     
</div>
{notempty name="info.vod_id"} 
<input type="hidden" id="vod_id" name="vod_id" value="{$info['vod_id']|default=''}"> 
{/notempty}
<div class="layui-layer-footer">
<div class="row"><div class="col-xs-2"></div><div class="col-xs-12 col-sm-6">
            <button type="submit" class="btn btn-success btn-embossed">确定</button>
            <button type="reset" class="btn btn-default btn-embossed">重置</button>
            <button onClick="javascript:history.back(-1);return false;" class="btn btn-danger">返回</button>
        </div></div>
        </div>
  </form>      
</div>
@endsection