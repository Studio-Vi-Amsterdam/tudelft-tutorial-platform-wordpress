import { MediaUpload, MediaUploadCheck, RichText, useBlockProps } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import Preview from '../components/backend/preview';

import ChapterSubtitle from '../components/backend/chapter-subtitle';

export default function Edit( props ) {

    const { attributes, setAttributes } = props;
    const { video, content, preview, placeholderImage } = attributes;

    const onSelectVideo = video => setAttributes({ video: video.url });
    
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
                    Video-Text Block
                </div>
                <div className="components-placeholder__instructions">
                    <span>Pick an Video and add content</span>
                </div>
                <div style={{display: 'flex', flexDirection: 'row', width: '100%'}}>
                    <div style={{ flex: '1 0 50%', marginRight: '10px', width: '40%' }}>
                        {
                            // If there is a video, display it
                            video && (
                                <video controls style={{ width: '100%', height: 'auto', maxHeight: '500px', objectFit: 'contain' }}>
                                    <source src={video} type="video/mp4" />
                                </video>
                            )
                        }
                        <MediaUploadCheck>
                            <MediaUpload
                                onSelect={onSelectVideo}
                                allowedTypes={['video/mp4', 'video/mpeg', 'video/webm']}
                                value={video}
                                render={({ open }) => (
                                    <div>
                                        {
                                            // If there is no video, display the placeholder image and make it clickable to open the media uploader
                                            !video && (
                                                <img 
                                                    src={placeholderImage}
                                                    onClick={open}
                                                    alt="Placeholder" 
                                                    style={{ width: '100%', height: 'auto', maxHeight: '500px', objectFit: 'contain' }}
                                                />
                                            )
                                        }
                                        <Button isPrimary onClick={open} style={{ width: '100%', justifyContent: 'center' }}>
                                            {__('Upload Video', 'tu-delft')}
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