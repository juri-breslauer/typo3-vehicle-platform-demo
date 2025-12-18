# TYPO3 Vehicle Platform Demo

This repository contains a demo project built with **TYPO3 CMS** to showcase
custom extension development, backend architecture and automotive domain modelling.

The project simulates a small **vehicle and spare parts platform** and is intended
as a **public code sample** for TYPO3 / PHP backend development.

---

## Kurzbeschreibung (DE)

Dieses Repository enthält ein Demo‑Projekt auf Basis von **TYPO3 CMS**.
Es dient als öffentliches Codebeispiel zur Demonstration von:

- TYPO3‑Extension‑Entwicklung
- sauberer Backend‑Architektur mit PHP
- Datenmodellierung im Automotive‑Umfeld
- API‑ und integrationsfreundlichem Design
- professionellem lokalen Entwicklungs‑Setup mit Docker

Das Projekt bildet exemplarisch eine kleine Fahrzeug‑ und Ersatzteil‑Plattform ab
und ist **nicht für den produktiven Einsatz** vorgesehen.

---

## Features

- TYPO3 CMS (v12 LTS)
- Eigene TYPO3‑Extension: `vehicle_catalog`
- Domain‑Modelle für Fahrzeuge und Ersatzteile
- Beispielhafte Logik für Aggregation und Analogsuche
- Fluid Templates für die Frontend‑Ausgabe
- Docker‑basiertes lokales Entwicklungs‑Setup
- Composer‑basierte TYPO3‑Installation

---

## Tech Stack

- PHP 8.2
- TYPO3 CMS 12 LTS
- MariaDB
- NGINX
- Docker & Docker Compose
- Composer

---

## Project Structure

```
typo3-vehicle-platform-demo/
├─ docker/
├─ typo3conf/ext/vehicle_catalog/
├─ web/
├─ config/
├─ docs/
├─ composer.json
├─ README.md
└─ .env.example
```

---

## Local Development Setup

### Prerequisites

- Docker
- Docker Compose

### Environment Configuration

```bash
cp .env.example .env
docker compose -f docker/docker-compose.yml --env-file .env up -d --build
docker compose -f docker/docker-compose.yml exec php bash
composer install
```

### Docker & Extension registration

```bash
docker compose -f docker/docker-compose.yml --env-file .env up -d
docker compose -f docker/docker-compose.yml exec php bash

composer require juri-breslauer/vehicle-platform:@dev
composer dump-autoload

vendor/bin/typo3 extension:activate vehicle_platform
vendor/bin/typo3 cache:flush

---

## Access

- Frontend: http://localhost:80
- TYPO3 Backend: http://localhost:80/typo3


## License

MIT License
