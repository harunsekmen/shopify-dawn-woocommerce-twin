<?php
declare(strict_types=1);

namespace DawnTwin;

defined('ABSPATH') || exit;

final class VariantPills {
    public function register(): void {
        // Enqueue variant pills helper for product options
        add_filter('woocommerce_dropdown_variation_attribute_options_html', [$this, 'convert_dropdown_to_pills'], 10, 2);
    }

    public function convert_dropdown_to_pills(string $html, array $args = []): string {
        if (empty($html)) {
            return $html;
        }

        preg_match_all('/<option[^>]*value=["\']([^"\']+)["\'][^>]*>(.*?)<\/option>/is', $html, $matches, PREG_SET_ORDER);
        if (empty($matches)) {
            return $html;
        }

        $attribute = isset($args['attribute']) ? esc_attr($args['attribute']) : '';
        $pills_html = '<div class="dawn-swatch-pills" data-attribute="' . $attribute . '">';
        foreach ($matches as $match) {
            $val = esc_attr($match[1]);
            $label = esc_html(trim(strip_tags($match[2])));
            if ($val === '') {
                continue;
            }
            $pills_html .= sprintf(
                '<button type="button" class="dawn-pill-btn" data-value="%s">%s</button>',
                $val,
                $label
            );
        }
        $pills_html .= '</div>';

        return $pills_html . $html;
    }
}
