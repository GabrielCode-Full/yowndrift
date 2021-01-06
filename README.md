# [Demo](https://yowndrift.herokuapp.com/home)

![forGithubR](https://user-images.githubusercontent.com/61103022/103270087-3f6db600-49f2-11eb-8837-7b34f93540a3.png)

# About the project

Yowndrift is a blogging web application system, where anyone can share their ideas or knowledge on a specific topic.

<br>

<img src="https://img.shields.io/badge/laravel%20-%23FF2D20.svg?&style=for-the-badge&logo=laravel&logoColor=white"/> <img src="https://img.shields.io/badge/bootstrap%20-%23563D7C.svg?&style=for-the-badge&logo=bootstrap&logoColor=white"/>

# Clone: 

* `git clone https://github.com/GabrielCode-Full/yowndrift.git`
* `cd yowndrift`
* `composer install`
* `npm install`
* `npm run dev`
* Change the .env file to the setting you want.
* Delete `\URL::forceScheme('https');` from app > Providers > AppServiceProvider.php
* Change the condition in the `resource > inc > navbar.blade.php` and to `layouts > app.blade.php`

**Example:** from `https://yowndrift.herokuapp.com/home` to `http://127.0.0.1:8000/home`

* then run `php artisan serve`