/* from utilitaires.js */
/* global afficherMessageErreur */
/* global genererVignettes */

$(document).ready(function() {
    $.ajax({
        method: "GET",
        url: "/ajax/get-vignettes",
        data: {
            categorie: "sites",
        },
        dataType: "json",
    })
    .done(function(data) {
        var container = $('.js-sites');
        container.html('');
        if (data.resultat === 'error') {
            afficherMessageErreur(container, data.message);
        } else {
            genererVignettes(container, data.vignettes);
        }
    });
});