`<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="x-icon" href="Logo.png" />
    <title>Jeho Subedi ジ</title>
    <script
      src="https://kit.fontawesome.com/6ca42555ea.js"
      crossorigin="anonymous"
    ></script>
    <!--CSS FILES-->
    
    <link rel="stylesheet" href="<?=base_url()?>css/style.css" />
    <link rel="stylesheet" href="<?=base_url()?>css/skins/color-1.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <!-- Style Switcher -->
    <link
      rel="stylesheet"
      href="css/skins/color-1.css"
      class="alternate-style"
      title="color-1"
      disabled
    />
    <link
      rel="stylesheet"
      href="css/skins/color-2.css"
      class="alternate-style"
      title="color-2"
      disabled
    />
    <link
      rel="stylesheet"
      href="css/skins/color-3.css"
      class="alternate-style"
      title="color-3"
      disabled
    />
    <link
      rel="stylesheet"
      href="css/skins/color-4.css"
      class="alternate-style"
      title="color-4"
      disabled
    />
    <link
      rel="stylesheet"
      href="css/skins/color-5.css"
      class="alternate-style"
      title="color-5"
      disabled
    />
    <link rel="stylesheet" href="<?=base_url()?>css/style-switcher.css" />
  </head>
  <body>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>

    <!--MAIN CONTAINER START-->
    <div class="main-container">
      <!--ASIDE START-->
      <div class="aside">
        <div class="logo">
          <a href=""><span>ジン</span></a>
        </div>
        <div class="nav-toggler">
          <span></span>
        </div>
        <ul class="nav">
          <li>
            <a href="home" class="active"><i class="fa fa-home"></i> Home</a>
          </li>
          <li>
            <a href="#about"><i class="fa fa-user"></i> About</a>
          </li>
          <li>
            <a href="#services"><i class="fa fa-list"></i>Services</a>
          </li>
          <li>
            <a href="#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a>
          </li>
          <li>
            <a href="#contact"><i class="fa fa-comments"></i>Contact</a>
          </li>
          <div class="container">
            <a
              href="https://www.linkedin.com/in/jeho-ram-subedi-b0436624b/"
              class="fa fa-linkedin"
              target="_blank"
              rel="noopener"
            ></a>
            <a
              href="https://github.com/jehosubedi"
              class="fa fa-github"
              target="_blank"
              rel="noopener"
            ></a>
            <a
              href="https://www.behance.net/jehosubedi"
              class="fa fa-behance"
              target="_blank"
              rel="noopener"
            ></a>
          </div>
        </ul>
      </div>
      <!--ASIDE END-->
      <!--Main Content Start-->`
      <div class="main-content">
        <!--Home Section Start-->
        <section class="home active section" id="home">
          <div class="container">
            <div class="row">
              <div class="home-info padd-15">
                <h3 class="hello">
                  Hello, my name is <span class="name">Jeho Subedi</span>
                </h3>
                <h3 class="my-profession">
                  I'm a <span class="typing">Programmer</span>
                </h3>
                <p align="justify">
                  
Enthusiastically embracing the forefront of technology and design, I specialize in curating custom websites, applications, and graphics that elevate brand identity and establish a commanding online presence. My commitment is to propel you beyond your digital aspirations by delivering unparalleled, tailored solutions. Through a collaborative process, I immerse myself in your vision to create distinctive and compelling outcomes that not only meet but exceed expectations. 
                </p>

                <button
                  type="submit"
                  class="btn"
                  onclick="window.open('Resume-CV.pdf')"
                >
                  Download CV <i class="fas fa-download"></i>
                </button>
              </div>
              <div class="home-img padd-15">
                <img src="images/hero.webp" alt="" />
              </div>
            </div>
          </div>
        </section>
      </div>
      <!--Main Content End-->
    </div>
    <!--MAIN CONTAINER END-->
    <!-- Style Switcher Start -->
    <div class="style-switcher">
      <div class="style-switcher-toggler s-icon">
        <i class="fas fa-cog fa-spin"></i>
      </div>
      <div class="day-night s-icon">
        <i class="fas"></i>
      </div>
      <h4>Theme Colors</h4>
      <div class="colors">
        <span class="color-1" onclick="setActiveStyle('color-1')"></span>
        <span class="color-2" onclick="setActiveStyle('color-2')"></span>
        <span class="color-3" onclick="setActiveStyle('color-3')"></span>
        <span class="color-4" onclick="setActiveStyle('color-4')"></span>
        <span class="color-5" onclick="setActiveStyle('color-5')"></span>
      </div>
    </div>
    <!-- Style Switcher End -->
    <!--JS FILES-->
    <script>
      function showModal() {
            // Show the modal and overlay
            document.getElementById('myModal').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function closeModal() {
            // Close the modal and overlay
            document.getElementById('myModal').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';

            // Redirect to a different page after the modal is closed
            window.location.href = "success_page.php";
        }
    </script>
    <script>
        function showPopup() {
            // Show a simple popup message
            alert("Form submitted successfully!");

            // Redirect to a different page after the popup
            window.location.href = "success_page.php";
        }
    </script> 
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"
      referrerpolicy="noopener"
    ></script>
    <script src="<?=base_url()?>js/script.js"></script>
    <script src="<?=base_url()?>js/style-switcher.js"></script>
    <script src="<?=base_url()?>js/cursor.js"></script>
  </body>
</html>
