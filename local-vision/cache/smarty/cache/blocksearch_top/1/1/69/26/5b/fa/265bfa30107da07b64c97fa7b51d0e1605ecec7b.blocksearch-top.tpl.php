<?php /*%%SmartyHeaderCode:45259953057ed9a679a5d78-56949649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '265bfa30107da07b64c97fa7b51d0e1605ecec7b' => 
    array (
      0 => '/Users/monicakarinasalcedoheredia/Sites/local-vision/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1473192314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45259953057ed9a679a5d78-56949649',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57eda291eb70e4_89941231',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57eda291eb70e4_89941231')) {function content_57eda291eb70e4_89941231($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/local-vision/buscar" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Buscar</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
