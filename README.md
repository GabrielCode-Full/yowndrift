# Yowndrift

Yowndrift is a blogging web application system, where anyone can share their ideas or knowledge on a specific topic. 

![forGithubR](https://user-images.githubusercontent.com/61103022/103270087-3f6db600-49f2-11eb-8837-7b34f93540a3.png)


## [Demo](https://yowndrift.herokuapp.com/home)

### To clone: 

* `git clone https://github.com/GabrielCode-Full/yowndrift.git`
* `composer install`
* `npm install`
* `npm run dev`
* Change the .env file to the setting you want.
* Delete `Procfile` from the root folder and Change the condition in the `resource > inc > navbar.blade.php` and to `layouts > app.blade.php`
* Example: from `https://yowndrift.herokuapp.com/home` to `http://127.0.0.1:8000/home`
* then run `php artisan serve`