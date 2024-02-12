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
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g id="surface1">
                    <path d="M 12 2.25 C 6.617188 2.25 2.25 6.617188 2.25 12 C 2.25 17.382812 6.617188 21.75 12 21.75 C 17.382812 21.75 21.75 17.382812 21.75 12 C 21.75 6.617188 17.382812 2.25 12 2.25 Z M 12 3.75 C 16.554688 3.75 20.25 7.445312 20.25 12 C 20.25 16.554688 16.554688 20.25 12 20.25 C 7.445312 20.25 3.75 16.554688 3.75 12 C 3.75 7.445312 7.445312 3.75 12 3.75 Z M 12 3.75 "/>
                    <path d="M 13.5 7.6875 C 13.5 8.621094 12.746094 9.375 11.8125 9.375 C 10.878906 9.375 10.125 8.621094 10.125 7.6875 C 10.125 6.753906 10.878906 6 11.8125 6 C 12.746094 6 13.5 6.753906 13.5 7.6875 Z M 13.5 7.6875 "/>
                    <path d="M 13.601562 16.644531 C 13.589844 17.054688 13.78125 17.167969 14.25 17.21875 L 15 17.230469 L 15 18 L 9.140625 18 L 9.140625 17.230469 L 9.964844 17.21875 C 10.457031 17.203125 10.578125 17.011719 10.613281 16.644531 L 10.613281 12.023438 C 10.617188 11.289062 9.667969 11.40625 9 11.425781 L 9 10.664062 L 13.601562 10.5 "/>
                    </g>
                </svg>
                    Info Box
                </div>
                <div className="components-placeholder__instructions">
                    <span>Add content for Info Box</span>
                </div>
                <RichText
                    style={{marginLeft: '0'}}
                    tagName="p"
                    value={content}
                    onChange={onChangeContent}
                    placeholder={__('Add content here...', 'tu-delft')}
                />


            </div>
            
        </div>
        
    )
}