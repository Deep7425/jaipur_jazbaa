import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                playfair: ['Playfair Display', 'serif'],
            },
            colors: {
                'luxury-gold': '#D4AF37',
                'luxury-cream': '#F8F6F0',
                'luxury-brown': '#8B4513',
            },
            spacing: {
                '18': '4.5rem',
                '88': '22rem',
            },
            aspectRatio: {
                '3/4': '3 / 4',
                '4/5': '4 / 5',
            },
            animation: {
                'fade-in-up': 'fadeInUp 0.6s ease-out',
                'slide-in-right': 'slideInRight 0.3s ease-out',
            },
            keyframes: {
                fadeInUp: {
                    '0%': {
                        opacity: '0',
                        transform: 'translateY(30px)',
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateY(0)',
                    },
                },
                slideInRight: {
                    '0%': {
                        transform: 'translateX(100%)',
                    },
                    '100%': {
                        transform: 'translateX(0)',
                    },
                },
            },
        },
    },
    plugins: [],
};
