document.addEventListener("DOMContentLoaded", function () {
    var acceptButton = document.getElementById("acceptButton");
    var cookieAlert = document.querySelector(".alert");

    acceptButton.addEventListener("click", function () {
        document.cookie = "cookies_accepted=true;";
        cookieAlert.style.display = "none";
    });

    if (document.cookie.split(';').some((item) => item.trim().startsWith('cookies_accepted='))) {
        cookieAlert.style.display = "none";
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var cards = document.querySelectorAll(".card");

    window.addEventListener("scroll", function () {
        cards.forEach(function (card) {
            if (isElementInViewport(card)) {
                card.classList.add("card-visible");
                card.classList.remove("card-hidden");
            } else {
                card.classList.add("card-hidden");
                card.classList.remove("card-visible");
            }
        });
    });

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
});