<?php
require_once './lib/hangman.php';

// VARIABLES NÉCESSAIRES
$lettre         = '';       // LA LETTRE QUI VIENT D'ÊTRE SAISIE PAR L'UTILISATEUR (SI PAS LE PREMIER ROUND)
$propositions   = '';       // CHAÎNE DE CARACTÈRES REGROUPANT L'ENSEMBLE DE TOUTES LES PROPOSITIONS FAITES PAR LE JOUEUR JUSQU'ICI
$index          = -1;       // INDEX DU MOT À TROUVER DANS LE DICTIONNAIRE DICO
$word           = '';       // LE MOT À TROUVÉ CHOISI ALÉATOIREMENT DANS LE DICO ET RETROUVÉ À CHAQUE TOUR GRÂCE À L'INDEX
$clueString     = '';       // LA CHAÎNE À AFFICHER AU JOUEUR POUR LUI INDIQUER L'ENPLACEMENT DES LETTRES DÉJÀ TROUVÉES (LES LETTRES NON TROUVÉES SONT REPLACÉES PAR DES '_')
$nbErrors       = 0;        // NOMBRE D'ERREURS FAITES JUSQU'ICI PAR LE JOUEUR (À 6, C'EST GAME OVER)
$lost           = false;    // TRUE SI LE JOUEUR A PERDU
$won            = false;    // TRUE SI LE JOUEUR A GAGNÉ
$clueCSSClass   = '';       // CLASSE CSS À AJOUTER À LA CLUESTRING ON FONCTION DE LA LONGUEUR DU MOT (POUR QUE CELA RENTRE DANS L'ÉCRAN)

// SI LA LETTRE EXISTE DANS $_POST (envie du formulaire)

    // RÉCUPÉRER LA LETTRE DANS UNE VARIABLE

    // PASSER LA LETTRE EN MINUSCULE

    // SI ON A SAISI PLUS DE 1 CARACTÈRE

        // VIDER LA VARIABLE LETTRE

    // FIN SI

    // SI LA LETTRE NE FAIT PAS PARTIE DES LETTRES AUTORISÉES (ALPHABET)
    
        // VIDER LA VARIABLE LETTRE
        
    // FIN SI
// FIN SI


// SI L'INDEX DU MOT A TROUVER EXISTE DANS $_POST

    // RÉCUPÉRER L'INDEX DANS UNE VARIABLE

// FIN SI

// SI "PROPOSITIONS" EXISTE DANS $_POST

    // RÉCUPÉRER "PROPOSITIONS" DANS UNE VARIABLE

// FIN SI
 
// SI ON COMMENCE LA PARTIE (index est égal à -1)

    // CHOISIR UN MOT AU HASARD EST LE STOCKER DANS UNE VARIABLE

    // RECUPERER L'INDEX DU MOT ET LE STOCKER DANS UNE VARIABLE
    // ATTENTION, CETTE VARAIBLE DEVRA ÊTRE STOCKÉE DANS LE HTML SOU LA FORME D'UN INPUT TYPE HIDDEN
    // POUR POUVOIR ÊTRE RETROUVÉ PLUS TARD LORS DES ROUNDS SUIVANTS
    
// FIN SI


// LA LETTRE QUE L'UTILISATEUR VIENT DE SAISIR N'EST PAS DÉJÀ DANS LES PROPOSITIONS PRÉCÉDENTES

    // CONCATÉNER CETTE LETTRE AUX PROPOSITIONS PRÉCÉDENTES

// FIN SI


// RÉCUPÉRER LE MOT DANS LE DICO EN UTILISANT L'INDEX

// CRÉER LA "CLUESTERING" EN REMPLACANT, DANS LE MOT, LES LETTRES NON TROUVÉES PAR DES '_' (APPEL À LA FONCTION getClueString() )

// RÉCUPÉRER LE NOMBRE D'ERREURS DU JOUEUR (APPEL À LA FONCTION countErrors() )


// SI ON A 6 ERREURS OU PLUS,

    // ON A PERDU, METTRE LA BONNE VARIABLE À TRUE

// FIN SI


// SI IL N'Y A PLUS DE '_' DANS LA CLUESTRING

    // ON A GAGNÉ, METTRE LA BONNE VARIABLE À TRUE

// FIN SI



// SI LE MOT FAIT PLUS DE 9 CARACTÈRES

    // ECRIRE 'clue-small' DANS $clueCSSClass
    
// FIN SI
    
// SI LE MOT FAIT PLUS DE 12 CARACTÈRES
    
    // ECRIRE 'clue-tiny' DANS $clueCSSClass

// FIN SI

// CHARGEMENT DE LA VUE
include './templates/index.phtml';