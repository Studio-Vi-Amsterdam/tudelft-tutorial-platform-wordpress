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
            <div className="text-block">
                <RichText.Content 
                    { ...blockProps } 
                    tagName="p" 
                    value={ content } 
                />
            </div>
        </>
    );
}