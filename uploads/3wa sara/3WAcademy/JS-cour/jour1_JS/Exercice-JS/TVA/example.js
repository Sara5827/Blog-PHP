const TAUX_DE_TVA = 30.0;
// déclaration des variables
let montantHT;
let montantTTC;
let montantTVA;
montantHT = Window.prompt('Saisir le montant de HT');

montantTVA = montantHT * TAUX_DE_TVA / 100;
montantTTC = montantHT + montantTVA;

document.write('Montant de HT' + montantHT +'Montant de TVA' + montantTVA + 'montant de TTC' + montantTTC);
console.log("hi");