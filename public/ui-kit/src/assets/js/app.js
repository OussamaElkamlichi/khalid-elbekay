// Toggle menu
document.getElementById("toggle-menu").addEventListener("click", function(){
  var mobileMenu = document.getElementById("mobile-menu-2");
  mobileMenu.classList.toggle("block");
  if (mobileMenu.classList.contains('block')) {
    mobileMenu.classList.remove("hidden");
  }else{
    mobileMenu.classList.add("hidden");
  }
})



document.querySelectorAll(".dropdown").forEach(function (item) {
  item.querySelectorAll(".dropdown-toggle").forEach(function (subitem) {
      subitem.addEventListener("click", function (event) {
          subitem.classList.toggle("block");
          if (subitem.classList.contains("block") != true) {
              item.querySelector(".dropdown-menu").classList.remove("block")
              item.querySelector(".dropdown-menu").classList.add("hidden")
          } else {
              dismissDropdownMenu()
              item.querySelector(".dropdown-menu").classList.add("block")
              item.querySelector(".dropdown-menu").classList.remove("hidden")
              if (item.querySelector(".dropdown-menu").classList.contains("block")) {
                  subitem.classList.add("block")
              } else {
                  subitem.classList.remove("block")
              }
              event.stopPropagation();
          }
      });
  });
});

function dismissDropdownMenu() {
  document.querySelectorAll(".dropdown-menu").forEach(function (item) {
      item.classList.remove("block")
      item.classList.add("hidden")
  });
  document.querySelectorAll(".dropdown-toggle").forEach(function (item) {
      item.classList.remove("block")
  });
}

window.addEventListener('click', function (e) {
  dismissDropdownMenu();
});


// app.js

class App {
    init() {
        const html = document.querySelector("html");
        const toggletheme = document.querySelector("#toggle-theme");
        const togglethemeicon = toggletheme?.querySelector("i");

        // Retrieve theme from localStorage
        const savedTheme = localStorage.getItem("theme") || "light";
        if (savedTheme === "dark") {
            html.classList.add("dark");
            document.body.setAttribute("data-layout-mode", "dark");
            togglethemeicon.className = "ti ti-moon top-icon"; // Set icon to moon
        } else {
            html.classList.remove("dark");
            document.body.setAttribute("data-layout-mode", "light");
            togglethemeicon.className = "ti ti-sun top-icon"; // Set icon to sun
        }

        toggletheme?.addEventListener("click", () => {
            const isDark = html.classList.toggle("dark");
            document.body.setAttribute("data-layout-mode", isDark ? "dark" : "light");

            // Save the theme in localStorage
            localStorage.setItem("theme", isDark ? "dark" : "light");

            // Update the button icon
            togglethemeicon.className = `ti ti-${isDark ? "moon" : "sun"} top-icon`;
        });
    }
}

window.addEventListener("DOMContentLoaded", function () {
    new App().init();
});


// modal.js



class Menu {

    init() {
        if (document.querySelectorAll(".navbar").length) {
            document.querySelectorAll('.navbar li a').forEach(function (element, index) {
                var pageUrl = window.location.href.split(/[?#]/)[0];
                if (!pageUrl.includes('.html')) {
                    pageUrl = pageUrl + "index.html";
                }
                if (element.href === pageUrl) {
                    const target = element;
                    target.classList.add('active');
                    target.parentNode.parentNode.classList.add('active'); // add active to li of the current link
                    target.parentNode.parentNode.parentNode.parentNode.classList.add('active');
                    target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.classList.add('active');
                }
            });

        }
    }
}

new Menu().init();



