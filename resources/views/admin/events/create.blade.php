<x-guest-layout>
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="events" class="events">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-sm-center">Post</h2>
                </div>
                <x-auth-validation-errors></x-auth-validation-errors>
                <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data" class="border p-5">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">Title</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="image">Image</label>
                            <div class="input-group mb-3">
                                <div class="">
                                    <input type="file" accepts="images/*" name="image" class="border">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea id="summernote" name="content" class="form-control summernote"cols="30" rows="10"></textarea>
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
