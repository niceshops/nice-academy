# NiceAcademy

## Installation als neues Projekt

### composer
```bash
$ composer create-project niceshops-dev/nice-academy /your/project/path "dev-master"
```

### Release Download
- siehe [verfügbare Releases](https://github.com/niceshops-dev/nice-academy/releases)
- oder direkter Download des [aktuellstes Release](https://github.com/niceshops-dev/nice-academy/archive/v0.1-beta.zip)

### Unit Tests ausführen
```bash
$ composer run-script test
```
oder nur Test Suite für [PHP Basis Testaufgaben](tests/php/basic/README.md)
```bash
$ composer run-script test -- --testsuite tests-php-basic
```

## Testaufgaben
- [PHP Basis Testaufgaben](tests/php/basic/README.md)
- [PHP Advanced Testaufgaben](tests/php/advanced/README.md)