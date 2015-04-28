<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-20 20:27:17
         compiled from "Z:\home\localhost\www\template\students.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182695535230d7e8ed3-88349227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f680d8e591257f0ab99bd47684431d149e801a8d' => 
    array (
      0 => 'Z:\\home\\localhost\\www\\template\\students.tpl',
      1 => 1429547229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182695535230d7e8ed3-88349227',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5535230d96de75_72516941',
  'variables' => 
  array (
    'students' => 0,
    'student' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5535230d96de75_72516941')) {function content_5535230d96de75_72516941($_smarty_tpl) {?><h1>Students</h1>
<ul>
  <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value) {
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
    <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['student']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
, <?php echo $_smarty_tpl->tpl_vars['student']->value['age'];?>
</li>
  <?php } ?>
</ul><?php }} ?>
