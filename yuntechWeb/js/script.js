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