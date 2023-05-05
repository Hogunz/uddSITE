<x-guest-layout>
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="events" class="events">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-8 ">
                        <div class="bg-white">
                            <div class="">
                                <a href="{{ route('events.index') }}">Go Back</a>
                            </div>
                            <h2 class="">{{ $event->name }}</h2>
                            <p class="text-sm">{{ $event->created_at }} by {{ $event->user->name }}</p>
                            <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->name }}"
                                class="img-fluid">
                            <p class="text-justify">{!! $event->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->
    </main><!-- End #main -->
</x-guest-layout>
