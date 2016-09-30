<?php /* Smarty version Smarty-3.1.19, created on 2016-09-29 18:38:06
         compiled from "/Users/monicakarinasalcedoheredia/Sites/local-vision/admin6451wwq6p/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179741298157eda5de973e25-99991658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '236976ae5626f1e0dbcbfd6e174989fe76e9fdd5' => 
    array (
      0 => '/Users/monicakarinasalcedoheredia/Sites/local-vision/admin6451wwq6p/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1473192312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179741298157eda5de973e25-99991658',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57eda5de981225_08402367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57eda5de981225_08402367')) {function content_57eda5de981225_08402367($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
