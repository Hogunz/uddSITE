<x-guest-layout>

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="events" class="events" style="height:100vh;width:100%;">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 class="text-sm-center">POST TABLE</h2>
                </div>
                <div class="table-responsive-sm">
                    <a href="{{ route('events.create') }}" type="button" class="btn btn-success mb-3">Create</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <th scope="row">{{ $event->id }}</th>
                                    <td>{{ $event->name }}</td>
                                    <td>
                                        <a href="{{ route('event.show', ['event' => $event->id]) }}"
                                            class="btn btn-primary">Show</a>
                                        <a href="{{ route('events.edit', ['event' => $event->id]) }}"
                                            class="btn btn-success">Edit</a>
                                        <form action="{{ route('events.destroy', $event) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section><!-- End Testimonials Section -->
    </main><!-- End #main -->
</x-guest-layout>
