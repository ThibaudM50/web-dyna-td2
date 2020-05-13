# Ubiquity module for codeception

This is a Codeception module that enables you to make Codeception's functional
tests for Ubiquity applications.

## Installation

Add a dev dependency on `phpmv/ubiquity-codeception` to your project's
`composer.json` and enable it as a Codeception module, from a test suite
configuration file.

```shell
composer require --dev phpmv/ubiquity-codeception
```

```yaml
class_name: FunctionalTester
modules:
    enabled:
        - Ubiquity:
            root: tests
        - REST:
            depends: Ubiquity
```
