<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Avishak Poddar</title>

    <!--
    - favicon
  -->
    <link
      rel="shortcut icon"
      href="/assets/images/logo.ico"
      type="/image/x-icon"
    />

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="/assets/css/style.css" />

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <!--
    - #MAIN
  -->

    <main>
      <!--
      - #SIDEBAR
    -->

      <aside class="sidebar" data-sidebar>
        <div class="sidebar-info">
          <figure class="avatar-box">
            <img src="/assets/images/my-avatar.png" alt="Avishak" width="80" />
          </figure>

          <div class="info-content">
            <h1 class="name" title="Avishak Poddar">Avishak Poddar</h1>

            <p class="title">App developer</p>
          </div>

          <button class="info_more-btn" data-sidebar-btn>
            <span>Show Contacts</span>

            <ion-icon name="chevron-down"></ion-icon>
          </button>
        </div>

        <div class="sidebar-info_more">
          <div class="separator"></div>

          <ul class="contacts-list">
            <li class="contact-item">
              <div class="icon-box">
                <ion-icon name="mail-outline"></ion-icon>
              </div>

              <div class="contact-info">
                <p class="contact-title">Email</p>

                <a href="mailto:avishakpoddar@gmail.com" class="contact-link"
                  >avishakpoddar@gmail.com</a
                >
              </div>
            </li>

            <li class="contact-item">
              <div class="icon-box">
                <ion-icon name="phone-portrait-outline"></ion-icon>
              </div>

              <div class="contact-info">
                <p class="contact-title">Phone</p>

                <a href="tel:+12133522795" class="contact-link"
                  >+8801767269929</a
                >
              </div>
            </li>

            <li class="contact-item">
              <div class="icon-box">
                <ion-icon name="calendar-outline"></ion-icon>
              </div>

              <div class="contact-info">
                <p class="contact-title">Birthday</p>

                <time datetime="30-11-1999">Novemer 30</time>
              </div>
            </li>

            <li class="contact-item">
              <div class="icon-box">
                <ion-icon name="location-outline"></ion-icon>
              </div>

              <div class="contact-info">
                <p class="contact-title">Location</p>

                <address>Bangladesh</address>
              </div>
            </li>
          </ul>

          <div class="separator"></div>

          <ul class="social-list">
            <li class="social-item">
              <a
                href="https://www.facebook.com/podder.avishak"
                class="social-link"
              >
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
            <li class="social-item">
              <a href="https://www.linkedin.com/in/avishak-poddar/" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>
            <li class="social-item">
              <a href="https://github.com/poddaravishak" class="social-link">
                <ion-icon name="logo-github"></ion-icon>
              </a>
            </li>

            <li class="social-item">
              <a
                href="https://www.instagram.com/avishakpodder/"
                class="social-link"
              >
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
          </ul>
        </div>
      </aside>

      <!--
      - #main-content
    -->

      <div class="main-content">
        <!--
        - #NAVBAR
      -->

        <nav class="navbar">
          <ul class="navbar-list">
            <li class="navbar-item">
              <button class="navbar-link active" data-nav-link>About</button>
            </li>

            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Resume</button>
            </li>

            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Portfolio</button>
            </li>

            

            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Contact</button>
            </li>
          </ul>
        </nav>

        <!--
        - #ABOUT
      -->

        <article class="about active" data-page="about">
          <header>
            <h2 class="h2 article-title">About me</h2>
          </header>

          <section class="about-text">
            <p>
              Hello, my name is Avishak, and I am a highly skilled mobile app
              developer with three years of industry experience. Throughout my
              career, I have demonstrated a strong passion for creating
              innovative and user-friendly mobile applications that meet the
              needs of clients and end-users alike
            </p>

            <p>
              I possess a comprehensive understanding of the mobile app
              development life cycle, from conceptualization to deployment and
              ongoing maintenance. My technical expertise includes proficiency
              in various programming languages such as Java, and Kotlin, as well
              as a deep understanding of popular mobile app frameworks and
              libraries. I have successfully delivered several mobile app
              projects, ranging from small-scale applications to large
              enterprise-level solutions, across multiple platforms including
              iOS and Android. By leveraging my expertise in UI/UX design, I
              ensure that the apps I develop are visually appealing, intuitive
              to navigate, and provide seamless user experiences.
            </p>
          </section>

          <!--
          - service
        -->

          <section class="service">
            <h3 class="h3 service-title">What i'm doing</h3>

            <ul class="service-list">
              <li class="service-item">
                <div class="service-icon-box">
                  <img
                    src="./assets/images/icon-app.svg
                "
                    alt="design icon"
                    width="40"
                  />
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Mobile apps</h4>

                  <p class="service-item-text">
                    Professional development of applications for iOS and
                    Android.
                  </p>
                </div>
              </li>

              <li class="service-item">
                <div class="service-icon-box">
                  <img
                    src="./assets/images/icon-design.svg"
                    alt="Web development icon"
                    width="40"
                  />
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Android Material Design</h4>

                  <p class="service-item-text">
                    The modern and high-quality Material design made at a
                    professional level.
                  </p>
                </div>
              </li>

              <li class="service-item">
                <div class="service-icon-box">
                  <img
                    src="./assets/images/sdk.png"
                    alt="mobile app icon"
                    width="40"
                  />
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">SDK</h4>

                  <p class="service-item-text">
                    Expertise with the Android Software Development Kit (SDK).
                  </p>
                </div>
              </li>

              <li class="service-item">
                <div class="service-icon-box">
                  <img
                    src="./assets/images/icon-photo.svg"
                    alt="camera icon"
                    width="40"
                  />
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">API</h4>

                  <p class="service-item-text">
                    APIs are often used to interact with various features and
                    services of the Android operating system
                  </p>
                </div>
              </li>
            </ul>
          </section>

          <!--
          -Model for move navbar
        -->

          <div class="modal-container" data-modal-container>
            <div class="overlay" data-overlay></div>

            <section class="testimonials-modal">
              <button class="modal-close-btn" data-modal-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>

              <div class="modal-img-wrapper">
                <figure class="modal-avatar-box">
                  <img
                    src="./assets/images/avatar-1.png"
                    alt="Daniel lewis"
                    width="80"
                    data-modal-img
                  />
                </figure>

                <img src="./assets/images/icon-quote.svg" alt="quote icon" />
              </div>

              <div class="modal-content">
                <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

                <time datetime="2021-06-14">14 June, 2021</time>

                <div data-modal-text>
                  <p>
                    Richard was hired to create a corporate identity. We were
                    very pleased with the work done. She has a lot of experience
                    and is very concerned about the needs of client. Lorem ipsum
                    dolor sit amet, ullamcous cididt consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels
                    dolore magnarels alia.
                  </p>
                </div>
              </div>
            </section>
          </div>

          <!-- clients -->
        </article>

        <!--
        - #RESUME
      -->

        <article class="resume" data-page="resume">
          <header>
            <h2 class="h2 article-title">Resume</h2>
          </header>

          <section class="timeline">
            <div class="title-wrapper">
              <div class="icon-box">
                <ion-icon name="book-outline"></ion-icon>
              </div>

              <h3 class="h3">Experience</h3>
            </div>

            <ol class="timeline-list">
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">
                  Internship | Bangladesh Research and Education Network
                </h4>

                <span>1 Month</span>

                <p class="timeline-text">
                  The internship BdREN offers the opportunity to gain practical
                  experience in networking and server implementation. Docker,
                  Cacti, Data center infrastructure
                </p>
              </li>

              
              </li>
            </ol>
          </section>

          <section class="timeline">
            <div class="title-wrapper">
              <div class="icon-box">
                <ion-icon name="book-outline"></ion-icon>
              </div>

              <h3 class="h3">Education</h3>
            </div>

            <ol class="timeline-list">
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Bachelor of CSE</h4>

                <span>2019 — june 2023</span>

                <!-- <p class="timeline-text">
                  Nemo enim ipsam voluptatem blanditiis praesentium voluptum
                  delenit atque corrupti, quos dolores et qvuas molestias
                  exceptur.
                </p> -->
              </li>

              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Higher Secondary </h4>

                <span>2015 — 2017</span>

                <!-- <p class="timeline-text">
                  Nemo enims ipsam voluptatem, blanditiis praesentium voluptum
                  delenit atque corrupti, quos dolores et quas molestias
                  exceptur.
                </p> -->
              </li>

             
            </ol>
          </section>

          <section class="skill">
            <h3 class="h3 skills-title">My skills</h3>

            <ul class="skills-list content-card">
              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">Java</h5>
                  <data value="80">80%</data>
                </div>

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: 80%"></div>
                </div>
              </li>

              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">Kotlin</h5>
                  <data value="80">80%</data>
                </div>

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: 80%"></div>
                </div>
              </li>

              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">Android Studio IDE</h5>
                  <data value="70">90%</data>
                </div>

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: 90%"></div>
                </div>
              </li>

              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">Docker and Kubernetes</h5>
                  <data value="90">60%</data>
                </div>

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: 60%"></div>
                </div>
              </li>

              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">WordPress</h5>
                  <data value="50">65%</data>
                </div>

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: 65%"></div>
                </div>
              </li>
            </ul>
          </section>
          <!-- <h3 class="h3 skills-title">My skills</h3> -->
        </article>

        <!--
        - #PORTFOLIO
      -->

        <article class="portfolio" data-page="portfolio">
          <header>
            <h2 class="h2 article-title">Portfolio</h2>
          </header>

          <section class="projects">
            <ul class="filter-list">
              <li class="filter-item">
                <button class="active" data-filter-btn>All</button>
              </li>

              <li class="filter-item">
                <button data-filter-btn>Web design</button>
              </li>

              <li class="filter-item">
                <button data-filter-btn>Applications</button>
              </li>

              <li class="filter-item">
                <button data-filter-btn>Web development</button>
              </li>
            </ul>

            <div class="filter-select-box">
              <button class="filter-select" data-select>
                <div class="select-value" data-selecct-value>
                  Select category
                </div>

                <div class="select-icon">
                  <ion-icon name="chevron-down"></ion-icon>
                </div>
              </button>

              <ul class="select-list">
                <li class="select-item">
                  <button data-select-item>All</button>
                </li>

                <li class="select-item">
                  <button data-select-item>Web design</button>
                </li>

                <li class="select-item">
                  <button data-select-item>Applications</button>
                </li>

                <li class="select-item">
                  <button data-select-item>Web development</button>
                </li>
              </ul>
            </div>

            <ul class="project-list">
              <li
                class="project-item active"
                data-filter-item
                data-category="web development"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-1.jpg"
                      alt="finance"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Finance</h3>

                  <p class="project-category">Web development</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web development"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-2.png"
                      alt="orizon"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Orizon</h3>

                  <p class="project-category">Web development</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web design"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-3.jpg"
                      alt="fundo"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Fundo</h3>

                  <p class="project-category">Web design</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="applications"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-4.png"
                      alt="brawlhalla"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Brawlhalla</h3>

                  <p class="project-category">Applications</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web design"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-5.png"
                      alt="dsm."
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">DSM.</h3>

                  <p class="project-category">Web design</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web design"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-6.png"
                      alt="metaspark"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">MetaSpark</h3>

                  <p class="project-category">Web design</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web development"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-7.png"
                      alt="summary"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Summary</h3>

                  <p class="project-category">Web development</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="applications"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-8.jpg"
                      alt="task manager"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Task Manager</h3>

                  <p class="project-category">Applications</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web development"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-9.png"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Arrival</h3>

                  <p class="project-category">Web development</p>
                </a>
              </li>
            </ul>
          </section>
        </article>

        
        <!--
        - #CONTACT
      -->

        <article class="contact" data-page="contact">
          <header>
            <h2 class="h2 article-title">Contact</h2>
          </header>

          <section class="mapbox" data-mapbox>
            <figure>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58144.49522697451!2d88.5648163633552!3d24.380226659206212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbefa96a38d031%3A0x10f93a950ed6f410!2sRajshahi!5e0!3m2!1sen!2sbd!4v1686758273207!5m2!1sen!2sbd"
                width="400"
                height="300"
                loading="lazy"
              ></iframe>
            </figure>
          </section>

          <section class="contact-form">
            <h3 class="h3 form-title">Contact Form</h3>

            <form action="/contact.php" method="POST" class="form" data-form>
              <!-- Your form fields go here -->
              <div class="input-wrapper">
                <input
                  type="text"
                  name="fullname"
                  class="form-input"
                  placeholder="Full name"
                  required
                  data-form-input
                />
            
                <input
                  type="email"
                  name="email"
                  class="form-input"
                  placeholder="Email address"
                  required
                  data-form-input
                />
              </div>
            
              <textarea
                name="message"
                class="form-input"
                placeholder="Your Message"
                required
                data-form-input
              ></textarea>
            
              <button class="form-btn" type="submit" disabled data-form-btn>
                <ion-icon name="paper-plane"></ion-icon>
                <span>Send Message</span>
              </button>
            </form>
            
          </section>
        </article>
      </div>
    </main>

    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
