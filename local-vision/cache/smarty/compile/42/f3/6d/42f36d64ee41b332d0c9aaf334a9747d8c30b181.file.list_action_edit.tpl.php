<?php /* Smarty version Smarty-3.1.19, created on 2016-09-29 18:38:06
         compiled from "/Users/monicakarinasalcedoheredia/Sites/local-vision/admin6451wwq6p/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141473485557eda5de00b222-55605482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f36d64ee41b332d0c9aaf334a9747d8c30b181' => 
    array (
      0 => '/Users/monicakarinasalcedoheredia/Sites/local-vision/admin6451wwq6p/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1473192312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141473485557eda5de00b222-55605482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57eda5de0214e8_10544271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57eda5de0214e8_10544271')) {function content_57eda5de0214e8_10544271($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
