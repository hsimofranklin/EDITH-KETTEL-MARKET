<?php  
/*------------------------------------------------------------------------
# author    your name or company
# copyright Copyright © 2011 example.com. All rights reserved.
# @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website   http://www.example.com
-------------------------------------------------------------------------*/

defined( '_JEXEC' ) or die; 

// parameters (template)
$modernizr = $this->params->get('modernizr');
$bootstrap = $this->params->get('bootstrap');
$pie = $this->params->get('pie');

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx'); // parameter (menu entry)
$tpath = $this->baseurl.'/templates/'.$this->template;

$this->setGenerator(null);

// load sheets and scripts
$doc->addStyleSheet($tpath.'/css/template.css.php?b='.$bootstrap.'&amp;v=1'); 
if ($modernizr==1) $doc->addScript($tpath.'/js/modernizr-2.6.2.js'); // <- this script must be in the head

// unset scripts, put them into /js/template.js.php to minify http requests
unset($doc->_scripts[$this->baseurl.'/media/system/js/mootools-core.js']);
unset($doc->_scripts[$this->baseurl.'/media/system/js/core.js']);
unset($doc->_scripts[$this->baseurl.'/media/system/js/caption.js']);

?><!doctype html>
<!--[if IEMobile]><html class="iemobile" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="<?php echo $this->language; ?>"> <!--<![endif]-->

<head>
  <script type="text/javascript" src="<?php echo $tpath.'/js/template.js.php?b='.$bootstrap.'&amp;v=1'; ?>"></script>
  <jdoc:include type="head" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /> <!-- mobile viewport -->
  <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/apple-touch-icon-57x57.png"> <!-- iphone, ipod, android -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/apple-touch-icon-72x72.png"> <!-- ipad -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/apple-touch-icon-114x114.png"> <!-- iphone retina -->
  <?php if ($pie==1) : ?>
    <!--[if lte IE 8]>
      <style> 
        {behavior:url(<?php echo $tpath; ?>/js/PIE.htc);}
      </style>
    <![endif]-->
  <?php endif; ?>
</head>
  
<body class="<?php echo $pageclass; ?>">
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
          <a class="navbar-brand" href="index.html">EDITH KETTEL MARKET SERVICES</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="about.html">aktuelle Favoriten</a></li>
            <li><a href="services.html">Philosophie</a></li>
            <li><a href="contact.php">Kontakt</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Katalogue <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="portfolio-1-col.html">1 Column Portfolio</a></li>
                <li><a href="portfolio-2-col.html">2 Column Portfolio</a></li>
                <li><a href="portfolio-3-col.html">3 Column Portfolio</a></li>
                <li><a href="portfolio-4-col.html">4 Column Portfolio</a></li>
                <li><a href="portfolio-item.html">Single Portfolio Item</a></li>
              </ul>
            </li>
            <li><a href="about.html">Impressum</a></li>
            <li><a href="about.html">AGB</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    
    <div>
    
      <?php if ($this->countModules('header-bottom')): ?>
            <div id="slideshow">
               <jdoc:include type="modules" name="header-bottom" style="none" />
            </div>    
      <?php endif; ?>
      
    </div>
        
        
    <div class="section">

      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-4 product">
            <h3> Produkt des Monats</h3>
            <p>Irendige Quartzarmbanduhr für Herren und Damen. Metallgehäuse mit Edelstahlboden und 3 atm waterresistant Farbiges PU-Lederband. Japanisches Quartzwerk Citizen Miyota </p>
            <a href="">> weiter Informationen anfordern  </a>
          </div>
          <div class="col-lg-4 col-md-4 product">
            <h3> Produkt des Monats</h3>
            <p>Irendige Quartzarmbanduhr für Herren und Damen. Metallgehäuse mit Edelstahlboden und 3 atm waterresistant Farbiges PU-Lederband. Japanisches Quartzwerk Citizen Miyota </p>
            <a href="">> weiter Informationen anfordern  </a>
          </div>
          <div class="col-lg-4 col-md-4 product">
            <h3> Produkt des Monats</h3>
            <p>Irendige Quartzarmbanduhr für Herren und Damen. Metallgehäuse mit Edelstahlboden und 3 atm waterresistant Farbiges PU-Lederband. Japanisches Quartzwerk Citizen Miyota </p>
            <a href="">> weiter Informationen anfordern  </a>
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section -->
    
    <div class="section-colored text-center">

      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <h2>Solorum eum ipicat unt aut occuptatem</h2>
            <p>as qui vel il magnam, natem dellore rnatusam nonserum quia quiat as qui vel il magnam, natem dellore rnatusam nonserum</p>
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><br/><br/><br/><!-- /.section-colored -->
    <br><br><br>
 
 <!-- Desktop contacts -->  
 <?php if ($this->countModules('content-bottom')): ?>   
  <div class="section-colored1 visible-lg visible-md hidden-xs hidden-sm">  
    <jdoc:include type="modules" name="content-bottom" style="none" />
  </div>
