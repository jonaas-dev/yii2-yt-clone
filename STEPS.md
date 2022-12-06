# Content

Font : https://www.youtube.com/watch?v=whuIf33v2Ug

## :rocket: INSTALL NECESSARY TOOLS

1) Xampp ([click](https://www.apachefriends.org/index.html)).
2) Composer ([click](https://getcomposer.org/download/)).

### Install XAMPP

```bash
# Per ficar-ho a WLS ha fet falta descargar-ho així!
sudo wget https://sourceforge.net/projects/xampp/files/XAMPP%20Linux/8.1.6/xampp-linux-x64-8.1.6-0-installer.run

sudo chmod 755 [package_name]
sudo ./[package_name]

# Run
sudo /opt/lampp/lampp start
```

### Install Composer

```
sudo apt install wget php-cli php-zip unzip
wget -O composer-setup.php https://getcomposer.org/installer
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
sudo composer self-update 
```

## :gear: PROJECT SETUP

### Install Advance project template

`Advance project template` ([www.yiiframework.com](https://www.yiiframework.com/extension/yiisoft/yii2-app-advanced/doc/guide/2.0/en), [github.com/yiisoft](https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide/README.md)) using  `Composer`

```bash
composer create-project --prefer-dist yiisoft/yii2-app-advanced yii-application
```

### Config htdocs
Font: ([click](https://www.yiiframework.com/extension/yiisoft/yii2-app-advanced/doc/guide/2.0/en/start-installation)).

#### Config vhost
Domains:
- http://freecodetube.test/ 
- http://studio.freecodetube.test/

```bash
# add vhost in /opt/lampp/etc/extra/httpd-vhosts.conf (linux)
```
<details>

```
<VirtualHost *:80>
    ServerName freecodetube.test
    DocumentRoot "/opt/lampp/htdocs/yii2-yt-clone/frontend/web/"
        
    <Directory "/opt/lampp/htdocs/yii2-yt-clone/frontend/web/">
        # use mod_rewrite for pretty URL support
        RewriteEngine on
        # If a directory or a file exists, use the request directly
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        # Otherwise forward the request to index.php
        RewriteRule . index.php

        # use index.php as index file
        DirectoryIndex index.php

        # ...other settings...
        # Apache 2.4
        Require all granted
            
        ## Apache 2.2
        # Order allow,deny
        # Allow from all
    </Directory>
</VirtualHost>
    
<VirtualHost *:80>
    ServerName studio.freecodetube.test
    DocumentRoot "/opt/lampp/htdocs/yii2-yt-clone/backend/web/"
        
    <Directory "/opt/lampp/htdocs/yii2-yt-clone/backend/web/">
        # use mod_rewrite for pretty URL support
        RewriteEngine on
        # If a directory or a file exists, use the request directly
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        # Otherwise forward the request to index.php
        RewriteRule . index.php

        # use index.php as index file
        DirectoryIndex index.php

        # ...other settings...
        # Apache 2.4
        Require all granted
            
        ## Apache 2.2
        # Order allow,deny
        # Allow from all
    </Directory>
</VirtualHost>
```

</details>

### Config file hosts


```bash
# sudo nano /etc/hosts
127.0.0.1   freecodetube.test
127.0.0.1   studio.freecodetube.test
```

Jugant amb windows i wls:

:warning: No acabo de aconseguir que `freecodetube.test` i `studio.freecodetube.test` apuntin on toca. PLAN B (TEMPORAL): xampp de windows.
```bash
# c:\windows\system32\drivers\etc\hosts
127.0.0.1	freecodetube.test 
127.0.0.1	studio.freecodetube.test
::1	freecodetube.test studio.freecodetube.test localhost

# no tocar: /etc/hosts
```


### php init

```bash
# from project
/opt/lampp/bin/php init
```

## :pick: CREATE DB AND RUN SCRIPT MIGRATION
1) crear db (phpmyadmin)
2) migrate
    ```bash
    /opt/lampp/htdocs/FreeCodeTube$ sudo /opt/lampp/bin/php yii migrate
    # special file – contains the all change of db.
    ```

