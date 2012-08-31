CrudGenBundle
=============

About
-----
A cool crud generator based on Sensio crud generator. This generator automatically write for you a nice crud with js functionalities associated to the field type (and name) of your Entity.
For example, if you have a "rank" field, CrudGen will write functions (ajax) to manage properly the position of records.
If you have a "online" field, CrudGen will write functions to publish your records (with a nice button...;).


Screenshot
----------
![Screenshot](https://raw.github.com/sachoo/CrudGen/master/screenshot.png "Screenshot")


Installation
------------
Installation is straightforward, add the following lines to your deps file:

```
[SachooCrudGenBundle]
    git=https://github.com/sachoo/CrudGen.git
    target=/bundles/Sachoo/Bundle/CrudGenBundle
```

Register the Sachoo namespace in your autoload.php file:

```
'Sachoo'        => __DIR__.'/../vendor/bundles'
```

Add the SachooCrudGenBundle to your AppKernel.php file:

```
new Sachoo\BundleCrudGenBundle\SachooCrudGenBundle(),
```

And finaly, you have to install assets to get images, css and js in your web folder.
```
app/console assets:install web
```

Contact
-------
Sacha (sachamorard@gmail.com)
