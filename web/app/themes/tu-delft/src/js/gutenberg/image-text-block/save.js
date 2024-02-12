import { useBlockProps, RichText } from '@wordpress/block-editor';

import ChapterSubtitle from '../components/frontend/chapter-subtitle';

export default function Save( props ) {
    const { attributes } = props;
    const { image, content, showChapterSubtitle, chapterSubtitle } = attributes;
    const blockProps = useBlockProps.save();
    return (
        <>
            <ChapterSubtitle
                showChapterSubtitle={showChapterSubtitle}
                subtitle={chapterSubtitle}
            />
            <div style={{ display: 'flex' }}>
                <div style={{ flex: '1 0 50%', marginRight: '10px' }}>
                    <img src={image} alt="Image" style={{ width: '100%', height: 'auto', maxHeight: '500px', objectFit: 'contain' }} />
                </div>
                <div style={{ flex: '1 0 50%' }}>
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