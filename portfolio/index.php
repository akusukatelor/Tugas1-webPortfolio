<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfin Ilham - Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lucide/0.473.0/umd/lucide.min.js"></script>
</head>
<body>
    <nav>
        <div class="container nav-wrapper">
            <a href="index.php" class="logo">
            <img src="logoo.png" alt="Alfin Ilham Logo" class="logo-img">
            Alfin Ilham
        </a>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#tech">Tech Stack</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <a href="#contact" class="btn btn-primary">Hire Me</a>
        </div>
    </nav>

    <section class="container hero">
        <div class="hero-content">
            <span class="badge">AVAILABLE FOR PROJECTS</span>
            <h1>Hello, I'm <br><span style="color:var(--primary)">Alfin Ilham</span></h1>
            <p>Mahasiswa S1 Teknik Informatika yang memiliki minat pada pengembangan aplikasi web frontend dan
backend. Terbiasa menggunakan HTML, CSS, Javascipt, PHP, dan MySQL dalam membangun sebuah
perangkat lunak.</p>
            <div class="hero-btns">
                <a href="#projects" class="btn btn-primary">View My Work <i data-lucide="arrow-right"></i></a>
                <a href="#" class="btn btn-outline">Download CV</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="IMG_9833.JPG.jpeg" alt="Profile">
        </div>
    </section>

   <section id="tech" class="container">
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 40px;">
        <div>
            <h2>Tech Stack</h2>
            <p class="subtitle" style="margin-bottom: 0;">The tools and technologies I use to bring ideas to life.</p>
        </div>
        <div class="slider-nav">
            <button class="nav-btn" onclick="slide('techSlider', 'left')"><i data-lucide="chevron-left"></i></button>
            <button class="nav-btn" onclick="slide('techSlider', 'right')"><i data-lucide="chevron-right"></i></button>
        </div>
    </div>

    <div class="slider-container">
        <div class="tech-grid" id="techSlider">
            <div class="card">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-original.svg" class="tech-icon" alt="Laravel">
                <h3>Laravel</h3>
                <p style="color:var(--text-muted); font-size: 0.9rem;">PHP Web Framework</p>
            </div>
            <div class="card">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original.svg" class="tech-icon" alt="MySQL">
                <h3>MySQL</h3>
                <p style="color:var(--text-muted); font-size: 0.9rem;">Relational Database Management</p>
            </div>
            <div class="card">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" class="tech-icon" alt="JS">
                <h3>JavaScript</h3>
                <p style="color:var(--text-muted); font-size: 0.9rem;">Interactive Frontend Logic</p>
            </div>
            <div class="card">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/tailwindcss/tailwindcss-original.svg" class="tech-icon" alt="JS">
                <h3>Tailwind</h3>
                <p style="color:var(--text-muted); font-size: 0.9rem;">Utility-First CSS</p>
            </div>
            <div class="card">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/cplusplus/cplusplus-original.svg" class="tech-icon" alt="C++">
                <h3>C++</h3>
                <p style="color:var(--text-muted); font-size: 0.9rem;">Performance & System Logic</p>
            </div>
            <div class="card">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/go/go-original-wordmark.svg" class="tech-icon" alt="Go">
                <h3>Go Language</h3>
                <p style="color:var(--text-muted); font-size: 0.9rem;">Cloud & Backend Scalability</p>
            </div>
            <div class="card">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/java/java-original.svg" class="tech-icon" alt="Java">
                <h3>Java</h3>
                <p style="color:var(--text-muted); font-size: 0.9rem;">Enterprise Applications</p>
            </div>
            <div class="card">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/git/git-original.svg" class="tech-icon" alt="Git">
                <h3>Git</h3>
                <p style="color:var(--text-muted); font-size: 0.9rem;">Version Control System</p>
            </div>
        </div>
    </div>
