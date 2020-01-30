Use CakePHP.

---------------------------------


## Development Instructions

The resources (styles) & assets are now maintained by webpack based on mix.
To build and develop, first install all npm dependencies.

```console
npm install
```

or

```console
npm i
```


### Asset Compilation

Once the dependencies are installed you may build the assets.

Compile assets in development environment.

```console
npm run dev
```

Compile assets in development environment & watch for changes.

```console
npm run watch
```

To compile assets in production environment (compile & minify) run:

```console
npm run prod
```

### Host with dev. server

Go to app/webroot directory and host with the php's built-in
development server: `php -S <ip>:<port> router.php`

```console
cd app/webroot
php -S 0.0.0.0:9900 router.php
```

