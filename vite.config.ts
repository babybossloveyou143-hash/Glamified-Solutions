import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'

// Change `base` if deploying to GitHub Pages under a subpath: e.g. '/glamified-solutions/'
export default defineConfig({
  plugins: [react()],
  base: '/',
})
