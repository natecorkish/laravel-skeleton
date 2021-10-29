const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './app/**/*.html',
        './app/**/*.vue',
        './app/**/*.jsx',
        './app/**/*.blade',
    ],
    theme: {
        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1140px',
        },
        extend: {
            maxWidth: {
                '8xl': '90rem',
                '9xl': '100rem',
            },
            colors: {
                'primary': 'var(--bg-primary)',
                'secondary': 'var(--bg-secondary)',
                'tertiary': 'var(--bg-tertiary)',
                'ternary': 'var(--bg-ternary)',
                'ternary-hover': 'var(--bg-ternary-hover)',
                'danger': 'var(--bg-danger)',
                'danger-hover': 'var(--bg-danger-hover)',
                indigo: {
                    '900': '#191e38',
                    '800': '#2f365f',
                    '700': '#38406c',
                    '600': '#6574cd',
                    '500': '#7886d7',
                    '400': '#b2b7ff',
                    '300': '#e6e8ff',
                }
            },
            textColor: {
                'primary': 'var(--text-primary)',
                'secondary': 'var(--text-secondary)',
                'tertiary': 'var(--text-tertiary)',
                'ternary': 'var(--text-ternary)',
                'ternary-opposite-primary': 'var(--text-ternary-opposite-primary)',
                'ternary-opposite-secondary': 'var(--text-ternary-opposite-secondary)',
            },
            borderColor: {
                'primary': 'var(--border-primary)',
                'secondary': 'var(--border-secondary)',
                'ternary': 'var(--border-ternary)',
            },
            divideColor: {
                'primary': 'var(--border-primary)',
                'secondary': 'var(--border-secondary)',
            },
            borderRadius: {
                '50p': '50%'
            },
            fontFamily: {
                body: 'Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
                heading: 'Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                serif: 'Georgia, Cambria, "Times New Roman", Times, serif',
                mono: 'Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace',
            },
            // fontFamily: {
            //     sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            // },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            display: ['group-hover', 'group-active'],
        },
    },

    plugins: [
        require('@tailwindcss/typography'),
        require('tailwindcss-interaction-variants'),
    ],
};
