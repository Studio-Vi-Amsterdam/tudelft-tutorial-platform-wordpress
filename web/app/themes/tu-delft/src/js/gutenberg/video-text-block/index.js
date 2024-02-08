import edit from './edit';
import save from './save';

const placeholderImageUrl = '/app/themes/tu-delft/src/img/video-placeholder.svg';

wp.blocks.registerBlockType('tu-delft/video-text', {
    title: 'Video-Text',
    icon: 'align-pull-left',
    category: 'tu-delft-blocks',
    keywords: ['video', 'text'],
    attributes: {
        video: {
            type: 'string',
            default: ''
        },
        content: {
            type: 'string',
            default: '',
        },
        placeholderImage: {
            type: 'string',
            default: placeholderImageUrl
        }
    }, 
    edit,
    save
});
