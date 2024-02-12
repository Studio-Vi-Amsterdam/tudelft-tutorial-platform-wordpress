import { useBlockProps, RichText } from '@wordpress/block-editor';

import ChapterSubtitle from '../components/frontend/chapter-subtitle';

export default function Save( props ) {
    const { attributes } = props;
    const { video, content, showChapterSubtitle, chapterSubtitle } = attributes;
    const blockProps = useBlockProps.save();
    return (
        <>
            <ChapterSubtitle
                showChapterSubtitle={showChapterSubtitle}
                subtitle={chapterSubtitle}
            />
            <div className="video-block">
                <video controls style={{ width: '100%', height: 'auto', maxHeight: '500px', objectFit: 'contain' }}>
                    <source src={video} type="video/mp4" />
                </video>
            </div>
        </>
    );
}