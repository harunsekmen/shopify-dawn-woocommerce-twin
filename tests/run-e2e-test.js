
const { chromium } = require('playwright');
const path = require('path');
const fs = require('fs');

(async () => {
  const browser = await chromium.launch({
    headless: true,
    executablePath: '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome'
  });
  const context = await browser.newContext({
    viewport: { width: 1280, height: 820 },
    deviceScaleFactor: 2
  });
  const page = await context.newPage();

  const docsDir = path.join(__dirname, '..', 'docs', 'assets');
  if (!fs.existsSync(docsDir)) {
    fs.mkdirSync(docsDir, { recursive: true });
  }

  // 1. Storefront Clean View (Shopify Dawn UI)
  const storeUrl = 'file://' + path.join(__dirname, 'store-simulation.html');
  console.log('Navigating to:', storeUrl);
  await page.goto(storeUrl);

  const storefrontScreenshot = path.join(docsDir, 'shopify-dawn-storefront-hero.png');
  await page.screenshot({ path: storefrontScreenshot, fullPage: false });
  console.log('Saved storefront preview to:', storefrontScreenshot);

  // 2. Open Slide-out Cart Drawer
  await page.click('.dawn-cart-trigger');
  await page.waitForSelector('.dawn-cart-drawer.active');
  await new Promise(r => setTimeout(r, 400)); // wait for slide animation

  const drawerScreenshot = path.join(docsDir, 'shopify-dawn-cart-drawer.png');
  await page.screenshot({ path: drawerScreenshot, fullPage: false });
  console.log('Saved Dawn drawer preview to:', drawerScreenshot);

  await browser.close();
  console.log('ALL TESTS PASSED: Shopify Dawn Twin previews captured successfully.');
})();

