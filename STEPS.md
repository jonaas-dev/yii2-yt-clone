# Content

Font : https://www.youtube.com/watch?v=whuIf33v2Ug

## :rocket: INSTALL NECESSARY TOOLS

1) XAMPP - https://www.apachefriends.org/index.html
    - Link: [steps-to-install-apache-mysql-and-php-in-wsl-2-windows-10](https://www.how2shout.com/how-to/steps-to-install-apache-mysql-and-php-in-wsl-2-windows-10.html) 
2) COMPOSER - https://getcomposer.org/download/

run panel control xampp:
```bash
/opt/lampp$ sudo ./manager-linux-x64.run
```

Project paths: 
- http://freecodetube.test/
- http://studio.freecodetube.test/

## :rocket: PROJECT SETUP

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

## CREATE DB AND RUN SCRIPT MIGRATION
1) crear db (phpmyadmin)
2) migrate
    ```bash
    /opt/lampp/htdocs/FreeCodeTube$ sudo /opt/lampp/bin/php yii migrate
    # special file – contains the all change of db.
    ```

