<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use material\MaterialAsset;

MaterialAsset::register($this);
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@material/dist');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode(Yii::$app->name) ?></title>
        <style>
            /** skins **/
            #zheng-upms-server #header {background: #29A176;}
            #zheng-upms-server .content_tab{background: #29A176;}
            #zheng-upms-server .s-profile>a{background: url(images/zheng-upms.png) left top no-repeat;}

            #zheng-cms-admin #header {background: #455EC5;}
            #zheng-cms-admin .content_tab{background: #455EC5;}
            #zheng-cms-admin .s-profile>a{background: url(images/zheng-cms.png) left top no-repeat;}

            #zheng-pay-admin #header {background: #F06292;}
            #zheng-pay-admin .content_tab{background: #F06292;}
            #zheng-pay-admin .s-profile>a{background: url(images/zheng-pay.png) left top no-repeat;}

            #zheng-ucenter-home #header {background: #6539B4;}
            #zheng-ucenter-home .content_tab{background: #6539B4;}
            #zheng-ucenter-home .s-profile>a{background: url(images/zheng-ucenter.png) left top no-repeat;}

            #zheng-oss-web #header {background: #0B8DE5;}
            #zheng-oss-web .content_tab{background: #0B8DE5;}
            #zheng-oss-web .s-profile>a{background: url(images/zheng-oss.png) left top no-repeat;}

            #test #header {background: test;}
            #test .content_tab{background: test;}
            #test .s-profile>a{background: url(test) left top no-repeat;}
        </style>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <header id="header">
            <ul id="menu">
                <li id="guide" class="line-trigger">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>
                <li id="logo" class="hidden-xs">
                    <a href="index.html">
                        <img src="images/logo.png"/>
                    </a>
                    <span id="system_title"><?= Yii::$app->name ?></span>
                </li>
                <li class="pull-right">
                    <ul class="hi-menu">
                        <!-- Search -->
                        <li class="dropdown">
                            <a class="waves-effect waves-light" data-toggle="dropdown" href="javascript:;">
                                <i class="him-icon zmdi zmdi-search"></i>
                            </a>
                            <ul class="dropdown-menu dm-icon pull-right">
                                <form id="search-form" class="form-inline">
                                    <div class="input-group">
                                        <input id="keywords" type="text" name="keywords" class="form-control" placeholder="Search"/>
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                    </div>
                                </form>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="waves-effect waves-light" data-toggle="dropdown" href="javascript:;">
                                <i class="him-icon zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu dm-icon pull-right">
                                <li class="hidden-xs">
                                    <a class="waves-effect" data-ma-action="fullscreen" href="javascript:fullPage();"><i class="zmdi zmdi-fullscreen"></i> Full Screen</a>
                                </li>
                                <li>
                                    <a class="waves-effect" data-ma-action="clear-localstorage" href="javascript:;"><i class="zmdi zmdi-delete"></i> Delete</a>
                                </li>
                                <li>
                                    <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-face"></i> Profile</a>
                                </li>
                                <li>
                                    <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-settings"></i> Setting</a>
                                </li>
                                <li>
                                    <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-run"></i> Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <section id="main">
            <!-- 左侧导航区 -->
            <aside id="sidebar">
                <!-- 个人资料区 -->
                <div class="s-profile">
                    <a class="waves-effect waves-light" href="javascript:;">
                        <div class="sp-pic">
                            <img src="images/avatar.jpg"/>
                        </div>
                        <div class="sp-info">
                            <?= Yii::$app->user->identity ?>
                            <i class="zmdi zmdi-caret-down"></i>
                        </div>
                    </a>
                    <ul class="main-menu">
                        <li>
                            <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-account"></i> Profile</a>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-face"></i> Edit Profile</a>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-settings"></i> Setting</a>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-run"></i> Log Out</a>
                        </li>
                    </ul>
                </div>
                <ul class="main-menu">
                    <li>
                        <a class="waves-effect" href="javascript:Tab.addTab('home', 'home');"><i class="zmdi zmdi-home"></i> Home</a>
                    </li>
                    <li class="sub-menu system_menus system_1 0">
                        <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-accounts-list"></i> Menu1</a>
                        <ul>
                            <li><a class="waves-effect" href="javascript:Tab.addTab('系统管理', 'crud.html');">Sub Menu 1</a></li>
                            <li><a class="waves-effect" href="javascript:Tab.addTab('组织管理', '/manage/organization/index');">Sub Menu 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="upms-version">
                            &copy; IT-Assistant V1.0
                        </div>
                    </li>
                </ul>
                <!-- /菜单区 -->
            </aside>
            <!-- /左侧导航区 -->
            <section id="content">
                <div class="content_tab">
                    <div class="tab_left">
                        <a class="waves-effect waves-light" href="javascript:;"><i class="zmdi zmdi-chevron-left"></i></a>
                    </div>
                    <div class="tab_right">
                        <a class="waves-effect waves-light" href="javascript:;"><i class="zmdi zmdi-chevron-right"></i></a>
                    </div>
                    <ul id="tabs" class="tabs">
                        <li id="tab_home" data-index="home" data-closeable="false" class="cur">
                            <a class="waves-effect waves-light">Menu</a>
                        </li>
                    </ul>
                </div>
                <div class="content_main">
                    <div id="iframe_home" class="iframe cur">
                        <?= $content ?>
                    </div>
                </div>
            </section>
        </section>
        <footer id="footer"></footer>
            <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
