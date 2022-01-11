module.exports = {
  content: ['./src/Components/**/*.blade.php',],
  experimental: {
    optimizeUniversalDefaults: true,
  },
  theme: {
    extend: {},
  },
  plugins: [],
  corePlugins: {
    preflight: false,
  }
}
