<?php include 'view/layouts/header.php'; ?>
<div id="main">
    <a href="?action=index">Homepage</a>
    <h1 class="top">Error</h1>
    <p><?php echo $error_message; ?></p>
    <a href="javascript:history.go(-1)">GO BACK</a>
</div>
<?php include 'view/layouts/footer.php'; ?>