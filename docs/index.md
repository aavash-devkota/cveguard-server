# CVEGuard

A centralized vulnerability management system for developers: find, prioritize, and fix
security vulnerabilities in JavaScript/npm dependencies.

- **Server** (this repo) — Laravel web app: projects, dependency sync, vulnerability views
- **Client** — Go CLI that scans `package-lock.json` and reports to the server
- **Seeder** — Go data pipeline that populates the vulnerability database
