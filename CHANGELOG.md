# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased](https://github.com/jeffersongoncalves/filament-faq/commits/3.x/compare/3.1.0...3.x)

### Added

- `FilamentFaqPlugin` with `CategoryResource` and `FaqResource` for Filament v5.
- Translatable `name`/`question`/`answer` fields via `jeffersongoncalves/filament-translatable`.
- Config-based resource overrides (`filament-faq.resources.category` / `.faq`) and navigation group.

## [3.1.0](https://github.com/jeffersongoncalves/filament-faq/commits/3.x/compare/3.0.0...3.1.0) - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#20)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-faq/pull/1
* chore: add GitHub Sponsors to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-faq/pull/4
* ci: standardize update-changelog workflow (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-faq/pull/10
* ci: standardize dependabot config by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-faq/pull/11
* chore(deps): bump the actions-deps group with 3 updates by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-faq/pull/13
* ci: standardize tests workflow (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-faq/pull/17
* feat(i18n): add translations (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-faq/pull/20

**Full Changelog**: https://github.com/jeffersongoncalves/filament-faq/compare/3.0.0...3.1.0

## [3.0.0](https://github.com/jeffersongoncalves/filament-faq/commits/3.x/compare/3.x...3.0.0) - 2026-08-29

Filament v5 support — initial release. Admin CRUD for jeffersongoncalves/laravel-faq: FaqCategory and Faq resources with translatable question/answer/name fields via jeffersongoncalves/filament-translatable.
