/** @type {import('prettier').Config} */
export default {
  plugins: ['prettier-plugin-blade', 'prettier-plugin-tailwindcss'],
  printWidth: 120,
  singleAttributePerLine: true,
  singleQuote: true,
  tailwindStylesheet: './resources/css/app.css',
};
