import { MediaUpload, MediaUploadCheck, useBlockProps } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import Preview from '../components/backend/preview';

import ChapterSubtitle from '../components/backend/chapter-subtitle';

const previewImage = window.location.origin + '/app/themes/tu-delft/src/img/gutenberg/preview/download.svg';

const ALLOWED_TYPES = [
    'application/zip',
    'application/x-rar-compressed',
    'application/x-tar',
    'application/x-7z-compressed',
    'application/x-gzip',
    'application/x-bzip2',
    'application/pdf',
    'application/msword',
    'application/vnd.ms-excel',
    'application/vnd.ms-powerpoint',
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    'application/vnd.openxmlformats-officedocument.presentationml.presentation',
    'application/vnd.oasis.opendocument.text',
    'application/vnd.oasis.opendocument.spreadsheet',
    'application/vnd.oasis.opendocument.presentation',
];

export default function Edit( props ) {
    const { attributes, setAttributes } = props;
    const { preview, file } = attributes;

    const onSelectFile = file => setAttributes({ file });

    const blockProps = useBlockProps();

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
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" focusable="false"><path d="M19 6.2h-5.9l-.6-1.1c-.3-.7-1-1.1-1.8-1.1H5c-1.1 0-2 .9-2 2v11.8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8.2c0-1.1-.9-2-2-2zm.5 11.6c0 .3-.2.5-.5.5H5c-.3 0-.5-.2-.5-.5V6c0-.3.2-.5.5-.5h5.8c.2 0 .4.1.4.3l1 2H19c.3 0 .5.2.5.5v9.5z"></path></svg>
                    File
                </div>
                <div className="components-placeholder__instructions">
                    {
                        !file.id && (
                            <span>Pick one from your media library.</span>
                        )
                    }
                    {
                        file.id && (
                            <>
                                <span>File Title: {file.title}</span>
                                <br/>
                                <span>File Type: {file.mime}</span>
                            </>
                        )
                    }
                </div>
                <MediaUploadCheck>
                    <MediaUpload
                        onSelect={onSelectFile}
                        // allowedTypes={ALLOWED_TYPES}
                        value={file}
                        render={({ open }) => (
                            <Button 
                                isPrimary 
                                onClick={open} 
                            >
                                {__('Select file', 'tu-delft')}
                            </Button>
                        )}
                    />
                </MediaUploadCheck>
            </div>
        </div>
    );
}