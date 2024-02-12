import ChapterSubtitle from '../components/frontend/chapter-subtitle';

export default function Save(props) {

    const { attributes } = props;
    const { showChapterSubtitle, chapterSubtitle, file } = attributes;

    return (
        <>
            <ChapterSubtitle
                showChapterSubtitle={showChapterSubtitle}
                subtitle={chapterSubtitle}
            />

            <a href={file.url} className='download-block' download>
                <div className='download-icon'>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 3L12 19" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18 13L12 19L6 13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4 23H20" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="download-info">
                    <div class="text-wrapper">
                        <span>Download {file.title}</span>
                        <span class="info">{file.mime}, {file.filesizeHumanReadable}</span>
                    </div>
                </div>
            </a>            
        </>
    )
}