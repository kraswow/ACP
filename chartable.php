<?php

/**
 * Этот блок выводит список персонажей
 */
if (!isset($r_ip) or ($r_ip == ''))
    return;
html_comment('show characters');
if (isset($_SESSION['user_id'])
        AND ($_SESSION['user_id'] > 0)
        AND ($_SESSION['ip'] == $_SERVER['REMOTE_ADDR']))
    {
    echo '<table width="220" border="0" cellspacing="0" cellpadding="4">';
    $c_connect = mysql_connect($c_ip, $c_userdb, $c_pw);
    mysql_select_db($c_db, $c_connect);
    mysql_query("SET NAMES 'utf8'");
    $c_query = "SELECT `name`, `class`, `guid`, `race`, `online`, `gender`, `level`, `money` FROM `characters` WHERE `account` = "
            . $_SESSION['user_id'] . " order by `guid`;";
    $res = mysql_query($c_query);
    $kol = 1;
    echo '<tr><td colspan=4 align="left" valign="top" class="PanelTitle">' . $txt[248] . '</td></tr>';
    if (mysql_num_rows($res) > 0)
        while ($cres = mysql_fetch_array($res))
            {
            $money = $cres['money'];
            crlf();
            echo '<tr>';
            echo '<td>';
            echo "<img src='images/race/" . $cres['race'] . "-" . $cres['gender'] . ".gif' align='absmiddle'> ";
            echo "<img src='images/class/" . $cres['class'] . ".gif' align='absmiddle'> ";
            echo '</td>';
            echo '<td>';
            if ($cres['online'] == 1)
                echo '<font color=red><b>' . $cres['name'] . '</b></font></td>';
            else
                echo '<b><a href="index.php?modul=char&id=' . $cres['guid'] . '" target="_self">' . $cres['name'] . '</a></b></td>';
            echo '<td>';
            echo $cres['level'] . '</td>';
            echo '<td>';
            if ($charview == '')
                echo '&nbsp;';
            else
                echo '<a href="' . $charview . $cres['guid'] . '" target="_blank"><img src="images/question.png" alt="Detals" BORDER=0 align="absmiddle"><a>';
            echo '</td>';
            echo '</tr>';
            $kol++;
            }
    else
        {
        echo '<tr><td colspan=4 align="center">' . $txt['356'] . '</td></tr>';
        }
    echo '</table>';
    } else
    {
    echo $txt['357'];
    }
crlf();
?>