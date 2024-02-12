import ChapterSubtitle from '../components/frontend/chapter-subtitle';

export default function Save(props) {

    const { attributes } = props;
    const { showChapterSubtitle, chapterSubtitle, links } = attributes;
    
    return (
        <>
            <ChapterSubtitle
                showChapterSubtitle={showChapterSubtitle}
                subtitle={chapterSubtitle}
            />
            <div className='content-card-wrapper'>
                {
                    links.map( (link, id) => {
                        if (!link.url) return;
                        return (
                            <a
                                href={link.url} 
                                key={id} 
                                className='content-card'
                            >
                                <span> {link.title} </span>
                            </a>
                        )
                    })
                }
            </div>
        </>
    )
}
