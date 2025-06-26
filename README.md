# Rector demo - implicit null types

## Installation

```
php composer.phar install
```

## Usage

See the suggested change:

```
vendor/bin/rector --dry-run
```

Make the change:

```
vendor/bin/rector
```

And we should see the method in `Example.php` as:

```php
public function test(?string $a = null)
```
