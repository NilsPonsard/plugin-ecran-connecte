/**
 * Créer le bloc en indiquant son titre, son icone, sa catagorie
 * return de edit permet d'afficher un message lorsqu'on est sur l'éditeur
 */
( function( blocks, element, data  ) {

    var el = element.createElement;

    blocks.registerBlockType( 'tvconnecteeamu/add-code', {
        title: 'Ajouter des codes ADE',
        icon: 'smiley',
        category: 'common',

        edit: function() {
            return "Ajoute des code ADE via un formulaire";
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