# Simple-Framework Project

> This is a tiny blog using a handcrafted framework I coded in a weekend! 😃

### About

The idea of this project is create a simple blog from scratch, using as fewer dependencies as possible and trying to have a clean code.

The scaffolding of this project was took from this [repository](https://github.com/Chemaclass/php-scaffolding).

Docker would be nice to be in the project, but as the purpose of the project was to create an MVP, it was not implemented.

### Requirements

- PHP 7.4 or higher
- Composer
- A MySQL database (you can configure the login and password in the ENV file) [in process]

Firstly, you need to install the dependencies:
```bash
composer install
```

Once it's done, in order to run the project, you need to execute:
```bash
php -S localhost:8081 -t ./public/
```

### Composer scripts

```bash
composer test-all     # run test-quality & test-unit
composer test-quality # run csrun & psalm
composer test-unit    # run phpunit

composer csrun  # check code style
composer psalm  # run Psalm coverage
```

#### Installation Git hooks

```bash
ln -s tools/scripts/git-hooks/pre-commit.sh .git/hooks/pre-commit
ln -s tools/scripts/git-hooks/pre-push.sh .git/hooks/pre-push
```
