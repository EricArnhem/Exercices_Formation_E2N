/**
 * Exercice sur les chaines de caractères.
 * Trouvez la façon de faire la plus optimal.
 * Il peut y avoir plusieur façon de faire.
 */
var tailleString = function (texte) {
  var textLength = texte.length;
    return textLength;
}
var remplaceECar = function (texte) {
  var textReplace = texte.replace('e', ' ');
    return textReplace;
}
var concatString = function (texte1, texte2) {
  var text3 = texte1 + texte2;
    return text3;
}
var afficherCar5 = function (texte) {
  var textCar = texte.charAt(4);
    return textCar;
}
var afficher9Car = function (texte) {
  var text9Car = texte.slice(0,9);
    return text9Car;
}
var majusculeString = function (texte) {
  var textUpper = texte.toUpperCase();
    return textUpper;
}
var minusculeString = function (texte) {
  var textLower = texte.toLowerCase();
    return textLower;
}
var SupprEspaceString = function (texte) {
  var textSpace = texte.trim();
    return textSpace;
}
var IsString = function (texte) {
    return typeof texte == 'string';
}
var AfficherExtensionString = function (texte) {
  var textExt = texte.split('.').pop();
    return textExt;
}
var NombreEspaceString = function (texte) {
  var textCount = texte.split(' ').length -1;
    return textCount;
}
var InverseString = function (texte) {
  var textReverse = texte.split('').reverse().join(''); /* la chaîne est transformée en tableau avec split() sur lequel on peut
                                                        appliquer reverse() puis on retransforme en chaîne avec join() */
    return textReverse;
}

/**
 * Exercices sur les nombres et les caluls mathématiques
 */
var calculPuissance = function (x, y) {
  var calculPower = Math.pow(x, y);
    return calculPower;
}
var valeurAbsolue = function (nombre) {
  var valueAbs = Math.abs(nombre);
    return valueAbs;
}
var valeurAbsolueArray = function (array) {
    return array.map(Math.abs);
}
var sufaceCercle = function (rayon) {
  var areaCalculation =(Math.pow(rayon, 2) * Math.PI);
  var areaRound = Math.round(areaCalculation);
    return areaRound;
}
var hypothenuse = function (ab, ac) {
    return Math.hypot(ab, ac);
}
var calculIMC = function (poids, taille) {
  var imc = poids / Math.pow(taille, 2);
  var imc2 = imc.toFixed(2);
  var imcFinal = parseFloat(imc2);
    return imcFinal;
}
