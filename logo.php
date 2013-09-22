<?php

/**
 * Этот блок выводит Название сервера
 */
if (!isset($r_ip) or ($r_ip == ''))
    return;
html_comment('server name');
echo '<table width="220" border="0" cellspacing="0" cellpadding="3">';
echo '<tr><td align="center">';
echo $txt[30];
echo '</td></tr>';
echo '<tr><td colspan=4 class="PanelTop">&nbsp;</td></tr>';
echo '<tr><td align="center" class="NewsTitlePlayer">';
echo '<a href="index.php">' . $ServerName . '</a>';
echo '</td></tr>';
echo '<tr><td class="PanelBottom">&nbsp;</td></tr>';
echo '</table><br><br>';
crlf();
?>