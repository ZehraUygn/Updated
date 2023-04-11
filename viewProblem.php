<?php 
  include_once 'header.php';
?>

<h1>Problems reported</h1>
<h2>Blog Entries</h2>
<nav>
    <ul id="list">
        <li><a id="list" href="Report.php">Add Entry</a></li>
    </ul>
</nav>

<?php
include_once 'dbh.inc.php';
include_once 'functions.inc.php';
displayReports($conn); ?>
