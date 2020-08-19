# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## 1.1.0 - 2020-08-19
### Added
- Interface to describe connection factories `Ulrack\Dbal\Common\ConnectionFactoryInterface`

## 1.0.3 - 2020-04-09
### Changed
- Changed enum package to GrizzIT variation.

## 1.0.2 - 2020-03-05
### Changed
- Changed company name references.

## 1.0.1 - 2019-04-29
### Changed
The following interfaces now extend `Ulrack\Dbal\Common\QueryInterface`:
- `Ulrack\Dbal\Common\FilterableQueryInterface`
- `Ulrack\Dbal\Common\JoinableQueryInterface`
- `Ulrack\Dbal\Common\PageableQueryInterface`
- `Ulrack\Dbal\Common\SortableQueryInterface`

## 1.0.0 - 2019-04-26
### Added
- `Ulrack\Dbal\Common\ConnectionInterface`
- `Ulrack\Dbal\Common\FilterableQueryInterface`
- `Ulrack\Dbal\Common\JoinableQueryInterface`
- `Ulrack\Dbal\Common\PageableQueryInterface`
- `Ulrack\Dbal\Common\ParameterizedQueryComponentInterface`
- `Ulrack\Dbal\Common\QueryFilterGroupInterface`
- `Ulrack\Dbal\Common\QueryFilterInterface`
- `Ulrack\Dbal\Common\QueryInterface`
- `Ulrack\Dbal\Common\QueryResultInterface`
- `Ulrack\Dbal\Common\SortableQueryInterface`
- `Ulrack\Dbal\Common\Enum\JoinTypeEnum`
- `Ulrack\Dbal\Common\Enum\SortDirectionEnum`

## Releases
- [1.1.0 > Unreleased](https://github.com/ulrack/dbal/compare/1.0.3...HEAD)
- [1.0.3 > 1.1.0](https://github.com/ulrack/dbal/compare/1.0.3...1.1.0)
- [1.0.2 > 1.0.3](https://github.com/ulrack/dbal/compare/1.0.2...1.0.3)
- [1.0.1 > 1.0.2](https://github.com/ulrack/dbal/compare/1.0.1...1.0.2)
- [1.0.0 > 1.0.1](https://github.com/ulrack/dbal/compare/1.0.0...1.0.1)
