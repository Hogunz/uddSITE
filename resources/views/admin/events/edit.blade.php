<x-guest-layout>
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 class="text-sm-center">Post</h2>
                </div>
                <x-auth-validation-errors></x-auth-validation-errors>

                <form action="{{ route('events.update', ['event' => $event->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Title:</label>
                                <input type="text" name="name" value="{{ $event->name }}" class="form-control"
                                    placeholder="Title">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Content:</label>
                                <textarea class="form-control" style="height:150px" name="content" placeholder="Detail">{{ $event->content }}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Image:</label>
                                <input type="file" accepts="images/*" name="image" class="border">
                            </div>
                        </div>
                        <div class="col-sm-12 text-center my-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
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
