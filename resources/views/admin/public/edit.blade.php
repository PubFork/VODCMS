{layout name="layout/index" /}
<div class="panel panel-default panel-intro">
    <div class="panel-heading">
        {if !empty($fieldGroup)}
        <ul class="nav nav-tabs">
        {volist name="fieldGroup" id="vGroup"}
            <li {if $i eq 1}class="active"{/if}><a href="#tab{$i}" data-toggle="tab">{$key}</a></li>
         {/volist}   
        </ul>
        {/if} 
    </div>
<div class="panel-body is-dialog">   
<form id="edit-form" class="edit-form form-horizontal" role="form" data-toggle="validator" method="post">
<div id="myTabContent" class="tab-content">
{if !isset($info)}{assign name="info" value="" /}{/if}
{if !empty($fieldGroup)}
{volist name="fieldGroup" id="vGroup" key="k"}
<div class="tab-pane fade {eq name="k" value="1"}active in{/eq} " id="tab{$k}">
{volist name="vGroup" id="field"}
{if $field['type'] eq 'hidden'} 
<input type="hidden" name="{$field['name']}" value="{$info[$field['name']]|default=''}"/>
{else/}    
<div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">{$field['title']|htmlspecialchars}:</label>
        <div class="col-xs-12 col-sm-6">
        {:widget('common/Form/show',array($field,$info))}
        </div>
    </div>
    {/if}
{/volist}
</div>
{/volist}
{else/}
{volist name="fieldGroup" id="vGroup" key="k"}
<div class="tab-pane fade {eq name="i" value="k"}active in{/eq} " id="tab{$k}">
{volist name="vGroup" id="field"}
{if $field['type'] eq 'hidden'} 
<input type="hidden" name="{$field['name']}" value="{$info[$field['name']]|default=''}"/>
{else/}    
<div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">{$field['title']|htmlspecialchars}:</label>
        <div class="col-xs-12 col-sm-6">
        {:widget('common/Form/show',array($field,$info))}
        </div>
    </div>
    {/if}
{/volist}
</div>
{/volist}
{/if}
</div>
    </div>      
    <div class="form-group hidden layer-footer">
      <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled">确定</button>
            <button type="reset" class="btn btn-default btn-embossed">重置</button>
            <button type="reset" class="btn btn-primary btn-embossed btn-close" onclick="Layer.closeAll();"> 关闭</button>
        </div>
    </div>
</form>
            </div>
            </div> 