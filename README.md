php-admin-tk
============

___

[![Packagist](https://img.shields.io/packagist/l/zizuu-store/zzcleanurls.svg?style=plastic)](https://creativecommons.org/licenses/by-nc-sa/4.0/)
[![GitHub release](https://img.shields.io/github/release/ZiZuu-store/zzCleanURLs.svg?style=plastic&label=latest)](https://github.com/ZiZuu-store/zzCleanURLs/releases/latest)
[![Dependency Status](https://www.versioneye.com/user/projects/57518a5e7757a00034dc3b16/badge.svg)](https://www.versioneye.com/user/projects/57518a5e7757a00034dc3b16)

___

A simple wrapper around a bounce of tools.

Intended to be installed on a web server vhost for administrative purposes. Works as a glue around every-day-use tools


## What's it?

This project will install and made available at a glance a number of open source tools that every sysadmin would like to have on his PHP-based web server:

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

- download the project into your vhost root directory (**not the document root, it has to be set to httpdocs**)

    ```
    composer create-project dralbert/php-admin-tk /var/www/your-admin-vhost
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

![Creative Commons BY-NC-SA License](https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png)


**[php-admin-tk](https://github.com/drAlberT/php-admin-tk)** by [drAlberT](https://github.com/drAlberT) is licensed under a **Creative Commons [Attribution-NonCommercial-ShareAlike](http://creativecommons.org/licenses/by-nc-sa/4.0/) 4.0 International License**.

Permissions beyond the scope of this license may be available contacting the author