<?php endif; ?>

     
  
   <!-- <div class="section-colored1">
      <div class="container">
        <div class="row">
          <div class="col-xs-4 col-md-4 col-lg-4">
           <img class="img-responsive img-circle" src="<?php echo $tpath.'/images/smallville.jpg?b='.$bootstrap.'&amp;v=1'; ?>">
          </div>
          <div class="col-xs-4 col-md-4 col-lg-3 col-lg-offset-1">
              <address>
		         <p class="contacts">Wir beraten</p><br>
		          <abbr title="Phone">P:</abbr> +49 (0) 911 / 83 45 22<br>
		           oder per e-mail:<br>
                 info@edithkettel.de
	           </address>
          </div>
          <div class="col-xs-4 col-md-4 col-lg-4">
           <img class="img-responsive img-circle" src="<?php echo $tpath.'/images/smallville.jpg?b='.$bootstrap.'&amp;v=1'; ?>">
          </div>
        </div>
      </div>
    </div> -->
    
    <div class="section">
      <div class="container">
        <div class="row kataloge">    
          <div class="col-lg-12 text-center">
            <h1>Kataloge</h1>
            <br>
          </div>
          <div class="container">
          <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 product-list">
            <a href="#"><img class="img-responsive img-circle" width="150" height="150" src="<?php echo $tpath.'/images/product.jpg?b='.$bootstrap.'&amp;v=1'; ?>"></a>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 product-list">
            <a href="#"><img class="img-responsive img-circle" width="150" height="150" src="<?php echo $tpath.'/images/product.jpg?b='.$bootstrap.'&amp;v=1'; ?>"></a>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 product-list">
            <a href="#"><img class="img-responsive img-circle" width="150" height="150" src="<?php echo $tpath.'/images/product.jpg?b='.$bootstrap.'&amp;v=1'; ?>"></a>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 product-list">
            <a href="#"><img class="img-responsive img-circle" width="150" height="150" src="<?php echo $tpath.'/images/product.jpg?b='.$bootstrap.'&amp;v=1'; ?>"></a>
          </div>
          </div>
          <div class="container">
          <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 product-list">
            <a href="#"><img class="img-responsive img-circle" width="150" height="150" src="<?php echo $tpath.'/images/product.jpg?b='.$bootstrap.'&amp;v=1'; ?>"></a>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 product-list">
            <a href="#"><img class="img-responsive img-circle" width="150" height="150" src="<?php echo $tpath.'/images/product.jpg?b='.$bootstrap.'&amp;v=1'; ?>"></a>
          </div>
           <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 product-list">
            <a href="#"><img class="img-responsive img-circle" width="150" height="150" src="<?php echo $tpath.'/images/product.jpg?b='.$bootstrap.'&amp;v=1'; ?>"></a>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-6 col-sm-6 product-list">
            <a href="#"><img class="img-responsive img-circle" width="150" height="150" src="<?php echo $tpath.'/images/product.jpg?b='.$bootstrap.'&amp;v=1'; ?>"></a>
          </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section -->
  
  <!-- Mobiles and Tablets contacts -->  
    <?php if ($this->countModules('content-bottom')): ?>   
     <div class="hidden-lg hidden-md visible-xs visible-sm">  
     <jdoc:include type="modules" name="content-bottom" style="none" />
     </div>
    <?php endif; ?>
 
 
<!-- Mobile Footer -->
    <div class="section visible-xs visible-sm">
      <div class="container">
        <div class="row">
          <div class="col-xs-1 col-sm-1"></div>
          <div class="col-xs-10 col-sm-10 mobile-footer">
               <a href="mailto:info@edithkettel.de"><p class="text-center">Anrufen</p></a>
          </div>
          <div class="col-xs-1 col-sm-1"></div>
        </div>
        <div class="row">
          <div class="col-xs-1 col-sm-1"></div>
          <div class="col-xs-10 col-sm-10 mobile-footer">
               <a href="mailto:info@edithkettel.de"><p class="text-center">Email</p></a>
          </div>
          <div class="col-xs-1 col-sm-1"></div>
        </div>
        <div class="row">
          <div class="col-xs-1 col-sm-1"></div>
          <div class="col-xs-10 col-sm-10 mobile-footer">
               <a href="mailto:info@edithkettel.de"><p class="text-center">Karte</p></a>
          </div>
          <div class="col-xs-1 col-sm-1"></div>
        </div>   
      </div><!-- /.container -->
    </div><!-- /.section -->
  
 <hr>  
    
   <div class="container visible-md visible-lg" id="foot">
      <footer>
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <p>
             <?php if ($this->countModules('footer')): ?>
               <jdoc:include type="module" name="footer" title="footer-kettel" style="none" />
             <?php endif; ?>
             <?php if ($this->countModules('footer')): ?>
               <jdoc:include type="modules" name="footer" title="copyright-kettel" style="none" />
             <?php endif; ?>  
            </p>
          </div>
        </div>
      </footer>
  </div><!-- /.container -->

  <jdoc:include type="modules" name="debug" />
</body>

</html>
