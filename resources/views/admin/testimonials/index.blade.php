<x-guest-layout>
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="events" class="events" style="">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-sm-center">POST</h2>
                </div>

                <table class="table table-hover">
                    <a href="{{ route('testimonials.create') }}" type="button" class="btn btn-success">Create</a>
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
                        @foreach ($testimonials as $testimonial)
                            <tr>
                                <th scope="row"> {{ $testimonial->id }}</th>
                                <td>
                                    {{ $testimonial->name }}
                                </td>
                                <td>
                                    {{ $testimonial->course }}
                                </td>
                                <td>
                                    {{ $testimonial->latin }}
                                </td>
                                <td>
                                    {{ $testimonial->position }}
                                </td>
                                <td>
                                    {{ $testimonial->place }}
                                </td>
                                <td>
                                    {{ $testimonial->content }}
                                </td>
                                <td class="d-flex gap-1">
                                    @if (!$testimonial->trashed())
                                        <a href="{{ route('testimonials.edit', ['testimonial' => $testimonial->id]) }}"
                                            class="href">
                                            <button type="button" class="btn btn-success ">Edit</button>
                                        </a>
                                        <form action="{{ route('testimonials.destroy', $testimonial) }}" method="post"
                                            class="">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                                        </form>
                                    @else
                                        <a href="{{ route('testimonials.restore', $testimonial) }}" class="href">
                                            <button type="button" class="btn btn-info">Restore</button>
                                        </a>
                                    @endif
                                    <form action="{{ route('testimonials.forceDelete', $testimonial) }}"
                                        method="post">
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
