import ChapterSubtitle from '../components/frontend/chapter-subtitle';

export default function Save(props) {

    const { attributes } = props;
    const { showChapterSubtitle, chapterSubtitle, image } = attributes;

    return (
        <>
            <ChapterSubtitle
                showChapterSubtitle={showChapterSubtitle}
                subtitle={chapterSubtitle}
            />

            <div class="image-block">
                <img src={image} alt="" />
            </div>            
        </>
    )
}