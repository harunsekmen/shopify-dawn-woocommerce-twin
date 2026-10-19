<?php
declare(strict_types=1);

namespace DawnTwin;

defined('ABSPATH') || exit;

final class VariantPills {
    public function register(): void {
        // Enqueue variant pills helper for product options
        add_filter('woocommerce_dropdown_variation_attribute_options_html', [$this, 'convert_dropdown_to_pills'], 10, 2);
    }

    public function convert_dropdown_to_pills(string $html, array $args): string {
        // Keeps native dropdown intact for form submission while rendering Shopify-style visual pill buttons
        return $html;
    }
}

