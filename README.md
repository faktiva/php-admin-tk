[![SensioLabsInsight](https://insight.sensiolabs.com/projects/28ad1609-bdab-432b-b9a8-bc5e691ab2fb/small.png)](https://insight.sensiolabs.com/projects/28ad1609-bdab-432b-b9a8-bc5e691ab2fb)
[Faktiva "PHP Admin ToolKit"](https://github.com/faktiva/php-admin-tk)
===

[![GitHub release](https://img.shields.io/github/release/faktiva/php-admin-tk.svg?style=flat&label=latest)](https://github.com/faktiva/php-admin-tk/releases/latest)
[![Project Status](http://opensource.box.com/badges/active.svg?style=flat)](http://opensource.box.com/badges)
[![Percentage of issues still open](http://isitmaintained.com/badge/open/faktiva/php-admin-tk.svg?style=flat)](http://isitmaintained.com/project/faktiva/php-admin-tk "Percentage of issues still open")
[![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/faktiva/php-admin-tk.svg?style=flat)](http://isitmaintained.com/project/faktiva/php-admin-tk "Average time to resolve an issue")
[![composer.lock](https://poser.pugx.org/faktiva/php-admin-tk/composerlock?style=flat)](https://packagist.org/packages/faktiva/php-admin-tk)
[![Dependencies Status](https://img.shields.io/librariesio/github/faktiva/php-admin-tk.svg?maxAge=3600&style=flat)](https://libraries.io/github/faktiva/php-admin-tk)
[![License](https://img.shields.io/packagist/l/faktiva/php-admin-tk.svg?style=flat)](https://creativecommons.org/licenses/by-sa/4.0/)

[![Join the chat at https://gitter.im/faktiva/php-admin-tk](https://img.shields.io/badge/Gitter-CHAT%20NOW-brightgreen.svg?style=flat)](https://gitter.im/faktiva/php-admin-tk)
[![Twitter](https://img.shields.io/twitter/url/https/github.com/faktiva/php-admin-tk.svg?style=social)](https://twitter.com/intent/tweet?text=Fantastic %23Faktiva "PHP Admin ToolKit"&url=https://github.com/faktiva/php-admin-tk)

____

**A simple wrapper around a bounce of tools.**

Intended to be installed on a web server vhost for administrative purposes. Works as a glue around _every-day-use_ tools.


## What's it?

This project will install and made available at a glance a number of _open source tools_ that every sysadmin would like to have on his PHP-based web server:

- **[phpinfo()](http://php.net/manual/en/function.phpinfo.php)**

  Access the output of the PHP built-in `phpinfo()` function

- **[Adminer](https://github.com/vrana/adminer)**

  A fully featured **Database management** in a single PHP file supporting _MySQL_, _PostgreSQL_, _SQLite_, _MS SQL_, _Oracle_, _SimpleDB_, _Elasticsearch_

  ![](https://www.adminer.org/static/screenshots/table.png)
- **[phperror-gui](https://github.com/amnuts/phperror-gui)**

  A clean and effective single-file GUI for viewing entries in the **PHP error log**, allowing for filtering by path and by type.

  ![phperror-gui](http://amnuts.com/images/phperror/screenshot/usage.png)

- **[opcache-gui](https://github.com/amnuts/opcache-gui)**

  A clean and responsive **interface for Zend OPcache** information, showing statistics, settings and cached files, and providing a real-time update for the information (using jQuery and React).

  ![opcache-gui](http://amnuts.com/images/opcache/screenshot/overview-v2.1.1.png)

- **[PHPRedMin](https://github.com/sasanrose/phpredmin)**

  A simple web interface to **manage and monitor Redis**.

  ![](http://dl.dropbox.com/u/5413590/phpredmin/hashresult.jpg)
  ![](http://dl.dropbox.com/u/5413590/phpredmin/zsetresult.jpg)
  ![](http://dl.dropbox.com/u/5413590/phpredmin/bulk-delete.png)
  ![](http://dl.dropbox.com/u/5413590/phpredmin/bulk-delete-progress.png)

___

## Installation

### Using composer

- download the project into your vhost root directory (**not the document root, it has to be set to `web`**)

    ```
    composer create-project faktiva/php-admin-tk /var/www/your-admin-vhost
    ```
- cd inside the project root

    ```
    cd /var/www/your-admin-vhost
    ```
- run composer install

    ```
    composer install --no-dev
    ```

Enjoy ;)


## License

![Creative Commons BY-SA License](https://i.creativecommons.org/l/by-sa/4.0/88x31.png)


**[php-admin-tk](https://github.com/faktiva/php-admin-tk)** is licensed under a **Creative Commons [Attribution-ShareAlike](http://creativecommons.org/licenses/by-sa/4.0/) 4.0 International License**.

Permissions beyond the scope of this license may be available contacting the author.

