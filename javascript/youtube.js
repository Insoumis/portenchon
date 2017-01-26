/* from utilitaires.js */
/* global afficherMessageErreur */
/* global genererVignettes */

$(document).ready(function() {
    // -----------------------
    // ------- YouTube -------
    // -----------------------
    $.ajax({
        method: "GET",
        url: "/ajax/get-vignettes",
        data: {
            categorie: "youtube",
        },
        dataType: "json",
    })
    .done(function(data) {
        console.debug(data);
        var container = $('.js-youtube');
        container.html('');
        if (data.resultat === 'error') {
            afficherMessageErreur(container, data.message);
        } else {
            genererVignettes(container, data.vignettes);
        }
    });
});