<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>Styleguide Fresh Fitness</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">

  <link rel="stylesheet" href="https://ffstyle.herokuapp.com/FreshFitness/Public/css/main.css">
</head>
<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>
  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar" role="navigation">
      <h3 class="sg-h2 sg-subnav-title">General</h3>
      <ul class="sg-nav-group">
        <li>
          <a href="#sg-about">Intro</a>
        </li>
        <li>
          <a href="#sg-logos">Logo</a>
        </li>
        <li>
          <a href="#sg-colors">Colors</a>
        </li>
        <li>
          <a href="#sg-fontStacks">Fonts</a>
        </li>
        <li>
          <a href="#sg-grid">Grid</a>
        </li>
        <li>
          <a href="#sg-images">Images</a>
        </li>
      </ul>
      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->
<div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <span class="sg-logo"><img src="https://www.freshfitness.no/Images/FreshFitness/logo-no.svg" />
        
      </span>

      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->
    <div id="main" class="sg-main container" role="main">
    
      <div class="sg-container">
        <div class="sg-info">
          <h1 class="bottom-one">Fresh Fitness Style Guide</h1>
          <div class="sg-about sg-section">
            <h2 id="sg-about" class="sg-h2">Intro</h2>
            <p class="lead">Style guide for Fresh Fitness. Focused on elements and patterns that are used more than once, so header, footer and templates etc. are not included here.  If you have any questions contact <a href="mailto:svein.farstad@makingwaves.com"><span class="oi oi-envelope-closed small-text"></span> Svein Erik</a> at Making Waves.</p>
            <p class="no-margin--bottom"><strong>Code</strong></p>
            <p>We use <code>less</code> as a CSS pre-processor so variables marked with prefix @. To view source code <code>(html)</code> click the View source button below the elements. For latest changes check the <a href="https://github.com/healthfitnessnordic/Styleguide-FreshFitness/commits/master" target="_blank"><span class="oi oi-external-link small-text"></span> commit-history</a>.</p>
            <p class="no-margin--bottom"><strong>Design elements</strong></p>
            <p>A preliminary <a href="https://www.dropbox.com/s/vy20zq8ia0sgvz6/Fresh%20Fitness%20Styleguide.sketch?dl=0" target="_blank"><img class="sketch" src="http://static.hackingui.com.s3.amazonaws.com/2016/06/app-icon.png" alt="">Sketch style guide</a> and <a href="https://www.dropbox.com/sh/imbr8xvat7p0wsj/AAC90-tRTipaHJuo6DrT7VFfa?dl=0" target="_blank"><span class="oi oi-folder small-text"></span> PDFs</a> <i>(updated April 2017)</i> are available on Dropbox.</p>
           
          </div><!--/.sg-about-->
          <div class="sg-logos sg-section">
            <h2 id="sg-logos" class="sg-h2">Logo</h2>
            <span class="sg-logo-example bottom-one"><img src="https://www.freshfitness.no/Images/FreshFitness/logo-no.svg" alt=""></span>
            <p>Logo should always be placed on red <code>(@fresh-red-color)</code> background. Height in header is set to <code>3rem/48px.</code></p>
            <p>
              <a href="https://www.freshfitness.no/Images/FreshFitness/logo-no.svg" download class="btn btn-tool">
                <span class="oi oi-data-transfer-download small-text"></span> Download white logo (SVG)
              </a>
            </p>
          </div>

          <!-- Manually add your UI colors here. -->
          <div class="sg-colors sg-section">
            <h2 id="sg-colors" class="sg-h2">Colors</h2>
            <div class="sg-color-grid">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #E5231B;"></div>
                <div class="sg-color-name">@fresh-red-color</div>
                <div class="sg-color-value">#E5231B</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #42C1F1;"></div>
                <div class="sg-color-name">@light-blue-color</div>
                <div class="sg-color-value">#42C1F1</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #92F5E9;"></div>
                <div class="sg-color-name">@light-green-color</div>
                <div class="sg-color-value">#92F5E9</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #404042;"></div>
                <div class="sg-color-name">@dark-gray-color</div>
                <div class="sg-color-value">#404042</div>
              </div>
            </div><!--/.sg-color-grid-->
            <div class="sg-color-grid sg-color-grid-sm">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #B81B15;"></div>
                <div class="sg-color-name">@dark-red-color</div>
                <div class="sg-color-value">#B81B15</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #007DB8;"></div>
                <div class="sg-color-name">@clear-blue-color</div>
                <div class="sg-color-value">#007DB8</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #008285;"></div>
                <div class="sg-color-name">@clean-green-color</div>
                <div class="sg-color-value">#008285</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #242426;"></div>
                <div class="sg-color-name">@black-color</div>
                <div class="sg-color-value">#242426</div>
              </div>
            </div><!--/.sg-color-grid-->
            <div class="sg-color-grid sg-color-grid-sm">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #F7BEBB;"></div>
                <div class="sg-color-name">@light-red-color</div>
                <div class="sg-color-value">#F7BEBB</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #D9ABEC;"></div>
                <div class="sg-color-name">@purple-color</div>
                <div class="sg-color-value">#D9ABEC</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #FDF8BD;"></div>
                <div class="sg-color-name">@yellow-color</div>
                <div class="sg-color-value">#FDF8BD</div>
              </div>
            </div><!--/.sg-color-grid-->
            <div class="sg-color-grid sg-color-grid-sm">
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #ADADAD;"></div>
                <div class="sg-color-name">@medium-gray-color</div>
                <div class="sg-color-value">#ADADAD</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #737373;"></div>
                <div class="sg-color-name">@medium-text-gray-color</div>
                <div class="sg-color-value">#737373</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #E2E2E2;"></div>
                <div class="sg-color-name">@light-gray-color</div>
                <div class="sg-color-value">#E2E2E2</div>
              </div>
              <div class="sg-color">
                <div class="sg-color-swatch" style="background-color: #F4F4F4; border: 2px solid #e2e2e2;"></div>
                <div class="sg-color-name">@off-white-color</div>
                <div class="sg-color-value">#F4F4F4</div>
              </div>
            </div><!--/.sg-color-grid-->
             <div class="sg-markup-controls"><a class="sg-btn--top" href="#top"><span class="oi oi-arrow-top xsmall-text"></span> Back to Top</a></div>
          </div><!--/.sg-colors-->

          <!-- Manually add your fonts here. -->
          <div class="sg-font-stacks sg-section">
            <h2 id="sg-fontStacks" class="sg-h2">Font Stacks</h2>
            <dl class="sg-font-list bottom-one">
              <dt>Body Font (@ff-body-family):</dt>
              <dd style='font-family: "ClearSans", sans-serif;'>"ClearSans", sans-serif;</dd>

              <dt>Body Font Italic:</dt>
              <dd style='font-family: "ClearSans", sans-serif; font-style: italic;'>"ClearSans", sans-serif;</dd>

              <dt>Body Font Bold:</dt>
              <dd style='font-family: "ClearSans", sans-serif; font-weight: 700;'>"ClearSans", sans-serif;</dd>

              <dt>Heading Font (@ff-heading-family):</dt>
              <dd style='font-family: "stratos", sans-serif; font-weight: 300;'>"stratos", sans-serif;</dd>

              <dt>Heading Font Bold:</dt>
              <dd style='font-family: "stratos", sans-serif; font-weight: 500;'>"stratos", sans-serif;</dd>

              <dt>Heading Font Light Italic:</dt>
              <dd style='font-family: "stratos", sans-serif; font-weight: 300; font-style: italic'>"stratos", sans-serif;</dd>
            </dl>
            <p>Clear Sans is free and can be downloaded here: <a href="https://01.org/clear-SANS" target="_blank"><span class="oi oi-external-link small-text"></span> 01.org</a>.<br>
              Stratos is a licenced font, but you can download a trial version for desktop here: <a href="https://www.productiontype.com/family/stratos" target="_blank"><span class="oi oi-external-link small-text"></span> productiontype.com</a>.</p>
            <div class="sg-markup-controls"><a class="sg-btn--top" href="#top"><span class="oi oi-arrow-top xsmall-text"></span> Back to Top</a></div>
          </div><!--/.sg-font-stacks-->

          <div class="sg-grid sg-section">
            <h2 id="sg-grid" class="sg-h2">Grid</h2>
            <div class="row">
              <div class="col-md-4"><div><code>.col-md-4</code></div></div>
              <div class="col-md-4"><div><code>.col-md-4</code></div></div>
              <div class="col-md-4"><div><code>.col-md-4</code></div></div>
            </div>
            <p>We use Bootstrap grid. <a href="https://getbootstrap.com/examples/grid/" target="_blank"><span class="oi oi-external-link small-text"></span> Go here for documentation.</a></p>
            <p>For the block area grid, please read this <a href="" target="_blank"><span class="oi oi-file small-text"></span> PDF guide</a> if you want to understand how it works.</p>
             <div class="sg-markup-controls"><a class="sg-btn--top" href="#top"><span class="oi oi-arrow-top xsmall-text"></span> Back to Top</a></div>
          </div>
          <div class="sg-images sg-section">

            <h2 id="sg-images" class="sg-h2">Images</h2>
            <p>Document with <strong>recommended image formats</strong> found here.<br>
              <a href="https://docs.google.com/spreadsheets/d/1uAV9KEme6ZWGopAlY3OQ2A-9IPrXT2W6BI1Yeqxj-Ys/edit?usp=sharing" target="_blank"><span class="oi oi-file small-text"></span> https://docs.google.com/spreadsheets/d/1uAV9KEme6ZWGopAlY3OQ2A-9IPrXT2W6BI1Yeqxj-Ys/edit?usp=sharing</a>
            </p>
            <p>It's highly recommended to optimalize all images before they are used/published.<br>
              For <strong>JPG/PNG</strong> use <a href="https://tinyjpg.com/" target="_blank"><span class="oi oi-external-link small-text"></span> tinyjpg.</a><br>
              For <strong>SVG</strong> use <a href="https://jakearchibald.github.io/svgomg/" target="_blank"><span class="oi oi-external-link small-text"></span> svgomg.</a>
            </p>
             <div class="sg-markup-controls"><a class="sg-btn--top" href="#top"><span class="oi oi-arrow-top xsmall-text"></span> Back to Top</a></div>
          </div>
        </div><!--/.sg-info-->

        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="js/sg-scripts.js"></script>
  <script src="js/temp.js"></script>

  <script src="js/modernizr-custom.js"></script>
 

</body>
</html>

