# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased](https://github.com/jeffersongoncalves/filament-faq/commits/2.x/compare/2.1.0...2.x)

### Added

- `FilamentFaqPlugin` with `CategoryResource` and `FaqResource` for Filament v4.
- Translatable `name`/`question`/`answer` fields via `jeffersongoncalves/filament-translatable`.
- Config-based resource overrides (`filament-faq.resources.category` / `.faq`) and navigation group.

## [2.1.0](https://github.com/jeffersongoncalves/filament-faq/commits/2.x/compare/2.0.0...2.1.0) - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#19)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-faq/pull/3
* chore: add Buy Me a Coffee to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-faq/pull/6
* ci: standardize update-changelog workflow (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-faq/pull/9
* chore(deps): bump the actions-deps group with 3 updates by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-faq/pull/12
* ci: standardize tests workflow (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-faq/pull/16
* feat(i18n): add translations (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-faq/pull/19

**Full Changelog**: https://github.com/jeffersongoncalves/filament-faq/compare/2.0.0...2.1.0

## [2.0.0](https://github.com/jeffersongoncalves/filament-faq/commits/2.x/compare/2.x...2.0.0) - 2026-08-29

Filament v4 support — initial release. Admin CRUD for jeffersongoncalves/laravel-faq: FaqCategory and Faq resources with translatable question/answer/name fields via jeffersongoncalves/filament-translatable.
