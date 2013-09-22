<?php

/**
 * Этот блок выводит параметры учетной записи
 */
if (!isset($r_ip) or ($r_ip == ''))
    return;
html_comment('account view');
if (!isset($_SESSION['user_id']) or ($_SESSION['ip'] != $_SERVER['REMOTE_ADDR']))
    {
    html_comment('login');
    require $modules['login'][0];
    echo '<br>';
    } else
    {
    html_comment('account view');
    $rip = '';
    $r_connect = mysql_connect($r_ip, $r_userdb, $r_pw);
    mysql_select_db($r_db, $r_connect);
    mysql_query("SET NAMES 'utf8'");
    $query0 = "SELECT `ip` FROM `ip_banned` WHERE `ip`='" . $_SERVER['REMOTE_ADDR'] . "' LIMIT 1";
    $res0 = mysql_fetch_assoc(mysql_query($query0));
    if (isset($res0['ip']))
        $rip = $res0['ip'];
    $query = "SELECT * FROM `account` WHERE `id`=" . $_SESSION['user_id'] . " LIMIT 1";
    $row = mysql_fetch_assoc(mysql_query($query));
    if (isset($row))
        {
        $ra_id = $row['id'];
        $ra_username = $row['username'];
        $ra_gmlevel = $txt[70 + $_SESSION['gnom']];
        $ra_email = $row['email'];
        $ra_joindate = $row['joindate'];
        $ra_last_ip = $row['last_ip'];
        $ra_locked = $row['locked'];
        $ra_last_login = $row['last_login'];
        $ra_online = $row[$online];
        $ra_expansion = getExpansion($row['expansion']);
        $ra_locale = getlocale($row['locale']);
        }
    if (strtoupper($_SESSION['slovo']) != strtoupper($row['sha_pass_hash']))
        {
        session_destroy();
        echo '<table width="500" border="0" cellspacing="0" cellpadding="0">';
        echo '<tr><td height="25" align="center" valign="middle" class="ErrTitle"><b>';
        echo $txt[20] . '</b></td></tr><tr><td height="45" align="center" valign="middle"  class="ErrTab"><b>';
        echo $txt[120] . '</b></td></tr></table><br><br>';
        crlf();
        ReturnMainForm(40);
        return;
        }
    $r_connect = mysql_connect($r_ip, $r_userdb, $r_pw);
    mysql_select_db($r_db, $r_connect);
    mysql_query("SET NAMES 'utf8'");
    $query2 = "SELECT `active` FROM `account_banned` WHERE `id`='" . $ra_id . "' LIMIT 1";
    $res2 = mysql_query($query2) or trigger_error(mysql_error());
    if ($row2 = mysql_fetch_assoc($res2))
        $r_act = $row2['active'];
    else
        $r_act = '0';
    $d = '&copy;&nbsp;Kot&nbsp;DaW' . 'IN' . 'chi&nbsp;' . date('Y') . '&nbsp;' . '<br>version  ' . $acp_ver . '.' . $rev;
    echo '<table width="220" border="0" cellspacing="0" cellpadding="3">';
    echo '<tr><td align="left" valign="top" class="PanelTitle">' . $txt[1] . '</td></tr>';
    echo '<tr><td align="right" valign="bottom" class="PanelData">';
    echo '<a href="index.php?modul=acc">' . $ra_username . '</a></td></tr>';
    crlf();
    if ($ShowIdAcc == 1)
        {
        echo '<tr><td align="left" valign="top" class="PanelTitle">';
        echo $txt[214];
        echo '</td></tr><tr><td align="right" valign="bottom" class="PanelData">';
        echo $ra_id;
        echo '</td></tr>';
        }
    echo '<tr><td align="left" valign="top" class="PanelTitle">';
    echo $txt[16];
    echo '</td></tr><tr><td align="right" valign="bottom" class="PanelData">';
    echo $ra_expansion;
    echo '</td></tr><tr><td align="left" valign="top" class="PanelTitle">';
    echo $txt[31];
    echo '</td></tr><tr><td align="right" valign="bottom" class="PanelData">';
    echo $ra_gmlevel;
    echo '</td></tr>';
    echo '<tr><td align="left" valign="top" class="PanelTitle">';
    echo $txt[32];
    echo '</td></tr>';
    echo '<tr><td align="right" valign="bottom" class="PanelData">';
    if (!mb_eregi("^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\._-]+\.[a-zA-Z]{2,4}$", $ra_email))
        {
        echo $txt[66];
        if ($ra_email <> '')
            {
            mysql_query('update `account` set `email` = "" where `id` = ' . $ra_id . ';');
            $ra_email = '';
            }
        }
    else
        echo $ra_email;
    echo '</td></tr>';
    crlf();
    echo '<tr><td align="left" valign="top" class="PanelTitle">';
    echo $txt[33];
    echo '</td></tr>';
    echo '<tr><td align="right" valign="bottom" class="PanelData">';
    echo $ra_locale;
    echo '</td></tr>';
    echo '<tr><td align="left" valign="top" class="PanelTitle">';
    echo $txt[34];
    echo '</td></tr>';
    echo '<tr><td align="right" valign="bottom" class="PanelData">';
    if ($ra_online == 1)
        echo $txt[35];
    else
        echo $txt[36];
    echo '</td></tr>';
    echo '<tr><td align="left" valign="top" class="PanelTitle">';
    echo $txt[37];
    echo '</td></tr>';
    crlf();
    echo '<tr><td align="right" valign="bottom" class="PanelData">';
    echo $ra_joindate;
    echo '</td></tr>';
    echo '<tr><td align="left" valign="top" class="PanelTitle">';
    echo $txt[38];
    echo '</td></tr>';
    echo '<tr><td align="right" valign="bottom" class="PanelData">';
    echo $ra_last_login;
    echo '</td></tr>';
    echo '<tr><td align="left" valign="top" class="PanelTitle">';
    echo $txt[39];
    echo '</td></tr>';
    echo '<tr><td align="right" valign="bottom" class="PanelData">';
    echo $ra_last_ip;
    echo '</td></tr>';
    echo '<tr><td align="left" valign="top" class="PanelTitle">';
    echo $txt[40];
    echo '</td></tr>';
    echo '<tr><td align="right" valign="bottom" class="PanelData">';
    if ($ra_locked == 0)
        echo $txt[42];
    else
        echo $txt[41];
    echo '</td></tr>';
    echo '</table>';
    crlf();
    }
?>