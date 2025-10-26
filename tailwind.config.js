/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: ['./index.html', './src/**/*.{ts,tsx}'],
  theme: {
    extend: {
      colors: {
        brand: {
          DEFAULT: '#0F172A', // slate-900
          accent: '#111827',  // gray-900
          gold: '#C8A96A',
          soft: '#F8FAFC',
        },
      },
      boxShadow: {
        'soft': '0 8px 30px rgba(0,0,0,0.06)',
        'glass': '0 10px 40px rgba(15, 23, 42, 0.08)'
      },
      backdropBlur: {
        xs: '2px'
      }
    },
  },
  plugins: [],
}
