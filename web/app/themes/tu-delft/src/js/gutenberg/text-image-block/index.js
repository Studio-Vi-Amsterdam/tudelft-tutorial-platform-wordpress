import edit from './edit';
import save from './save';

const placeholderImageUrl = '/app/themes/tu-delft/src/img/img-placeholder.svg';

wp.blocks.registerBlockType('tu-delft/text-image', {
    title: 'Text-Image',
    icon: 'align-pull-right',
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
