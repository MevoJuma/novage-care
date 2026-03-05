# Novage Care

## Deployment on shared hosting (fixing HTTP 500 / storage views error)

If you see an error like:

```
file_put_contents(.../storage/framework/views/xxxxx.php): Failed to open stream: No such file or directory
```

or the path in the error is your **local machine path** (e.g. `/Users/ayo/...`) instead of the server path, do the following **on the server** (via SSH or your host’s file manager/terminal).

### 1. Remove cached config (fixes wrong path)

Laravel may be using a config cache from your local machine. Clear it on the server:

```bash
cd /path/to/your/site   # your real server path, e.g. /home/username/public_html
php artisan config:clear
php artisan view:clear
php artisan cache:clear
```

If you can’t run Artisan, delete these files manually (if they exist):

- `bootstrap/cache/config.php`
- `bootstrap/cache/routes-v7.php` (or similar)
- `bootstrap/cache/services.php`

Then reload the site.

### 2. Ensure storage directories exist and are writable

Create the framework subdirs if missing and make them writable by the web server:

```bash
mkdir -p storage/framework/views
mkdir -p storage/framework/sessions
mkdir -p storage/framework/cache/data
mkdir -p storage/logs
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

On some hosts the web server user is different; if 775 isn’t enough, try:

```bash
chmod -R 777 storage
chmod -R 777 bootstrap/cache
```

Use 777 only if needed and only on shared hosting where you can’t set the owner.

### 3. After deploying, never use cached config from your machine

- Do **not** upload `bootstrap/cache/config.php` (or other cache files) from your computer to the server.
- If you run `php artisan config:cache` or `php artisan route:cache`, run them **on the server** after deploy, not locally.

### Quick checklist on the server

1. `php artisan config:clear` (and view:clear, cache:clear).
2. Remove `bootstrap/cache/config.php` if it exists.
3. Create `storage/framework/views` (and siblings above) if missing.
4. `chmod -R 775 storage bootstrap/cache` (or 777 if required by your host).

After this, the 500 error related to `storage/framework/views` and wrong paths should be resolved.

---

## Blog images not showing (no SSH)

Images are stored in `storage/app/public`. They need to be reachable at `/storage/...` on your site.

### When your domain points at the project root (e.g. public_html with merged `public/` contents)

Laravel normally expects the web root to be the `public/` folder, so `storage:link` creates `public/storage`. If your document root is the project root (e.g. you copied `public/` contents into `public_html`), that symlink ends up in the wrong place and images don’t load.

1. **On the server**, in `.env`, add:
   ```env
   PUBLIC_PATH_IS_ROOT=true
   ```
2. **Clear config and run setup again**  
   Visit: `https://your-site.com/setup-storage-link`  
   This clears config cache (so the new setting is used) and recreates the storage link at the document root (`public_html/storage` → `storage/app/public`). Blog images should then work.
3. **Optional:** Remove the wrong symlink if it exists: delete the folder `public_html/public/storage` (or the `public` folder if it only contained `storage`).

### Other setups

1. **Create the link via browser**  
   Visit: `https://your-site.com/setup-storage-link`. If it says the storage link was created, you can remove the `/setup-storage-link` route from `routes/web.php`.

2. **If your host disables symlinks**  
   The fallback route in `web.php` serves files from `storage/app/public` for `/storage/...`, so blog images still work. You can leave that route in place.
