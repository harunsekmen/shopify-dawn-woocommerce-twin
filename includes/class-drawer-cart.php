<?php
declare(strict_types=1);

namespace DawnTwin;

defined('ABSPATH') || exit;

final class DrawerCart {
    public function register(): void {
        add_action('wp_footer', [$this, 'render_dawn_drawer_markup']);
        add_filter('woocommerce_add_to_cart_fragments', [$this, 'filter_fragments']);
    }

    public function render_dawn_drawer_markup(): void {
        if (is_cart() || is_checkout()) {
            return;
        }

        ?>
        <div id="dawn-drawer-backdrop" class="dawn-drawer-backdrop" aria-hidden="true"></div>
        <aside id="dawn-cart-drawer" class="dawn-cart-drawer" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e('Your cart', 'dawn-twin'); ?>">
            <div class="dawn-drawer-header">
                <h2><?php esc_html_e('Your cart', 'dawn-twin'); ?></h2>
                <button type="button" class="dawn-drawer-close-btn" aria-label="<?php esc_attr_e('Close cart', 'dawn-twin'); ?>">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M1 1L17 17M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                </button>
            </div>

            <div class="dawn-free-shipping-bar">
                <p class="dawn-free-shipping-msg">
                    <?php esc_html_e('You are eligible for free shipping!', 'dawn-twin'); ?>
                </p>
                <div class="dawn-progress-track"><div class="dawn-progress-bar" style="width: 100%;"></div></div>
            </div>

            <div class="dawn-drawer-items">
                <div class="widget_shopping_cart_content">
                    <?php woocommerce_mini_cart(); ?>
                </div>
            </div>

            <div class="dawn-drawer-footer">
                <div class="dawn-subtotal-row">
                    <span><?php esc_html_e('Estimated total', 'dawn-twin'); ?></span>
                    <span class="dawn-subtotal-amount">
                        <?php echo WC()->cart ? wp_kses_post(WC()->cart->get_cart_subtotal()) : '$0.00'; ?>
                    </span>
                </div>
                <p class="dawn-tax-notice">
                    <?php esc_html_e('Taxes, discounts and shipping calculated at checkout.', 'dawn-twin'); ?>
                </p>
                <a href="<?php echo esc_url(wc_get_checkout_url()); ?>" class="dawn-btn-checkout">
                    <?php esc_html_e('Check out', 'dawn-twin'); ?>
                </a>
            </div>
        </aside>
        <?php
    }

    public function filter_fragments(array $fragments): array {
        ob_start();
        woocommerce_mini_cart();
        $mini_cart_html = ob_get_clean();

        $fragments['div.widget_shopping_cart_content'] = '<div class="widget_shopping_cart_content">' . $mini_cart_html . '</div>';
        $fragments['span.dawn-cart-count-bubble'] = '<span class="dawn-cart-count-bubble">' . (WC()->cart ? WC()->cart->get_cart_contents_count() : 0) . '</span>';

        return $fragments;
    }
}

