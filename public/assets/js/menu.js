const menu = document.querySelector('#menu');
const close = document.querySelector('#close');
const navigation = document.querySelector('.navigation-bar nav .links');

// navigation.addEventListener('click',()=> navigation.classList.toggle('show'));
menu.addEventListener('click',()=> navigation.classList.toggle('show'));
close.addEventListener('click',()=> navigation.classList.remove('show'));