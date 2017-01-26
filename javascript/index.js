$(document).ready(function() {
     
    function afficherMessageErreur(container, message) {
        container.removeClass('list');
        container.addClass('error');
        var messageErreur = $('<span/>');
        messageErreur.addClass('message-erreur');
        messageErreur.html('Erreur : ' + message)
        container.append(messageErreur);
    }

    function genererVignettes(container, vignettes) {
        var vignette = '';
        var liste = $('<ul/>');
        $(vignettes).each(function(index, donneesVignette) {
            vignette = $('.js-modele-vignette').clone();
            vignette.removeClass('js-modele-vignette');
            vignette.removeClass('hidden');

            vignette.addClass(donneesVignette.classe);
            vignette.find('a').attr('href', donneesVignette.lien);
            vignette.find('a').attr('title', donneesVignette.titre);
            vignette.find('img').attr('src', donneesVignette.urlImage);
            vignette.find('img').attr('alt', donneesVignette.titre);
            vignette.find('h3').html(donneesVignette.titre);
            vignette.find('p').html(donneesVignette.description);

            liste.append(vignette);
        });
        container.append(liste);
    }
     
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
        console.debug(data);
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