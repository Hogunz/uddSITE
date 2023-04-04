<x-guest-layout>

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="events" class="events" style="height:100vh;width:100%;">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 class="text-sm-center">POST TABLE</h2>
                </div>

                <table class="table table-hover">
                    <a href="{{ route('events.create') }}" type="button" class="btn btn-success">Create</a>
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
                                <th scope="row"></th>
                                <td>
                                    {{ $event->name }}
                                </td>
                                <td>
                                    <a href="" class="href">
                                        <button type="button" class="btn btn-primary">Show</button>
                                    </a>
                                    <a href="{{ route('events.edit', ['event' => $event->id]) }}" class="">
                                        <button type="button" class="btn btn-success">Edit</button>
                                    </a>
                                    <form action="{{ route('events.destroy', $event) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
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
