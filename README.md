## Please run the commands in the following order:

### PHP Dependencies
`composer install --ignore-platform-reqs`

### JS Dependencies
`npm install`

### Migrations
`php artisan migrate`

### Load data
`php artisan db:seed --class=IndicatorSeeder`

### Setup Mix
`npm run dev`

### Deploy
`php artisan serve`
