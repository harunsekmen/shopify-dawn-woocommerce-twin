<?php
require_once __DIR__ . '/bootstrap.php';
require_once dirname(__DIR__) . '/includes/class-variant-pills.php';

echo "Testing DawnTwin VariantPills Component...
";

$pills = new \DawnTwin\VariantPills();
assert($pills instanceof \DawnTwin\VariantPills, "VariantPills instance check");

$html = '<select name="attribute_pa_color"><option value="red">Red</option></select>';
$converted = $pills->convert_dropdown_to_pills($html, ['attribute' => 'pa_color']);
assert(strpos($converted, 'dawn-swatch-pills') !== false, "Must convert select to swatch pills");

echo "PASS: shopify-dawn-woocommerce-twin verified.
";
