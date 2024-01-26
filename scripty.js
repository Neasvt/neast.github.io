// script.js

// ... 其他JavaScript代码 ...

// 获取关于我们页面中的元素
var aboutSection = document.querySelector('.about-section');

// 添加一些交互功能，例如显示/隐藏联系方式
function toggleContact() {
    var contact = document.getElementById('contact');
    contact.style.display = contact.style.display === 'block' ? 'none' : 'block';
}

// 添加一个按钮来触发这个功能
var contactButton = document.getElementById('contact-button');
contactButton.addEventListener('click', toggleContact);

// 返回主页的函数
function returnToHome() {
    location.href = 'index.html';
}

// ... 其他JavaScript代码 ...
