import{j as e}from"./app-4ce5683c.js";import{BasketRow as i}from"./BasketRow-831e18f2.js";function o({products:a,signedUrl:n}){let t=0;return e.jsx("div",{className:"",children:e.jsx("div",{className:"sso-checkout-container js-sso-checkout-experiment",children:e.jsx("section",{"data-analytics-page-id":"shopping cart page","data-view":"cartPage",className:"page-section js-adi-data-wrapper adi-variant-2",children:e.jsx("div",{className:"grid-container",children:e.jsxs("section",{className:"layout -sidebar-right",children:[e.jsxs("div",{className:"layout__main-content",children:[e.jsxs("div",{className:"cart-header",children:[e.jsx("span",{className:"cart-header__left",children:e.jsx("a",{className:"btn js-cart__continue-shopping","data-google-analytics-placement":"top","data-position":"top",href:"/shop",children:e.jsx("font",{children:e.jsx("font",{children:"به خرید ادامه دهید"})})})}),e.jsx("span",{className:"cart-header__summary  is-hidden-desktop",children:"You have 1 item in your cart"}),e.jsxs("form",{className:"cart-header__right",action:"/cart/clear",acceptCharset:"UTF-8",method:"post",children:[e.jsx("input",{type:"hidden",name:"authenticity_token",defaultValue:"4J1R-A3N2nqbLJPRgGyCqJJOdaoyAU4TW72Gb1WP0acn4o_zIrEXT67Rh-P9n5qBMbGrHnuiPcbcqevpUTH6yQ",autoComplete:"off"}),e.jsx("a",{className:"js-cart__empty e-btn -color-dark",href:"http://127.0.0.1:8000/basketforget",children:"خالی کردن سبد خرید"})]})]}),e.jsx("div",{className:"shopping-cart",id:"shopping-cart",children:e.jsx("div",{className:"shopping-cart__group",children:e.jsxs("article",{className:"shopping-cart__entry",children:[console.log(a),a==null?void 0:a.map(function(s){return t+=s.price,e.jsx(i,{product:s})}),e.jsxs("form",{"data-view":"cartSupportUpgrade","data-entry-id":71402733,"data-path":"/cart/71402733","data-google-analytics-payload":'{"actionData":null,"productsArray":[{"id":48947458,"name":"InFo | Personal Portfolio Resume Template","variant":"regular","category":"themeforest.net/category/site-templates/personal/virtual-business-card","brand":"crowdyflow","price":"16.00","quantity":"1","dimension14":"bundle_6month"}],"timestamp":1703049320}',action:"/cart/71402733",acceptCharset:"UTF-8",method:"post",children:[e.jsx("input",{type:"hidden",name:"_method",defaultValue:"put",autoComplete:"off"}),e.jsx("input",{type:"hidden",name:"authenticity_token",defaultValue:"4J1R-A3N2nqbLJPRgGyCqJJOdaoyAU4TW72Gb1WP0acn4o_zIrEXT67Rh-P9n5qBMbGrHnuiPcbcqevpUTH6yQ",autoComplete:"off"})]})," ",e.jsx("div",{className:"item-upgrade__error",children:"Something went wrong with your request, please try again."})]})})}),e.jsxs("footer",{className:"cart-footer is-hidden-desktop",children:[e.jsxs("div",{className:"cart-footer__subtotal",children:[e.jsx("span",{className:"t-heading -size-s -weight-normal",children:"Total:"}),e.jsxs("span",{className:"t-heading -size-l",children:["US$ ",e.jsx("span",{className:"js-item-upgrade__cart-total",children:"32"})]})]}),e.jsxs("div",{className:"cart-footer__controls",children:[e.jsx("span",{className:"cart-footer__continue",children:e.jsx("a",{className:"btn js-cart__continue-shopping","data-google-analytics-placement":"bottom","data-position":"bottom",href:"//themeforest.net/category/site-templates/personal/virtual-business-card",children:"Continue Shopping"})}),e.jsx("span",{className:"cart-footer__checkout",children:e.jsxs("form",{className:"js-cart__checkout","data-google-analytics-payload":'{"actionData":null,"productsArray":[{"id":48947458,"name":"InFo | Personal Portfolio Resume Template","variant":"regular","category":"themeforest.net/category/site-templates/personal/virtual-business-card","brand":"crowdyflow","price":"16.00","quantity":"1","dimension14":"bundle_6month"},{"id":48947458,"name":"InFo | Personal Portfolio Resume Template","variant":"regular","category":"themeforest.net/category/site-templates/personal/virtual-business-card","brand":"crowdyflow","price":"16.00","quantity":"1","dimension14":"bundle_6month"}],"timestamp":1703049320}',method:"post",action:"/checkout/from_cart/2749520554",children:[e.jsx("input",{className:"e-btn--3d -color-primary -width-full","data-disable-with":"Processing...","data-google-analytics-placement":"bottom",type:"submit",defaultValue:"Secure Checkout"}),e.jsx("input",{type:"hidden",name:"authenticity_token",defaultValue:"4J1R-A3N2nqbLJPRgGyCqJJOdaoyAU4TW72Gb1WP0acn4o_zIrEXT67Rh-P9n5qBMbGrHnuiPcbcqevpUTH6yQ",autoComplete:"off"})]})})]}),e.jsxs("div",{className:"is-hidden-tablet-and-above t-body -size-s h-mt3 h-mb0 h-text-align-center",children:["Price displayed excludes any applicable",e.jsx("a",{href:"javascript:void(0)","data-view":"modalInline","data-html":".handling-fee__information-modal","data-redirect-conditions":"{}","data-hide-close-button":"true",children:"taxes and a handling fee."}),e.jsxs("div",{className:"handling-fee__information-modal e-modal","data-view":"modalInternalControls","data-google-analytics-event-type":"handlingFee","data-google-analytics-placement":"CartTotal",children:[e.jsx("header",{className:"e-modal__header",children:"Fee"}),e.jsxs("div",{className:"e-modal__section",children:[e.jsx("div",{className:"taxes__information h-mb1",children:"Taxes will be calculated depending on location."}),e.jsxs("table",{className:"table-general -striped -light -bordered h-m0",children:[e.jsx("caption",{className:"h-mb1",children:"A handling fee is calculated per order (not per item)."}),e.jsx("thead",{children:e.jsxs("tr",{children:[e.jsx("th",{children:"Your Order"}),e.jsx("th",{children:"Handling Fee"})]})}),e.jsxs("tbody",{children:[e.jsxs("tr",{children:[e.jsx("td",{children:"Less than $10"}),e.jsx("td",{children:"$1"})]}),e.jsxs("tr",{children:[e.jsx("td",{children:"$10 - $150"}),e.jsx("td",{children:"$3"})]}),e.jsxs("tr",{children:[e.jsx("td",{children:"Above $150"}),e.jsx("td",{children:"Free"})]})]})]})]}),e.jsx("footer",{className:"e-modal__footer",children:e.jsx("div",{className:"e-modal__footer-cta -align-right",children:e.jsx("a",{className:"js-modal-close google-analytics-event e-btn--3d -color-primary -size-s",title:"Close (Esc)",href:"#","data-google-analytics-event-label":"Got it",children:"Got it"})})}),e.jsx("button",{title:"Close (Esc)",type:"button",className:"mfp-close google-analytics-event","data-google-analytics-event-label":"X button",children:"×"})]})]})]})]}),e.jsxs("aside",{className:"layout__sidebar",children:[e.jsx("div",{className:"box -radius-all is-hidden-tablet-and-below",children:e.jsxs("div",{className:"shopping-cart__checkout-primary",children:[e.jsx("h3",{className:"t-heading -size-s -weight-normal",children:e.jsx("font",{children:e.jsx("font",{children:"مجموع سبد خرید شما"})})}),e.jsxs("h4",{className:"t-heading -size-xl h-mb2",children:[e.jsxs("font",{children:[e.jsx("span",{className:"js-item-upgrade__cart-total",children:e.jsx("font",{children:t})}),e.jsx("font",{children:"تومان"})]}),e.jsx("span",{className:"js-item-upgrade__cart-total",children:e.jsx("font",{})})]}),e.jsxs("form",{className:"js-cart__checkout","data-google-analytics-payload":'{"actionData":null,"productsArray":[{"id":48947458,"name":"InFo | Personal Portfolio Resume Template","variant":"regular","category":"themeforest.net/category/site-templates/personal/virtual-business-card","brand":"crowdyflow","price":"16.00","quantity":"1","dimension14":"bundle_6month"},{"id":48947458,"name":"InFo | Personal Portfolio Resume Template","variant":"regular","category":"themeforest.net/category/site-templates/personal/virtual-business-card","brand":"crowdyflow","price":"16.00","quantity":"1","dimension14":"bundle_6month"}],"timestamp":1703049320}',method:"post",action:"/checkout/from_cart/2749520554",children:[e.jsx("font",{children:e.jsx("font",{children:e.jsx("a",{href:n,className:"e-btn--3d -color-primary -width-full -size-l",children:"رفتن به درگاه پرداخت"})})}),e.jsx("input",{type:"hidden",name:"authenticity_token",defaultValue:"4J1R-A3N2nqbLJPRgGyCqJJOdaoyAU4TW72Gb1WP0acn4o_zIrEXT67Rh-P9n5qBMbGrHnuiPcbcqevpUTH6yQ",autoComplete:"off"})]}),e.jsx("div",{className:"h-mt1",children:e.jsxs("small",{className:"t-body -size-s h-m0",children:[e.jsx("font",{children:e.jsx("font",{children:"قیمت نمایش داده شده شامل هرگونه"})}),e.jsxs("a",{href:"javascript:void(0)","data-view":"flyout","data-google-analytics-event-type":"handlingFee","data-google-analytics-placement":"CartTotal",children:[e.jsx("font",{children:e.jsx("font",{children:"مالیات قابل اجرا و هزینه رسیدگی نمی شود."})}),e.jsxs("div",{className:"js-flyout__body flyout__body",children:[e.jsx("span",{className:"flyout__triangle"}),e.jsx("div",{className:"taxes__information h-mb1",children:e.jsx("font",{children:e.jsx("font",{children:"مالیات بسته به محل محاسبه خواهد شد."})})}),e.jsx("div",{className:"handling-fee__information",children:e.jsxs("table",{className:"table-general -striped -light -bordered h-m0",children:[e.jsx("caption",{className:"h-mb1",children:e.jsx("font",{children:e.jsx("font",{children:"هزینه جابجایی به ازای هر سفارش (نه برای هر مورد) محاسبه می شود."})})}),e.jsx("thead",{children:e.jsxs("tr",{children:[e.jsx("th",{children:e.jsx("font",{children:e.jsx("font",{children:"سفارش شما"})})}),e.jsx("th",{children:e.jsx("font",{children:e.jsx("font",{children:"کارمزد"})})})]})}),e.jsxs("tbody",{children:[e.jsxs("tr",{children:[e.jsx("td",{children:e.jsx("font",{children:e.jsx("font",{children:"کمتر از 10 دلار"})})}),e.jsx("td",{children:e.jsx("font",{children:e.jsx("font",{children:"1 دلار"})})})]}),e.jsxs("tr",{children:[e.jsx("td",{children:e.jsx("font",{children:e.jsx("font",{children:"10 تا 150 دلار"})})}),e.jsx("td",{children:e.jsx("font",{children:e.jsx("font",{children:"3 دلار"})})})]}),e.jsxs("tr",{children:[e.jsx("td",{children:e.jsx("font",{children:e.jsx("font",{children:"بالای 150 دلار"})})}),e.jsx("td",{children:e.jsx("font",{children:e.jsx("font",{children:"رایگان"})})})]})]})]})})]})]})]})})]})}),e.jsx("div",{className:"h-text-align-center",children:e.jsxs("span",{className:"secure-checkout-banner__body -size-m",children:[e.jsx("i",{className:"e-icon -icon-lock"}),e.jsx("font",{children:e.jsx("font",{children:"تسویه حساب ایمن"})})]})})]})]})})})})})}export{o as default};
