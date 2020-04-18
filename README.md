# NiceAcademy

## Installation als neues Projekt

### composer
```bash
$ composer create-project niceshops/nice-academy /your/project/path "dev-master"
```

### Release Download
- siehe [verfügbare Releases](https://github.com/niceshops/nice-academy/releases)
- oder direkter Download des [aktuellstes Release](https://github.com/niceshops/nice-academy/archive/v0.2-beta.zip)

### Unit Tests ausführen
alle Tests
```bash
$ composer run-script test
```
nur Test Suite für [PHP Basis Testaufgaben](tests/php/basic)
```bash
$ composer run-script test-php-basic
$ composer run-script test -- --testsuite test-php-basic
```
nur Test Suite für [PHP Advanced Testaufgaben](tests/php/advanced)
```bash
$ composer run-script test-php-advanced
$ composer run-script test -- --testsuite test-php-advanced
```

## Testaufgaben
- [PHP Basis Testaufgaben](tests/php/basic)
  - [Objektorientierte Programmierung](tests/php/basic/oop.md) (~1h)
+ [PHP Advanced Testaufgaben](tests/php/advanced)
  - [Shop Refactoring und Unit Tests](tests/php/advanced/shop.md) (~1h45m)
  - [Shop Cart Implementierung](tests/php/advanced/shop-cart.md) (~2h)