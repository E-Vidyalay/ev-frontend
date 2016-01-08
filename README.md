# ev-frontend
Ev-frontend is a Frontend panel for evidyalay website. It is developed using [CakePHP](http://www.cakephp.org). This helps viewer of the website to see various front-end contents and also can perform various activities.

## How to deploy locally?
This is project is build using Cakephp, server side scripting language. To deploy this project locally you need to have apache server and mysql database.

### Dependency tools
#### For windows users
* [XAMPP](https://www.apachefriends.org/index.html) is the easy tool to install and get Apache server on the local machine

#### For Debian / Ubuntu users
* There is apache2 install inbuilt in the machine you need to configure it and activate it. [XAMPP](https://www.apachefriends.org/index.html) is also available for linux users.

#### Mac users
* You need to configure apache2 on your machine and start it. [XAMPP](https://www.apachefriends.org/index.html) is also available for mac users.

#### Deployment
* Next you need to clone the repository in your htdocs or www folder of XAMPP.
* Import the database file available in the db folder into your mysql database.
* Configure the database crenditials in admin/app/config/database.php
    * Change the database login and password in the following section of database.php and also the database name.
    ```
    public $default = array(
            'datasource' => 'Database/Mysql',
            'persistent' => false,
            'host' => 'localhost',
            'login' => 'root',
            'password' => 'root',
            'database' => 'ev',
            'prefix' => 'axi_',
            //'encoding' => 'utf8',
        );

    ```
* Now you are ready to go, to run it locally, type following url in your addressbar of the browser

```
http://localhost/ev-frontend
```

