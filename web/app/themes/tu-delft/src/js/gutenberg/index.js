const { registerFormatType } = wp.richText
const { RichTextToolbarButton } = wp.editor

// disable default gutenberg blocks beside tu-delft ones
wp.domReady( function() {
    wp.blocks.getBlockTypes().forEach( function( blockType ) {
        if ( blockType.name.indexOf("tu-delft") === -1 ) {
            wp.blocks.unregisterBlockType( blockType.name );
        }
    });
});

// Register RichTextToolbarButton for custom output in Richtext
// @see https://developer.wordpress.org/block-editor/how-to-guides/format-api/

// registerFormatType( 'tu-delft/sample-output', {
//     title: 'Sample output',
//     tagName: 'samp',
//     className: null,
//     // edit: MyCustomButton,
// } );