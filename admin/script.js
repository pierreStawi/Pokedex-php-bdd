function triTableau (fTriTableau) {
var tabResult = document.getElementById ("tableauPokemons");
var classement = "asc";
var ligne = tabResult.rows ;
var typeClassement = true ;

//console.log(ligne);
while (typeClassement = true){
    typeClassement = false ;
    for (var i = 1 ; i<ligne.lenght-1;i=i+1){
        var x = ligne[i].getElementByTagName("td")[fTriTableau];
        var z = ligne[i+1].getElementByTagName("td")[fTriTableau];

        console.log(x);
        console.log(z);

        if ((classement==="asc")||(classement==="desc")){
            ligne[i].parentNode.insertBefore(ligne[i+1],ligne[i]);
            typeClassement=true;
            break;
        }
    }
    if (typeClassement=true){
        classement=(classement==="asc")? "desc":"asc";
    }
}
// console.log(tabResult);
// var fTriTableau = triTableau.sort();
};
// console.log("bonjour");
