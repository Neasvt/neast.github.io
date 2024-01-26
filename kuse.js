// script.js

// script.js

// 获取搜索容器中的元素
var searchInput = document.getElementById('search');
var searchButton = document.getElementById('search-button');

// 阻止表单的默认提交行为
searchButton.addEventListener('click', function(event) {
    event.preventDefault(); // 阻止默认的提交行为
    // 在这里添加搜索逻辑
    var query = searchInput.value;
    // 假设你有一个函数来处理搜索逻辑
    handleSearch(query);
});

// ... 其他JavaScript代码 ...
    function animateButton() {
    var button = document.getElementById('myButton');
    var startScale = 1; // 按钮的初始缩放比例
    var endScale = 1.1; // 按钮最终缩放比例

    // 使用requestAnimationFrame来更新动画帧
    requestAnimationFrame(function() {
        if (startScale >= endScale) {
            // 如果当前缩放比例等于或大于最终缩放比例，停止动画
            button.style.transition = 'none'; // 移除过渡效果，防止循环
        } else {
            startScale += 0.01; // 增加缩放比例
            button.style.transform = 'scale(' + startScale + ')'; // 更新按钮的缩放比例
        }

        // 请求下一帧的动画
        requestAnimationFrame(animateButton);
    });
}

// 在页面加载完成后开始动画
window.onload = animateButton;