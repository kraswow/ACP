<?php $ModulesView = 0; ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>ACP-account control panel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <link href="<?php echo $skindir; ?>skin.css" type="text/css" rel="stylesheet"  media="screen"/>
    </head>
    <body>
        <div id="container">
            <div id="top">
                <div id="top_text" 
                     onClick="
                         this.parentNode.getElementsByTagName('div')[4].style.display = '';
                         this.parentNode.getElementsByTagName('div')[5].style.display = 'none';
                         this.parentNode.getElementsByTagName('div')[6].style.display = 'none';
                     ">
                    <img src="skins/acp/globe.png" border="0" /><br/>Realms
                </div>     
                <div id="top_text"
                     onClick="
                         this.parentNode.getElementsByTagName('div')[4].style.display = 'none';
                         this.parentNode.getElementsByTagName('div')[5].style.display = '';
                         this.parentNode.getElementsByTagName('div')[6].style.display = 'none';
                     ">
                    <img src="skins/acp/login.png" border="0"/><br/>Login/Acc
                </div>
                <div id="top_text"
                     onClick="
                         this.parentNode.getElementsByTagName('div')[4].style.display = 'none';
                         this.parentNode.getElementsByTagName('div')[5].style.display = 'none';
                         this.parentNode.getElementsByTagName('div')[6].style.display = '';
                     ">
                    <img src="skins/acp/characters.png" border="0"/><br/>Персонажи
                </div>
                <div style="text-align:center; height: 80px; text-align: center;" 
                     onClick="
                         this.parentNode.getElementsByTagName('div')[4].style.display = 'none';
                         this.parentNode.getElementsByTagName('div')[5].style.display = 'none';
                         this.parentNode.getElementsByTagName('div')[6].style.display = 'none';
                     " >
                    <br/><img src="skins/acp/arr.gif" border="0"/></div>
                <div id="top_menu" style="display: none;" >
                    <?php require "realmdselect.php"; ?>
                </div> 
                <div id="top_menu" style="display: none;" >
                    <?php require "accview.php"; ?>
                </div> 
                <div id="top_menu" style="display: none;" >
                    <?php require "chartable.php"; ?>
                </div>
            </div>
            <div id="top_bar"><?php require "toolbar.php"; ?>
            </div>
            
            <div id="sidebar">
                <?php require "logo.php"; ?>
                <?php require "menu.php"; ?>
                <?php require "rules.php"; ?>
                <?php require "links.php"; ?>
            </div>
            <div id="content">
                <br/>
                <?php require "mainform.php"; ?> 
            </div>
            <div style="clear: both;"></div>
        </div>
    </body>
</html>