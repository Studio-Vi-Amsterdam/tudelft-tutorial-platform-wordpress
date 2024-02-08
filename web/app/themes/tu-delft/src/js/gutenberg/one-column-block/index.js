import edit from './edit';
import save from './save';

wp.blocks.registerBlockType('tu-delft/one-column', {
    title: 'One Column',
    icon: 'menu',
    category: 'tu-delft-blocks',
    keywords: ['column'],
    attributes: {},
    edit,
    save
});
