# WP Better Settings

[![Latest Stable Version](https://poser.pugx.org/typisttech/wp-better-settings/v/stable)](https://packagist.org/packages/typisttech/wp-better-settings)
[![Total Downloads](https://poser.pugx.org/typisttech/wp-better-settings/downloads)](https://packagist.org/packages/typisttech/wp-better-settings)
[![Build Status](https://travis-ci.org/TypistTech/wp-better-settings.svg?branch=master)](https://travis-ci.org/TypistTech/wp-better-settings)
[![codecov](https://codecov.io/gh/TypistTech/wp-better-settings/branch/master/graph/badge.svg)](https://codecov.io/gh/TypistTech/wp-better-settings)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/TypistTech/wp-better-settings/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/TypistTech/wp-better-settings/?branch=master)
[![PHP Versions Tested](http://php-eye.com/badge/typisttech/wp-better-settings/tested.svg)](https://travis-ci.org/TypistTech/wp-better-settings)
[![StyleCI](https://styleci.io/repos/81945222/shield?branch=master)](https://styleci.io/repos/81945222)
[![License](https://poser.pugx.org/typisttech/wp-better-settings/license)](https://packagist.org/packages/typisttech/wp-better-settings)
[![Donate via PayPal](https://img.shields.io/badge/Donate-PayPal-blue.svg)](https://typist.tech/donate/wp-better-settings/)
[![Hire Typist Tech](https://img.shields.io/badge/Hire-Typist%20Tech-ff69b4.svg)](https://typist.tech/contact/)

A simplified OOP implementation of the WP Settings API.

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->


- [Install](#install)
- [Usage](#usage)
  - [Example](#example)
- [Frequently Asked Questions](#frequently-asked-questions)
  - [Is this a plugin?](#is-this-a-plugin)
  - [What to do when wp.org plugin team tell me to clean up the `vendor` folder?](#what-to-do-when-wporg-plugin-team-tell-me-to-clean-up-the-vendor-folder)
  - [Can two different plugins use this package at the same time?](#can-two-different-plugins-use-this-package-at-the-same-time)
  - [Do you have a demo plugin that use this package?](#do-you-have-a-demo-plugin-that-use-this-package)
  - [Do you have real life examples that use this package?](#do-you-have-real-life-examples-that-use-this-package)
  - [It looks awesome. Where can I find some more goodies like this?](#it-looks-awesome-where-can-i-find-some-more-goodies-like-this)
- [Support](#support)
  - [Why don't you hire me?](#why-dont-you-hire-me)
  - [Want to help in other way? Want to be a sponsor?](#want-to-help-in-other-way-want-to-be-a-sponsor)
- [Developing](#developing)
- [Running the Tests](#running-the-tests)
- [Feedback](#feedback)
- [Change log](#change-log)
- [Security](#security)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

## Install

Installation should be done via composer, details of how to install composer can be found at [https://getcomposer.org/](https://getcomposer.org/).

``` bash
$ composer require typisttech/wp-better-settings
```

You should put all `WP Better Settings` classes under your own namespace to avoid class name conflicts.

- [imposter-plugin](https://github.com/Typisttech/imposter-plugin)
- [mozart](https://github.com/coenjacobs/mozart)

## Usage

### Example

Coming soon... Use the source...

## Frequently Asked Questions

### Is this a plugin?

No, this is a package that should be part of your plugin.

### What to do when wp.org plugin team tell me to clean up the `vendor` folder?

Re-install packages via the following command. This package exports only necessary files to `dist`.

```bash
$ composer install --no-dev --prefer-dist --optimize-autoloader
```

### Can two different plugins use this package at the same time?

Yes, if put all `WP Better Settings` classes under your own namespace to avoid class name conflicts.

- [imposter-plugin](https://github.com/Typisttech/imposter-plugin)
- [mozart](https://github.com/coenjacobs/mozart)

### Do you have a demo plugin that use this package?

You can install this demo plugin by
```bash
$ wp plugin install https://github.com/TypistTech/wp-better-settings/archive/nightly.zip --activate
```

Check out [`wp-better-settings.php`](./wp-better-settings.php). We use it for acceptance tests.

### Do you have real life examples that use this package?

Here you go:

 * [Sunny](https://github.com/Typisttech/sunny)
 * [WP Cloudflare Guard](https://github.com/TypistTech/wp-cloudflare-guard)

*Add your own plugin [here](https://github.com/TypistTech/wp-better-settings/edit/master/README.md)*

### It looks awesome. Where can I find some more goodies like this?

* Articles on Typist Tech's [blog](https://typist.tech)
* [Tang Rufus' WordPress plugins](https://profiles.wordpress.org/tangrufus#content-plugins) on wp.org
* More projects on [Typist Tech's GitHub profile](https://github.com/TypistTech)
* Stay tuned on [Typist Tech's newsletter](https://typist.tech/go/newsletter)
* Follow [Tang Rufus' Twitter account](https://twitter.com/TangRufus)
* Hire [Tang Rufus](https://typist.tech/contact) to build your next awesome site

## Support

Love `wp-better-settings`? Help me maintain it, a [donation here](https://typist.tech/donation/) can help with it.

### Why don't you hire me?

Ready to take freelance WordPress jobs. Contact me via the contact form [here](https://typist.tech/contact/) or, via email [info@typist.tech](mailto:info@typist.tech)

### Want to help in other way? Want to be a sponsor?

Contact: [Tang Rufus](mailto:tangrufus@gmail.com)

## Developing

To setup a developer workable version you should run these commands:

```bash
$ composer create-project --keep-vcs --no-install typisttech/wp-better-settings:dev-master
$ cd wp-better-settings
$ composer install
```

## Running the Tests

[WP Better Settings](https://github.com/TypistTech/wp-better-settings) run tests on [Codeception](http://codeception.com/) and relies [wp-browser](https://github.com/lucatume/wp-browser) to provide WordPress integration.
Before testing, you have to install WordPress locally and add a [codeception.yml](http://codeception.com/docs/reference/Configuration) file.
See [*.suite.example.yml](./tests/) for [Local by Flywheel](https://share.getf.ly/v20q1y) configuration examples.

Actually run the tests:

``` bash
$ composer test
```

We also test all PHP files against [PSR-2: Coding Style Guide](http://www.php-fig.org/psr/psr-2/) and part of the [WordPress coding standard](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards).

Check the code style with ``$ composer check-style``.

## Feedback

**Please provide feedback!** We want to make this package useful in as many projects as possible.
Please submit an [issue](https://github.com/TypistTech/wp-better-settings/issues/new) and point out what you do and don't like, or fork the project and make suggestions.
**No issue is too small.**

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

If you discover any security related issues, please email wp-better-settings@typist.tech instead of using the issue tracker.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CODE_OF_CONDUCT](./CODE_OF_CONDUCT.md) for details.

## Credits

[WP Better Settings](https://github.com/TypistTech/wp-better-settings) is a [Typist Tech](https://typist.tech) project and maintained by [Tang Rufus](https://twitter.com/Tangrufus), freelance developer for [hire](https://typist.tech/contact/).

Full list of contributors can be found [here](https://github.com/TypistTech/wp-better-settings/graphs/contributors).

Special thanks to [Alain Schlesser](https://www.alainschlesser.com/) whose [Using A Config To Write Reusable Code Series](https://www.alainschlesser.com/config-files-for-reusable-code/) makes the first versions of this package.

## License

[WP Better Settings](https://github.com/TypistTech/wp-better-settings) is licensed under the GPLv2 (or later) from the [Free Software Foundation](http://www.fsf.org/).
Please see [License File](LICENSE) for more information.
