import { MediaUpload, MediaUploadCheck, useBlockProps } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import Preview from '../components/backend/preview';

import ChapterSubtitle from '../components/backend/chapter-subtitle';

const previewImage = window.location.origin + '/app/themes/tu-delft/src/img/gutenberg/preview/image.svg';

export default function Edit( props ) {
    const { attributes, setAttributes } = props;
    const { image, preview } = attributes;

    const blockProps = useBlockProps();

    const onSelectImage = image => setAttributes({ image: image.url });

    if (preview){
        return <Preview
            previewImage={previewImage}
        />
    }

    return (
        <div { ...blockProps }>
            <div className="file-upload-wrapper components-placeholder block-editor-media-placeholder is-large">
                <ChapterSubtitle
                    attributes={attributes}
                    setAttributes={setAttributes}
                />
                <div className="file-upload-label components-placeholder__label">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" focusable="false"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM5 4.5h14c.3 0 .5.2.5.5v8.4l-3-2.9c-.3-.3-.8-.3-1 0L11.9 14 9 12c-.3-.2-.6-.2-.8 0l-3.6 2.6V5c-.1-.3.1-.5.4-.5zm14 15H5c-.3 0-.5-.2-.5-.5v-2.4l4.1-3 3 1.9c.3.2.7.2.9-.1L16 12l3.5 3.4V19c0 .3-.2.5-.5.5z"></path></svg>
                    Image
                </div>
                <div className="components-placeholder__instructions">
                    <span>Pick one from your media library.</span>
                </div>
                <MediaUploadCheck>
                    <MediaUpload
                        onSelect={onSelectImage}
                        allowedTypes={['image/gif', 'image/jpeg', 'image/png', 'image/svg+xml', 'image/webp']}
                        value={image}
                        render={({ open }) => (
                            <>
                                <img 
                                    src={image} 
                                    alt="Preview" 
                                    style={{
                                        maxWidth: '300px',
                                        height: 'auto'
                                    }}
                                    onClick={open}
                                />
                                <Button 
                                    isPrimary 
                                    onClick={open} 
                                >
                                    {__('Select image', 'tu-delft')}
                                </Button>
                            </>
                        )}
                    />
                </MediaUploadCheck>
            </div>
        </div>
        
    );
}