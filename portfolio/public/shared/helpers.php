<?php

/**
 * Échappe une valeur pour un affichage HTML sécurisé.
 */
function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * Rend une URL utilisable : renvoie '#' si elle est vide.
 */
function url_or_hash(?string $url): string
{
    $url = trim((string) $url);

    return $url !== '' ? $url : '#';
}
