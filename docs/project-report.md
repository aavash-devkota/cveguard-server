# CVEGuard — Project Report

> A practical, non-academic summary of the CVEGuard project: what it is, why it was built,
> how it's structured, and what it does today.

## 1. What is CVEGuard?

CVEGuard is a centralized vulnerability management system for software projects.
It keeps an up-to-date database of known CVEs, scans project dependencies (currently
JavaScript/npm via `package-lock.json`), and gives developers a way to see which of their
dependencies are vulnerable and what to fix.

## 2. Why it exists

Manual vulnerability tracking across projects is error-prone and slow. CVEGuard
centralizes that: one database, one dashboard, one CLI, automated dependency sync.

## 3. Components

| Component | Tech | Role |
|---|---|---|
| `cveguard-server` | PHP / Laravel (Blade) | Web UI + API, stores projects/deps/vulnerabilities |
| `cveguard-client` | Go | CLI: scans `package-lock.json`, syncs with server |
| `cveguard-vulnerabilities-seeder` | Go | Populates the vulnerability database |

## 4. How it works

1. Seeder fetches CVE data into the server's database.
2. Developer adds a project in the web UI.
3. `cveguard-client` runs in the project directory, reads `package-lock.json`,
   and syncs dependency + vulnerability info to the server.
4. The web app lists vulnerabilities per project so teams can triage and fix.

## 5. Features today

- Centralized multi-project vulnerability view
- Dependency sync from `package-lock.json`
- CVE database seeded from authoritative sources
- CLI integration into dev workflows
- Web dashboard (Laravel/Blade)

## 6. Testing

The academic report covers unit tests for authentication, project sync, vulnerability
detection flow, integration tests, and error-recovery scenarios (see `phpunit.xml`).

## 7. Status & roadmap

- v1: JavaScript/npm support, centralized dashboard
- Future: more ecosystems (pip/composer/Go), scheduled scans, notifications, CI integrations

## 8. Links

- Server: https://github.com/aavash-devkota/cveguard-server
- Client: https://github.com/aavash-devkota/cveguard-client
- Seeder: https://github.com/aavash-devkota/cveguard-vulnerabilities-seeder
- Academic report: available from the author on request
