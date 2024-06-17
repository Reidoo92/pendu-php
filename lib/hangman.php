<?php
require_once './lib/debug.php';

const DICO = [
    'carabistouille',
    'calembredaine',
    'bilevesée',
    'coxigrue',
    'cacochyme',
    'prolégomène',
    'calembour',
    'parthénogenèse',
    'antépénultième',
    'aréopage',
    'paracétamol',
    'cucurbitacées',
    'coloquinte',
    'vernaculaire'
];

/**
 * Renvoie un mot choisi aléatoirement dans le  DICO
 *
 * @return string Un mot du dictionnaire
 */
function getRandomWord():string{
    return '';
}

/**
 * Renvoie la position d'un mot dans le DICO
 *
 * @param string $word Le mot à chercher dans le DICO
 * @return integer L'index du mot dans le DICO
 */
function getIndexOfWord(string $word):int|false{
    return false;
}

/**
 * Renvoie le nombre de lettres erronées dans les propositions du joueurs
 * ATTENTION ! IL VA FALLOIR TROUVER COMMENT RETIRER TOUS LES ACCENTS DU MOT À TROUVER
 * 
 * @param string $propositions Toutes les lettres tapées par le joueur jusqu'ici
 * @param string $word Le mot à trouver
 * @return integer Le nombre de lettres erronées
 */
function countErrors(string $propositions, string $word): int{
    return 0;
}

/**
 * Renvoie une chaîne représentant les lettres déjà trouvées dans le mot
 * Chaque lettre non trouvée est remplacée par un '_' (undescore)
 * Ex : 
 * getClueString('aer','partie') // Renvoie '_ar__e'
 * getClueString('aeup','pause') // Renvoie 'pau_e'
 * ATTENTION ! IL VA, LA AUSSI, FALLOIR TROUVER COMMENT RETIRER TOUS LES ACCENTS À TROUVER 
 *
 * @param string $propositions Les lettres tapées par le joueur jusqu'ici
 * @param string $word Le mot à trouver
 * @return string La chaîne d'indices finale
 */
function getClueString(string $propositions, string $word): string{
    return '';
}

