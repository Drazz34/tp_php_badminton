<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    include "common/head.php";
    ?>
</head>

<body>
    <?php
    $page = filter_input(INPUT_GET, "page");
    include "template.php";
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>