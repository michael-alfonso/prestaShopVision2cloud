<?php /* Smarty version Smarty-3.1.19, created on 2016-09-29 18:38:06
         compiled from "/Users/monicakarinasalcedoheredia/Sites/local-vision/admin6451wwq6p/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144197382057eda5de0302e0-59271154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aa0333f54d6671b3160b8b3fd7353b34ab0128e' => 
    array (
      0 => '/Users/monicakarinasalcedoheredia/Sites/local-vision/admin6451wwq6p/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1473192312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144197382057eda5de0302e0-59271154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57eda5de061278_68004891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57eda5de061278_68004891')) {function content_57eda5de061278_68004891($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
