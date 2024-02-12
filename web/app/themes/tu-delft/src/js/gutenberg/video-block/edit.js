import { MediaUpload, MediaUploadCheck, useBlockProps } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import Preview from '../components/backend/preview';

import ChapterSubtitle from '../components/backend/chapter-subtitle';

const previewImage = window.location.origin + '/app/themes/tu-delft/src/img/gutenberg/preview/image.svg';

export default function Edit( props ) {
    const { attributes, setAttributes } = props;
    const { video, preview, placeholderImage } = attributes;

    const blockProps = useBlockProps();

    const onSelectVideo = video => setAttributes({ video: video.url });

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
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" focusable="false"><path d="M18.7 3H5.3C4 3 3 4 3 5.3v13.4C3 20 4 21 5.3 21h13.4c1.3 0 2.3-1 2.3-2.3V5.3C21 4 20 3 18.7 3zm.8 15.7c0 .4-.4.8-.8.8H5.3c-.4 0-.8-.4-.8-.8V5.3c0-.4.4-.8.8-.8h13.4c.4 0 .8.4.8.8v13.4zM10 15l5-3-5-3v6z"></path></svg>
                    Video
                </div>
                <div className="components-placeholder__instructions">
                    <span>Pick one from your media library.</span>
                </div>
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
        </div>
        
    );
}