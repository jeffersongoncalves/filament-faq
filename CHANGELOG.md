# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased](https://github.com/jeffersongoncalves/filament-faq/commits/1.x/compare/1.0.0...1.x)

### Added

- `FilamentFaqPlugin` with `CategoryResource` and `FaqResource` for Filament v3.
- Translatable `name`/`question`/`answer` fields via `jeffersongoncalves/filament-translatable`.
- Config-based resource overrides (`filament-faq.resources.category` / `.faq`) and navigation group.

## [1.0.0](https://github.com/jeffersongoncalves/filament-faq/commits/1.x/compare/1.x...1.0.0) - 2026-08-29

Filament v3 support — initial release. Admin CRUD for jeffersongoncalves/laravel-faq: FaqCategory and Faq resources with translatable question/answer/name fields via jeffersongoncalves/filament-translatable. Pinned to Laravel 12.x — Laravel 13 breaks at runtime against Filament v3.3.x (upstream issue, documented in README).
