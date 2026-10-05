# Architecture

CVEGuard is three cooperating repos:

```
GHSA / OSV data ──▶ seeder (Go) ──▶ MySQL ◀── cveguard-server (Laravel)
                                         │        ▲
                                         └────────┤ REST sync
                                                  │
                                         cveguard-client (Go CLI)
                                                  │
                                       package-lock.json (your project)
```

- **Seeder** downloads the GitHub Security Advisory archive, parses GHSA JSON (OSV format),
  filters to npm, and upserts `introduced`/`fixed` ranges idempotently.
- **Server** stores projects, their dependencies, and matches `introduced <= installed < fixed`
  using semver comparators; emails/app notifications follow.
- **Client** runs inside a project, reads `package-lock.json`, walks `dependencies` and
  `devDependencies`, resolves constraints, and syncs with the server.

Design notes:
- Modular — each component evolves independently.
- Self-hosted: no external SaaS dependency.
- Known limitations (from the report): npm-only for now; scan API is unauthenticated by design.
