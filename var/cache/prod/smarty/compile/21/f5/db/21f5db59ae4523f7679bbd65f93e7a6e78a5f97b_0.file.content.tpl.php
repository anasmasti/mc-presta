<?php
/* Smarty version 3.1.39, created on 2021-09-08 10:35:05
  from 'C:\xampp\htdocs\prestashop\admin288epr8np\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613883c9529939_56702107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21f5db59ae4523f7679bbd65f93e7a6e78a5f97b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin288epr8np\\themes\\default\\template\\content.tpl',
      1 => 1629291665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613883c9529939_56702107 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
