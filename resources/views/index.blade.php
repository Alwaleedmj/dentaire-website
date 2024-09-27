<!-- =========

	Template Name: Play
	Author: UIdeck
	Author URI: https://uideck.com/
	Support: https://uideck.com/support/
	Version: 1.1

========== -->

<!DOCTYPE html>
<html lang="{{ __('index.lang') }}" dir="{{ __('index.dir') }}">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ __('index.title-tab') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- Primary Meta Tags -->
<meta name="title" content="Play - Free Open Source HTML Bootstrap Template by UIdeck">
<meta name="description" content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://uideck.com/play/">
<meta property="og:title" content="Play - Free Open Source HTML Bootstrap Template by UIdeck">
<meta property="og:description" content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team">
<meta property="og:image" content="https://uideck.com/wp-content/uploads/2021/09/play-meta-bs.jpg">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://uideck.com/play/">
<meta property="twitter:title" content="Play - Free Open Source HTML Bootstrap Template by UIdeck">
<meta property="twitter:description" content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team">
<meta property="twitter:image" content="https://uideck.com/wp-content/uploads/2021/09/play-meta-bs.jpg">
<style>

</style>

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="assets/images/favicon.png"
      type="image/svg"
    />

    <!-- ===== All CSS files ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/ud-styles.css" />
    <link rel="stylesheet" href="assets/css/my_custom.css">
  </head>

  {{-- Whatsapp Start --}}
  <div id="whatsapp">
    <a href="https://wa.me/966502360164?text={{ urlencode(__('index.whats_msg')) }}" target="_blank" id="toggle1" class="wtsapp">
        <i class="bi bi-whatsapp"></i>
    </a>
  </div>
  
  {{-- Whatsapp End --}}

  <body>
    <!-- ====== Header Start ====== -->
    <header class="ud-header sticky" id="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="index.html">
                <img src="assets/images/logo.svg" alt="Logo" />
              </a>
              <button class="navbar-toggler">
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
              </button>

              <div class="navbar-collapse">
                <ul id="nav" class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="#home">{{ __('index.home') }}</a>
                  </li>

                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="#serivces">{{ __('index.services') }}</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="#about">{{ __('index.about') }}</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="#contact">{{ __('index.contact') }}</a>
                  </li>
                </ul>
              </div>

              <div class="navbar-btn whatsapp d-none d-sm-inline-block">
                <a class="ud-main-btn ud-white-btn" href="{{ route('lang', __('index.otherlang')) }}">
                  {{ __('index.otherLang') }} <i class="lni lni-arrow-{{ __('index.to-oppsite-dir') }}"></i>
                </a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ====== Header End ====== -->

    <!-- ====== Hero Start ====== -->
    <section class="ud-hero" id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
              <h1 class="ud-hero-title">
                {{ __('index.title') }}
              </h1>
              <p class="ud-hero-desc">
                {{ __('index.subtitle') }}
              </p>
              <ul class="ud-hero-buttons">
                <li>
                  <a href="https://wa.me/966502360164?text={{ urlencode(__('index.whats_msg')) }}" rel="nofollow noopener" target="_blank" class="bi bi-whatsapp ud-main-btn ud-white-btn">
                    {{ __('index.ask_free') }}
                </a>
                
                </li>
                <li>
                  <a href="https://github.com/uideck/play-bootstrap" rel="nofollow noopener" target="_blank" class="ud-main-btn ud-link-btn">
                    {{ __('index.see_example') }} <i class="lni lni-arrow-{{ __('index.to-oppsite-dir') }}"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="ud-hero-image wow fadeInUp" data-wow-delay=".25s">
              <img src="assets/images/hero-2.png" alt="hero-image" style="border-top-left-radius: 3%; border-top-right-radius: 3%;"/>
              <img
                src="assets/images/hero/dotted-shape.svg"
                alt="shape"
                class="shape shape-1"
              />
              <img
                src="assets/images/hero/dotted-shape.svg"
                alt="shape"
                class="shape shape-2"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Hero End ====== -->

    <!-- ====== Features Start ====== -->
    <section id="serivces" class="ud-features">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-section-title">
              <span>{{ __('index.services') }}</span>
              <h2>{{ __('index.main_service') }}</h2>
              <p>
                {{ __('index.subtitle_service') }}
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="ud-single-feature wow fadeInUp" data-wow-delay=".1s">
              <div class="ud-feature-icon">
                <i class="bi bi-calendar-check"></i>
              </div>
              <div class="ud-feature-content">
                <h3 class="ud-feature-title">{{ __('index.service1') }}</h3>
                <p class="ud-feature-desc">
                  {{ __('index.service1.1') }}
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="ud-single-feature wow fadeInUp" data-wow-delay=".15s">
              <div class="ud-feature-icon">
                <i class="bi bi-file-earmark-break"></i>
              </div>
              <div class="ud-feature-content">
                <h3 class="ud-feature-title">{{ __('index.service2') }}</h3>
                <p class="ud-feature-desc">
                  {{ __('index.service2.1') }}
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="ud-single-feature wow fadeInUp" data-wow-delay=".2s">
              <div class="ud-feature-icon">
                <i class="lni lni-layout"></i>
              </div>
              <div class="ud-feature-content">
                <h3 class="ud-feature-title">{{ __('index.service3') }}</h3>
                <p class="ud-feature-desc">
                  {{ __('index.service3.1') }}
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-sm-6">
            <div class="ud-single-feature wow fadeInUp" data-wow-delay=".25s">
              <div class="ud-feature-icon">
                <i class="lni lni-layers"></i>
              </div>
              <div class="ud-feature-content">
                <h3 class="ud-feature-title">{{ __('index.service4') }}</h3>
                <p class="ud-feature-desc">
                  {{ __('index.service4.1') }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Features End ====== -->

    <!-- ====== About Start ====== -->
    <section id="about" class="ud-about">
      <div class="container">
        <div class="ud-about-wrapper wow fadeInUp" data-wow-delay=".2s">
          <div class="ud-about-content-wrapper">
            <div class="ud-about-content">
              <span class="tag">{{ __('index.about') }}</span>
              <h2>{{ __('index.about1') }}</h2>
              <p>
                {{ __('index.about2') }}
              </p>

              <p>
                {{ __('index.about3') }}

              </p>
              <a href="javascript:void(0)" class="ud-main-btn whatsapp-link" style="">{{ __('index.see_example') }}
                <i class="lni lni-arrow-{{ __('index.to-oppsite-dir') }}"></i>
              </a> 
            </div>
          </div>
          <div class="ud-about-image">
            <img src="assets/images/about/about-image.svg" alt="about-image" />
          </div>
        </div>
      </div>
    </section>
    <!-- ====== About End ====== -->



    <!-- ====== Contact Start ====== -->
    <section id="contact" class="ud-contact">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-8 col-lg-7">
            <div class="ud-contact-content-wrapper">
              <div class="ud-contact-title">
                <span>{{ __('index.contact') }}</span>
                <h2>
                  {{ __('index.contact1') }} <br/>
                  {{ __('index.contact2') }}
                </h2>
                  <a class="bi bi-whatsapp ud-main-btn ud-white-btn" href="javascript:void(0)" style="margin-top: 10px;">
                    {{ __('index.whatsapp') }}
                  </a>
              </div>
              <div class="ud-contact-info-wrapper">
                <div class="ud-single-info">
                  <div class="ud-info-icon">
                    <i class="lni lni-map-marker" style="{{ __('index.arabic_style.margin') }}"></i>
                  </div>
                  <div class="ud-info-meta">
                    <h5>{{ __('index.our_location') }}</h5>
                    <p>{{ __('index.our_location1') }}</p>
                  </div>
                </div>
                <div class="ud-single-info">
                  <div class="ud-info-icon">
                    <i class="lni lni-envelope" style="{{ __('index.arabic_style.margin') }}" ></i>
                  </div>
                  <div class="ud-info-meta">
                    <h5>{{ __('index.how_to_help') }}</h5>
                    <p>{{ __('index.email') }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s">
              <h3 class="ud-contact-form-title">{{ __('index.contact_form.title') }}</h3>
              <form class="ud-contact-form">
                <div class="ud-form-group">
                  <label for="fullName">{{ __('index.contact_form.full_name') }}</label>
                  <input
                    type="text"
                    name="fullName"
                    placeholder="{{ __('index.contact_form.full_name_placeholder') }}"
                    required
                  />
                </div>
                <div class="ud-form-group">
                  <label for="email">{{ __('index.contact_form.email') }}</label>
                  <input
                    type="email"
                    name="email"
                    placeholder="{{ __('index.contact_form.email_placeholder') }}"
                    required
                  />
                </div>
                <div class="ud-form-group">
                  <label for="phone">{{ __('index.contact_form.phone') }}</label>
                  <input
                    type="text"
                    name="phone"
                    placeholder="{{ __('index.contact_form.phone_placeholder') }}"
                    required
                  />
                </div>
                <div class="ud-form-group">
                  <label for="message">{{ __('index.contact_form.message') }}</label>
                  <textarea
                    name="message"
                    rows="1"
                    placeholder="{{ __('index.contact_form.message_placeholder') }}"
                    required
                  ></textarea>
                </div>
                <div class="ud-form-group mb-0">
                  <button type="submit" class="ud-main-btn">
                    {{ __('index.contact_form.send_button') }}
                  </button>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- ====== Contact End ====== -->

    <!-- ====== Footer Start ====== -->
    <footer class="ud-footer wow fadeInUp" data-wow-delay=".15s">
      <div class="shape shape-1">
        <img src="assets/images/footer/shape-1.svg" alt="shape" />
      </div>
      <div class="shape shape-2">
        <img src="assets/images/footer/shape-2.svg" alt="shape" />
      </div>
      <div class="shape shape-3">
        <img src="assets/images/footer/shape-3.svg" alt="shape" />
      </div>
      <div class="ud-footer-widgets">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="ud-widget">
                <a href="index.html" class="ud-footer-logo">
                  <img src="assets/images/footer-logo.svg" alt="logo" />
                </a>
                <p class="ud-widget-desc">
                  {{ __('index.footer') }}
                </p>
                <ul class="ud-widget-socials">
                  <li>
                    <a href="https://twitter.com/MusharofChy">
                      <i class="lni lni-instagram-original"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="ud-footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
            </div>
            <div class="col-md-4">
              <p class="ud-footer-bottom-right">
                Designed and Developed by
                <a href="#" rel="nofollow">Dentaire</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ====== Footer End ====== -->

    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
      <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
      // ==== for menu scroll
      const pageLink = document.querySelectorAll(".ud-menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".ud-menu-scroll")
              .classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }

      window.document.addEventListener("scroll", onScroll);
    </script>
  </body>
</html>
