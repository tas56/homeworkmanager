<!DOCTYPE html>
<html lang="en">
<head>
<meta charset= "utf-8" />
<title><?php echo $title ?></title>
<link rel="stylesheet" href="<?php if ($b != NULL) echo $b; ?>styles.css" />
<script type="text/javascript" src="<?php if($b != NULL) echo $b; ?>myscripts.js"></script>
</head>
<body>

<div id="header">
    <p id="banner">My Homework Manager</p>
      <form <?php echo $button_action ?>>
        <button id="logout"><?php echo $header_button ?></button>
      </form>
</div>

<div class="container">