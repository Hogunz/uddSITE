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
                    <a href="https://www.youtube.com/watch?v=neFgfxE8cfU" class="glightbox  mb-4"
                        onclick="event.preventDefault(); GLightbox({href: this.href})"></a>
                    <a href="assets/img/c1.png" class="glightbox mb-4"
                        onclick="event.preventDefault(); GLightbox({href: this.href})"></a>
                    <a href="assets/img/c2.jpg" class="glightbox mb-4"
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
