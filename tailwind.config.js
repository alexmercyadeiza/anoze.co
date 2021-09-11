module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Urbanist'],
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require("daisyui"),
        require('@tailwindcss/forms'),
    ],

    daisyui: {
        themes: [
            {
                'mytheme': {
                    'primary': '#1c7bce',
                    'primary-focus': '#19519a',
                    'primary-content': '#ffffff',
                    'secondary': '#4fab66',
                    'secondary-focus': '#1c733a',
                    'secondary-content': '#ffffff',
                    'accent': '#37cdbe',
                    'accent-focus': '#2aa79b',
                    'accent-content': '#ffffff',
                    'neutral': '#3d4451',
                    'neutral-focus': '#2a2e37',
                    'neutral-content': '#ffffff',
                    'base-100': '#ffffff',
                    'base-200': '#000000',
                    'base-300': '#000000',
                    'base-content': '#1f2937',
                    'info': '#2094f3',
                    'success': '#009485',
                    'warning': '#ff9900',
                    'error': '#ff5724',
                    '--rounded-btn': '0rem',
                    '.btn': {
                        //custom style
                        'border-width': '2px'
                    },
                },
            },
        ],
    },
}
