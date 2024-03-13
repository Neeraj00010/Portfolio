document.addEventListener("DOMContentLoaded", function() {
    var sections = document.querySelectorAll("section[id]");
    var navLinks = document.querySelectorAll(".aside .nav a");
    var offset = 200;

    window.addEventListener("scroll", function() {
        var currentScroll = window.scrollY;

        sections.forEach(function(section) {
            var sectionTop = section.offsetTop - offset;
            var sectionId = section.getAttribute("id");

            if (currentScroll >= sectionTop) {
                navLinks.forEach(function(link) {
                    if (link.getAttribute("href") === "#" + sectionId) {
                        link.classList.add("active");
                        console.log("Active link:", link.getAttribute("href"));
                    } else {
                        link.classList.remove("active");
                    }
                });
            }
        });
    });
});
