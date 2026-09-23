<?php

// config.php
require_once __DIR__ . '/../i18n/translation.php';
require_once __DIR__ . '/../data/data.php';


// Détection de la langue (défaut: 'en')
$current_lang = $_GET['lang'] ?? $_COOKIE['lang'] ?? 'en';
// Whitelist : évite les clés invalides (ex: ?lang=de) dans $i18n et $typing_texts
$current_lang = in_array($current_lang, ['en', 'fr'], true) ? $current_lang : 'en';
setcookie('lang', $current_lang, time() + (86400 * 30), "/"); // Mémorise le choix

// Fonction d'aide pour récupérer une traduction
function t($key) {
    global $i18n, $current_lang;
    return $i18n[$current_lang][$key] ?? $key;
}

// Fonction d'aide pour inclure les views selon le cas (layout / section)
function ViewIncluder($typeOfView, $viewName){

    // On copie donc les globales dans le scope local avant l'inclusion.
    $viewVars = $GLOBALS;
    extract($viewVars, EXTR_SKIP);

    return require __DIR__ . "/../views/".$typeOfView."/".$viewName.".php";
    
}
