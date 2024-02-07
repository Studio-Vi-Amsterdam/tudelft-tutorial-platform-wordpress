import edit from './edit';
import save from './save';

const placeholderImageUrl = '/app/themes/tu-delft/src/img/img-placeholder.svg';

wp.blocks.registerBlockType('tu-delft/image-text', {
    title: 'Image-Text',
    icon: 'align-pull-left',
    category: 'tu-delft-blocks',
    keywords: ['image', 'text'],
    attributes: {
        image: {
            type: 'string',
            default: placeholderImageUrl
        },
        content: {
            type: 'string',
            default: '',
        },
    }, 
    edit,
    save
});
