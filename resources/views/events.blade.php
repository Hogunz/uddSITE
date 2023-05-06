<!-- ======= About Section ======= -->
<section id="events" class="events">

    <div class="container">
        <div class="section-title">
            <h2 class="text-sm-center">Events</h2>
        </div>

        <div class="row row-cols-1 row-cols-md-3">

            @foreach ($events->shuffle()->take(6) as $event)
                <div class="card-group col mb-4">
                    <div class="card ">
                        <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid img-thumbnail">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('event.show', $event->id) }}"> <span
                                        class="font-weight-bold text-sm-xs text-primary ">{{ $event->name }}</span></a>
                            </h5>
                            <p>{{ $event->user->name }} <span>{{ $event->created_at }}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div>
                <a class="btn btn-primary " href="/events" role="button">Show More</a>
            </div>
        </div>
    </div>
</section><!-- End Testimonials Section -->
