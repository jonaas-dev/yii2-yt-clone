# Content

Font : https://www.youtube.com/watch?v=whuIf33v2Ug

## :rocket: INSTALL NECESSARY TOOLS

1) XAMPP - https://www.apachefriends.org/index.html
    ```
    sudo wget https://sourceforge.net/projects/xampp/files/XAMPP%20Linux/8.1.6/xampp-linux-x64-8.1.6-0-installer.run

    sudo chmod 755 [package_name]
    sudo ./[package_name]

    sudo /opt/lampp/lampp start
    ```
2) COMPOSER - https://getcomposer.org/download/
    ```
    sudo apt install wget php-cli php-zip unzip
    wget -O composer-setup.php https://getcomposer.org/installer
    sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
    sudo composer self-update 
    ```

Project paths: 
- http://freecodetube.test/
- http://studio.freecodetube.test/

## :gear: PROJECT SETUP

1) Install `Advance project template` ([www.yiiframework.com](https://www.yiiframework.com/extension/yiisoft/yii2-app-advanced/doc/guide/2.0/en), [github.com/yiisoft](https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide/README.md)) using  `Composer`
    ```bash
    composer create-project --prefer-dist yiisoft/yii2-app-advanced yii-application
    ```

2) Config htdocs
    - Config vhost
    - Config file hosts
    - open IDE
    - php init
        ```
        /opt/lampp/htdocs/FreeCodeTube$ /opt/lampp/bin/php init
        ```

## :pick: CREATE DB AND RUN SCRIPT MIGRATION
1) crear db (phpmyadmin)
2) migrate
    ```bash
    /opt/lampp/htdocs/FreeCodeTube$ sudo /opt/lampp/bin/php yii migrate
    # special file – contains the all change of db.
    ```

