jQuery(document).ready(function ($) {
    $(".single-product button.single_add_to_cart_button, .single-product button.single_add_to_cart_button.button.alt").after('<a href="#" class="add-request-quote-button button" rel="noopener noreferrer">Get a quote</>');

    $(".postid-7322 .yith-wcwl-add-to-wishlist, .postid-7318 .yith-wcwl-add-to-wishlist, .postid-7306 .yith-wcwl-add-to-wishlist, .postid-7311 .yith-wcwl-add-to-wishlist, .postid-7315 .yith-wcwl-add-to-wishlist  ").after('<a href="#" class="add-request-quote-button button wishlistAfter" rel="noopener noreferrer">Get a quote</>');
        

    

    
    $(".add-request-quote-button").after('<a href="javascript:void(0);"" class="callback" rel="noopener noreferrer">Get a Call Back</>');
    $(".add-to-wishlist-7235").before('<a href="http://canpromos.ca/request-a-quote/" target="_blank" class="add-request-quote-button button" style="margin-bottom:30px;display: block;" rel="noopener noreferrer">Get a quote</a>');
    $(".woocommerce-cart .checkout-button").before('<a href="http://canpromos.ca/shop/" class="fusion-button button-default fusion-button-default-size button fusion-update-cart" style="margin-top:10px;margin-bottom:0px;display: block;" rel="noopener noreferrer">Continue Shopping</a>');
    $(".home .add_to_cart_button").hide();
    $(".tax-product_cat .fusion-page-title-captions").after("<h2 class='heading-new'>Custom Designed Wholesale Promotional Products For Your Business!</h2>");
    $('input#gform_submit_button_3').click(function (e) {
        $('button.single_add_to_cart_button').trigger("click");
        console.log('send btn pushed');
    });
    $('button.single_add_to_cart_button').click(function (e) {
        console.log('buy btn pushed.');
    });
    $('.logged-out .yith-wcwl-add-button.show, .show_details_button').hide();
    $('.blog .fusion-page-title-bar').after("<div class=\"container\"><div class=\"fusion-row-new-text\"><p>Learn the best ways to market your brand with the use of promotional marketing products. Our blog gives you the best tips on ordering the right branded merchandise to increase brand awareness within your target market & budget. From creative marketing ideas to case studies of how others have used promotional items to promote their brand, we give you clear direction in aligning your promotional product campaign with your overall business goals.</p></div></div>")
});