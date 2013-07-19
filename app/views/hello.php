<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gal Schlezinger: Web Artisan</title>

  <link rel="stylesheet" href="/bower_components/alef/alef.css" type="text/css" />
  <!-- <link rel="stylesheet" href="/bower_components/fanwood-webfont/webfonts/stylesheet.css" type="text/css" /> -->
  <link href='http://fonts.googleapis.com/css?family=Fanwood+Text' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="/bower_components/league-gothic/webfonts/stylesheet.css" type="text/css" />
  <link rel="stylesheet" href="/fonts/style.css" />
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css" />
  <?php echo stylesheet() ?>
  <?php echo script() ?>
</head>
<body>
  <header>
    <div id="logo-holder"></div>
    <section id="about-me">
      <a id="who-am-i" class="hidden-anchors" name="who-am-i" title="Who Am I?" href="#who-am-i">Who Am I?</a>
      <h1>
        <span>Well,</span>
        <span>Hello </span>
        <span>There!</span>
      </h1>
      <p id="about-me-text">
        Ladies, Gentlemen, This is Gal Schlezinger speakin' over here.<br />
        Currently, I'm all like Senior Java / SOA developer @ IDF. <br />
        I tend to make people laugh while living the dream of awesome Rock n' Roll.
      </p>

      <div class="advantage-list-container">
        <h2 class="advantage-list-header">What I Do</h2>
        <ul id="what-i-do-list">
          <li class="advantage-list-item">Awesome server-side APIs</li>
          <li class="advantage-list-item">Fantastic client-side apps</li>
          <li class="advantage-list-item">Fresh web design</li>
          <li class="advantage-list-item">Programmin'</li>
          <li class="advantage-list-item">Music. OH YES.</li>
        </ul>
      </div>

      <div class="clearfix"></div>

      <div class="advantage-list-container">
        <h2 class="advantage-list-header">How I Do</h2>
        <ul id="how-i-do-list">
          <li class="advantage-list-item">PHP / Java</li>
          <li class="advantage-list-item">Javascript</li>
          <li class="advantage-list-item">HTML5 + CSS3</li>
          <li class="advantage-list-item">Photoshoppin'</li>
          <li class="advantage-list-item">Pure Rock n' Roll.</li>
        </ul>
      </div>
    </section>
    <hr class="clearfix"></hr>
    <ul id="header-links">
      <li>
        <a class="header-link" title="Schlez" id="header-schlez" href="/">
          <span class="hidden-text">Schlez</span>
          <i class="header-icon schlezicon-Circyle"></i>
        </a>
      </li>
      <li>
        <a class="header-link" title="Facebook Profile" id="header-facebook" href="http://facebook.com/galstar">
          <span class="hidden-text">Facebook</span>
          <i class="header-icon icon-facebook-sign"></i>
        </a>
      </li>
      <li>
        <a class="header-link" title="YouTube Channel" id="header-youtube" href="http://youtube.com/galspitfire">
          <span class="hidden-text">Youtube</span>
          <i class="header-icon icon-youtube-sign"></i>
        </a>
      </li>
      <li>
        <a class="header-link" title="Twitter" id="header-twitter" href="http://twitter.com/galstar">
          <span class="hidden-text">Twitter</span>
          <i class="header-icon icon-twitter-sign"></i>
        </a>
      </li>
      <li>
        <a class="header-link" title="GitHub" id="header-github" href="http://github.com/schniz">
          <span class="hidden-text">GitHub</span>
          <i class="header-icon icon-github"></i>
        </a>
      </li>
      <li>
        <a class="header-link" title="Instagram" id="header-instagram" href="http://instagr.am/schlez">
          <span class="hidden-text">Instagram</span>
          <i class="header-icon icon-instagram"></i>
        </a>
      </li>
    </ul>
  </header>

  <div class="clearfix"></div>

  <section id="blog-posts">
    <ul id="blog-post-list">
      <li>
        <article class="article-blog">
          <h1><a href="{{ article.link }}">{{ article.title }}</a></h1>
          <h2>{{ article.date }}</h2>
          <div class="contents">
            <p>
              These are my words.
            </p>
          </div>
        </article>
      </li>

      <li>
        <article class="article-instagram">
          <h1><a href="{{ article.link }}">Uploaded a photo to Instagram</a></h1>
          <h2>{{ article.date }}</h2>
          <div class="contents">
            <p>
              <img class="article-instagram-photo" src="http://distilleryimage1.ak.instagram.com/f02a2c06efde11e2954322000ae80d8d_7.jpg" />
            </p>
            <p>
              {{ article.contents }} <!-- A link will be added in the contents, automatically. -->
            </p>
          </div>
        </article>
      </li>
    </ul>
  </section>
</body>
</html>
