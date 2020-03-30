<?php /* Smarty version Smarty-3.1.14, created on 2019-04-09 17:51:44
         compiled from "/Library/WebServer/Documents/clarin_cmdi_forms/smarty/templates/errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18048632975cacbf90d25b69-09742131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74c7e28a71fb7a2e9d7f95092381abe872c8d333' => 
    array (
      0 => '/Library/WebServer/Documents/clarin_cmdi_forms/smarty/templates/errors.tpl',
      1 => 1528115333,
      2 => 'file',
    ),
    '6d525311abec23a44edbcf9b141dd08b25cec884' => 
    array (
      0 => '/Library/WebServer/Documents/clarin_cmdi_forms/smarty/templates/standardPage.tpl',
      1 => 1507812988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18048632975cacbf90d25b69-09742131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'home_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5cacbf90d7eb97_85288290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cacbf90d7eb97_85288290')) {function content_5cacbf90d7eb97_85288290($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/ccforms.js"></script>
        <script>
            $('document').ready(function(){
            setEvents();});
        </script>
    </head>
    <body>
        <div id="wrapper">
        <div id="header">
            CLARIAH CMDI Forms
        </div>
        <div id="user">Rob Zeeman</div>
        <div id="homeBtn"></div>
        <div id="content">
            
    <h2>Errors</h2>
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
    <?php } ?>
 
        </div>
        </div>
    </body>
</html>
<?php }} ?>