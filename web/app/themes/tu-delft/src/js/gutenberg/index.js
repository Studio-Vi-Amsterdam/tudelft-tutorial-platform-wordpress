// disable default gutenberg blocks beside tu-delft ones
wp.domReady( function() {
    wp.blocks.getBlockTypes().forEach( function( blockType ) {
        if ( blockType.name.indexOf("tu-delft") === -1 ) {
            wp.blocks.unregisterBlockType( blockType.name );
        }
    });
});
