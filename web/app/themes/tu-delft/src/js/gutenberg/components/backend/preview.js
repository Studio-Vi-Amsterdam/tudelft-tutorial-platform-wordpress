export default function Preview( props ) {
    const { previewImage } = props;

    return (
        <div className="gutslider-preview">
            <img src={previewImage} alt="Preview" />
        </div>
    );
}