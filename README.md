# CodeIgniter Starter Project
This repository purpose for create web application or exercise using CodeIgniter with little hack.

## Little hack
  1. `application/config/config.php`
    ```
    $config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
    $config['base_url'] .= "://".$_SERVER['HTTP_HOST'];
    $config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

    $config['index_page'] = ''; // Set empty here
    ```
    Why I do that? Because usually the pattern of url when using CodeIgniter like this:
    `localhost/ci-starter-project/index.php/yourController.php`. But, in this hack it will be like:
    `localhost/ci-starter-project/yourController.php`
  2. `application/config/autoload.php`
    ```
    $autoload['libraries'] = array('database');
    $autoload['helper'] = array('url');
    ```
    It will be load database functionality and url helper like `base_url()` and `site_url()` automatically.
  3. `.htaccess` in root project. It supported the first step. If you want to use HTTPS when in production, I already setup for you.
