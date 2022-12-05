# Content

Font : https://www.youtube.com/watch?v=whuIf33v2Ug

## :rocket: INSTALL NECESSARY TOOLS

1) Xampp ([click](https://www.apachefriends.org/index.html)).
2) Composer ([click](https://getcomposer.org/download/)).

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
        ```bash
        # from project
        /opt/lampp/bin/php init
        ```
3) Paths:
    - http://freecodetube.test/ 
    - http://studio.freecodetube.test/

## :pick: CREATE DB AND RUN SCRIPT MIGRATION
1) crear db (phpmyadmin)
2) migrate
    ```bash
    /opt/lampp/htdocs/FreeCodeTube$ sudo /opt/lampp/bin/php yii migrate
    # special file – contains the all change of db.
    ```

