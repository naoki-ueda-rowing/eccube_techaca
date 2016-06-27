<?php
/* Smarty version 3.1.28, created on 2016-06-16 04:40:55
  from "/vagrant/www/vagrant/templates/register.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5761af473d5fb0_30244809',
  'file_dependency' => 
  array (
    '6d455110131110350c26c6b8c73380710ea871ae' => 
    array (
      0 => '/vagrant/www/vagrant/templates/register.tpl',
      1 => 1465806839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5761af473d5fb0_30244809 ($_smarty_tpl) {
?>
<html>
<head>
    <title>ユーザー登録</title>
</head>
<body>

<!--ユーザー登録フォームの作成-->
<br><br>ユーザー登録<br><br>
<form method="POST" action="smarty_register.php">
    <table>
        <td>ユーザーID：</td><td><input type="text" name="user_id" size="15" /></td>
        <tr><td>名前：</td><td><input type="text" name="user_name" size="15" /></td></tr>
        <tr><td>パスワード：</td><td><input type="password" name="password" size="15" /></td></tr>
    </table>
    <input type="submit" value="登録"　/>
</form>

<form action="smarty_board.php">
    <br><input type="submit" value="戻る"　/><br>
</form>

</body>
</html><?php }
}
