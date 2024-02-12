import { TextControl } from '@wordpress/components';
import { ToggleControl } from '@wordpress/components';

export default function ChapterSubtitle( props ) {
    const { attributes, setAttributes } = props;
    const { showChapterSubtitle, chapterSubtitle } = attributes;

    const onChangeSubtitleVisibility = newSubtitleVisibility => setAttributes({ showChapterSubtitle: newSubtitleVisibility });
    const onChangeSubtitle = newSubtitle => setAttributes({ chapterSubtitle: newSubtitle });

    return (
        <>
            <ToggleControl
                label="Section has subtitle?"
                help={
                    showChapterSubtitle
                        ? 'Has subtitle.'
                        : 'No subtitle.'
                }
                checked={ showChapterSubtitle }
                onChange={ (newValue) => {
                    onChangeSubtitleVisibility( newValue );
                } }
            />
            { showChapterSubtitle && (
                <TextControl    
                    label="Subtitle"
                    value={ chapterSubtitle }
                    onChange={ onChangeSubtitle }
                    style={{
                        maxWidth: '600px',
                        display: 'block',
                    }}
                />
            ) }
        </>
    );
}