# Glamified Solutions

Production-ready, multi-page website built with React + TypeScript + Vite, Tailwind CSS, Framer Motion, shadcn-style UI primitives, lucide-react icons, and react-router.

## Quick Start

```bash
npm i
npm run dev
# build
npm run build
npm run preview
```

### Environment

Create a `.env` file if you want live contact form submissions:

```
VITE_FORMSPREE_ID=YOUR_FORMSPREE_FORM_ID
```

### Deploy to GitHub Pages

1. Set `base` in `vite.config.ts` to your repo subpath (e.g., `/glamified-solutions/`).
2. `npm run deploy`

### Accessibility & Performance

- Keyboard accessible, focus-visible rings, semantic markup.
- Images are lazy-loaded, routes are code-split, and critical paths are optimized.
- Respects `prefers-reduced-motion`.

### SEO

- Per-page `<title>`/description.
- OpenGraph/Twitter meta.
- `npm run generate:sitemap` creates `public/sitemap.xml`.
- `public/robots.txt` included.
- JSON-LD Organization and Breadcrumbs injected via `react-helmet-async`.

### Credits

Royalty-free imagery from Unsplash with on-page attributions via source links.
