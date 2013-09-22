<?php

if (!isset($r_ip) or ($r_ip == ''))
    {
    return;
    }
//html_comment('toolbar start');
echo '<table width="99%" border="0" cellpadding="6" cellspacing="0">'
 . '<tr><td align="left" valign="middle" class="LogoutText">';

if (isset($_SESSION['modul']))
    {
    html_comment('skin');
    getSkinList($SkinChange);
    }
html_comment('IP');
echo ' <img src="images/tree.gif" border=0  align="absmiddle" alt="IP"> ';
echo 'IP: ';
echo $_SERVER['REMOTE_ADDR'];
echo $txt['364'];
$r_connect = mysql_connect($r_ip, $r_userdb, $r_pw);
mysql_select_db($r_db, $r_connect);
mysql_query("SET NAMES 'utf8'");
$query = "SELECT `name` FROM `realmlist` where `id` = " . $_SESSION['realmd'];
$realml = mysql_query($query);
if (mysql_num_rows($realml) == 1)
    {
    $cur_realmd_name = mysql_fetch_array($realml);
    echo '<b>';
    echo $cur_realmd_name[0];
    echo '</b>';
    } else
    {
    echo $txt['365'];
    }
echo '</td>';
html_comment('menu');
echo '<td align="right" valign="middle" class="LogoutText">';
if ($OtherLink <> '')
    echo $OtherLink;
$toolbarString = '';
if (isset($_SESSION['modul']) AND ($_SESSION['modul'] != 'news'))
    $toolbarString = '<a href="index.php">' . $txt['12'] . '</a>';
if (!isset($_SESSION['modul']) AND isset($_GET['modul']) AND ($_GET['modul'] != 'news'))
    {
    if ($toolbarString != '')
        $toolbarString .= ' | ';
    $toolbarString .= '<a href="index.php">' . $txt['12'] . '</a>';
    }
echo $toolbarString;
if (isset($_SESSION['modul']))
    {
    if ($toolbarString != '')
        echo ' | ';
    echo '<a href="logout.php">' . $txt['13'] . '</a>';
    }
echo '</td></tr></table>';
html_comment('toolbar end');
?>