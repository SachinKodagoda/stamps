<!DOCTYPE html>
<!-- Html -->
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<head>
    <!-- Common Head Components -->
    <?php require APPROOT . '/views/common/head.php'; ?>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="./css/globals.css" />
    <link rel="stylesheet" type="text/css" href="./css/account.css" />
    <link rel="stylesheet" type="text/css" href="./css/modules/header.css" />
    <link rel="stylesheet" type="text/css" href="./css/modules/footer.css" />
</head>
<!-- Body -->

<body>
    <!-- Header -->
    <?php require APPROOT . '/views/modules/header.php'; ?>
    <!-- Main Wrapper -->
    <div class="main_wrapper">
        <div class="page_dummy">account page</div>
    </div>
    <!-- Footer -->
    <?php require APPROOT . '/views/modules/footer.php'; ?>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/common.js" type="text/javascript"></script>
    <script src="./js/account.js" type="text/javascript"></script>
</body>

</html>