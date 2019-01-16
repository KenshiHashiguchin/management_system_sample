<?php
use Cake\Form\Form;
use Cake\View\Helper\FormHelper;
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
<body class="login-page">
<div class="login-box">

	<div class="login-logo">
		<a href="">管理画面</a>
	</div><!-- /.login-logo -->

	<div class="login-box-body">
        <div class="users form">
			<?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Please enter your username and password') ?></legend>
				<?= $this->Form->control('username') ?>
				<?= $this->Form->control('password') ?>
            </fieldset>
			<?= $this->Form->button(__('Login')); ?>
			<?= $this->Form->end() ?>
        </div>
	</div><!-- /.login-box-body -->
</div><!-- /.login-box -->
<!-- jquery -->
<script src="/adminlte/plugins/jQuery/jQuery-2.2.3.min.js" type="text/javascript"></script>
<!-- bootstrap -->
<script src="/adminlte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- adminLTE -->
<script src="/adminlte/dist/js/app.min.js" type="text/javascript"></script>

<?= $this->fetch('scriptBottom') ?>

<?= $this->fetch('scriptBottom2') ?>

</body>
</html>