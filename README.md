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

### Acknowledgements

Thanks to Tomas Votruba and other contributors for building Rector.

Thanks @ghostwriter@phpc.social & @zimzat@mastodon.social for helping with the PHP version constraint.
