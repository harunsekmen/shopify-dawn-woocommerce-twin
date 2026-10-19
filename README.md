# 🛍️ DawnTwin: Shopify-Style WooCommerce Engine (Zero Fees)

[![WooCommerce HPOS Compatible](https://img.shields.io/badge/WooCommerce-HPOS%20Ready-7f54b3.svg)](https://github.com/harunsekmen/shopify-dawn-woocommerce-twin)
[![Platform Fees](https://img.shields.io/badge/Shopify%20Fees-0%25%20Commission-brightgreen.svg)](https://github.com/harunsekmen/shopify-dawn-woocommerce-twin)
[![License: GPL-3.0](https://img.shields.io/badge/License-GPL%203.0-blue.svg)](https://github.com/harunsekmen/shopify-dawn-woocommerce-twin/blob/main/LICENSE)
[![Build Status](https://img.shields.io/badge/Build-Passing-brightgreen.svg)](https://github.com/harunsekmen/shopify-dawn-woocommerce-twin/actions)

> A pixel-perfect reproduction of Shopify's modern Dawn design system and cart UX built natively on top of self-hosted WooCommerce. Zero monthly subscriptions, 0% platform transaction penalties, and 100% data ownership.

Developed and maintained by **[Harun Sekmen](https://github.com/harunsekmen)**.

---

## 🚀 Migrating from Shopify or Launching a Zero-Fee Store?
> ### **Turnkey Shopify-to-WooCommerce Migration by Harun Sekmen**
> 
> If you love Shopify's slick user experience but are tired of paying $39 - $399/month plus +2.0% transaction fee penalties and expensive app subscriptions:
> - **Full Catalog & Customer Migration**: Seamless transfer of products, variants, customer databases, and historical orders.
> - **Pixel-Perfect Dawn Replication**: Identical slide-out drawer cart, variant pills, and clean typography.
> - **Self-Hosted Cost Freedom**: Connect your direct Stripe/PayPal accounts with zero intermediary cuts.
> - **Dedicated Custom Build**: Complete turnkey setup and deployment within 7 business days.
> 
> 📩 **Book a Migration Consultation**: [Hire Harun on Upwork](https://www.upwork.com/freelancers/~01a7a8b58043e6e6d9) | Direct Email: `sekmenwp@gmail.com`

---

## ⚡ The Financial Reality: Shopify Tax vs. Self-Hosted WooCommerce

On an e-commerce brand generating $50,000 / month:
1. **Shopify Platform & App Tax**: $39/mo base + ~$280/mo in essential apps (Cart drawer, currency switcher, reviews, upsell) = **$3,800+ annually**.
2. **Third-Party Payment Penalties**: If you use external payment gateways, Shopify levies an extra **0.5% - 2.0% transaction fee penalty** = **$6,000 - $12,000 lost per year**.
3. **Vendor Lock-in**: Customizing checkout flows requires a $2,000/mo Shopify Plus plan.

**DawnTwin** bridges this gap. It provides the exact minimalist, trusted aesthetic of Shopify's flagship **Dawn** theme while running on WooCommerce core with High-Performance Order Storage (HPOS).

---

## 📸 Visual Previews & Operational Interface

### 1. Shopify Dawn Product Page Fidelity
Minimalist product presentation with native variant pill buttons, live stock status, and clean monochrome action hierarchy:

![Shopify Dawn Product Page Preview](docs/assets/shopify-dawn-storefront-hero.png)

### 2. Native Slide-Out Drawer Cart & Free Shipping Meter
Identical to Shopify's high-converting AJAX drawer. Dynamic shipping progress bar, inline item updates, and instant checkout triggers:

![Shopify Dawn Drawer Cart Preview](docs/assets/shopify-dawn-cart-drawer.png)

---

## 🛠️ Key Architectural Features

- **Shopify Dawn Design System**: Clean typography, 1px borders, subtle hover transitions, and responsive mobile-first grids.
- **Native Slide-Out AJAX Drawer Cart**: Zero-latency slide drawer with persistent session sync and free-shipping progress meter.
- **Shopify-Style Variant Pills**: Converts WooCommerce's dated dropdown selects into sleek, clickable swatch pills.
- **Zero Platform Commissions**: You keep 100% of your margins with direct gateway settlement (Stripe, PayPal, Mollie).
- **Full HPOS Compatibility**: Built with native support for WooCommerce High-Performance Order Storage (`custom_order_tables`) and Cart/Checkout Blocks.

---

## 📊 Cost & Performance Comparison

| Feature / Metric | Shopify (Dawn Theme) | DawnTwin on WooCommerce |
| :--- | :--- | :--- |
| **Monthly Software Fee** | $39 - $399 / month | **$0 / month (Open Source)** |
| **Platform Fee on Sales** | Up to +2.0% transaction cut | **0% (Direct Stripe/PayPal)** |
| **Drawer Cart App Cost** | $15 - $29 / month app | **Included natively** |
| **Checkout Customization** | Locked behind $2,000/mo Plus | **100% Open & Customizable** |
| **Hosting & Data Ownership** | Closed proprietary cloud | **Your server, your database** |

---

## 🏗️ Repository Structure

```
shopify-dawn-woocommerce-twin/
├── .github/
│   └── workflows/
│       └── ci.yml               <-- GitHub Actions syntax and linting checks
├── assets/
│   ├── css/
│   │   └── dawn-theme.css       <-- Dawn design tokens, drawer & pill styles
│   └── js/
│       └── dawn-theme.js        <-- Drawer open/close & variant pill event handlers
├── docs/
│   └── assets/                  <-- High-resolution storefront & UI previews
├── includes/
│   ├── class-admin.php          <-- WP Admin cost comparison & migration lead hook
│   ├── class-drawer-cart.php    <-- Native slide-out AJAX cart drawer
│   ├── class-engine.php         <-- Singleton lifecycle controller
│   └── class-variant-pills.php  <-- Swatch pill converter
├── templates/
│   └── admin-dashboard.php      <-- WP Admin migration comparison table
├── tests/
│   ├── run-e2e-test.js          <-- Headless Chromium E2E verification suite
│   └── store-simulation.html    <-- High-fidelity Dawn storefront showcase
├── composer.json                <-- PSR-4 autoload mapping
├── LICENSE                      <-- GPL-3.0 License
├── README.md                    <-- Technical documentation with client migration hook
└── shopify-dawn-woocommerce-twin.php <-- Main plugin entry point & metadata
```

---

## 🧪 Automated Testing & Verification

The repository includes an end-to-end headless browser test suite verifying the Dawn drawer animation, variant selection, and responsive layouts:

```bash
# Run Playwright E2E simulation suite
node tests/run-e2e-test.js
```

---

## 🚀 Installation & Quick Start

### Option 1: Git Clone
```bash
cd wp-content/plugins/
git clone https://github.com/harunsekmen/shopify-dawn-woocommerce-twin.git
```

### Option 2: WP-CLI Activation
```bash
wp plugin activate shopify-dawn-woocommerce-twin
```

---

## 📄 License

This project is open-source software licensed under the **GNU General Public License v3.0 or later (GPL-3.0-or-later)**.

