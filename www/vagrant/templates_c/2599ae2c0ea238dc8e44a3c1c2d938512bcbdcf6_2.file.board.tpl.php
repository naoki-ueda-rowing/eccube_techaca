<?php
/* Smarty version 3.1.28, created on 2016-06-16 04:42:23
  from "/vagrant/www/vagrant/templates/board.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5761af9fb94643_68854598',
  'file_dependency' => 
  array (
    '2599ae2c0ea238dc8e44a3c1c2d938512bcbdcf6' => 
    array (
      0 => '/vagrant/www/vagrant/templates/board.tpl',
      1 => 1465810195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5761af9fb94643_68854598 ($_smarty_tpl) {
?>
<html>
<head>
    <title>掲示板２</title>
</head>
<body>


<?php if (isset($_smarty_tpl->tpl_vars['session_name']->value)) {?>
    <br><br>ようこそ<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['session_name']->value, ENT_QUOTES, 'UTF-8');?>
さん！
<!--ログインしているときのみログアウトボタンの作成-->
<form action="smarty_logout.php">
    <br><input type="submit" value="ログアウト" 　/><br>
</form>
<!--ログイン時のみ投稿フォームの作成-->
本文<br>
<form method="POST" action="smarty_board.php">
    <textarea name = "contents" cols = "60" rows="5"></textarea><br>
    <input type="submit" value="投稿"　/>
</form>


<?php } else { ?>
    ユーザー登録またはログインしてください<br><br>
<!--ログインしていないときのみユーザー登録ボタンの作成-->
<form action= "smarty_register.php">
    <input type="submit" value="ユーザー登録"　/><br>
</form>
<!--ログインしていないときのみ、ログインボタンの作成-->
<form action="smarty_login.php">
    <input type="submit" value="ログイン"　/><br>
</form>


<?php }?>




<?php if (isset($_smarty_tpl->tpl_vars['session_id']->value)) {?>


    <?php
$_from = $_smarty_tpl->tpl_vars['post_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_post_datas_0_saved_item = isset($_smarty_tpl->tpl_vars['post_datas']) ? $_smarty_tpl->tpl_vars['post_datas'] : false;
$_smarty_tpl->tpl_vars['post_datas'] = new Smarty_Variable();
$__foreach_post_datas_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_post_datas_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['post_datas']->value) {
$__foreach_post_datas_0_saved_local_item = $_smarty_tpl->tpl_vars['post_datas'];
?>

<table border="1" width="300" height="300">
    <td height="30" width="50">[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_datas']->value['id'], ENT_QUOTES, 'UTF-8');?>
]</td>
    <td height="30">

　　　　
        <?php if ($_smarty_tpl->tpl_vars['post_datas']->value['user_id'] == $_smarty_tpl->tpl_vars['session_id']->value) {?>
        <table>
        <td>
            <form  method = "post" action=smarty_edit_input.php>
            <input type = hidden name = id value = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_datas']->value['id'], ENT_QUOTES, 'UTF-8');?>
>
                <input type = hidden name = user_id value = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_datas']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
>
            <input type="submit" value="編集 "/>
            </form>
        </td>
            <td>
            <form  method = "post" action= smarty_delete.php>
            <input type = hidden name = id value = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_datas']->value['id'], ENT_QUOTES, 'UTF-8');?>
>
                <input type = hidden name = user_id value = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_datas']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
>
            <input type="submit" value="削除 "/><br>
            </form>
            </td>
        </table>

        <?php }?>


    </td>
    <tr>
        <td height="30" width="50"> 名前</td>
        <td height="30"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_datas']->value['name'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
    <tr>
        <td height="240" width="50"> 本文</td>
        <td height="240"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_datas']->value['contents'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
</table>
<br><br>
    <?php
$_smarty_tpl->tpl_vars['post_datas'] = $__foreach_post_datas_0_saved_local_item;
}
}
if ($__foreach_post_datas_0_saved_item) {
$_smarty_tpl->tpl_vars['post_datas'] = $__foreach_post_datas_0_saved_item;
}
}?>

</body>
</html><?php }
}
