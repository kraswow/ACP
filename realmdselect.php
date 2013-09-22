<?php

/**
 * Этот блок выводит список миров (реалмов)
 */
if (!isset($r_ip) or ($r_ip == ''))
    return;
// ======= realmd select ==========
html_comment('realmd select');
$r_connect = mysql_connect($r_ip, $r_userdb, $r_pw);
mysql_select_db($r_db, $r_connect);
mysql_query("SET NAMES 'utf8'");
$query = "SELECT * FROM `realmlist` order by `id`";
$realml = mysql_query($query);
if (mysql_num_rows($realml) > 1)
    {
    echo "\n" . '<table width="220" border="0" cellspacing="0" cellpadding="4">';
    echo '<tr><td colspan=2 align="left" valign="bottom">' . $txt[247] . '</td></tr>';
    echo '<tr><td colspan=2 class="PanelTop">&nbsp;';
    echo '</td></tr>';
    crlf();
    while ($rlist = mysql_fetch_array($realml))
        {
        if ($rlist['id'] == $_SESSION['realmd'])
            {
            echo '<tr>';
            echo '<td align="left" valign="middle">';
            echo '<img src="images/yes.png" alt="Select" BORDER=0 align="absmiddle">';
            echo '</td>';
            echo '<td align="left" valign="middle"><b>' . $rlist['name'] . '</b></td>';
            echo '</tr>';
            } else
            {
            echo '<tr>';
            echo '<td>';
            echo '</td>';
            echo '<td align="left" valign="middle"><a href="index.php?modul=' . $ChangeRealmModule . '&realmdselect=' . $rlist['id'] . '" target="_self">' . $rlist['name'] . '</a></td>';
            echo '</tr>';
            crlf();
            }
        }
    echo '<tr><td colspan=2 class="PanelBottom">&nbsp;</td></tr>';
    echo '</table>';
    crlf();
    }
?>