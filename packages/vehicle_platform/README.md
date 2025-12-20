# Vehicle Platform (TYPO3 Extension)

Vehicle Platform is a demo catalog extension for **TYPO3 13 LTS**, implemented following the
**canonical TYPO3 CMS approach (similar to EXT:news)**.

It provides:

- Backend CRUD for **Vehicle** records
- Frontend catalog:
  - list view at `/vehicles`
  - detail view at `/vehicles/{slug}`
- SEO-friendly URLs via site routing
- Predictable installation without magic auto-configuration

---

## Requirements

- TYPO3 **13.4 LTS**
- PHP **8.2+**
- Composer-based TYPO3 installation

---

## Installation

### 1. Install the extension

Install via Composer:

```bash
composer require juribreslauer/vehicle-platform
```

Activate the extension in the TYPO3 backend if required.

---

## Setup

### 2. Create the Vehicles page (required)

As with `EXT:news`, frontend routing in TYPO3 requires **one page container**.

Create a page in the page tree:

- **Title:** Vehicles
- **Slug:** `/vehicles`
- **Page type:** Standard

> ⚠️ This step is mandatory.
> TYPO3 frontend routes are always resolved in the context of a page.

---

### 3. Add the Vehicle Platform plugin

On the **Vehicles** page, add a content element:

```
Content Element → Plugins → Vehicle Platform
```

The plugin acts as a frontend rendering container
(similar to news list + detail).

---

## Enable Vehicle routes

To enable SEO-friendly URLs for list and detail views, routing must be enabled
via the site configuration.

### 4. Enable routing via site config

Open the site configuration file:

```
config/sites/default/config.yaml
```

Add the following import:

```yaml
imports:
  - resource: 'EXT:vehicle_platform/Configuration/SiteConfiguration/vehicle_platform.yaml'
```

> ⚠️ The `imports` section must be placed at the **top level**
> of the site configuration file (not inside `languages`, `base`, etc.).

Clear caches afterwards:

```bash
vendor/bin/typo3 cache:flush
```

---

### 5. Resulting URLs

After completing the steps above, the following URLs will be available:

```text
/vehicles
/vehicles/{slug}
```

Example:

```text
/vehicles
/vehicles/bmw-x5
```

---

## Backend usage (CRUD)

After installation, a new domain table becomes available in the backend:

```
Vehicles
```

Editors can:

- create vehicle records
- edit existing records
- delete records
- manage slugs and other fields

Backend CRUD is implemented via **TCA**
.

---

## Architecture notes

- Extbase-based CMS catalog (not application-only routing)
- Page-based frontend rendering
- Routing handled via site configuration


This is a conscious TYPO3 CMS approach, not Laravel-style routing.

---

## Development status

- TYPO3 13 LTS compatible
- Demo / portfolio extension
- Architecture aligned with real-world TYPO3 projects
