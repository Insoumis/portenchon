/* from utilitaires.js */
/* global afficherMessageErreur */
/* global genererVignettes */

$(document).ready(function() {
    // -----------------------
    // -------- Sites --------
    // -----------------------
    $.ajax({
        method: "GET",
        url: "/ajax/get-vignettes",
        data: {
            categorie: "sites",
            nombre: 3
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

    // -----------------------
    // ------- YouTube -------
    // -----------------------
    $.ajax({
        method: "GET",
        url: "/ajax/get-vignettes",
        data: {
            categorie: "youtube",
            nombre: 3
        },
        dataType: "json",
    })
    .done(function(data) {
        var container = $('.js-youtube');
        container.html('');
        if (data.resultat === 'error') {
            afficherMessageErreur(container, data.message);
        } else {
            genererVignettes(container, data.vignettes);
        }
    });

    // -----------------------
    // ------- Twitter -------
    // -----------------------
    $.ajax({
        method: "GET",
        url: "/ajax/get-vignettes",
        data: {
            categorie: "twitter",
            nombre: 3
        },
        dataType: "json",
    })
    .done(function(data) {
        var container = $('.js-twitter');
        container.html('');
        if (data.resultat === 'error') {
            afficherMessageErreur(container, data.message);
        } else {
            genererVignettes(container, data.vignettes);
        }
    });

    // -----------------------
    // ------ Facebook -------
    // -----------------------
    $.ajax({
        method: "GET",
        url: "/ajax/get-vignettes",
        data: {
            categorie: "facebook",
            nombre: 3
        },
        dataType: "json",
    })
    .done(function(data) {
        var container = $('.js-facebook');
        container.html('');
        if (data.resultat === 'error') {
            afficherMessageErreur(container, data.message);
        } else {
            genererVignettes(container, data.vignettes);
        }
    });

    // -----------------------
    // -- Autres ressources --
    // -----------------------
    $.ajax({
        method: "GET",
        url: "/ajax/get-vignettes",
        data: {
            categorie: "autre",
            nombre: 3
        },
        dataType: "json",
    })
    .done(function(data) {
        var container = $('.js-others');
        container.html('');
        if (data.resultat === 'error') {
            afficherMessageErreur(container, data.message);
        } else {
            genererVignettes(container, data.vignettes);
        }
    });


});