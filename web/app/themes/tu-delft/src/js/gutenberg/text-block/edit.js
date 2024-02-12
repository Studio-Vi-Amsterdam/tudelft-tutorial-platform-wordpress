import { RichText, useBlockProps } from '@wordpress/block-editor'; 
import { __ } from '@wordpress/i18n';
import Preview from '../components/backend/preview';

import ChapterSubtitle from '../components/backend/chapter-subtitle';

export default function Edit( props ) {
    const { attributes, setAttributes } = props;
    const { content, preview } = attributes;

    const blockProps = useBlockProps();

    const onChangeContent = newContent => setAttributes({ content: newContent });

    if (preview){
        return <Preview
            previewImage={previewImage}
        />
    }

    return (
        <div { ...blockProps }>
            <div className="split-block components-placeholder is-large">
                <ChapterSubtitle
                    attributes={attributes}
                    setAttributes={setAttributes}
                />
                <div className="file-upload-label components-placeholder__label">
                    Text Block
                </div>
                <div className="components-placeholder__instructions">
                    <span>Add content for Text Block</span>
                </div>
                <RichText
                    tagName="p"
                    value={content}
                    onChange={onChangeContent}
                    placeholder={__('Add content here...', 'tu-delft')}
                />
            </div>
        </div>
    )
}