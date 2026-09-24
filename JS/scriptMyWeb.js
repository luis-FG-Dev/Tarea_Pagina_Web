const wrapper = document.querySelector('.login-form');
const loginBtn = document.querySelector('.btnLogin-primary');
const closeIcon = document.querySelector('.icon-close');

loginBtn.addEventListener('click', () => {
    wrapper.classList.add('active-popup');
});

closeIcon.addEventListener('click', () => {
    wrapper.classList.remove('active-popup');
});