# Headless Company

A simple personal project utilizing Laravel, and Vue with Contentful as a CMS.

A demo is currently being hosted on Heroku here: https://headlesscompany.herokuapp.com/

Please note that it is currently sitting in a free dyno so it may take a while for the app to
initially wake up. Also note that the demo is based on the `staging` branch of this repo, so there may
be features implemented in master that have not yet been deployed to Heroku.

# Project Setup

This project was configured primarily for Homestead. If you would like to use Homestead, simply ensure
that you have Vagrant and its dependencies installed. If you are on Windows, add the following line to your
hosts (C:\Windows\System32\drivers\etc) files.

```
127.0.0.1   headlesscompany.local
```

Next, from the root of this project, run `composer install` followed by a `npm install`

Once done, run `php artisan key:generate` to generate an APP_KEY.

Run `php artisan migrate` to generate the tables required by Telescope.

Now, run `vagrant up` to start the VM.

You should now see the project at http://headlesscompany.local
