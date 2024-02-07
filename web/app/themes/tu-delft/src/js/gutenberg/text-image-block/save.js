
const { RichText, useBlockProps } = wp.blockEditor;

export default function (props) {
    const { attributes } = props;
    const { image, content } = attributes;
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
               <img src={image} alt="Image" style={{ width: '100%', height: 'auto', maxHeight: '500px', objectFit: 'contain' }} />
            </div>
        </div>
    );
}