<?php
$title = 'Home | My PHP Site';
$basePath = './';
include 'includes/header.php';
?>
<section class="hero">
  <h1>Welcome</h1>
  <p>This is a lightweight PHP starter with a shared header and footer.</p>
  <a class="btn" href="about.php">Learn more</a>
</section>
<section class="grid">
  <article>
    <h2>Fast Setup</h2>
    <p>Drop it on any PHP server and you have a three-page scaffold ready to extend.</p>
  </article>
  <article>
    <h2>Reusable Layout</h2>
    <p>Update the header or footer once and every page picks it up automatically.</p>
  </article>
  <article>
    <h2>Simple Styles</h2>
    <p>A small CSS file keeps things tidy without pulling in a framework.</p>
  </article>
</section>
<?php include 'includes/footer.php'; ?>
