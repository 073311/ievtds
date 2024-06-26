# ApexCharts package for Laravel

![Downloads](https://img.shields.io/packagist/dt/ievtds/laravel-apexcharts)
![Tests](https://img.shields.io/github/actions/workflow/status/ievtds/laravel-apexcharts/tests.yml?label=tests)
[![StyleCI](https://github.styleci.io/repos/452221855/shield?style=flat&branch=master)](https://styleci.io/repos/452221855)
[![License](https://img.shields.io/github/license/ievtds/laravel-apexcharts)](LICENSE.md)

This package allows you to generate modern and interactive charts using the [ApexCharts](https://apexcharts.com) library directly from `Laravel` without interacting with JavaScript, CSS, etc.

It covers all of the chart [types](https://apexcharts.com/docs/chart-types/line-chart) and [options](https://apexcharts.com/docs/options/annotations) available within the `ApexCharts` library.

Check out the [ievtds](https://github.com/073311/ievtds) project to see it live.

## Getting Started

### 1. Install

Run the following command:

```bash
composer require ievtds/laravel-apexcharts
```

### 2. Publish

Publish configuration

```bash
php artisan vendor:publish --tag=apexcharts
```

### 3. Configure

You can change the chart settings of your app from `config/apexcharts.php` file

## Usage

First of all, create an instance of the `Chart` class and set the data and options according to your needs.

```php
use ievtds\Apexcharts\Chart;

...

$chart = (new Chart)->setType('donut')
    ->setWidth('100%')
    ->setHeight(300)
    ->setLabels(['Sales', 'Deposit'])
    ->setDataset('Income by Category', 'donut', [1907, 1923]);
```

Then, include the JavaScript (on every page using charts).

```html
...

</head>
<body>
    ...

    @apexchartsScripts
</body>
```

Finally, call the `container` and `script` method wherever you want to display the chart.

```php
{!! $chart->container() !!}

{!! $chart->script() !!}
```

## Testing

```bash
composer test
```

## Changelog

Please see [Releases](../../releases) for more information what has changed recently.

## Contributing

Pull requests are more than welcome. You must follow the PSR coding standards.

## Security

Please review [our security policy](https://github.com/ievtds/laravel-apexcharts/security/policy) on how to report security vulnerabilities.

## Credits

- [Cüneyt Şentürk](https://github.com/cuneytsenturk)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [LICENSE](LICENSE.md) for more information.
