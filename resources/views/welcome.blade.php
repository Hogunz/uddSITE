<x-guest-layout>



    <!-- ======= Hero Section ======= -->

    <section id="hero" class="d-flex align-items-center">
        <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
            <div>
                <img src="/assets/img/logo_site.png" style="width:200px; " alt="">
            </div>
            <h1 class="text-white text-center">School of Information <br>Technology Education</h1>

            <div class="gallery-container">

                <!-- Create the button to open the lightbox gallery -->
                <a href="https://youtu.be/q8eg5CcU4zY" class="glightbox play-btn mb-4" data-glightbox="gallery"></a>

                <!-- Create the carousel of videos -->
                <div class="glightbox-carousel" data-glightbox="gallery">
                    <!-- Create the anchor tag with the "glightbox" class -->
                    <a href="assets/img/c1.png" class="glightbox mb-4"
                        onclick="event.preventDefault(); GLightbox({href: this.href})"></a>
                    <a href="assets/img/c2.jpg" class="glightbox mb-4"
                        onclick="event.preventDefault(); GLightbox({href: this.href})"></a>
                    <a href="assets/img/START-UP/1.jpg" class="glightbox mb-4"
                        onclick="event.preventDefault(); GLightbox({href: this.href})"></a>
                    <a href="assets/img/START-UP/14.jpg" class="glightbox mb-4"
                        onclick="event.preventDefault(); GLightbox({href: this.href})"></a>
                    <a href="assets/img/START-UP/8.jpg" class="glightbox mb-4"
                        onclick="event.preventDefault(); GLightbox({href: this.href})"></a>
                    <a href="assets/img/ticketing system/3.jpg" class="glightbox mb-4"
                        onclick="event.preventDefault(); GLightbox({href: this.href})"></a>
                    <a href="assets/img/ticketing system/5.jpg" class="glightbox mb-4"
                        onclick="event.preventDefault(); GLightbox({href: this.href})"></a>
                    <a href="assets/img/ticketing system/6.jpg" class="glightbox mb-4"
                        onclick="event.preventDefault(); GLightbox({href: this.href})"></a>
                    <a href="assets/img/SITE Academics/1.jpg" class="glightbox mb-4"
                        onclick="event.preventDefault(); GLightbox({href: this.href})"></a>
                    <a href="assets/img/SITE Academics/2.jpg" class="glightbox mb-4"
                        onclick="event.preventDefault(); GLightbox({href: this.href})"></a>
                    <a href="assets/img/SITE Academics/3.jpg" class="glightbox mb-4"
                        onclick="event.preventDefault(); GLightbox({href: this.href})"></a>
                    <a href="assets/img/SITE Academics/4.jpg" class="glightbox mb-4"
                        onclick="event.preventDefault(); GLightbox({href: this.href})"></a>
                </div>
            </div>


        </div>
    </section><!-- End Hero -->


</x-guest-layout>
<script>
    var lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true
    });
</script>
