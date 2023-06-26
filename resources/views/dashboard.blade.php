<x-guest-layout>

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="events" class="events">
            <div class="container">
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
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <th scope="row">{{ $event->id }}</th>
                                    <td class="text-truncate" style="max-width: 300px;">{{ $event->name }}</td>
                                    <td>{{ $event->status }}</td>
                                    <td class="d-flex">
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
                                        @if (auth()->user()->hasRole('admin'))
                                            <form action="{{ route('events.approval.change', $event) }}" method="post">
                                                @csrf
                                                @method('put')
                                                <button class="btn btn-success" name="status"
                                                    value="approved">Approve</button>
                                                <button class="btn btn-danger" name="status"
                                                    value="declined">Declined</button>
                                            </form>
                                        @endif
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
