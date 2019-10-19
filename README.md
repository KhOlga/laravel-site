# Create Laravel-Site

1) downloaded the Laravel installer using Composer: 
**_composer global require laravel/installer_**

2) created a directory for my laravel-site application:
**_laravel new laravel-site_**
This directory containing a fresh Laravel installation with all of Laravel's dependencies already installed.
**_php artisan serve_**
3) created  views: home.blade.php, about.blade.php, contact.blade.php, work.blade.php
and configured /routes/web.php file. Also created navigator menu.

3-1) if needed, configured webpack.mix.js

4) install manager packages and modules:
**_npm install_**

5) run developer mode:
**_npm run dev_**

6) run watcher:
**_npm run watch_**

7) created PostController:
**_php artisan make:controller PostController_**

7-1) created ArticlesController:
**_php artisan make:controller ArticlesController_**

8) created database `laravel_site` (used phpmyadmin for this)
8-1) created table `posts` (used phpmyadmin for this)

8-2) created model **_php artisan make:model Post_**

8-3)created model **_php artisan make:model Article -m_**

9) create table `articles` in database. To created a migration, used the make:migration Artisan command:
**_php artisan make:migration create_articles_table_**
**_php artisan migrate_**

10) add column to the table `posts`
**_php artisan make:migration add_title_to_posts_table_**

11) to rollback the latest migration operation:
**_php artisan migrate:rollback_**

12) regenerate Composer's autoloader:
**_composer dump-autoload_**

13) add some CSS-styles in `style.css`
