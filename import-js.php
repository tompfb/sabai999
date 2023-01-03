<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides((slideIndex += n));
    }

    function currentSlide(n) {
        showSlides((slideIndex = n));
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" activess", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " activess";
    }
    var slideIndexss = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dotss = document.getElementsByClassName("dot");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dotss.length; i++) {
            dotss[i].className = dotss[i].className.replace(" activess", "");
        }
        slideIndexss++;
        if (slideIndexss > x.length) {
            slideIndexss = 1;
        }
        x[slideIndexss - 1].style.display = "block";
        dotss[slideIndexss - 1].className += " activess";
        setTimeout(carousel, 2000);
    }
</script>
<script>
    function openNav() {
        document.getElementById("myNav").style.width = "80%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>
<!-- ////////////////// -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var lazyloadImages;

        if ("IntersectionObserver" in window) {
            lazyloadImages = document.querySelectorAll(".lazy");
            var imageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var image = entry.target;
                        image.src = image.dataset.src;
                        image.classList.remove("lazy");
                        imageObserver.unobserve(image);
                    }
                });
            });

            lazyloadImages.forEach(function(image) {
                imageObserver.observe(image);
            });
        } else {
            var lazyloadThrottleTimeout;
            lazyloadImages = document.querySelectorAll(".lazy");

            function lazyload() {
                if (lazyloadThrottleTimeout) {
                    clearTimeout(lazyloadThrottleTimeout);
                }

                lazyloadThrottleTimeout = setTimeout(function() {
                    var scrollTop = window.pageYOffset;
                    lazyloadImages.forEach(function(img) {
                        if (img.offsetTop < (window.innerHeight + scrollTop)) {
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                        }
                    });
                    if (lazyloadImages.length == 0) {
                        document.removeEventListener("scroll", lazyload);
                        window.removeEventListener("resize", lazyload);
                        window.removeEventListener("orientationChange", lazyload);
                    }
                }, 20);
            }

            document.addEventListener("scroll", lazyload);
            window.addEventListener("resize", lazyload);
            window.addEventListener("orientationChange", lazyload);
        }
    })
</script>