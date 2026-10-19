<?php
declare(strict_types=1);

namespace DawnTwin;

defined('ABSPATH') || exit;
?>
<div class="wrap dawn-admin-wrap">
    <h1><?php esc_html_e('DawnTwin: Shopify-Style WooCommerce Engine', 'dawn-twin'); ?></h1>
    <p class="description">
        <?php esc_html_e('Replicates Shopify’s iconic Dawn design system, instant AJAX drawer cart, and fluid UX on top of WooCommerce with 0% transaction fees.', 'dawn-twin'); ?>
    </p>

    <div class="dawn-admin-grid" style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px; margin-top: 20px;">
        <div class="dawn-main-col">
            <div class="postbox" style="padding: 24px;">
                <h2 style="margin-top: 0; font-size: 16px;"><?php esc_html_e('Shopify Migration & Cost Savings Engine', 'dawn-twin'); ?></h2>

                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 24px;">
                    <div style="background: #f0fdf4; border: 1px solid #bbf7d0; border-left: 4px solid #16a34a; padding: 16px; border-radius: 6px;">
                        <span style="font-size: 26px; font-weight: 800; color: #16a34a; display: block;">0.0%</span>
                        <span style="font-size: 12px; color: #4b5563; font-weight: 600;"><?php esc_html_e('Platform Transaction Fees', 'dawn-twin'); ?></span>
                    </div>

                    <div style="background: #eff6ff; border: 1px solid #bfdbfe; border-left: 4px solid #2563eb; padding: 16px; border-radius: 6px;">
                        <span style="font-size: 26px; font-weight: 800; color: #2563eb; display: block;">$0 / mo</span>
                        <span style="font-size: 12px; color: #4b5563; font-weight: 600;"><?php esc_html_e('Recurring App Subscriptions', 'dawn-twin'); ?></span>
                    </div>

                    <div style="background: #faf5ff; border: 1px solid #e9d5ff; border-left: 4px solid #9333ea; padding: 16px; border-radius: 6px;">
                        <span style="font-size: 26px; font-weight: 800; color: #9333ea; display: block;">100% Dawn</span>
                        <span style="font-size: 12px; color: #4b5563; font-weight: 600;"><?php esc_html_e('Shopify Design Fidelity', 'dawn-twin'); ?></span>
                    </div>
                </div>

                <h3 style="font-size: 14px;"><?php esc_html_e('Shopify vs. DawnTwin WooCommerce Comparison', 'dawn-twin'); ?></h3>
                <table class="wp-list-table widefat fixed striped">
                    <thead>
                        <tr>
                            <th><?php esc_html_e('Capability', 'dawn-twin'); ?></th>
                            <th><?php esc_html_e('Standard Shopify Store', 'dawn-twin'); ?></th>
                            <th><?php esc_html_e('DawnTwin on WooCommerce', 'dawn-twin'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong><?php esc_html_e('Monthly Platform Fee', 'dawn-twin'); ?></strong></td>
                            <td style="color: #dc2626;">$39 - $399 / month</td>
                            <td style="color: #16a34a;"><strong>$0 (Self-hosted open source)</strong></td>
                        </tr>
                        <tr>
                            <td><strong><?php esc_html_e('Payment Gateway Commission', 'dawn-twin'); ?></strong></td>
                            <td style="color: #dc2626;">Up to +2.0% extra penalty</td>
                            <td style="color: #16a34a;"><strong>0% Extra (Direct Stripe/PayPal rates)</strong></td>
                        </tr>
                        <tr>
                            <td><strong><?php esc_html_e('AJAX Drawer Cart & Free Shipping Meter', 'dawn-twin'); ?></strong></td>
                            <td>Requires $15 - $29/mo app</td>
                            <td style="color: #16a34a;"><strong>Built-in native module</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="dawn-side-col">
            <div class="postbox" style="padding: 24px; background: #121212; color: #ffffff; border-radius: 8px;">
                <h2 style="margin-top: 0; color: #ffffff; font-size: 16px;"><?php esc_html_e('Shopify to Woo Turnkey Migration', 'dawn-twin'); ?></h2>
                <p style="font-size: 13px; color: #9ca3af; line-height: 1.6;">
                    <?php esc_html_e('Migrating your store from Shopify to self-hosted WooCommerce? I handle complete product catalog transfers, customer history, payment setup, and design replication.', 'dawn-twin'); ?>
                </p>
                <div style="margin-top: 20px;">
                    <a href="https://www.upwork.com/freelancers/~01a7a8b58043e6e6d9" target="_blank" class="button button-primary" style="background: #10b981; color: #ffffff; border: none; font-weight: 700; width: 100%; text-align: center; box-sizing: border-box; padding: 10px;">
                        <?php esc_html_e('Book a Migration Project', 'dawn-twin'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

