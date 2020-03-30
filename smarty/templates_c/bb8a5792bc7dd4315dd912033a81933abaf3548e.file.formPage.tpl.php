<?php /* Smarty version Smarty-3.1.14, created on 2020-03-30 14:40:29
         compiled from "/Library/WebServer/Documents/esta-demo/smarty/templates/formPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19405668965e81e8bde9cab6-32048691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb8a5792bc7dd4315dd912033a81933abaf3548e' => 
    array (
      0 => '/Library/WebServer/Documents/esta-demo/smarty/templates/formPage.tpl',
      1 => 1585562826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19405668965e81e8bde9cab6-32048691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'home_path' => 0,
    'lang' => 0,
    'json' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5e81e8bdf037d7_57850760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e81e8bdf037d7_57850760')) {function content_5e81e8bdf037d7_57850760($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/ccfstyle.css" type="text/css" />
        <link rel="stylesheet" href="css/autocomplete.css" type="text/css" />
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/jquery.autocomplete.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/ccf_config<?php if (!isset($_smarty_tpl->tpl_vars['lang']->value)){?>_en<?php }else{ ?>_<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
<?php }?>.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/ccfparser.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/ccforms.js"></script>
        <script>
            obj = <?php echo $_smarty_tpl->tpl_vars['json']->value;?>
;
            $('document').ready(function(){
            setEvents();
            formBuilder.start(obj);
            });
        </script>
    </head>
    <body>
        <div id="wrapper">
        <div id="header">
            ESTA Editor (demo)
        </div>
        <div id="user">Rob Zeeman</div>
        <div id="homeBtn"></div>
        <div id="content">
            <div id="ccform"></div>
        </div>
        </div>
    </body>
</html>
<?php }} ?>