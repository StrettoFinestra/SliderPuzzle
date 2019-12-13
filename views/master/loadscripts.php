<!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
<div id="loader-wrapper">

    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

<!-- load JS files -->
<script src="../js/jquery-1.11.3.min.js"></script> <!-- jQuery (https://jquery.com/download/) -->
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
<!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
<script src="../js/bootstrap.min.js"></script> <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
<script src="../js/hero-slider-main.js"></script> <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->

<script>
    function adjustHeightOfPage(pageNo) {

        var offset = 80;
        var pageContentHeight = 0;

        var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

        if (pageType != undefined && pageType == "gallery") {
            pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
        } else {
            pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
        }

        if ($(window).width() >= 992) {
            offset = 120;
        } else if ($(window).width() < 480) {
            offset = 40;
        }

        // Get the page height
        var totalPageHeight = $('.cd-slider-nav').height() +
            pageContentHeight + offset +
            $('.tm-footer').height();

        // Adjust layout based on page height and window height
        if (totalPageHeight > $(window).height()) {
            $('.cd-hero-slider').addClass('small-screen');
            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
        } else {
            $('.cd-hero-slider').removeClass('small-screen');
            $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
        }
    }

    /*
        Everything is loaded including images.
    */
    $(window).load(function () {

        adjustHeightOfPage(1); // Adjust page height

        /* Collapse menu after click 
        -----------------------------------------*/
        $('#tmNavbar a').click(function () {
            $('#tmNavbar').collapse('hide');

            adjustHeightOfPage($(this).data("no")); // Adjust page height       
        });

        /* Browser resized 
        -----------------------------------------*/
        $(window).resize(function () {
            var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");

            // wait 3 seconds
            setTimeout(function () {
                adjustHeightOfPage(currentPageNo);
            }, 1000);

        });

        // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
        $('body').addClass('loaded');

    });
</script>