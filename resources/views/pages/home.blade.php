@extends('layouts.app')

@section('content')
  @include('components.sidebar')

  <div class="main-content">
    <nav class="navbar">
      <ul class="navbar-list">
        <li class="navbar-item"><button class="navbar-link active" data-nav-link>About</button></li>
        <li class="navbar-item"><button class="navbar-link" data-nav-link>Resume</button></li>
        <li class="navbar-item"><button class="navbar-link" data-nav-link>Portfolio</button></li>
        <li class="navbar-item"><button class="navbar-link" data-nav-link>Certification</button></li>
        <li class="navbar-item"><button class="navbar-link" data-nav-link>Contact</button></li>
      </ul>
    </nav>

    <article class="about active" data-page="about">
      <header><h2 class="h2 article-title">About me</h2></header>
      <section class="about-text">
        <p>
          I’m an IT student from Digos City, Philippines, aiming to become a Web Developer.
          I enjoy creating simple and user-friendly websites and learning new technologies.
        </p>
        <p>
          I’ve worked on school projects like housing, education, and smart classroom systems,
          which helped me improve my skills in HTML, CSS, and programming.
          My goal is to keep growing as a developer and create practical solutions for real-life problems.
        </p>
      </section>

      <section class="service">
        <h3 class="h3 service-title">What i'm doing</h3>
        <ul class="service-list">
          <li class="service-item">
            <div class="service-icon-box"><img src="{{ asset('assets/images/icon-design.svg') }}" alt="design icon" width="40"></div>
            <div class="service-content-box">
              <h4 class="h4 service-item-title">Web design</h4>
              <p class="service-item-text">Simple design that looks good and works well.</p>
            </div>
          </li>
          <li class="service-item">
            <div class="service-icon-box"><img src="{{ asset('assets/images/icon-dev.svg') }}" alt="development icon" width="40"></div>
            <div class="service-content-box">
              <h4 class="h4 service-item-title">Web development</h4>
              <p class="service-item-text">Building responsive, accessible sites with clean code.</p>
            </div>
          </li>
          <li class="service-item">
            <div class="service-icon-box"><img src="{{ asset('assets/images/icon-app.svg') }}" alt="app icon" width="40"></div>
            <div class="service-content-box">
              <h4 class="h4 service-item-title">App prototypes</h4>
              <p class="service-item-text">Interactive prototypes for ideas and testing.</p>
            </div>
          </li>
          <li class="service-item">
            <div class="service-icon-box"><img src="{{ asset('assets/images/icon-photo.svg') }}" alt="photo icon" width="40"></div>
            <div class="service-content-box">
              <h4 class="h4 service-item-title">Photo editing</h4>
              <p class="service-item-text">Basic photo corrections and enhancements.</p>
            </div>
          </li>
        </ul>
      </section>
    </article>

    <article class="resume" data-page="resume">
      <header>
        <h2 class="h2 article-title">Resume</h2>
      </header>
      <section class="timeline">
        <div class="title-wrapper">
          <div class="icon-box"><ion-icon name="book-outline"></ion-icon></div>
          <h3 class="h3">Education</h3>
        </div>
        <ol class="timeline-list">
          <li class="timeline-item">
            <h4 class="h4 timeline-item-title">University of Mindanao Digos College</h4>
            <span>2022-2026 (1st Year College - 4th Year College)</span>
            <p class="timeline-text">Currently pursuing my degree in IT, focusing on web development, systems design, and modern technologies.</p>
          </li>
          <li class="timeline-item"><h4 class="h4 timeline-item-title">Gov Nonito D Llanos Sr National High School</h4><span>2018-2022 (Grade 9 - Grade 12)</span></li>
          <li class="timeline-item"><h4 class="h4 timeline-item-title">Isabelo Calma Sr. Central Elementary School</h4><span>2010-2018 (Kinder 2 - Grade 8)</span></li>
        </ol>
      </section>
      <section class="timeline">
        <div class="title-wrapper">
          <div class="icon-box"><ion-icon name="book-outline"></ion-icon></div>
          <h3 class="h3">Experience</h3>
        </div>
        <ol class="timeline-list">
          <li class="timeline-item"><h4 class="h4 timeline-item-title">Figma Designer</h4><span>2024 — Present</span><p class="timeline-text">Designing UI/UX layouts and interactive prototypes in Figma to build simple and engaging digital solutions.</p></li>
          <li class="timeline-item"><h4 class="h4 timeline-item-title">Apps Developer</h4><span>2022</span><p class="timeline-text">Developing simple Android applications and learning how to build functional, easy-to-use mobile solutions.</p></li>
          <li class="timeline-item"><h4 class="h4 timeline-item-title">Web designer</h4><span>2023</span><p class="timeline-text">Building functional and user-friendly websites using HTML, CSS, and other web technologies.</p></li>
        </ol>
      </section>
      <section class="skill">
        <h3 class="h3 skills-title">My skills</h3>
        <ul class="skills-list content-card">
          <li class="skills-item">
            <div class="title-wrapper"><h5 class="h5">Web design</h5><data value="80">60%</data></div>
            <div class="skill-progress-bg"><div class="skill-progress-fill" style="width: 80%;"></div></div>
          </li>
          <li class="skills-item">
            <div class="title-wrapper"><h5 class="h5">Graphic design</h5><data value="40%">40%</data></div>
            <div class="skill-progress-bg"><div class="skill-progress-fill" style="width: 40%;"></div></div>
          </li>
          <li class="skills-item">
            <div class="title-wrapper"><h5 class="h5">Branding</h5><data value="70%">70%</data></div>
            <div class="skill-progress-bg"><div class="skill-progress-fill" style="width: 70%;"></div></div>
          </li>
          <li class="skills-item">
            <div class="title-wrapper"><h5 class="h5">WordPress</h5><data value="45%">45%</data></div>
            <div class="skill-progress-bg"><div class="skill-progress-fill" style="width: 45%;"></div></div>
          </li>
        </ul>
      </section>
    </article>

    <article class="portfolio" data-page="portfolio" id="portfolio">
      <header><h2 class="h2 article-title">Portfolio</h2></header>
      <section class="projects">
        <ul class="filter-list">
          <li class="filter-item"><button class="active" data-filter-btn>All</button></li>
          <li class="filter-item"><button data-filter-btn>Web design</button></li>
          <li class="filter-item"><button data-filter-btn>Applications</button></li>
          <li class="filter-item"><button data-filter-btn>Web development</button></li>
        </ul>
        <div class="filter-select-box">
          <button class="filter-select" data-select>
            <div class="select-value" data-selecct-value>Select category</div>
            <div class="select-icon"><ion-icon name="chevron-down"></ion-icon></div>
          </button>
          <ul class="select-list">
            <li class="select-item"><button data-select-item>All</button></li>
            <li class="select-item"><button data-select-item>Web design</button></li>
            <li class="select-item"><button data-select-item>Applications</button></li>
            <li class="select-item"><button data-select-item>Web development</button></li>
          </ul>
        </div>
        <ul class="project-list">
          <li class="project-item  active" data-filter-item data-category="web development">
            <a href="#"><figure class="project-img"><div class="project-item-icon-box"><ion-icon name="eye-outline"></ion-icon></div><img src="{{ asset('assets/images/project-1.jpg') }}" alt="finance" loading="lazy"></figure><h3 class="project-title">Finance</h3><p class="project-category">Web development</p></a>
          </li>
          <li class="project-item  active" data-filter-item data-category="web development">
            <a href="#"><figure class="project-img"><div class="project-item-icon-box"><ion-icon name="eye-outline"></ion-icon></div><img src="{{ asset('assets/images/project-2.png') }}" alt="orizon" loading="lazy"></figure><h3 class="project-title">Orizon</h3><p class="project-category">Web development</p></a>
          </li>
          <li class="project-item  active" data-filter-item data-category="web design">
            <a href="#"><figure class="project-img"><div class="project-item-icon-box"><ion-icon name="eye-outline"></ion-icon></div><img src="{{ asset('assets/images/project-3.jpg') }}" alt="fundo" loading="lazy"></figure><h3 class="project-title">Fundo</h3><p class="project-category">Web design</p></a>
          </li>
          <li class="project-item  active" data-filter-item data-category="applications">
            <a href="#"><figure class="project-img"><div class="project-item-icon-box"><ion-icon name="eye-outline"></ion-icon></div><img src="{{ asset('assets/images/project-4.png') }}" alt="brawlhalla" loading="lazy"></figure><h3 class="project-title">Brawlhalla</h3><p class="project-category">Applications</p></a>
          </li>
          <li class="project-item  active" data-filter-item data-category="web design">
            <a href="#"><figure class="project-img"><div class="project-item-icon-box"><ion-icon name="eye-outline"></ion-icon></div><img src="{{ asset('assets/images/project-5.png') }}" alt="dsm." loading="lazy"></figure><h3 class="project-title">DSM.</h3><p class="project-category">Web design</p></a>
          </li>
          <li class="project-item  active" data-filter-item data-category="web development">
            <a href="#"><figure class="project-img"><div class="project-item-icon-box"><ion-icon name="eye-outline"></ion-icon></div><img src="{{ asset('assets/images/project-7.png') }}" alt="summary" loading="lazy"></figure><h3 class="project-title">Summary</h3><p class="project-category">Web development</p></a>
          </li>
          <li class="project-item  active" data-filter-item data-category="applications">
            <a href="#"><figure class="project-img"><div class="project-item-icon-box"><ion-icon name="eye-outline"></ion-icon></div><img src="{{ asset('assets/images/project-8.jpg') }}" alt="task manager" loading="lazy"></figure><h3 class="project-title">Task Manager</h3><p class="project-category">Applications</p></a>
          </li>
          <li class="project-item  active" data-filter-item data-category="web development">
            <a href="#"><figure class="project-img"><div class="project-item-icon-box"><ion-icon name="eye-outline"></ion-icon></div><img src="{{ asset('assets/images/project-9.png') }}" alt="arrival" loading="lazy"></figure><h3 class="project-title">Arrival</h3><p class="project-category">Web development</p></a>
          </li>
          <li class="project-item  active" data-filter-item data-category="web design">
            <a href="#"><figure class="project-img"><div class="project-item-icon-box"><ion-icon name="eye-outline"></ion-icon></div><img src="{{ asset('assets/images/Jbimage.jpeg') }}" alt="jbimage" loading="lazy"></figure><h3 class="project-title">Johnny Boy Portrait</h3><p class="project-category">Web design</p></a>
          </li>
        </ul>
      </section>
    </article>

    <article class="blog" data-page="certification" id="certification">
      <header><h2 class="h2 article-title">Certification</h2></header>
      <section class="blog-posts">
        <ul class="blog-posts-list">
          <li class="blog-post-item"><a href="#"><figure class="blog-banner-box"><img src="{{ asset('assets/images/blog-3.jpg') }}" alt="Design conferences in 2022" loading="lazy"></figure><div class="blog-content"><div class="blog-meta"><p class="blog-category">Certification</p><span class="dot"></span><time datetime="2022-02-23">Jun 30, 2025</time></div><h3 class="h3 blog-item-title">Cybersecuirity</h3><p class="blog-text">has successfully achieved student level credential for completing the Introduction to Cybersecurity course.</p></div></a></li>
          <li class="blog-post-item"><a href="#"><figure class="blog-banner-box"><img src="{{ asset('assets/images/blog-2.jpg') }}" alt="Best fonts every designer" loading="lazy"></figure><div class="blog-content"><div class="blog-meta"><p class="blog-category">Certification</p><span class="dot"></span><time datetime="2022-02-23">Jun 27, 2025</time></div><h3 class="h3 blog-item-title">Network Defense</h3><p class="blog-text">has successfully achieved student level credential for completing the Network Defense course.</p></div></a></li>
          <li class="blog-post-item"><a href="#"><figure class="blog-banner-box"><img src="{{ asset('assets/images/blog-1.jpg') }}" alt="Design digest #80" loading="lazy"></figure><div class="blog-content"><div class="blog-meta"><p class="blog-category">Certification</p><span class="dot"></span><time datetime="2022-02-23">Jun 30, 2025</time></div><h3 class="h3 blog-item-title">Cyber Threat Management</h3><p class="blog-text">offered by DICT-ITU DTC Initiative through the Cisco Networking Academy program..</p></div></a></li>
          <li class="blog-post-item"><a href="#"><figure class="blog-banner-box"><img src="{{ asset('assets/images/blog-4.jpg') }}" alt="UI interactions of the week" loading="lazy"></figure><div class="blog-content"><div class="blog-meta"><p class="blog-category">Certification</p><span class="dot"></span><time datetime="2022-02-23">ON October 6, 2025</time></div><h3 class="h3 blog-item-title">Introduction to CSS</h3><p class="blog-text">Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation ullamco laboris nisi.</p></div></a></li>
          <li class="blog-post-item"><a href="#"><figure class="blog-banner-box"><img src="{{ asset('assets/images/blog-5.jpg') }}" alt="The forgotten art of spacing" loading="lazy"></figure><div class="blog-content"><div class="blog-meta"><p class="blog-category">Certification</p><span class="dot"></span><time datetime="2022-02-23">ON October 6, 2025</time></div><h3 class="h3 blog-item-title">Installing and Configuring Computer Systems</h3><p class="blog-text">Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div></a></li>
          <li class="blog-post-item"><a href="#"><figure class="blog-banner-box"><img src="{{ asset('assets/images/blog-7.jpg') }}" alt="Setting Up Computer Servers" loading="lazy"></figure><div class="blog-content"><div class="blog-meta"><p class="blog-category">Certification</p><span class="dot"></span><time datetime="2022-02-23">ON October 6, 2025</time></div><h3 class="h3 blog-item-title">Setting Up Computer Servers</h3><p class="blog-text">Certificate of completion for Setting Up Computer Servers.</p></div></a></li>
        </ul>
      </section>
    </article>

    <article class="contact" data-page="contact" id="contact">
      <header><h2 class="h2 article-title">Contact</h2></header>
      <section class="mapbox" data-mapbox>
        <figure><iframe src="https://maps.google.com/maps?q=Balasiao,Kiblawan,Davao+del+Sur,Philippines&t=&z=13&ie=UTF8&iwloc=&output=embed" width="400" height="300" loading="lazy"></iframe></figure>
      </section>
      <section class="contact-form">
        <h3 class="h3 form-title">Contact Form</h3>
        <form action="#" class="form" data-form>
          <div class="input-wrapper">
            <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>
            <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
          </div>
          <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>
          <button class="form-btn" type="submit" disabled data-form-btn>
            <ion-icon name="paper-plane"></ion-icon>
            <span>Send Message</span>
          </button>
        </form>
      </section>
    </article>
  </div>
@endsection
