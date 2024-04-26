# ievtds™

[![Release](https://img.shields.io/github/v/release/073311/ievtds?label=release)](https://github.com/073311/ievtds/releases)
![Downloads](https://img.shields.io/github/downloads/073311/ievtds/total?label=downloads)
[![Translations](https://badges.crowdin.net/ievtds/localized.svg)](https://crowdin.com/project/ievtds)
[![Tests](https://img.shields.io/github/actions/workflow/status/073311/ievtds/tests.yml?label=tests)](https://github.com/073311/ievtds/actions)
[![License](https://img.shields.io/github/license/073311/ievtds?label=license)](LICENSE.txt)

ievtds is a free, open source and online accounting software designed for small businesses and freelancers. It is built with modern technologies such as Laravel, VueJS, Tailwind, RESTful API etc. Thanks to its modular structure, ievtds provides an awesome App Store for users and developers.

* [Home](https://ievtds.com) - The house of ievtds
* [Forum](https://ievtds.com/forum) - Ask for support
* [Documentation](https://ievtds.com/hc/docs) - Learn how to use
* [Developer Portal](https://developer.ievtds.com) - Generate passive income
* [App Store](https://ievtds.com/apps) - Extend your ievtds
* [Translations](https://crowdin.com/project/ievtds) - Help us translate ievtds

## Requirements

* PHP 8.1 or higher
* Database (eg: MySQL, PostgreSQL, SQLite)
* Web Server (eg: Apache, Nginx, IIS)
* [Other libraries](https://ievtds.com/hc/docs/on-premise/requirements/)

## Framework

ievtds uses [Laravel](http://laravel.com), the best existing PHP framework, as the foundation framework and [Module](https://github.com/ievtds/module) package for Apps.

## Installation

* Install [Composer](https://getcomposer.org/download) and [Npm](https://nodejs.org/en/download)
* Clone the repository: `git clone https://github.com/073311/ievtds.git`
* Install dependencies: `composer install ; npm install ; npm run dev`
* Install ievtds:

```bash
php artisan install --db-name="ievtds" --db-username="root" --db-password="pass" --admin-email="admin@company.com" --admin-password="123456"
```

* Create sample data (optional): `php artisan sample-data:seed`

## Contributing

Please, be very clear on your commit messages and pull requests, empty pull request messages may be rejected without reason.

When contributing code to ievtds, you must follow the PSR coding standards. The golden rule is: Imitate the existing ievtds code.

Please note that this project is released with a [Contributor Code of Conduct](https://ievtds.com/conduct). By participating in this project you agree to abide by its terms.

## Translation

If you'd like to contribute translations, please check out our [Crowdin](https://crowdin.com/project/ievtds) project.

## Changelog

Please see [Releases](../../releases) for more information what has changed recently.

## Security

Please review [our security policy](https://github.com/073311/ievtds/security/policy) on how to report security vulnerabilities.

## Credits

* [Denis Duliçi](https://github.com/denisdulici)
* [Cüneyt Şentürk](https://github.com/cuneytsenturk)
* [All Contributors](../../contributors)

## License

ievtds is released under the [GPLv3 license](LICENSE.txt).
