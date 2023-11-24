module.exports = (context) => ({
  map: context.options.map,
  plugins: {
    "postcss-import": {},
    tailwindcss: {},
    autoprefixer: {},
    cssnano: {
      preset: ["default", { discardComments: { removeAll: true } }],
    },
  },
});
