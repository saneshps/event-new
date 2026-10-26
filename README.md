# BS Events LLC website and CMS

This Laravel application converts the existing event website and requires PHP 8.3.36, Composer, and MySQL/MariaDB. Composer dependency resolution is pinned to PHP 8.3.36 so future updates do not select packages that require PHP 8.4; this setting does not switch the PHP executable used by Laragon or the terminal.

## Local setup (Laragon)

1. Use PHP 8.3.36 in Laragon and enable `fileinfo`, `mbstring`, `openssl`, `pdo_mysql`, and `zip`.
2. Create the `event_cms` database in phpMyAdmin.
3. Copy `.env.example` to `.env` if needed. Set the database credentials, `ADMIN_USERNAME`, `ADMIN_EMAIL`, and an `ADMIN_PASSWORD` (at least 12 characters).
4. Install dependencies and initialize the database:

   ```sh
   composer install
   php artisan key:generate
   php artisan migrate --seed
   php artisan storage:link
   ```

5. Serve Laravel's `public` directory as the web root. Alternatively, run `php artisan serve` and visit `http://127.0.0.1:8000`.
6. Sign in at `/admin/login` using the username (or email) and password configured in `.env`.

The seeders add the first CMS user and the existing service cards and gallery images. Career openings start empty and can be created in the CMS.

## CMS

The authenticated admin area is available at `/admin`. It supports creating, editing, hiding, reordering, and deleting services, gallery items, and career openings. Uploaded images are saved to Laravel's public storage disk. Contact form submissions are saved in `contact_messages`.

## HostGator deployment

1. Select PHP 8.3.36 in cPanel and enable the required PHP extensions listed above.
2. Create a MySQL database and database user in cPanel, grant that user access to the database, and put the exact HostGator database name, username, and password in `.env`. Set `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL` to the live HTTPS domain, and unique admin credentials.
3. Upload the Laravel project outside `public_html` when possible. Set the site document root to the project's `public` directory. If the hosting plan requires `public_html`, place only the contents of Laravel's `public` directory there and update `public_html/index.php` to reference the project `vendor/autoload.php` and `bootstrap/app.php`.
4. From the project directory using cPanel Terminal, run `composer install --no-dev --optimize-autoloader`, `php artisan migrate --seed`, and `php artisan storage:link`. Run `php artisan key:generate` only when creating a new production app key; keep the resulting key stable across deployments.
5. Ensure `storage` and `bootstrap/cache` are writable by PHP. If the hosting panel does not allow `php artisan storage:link`, create the equivalent symlink to the project's `storage/app/public` directory.
6. Visit `/admin/login` and sign in with the credentials configured before seeding. Keep `.env` private and outside publicly served directories.

Do not run `migrate:fresh` on production; it deletes database tables and data.
