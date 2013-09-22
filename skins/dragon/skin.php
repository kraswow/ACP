<?php
$ModulesView = 0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $code_page; ?>"/>
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <LINK href="<?php echo $cssfile; ?>" type="text/css" rel="stylesheet"  media="screen"/>
        <script type="text/javascript" src="<?php echo $skindir; ?>tooltip.js"></script>
    </head>
    <body>

        <!--[if lt IE 7]>
        <style type="text/css">
        #top_menu_bar { position: absolute; }
        #sexy_navigator_box { position: absolute; }
        #sexy_navigator_panel { position: absolute; background: #ffffff url(''); }
        #sexy_navigator_right { position: absolute; background-color: #ffffff;}
        #sexy_navigator_hidden {margin-left: 16px;}
        #sexy_navigator_realmd { position: absolute; }
        #sexy_navigator_character { position: absolute; }
        #sexy_navigator_links { position: absolute; }
        #sexy_navigator_login { position: absolute; }
        #sexy_navigator_menu { position: absolute; }
        #content {width: 88%; }
        #window_title { background: none; }
        </style>
        <![endif]-->
        <div id="content"><br/><br/><br/>
            <div id="window">
                <div id="window_title"><?php echo $ServerName; ?><a name="default_top"></a></div>
                <div id="window_content">
                    <p align="center">
                        <?php require "mainform.php"; ?></p>
                    <a name="default_bottom"></a>
                    <!--[if lt IE 7]>
                    <p width="100%" align="right"><a href="#default_top"><img src="<?php echo $skindir; ?>top.png" alt="" border="0"></a></p>
                    <![endif]-->
                </div>
            </div><!--[if lt IE 7]><br/>
            <div id="window">
                <div id="window_title">Обнови свой браузер!</div>
                <div id="window_content">
                    <p align="center">
                        <div id="autoshow" style="display: none;">
                            <img  src="images/browsers/google_chrome.png" alt="" border="0" />
                            <h4>Google Chrome</h4>
                            <p align="justify">Новый браузер от известной компании Google! Chrome представляет 
                                собой новое поколение браузеров, обладающих первоклассным интерфейсом, 
                                наивысшей скоростью работы и удобством. Поисковые запросы можно 
                                вводить прямо в адресной строке.</p>
                        </div>
                        <div id="autoshow" style="display: none;">
                            <img  src="images/browsers/internet_explorer.png" alt="" border="0"/>
                            <h4>Internet Explorer</h4>
                            <p align="justify">Следующая версия Internet Explorer. В ней переработан 
                                интерфейс, добавлена возможность работы с вкладками, исправлено большое
                                количество уязвимостей в безопасности. По своему качеству этот браузер
                                приближается к лучшим альтернативам, присутствующим на рынке.</p>
                        </div>
                        <div id="autoshow" style="display: none;">
                            <img  src="images/browsers/mozilla_firefox.png" alt="" border="0"/><h4>Mozilla Firefox</h4>
                            <p align="justify">Безопасный, стабильный и быстрый Firefox просто создан для путешествия по 
                                Интернету. Имеет удобный интерфейс, поддержку различных тем оформления и 
                                расширение возможностей через систему плагинов. Он бесплатен, гибок в 
                                настройке и лёгок в установке!</p>
                        </div>
                        <div id="autoshow" style="display: none;">
                            <img  src="images/browsers/opera.png" alt="" border="0"/><h4>Opera Browser</h4>
                            <p align="justify">Современный, быстрый, надёжный браузер с огромной 
                                функциональностью: удобный менеджер загрузок файлов, встроенный 
                                torrent-клиент, клиент электронной почты и RSS-агрегатор. Браузер 
                                имеет стильный и удобный интерфейс.</p>
                        </div>
                        <div id="autoshow" style="display: none;">
                            <img  src="images/browsers/apple_safari.png" alt="" border="0"/><h4>Apple Safari</h4>
                            <p align="justify">Браузер от знаменитой компании Apple, которая 
                                славится качеством и продуманностью интерфейса предлагаемых 
                                продуктов. Safari является одним из лучших браузеров, 
                                поддерживающим новейшие веб-технологии. Минималистичность и 
                                качество интерфейса делает работу в интернете крайне удобной и 
                                приятной.</p>
                        </div>
                        <div style="background: url(skins/dragon/idea.gif) right top no-repeat; height: 330px">
                        <div style="width: 600px;">
                        <p align="justify"><br/>Вы видите на этот блок потому, что в настоящее время используете 
                            Internet Explorer 6 для просмотра страниц в интернете. Владелец сайта,
                            который Вы посетили, хотел бы, чтобы Вы рассмотрели возможность 
                            обновления браузера. Эта информация поможет Вам в выборе.</p>
                        <h3>Проблема</h3>
                        <p align="justify">Internet Explorer 6 был выпущен в 2001 году. И в настоящее время 
                            у этого браузера есть несколько серьёзных проблем. Браузер не 
                            поддерживает современные веб-стандарты и считается небезопасным. При 
                            его использовании компьютер подвергается риску заражения вредоносным 
                            ПО. В результате Вы можете столкнуться с большим количеством проблем. 
                            Проблемы, которые вызваны не вебсайтами, которые Вы посещаете, а 
                            браузером, который Вы используете: IE6.</p>
                        <h3>Решение</h3>
                        <p align="justify">Решение этой проблемы весьма просто. Вам нужно загрузить и установить 
                            более современную, удобную, быструю и безопасную версию браузера. Это 
                            не займет у Вас много времени. Сделав это сейчас, Вы избавитесь от 
                            многих проблем на несколько последующих лет.</p>
                        <p align="justify">Обновление браузера не вызовет никаких затруднений. Все браузеры из 
                            представленного ниже списка абсолютно бесплатны. Для обновления своего 
                            браузера Вам нужно нажать на любую из ниже приведенных ссылок и 
                            следовать инструкциям, указанным на открывшейся странице.</p>
                       </div>
                       </div>
                        <table width="90%" border="0" align="center" cellspacing="0" cellpadding="10">
                            <tr>
                                <td align="center" valign="bottom">
                                    <a href="http://www.google.com/chrome" target="_blank" title="Перейти на страницу установки Google Chrome">
                                        <img  src="images/browsers/google_chrome.png" alt="" border="0"
                                              onmouseover="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getElementsByTagName('div')[0].style.display = '';"
                                              onmouseout="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getElementsByTagName('div')[0].style.display = 'none';"
                                              />
                                    </a>
                                </td>
                                <td align="center" valign="bottom">
                                    <a href="http://www.microsoft.com/rus/windows/internet-explorer/" target="_blank" title="Перейти на страницу установки Internet Explorer">
                                        <img  src="images/browsers/internet_explorer.png" alt="" border="0"
                                              onmouseover="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getElementsByTagName('div')[1].style.display = '';"
                                              onmouseout="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';"
                                              />
                                    </a>
                                </td>
                                <td align="center" valign="bottom">
                                    <a href="http://www.mozilla.com/firefox" target="_blank" title="Перейти на страницу установки Mozilla Firefox">
                                        <img  src="images/browsers/mozilla_firefox.png" alt="" border="0"
                                              onmouseover="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getElementsByTagName('div')[2].style.display = '';"
                                              onmouseout="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getElementsByTagName('div')[2].style.display = 'none';"
                                              />
                                    </a>
                                </td>
                                <td align="center" valign="bottom">
                                    <a href="http://www.opera.com/browser/" target="_blank" title="Перейти на страницу установки Opera">
                                        <img  src="images/browsers/opera.png" alt="" border="0"
                                              onmouseover="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getElementsByTagName('div')[3].style.display = '';"
                                              onmouseout="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getElementsByTagName('div')[3].style.display = 'none';"
                                              />
                                    </a>
                                </td>
                                <td align="center" valign="bottom">
                                    <a href="http://www.apple.com/ru/safari/download/" target="_blank" title="Перейти на страницу установки Safari">
                                        <img  src="images/browsers/apple_safari.png" alt="" border="0"
                                              onmouseover="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getElementsByTagName('div')[4].style.display = '';"
                                              onmouseout="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getElementsByTagName('div')[4].style.display = 'none';"
                                              />
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </p>
                </div>
            </div><![endif]--><br/>
        </div>
        <div id="sexy_navigator_box">
            <div id="sexy_navigator_panel" class="pngfix">
                <!--[if IE]><![if gte IE 7]><![endif]-->
                <a href="#default_top"><img src="<?php echo $skindir; ?>top.png" alt="" border="0" 
                                            onmouseover="tooltip(this,'Вверх')" 
                                            onmouseout="hide_info(this)"                      
                                            /></a><hr/><br/>
                <!--[if IE]><![endif]><![endif]-->
                <a href="./"><img src="<?php echo $skindir; ?>wow.png" alt="" border="0" 
                                  onmouseover="tooltip(this,'В начало')" 
                                  onmouseout="hide_info(this)" /></a><br/>
                <img src="<?php echo $skindir; ?>key-login.png" alt="" border="0" 
                     onclick="
                         if (this.parentNode.parentNode.getElementsByTagName('div')[1].style.display != '') 
                         {this.parentNode.parentNode.getElementsByTagName('div')[2].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[3].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[4].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[5].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = '';} 
                         else
                         {this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';}" 
                     onmouseover="tooltip(this,'Авторизация / Параметры учетной записи')" 
                     onmouseout="hide_info(this)"
                     /><br/>
                <img src="<?php echo $skindir; ?>book.png" alt="" border="0" 
                     onclick="
                         if (this.parentNode.parentNode.getElementsByTagName('div')[2].style.display != '') 
                         {this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[3].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[4].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[5].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[2].style.display = '';} 
                         else
                         {this.parentNode.parentNode.getElementsByTagName('div')[2].style.display = 'none';}" 
                     onmouseover="tooltip(this,'Меню')" 
                     onmouseout="hide_info(this)"
                     /><br/>
                <img src="<?php echo $skindir; ?>characters.png" alt="" border="0" 
                     onclick="
                         if (this.parentNode.parentNode.getElementsByTagName('div')[3].style.display != '') 
                         {this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[2].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[4].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[5].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[3].style.display = '';} 
                         else
                         {this.parentNode.parentNode.getElementsByTagName('div')[3].style.display = 'none';}" 
                     onmouseover="tooltip(this,'Ваши персонажи')" 
                     onmouseout="hide_info(this)"
                     /><br/>
                <img src="<?php echo $skindir; ?>globe.png" alt="" border="0" 
                     onclick="
                         if (this.parentNode.parentNode.getElementsByTagName('div')[4].style.display != '') 
                         {this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[3].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[5].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[2].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[4].style.display = '';} 
                         else
                         {this.parentNode.parentNode.getElementsByTagName('div')[4].style.display = 'none';}" 
                     onmouseover="tooltip(this,'Выбор мира (Рилма)')" 
                     onmouseout="hide_info(this)"
                     /><br/>
                <img src="<?php echo $skindir; ?>links.png" alt="" border="0" 
                     onclick="
                         if (this.parentNode.parentNode.getElementsByTagName('div')[5].style.display != '') 
                         {this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[3].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[4].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[2].style.display = 'none';
                             this.parentNode.parentNode.getElementsByTagName('div')[5].style.display = '';} 
                         else
                         {this.parentNode.parentNode.getElementsByTagName('div')[5].style.display = 'none';}" 
                     onmouseover="tooltip(this,'Полезные ссылки')" 
                     onmouseout="hide_info(this)"
                     /><hr />
                <a href="#default_bottom"><img src="<?php echo $skindir; ?>down.png" alt="" border="0" 
                                               onmouseover="tooltip(this,'Вниз')" 
                                               onmouseout="hide_info(this)"
                                               /></a><br />
            </div>
            <div id="sexy_navigator_login" style="display: none;">
                <?php require "accview.php"; ?>
            </div>
            <div id="sexy_navigator_menu" style="display: none;">
                <?php require "rules.php"; ?> <br/>
                <?php require "menu.php"; ?>
            </div>
            <div id="sexy_navigator_character" style="display: none;">
                <?php require "chartable.php"; ?>
            </div>
            <div id="sexy_navigator_realmd" style="display: none;">
                <?php require "realmdselect.php"; ?>
            </div>
            <div id="sexy_navigator_links" style="display: none;">
                <?php require "links.php"; ?>
            </div>
        </div>
        <div id="sexy_navigator_right" 
             onmouseover="this.getElementsByTagName('div')[1].style.display = '';"
             onmouseout="this.getElementsByTagName('div')[1].style.display = 'none';">
            <div id="sexy_navigator_key" >
                <img src="<?php echo $skindir; ?>klickbar.png" alt="" border="0" 
                     onmouseover="tooltip(this,'Перейти к ...')" 
                     onmouseout="hide_info(this)" />
            </div>
            <div id="sexy_navigator_hidden" style="display: none;">
                <?php require "portallink.php"; ?>
            </div>
        </div>
        <div id="top_menu_bar" 
             onmouseover="this.getElementsByTagName('div')[0].style.display = '';" 
             onmouseout="this.getElementsByTagName('div')[0].style.display = 'none';" >
            <div id="top_menu_body" style="display: none;">
                <?php require "toolbar.php"; ?>
            </div>
            <br/>
        </div>
        <div id="mess" style="visibility: hidden; "></div>
    </body>
</html>
