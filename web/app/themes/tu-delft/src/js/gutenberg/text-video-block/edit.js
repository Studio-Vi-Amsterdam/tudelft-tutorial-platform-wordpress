import AddElement from "../components/add-element";

const { MediaUpload, MediaUploadCheck, RichText, useBlockProps } = wp.blockEditor;
const { Button } = wp.components;
const { __ } = wp.i18n;

export default function( props ) {
    const { attributes, setAttributes } = props;
    const { video, content, placeholderImage } = attributes;

    const onSelectVideo = video => setAttributes({ video: video.url });
    
    const onChangeContent = newContent => setAttributes({ content: newContent });

    const blockProps = useBlockProps();
    

    return (
        <div style={{ display: 'flex' }}>
            <div style={{ flex: '1 0 50%' }}>
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
                        type="video"
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