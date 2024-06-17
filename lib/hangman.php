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
    $randomWord = array_rand(DICO);
    return DICO[$randomWord];
}

/**
 * Renvoie la position d'un mot dans le DICO
 *
 * @param string $word Le mot à chercher dans le DICO
 * @return integer L'index du mot dans le DICO
 */
function getIndexOfWord(string $word):int|false{

    $index = array_rand($word);
    return $index;
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

    $accents  = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ');
	$notAccents = array('A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y');
	$word = str_replace($accents, $notAccents, $word);
	$propositions = str_replace($accents, $notAccents, $propositions);
    $proSize = strlen($propositions);

    $error = 0;

    for ($i=0; $i < $proSize; $i++) { 
        if (!str_contains($word, $propositions[$i])) {
            $error++;
        }
    };

    return $error;
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
function getClueString( string $propositions, string $word): string{

    $accents  = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ');
	$notAccents = array('A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y');
	$word = str_replace($accents, $notAccents, $word);
	$propositions = str_replace($accents, $notAccents, $propositions);

    $proSize = strlen($word);
    $searchWord = '';

    for ($i=0; $i < $proSize ; $i++) { 

        $searchWord = $searchWord.' '.'_'.' ';

        if (str_contains($word, $propositions[$i])) {
            $searchWord = str_replace($searchWord, $notAccents, $propositions);
        }

    }

    return $searchWord;
}

