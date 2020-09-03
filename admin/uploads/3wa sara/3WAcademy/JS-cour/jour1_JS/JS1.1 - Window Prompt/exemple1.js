/*
 * Demande à l'utilisateur de saisir quelque chose dans une popup, lorsque la popup se referme le
 * résultat sera affecté à la variable.
 */
const TAUX_DE_TVA = 30;
let montantHT = window.prompt('saisir la valeur de HT');
let montantTTC;
let montantTVA;

montantTVA = montantHT * TAUX_DE_TVA / 100;
montantTTC = montantHT + montantTVA;

document.write('Montant de HT '+ montantHT+ ' Montant de TVA '+ montantTVA+' montant de TTC '+ montantTTC);


// Affichage du contenu de la variable dans un paragraphe HTML.
