<x-guest-layout>
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 class="text-sm-center">Events</h2>
                </div>
                <div class="row my-5">
                    <div class="col-sm-8">
                        <div class="bg-white my-3">
                            <img src="https://images.unsplash.com/photo-1444703686981-a3abbc4d4fe3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                class="img-fluid w-100">
                            <div class="p-3">
                                <h2 class="">Knowledge Festival </h2>
                                <p class="" style="text-align:justify">Some placeholder text to
                                    demonstrate justified text alignment.
                                    Will you do the same for me? It's time to face the music I'm no longer your muse.
                                    Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a
                                    phoenix inside of me. Heaven is jealous of our love, angels are crying from up
                                    above. Yeah, you take me to utopia.</p><br>
                                <span> March 31, 2023 by Administrator</span>
                                <div class="text-right">
                                    <a href="">Read More</a>
                                </div>
                            </div>
                            <div class="pb-1 bg-primary"></div>
                        </div>
                    </div>
                    <div class="col-sm-4 p-4">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="row py-3  mr-2 border-bottom ">
                                <div class="col-sm-6 p-0">
                                    <img src="assets/img/knowledgefest.jpg" class="img-fluid">
                                </div>
                                <div class="col-sm-6" data-aos="fade-left">
                                    <a href=""> <span
                                            class="font-weight-bold text-sm-xs ">Hackathon</span></a><br>
                                    <span><i class="fa-regular fa-user text-dark"></i> Administrator</span><br>
                                    <span><i class="fa-regular fa-calendar text-dark"></i> 2023-03-29<p>
                                        </p></span>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->
    </main><!-- End #main -->
</x-guest-layout>
