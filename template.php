<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    include "common/head.php";
    ?>
</head>

<body>
    <?php
    include "common/header.php";
    include "common/navigation.php";

    if(!isset($page)) {
        $page = "home";
    }

    switch ($page) {
        case 'home':
            include "content/index_content.php";
            break;
        case 'about':
            include "content/about_content.php";
            break;
        case 'products':
            include "content/products_content.php";
            break;
        case 'store':
            include "content/store_content.php";
            break;
        default:
            include "content/page404.php";
            break;
    }
    include "common/footer.php";
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>