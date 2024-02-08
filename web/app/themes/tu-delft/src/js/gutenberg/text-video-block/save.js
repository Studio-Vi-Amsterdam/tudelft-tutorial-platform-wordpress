
const { RichText, useBlockProps } = wp.blockEditor;

export default function (props) {
    const { attributes } = props;
    const { video, content } = attributes;
    const blockProps = useBlockProps.save();
    return (
        <div style={{ display: 'flex' }}>
            <div style={{ flex: '1 0 50%' }}>
                <RichText.Content 
                    { ...blockProps } 
                    tagName="p" 
                    value={ content } 
                />
            </div>
            <div style={{ flex: '1 0 50%', marginRight: '10px' }}>
               <video controls style={{ width: '100%', height: 'auto', maxHeight: '500px', objectFit: 'contain' }}>
                    <source src={video} type="video/mp4" />
                </video>
            </div>
        </div>
    );
}