import { useBlockProps, RichText } from '@wordpress/block-editor';

import ChapterSubtitle from '../components/frontend/chapter-subtitle';

export default function Save( props ) {

    const { attributes } = props;
    const { content, showChapterSubtitle, chapterSubtitle } = attributes;
    const blockProps = useBlockProps.save();
    
    return (
        <>
            <ChapterSubtitle
                showChapterSubtitle={showChapterSubtitle}
                subtitle={chapterSubtitle}
            />
            <div className="info-box-block">
                <div className="exclamation-mark">
                    <img src="/app/themes/tu-delft/src/img/info.png" alt="Info" style={{ width: '40px', height: '40px' }} />
                </div>
                <div>
                    <RichText.Content 
                        { ...blockProps } 
                        tagName="p" 
                        value={ content } 
                    />
                </div>
            </div>
        </>
    );
}