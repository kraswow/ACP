<?php

/**
 * Этот блок выводит набор ссылок на ресурсы сервера ВОВ.
 */
if (!isset($r_ip) or ($r_ip == ''))
    return;
html_comment('portal links');
$portalicon = 0;
$portalstring = '';
if ($PortalLink != '')
    {
    echo ' <a href="' . $PortalLink . '"><img src="images/portal/01.png" alt="" border="0"';
    echo ' onmouseover="tooltip(this,' . "'" . $txt['358'] . "')" . '"';
    echo ' onmouseout="hide_info(this)"/></a><br/>';
    $portalicon++;
    crlf();
    }
if ($ForumLink != '')
    {
    echo ' <a href="' . $ForumLink . '"><img src="images/portal/02.png" alt="" border="0"';
    echo ' onmouseover="tooltip(this,' . "'" . $txt['359'] . "')" . '"';
    echo ' onmouseout="hide_info(this)"/></a><br/>';
    $portalicon++;
    crlf();
    }
if ($ArmoryLink != '')
    {
    echo ' <a href="' . $ArmoryLink . '"><img src="images/portal/03.png" alt="" border="0"';
    echo ' onmouseover="tooltip(this,' . "'" . $txt['360'] . "')" . '"';
    echo ' onmouseout="hide_info(this)"/></a><br/>';
    $portalicon++;
    crlf();
    }
if ($MapLink != '')
    {
    echo ' <a href="' . $MapLink . '"><img src="images/portal/04.png" alt="" border="0"';
    echo ' onmouseover="tooltip(this,' . "'" . $txt['361'] . "')" . '"';
    echo ' onmouseout="hide_info(this)"/></a><br/>';
    $portalicon++;
    crlf();
    }
if ($BankLink != '')
    {
    echo ' <a href="' . $BankLink . '"><img src="images/portal/05.png" alt="" border="0"';
    echo ' onmouseover="tooltip(this,' . "'" . $txt['362'] . "')" . '"';
    echo ' onmouseout="hide_info(this)"/></a><br/>';
    $portalicon++;
    crlf();
    }
if ($portalicon == 0)
    {
    echo $txt['363'];
    }
?>