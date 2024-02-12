import {
    Card,
    CardHeader,
    CardBody,
    __experimentalHeading as Heading,
    Button,
    TextControl,
} from '@wordpress/components';

import { __ } from '@wordpress/i18n';
import ChapterSubtitle from '../components/backend/chapter-subtitle';
import Preview from '../components/backend/preview';

import { useBlockProps } from '@wordpress/block-editor';

const previewImage = window.location.origin + '/app/themes/tu-delft/src/img/gutenberg/preview/video.svg';
const plusImg = '/app/themes/tu-delft/src/img/plus.svg';

export default function Edit( props ) {
    const { attributes, setAttributes } = props;
    const { preview, links } = attributes;

    const blockProps = useBlockProps();

    if (preview){
        return <Preview
            previewImage={previewImage}
        />
    }
    
    return (
        <div { ...blockProps }>
            <div className="components-placeholder is-large">
                <ChapterSubtitle
                    attributes={attributes}
                    setAttributes={setAttributes}
                />
                <div style={{ display: 'flex', gap: '50px', flexWrap: 'wrap', justifyContent: 'space-between' }}>
                {
                    links.map( (link, id) => {
                        return (
                            <Card key={id} style={{ width: 'calc(50% - 30px)' }}>
                                <CardHeader>
                                    <Heading>
                                        {link.title ? link.title : __('Link', 'tu-delft') + ' ' + (id + 1)}
                                    </Heading>
                                </CardHeader>
                                <CardBody>
                                    <TextControl
                                        label={__('Title', 'tu-delft')}
                                        value={link.title}
                                        onChange={ newTitle => {
                                            const newLinks = [ ... links ];
                                            newLinks[id].title = newTitle;
                                            setAttributes({ links: newLinks });
                                        }}
                                    />
                                    <TextControl
                                        label={__('URL', 'tu-delft')}
                                        value={link.url}
                                        onChange={ newUrl => {
                                            const newLinks = [ ... links ];
                                            newLinks[id].url = newUrl;
                                            setAttributes({ links: newLinks });
                                        }}
                                    />
                                </CardBody>
                            </Card>
                        )
                    })
                }
                </div>
                <Button 
                    style={{ 
                        width: '170px', 
                        height: '40px',
                        border: '1px solid',
                        marginTop: '20px'
                    }}
                    onClick={() => {
                        const newLinks = [ ... links ];
                        // push 2 blocks of links
                        newLinks.push({ title: '', url: '' });
                        newLinks.push({ title: '', url: '' });

                        setAttributes({ links: newLinks });
                    }}
                >
                    <span style={{ marginRight: '20px' }}>
                        <img src={plusImg} alt="" style={{ width: '24px', height: '24px' }} />
                    </span>
                    <span>
                        {__('Add pair of links', 'tu-delft')}
                    </span>
                </Button>
            </div>
        </div>
    )
}

