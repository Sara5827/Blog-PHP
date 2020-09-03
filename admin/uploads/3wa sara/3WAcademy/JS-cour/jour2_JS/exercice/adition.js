var a = window.prompt('entrer un nombre');
var b = window.prompt('entrer une autre valeur');
var c = window.prompt('operation demander');
var ad = 'adition';
var so = 'soustraction';
var mu = 'multiplication';
var di = 'division';
if (c == adition) {
    ad = a + b;
    document.write('votre valeur est' + ad);
}
if (c == soustraction) {
    so = a - b;
    document.write('la valeur est:' + so);
}
if (c == multiplication) {
    mu = a * b;
    document.write('la valeur est:' + mu);
}
if (c == division) {
    di = a / b;
    document.write('la valeur est:' + di);
}