
const { RichText, useBlockProps } = wp.blockEditor;

export default function (props) {
    const { attributes } = props;
    const { image, content } = attributes;
    const blockProps = useBlockProps.save();
    return (
        <div style={{ display: 'flex' }}>
            
        </div>
    );
}