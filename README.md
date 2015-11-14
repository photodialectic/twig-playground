This is a simple playground for developing twig templates

It uses [slim php frameworks](http://www.slimframework.com/) and [Twig View for the slim framework](https://github.com/slimphp/Twig-View)

It requires [Composer](https://getcomposer.org/) and PHP 5.5.0 or higher.

#Install

clone this repo

then go into the app

`cd twig-playground`

run composer

`composer install`

#deving
You can run locally by
```
php -S localhost:8000
```
and then you can access you templates by adding them to the end of the path. for instance if you wanted to look at your `awesome_tempalte.html` you would go to `localhost:8000/awesome_template`. Theres a directory for storing your macro files and an example of how to import them. 
