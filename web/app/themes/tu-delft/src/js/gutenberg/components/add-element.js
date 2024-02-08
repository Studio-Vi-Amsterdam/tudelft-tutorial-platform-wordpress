const { Button } = wp.components;
const { __ } = wp.i18n;

const plusImg = '/app/themes/tu-delft/src/img/plus.svg';

export default function AddElement() {
    return (
        <Button 
            style={{ 
                width: '170px', 
                height: '40px',
                border: '1px solid'
            }}
        >
            <span style={{ marginRight: '20px' }}>
                <img src={plusImg} alt="" style={{ width: '24px', height: '24px' }} />
            </span>
            <span>
                {__('Add element', 'tu-delft')}
            </span>
        </Button>
    );
}