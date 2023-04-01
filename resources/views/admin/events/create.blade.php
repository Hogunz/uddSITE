<x-guest-layout>
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 class="text-sm-center">Post</h2>
                </div>
                <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data" class="border p-5">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input type="name" class="form-control" id="title">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="image">Image</label>
                            <div class="input-group mb-3">
                                <div class="">
                                    <input type="file" accepts="images/*" name="image" class="border">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="content">Content</label>

                            <textarea name="content"class="form-control" id="content" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
            </div>

        </section><!-- End Testimonials Section -->
    </main><!-- End #main -->
</x-guest-layout>
