<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-21 21:26:07
         compiled from "Z:\home\localhost\www\template\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115725535230d52d752-48836946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '393e4969c1ee5cf9adb5704ab1c184cf4c3b84b8' => 
    array (
      0 => 'Z:\\home\\localhost\\www\\template\\header.tpl',
      1 => 1429637166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115725535230d52d752-48836946',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5535230d685499_71785881',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5535230d685499_71785881')) {function content_5535230d685499_71785881($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <div class="main">
      <div class="header">
        <?php echo $_smarty_tpl->getSubTemplate ("top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>
      <div class="content">
       <?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
