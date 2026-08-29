# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased](https://github.com/jeffersongoncalves/filament-faq/commits/2.x/compare/2.0.0...2.x)

### Added

- `FilamentFaqPlugin` with `CategoryResource` and `FaqResource` for Filament v4.
- Translatable `name`/`question`/`answer` fields via `jeffersongoncalves/filament-translatable`.
- Config-based resource overrides (`filament-faq.resources.category` / `.faq`) and navigation group.

## [2.0.0](https://github.com/jeffersongoncalves/filament-faq/commits/2.x/compare/2.x...2.0.0) - 2026-08-29

Filament v4 support — initial release. Admin CRUD for jeffersongoncalves/laravel-faq: FaqCategory and Faq resources with translatable question/answer/name fields via jeffersongoncalves/filament-translatable.
