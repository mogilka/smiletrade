<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      template.php
* @Package:   GetSimple
* @Action:    Twitter Bootstrap for GetSimple CMS
*
*****************************************************/
?>
<!doctype html>
<?php include('header.inc.php'); ?>
<body id="<?php get_page_slug(); ?>">
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
          <div class="nav-collapse">
            <ul class="nav">
              <?php get_navigation(return_page_slug()); ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="span9">
        <h1><?php get_page_title(); ?></h1>
        <?php get_page_content(); ?>
        </div>
        
        <div class="span3">
        <?php get_component('sidebar'); ?>
        </div>
      </div>

        <div id="bubbles">
			<div class="bubble300 bubble1">
				<a href="/oxygenthickener/">
                    <img src="/data/uploads/goods/health/oxygen_thickener/thickener2.jpg">
                    <h2 class="bubble_header">Кислородный концентратор</h2>
                    <div class="bubble_hover"><br><br><p>Подробнее</p></div>
				</a>
			</div>
			<div class="bubble300 bubble2">
				<a href="/filterbottle/">
                    <img src="/data/uploads/goods/health/filter_bottles/bobble-water-bottle-oliver-bonas.jpg">
                    <h2 class="bubble_header">Бутылка с фильтром</h2>
                    <div class="bubble_hover"><br><br><p>Подробнее</p></div>
				</a>
			</div>
			<div class="bubble300 bubble3">
				<a href="/filterflask/">
                    <img src="/data/uploads/goods/health/filter_flasks/flask.jpg">
                    <h2 class="bubble_header">Бутыль с фильтром</h2>
                    <div class="bubble_hover"><br><br><p>Подробнее</p></div>
				</a>
			</div>
        </div>

<?php include('footer.inc.php'); ?>
