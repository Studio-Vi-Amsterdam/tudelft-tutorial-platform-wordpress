const { registerFormatType } = wp.richText
const { RichTextToolbarButton } = wp.editor


// Register RichTextToolbarButton for custom output in Richtext
// @see https://developer.wordpress.org/block-editor/how-to-guides/format-api/

registerFormatType( 'tu-delft/sample-output', {
    title: 'Sample output',
    tagName: 'samp',
    className: null,
    edit: MyCustomButton,
} );