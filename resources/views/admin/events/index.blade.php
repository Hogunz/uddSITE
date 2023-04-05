<x-guest-layout>
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="events" class="events" style="height:100vh;width:100%;">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 class="text-sm-center">POST</h2>
                </div>

                <table class="table table-hover">
                    <a href="{{ route('events.create') }}" type="button" class="btn btn-success">Create</a>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Action</th>
                            <th scope="col">Feature</th>
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
                                    <button type="button" class="btn btn-primary">Show</button>
                                    <button type="button" class="btn btn-success">Edit</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                                <td><button type="button" class="btn btn-primary">Feature</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </section><!-- End Testimonials Section -->
    </main><!-- End #main -->
</x-guest-layout>
