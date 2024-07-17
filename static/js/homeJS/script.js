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

