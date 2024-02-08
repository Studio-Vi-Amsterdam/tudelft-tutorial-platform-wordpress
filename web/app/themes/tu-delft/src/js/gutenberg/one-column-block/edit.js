import AddElement from '../components/add-element';

const { MediaUpload, MediaUploadCheck, RichText, useBlockProps } = wp.blockEditor;
const { __ } = wp.i18n;



export default function( props ) {
    const { attributes, setAttributes } = props;
    const { image, content } = attributes;

    const onSelectImages = image => setAttributes({ image: image.url });
    
    const onChangeContent = newContent => setAttributes({ content: newContent });

    const blockProps = useBlockProps();

    return (
        <div style={{ display: 'flex' }}>
            <AddElement/>
        </div>
    );
}