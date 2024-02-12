export default function ChapterSubtitle( props ) {
    const { showChapterSubtitle, subtitle } = props;

    return (
        <>
            { showChapterSubtitle && subtitle && (
                <h2 className="chapter-subtitle">
                    { subtitle }
                </h2>
            ) }
        </>
    );
}