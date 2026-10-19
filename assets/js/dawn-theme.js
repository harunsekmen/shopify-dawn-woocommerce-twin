/**
 * DawnTwin Core JS - Shopify UX Emulation Layer
 */

(function ($) {
  'use strict';

  var DawnTwin = {
    init: function () {
      this.bindCartDrawer();
      this.bindVariantPills();
    },

    bindCartDrawer: function () {
      $(document).on('click', '.dawn-cart-trigger, #cart-icon-bubble', function (e) {
        e.preventDefault();
        DawnTwin.openDrawer();
      });

      $(document).on('click', '.dawn-drawer-close-btn, #dawn-drawer-backdrop', function (e) {
        e.preventDefault();
        DawnTwin.closeDrawer();
      });

      $(document.body).on('added_to_cart', function () {
        DawnTwin.openDrawer();
      });
    },

    openDrawer: function () {
      $('#dawn-drawer-backdrop').addClass('active');
      $('#dawn-cart-drawer').addClass('active');
      $('body').addClass('dawn-drawer-open');
    },

    closeDrawer: function () {
      $('#dawn-drawer-backdrop').removeClass('active');
      $('#dawn-cart-drawer').removeClass('active');
      $('body').removeClass('dawn-drawer-open');
    },

    bindVariantPills: function () {
      $(document).on('click', '.dawn-pill', function (e) {
        e.preventDefault();
        var $pill = $(this);
        $pill.siblings().removeClass('selected');
        $pill.addClass('selected');

        var val = $pill.data('value');
        var $select = $pill.closest('.dawn-variant-wrapper').find('select');
        if ($select.length) {
          $select.val(val).trigger('change');
        }
      });
    }
  };

  $(document).ready(function () {
    DawnTwin.init();
  });
})(jQuery);

