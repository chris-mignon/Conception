# Conception LMS — Laravel Migration Scaffold

This repository is a **migration scaffold** to help convert the existing Conception PHP LMS into a Laravel application.
It contains controllers, models, routes, Blade views, migrations and a .env example.

IMPORTANT:
- This is **not** a full Laravel installation. To create a working Laravel app:
  1. Install Composer (https://getcomposer.org).
  2. Run `composer create-project laravel/laravel conception-app`
  3. Copy the files/folders from this scaffold into the new `conception-app` root (merge with existing `app/`, `routes/`, `database/`, `resources/`).
  4. Copy `.env.example` contents into `conception-app/.env` and update DB credentials.
  5. Run `composer install`
  6. Run `php artisan key:generate`
  7. Run `php artisan migrate --seed`
  8. Run `php artisan storage:link`
  9. Serve with `php artisan serve` or configure your web server.

What this scaffold includes:
- `app/Models` (User model, Student model)
- `app/Http/Controllers` (AuthController, AssignmentController, HomeController)
- `routes/web.php` (web routes)
- `database/migrations` (users, students, assignments, files, quizzes)
- `database/seeders/DatabaseSeeder.php`
- `resources/views` (basic Blade views: auth/login, auth/register, dashboard)
- `.env.example` (template)

Security & migration notes:
- Passwords: Laravel uses `bcrypt` via the `Hash` facade — passwords are hashed automatically when using registration code provided.
- All DB operations use Eloquent / query builder preventing SQL injection.
- File uploads saved to `storage/app/public` and served via `php artisan storage:link`.
- CSRF protection provided automatically by Laravel (Blade `@csrf` tokens).
- Session and cookie hardening: configure `SESSION_SECURE_COOKIE=true` in production .env.

If you want, I can:
- Generate more controllers and Blade views (courses, quizzes, messaging).
- Attempt a fuller automated port of specific PHP files from your original ZIP into Laravel controllers — tell me "do that".

--- End of README

