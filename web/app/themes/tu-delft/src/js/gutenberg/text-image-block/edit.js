import AddElement from "../components/add-element";

const { MediaUpload, MediaUploadCheck, RichText, useBlockProps, RichTextToolbarButton } = wp.blockEditor;
const { Button } = wp.components;
const { __ } = wp.i18n;

export default function( props ) {
    const { attributes, setAttributes } = props;
    const { image, content } = attributes;

    const onSelectImages = image => setAttributes({ image: image.url });
    
    const onChangeContent = newContent => setAttributes({ content: newContent });

    const blockProps = useBlockProps();

    return (
        <div style={{ display: 'flex' }}>
            <div style={{ flex: '1 0 50%' }}>
                <RichTextToolbarButton
                    icon={ 'editor-code' }
                    title={ 'My formatting button' }
                    onClick={ () => console.log( 'Formatting button clicked' )}
                    isActive={ true }
				/>
                <RichText
                    { ...blockProps }
                    tagName="p"
                    value={content}
                    onChange={onChangeContent}
                    placeholder={__('Richtext Area', 'tu-delft')}
                />
                <AddElement/>
            </div>
            <div style={{ flex: '1 0 50%', marginRight: '10px', width: '100%' }}>
                <MediaUploadCheck>
                    <MediaUpload
                        onSelect={onSelectImages}
                        type="image"
                        value={image}
                        render={({ open }) => (
                            <div>
                                <img 
                                    src={image} 
                                    alt="Text-Image Block Image"
                                    onClick={open}
                                    style={{
                                        width: '100%', 
                                        height: 'auto', 
                                        maxHeight: '500px', 
                                        objectFit: 'contain'
                                    }} 
                                />
                                <Button isPrimary onClick={open} style={{ width: '100%', justifyContent: 'center' }}>
                                    {__('Upload Image', 'tu-delft')}
                                </Button>
                            </div>
                        )}
                    />
                </MediaUploadCheck>
            </div>
        </div>
    );
}