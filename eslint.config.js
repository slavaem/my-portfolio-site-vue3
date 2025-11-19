import { defineConfig, globalIgnores } from 'eslint/config'
import globals from 'globals'
import js from '@eslint/js'
import pluginVue from 'eslint-plugin-vue'
import vueParser from 'vue-eslint-parser'
import skipFormatting from '@vue/eslint-config-prettier/skip-formatting'

export default defineConfig([

  {
    name: 'lint/all-files',
    files: ['src/**/*.{js,vue}'],
  },

  globalIgnores(['**/dist/**', '**/dist-ssr/**', '**/coverage/**']),

  {
    languageOptions: {
      parser: vueParser,
      parserOptions: {
        parser: {
          js: '@babel/eslint-parser',
        },
        ecmaVersion: 'latest',
        sourceType: 'module',
      },
      globals: {
        ...globals.browser,
      },
    },
  },

  js.configs.recommended,

  ...pluginVue.configs['flat/recommended'],

  skipFormatting,
])
