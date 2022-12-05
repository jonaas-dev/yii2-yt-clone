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

### Install mysql and php in wls 2 windows 10

```
sudo apt update
sudo apt upgrade
```

1)  Install Apache. MySQL and PHP – Lamp Server

    ```
    sudo apt install lamp-server^
    ```

2) Start Apache and MySQL services

    ```
    sudo service apache2 start
    ```

    - Secure and start MySQL:

        ```
        sudo usermod -d /var/lib/mysql/ mysql
        sudo mysql_secure_installation
        sudo service mysql start
        ```
        Problemes:
        - https://stackoverflow.com/questions/11990708/error-cant-connect-to-local-mysql-server-through-socket-var-run-mysqld-mysq
        - https://blog.pleets.org/article/soluci%C3%B3n-al-error-set-password-has-no-significance-for-user

        Check: Go to `http://localhost/`

    - Install PhpMyAdmin

    ```
    sudo apt install phpmyadmin php-mbstring php-zip php-gd php-json php-curl
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

