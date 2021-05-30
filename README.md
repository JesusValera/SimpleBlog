# Simple Blog Project

> This is a simple project of a blog without framework I coded in a weekend

### About

The idea of this project is create a simple blog from scratch, which means, create a simple framework/routing using as fewer dependencies as possible.

The very scaffolding of this project was took from this [repository](https://github.com/Chemaclass/php-scaffolding).

Docker would be nice to be in the project, but as the purpose of the project was to create an MVP, it was not implemented.

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
