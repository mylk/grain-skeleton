Grain Skeleton
==============

Creating an application
-----------------------

First, you have to clone the grain-skeleton application:

.. code-block:: console

    $ git clone https://github.com/mylk/grain-skeleton.git path/to/install

Since the project is not yet in packagist.org as a package, you can't use something like this:

.. code-block:: console

    $ composer create-project mylk/grain-skeleton path/to/install

Assuming you already are "in path/to/install", its time to wipe the grain-skeleton history and start writing your own!

.. code-block:: console

    $ cd path/to/install
    $ rm .git
    $ git init

The next step also assumes that you have Composer installed in a globally accessible directory:

.. code-block:: console

    $ composer install

Browsing the skeleton application
---------------------------------

You can now use Grain!

To see the skeleton application in action, start the PHP built-in web server:

.. code-block:: console

    $ php -S localhost:8080 -t web/ web/app_dev.php

Then, browse to http://localhost:8080/hello/yourname

Alternatively, if you have docker and docker-compose installed, you can run the application in a container:

    $ docker-compose build
    $ docker-compose up
