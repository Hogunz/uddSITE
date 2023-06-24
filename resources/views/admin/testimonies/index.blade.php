<x-guest-layout>
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="events" class="events" style="height:100vh;width:100%;">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-sm-center">POST</h2>
                </div>

                <table class="table table-hover">
                    <a href="{{ route('testimonies.create') }}" type="button" class="btn btn-success">Create</a>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Course</th>
                            <th scope="col">Latin Honor</th>
                            <th scope="col">Position</th>
                            <th scope="col">Place</th>
                            <th scope="col">Content</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonies as $testimony)
                            <tr>
                                <th scope="row"> {{ $testimony->id }}</th>
                                <td class="text-truncate" style="max-width: 150px;">
                                    {{ $testimony->name }}
                                </td>
                                <td class="text-truncate" style="max-width: 150px;">
                                    {{ $testimony->course }}
                                </td>
                                <td class="text-truncate" style="max-width: 150px;">
                                    {{ $testimony->latin }}
                                </td>
                                <td class="text-truncate" style="max-width: 150px;">
                                    {{ $testimony->position }}
                                </td>
                                <td class="text-truncate" style="max-width: 150px;">
                                    {{ $testimony->place }}
                                </td>
                                <td class="text-truncate" style="max-width: 150px;">
                                    {{ $testimony->content }}
                                </td>
                                <td class="d-flex gap-1">
                                    @if (!$testimony->trashed())
                                        <a href="{{ route('testimonies.edit', ['testimony' => $testimony->id]) }}"
                                            class="href">
                                            <button type="button" class="btn btn-success ">Edit</button>
                                        </a>
                                        <form action="{{ route('testimonies.destroy', $testimony) }}" method="post"
                                            class="">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                                        </form>
                                    @else
                                        <a href="{{ route('testimonies.restore', $testimony) }}" class="href">
                                            <button type="button" class="btn btn-info">Restore</button>
                                        </a>
                                    @endif
                                    <form action="{{ route('testimonies.forceDelete', $testimony) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-warning">Delete Permanently</button>
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
