# Assumptions for PHPUnit.

[![Build Status](https://travis-ci.org/MehrAlsNix/Assumptions.svg?branch=develop)](https://travis-ci.org/MehrAlsNix/Assumptions) [![Code Climate](https://codeclimate.com/github/MehrAlsNix/Assumptions/badges/gpa.svg)](https://codeclimate.com/github/MehrAlsNix/Assumptions) [![Test Coverage](https://codeclimate.com/github/MehrAlsNix/Assumptions/badges/coverage.svg)](https://codeclimate.com/github/MehrAlsNix/Assumptions/coverage) [![Dependency Status](https://www.versioneye.com/user/projects/5558aa6eb2ff6d2ecc000368/badge.svg?style=flat)](https://www.versioneye.com/user/projects/5558aa6eb2ff6d2ecc000368)

## Introduction

Assumptions can be used to skip tests when common preconditions, like the PHP Version or installed extensions, are not met.

The default PHPUnit runner treats tests with failing assumptions as skipped. Custom runners may behave differently.

We have included several assumptions like `assumeTrue`, `assumeExtensionLoaded`,... by default. All of those functions are subsumed in assumeThat, with the appropriate `Hamcrest` matcher.

A failing assumption in a `@before` or `@beforeClass` method will have the same effect as a failing assumption in each `@test` method of the class.

***

The concept behind **Assumptions for PHPUnit** is based on the adequate junit feature, which is documented on their [wiki - Assumptions with assume](https://github.com/junit-team/junit/wiki/Assumptions-with-assume)

## Note

There is a similar feature in PHPUnit called [@requires](https://phpunit.de/manual/current/en/appendixes.annotations.html#appendixes.annotations.requires)!

If you are familiar in using `@requires` annotation to dedicate that a given [requirement](https://phpunit.de/manual/current/en/incomplete-and-skipped-tests.html#incomplete-and-skipped-tests.requires.tables.api) would be given and you are happy about, then you just do not need the use of **Assumption for PHPUnit**.

But if you want to have
- code completion
- better readability
- finer control
- more requirement abilities

then you should give **Assumption for PHPUnit** a try.

<hr>

## Installation

[see wiki](https://github.com/MehrAlsNix/Assumptions/wiki/Installation)

## Usage

```
public function testMethod()
{
    assumeTrue((bool) getenv('ENV_TEST'), 'Environment Variable not set.');
    // if environment variable ENV_TEST is not set, then the test will be skipped.
    ...
}
```

## Requirements

- PHP >= 5.6
