/*---------------------------------------------------------------------
    File Name: plugin.js
---------------------------------------------------------------------*/

/* Avoid `console` errors in browsers that lack a console.
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
document.addEventListener("DOMContentLoaded", function() {
    // Sélectionner tous les éléments <a> avec la classe "lien"
    var liens = document.querySelectorAll("a.lien");

    // Parcourir tous les éléments sélectionnés
    liens.forEach(function(lien) {
        // Créer un nouvel élément <span>
        var span = document.createElement("span");
        span.textContent = " (nouveau texte ajouté)";

        // Ajouter le span à la fin de chaque lien
        lien.appendChild(span);
    });
});



