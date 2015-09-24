<html>
        <head>
                <title>Footy Posts</title>
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
		<link href="<?php echo base_url("assets/css/jumbotron-narrow.css"); ?>" rel="stylesheet">
        </head>
        <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="<?php echo base_url(""); ?>">Home</a></li>
            <li role="presentation"><a href="<?php echo base_url("index.php/news"); ?>">News</a></li>
            <li role="presentation"><a href="<?php echo base_url("index.php/news/create"); ?>">Create</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Footy Posts</h3>
      </div>
                <h1><?php echo $title; ?></h1>