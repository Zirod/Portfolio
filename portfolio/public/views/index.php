<?php

    require_once __DIR__ . '/../shared/helpers.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include __DIR__ . '/../shared/head.php'; ?>
</head>
<body>

    <!-- Navigation Flottante -->
    <?php include __DIR__ . '/layout/navbar.php'; ?>

    <?php include __DIR__ . '/sections/hero.php'; ?>
    <?php include __DIR__ . '/sections/services.php'; ?>
    <?php include __DIR__ . '/sections/experiences.php'; ?>
    <?php include __DIR__ . '/sections/projects.php'; ?>
    <?php include __DIR__ . '/sections/contact.php'; ?>

    <!-- Footer -->
    <?php include __DIR__ . '/layout/footer.php'; ?>

</body>
</html>
