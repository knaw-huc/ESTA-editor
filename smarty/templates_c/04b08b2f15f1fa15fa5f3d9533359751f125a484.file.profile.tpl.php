<?php /* Smarty version Smarty-3.1.14, created on 2018-09-25 11:39:30
         compiled from "/Library/WebServer/Documents/clarin_cmdi_forms/smarty/templates/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14295410915a05c59a2f02a3-44808071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04b08b2f15f1fa15fa5f3d9533359751f125a484' => 
    array (
      0 => '/Library/WebServer/Documents/clarin_cmdi_forms/smarty/templates/profile.tpl',
      1 => 1537868366,
      2 => 'file',
    ),
    '6d525311abec23a44edbcf9b141dd08b25cec884' => 
    array (
      0 => '/Library/WebServer/Documents/clarin_cmdi_forms/smarty/templates/standardPage.tpl',
      1 => 1507812988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14295410915a05c59a2f02a3-44808071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a05c59a352779_57282527',
  'variables' => 
  array (
    'title' => 0,
    'home_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a05c59a352779_57282527')) {function content_5a05c59a352779_57282527($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/Library/WebServer/Documents/clarin_cmdi_forms/smarty/plugins/function.cycle.php';
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
            
    <h2>CMDI profile</h2>
    <div class="itemGrid">
        <div class="itemGridRow">
            <div class="itemGridCell labelCell">Profile name</div>
            <div class="itemGridCell"><?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
</div>
        </div>
        <div class="itemGridRow">
            <div class="itemGridCell labelCell">Description</div>
            <div class="itemGridCell"><?php echo $_smarty_tpl->tpl_vars['profile']->value['description'];?>
</div>
        </div>
        <div class="itemGridRow">
            <div class="itemGridCell labelCell">Owner</div>
            <div class="itemGridCell"><?php echo $_smarty_tpl->tpl_vars['profile']->value['owner'];?>
</div>
        </div>
        <div class="itemGridRow">
            <div class="itemGridCell labelCell">Created</div>
            <div class="itemGridCell"><?php echo $_smarty_tpl->tpl_vars['profile']->value['created'];?>
</div>
        </div>
    </div>

    <div id="profileData">
        <ul id="profileDataNavigator">
            <li id="profileXMLTab"<?php if ($_smarty_tpl->tpl_vars['state']->value=='profile'){?> class="profileDataActiveTab"<?php }?>>Profile</li>
            <!--<li id="profileJSONTab">JSON</li>-->
            <li id="profileTweakTab">Tweak</li>
            <li id="profileRecordsTab"<?php if ($_smarty_tpl->tpl_vars['state']->value=='records'){?> class="profileDataActiveTab"<?php }?>>Records</li>
        </ul>
        <div id="profileDetails">
            <div id="profileXML" <?php if ($_smarty_tpl->tpl_vars['state']->value=='records'){?> class="noView"<?php }?>><textarea class="viewText" readonly="yes"><?php echo $_smarty_tpl->tpl_vars['profile']->value['content'];?>
</textarea></div>
            <!--<div id="profileJSON" class="noView"><textarea class="viewText" readonly="yes"><?php echo nl2br($_smarty_tpl->tpl_vars['profile']->value['json']);?>
</textarea></div>-->
            <div id="tweakXML" class="noView"><textarea class="viewText" readonly="yes"><?php echo $_smarty_tpl->tpl_vars['profile']->value['tweak'];?>
</textarea></div>
            <div id="metadataRecs" <?php if ($_smarty_tpl->tpl_vars['state']->value!='records'){?>class="noView"<?php }?>>
                <table id="resultTable">
                    <tr><th>Title</th><th>Status</th><th>Creator</th><th>Creation date</th><th><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
index.php?page=new_rec&profile=<?php echo $_smarty_tpl->tpl_vars['profile']->value['profile_id'];?>
" id="addRec">+</a></th></tr>
                            <?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
$_smarty_tpl->tpl_vars['record']->_loop = true;
?>
                        <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
                            <td><?php echo $_smarty_tpl->tpl_vars['record']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['record']->value['record_status'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['record']->value['creator'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['record']->value['creation_date'];?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
index.php?page=metadata&id=<?php echo $_smarty_tpl->tpl_vars['record']->value['id'];?>
" title="Edit metadata"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
                        </tr>
                    <?php } ?>
                </table> 
            </div>
            </div>
        </div>
    </div>

        </div>
        </div>
    </body>
</html>
<?php }} ?>