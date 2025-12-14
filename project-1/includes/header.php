<?php
$title = $title ?? 'My PHP Site';
$basePath = $basePath ?? './';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($title); ?></title>
  <link rel="stylesheet" href="<?php echo $basePath; ?>assets/style.css">
</head>
<body>
<header class="site-header">
  <div class="logo">My PHP Site</div>
  <nav class="nav">
    <a href="<?php echo $basePath; ?>index.php">Home</a>
    <a href="<?php echo $basePath; ?>about.php">About</a>
    <a href="<?php echo $basePath; ?>contact.php">Contact</a>
  </nav>
</header>
<main class="content">
