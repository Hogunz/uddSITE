<x-guest-layout>
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="events" class="events">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-sm-center">Post</h2>
                </div>
                <x-auth-validation-errors></x-auth-validation-errors>
                <form action="{{ route('testimonials.update', ['testimonial' => $testimonial->id]) }}" method="post"
                    enctype="multipart/form-data" class="border p-5">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ $testimonial->name }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Image:</label>
                            <input type="file" accepts="images/*" name="image" class="border">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="course">Course</label>
                            <input type="text" name="course" class="form-control" id="course"
                                value="{{ $testimonial->course }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="latin">Latin Honor</label>
                            <input type="text" name="latin" class="form-control" id="latin"
                                value="{{ $testimonial->latin }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="position">Position</label>
                            <input type="text" name="position" class="form-control" id="position"
                                value="{{ $testimonial->position }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="place">Place</label>
                            <input type="text" name="place" class="form-control" id="place"
                                value="{{ $testimonial->place }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea id="summernote" name="content" class="form-control summernote"cols="30" rows="10">{{ $testimonial->content }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
            </div>

        </section><!-- End Testimonials Section -->
    </main><!-- End #main -->
</x-guest-layout>

<!-- Initialize Summernote -->
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>
