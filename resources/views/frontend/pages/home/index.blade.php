
<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.section.link')
    <!-- end inject -->
</head>
<body>

<!-- start css load-loader -->
@include('frontend.section.preloader')
<!-- end css load-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
@include('frontend.section.header')
<!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!--================================
         START HERO AREA
=================================-->
{{-- @include('frontend.section.hero') --}}
<!-- end hero-area -->
<!--================================
        END HERO AREA
=================================-->

<!--======================================
        START FEATURE AREA
 ======================================-->
{{-- @include('frontend.section.feature') --}}
<!-- end feature-area -->
<!--======================================
       END FEATURE AREA
======================================-->

<!--======================================
        START CATEGORY AREA
======================================-->
{{-- @include('frontend.section.category') --}}
<!-- end category-area -->
<!--======================================
        END CATEGORY AREA
======================================-->

<!--======================================
        START COURSE AREA
======================================-->
{{-- @include('frontend.section.course-area-first') --}}
<!-- end courses-area -->
<!--======================================
        END COURSE AREA
======================================-->

<!--======================================
        START COURSE AREA
======================================-->
{{-- @include('frontend.section.course-area') --}}
<!-- end courses-area -->
<!--======================================
        END COURSE AREA
======================================-->

<!-- ================================
       START FUNFACT AREA
================================= -->
{{-- @include('frontend.section.fun-fact') --}}
<!-- end funfact-area -->
<!-- ================================
       START FUNFACT AREA
================================= -->

<!--======================================
        START CTA AREA
======================================-->
{{-- @include('frontend.section.cta') --}}
<!-- end cta-area -->
<!--======================================
        END CTA AREA
======================================-->

<!--================================
         START TESTIMONIAL AREA
=================================-->
{{-- @include('frontend.section.testmonial') --}}
<!-- end testimonial-area -->
<!--================================
        END TESTIMONIAL AREA
=================================-->

{{-- <div class="section-block"></div> --}}

<!--======================================
        START ABOUT AREA
======================================-->
{{-- @include('frontend.section.about') --}}
<!-- end about-area -->
<!--======================================
        END ABOUT AREA
======================================-->

{{-- <div class="section-block"></div> --}}

<!--======================================
        START REGISTER AREA
======================================-->
{{-- @include('frontend.section.register-area') --}}
<!-- end register-area -->
<!--======================================
        END REGISTER AREA
======================================-->

{{-- <div class="section-block"></div> --}}

<!-- ================================
       START CLIENT-LOGO AREA
================================= -->
{{-- @include('frontend.section.client-logo') --}}
<!-- end client-logo-area -->
<!-- ================================
       START CLIENT-LOGO AREA
================================= -->

<!-- ================================
       START BLOG AREA
================================= -->
{{-- @include('frontend.section.blog') --}}
<!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= -->

<!--======================================
        START GET STARTED AREA
======================================-->
{{-- @include('frontend.section.get-started') --}}
<!-- end get-started-area -->
<!-- ================================
       START GET STARTED AREA
================================= -->

<!--======================================
        START SUBSCRIBER AREA
======================================-->
{{-- @include('frontend.section.subscribe') --}}
<!-- end subscriber-area -->
<!--======================================
        END SUBSCRIBER AREA
======================================-->

<!-- ================================
         END FOOTER AREA
================================= -->
{{-- @include('frontend.section.footer') --}}
<!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->

{{-- @include('frontend.section.tooltip') --}}

@include('frontend.section.script')
</body>
</html>