</section>

    <section id="projects" class="containerh">
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 40px;">
        <div>
            <h2>Selected Projects</h2>
            <p class="subtitle" style="margin-bottom: 0;">A showcase of some of my favorite development and design work.</p>
        </div>
        <div class="slider-nav">
            <button class="nav-btn" onclick="slide('projectSlider', 'left')"><i data-lucide="chevron-left"></i></button>
            <button class="nav-btn" onclick="slide('projectSlider', 'right')"><i data-lucide="chevron-right"></i></button>
        </div>
    </div>

    <div id="projectSlider" class="project-grid">
        <div class="project-card">
            <div class="project-img">
                <img src="image1.png" alt="Homiezy">
            </div>
            <div class="project-info">
                <div class="project-tags">
                     <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-original.svg" class="tech-icon" alt="Laravel" height="25px" width="25px">
                     <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" class="tech-icon" alt="JS">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/tailwindcss/tailwindcss-original.svg" class="tech-icon" alt="JS">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original.svg" class="tech-icon" alt="MySQL">
                </div>
                <h3>Web Dinas Perikanan Banyumas</h3>
                <p>Sistem terintegrasi antara Pembudidaya, Petugas UPT, dan Administrator.</p>
                <div class="project-links">
                    <a href="https://github.com/akusukatelor/Dinas-perikanan"><i data-lucide="github" size="18"></i> GitHub</a>
                </div>
            </div>
        </div>

        <div class="project-card">
           <div class="project-img">
                <img src="image2.png" alt="Homiezy">
            </div>
            <div class="project-info">
                <div class="project-tags">
                     <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-original.svg" class="tech-icon" alt="Laravel" height="25px" width="25px">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/tailwindcss/tailwindcss-original.svg" class="tech-icon" alt="JS">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original.svg" class="tech-icon" alt="MySQL">
                </div>
                <h3>Homiezy App</h3>
                <p>Web untuk customer bisa mencari kos, katering, laundry atau bahkan bisa paket all in one.</p>
                <div class="project-links">
                    <a href="https://github.com/akusukatelor/Homiezy"><i data-lucide="github" size="18"></i> GitHub</a>
                </div>
            </div>
        </div>
        
        <div class="project-card">
            <div class="project-img">
                <img src="image3.png" alt="Homiezy">
            </div>
            <div class="project-info">
                <div class="project-tags">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original.svg" class="tech-icon" alt="Laravel" height="25px" width="25px">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg" class="tech-icon" alt="Laravel" height="25px" width="25px">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" class="tech-icon" alt="JS">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/java/java-original.svg" class="tech-icon" alt="Java">
                </div>
                <h3>GTG University</h3>
                <p>Website untuk mengelola data mahasiswa.</p>
                <div class="project-links">
                    <a href="https://github.com/akusukatelor/GTG-UNIVERSITY"><i data-lucide="github" size="18"></i> GitHub</a>
                </div>
            </div>
        </div>
        <div class="project-card">
           <div class="project-img">
                <img src="image.png" alt="Homiezy">
            </div>
            <div class="project-info">
                <div class="project-tags">
                     <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-original.svg" class="tech-icon" alt="Laravel" height="25px" width="25px">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/tailwindcss/tailwindcss-original.svg" class="tech-icon" alt="JS">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" class="tech-icon" alt="JS">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original.svg" class="tech-icon" alt="MySQL">
                </div>
                <h3>PT Aliqa Muslim Indonesia</h3>
                <p>Web company profile serta sistem sistem terintegrasi.</p>
                <div class="project-links">
                    <a href="https://github.com/akusukatelor"><i data-lucide="github" size="18"></i> GitHub</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="contact" class="containerc">
        <div class="cta-box">
            <h2>Have a project in mind?</h2>
            <p style="color: #94a3b8">I'm currently available for freelance work and full-time positions.</p>
            
            <form id="contactForm" class="form-group">
                <input type="email" id="email" placeholder="Enter your email" required>
                <button type="submit" class="btn btn-primary">Get In Touch</button>
            </form>
            <div id="responseMessage" style="margin-top: 20px;"></div>
        </div>
    </section>

    <footer>
        <div class="container footer-wrapper">
            <div class="footer-left">
                <p class="copyright">© 2026 Alfin Ilham. All rights reserved.</p>
            </div>
            <div class="social-links">
    <a href="https://instagram.com/username_kamu" title="Instagram" target="_blank">
        <i data-lucide="instagram" size="20"></i>
    </a>
    <a href="https://github.com/username_kamu" title="GitHub" target="_blank">
        <i data-lucide="github" size="20"></i>
    </a>
    <a href="https://linkedin.com/in/username_kamu" title="LinkedIn" target="_blank">
        <i data-lucide="linkedin" size="20"></i>
    </a>
</div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lucide/0.473.0/umd/lucide.min.js"></script>
    <script>
        lucide.createIcons();
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const resMsg = document.getElementById('responseMessage');

            fetch('process.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'email=' + encodeURIComponent(email)
            })
            .then(res => res.text())
            .then(data => {
                resMsg.innerHTML = `<span style="color: #4ade80">${data}</span>`;
                document.getElementById('email').value = '';
            });
        });

      function slide(sliderId, direction) {
    const slider = document.getElementById(sliderId);
    const scrollAmount = (sliderId === 'techSlider') ? 300 : 480; 

    if (direction === 'left') {
        slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    } else {
        slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }
}
    </script>
</body>
</html>