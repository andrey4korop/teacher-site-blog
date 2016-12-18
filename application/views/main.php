
<!DOCTYPE html>
<html lang="en">
 
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <title>Главная</title>

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/fonts.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/select.css" rel="stylesheet">
    <link href="/css/jquery.mb.YTPlayer.min.css" rel="stylesheet">    
    <link href="/css/owl.carousel.css" rel="stylesheet">
	<link href="/css/responsive.css" rel="stylesheet">
    
    <link rel="stylesheet/less" href="/css/skin.less">
    <script src="/js/less.min.js"></script>
        
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="icon" type="image/png" href="/img/favicon-16x16.png" sizes="16x16">
    
  </head>
  
  <body>
  
  <div class="un-mask">
    
    	<div class="un-loader">
        	<div class="un-load-color"></div>
        </div>
        
    	<div class="un-load-bg"></div>
    	<div class="un-load-bar"></div>
        
  </div><!-- end mask -->    
	<div id="un-wrap">
    
		<div id="un-menu-modal" class="un-menu-modal">
	
   	<div class="un-menu-close"><i class="un-icon-close"></i></div>
        
    <nav class="un-menu-center">
        	
        <ul class="un-main-menu">
            
            <li class="un-item-active"><a><span>Меню</span></a></li>
            
            <li class="un-item-active"><a href="/">Главная</a></li>
            <li><a href="/ukrainiancomposers"><span>Украинские композиторы</span></a></li>
            <li><a href="/musicprograms"><span>Программы по музыке</span></a></li>
            <li><a href="/songsforexecution"><span>Песни для исполнения</span></a></li>
            <li><a href="/openlessons"><span>Открытые уроки</span></a></li>
            <li><a href="/extracurricularactivities"><span>Внеклассные мероприятия</span></a></li>
            <li><a href="/photoalbum"><span>Фотоальбом</span></a></li>
            <li><a href="/aboutme"><span>Обо мне</span></a></li>
            
        </ul>
        
    </nav>
    
</div>
<header class="un-header-wide un-shadow">

	<div class="un-menu-device">
    
    	<div class="un-container">
    
            <div class="un-logo-left un-logo-device un-pull-left">
                <a href="index.html"><img src="img/logo-head.png" alt="Inkas"></a>
            </div>
            
            <div class="un-btn-switch un-pull-right">
                <i class="un-icon-menu"></i>
            </div>
        
        </div>
    
    </div>

	<div class="un-menu-wide">
    
    	<nav class="un-menu-left un-pull-left">
        	
            <ul class="un-main-menu">
            
            	<li class="un-item-parent"><a href="/">Главная</a></li>
                <li class="un-item-parent"><a href="#">Новости<i class="un-icon-keyboard-arrow-down"></i></a>
                    <ul class="un-sub-menu">
                        <li><a href="/ukrainiancomposers"><span>Украинские композиторы</span></a></li>
                        <li><a href="/musicprograms"><span>Программы по музыке</span></a></li>
                        <li><a href="/songsforexecution"><span>Песни для исполнения</span></a></li>
                    </ul>
                </li>
                <li class="un-item-parent"><a href="/openlessons">Открытые уроки</a></li>
            </ul>
        </nav>
        
        <div class="un-logo-center">
        	<a href="/"><img src="/img/logo-center.png" alt=""></a>
        </div>
        
        <nav class="un-menu-right un-menu-wide un-pull-right">
            <ul class="un-main-menu">
            	<li class="un-item-parent"><a href="/extracurricularactivities">Внеклассные мероприятия</a></li>
                <li class="un-item-parent"><a href="/photoalbum"><span>Фотоальбом</span></a></li>   
                <li class="un-item-parent"><a href="/aboutme"><span>Обо мне</span></a></li>  
            </ul>
        </nav>
        
        <div class="un-clearfix"></div>
                    
    </div>
    
    <div class="un-share-center">
    
    	<ul class="un-list-share-top un-list-share social-share">
                            
            <li id="un-btn-search"><a href=""><i class="un-icon-search"></i></a></li>
            <li><a target="_blank" href="https://facebook.com"><i class="un-icon-facebook"></i></a></li>
            <li><a target="_blank" href="http://www.google.com/"><i class="un-icon-google-plus"></i></a></li>
            <li><a target="_blank" href="https://instagram.com/"><i class="un-icon-instagram"></i></a></li>
            <li><a target="_blank" href="https://vk.com/"><i class="fa fa-vk"></i></a></li>
                
        </ul>
                
    </div>

</header>        
        <div class="un-item-slider un-slider-full">
	
    <div class="un-post-media un-post-slider">
                
        <div class="un-post-slides un-slider-big">
             <?php foreach ($slider as $slide){     ?>          
        	<div class="un-post-slide">
                
                <div class="un-slide-thumb">
                	<div class="un-slide-media"><img src="<?php echo $slide->url?>" alt=""></div>
            		<div class="un-slide-caption un-post-shadow">
                                    
                        
                        <div class="un-post-title"><a href="#"><?php echo $slide->title?></a></div>
                        
                                                                        
                    </div>
            	</div>
                
            </div>
		<?php	 } ?>
           </div><!-- end post media / slider -->
    	
    </div>    
    
