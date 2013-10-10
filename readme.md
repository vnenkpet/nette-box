Nette Sandbox with Twitter Bootstrap (and more)
===============================================

Extended Nette sandbox application template with Twitter Bootstrap 3.0.0 ready for immediate implementation.

Includes:

- Twitter Bootstrap 3.0.0
- Twitter Bootstrap starter template
- Font Awesome iconic font set
- Nette Webloader addon
- Eyecon Bootstrap sliders
- JQplot charts library



Installation
------------

Just install the composer package onto your local web server and run composer update in your command line (recommended):

```
composer create-project vnenkpet/nette-sandbox-with-bootstrap myProject;
cd myProject;
php composer.phar update;
```

or download the zip file and only update the composer.

User's Guide
------------

You can directly change variables in _www/bootstrap-3.0.0/less/variables.less_ which then auto-compiles the _bootstrap.less_ and all files from _www/css_ directory into _www/webtemp_ directory as a single minified CSS file.