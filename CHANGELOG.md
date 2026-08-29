# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added

- `FilamentFaqPlugin` with `CategoryResource` and `FaqResource` for Filament v3.
- Translatable `name`/`question`/`answer` fields via `jeffersongoncalves/filament-translatable`.
- Config-based resource overrides (`filament-faq.resources.category` / `.faq`) and navigation group.

### Known Issues

- `composer install` currently fails to resolve: `jeffersongoncalves/laravel-faq` 1.0.0 requires `illuminate/*: ^12.0|^13.0`, which has no overlap with Filament v3's `illuminate/*: ^10.0` requirement. Blocked until `laravel-faq` widens its Laravel constraint.

[Unreleased]: https://github.com/jeffersongoncalves/filament-faq/commits/1.x
