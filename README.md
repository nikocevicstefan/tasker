# Taskr
Plain PHP Task/Notes app with features like authentication and category filtering.

![TaskTaskr](https://user-images.githubusercontent.com/31037015/65864342-ff90cc80-e371-11e9-8f55-a1f9674abef9.png)

![TaskerLogin](https://user-images.githubusercontent.com/31037015/65864389-159e8d00-e372-11e9-8755-d112d15be78a.png)

### Disclaimer

This is not a finished project as it's still missing some production-ready code.
This is just an attempt to create an app from scratch based on plain PHP and a
skeleton framework I built, which you can find [**Here**](https://github.com/nikocevicstefan/obeliusmvc)

### Prerequisites

* Apache Server
* PHP 5.6+
* Mysql Database

Install [XAMPP](https://www.apachefriends.org/index.html) for an easy quickstart


### Config File

Modify the app/config/config.php file according to your needs. 
Example:
```
//Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'yourusername');
define('DB_PASS', 'yourpassword');
define('DB_NAME', 'yourdatabase');
```

### htaccess file

Modify the .htaccess file inside the public folder to match the name of your installation folder
Example:
```
.
.
.
RewriteBase /mysite/public
.
.
.
```

## How it works

Through .htaccess file in public folder it rewrites the requests to ```/index.php?url=``` , unless the request corresponds to another existing
file or directory in the public folder.  After the request is received core.php library takes apart the request into an array, first element defines the controller,
second one decides the controller method and third is all the request parameters.

Example:

```/tasks/edit/1```
This is turned into an array:

``` $url['tasks','edit', '1']; ```
From which ```$url[0]``` is a controller ```$url[1]``` is a controller method and ```$url[2]``` are the method parameters.

## Built With
* PHP
* Bootstrap

## Authors

[**Stefan Nikocevic**](https://github.com/nikocevicstefan)

## License

This project is licensed under the MIT License
