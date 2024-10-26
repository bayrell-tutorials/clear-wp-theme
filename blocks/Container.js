wp.blocks.registerBlockType(
    'main/container',
    {
        title: 'Container',
        category: 'text',
        attributes:
        {
            text:
            {
                type: 'string',
                default: 'example',
            },
        },
    }
);