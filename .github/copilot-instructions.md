# Copilot instructions for my-portfolio-site-vue3

This file contains concise, actionable guidance for an AI coding agent to be productive in this repo.

1) Project summary
- Framework: Vue 3 (SFCs) + Vite.
- State: Pinia (setup-style stores) used for app-wide state in `src/stores/app.js`.
- Routing: Vue Router with a single `Home` view that uses a dynamic `:section` param. See `src/router/index.js` (routes redirect `/` → `/manifest`, and `/:section` renders `Home`).

2) Dev / build workflows (explicit commands)
- Install dependencies: `npm install` (root)
- Run dev server (hot reload + Vue devtools): `npm run dev` (runs `vite`)
- Build for production: `npm run build` (runs `vite build`)
- Preview production build: `npm run preview`
- Lint & fix: `npm run lint` (runs `eslint . --fix`)
- Format source files: `npm run format` (runs `prettier --write src/`)

3) Important files & what matters
- `package.json` — scripts and key deps (vue, vue-router, pinia, vite).
- `vite.config.js` — alias `@` → `src`, and `vite-plugin-vue-devtools` is enabled for local development.
- `src/main.js` — app entry, mounts Pinia and the router; global CSS imports live here.
- `src/router/index.js` — runtime routing rules and `scrollBehavior` that scrolls to `#<section>` when route param exists.
 - `src/router/index.js` — runtime routing rules and `scrollBehavior` that scrolls to the element with id equal to the route param (for example #manifest) when the route param exists.
- `src/stores/app.js` — Pinia store. Contains theme logic and localStorage persistence (see `isDark`, `toggleTheme`, `isScrollIndicatorVisible`, `hideScrollIndicator`). Small-change areas often live here.
- `src/App.vue` — top-level layout. Note: audio element with id `sound` (public/audio/antdie.mp3) and top-level components used: `Footer`, `FormOrder`, `LadybugButton`, `Navigation`. The root wrapper adds `.dark` class based on the Pinia store.
- `public/send.php` — server-side form endpoint used by forms in the project.
- `src/assets/css/*` — CSS is organized into `css/blocks/*` with nested folders following a BEM-like pattern; prefer adding styles to these files rather than inlining.

4) Project-specific patterns and conventions
- Single-page sections: the app uses a single `Home.vue` view and switches visible sections via the dynamic route `/:section`. To add a new site section, update `Home.vue` and ensure there's an element with matching `id` so `router` scrollBehavior will target it.
- Local persistence: theme and scroll-indicator flags are stored in `localStorage` by the store (`src/stores/app.js`). Update store logic for global UI state.
- CSS organization: styles are grouped under `src/assets/css/` with subfolders per block (e.g. `navigation`, `manifest-section`, `scroller`). Follow those files when adding or modifying component styles.
- Components: reusable UI parts live in `src/components/`. Many components have paired CSS under `assets/css/blocks` instead of scoped styles—prefer the existing pattern.
- Alias usage: use `@/` to import from `src` (configured in `vite.config.js`). Example: `import Home from '@/views/Home.vue'`.

5) Integration and external resources
- Static assets: `public/` contains `audio/`, `images/`, and `send.php`. These are referenced at runtime by absolute paths (e.g. `/audio/antdie.mp3`).
- Devtools: `vite-plugin-vue-devtools` is present — use the dev server for the best debugging experience.

6) Where to look for common tasks (quick map)
- Change theme behavior: `src/stores/app.js` (watchers + localStorage)
- Add route section: `src/views/Home.vue` + `src/router/index.js` (ensure element id matches route param)
- Add a new visual component: `src/components/` and corresponding CSS under `src/assets/css/blocks/<block>/`
- Form posting: check `public/send.php` and components that render forms (e.g. `src/components/FormOrder.vue`).

7) Safety for automated edits
- Avoid changing `public/send.php` without confirming server expectations (this is server-side code used by forms).
- Do not assume presence of tests — there are none; verify by running the dev server and manual checks after UI changes.

8) Examples to copy when editing
- Toggle theme (store): `useAppStore().toggleTheme()` (see `src/stores/app.js`).
- Route scroll to section: navigation should navigate to `/{section}` where `section` equals the element `id` in `Home.vue`, router will smooth-scroll (see `scrollBehavior` in `src/router/index.js`).

If any of these areas are unclear or you want the file to include stricter coding rules (e.g., commit/PR style, test requirements), tell me which sections to expand and I will iterate.
