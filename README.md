# Yowndrift

Yowndrift is a blogging web application, where anyone can share their ideas or knowledge on a specific topic.

![Screenshot 2020-12-26 165949](https://user-images.githubusercontent.com/61103022/103148558-fde3cd80-479b-11eb-832c-9149a34ea75f.png)

## [Demo](https://yowndrift.herokuapp.com/home)

### To clone: 

* `git clone https://github.com/GabrielCode-Full/yowndrift.git`
* `composer install`
* `npm install`
* `npm run dev`
* Change the .env file to the setting you want.
* Delete `Procfile` from the root folder and Change the condition in the `resource > inc > navbar.blade.php` and to `layouts > app.blade.php`
*  Example: `https://yowndrift.herokuapp.com/home` to `http://127.0.0.1:8000/home`