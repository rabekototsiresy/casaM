<?php
// include header page
require_once('templates/elements/header.php');
?>
<?php isset($_SESSION) ?  require_once('templates/elements/navbar.php') : '' ?>
<div class="maincontainer">
<?= $content ?>
</div>

<?php
// include footer page
require_once('templates/elements/footer.php');
?>