<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head class="main-header">
	<?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
		<?= $this->fetch('title') ?>
    </title>
    <!-- for responsive -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- bootstrap -->
    <link href="/adminlte/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- adminLTE style -->
    <link href="/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>
    <link href="/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css"/>
	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('script') ?>
    <!--	--><? //= $this->Html->css('style.css') ?>
    <style>
        <?= $this->fetch('style') ?>
    </style>
</head>
<body class="skin-blue">
<div class="wrapper">
    <header class="main-header">
        <a href="../../index2.html" class="logo">
            管理システム
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                    <a href="#" >
                        ログアウト
                    </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <!-- サイドバー -->
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
				<?= $this->element('MenuItemTree', [
					'name' => 'Event',
					'icon' => 'fa-calendar',
					'color' => 'text-green',
					'children' => [
						['name' => __('Event'), 'controller' => 'Events', 'action' => 'index', 'icon' => null],
						['name' => __('Participate event'), 'controller' => 'Events', 'action' => 'mine', 'icon' => null],
						['name' => __('Recently accessed'), 'controller' => 'Events', 'action' => 'enter', 'icon' => null],
						['name' => __('Forum list'), 'controller' => 'EventThreads', 'action' => 'index', 'icon' => null],
					],
				]) ?>
            </ul>
        </section>
    </aside><!-- end sidebar -->


    <!-- content -->
    <div class="content-wrapper">
        <div class="columns content">
			<?= $this->fetch('content') ?>
        </div>
    </div>
    <!-- end content -->


    <!-- フッター -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">Version1.0</div>
        <strong>Copyright &copy; 2015</strong>, All rights reserved.
    </footer><!-- end footer -->


</div><!-- end wrapper -->
<!-- JS -->

<!-- jquery -->
<script src="/adminlte/plugins/jQuery/jQuery-2.2.3.min.js" type="text/javascript"></script>
<!-- bootstrap -->
<script src="/adminlte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- adminLTE -->
<script src="/adminlte/dist/js/app.min.js" type="text/javascript"></script>

<?= $this->fetch('scriptBottom') ?>

<?= $this->fetch('scriptBottom2') ?>

<script><?= $this->Flash->render() ?></script>
</body>
</html>
