<?php 
    require_once __DIR__ . '/app/config/config.php'; 
?>

<!DOCTYPE html>
<html lang="<?= $current_lang ?>">

    <head>
        <?php include("./assets/shared/sharedHead.php"); ?>
    </head>
    
    <body class="<?= $current_lang === 'fr' ? 'lang-fr' : 'lang-en' ?>">

        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>

        <!-- NAVBAR -->
        <?php ViewIncluder("layout", "header"); ?>

        <!-- HERO -->
        <?php ViewIncluder("section", "hero"); ?>

        <!-- ABOUT -->
        <?php ViewIncluder("section", "about"); ?>

        <!-- SKILLS -->
        <?php ViewIncluder("section", "skills"); ?>

        <!-- JOURNEY -->
        <?php ViewIncluder("section", "journey"); ?>
    
        <!-- PROJECTS -->
        <?php ViewIncluder("section", "project"); ?>
        
        <!-- CONTACT -->
        <?php ViewIncluder("section", "contact"); ?>

        <!-- FOOTER -->
         <?php ViewIncluder("layout", "footer"); ?>


        <script>
            // Données injectées depuis PHP (le fichier externe main.js les utilise)
            const typingTexts = <?= json_encode($typing_texts[$current_lang]) ?>;
            let typingIndex = 0, charIndex = 0, isDeleting = false, typingTimeout;

            // Contact form
            document.getElementById('contactForm').addEventListener('submit', (e) => {
                e.preventDefault();
                alert('<?= t('alert_success') ?>');
                e.target.reset();
            });
        </script>
        <script src="./assets/js/main.js"></script>

    </body>
</html>