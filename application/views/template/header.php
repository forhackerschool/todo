<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>js/done.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <title>Tim ToDo</title>
  </head>
  <body>
    <?php if($this->session->userdata('username')): ?>
	<div class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Tim ToDo</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><?= anchor(base_url(), 'Home') ?></li>
            <li><?= anchor('app/add_todo' , 'Add New Task') ?></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Hello <?= $this->session->userdata('username') ?></a></li>
			<li><?= anchor('site/logout', 'Logout') ?></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <?php endif; ?>