import edit from './edit';
import save from './save';

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
    }, 
    edit,
    save
});
