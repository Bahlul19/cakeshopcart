
<!DOCTYPE html>
<html>
<head>

<title>

    <?= $title; ?>

</title>

<!-- Custom template for the title END-->

</head>
<body>

<!-- Attached the header into the page-->

    <?= $this->element('header'); ?>

    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>

<!-- Attached the footer into the page -->

    <?= $this->element('footer'); ?>


</body>
</html>
