<?php global $woocommerce; ?>
<div class="apus-topcart">
 	<div class="cart">
        <a class="dropdown-toggle mini-cart" data-toggle="dropdown" aria-expanded="true" role="button" aria-haspopup="true" data-delay="0" href="#" title="<?php esc_attr_e('View your shopping cart', 'oworganic'); ?>">
            <svg aria-hidden="true" width="24" height="24" focusable="false" data-prefix="fal" data-icon="shopping-bag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-cart"><path fill="currentColor" d="M352 128C352 57.421 294.579 0 224 0 153.42 0 96 57.421 96 128H0v304c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V128h-96zM224 32c52.935 0 96 43.065 96 96H128c0-52.935 43.065-96 96-96zm192 400c0 26.467-21.533 48-48 48H80c-26.467 0-48-21.533-48-48V160h64v48c0 8.837 7.164 16 16 16s16-7.163 16-16v-48h192v48c0 8.837 7.163 16 16 16s16-7.163 16-16v-48h64v272z" class=""></path></svg>
            <span class="count"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right"><div class="widget_shopping_cart_content">
            <?php woocommerce_mini_cart(); ?>
        </div></div>
    </div>
</div>