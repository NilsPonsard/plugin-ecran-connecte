/**
 * Créer le bloc en indiquant son titre, son icone, sa catagorie
 * return de edit permet d'afficher un message lorsqu'on est sur l'éditeur
 */
( function( blocks, element, data  ) {

    var el = element.createElement;

    blocks.registerBlockType( 'tvconnecteeamu/manage-code', {
        title: 'Affiche les codes ADE',
        icon: 'smiley',
        category: 'common',

        edit: function() {
            return "Affiche tous les codes ADE";
        },
        save: function() {
            return "test";
        },
    } );
}(
    window.wp.blocks,
    window.wp.element,
    window.wp.data,
) );