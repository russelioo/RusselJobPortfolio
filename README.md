# John Russel N. Soreda — Portfolio

A personal portfolio website for **John Russel N. Soreda** — IT Professional, Project Manager, Web Developer, Social Media Manager, and Digital Communications Specialist.

---

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | [Laravel 13](https://laravel.com) (PHP 8.3) |
| Frontend SPA | [Inertia.js v3](https://inertiajs.com) + [Vue 3](https://vuejs.org) |
| Styling | [Tailwind CSS v4](https://tailwindcss.com) |
| Bundler | [Vite 8](https://vite.dev) |
| Database | SQLite (zero-config, local file) |

---

## Prerequisites

- PHP 8.3+
- Composer 2+
- Node.js 20+ with [pnpm](https://pnpm.io)

---

## Installation

```bash
# 1. Clone the repository
git clone https://github.com/russelioo/RusselJobPortfolio.git
cd RusselJobPortfolio

# 2. Install PHP dependencies
composer install

# 3. Copy the environment file and generate an app key
cp .env.example .env
php artisan key:generate

# 4. Create the SQLite database and run migrations
touch database/database.sqlite
php artisan migrate

# 5. Install Node.js dependencies
pnpm install

# 6. Build frontend assets
pnpm run build
```

---

## Environment Variables

Copy `.env.example` to `.env` and set the following variables:

| Variable | Description | Default |
|---|---|---|
| `APP_NAME` | Application name | `Laravel` |
| `APP_ENV` | Environment (`local`, `production`) | `local` |
| `APP_KEY` | Application encryption key (generate with `php artisan key:generate`) | — |
| `APP_DEBUG` | Show debug info (`true` in dev, `false` in prod) | `true` |
| `APP_URL` | Full base URL of the app | `http://localhost:8000` |
| `DB_CONNECTION` | Database driver | `sqlite` |
| `SESSION_DRIVER` | Session storage (`database`, `file`, `cookie`) | `database` |
| `CACHE_STORE` | Cache backend | `database` |
| `MAIL_MAILER` | Mail driver (set to `smtp` in production) | `log` |
| `MAIL_FROM_ADDRESS` | Default from address for outgoing mail | `hello@example.com` |

> **Note:** Never commit your `.env` file. It is excluded from version control by `.gitignore`.

---

## Development

```bash
# Start the full development stack (PHP server + Vite HMR)
composer run dev

# Or run them separately:
php artisan serve       # PHP dev server at http://localhost:8000
pnpm run dev            # Vite HMR dev server
```

---

## Production Build

```bash
# Build and optimise frontend assets
pnpm run build

# Clear and cache Laravel config/routes for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## Running Tests

```bash
composer run test
# or
php artisan test
```

---

## Deployment

This application requires a **PHP server** and cannot be deployed to static hosting (GitHub Pages, Netlify, etc.).

### Recommended Platforms

| Platform | Notes |
|---|---|
| [Laravel Cloud](https://cloud.laravel.com) | Official Laravel hosting — zero-config, scales automatically |
| [Railway](https://railway.app) | Docker-based, generous free tier, GitHub integration |
| [Render](https://render.com) | PHP-capable, free tier available |
| [DigitalOcean App Platform](https://www.digitalocean.com/products/app-platform) | Managed PHP runtime |
| VPS + [Laravel Forge](https://forge.laravel.com) | Full control, starting ~\$5/mo for a Droplet |

### Production Checklist

- Set `APP_ENV=production` and `APP_DEBUG=false`
- Set `APP_URL` to your live domain
- Run `php artisan key:generate` if `APP_KEY` is empty
- Run `php artisan migrate --force`
- Run `pnpm run build`
- Run `php artisan config:cache && php artisan route:cache`
- Set up a queue worker if using queued jobs: `php artisan queue:work`

---

## Project Structure

```
resources/
├── js/
│   ├── Pages/           # Inertia page components (Vue)
│   ├── Components/      # Reusable Vue components
│   ├── Layouts/         # Page layout wrappers
│   └── app.js           # Frontend entry point
├── css/
│   └── app.css          # Tailwind CSS entry point
└── views/
    └── app.blade.php    # Blade HTML shell (Inertia entry point)

routes/
└── web.php              # Web routes (single Home route → Inertia)

app/
└── ...                  # Laravel backend (controllers, models, etc.)
```

---

## License

MIT
