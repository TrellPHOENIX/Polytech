    // Scroll-fixed-top
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.getElementById('navbar_top').classList.add('fixed-top', 'container');
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top', 'container');
                document.body.style.paddingTop = '0';
            }
        });
    });
    // img-width
    jQuery(document).ready(function($) {
        $(".owl-carousel").each(function(index, el) {
            var containerHeight = $(el).height();
            $(el).find("img").each(function(index, img) {
                    var w = $(img).prop('naturalWidth');
                    var h = $(img).prop('naturalHeight');
                    $(img).css({
                        'width': Math.round(containerHeight * w / h) + 'px',
                        'height': containerHeight + 'px'
                    });
                }),
                $(el).owlCarousel({
                    autoWidth: true,
                });
        });
    });
