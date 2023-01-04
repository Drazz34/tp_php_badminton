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
        $page = "actu";
    }

    switch ($page) {
        case 'actu':
            include "content/actu_content.php";
            break;
        case 'equipe':
            include "content/equipe_content.php";
            break;
        case 'stages':
            include "content/stages_content.php";
            break;
        case 'creneaux':
            include "content/creneaux_content.php";
            break;
        default:
            include "content/page404.html";
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