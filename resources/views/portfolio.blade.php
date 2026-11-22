
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Farrel Prima | Personal Portfolio</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar sticky-top">
        <div class="container">

            <a class="navbar-brand fw-bold" href="#home">
                FARREL<span>.</span>
            </a>

            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>

        </div>
    </nav>


    <!-- HOME -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-7 hero-content">

                    <span class="hero-label">
                        HELLO, WELCOME TO MY PORTFOLIO
                    </span>

                    <h1>
                        Hi, I'm <span>Farrel Prima.</span>
                    </h1>

                    <h3>Information Systems Student</h3>

                    <p>
                        Saya adalah mahasiswa Sistem Informasi yang
                        memiliki ketertarikan pada teknologi,
                        pengembangan website, dan desain digital.
                        Saya senang mempelajari hal baru serta
                        mengembangkan ide menjadi karya digital.
                    </p>

                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn-primary btn-lg">
                            Lihat Project <i class="bi bi-arrow-right"></i>
                        </a>

                        <a href="#contact" class="btn btn-outline-dark btn-lg">
                            Hubungi Saya
                        </a>
                    </div>

                    <div class="social-links">
                        <a href="#contact" aria-label="Email">
                            <i class="bi bi-envelope"></i>
                        </a>
                        <a href="#projects" aria-label="Projects">
                            <i class="bi bi-code-slash"></i>
                        </a>
                        <a href="#about" aria-label="About">
                            <i class="bi bi-person"></i>
                        </a>
                    </div>

                </div>

                <div class="col-lg-5 text-center mt-5 mt-lg-0">
                    <div class="profile-wrapper">
                        <div class="profile-circle">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <div class="profile-decoration"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">

            <div class="section-heading text-center">
                <span>GET TO KNOW ME</span>
                <h2>About Me</h2>
                <p>Kenali saya lebih dekat</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="about-card text-center">
                        <div class="about-icon">
                            <i class="bi bi-person-workspace"></i>
                        </div>

                        <p>
                            Halo! Saya Farrel Prima, mahasiswa Sistem
                            Informasi yang sedang mempelajari dunia
                            pengembangan aplikasi web. Saya memiliki
                            minat dalam membuat website yang menarik,
                            responsif, dan mudah digunakan.
                        </p>

                        <p>
                            Melalui proses belajar dan berbagai proyek,
                            saya terus berusaha meningkatkan kemampuan
                            dalam bidang teknologi dan desain digital.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- SKILLS -->
    <section id="skills" class="section-padding section-light">
        <div class="container">

            <div class="section-heading text-center">
                <span>WHAT I LEARN</span>
                <h2>My Skills</h2>
                <p>Teknologi yang sedang saya pelajari</p>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="skill-card">
                        <i class="bi bi-filetype-html"></i>
                        <h5>HTML</h5>
                        <p>Membangun struktur dan konten halaman website.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="skill-card">
                        <i class="bi bi-filetype-css"></i>
                        <h5>CSS</h5>
                        <p>Mengatur tampilan, warna, layout, dan desain website.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="skill-card">
                        <i class="bi bi-bootstrap"></i>
                        <h5>Bootstrap</h5>
                        <p>Membuat tampilan website responsif dengan lebih mudah.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- PROJECTS -->
    <section id="projects" class="section-padding">
        <div class="container">

            <div class="section-heading text-center">
                <span>MY RECENT WORK</span>
                <h2>Featured Projects</h2>
                <p>Beberapa proyek yang pernah saya kerjakan</p>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="project-card">
                        <div class="project-icon">
                            <i class="bi bi-globe"></i>
                        </div>

                        <div class="project-content">
                            <span>WEB DESIGN</span>
                            <h5>Personal Portfolio</h5>
                            <p>Website personal menggunakan HTML, CSS, dan Bootstrap.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="project-card">
                        <div class="project-icon">
                            <i class="bi bi-window"></i>
                        </div>

                        <div class="project-content">
                            <span>WEB DEVELOPMENT</span>
                            <h5>Landing Page</h5>
                            <p>Halaman website sederhana dengan desain responsif.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="project-card">
                        <div class="project-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>

                        <div class="project-content">
                            <span>PROGRAMMING</span>
                            <h5>Web Development</h5>
                            <p>Eksperimen pengembangan website menggunakan Bootstrap.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section id="contact" class="contact-section">
        <div class="container text-center">

            <span>LET'S CONNECT</span>
            <h2>Let's Work Together!</h2>

            <p>
                Terima kasih telah mengunjungi portfolio saya.
                Mari terhubung dan berbagi ide.
            </p>

            <a href="mailto:emailkamu@example.com" class="btn btn-primary btn-lg">
                <i class="bi bi-envelope"></i>
                Email Saya
            </a>

        </div>
    </section>


    <!-- FOOTER -->
    <footer class="portfolio-footer">
        <div class="container text-center">
            <h5>FARREL<span>.</span></h5>
            <p>Building ideas into digital experiences.</p>
            <small>© 2026 Farrel Prima. All Rights Reserved.</small>
        </div>
    </footer>

</body>
</html>
