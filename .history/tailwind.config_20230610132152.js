/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
	  fontFamily: {
        iransans: ['IRANSans'],
      },
	  },
    colors: {
      primary: '#042F2E',
      textMain: '#374151',
      main: '#F3F4F6',
      link: '#2563EB',
      line: '#E5E7EB',
      darkLine: '#CBD5E1',
      success: '#10B981',
      error: '#DC2626',
    },
  },
  plugins: [],
}