Simple MVC Mini-blog
============================


DIRECTORY STRUCTURE
-------------------

      application/controllers/        contains Web controller classes
      application/models/             contains model classes
      application/core/            	  contains base classes
      application/views/              contains view files for the Web application
      public/                         contains the entry script and Web resources


REQUIREMENTS
------------

PHP 7.0+
MySQL
Apache

INSTALLATION
------------

You should be able to access the application through the following URL, assuming `project` is the directory
directly under the Web root.

You can then access the application through the following URL for example:

~~~
http://localhost/project/public/
~~~

CONFIGURATION
-------------

### Database

Edit the file `application/config.php` with real data, for example:

```php
return [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'db' => 'mini_blog',
];
```