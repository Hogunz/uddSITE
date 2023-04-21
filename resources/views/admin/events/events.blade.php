<x-guest-layout>
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 class="text-sm-center">Events</h2>
                </div>

                <div class="row my-5 justify-content-center">
                    <div class="col-sm-8">
                        @foreach ($events as $event)
                            <div class="bg-white my-3" data-aos="fade-right">
                                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->name }}"
                                    class="img-fluid">
                                <div class="p-3">
                                    <h2 class="">{{ $event->name }}</h2>
                                    <span class="text-sm">{{ $event->created_at }} by {{ $event->user->name }}</span>
                                    <div class="text-right">
                                        <a class="text-danger" href="{{ route('event.show', $event->id) }}">Read
                                            More</a>
                                    </div>
                                </div>
                                <div class="pb-1 bg-primary"></div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-sm-4 p-4 ">
                        @foreach ($events->shuffle()->take(5) as $event)
                            <div class="row py-3 mr-2 border-bottom">
                                <div class="col-sm-6 p-0">
                                    <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid">
                                </div>
                                <div class="col-sm-6" data-aos="fade-left">
                                    <a href="{{ route('event.show', $event->id) }}"> <span
                                            class="font-weight-bold text-sm-xs text-primary ">{{ $event->name }}</span></a><br>
                                    <span><i
                                            class="fa-regular fa-user text-dark"></i>{{ $event->user->name }}</span><br>
                                    <span><i class="fa-regular fa-calendar text-dark"></i>{{ $event->created_at }}<p>
                                        </p></span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->
    </main><!-- End #main -->
</x-guest-layout>
