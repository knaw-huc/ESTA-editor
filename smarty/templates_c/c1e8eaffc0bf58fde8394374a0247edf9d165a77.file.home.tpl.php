<?php /* Smarty version Smarty-3.1.14, created on 2017-10-12 14:56:57
         compiled from "/Library/Webserver/Documents/clarin_cmdi_forms/smarty/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35052896159dcb53b7ba9e3-76460416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1e8eaffc0bf58fde8394374a0247edf9d165a77' => 
    array (
      0 => '/Library/Webserver/Documents/clarin_cmdi_forms/smarty/templates/home.tpl',
      1 => 1507723261,
      2 => 'file',
    ),
    'a516f559020709a996e66a4a4d26ba541b978527' => 
    array (
      0 => '/Library/Webserver/Documents/clarin_cmdi_forms/smarty/templates/standardPage.tpl',
      1 => 1507812988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35052896159dcb53b7ba9e3-76460416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59dcb53b7f6ce7_85118669',
  'variables' => 
  array (
    'title' => 0,
    'home_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dcb53b7f6ce7_85118669')) {function content_59dcb53b7f6ce7_85118669($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/Library/Webserver/Documents/clarin_cmdi_forms/smarty/plugins/function.cycle.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
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
            
    <h2>CMDI profiles</h2>
    <table id="resultTable">
        <tr><th>Name</th><th>Description</th><th>Owner</th><th>Created</th><th></th><th></th><th></th></tr>
        <?php  $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->key => $_smarty_tpl->tpl_vars['profile']->value){
$_smarty_tpl->tpl_vars['profile']->_loop = true;
?>
            <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['profile']->value['description'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['profile']->value['owner'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['profile']->value['created'];?>
</td>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
index.php?page=profile&id=<?php echo $_smarty_tpl->tpl_vars['profile']->value['profile_id'];?>
" title="View profile"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/view.png" height="16px" width="16px"></a></td>
                <td><a href="" title="View metadata"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/more-items.png" height="16px" width="16px"></a></td>
                <td><a href="" title="Delete profile"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/bin.png" height="16px" width="16px"></a></td>
            </tr>
        <?php } ?>
    </table> 
 
        </div>
        </div>
    </body>
</html>
<?php }} ?>