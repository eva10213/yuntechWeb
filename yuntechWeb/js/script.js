document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.querySelector(".menu-toggle");
    const nav = document.querySelector("header nav ul");
    const submenuItems = document.querySelectorAll(".has-submenu > a");

    // 切换主菜单显示
    toggleButton.addEventListener("click", function () {
        if (nav.style.display === "block") {
            nav.style.display = "none";
        } else {
            nav.style.display = "block";
        }
    });

    // 切换子菜单显示
    submenuItems.forEach(item => {
        item.addEventListener("click", function (e) {
            e.preventDefault();
            const submenu = this.nextElementSibling;
            if (submenu.style.display === "block") {
                submenu.style.display = "none";
            } else {
                submenu.style.display = "block";
            }
        });
    });
});

function insertText (text){
    var textarea = document.getElementById('content');
    var cursor = textarea.selectionStart;
    var textBefore = textarea.value.substring(0,cursor);
    var textAfter = textarea.value.substring(cursor);
   
    textarea.value = textBefore + text + textAfter;
    textarea.selectionStart = textarea.selectionEnd = cursor + text.length ;
    textarea.focus();
}