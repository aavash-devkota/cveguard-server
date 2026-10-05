# CVEGuard — Project Report

> A practical, detailed guide to the CVEGuard project: what it is, why it was built,
> how it is structured, and how to run it. (Non-academic format.)

## 1. Overview

CVEGuard is a **centralized vulnerability management system** for software projects.
It keeps a current database of known CVEs, scans JavaScript/npm dependencies
(`package-lock.json`), and lets developers see, prioritize, and fix vulnerable packages
from one place — a web dashboard plus a CLI.

## 2. The problem it solves

- **Manual tracking** of dependency vulnerabilities is slow and error-prone.
- **Decentralized visibility** — no single view across many projects.
- **Delayed response** between a CVE being published and a team noticing it.
- **Complex setup** of existing tools discourages adoption.

CVEGuard centralizes all of that: one CVE database, one dashboard, one CLI, and an
automated dependency sync.

## 3. Goals

1. Centralized platform to track vulnerabilities across multiple projects.
2. Keep an up-to-date CVE database, seeded from authoritative sources
   (GitHub Security Advisory Database).
3. Easy CLI integration into existing dev workflows.
4. Self-hostable (no dependence on external SaaS).

## 4. Architecture

```
┌──────────────────────────┐     ┌──────────────────────────┐
│ cveguard-vulnerabilities │────▶│     cveguard-server      │
│ seeder (Go)              │     │     (Laravel/Blade)      │
│  - downloads GHSA zips   │     │  - MySQL/SQLite          │
│  - parses GHSA JSON      │     │  - Web UI + REST API     │
│  - writes schema/rows    │     │  - projects, deps, CVEs  │
└──────────────────────────┘     └────────────▲─────────────┘
                                             │ sync (REST)
                                  ┌──────────┴─────────────┐
                                  │   cveguard-client (Go) │
                                  │  - scans package-lock  │
                                  │  - posts deps + CVEs   │
                                  └────────────────────────┘
```

### Components

| Component | Stack | Responsibility |
|---|---|---|
| `cveguard-server` | PHP 8.2, Laravel 11, Blade, Tailwind, Vite | Stores projects/dependencies/vulnerabilities; web UI; REST API |
| `cveguard-client` | Go | CLI that reads `package-lock.json` and syncs with the server |
| `cveguard-vulnerabilities-seeder` | Go | Downloads the GitHub Security Advisory DB, parses GHSA JSON, seeds MySQL |

## 5. How a user works with it

1. **Seed the database** — run the seeder once (and periodically) to populate CVEs.
2. **Add a project** in the web UI (name, repo path, ecosystems).
3. **Install the client** on a machine with Go and run it inside the project:
   ```bash
   go build -o cveguard .
   ./cveguard --project <name>
   ```
   It parses `package-lock.json`, matches dependencies to CVEs in the server, and syncs.
4. **Review in the dashboard** — per-project list of vulnerable dependencies, CVEs,
   and severities. Teams can triage and plan fixes.

## 6. Key features

- Centralized multi-project vulnerability view
- npm / `package-lock.json` dependency sync
- Seeded from the GitHub Security Advisory Database (authoritative source)
- CLI-first workflow, CI-friendly
- Self-hosted (no external SaaS dependency)
- Modular design: seeder / server / client can evolve independently

## 7. Tech stack

| Layer | Choice |
|---|---|
| Backend | Laravel 11 (PHP 8.2), Blade templates, REST API |
| Database | MySQL (via seeder/schema), SQLite for dev |
| Client | Go |
| Seeder | Go, MySQL driver, zip/JSON parsing |
| Frontend | Tailwind + Vite |
| Tests | PHPUnit (`phpunit.xml`) |

## 8. Development process

Built iteratively:

1. **Iteration 1** — core seeder: download GHSA zip, JSON parser, MySQL writes, core schema.
2. **Iteration 2** — GUI for seeding monitoring, logs, manual updates, search/query UI.
3. **Iteration 3** — polish: sorting/filtering, visualizations, performance tuning.

## 9. Testing

- Unit: authentication, project sync, vulnerability detection.
- End-to-end: add project flow, vulnerability detection flow.
- Integration: seeder ↔ server, client ↔ server sync.
- Error recovery: seeder retries, partial writes, API failure handling.

Run with `php artisan test` / `vendor/bin/phpunit` on the server repo.

## 10. Roadmap

- More ecosystems: pip, Composer, Go modules, npm audit parity
- Scheduled scans and notifications (email/Slack)
- Priority scoring and alert rules
- CI integration (GitHub Action that runs the client on each PR)

## 11. Links

- Server: https://github.com/aavash-devkota/cveguard-server
- Client: https://github.com/aavash-devkota/cveguard-client
- Seeder: https://github.com/aavash-devkota/cveguard-vulnerabilities-seeder
