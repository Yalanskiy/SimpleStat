# SimpleStat

This is a PHP class that performs various calculations on numeric arrays.

## Installation

The package can be installed via Composer by running the following command:

```
composer require syalanskiy/simple-stat
```

## Usage

First, include the vendor/autoload.php file:

```php
require_once 'vendor/autoload.php';
```

Then, create an instance of the `Stat` class:

```php
$data = [1, 7.7, 2, 3.3, 7.7, 5.67, 2, 1.1, 7.7, 9];
$stat = new \Yalanskiy\SimpleStat\Stat($data);
```

To perform calculation, call the appropriate method:

```php
$stat->count();
$stat->summ();
$stat->arithmeticMean();
$stat->geometricMean();
$stat->median();
$stat->mode();
```

## Example

```php
$data = [1, 7.7, 2, 3.3, 7.7, 5.67, 2, 1.1, 7.7, 9];
$stat = new \Yalanskiy\SimpleStat\Stat($data);

echo $stat->count();
echo PHP_EOL;

echo $stat->summ();
echo PHP_EOL;

echo $stat->arithmeticMean();
echo PHP_EOL;

echo $stat->geometricMean();
echo PHP_EOL;

echo $stat->median();
echo PHP_EOL;

echo $stat->mode();
echo PHP_EOL;
```

## Contribution

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.