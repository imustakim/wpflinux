"use strict";(self.blocksyJsonP=self.blocksyJsonP||[]).push([[36],{36:function(t,e,o){o.r(e),o.d(e,{mount:function(){return a}});var n=o(194),c=o.n(n),r=o(601),i=o.n(r);let d=!1;const a=function(){if(!c())return;const t='.ct-header-cart, .ct-shortcuts-bar [data-id="cart"]';if(d)return;d=!0,c()(document.body).on("adding_to_cart",(function(){return[...document.querySelectorAll(t)].map((function(t){t.closest(".ct-shortcuts-bar")||(t=t.firstElementChild),t.classList.remove("ct-added"),t.classList.add("ct-adding")}))})),c()(document.body).on("wc_fragments_loaded",(function(){setTimeout((function(){return i().trigger("ct:popper-elements:update")})),setTimeout((function(){return i().trigger("blocksy:frontend:init")}))})),c()(document.body).on("wc_cart_button_updated",(function(t,e){if(window.wc_add_to_cart_params&&window.wc_add_to_cart_params.i18n_view_cart_with_icon&&e&&e.length>0){const t=e[0];t.closest("[data-products]")&&(t.nextElementSibling.innerHTML=wc_add_to_cart_params.i18n_view_cart_with_icon)}})),c()(document.body).on("added_to_cart",(function(e,o,n,c,r){c=c[0],[...document.querySelectorAll(t)].map((function(t,e){let o=t;t.closest(".ct-shortcuts-bar")||(o=t.firstElementChild),o.classList.remove("ct-adding"),o.classList.add("ct-added"),e>0||document.querySelector("#ct-compare-modal.active")||document.querySelector(".quick-view-modal.active")||!(!document.body.classList.contains("single-product")&&t.querySelector('[data-auto-open*="archive"]')||document.body.classList.contains("single-product")&&t.querySelector('[data-auto-open*="product"]'))||(t.querySelector("[data-auto-open]").focusDisabled=!0,t.querySelector("[data-auto-open]").click())}))})),c()(document.body).on("removed_from_cart",(function(e,o,n,c){return[...document.querySelectorAll(t)].map((function(t){if(c)try{c[0].closest("li").parentNode.removeChild(c[0].closest("li"))}catch(t){}}))})),c()(document).on("uael_quick_view_loader_stop",(function(){i().trigger("ct:add-to-cart:quantity")})),c()(document).on("facetwp-loaded",(function(){i().trigger("ct:custom-select:init")})),c()(window).on("wpf_ajax_success",(function(){i().trigger("blocksy:frontend:init")})),c()(document).on("prdctfltr-reload",(function(){i().trigger("blocksy:frontend:init")})),setTimeout((function(){if(window.woof_mass_reinit){const t=window.woof_mass_reinit;window.woof_mass_reinit=function(){i().trigger("blocksy:frontend:init"),t()}}}),1e3);const e=function(){let t=document.querySelector(".ct-header-cart .ct-cart-content");t&&t.removeAttribute("style")};c()(document.body).on("wc_fragments_refreshed",(function(){setTimeout((function(){i().trigger("blocksy:frontend:init"),i().trigger("ct:popper-elements:update"),e()}))})),c()(document.body).on("wc_fragments_loaded",(function(){setTimeout((function(){i().trigger("blocksy:frontend:init"),i().trigger("ct:popper-elements:update"),e()}))})),c()(document.body).on("click",".remove_from_cart_button",{},(function(t){const e=t.target.closest(".woocommerce-mini-cart-item");e&&e.classList.add("processing")}))}}}]);