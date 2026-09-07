/**
 * Returns a URL correctly prefixed with the Vite base path.
 * Use this for any asset path that starts with "/" (images, files, etc.)
 * so that the site works on both localhost and GitHub Pages sub-paths.
 *
 * @param {string} path - Absolute-style path, e.g. "/images/profile.jpg"
 * @returns {string} Full URL with base prepended
 */
export function useAsset(path) {
    // import.meta.env.BASE_URL is '/' in dev and '/RusselJobPortfolio/' on GitHub Pages
    const base = import.meta.env.BASE_URL.replace(/\/$/, '');
    return `${base}${path}`;
}
