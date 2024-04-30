        <!-- Blog Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h6 class="section-title bg-white text-center text-primary px-3">Blog</h6>
                    <h1 class="mb-5">Latest News</h1>
                </div>
                <div class="row">
                    <!-- Blog Posts -->
                    <div class="col-lg-8">
                        <!-- Blog Post 1 -->
                        @foreach($artikel as $artikel)
                        <div class="card mb-4">
                            <div class="card-img-top">
                                <img src="{{ asset('storage/artikel_images/' . $artikel->gambar) }}" alt="Blog Post Image" style="object-fit: cover; height: 300px;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $artikel->judul }}</h5>
                                <p class="card-text">{{ $artikel->isi }}</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
        <!-- Blog End -->
        <!-- Testimonial End -->