</div>
        
        <div class="un-page-blog un-page-sidebar">
    
            <div class="un-container">
                        
            	<div class="un-col-md-8 un-content">
        
                	        <div class="un-list-post">
        
        				<div class="un-item-post un-item-medium">
            
            	<div class="un-post-media un-post-slider">
                	
                    <div class="un-post-slides un-slider-big">
                         <?php foreach ($slider2 as $slide){     ?>        	
                    	<div class="un-post-slide"><img src="<?php echo $slide->url?>" alt=""></div>
                    	
						<?php	 } ?>
                    </div>
                                                    
                </div><!-- end post media / slider -->
                
        	</div><!-- end item post slide -->    
			<?php foreach($news as $new)
						   {
							   echo $new;
						   }?>				
        	           
    	</div><!-- end list post -->
        
        <div class="un-posts-nav">
        
            <div class="un-nav-prev un-btn-nav un-btn-style-1 un-pull-left">
                <a href="#"><i class="un-icon-angle-double-left"></i><span>Прерыдущая страница</span></a>
            </div>
            
            <div class="un-nav-next un-btn-nav un-btn-style-1 un-pull-right">
                <a href="#"><span>Следующая страница</span><i class="un-icon-angle-double-right"></i></a>
            </div>
            
            <div class="un-clearfix"></div>
        
        </div><!-- end posts nav -->                
                </div>
                
                <aside class="un-col-md-4 un-sidebar">

                	    <ul class="un-list-widgets">
    
    	    	<li class="un-item-widget un-widget-about un-shadow">
        
        	<div class="un-widget-title"><?php echo $about_me->title?></div>
            
            <div class="un-widget-about-photo">
            
            	<img src="<?php echo $about_me->img ?>" alt="">
                
            </div>
            
            <div class="un-divider-center"></div>
            
            <div class="un-widget-about-exc"><?php echo $about_me->full_text?>[...]</div>
            
            <div class="un-btn-more un-btn-style-2"><a href="/aboutme">Детальнее<i class="un-icon-feather"></i></a></div>
        	
        </li><!-- end widget about-->
        
    	        <li class="un-item-widget un-widget-stats">
        
        	<div class="un-widget-title"><span class="un-line">Статистика блога</div>
            
            <div class="un-widget-bar"><span class="un-widget-bar-label">Новостей</span>
            	<span id="un-widget-bar-1" class="un-widget-bar-count"><?php echo $count['0']?></span></div>
                
            <div class="un-widget-bar"><span class="un-widget-bar-label">Аудио</span>
            	<span id="un-widget-bar-2" class="un-widget-bar-count"><?php echo $count['1']?></span></div>
                
            <div class="un-widget-bar"><span class="un-widget-bar-label">Видео</span>
            	<span id="un-widget-bar-3" class="un-widget-bar-count"><?php echo $count['2']?></span></div>
                
            <div class="un-widget-bar"><span class="un-widget-bar-label">Цитат</span>
            	<span id="un-widget-bar-4" class="un-widget-bar-count"><?php echo $count['3']?></span></div>
                
            
            
        </li><!-- end widget stats-->
        
		        

    	        <li class="un-item-widget un-widget-posts un-shadow">
        
        	<div class="un-widget-title">Важные новости</div>
            <?php foreach ($vaz_news as $vaz_new ) { ?>
            <div class="un-widget-post">
            	<?php if (!empty($vaz_new->media_img)) { ?>
                <div class="un-widget-post-image">
                	<img src="<?php echo $vaz_new->media_img ?>" alt="">
                	<div class="un-item-overlay-3"></div><div class="un-item-more-icon"><a href="#"><i class="un-icon-search"></i></a></div>
                </div>
                <?php } ?>
                <div class="un-widget-post-title"><a href="/news/page/<?php echo $vaz_new->id ?>"><?php echo $vaz_new->title ?></a></div>
                <div class="un-widget-post-exc"><?php echo $vaz_new->full_text ?>[...]</div>
                
                <div class="un-divider un-pull-left"></div>
                <div class="un-widget-post-date un-pull-right"><?php echo $vaz_new->date ?></div>
                
                <div class="un-clearfix"></div>
                
            </div>
            <?php }?>
            
            
                    
        </li><!-- end widget posts-->

    	        <li class="un-item-widget un-widget-social">

        	<div class="un-widget-title"><span class="un-line">Подписаться на меня</div>
            
            <ul class="un-widget-list-social">
            	
            	<li><a href="#"></a><i class="un-icon-social-twitter"></i></li>
            	<li><a href="#"></a><i class="un-icon-facebook"></i></li>
            	<li><a href="#"></a><i class="un-icon-google-plus"></i></li>
            	<li><a href="#"></a><i class="un-icon-instagram"></i></li>
            	<li><a href="#"></a><i class="fa fa-vk"></i></li>
            
            </ul>
        
        </li><!-- end widget socials-->

    	        

    	        

    	        

    	        

    	      

    	        
        
    </ul><!-- end list widgets -->
                
                </aside>
                
                <div class="un-clearfix"></div>
             
        	</div>
                                    
        </div>
    
	<!-- </div> end wrap inside footer -->
    
        <footer class="un-footer">
        
            <div class="un-container">
            
                <div class="un-btn-top">
                    <i class="un-icon-keyboard-arrow-up"></i>
                </div>
            
                <div class="un-logo-footer">
                    <a href="#"><img src="img/logo-footer.png" alt=""></a>
                </div>
            
                <div class="un-copy">&copy; 2016 Created by <a href="http://shift.od.ua">SHIFT</a> - All Rights Reserved</div>
            
            </div>
        
        </footer><!-- end footer -->
    
    </div><!-- end wrap -->
	        
    <script src="/js/jquery-1.11.2.min.js"></script> 
    <script src="/js/jquery.debouncedresize.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="/js/TweenMax.min.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/jquery.scrollTo.min.js"></script>
   	<script src="/js/jquery.customSelect.js"></script>
    <script src="/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="https://use.fontawesome.com/c1e74d3555.js"></script>
</body>
    
</html>	
	