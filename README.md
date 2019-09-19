# Mini PHP framework

Mini PHP framework used as base for integrating and testing new technologies.

### Disclaimer

It's not advisable to use this for live projects as this is still an alpha project.

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

### Install the Database

Create a mysql database and a users table to test the user mvc given in the framework.

## How it works

Through .htaccess file in public folder it rewrites the requests to ```/index.php?url=``` , unless the request corresponds to another existing
file or directory in the public folder.  After the request is received core.php library takes apart the request into an array, first element defines the controller,
second one decides the controller method and third is all the request parameters.

Example:

```/users/show/1```
This is turned into an array:

``` $url['users','show', '1']; ```
From which ```$url[0]``` is a controller ```$url[1]``` is a controller method and ```$url[2]``` are the method parameters.

## Built With
* PHP

## Authors

[**Stefan Nikocevic**](https://github.com/nikocevicstefan)

## License

This project is licensed under the MIT License
