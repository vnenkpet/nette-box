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

Just clone the repository to your local web server and run composer update in your command line (recommended):

```
git clone https://github.com/vnenkpet/nette-sandbox-with-bootstrap.git;
cd nette-sandbox-with-bootstrap;
php composer.phar update;
```

or download the zip file and only run the composer.

User's Guide
------------

You can directly change variables in _www/bootstrap-3.0.0/less/variables.less_ which then auto-compiles the _bootstrap.less_ and all files from _www/css_ directory into _www/webtemp_ directory as a single minified CSS file.