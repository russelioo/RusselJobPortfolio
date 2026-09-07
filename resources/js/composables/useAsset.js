/**
 * Returns a URL correctly prefixed with the Vite base path.
 * Use this for any asset path that starts with "/" (images, files, etc.)
 * so that the site works on both localhost and GitHub Pages sub-paths.
 *
 * @param {string} path - Absolute-style path, e.g. "/images/profile.jpg"
 * @returns {string} Full URL with base prepended
 */
export function useAsset(path) {
    if (!path) return '';
    if (path.startsWith('http://') || path.startsWith('https://') || path.startsWith('data:')) {
        return path;
    }
    const base = (import.meta.env.BASE_URL || '/').replace(/\/$/, '');
    if (base && path.startsWith(base + '/')) {
        return path;
    }
    const cleanPath = path.startsWith('/') ? path : '/' + path;
    return `${base}${cleanPath}`;
}
