'use strict';


const addEventOnElements = function (elements, eventType, callback) {
elements.forEach(function (element) {
element.addEventListener(eventType, callback);
});
}

// Add event listener to window load event
const preloader = document.querySelector("[data-preloader]");
const onLoad = function () {
preloader.classList.add("loaded");
document.body.classList.add("loaded");
}
window.addEventListener("load", onLoad);

// Add event listener to nav toggler
const navbar = document.querySelector("[data-navbar]");
const navToggler = document.querySelector("[data-nav-toggler]");
const toggleNavbar = function () {
navbar.classList.toggle("active");
}
navToggler.addEventListener("click", toggleNavbar);

// Add event listener to scroll event
const header = document.querySelector("[data-header]");
const onScroll = function () {
if (window.scrollY > 50) {
header.classList.add("active");
} else {
header.classList.remove("active");
}
}
window.addEventListener("scroll", onScroll);

const contactForm = document.querySelector('#contact-form');

// Add event listener to the form submit button

