# Co-authors network management

This is our project 3 team's product.

Composer.json

{
    "name": "laravel/laravel",
    "description": "The Laravel Framework.",
    "keywords": ["framework", "laravel"],
    "license": "MIT",
    "type": "project",
    "require": {
        "php": ">=5.6.4",
        "bkwld/laravel-pug": "^1.3",
        "doctrine/dbal": "^2.5",
        "laravel/framework": "5.4.*",
        "laravel/tinker": "~1.0"
    },
    "require-dev": {
        "barryvdh/laravel-debugbar": "^2.4",
        "barryvdh/laravel-ide-helper": "^2.4",
        "fzaninotto/faker": "~1.4",
        "mockery/mockery": "0.9.*",
        "phpunit/phpunit": "~5.7"
    },
    "autoload": {
        "classmap": [
            "database"
        ],
        "psr-4": {
            "App\\": "app/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/"
        }
    },
    "scripts": {
        "post-root-package-install": [
            "php -r \"file_exists('.env') || copy('.env.example', '.env');\""
        ],
        "post-create-project-cmd": [
            "php artisan key:generate"
        ],
        "post-install-cmd": [
            "Illuminate\\Foundation\\ComposerScripts::postInstall",
            "php artisan optimize"
        ],
        "post-update-cmd": [
            "Illuminate\\Foundation\\ComposerScripts::postUpdate",
            "php artisan ide-helper:generate",
            "php artisan ide-helper:meta",
            "php artisan optimize"
        ]
    },
    "config": {
        "preferred-install": "dist",
        "sort-packages": true,
        "optimize-autoloader": true
    }
}
