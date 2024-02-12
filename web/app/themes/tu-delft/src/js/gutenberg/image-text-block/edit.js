import { MediaUpload, MediaUploadCheck, RichText, useBlockProps } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import Preview from '../components/backend/preview';

import ChapterSubtitle from '../components/backend/chapter-subtitle';

export default function Edit( props ) {

    const { attributes, setAttributes } = props;
    const { image, content, preview } = attributes;

    const onSelectImage = image => setAttributes({ image: image.url });
    
    const onChangeContent = newContent => setAttributes({ content: newContent });

    const blockProps = useBlockProps();

    if (preview){
        return <Preview
            previewImage={previewImage}
        />
    }

    return (
        <div { ...blockProps }>
            <div className="split-block components-placeholder block-editor-media-placeholder is-large">
                <ChapterSubtitle
                    attributes={attributes}
                    setAttributes={setAttributes}
                />
                <div className="file-upload-label components-placeholder__label">
                    Image-Text Block
                </div>
                <div className="components-placeholder__instructions">
                    <span>Pick an image and add content</span>
                </div>
                <div style={{display: 'flex', flexDirection: 'row', width: '100%'}}>
                    <div style={{ flex: '1 0 50%', marginRight: '10px', width: '40%' }}>
                        <MediaUploadCheck>
                            <MediaUpload
                                onSelect={onSelectImage}
                                allowedTypes={['image/gif', 'image/jpeg', 'image/png', 'image/svg+xml', 'image/webp']}
                                value={image}
                                render={({ open }) => (
                                    <div style={{display: 'flex', flexDirection: 'column'}}>
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
                                            style={{width: 'min-content'}}
                                        >
                                            {__('Select image', 'tu-delft')}
                                        </Button>
                                    </div>
                                )}
                            />
                        </MediaUploadCheck>
                    </div>
                    <div style={{ flex: '1 0 50%' }}>
                        <RichText
                            tagName="p"
                            value={content}
                            onChange={onChangeContent}
                            placeholder={__('Richtext Area', 'tu-delft')}
                        />
                    </div>
                </div>
            </div>
        </div>
    );
}