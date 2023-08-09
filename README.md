<p align="center">
    <img src="https://raw.githubusercontent.com/gehrisandro/blade-on-steroids/main/art/example.png" width="600" alt="Blade on steroids">
    <p align="center">
        <a href="https://github.com/gehrisandro/blade-on-steroids/actions"><img alt="GitHub Workflow Status (main)" src="https://img.shields.io/github/actions/workflow/status/gehrisandro/blade-on-steroids/tests.yml?branch=main&label=tests&style=round-square"></a>
        <a href="https://packagist.org/packages/gehrisandro/blade-on-steroids"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/gehrisandro/blade-on-steroids"></a>
        <a href="https://packagist.org/packages/gehrisandro/blade-on-steroids"><img alt="Latest Version" src="https://img.shields.io/packagist/v/gehrisandro/blade-on-steroids"></a>
        <a href="https://packagist.org/packages/gehrisandro/blade-on-steroids"><img alt="License" src="https://img.shields.io/github/license/gehrisandro/blade-on-steroids"></a>
    </p>
</p>

------

**Blade on steroids** unlocks the full power of blade components.

If you find this package helpful, please consider sponsoring the maintainer:
- Sandro Gehri: **[github.com/sponsors/gehrisandro](https://github.com/sponsors/gehrisandro)**

> **Attention:** This package is still in early development.

## Table of Contents
- [Get Started](#get-started)
- [Configuration](#configuration)
- [Contributing](#contributing)

## Get Started
> **Requires [Laravel 10](https://github.com/laravel/laravel)**

First, install `Blade on steroids` via the [Composer](https://getcomposer.org/) package manager:

```bash
composer require gehrisandro/blade-on-steroids
```

Next, publish the configuration file:

```bash
php artisan vendor:publish --provider="BladeOnSteroids\BladeOnSteroidsServiceProvider"
```

This will create a `config/blade-on-steroids.php` configuration file in your project, which you can modify to your needs
using environment variables. For more information, see the [Configuration](#configuration) section:

## Configuration

> TODO

## Contributing

Thank you for considering contributing to `Blade on steroids`! The contribution guide can be found in the [CONTRIBUTING.md](CONTRIBUTING.md) file.


---

`Blade on steroids` is an open-sourced software licensed under the **[MIT license](https://opensource.org/licenses/MIT)**.


