/*!
* Start Bootstrap - Shop Homepage v5.0.1 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project
const key = "rzp_test_XXXX00000XXXX"; //Replace it with your Test Key ID generated from the Dashboard
const amount = 400000; //in paise

window.onload = function() {
const widgetConfig = {
	"key": key,
	"amount": amount,
};
const rzpAffordabilitySuite = new RazorpayAffordabilitySuite(widgetConfig);
rzpAffordabilitySuite.render();
}