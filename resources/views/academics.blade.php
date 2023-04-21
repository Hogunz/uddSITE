<x-guest-layout>
    <main id="main">

        <!-- ======= portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Academics</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">ALL</li>
                            <li data-filter=".filter-app">BS COMPUTER SCIENCE</li>
                            <li data-filter=".filter-card">BS INFORMATION TECHNOLOGY</li>
                        </ul>
                    </div>
                </div>
                <!-- BSIT -->
                <div class="row portfolio-container">
                    <div class=" portfolio-item filter-card">
                        <div class="">
                            <h1>
                                BSIT Program Description
                            </h1>
                            <p class="text-justify">BS Computer Science is a 4-year course that produces graduates
                                with the computing
                                concepts and theories, algorithmic foundations and new developments in computing.
                                The program prepares students to design and create algorithmically complex software
                                and develop new and effective algorithms for solving computing problems.
                            </p>
                            <p>
                                The program also includes the study of the standards and practices in Software
                                Engineering. It Prepares students to acquire skills and disciplines required for
                                designing, writing and modifying software components, modules and applications that
                                comprise software solutions.
                            </p>
                            <p class="font-weight-bold">Program Outcomes:
                            </p>
                            <p class="">A graduate of Bachelor of Science in Computer Science must be able to:
                                <li>Develop and implement software applications using various programming languages and
                                    tools.</li>
                                <li>Design and develop websites and web applications using front-end and back-end
                                    technologies.</li>
                                <li>Analyze complex business problems and design effective solutions using information
                                    technology.</li>
                                <li>Use database management systems to store, organize, and retrieve data efficiently.
                                </li>
                                <li>Configure and manage computer networks and network security protocols.</li>
                                <li>Understand and apply principles of data structures and algorithms to solve problems
                                    in
                                    computer science.</li>
                                <li>Collaborate with other professionals to develop and manage technology projects.
                                </li>
                                <li>Analyze data and apply statistical and mathematical models to derive insights and
                                    inform
                                    decision-making.</li>
                                <li>Develop and implement mobile applications for various platforms and devices.</li>
                                <li>Communicate technical information clearly and effectively to both technical and
                                    non-technical audiences.</li>
                            </p>
                            <p class="font-weight-bold">Career Opportunities:
                                <li>Software Developer/Engineer</li>
                                <li>Web Developer/Designer</li>
                                <li>Database Administrator/Analyst
                                </li>
                                <li>Network Administrator/Engineer
                                </li>
                                <li>Cybersecurity Analyst</li>
                                <li>IT Project Manager</li>
                                <li>IT Consultant
                                </li>
                                <li>Data Scientist</li>
                                <li>Systems Analyst.</li>
                                <li>Mobile Application Developer</li>
                            </p>
                            <!-- ======= Testimonials Section ======= -->
                            <section id="testimonials" class="testimonials">
                                <div class="container">

                                    <div class="section-title">
                                        <h2>Testimonials</h2>
                                        <p>Testimonials for both graduate and non-graduate individuals in the field of
                                            Information Technology (IT) can serve as powerful tools to showcase their
                                            skills, experience, and achievements.</p>
                                    </div>

                                    <div class="testimonials-slider swiper">
                                        <div class="swiper-wrapper">
                                            @foreach ($testimonials as $testimonial)
                                                <div class="swiper-slide">
                                                    <div class="testimonial-item">
                                                        <div
                                                            class="d-flex flex-row justify-content-center bd-highlight mb-3">
                                                            <div class="p-2 bd-highlight">
                                                                <img src="{{ asset('storage/' . $testimonial->image) }}"
                                                                    class="testimonial-img ">
                                                            </div>
                                                            <div class="p-2 bd-highlight">
                                                                <h3>{{ $testimonial->name }}</h3>
                                                                <h4>{{ $testimonial->course }}</h4>
                                                                <h4>{{ $testimonial->latin }}</h4>
                                                                <h4>{{ $testimonial->position }}</h4>
                                                                <h3>{{ $testimonial->place }}</h3>
                                                            </div>
                                                        </div>



                                                        <p>
                                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                            {!! $testimonial->content !!}
                                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                                        </p>
                                                    </div>
                                                </div><!-- End testimonial item -->
                                            @endforeach
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>
                            </section><!-- End Testimonials Section -->
                        </div>
                    </div>

                    <!-- BSCS -->
                    <div class=" portfolio-item filter-app">

                        <div class="">
                            <h1>
                                BSCS Program Description
                            </h1>
                            <p class="text-justify">BS Computer Science is a 4-year course that produces graduates
                                with the computing
                                concepts and theories, algorithmic foundations and new developments in computing.
                                The program prepares students to design and create algorithmically complex software
                                and develop new and effective algorithms for solving computing problems.
                            </p>
                            <p>
                                The program also includes the study of the standards and practices in Software
                                Engineering. It Prepares students to acquire skills and disciplines required for
                                designing, writing and modifying software components, modules and applications that
                                comprise software solutions.
                            </p>
                            <p class="font-weight-bold">Program Outcomes:
                            </p>
                            <p class="">A graduate of Bachelor of Science in Computer Science must be able to:
                                <li>Articulate the computing theories, principles and knowledge domain to address
                                    real-world
                                    problems.</li>
                                <li>Conduct research and determine the latest developments in the specific field of
                                    practice.</li>
                                <li>Work effectively with teams and communicate orally and in writing.</li>
                                <li>Understand computing problems, define the requirements to design an appropriate
                                    solution.</li>
                                <li>Develop computing solutions utilizing modern computing tools.</li>
                                <li>Demonstrate professional, social and ethical responsibility.</li>
                                <li>Engage in independent learning for continual development as a computing
                                    professional.
                                </li>
                            </p>
                            <p class="font-weight-bold">Career Opportunities:
                                <li>Software Developer/Engineer</li>
                                <li>Data Scientist</li>
                                <li>Computer Systems Analyst
                                </li>
                                <li>Web Developer/Designer
                                </li>
                                <li>Cybersecurity Analyst</li>
                                <li>Database Administrator/Analyst</li>
                                <li>Network Administrator/Engineer
                                </li>
                                <li>Artificial Intelligence and Machine Learning Specialist</li>
                                <li>IT Project Manager</li>
                                <li>Technical Writer</li>
                            </p>
                            <!-- ======= Testimonials Section ======= -->
                            <section id="testimonials" class="testimonials">
                                <div class="container">

                                    <div class="section-title">
                                        <h2>Testimonials</h2>
                                        <p>Testimonials for both graduate and non-graduate individuals in the field of
                                            Computer Science (CS) can serve as powerful tools to showcase their skills,
                                            experience, and achievements.</p>
                                    </div>

                                    <div class="testimonials-slider swiper">
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide">
                                                <div class="testimonial-item">
                                                    <div
                                                        class="d-flex flex-row justify-content-center bd-highlight mb-3">
                                                        <div class="p-2 bd-highlight">
                                                            <img src="assets/img/testimonials/1.jpg"
                                                                class="testimonial-img" alt="">
                                                        </div>

                                                        <div class="p-2 bd-highlight">
                                                            <h3>Vanessa Eliscupides Yambao</h3>
                                                            <h4>BS in Computer Science 2002</h4>
                                                            <h4>Cum Laude</h4>
                                                            <h4>Bank Officer IV</h4>
                                                            <h3>Bangko Sentral ng Pilipinas</h3>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                        My journey in college is one of the best things that happened in
                                                        my life. As a person who values high-quality education and
                                                        someone who believes that God's given talent should be used to
                                                        glorify His Name, Colegio de Dagupan was my best partner then.
                                                        CdD has not only helped me succeed me to become a well-rounded
                                                        person and to thrive in an ever-changing environment. I am
                                                        honored to be part of a supportive environment where talents and
                                                        skills are valued through curricular and extracurricular
                                                        programs. I am also thankful for my outstanding collegues, who
                                                        have shared experiences with me in my adventure. I extend my
                                                        gratitude to the Arzadon family, especially to my mentor, Sir
                                                        Voltaire. His support and kindness will always stay in my heart.
                                                        This proud Dagupeña will be forever grateful to my alma mater.
                                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                                    </p>
                                                </div>
                                            </div><!-- End testimonial item -->


                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>
                            </section><!-- End Testimonials Section -->

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End portfolio Section -->

    </main><!-- End #main -->
</x-guest-layout>
