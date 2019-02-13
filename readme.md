Lavalite package that provides product management facility for the cms.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `figmax/product`.

    "tallesairan/product": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

    Figmax\Product\Providers\ProductServiceProvider::class,

And also add it to alias

    'Product'  => Figmax\Product\Facades\Product::class,

## Publishing files and migraiting database.

**Migration and seeds**

    php artisan migrate
    php artisan db:seed --class=Figmax\\ProductTableSeeder

**Publishing configuration**

    php artisan vendor:publish --provider="Figmax\Product\Providers\ProductServiceProvider" --tag="config"

**Publishing language**

    php artisan vendor:publish --provider="Figmax\Product\Providers\ProductServiceProvider" --tag="lang"

**Publishing views**

    php artisan vendor:publish --provider="Figmax\Product\Providers\ProductServiceProvider" --tag="view"


## Usage


