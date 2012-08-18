StupidPHP
=========

Very simple PHP framework for learning MVC

What is done:
* Simple routing. /products/index is mapped to ProductsController->index()
* Autoloading of all files. Files are loaded at application startup.
* Escaping of $_GET and $_POST with mysql_real_escape_string and htmlspecialchars
* Autoloading of JavaScript files. If you open /product/index in browser /assets/js/products/index.js file
will be autoloaded
* Models (you should write usual SQL in them)
* Views
* application.html.php layout
* Stupid mysql_fetch_all and mysql_query_and_fetch functions

How to use it:
* Run git clone https://github.com/sigmaray/StupidPHP.git
* Copy config.example.php to config.php and change it to work with you environment
* Restore db/simplephp.sql dump

WARNING:
* Project is not tested!
* Project is designed only for teaching MVC! If you want to write serious projects look at Ruby on Rails or Sinatra