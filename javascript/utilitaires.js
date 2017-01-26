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