<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public $data;
	public function __construct()
        {
			parent::__construct();
			$this->load->model('Main_m');
			$this->data['slider']=$this->Main_m->get_slider();
			$this->data['slider2']=$this->Main_m->get_slider2();
				//////////////////////////////////////////	
			$this->data['about_me']=$this->Main_m->get_setting('about_me');
			$pos = strpos($this->data['about_me']->full_text, '.');
			$this->data['about_me']->full_text=substr($this->data['about_me']->full_text, 0, $pos); 
			/////////////////////////////////////////////////
			$this->data['vaz_news']=$this->Main_m->get_vaz_new();
			foreach ($this->data['vaz_news'] as $value)
			{
				$pos = strpos($value->full_text, '.');
				$value->full_text=substr($value->full_text, 0, $pos);
			}
			/////////////////////////////////////////////////////////////
			$this->data['count']['0']=$this->Main_m->get_count('text');
			$this->data['count']['1']=$this->Main_m->get_count('audio');
			$this->data['count']['2']=$this->Main_m->get_count('video');
			$this->data['count']['3']=$this->Main_m->get_count('chit');
			/////////////////////////////////////////////////////////////
        }
	private function _process($news)
	{
		$i=0;
		foreach($news as $new)
		{
			if($new->type=='text')
			{
				$text='
				 <div class="un-post-caption un-shadow">
                	<div class="un-share-mask"></div>
						<div class="un-post-head">
                        <div class="un-post-title">'.$new->title.'</div>
                        <div class="un-divider-center"></div>
                    </div>
                    <div  class="un-quote-exc">
                       <p>'.$new->full_text.'[...]</p></div>
                    <div class="un-btn-more un-btn-style-1">
                    	<a href="/news/page/'.$new->id.'">Читать полностью<i class="un-icon-read-more"></i></a>
                    </div>
                    <div class="un-post-info">
                    	<div class="un-post-meta un-pull-left">
                        	<span class="un-post-date">'.$new->date.'</span>  
                        </div>
                        <div class="un-clearfix"></div>
                    </div><!-- end post meta / stats -->
            	</div><!-- end post caption -->';
			}
			if($new->type=='video')
			{
				$text='
			<div class="un-item-post un-item-medium">
            	<div class="un-post-media un-post-video un-iframe">'.$new->media_video.'</div><!-- end post media / video -->
                <div class="un-post-caption un-shadow">
                	<div class="un-share-mask"></div>
                	<div class="un-post-head">
                        <div class="un-post-title">'.$new->title.'</div>
                        <div class="un-divider-center"></div>
                    </div>
                    <div class="un-post-exc">'.$new->full_text.'</div>
                    <div class="un-btn-more un-btn-style-2">
                    	<a href="/news/page/'.$new->id.'">Просмотреть полностью<i class="un-icon-read-more"></i></a>
                    </div>
                    <div class="un-post-info">
                    	<div class="un-post-meta un-pull-left">
                        	<span class="un-post-date">'.$new->date.'</span> 
                        </div>
                        <div class="un-clearfix"></div>
                     </div><!-- end post meta / stats -->
            	</div><!-- end post caption -->
        	</div><!-- end item post video -->';
			}
			if($new->type=='chit')
			{
				$text='
			<div class="un-item-post un-item-medium">
            	<div class="un-post-quote un-shadow">
                    <div class="un-quote-before"><i class="un-icon-left-quote"></i></div>
                        <div class="un-quote-text">'.$new->full_text.'</div>
                        <div class="un-quote-author"><i class="un-icon-user"></i>'.$new->title.'</div>
                    <div class="un-quote-after"><i class="un-icon-right-quote"></i></div>
                </div>
                <div class="un-quote-arrow"></div>
            </div><!-- end item post quote -->';
			}
			if($new->type=='audio')
			{
			$text='
			<div class="un-item-post un-item-medium">
            	<div class="un-post-media un-post-audio">
                	<img src="img/media/item-big/img4.jpg" alt="">
                    <div class="un-audio-play"><i class="un-icon-play"></i></div>
                    <div class="un-audio-equalizer"></div>
                    <audio>
                        <source src="'.$new->media_audio.'">
                    </audio>
                </div><!-- end post media / audio -->
                <div class="un-post-caption un-shadow">
                	<div class="un-share-mask"></div>
                	<div class="un-post-head">
                        <div class="un-post-title">'.$new->title.'</div>
                        <div class="un-divider-center"></div>
                    </div>
                    <div class="un-post-exc">'.$new->full_text.'</div>
                    <div class="un-btn-more un-btn-style-4">
                    	<a href="/news/page/'.$new->id.'">Прослушать полностью<i class="un-icon-headphones"></i></a>
                    </div>
                    <div class="un-post-info">
                    	<div class="un-post-meta un-pull-left">
                        	<span class="un-post-date">'.$new->date.'</span> 
                        </div>
                        <div class="un-clearfix"></div>
                    </div><!-- end post meta / stats -->
            	</div><!-- end post caption -->
        	</div><!-- end item post audio -->';
			}
			$ret[$i++]=$text;
		}
		return $ret;
	}
	
	public function index()
	{
		
		$news=$this->Main_m->get_news();
		
		$this->data['news']=$this->_process($news);

		$this->load->view('main',$this->data);
	}
	public function ukr_com()
	{
		if($news=$this->Main_m->get_news_cat('Украинские композиторы'))
		{
			$this->data['news']=$this->_process($news);	
			$this->load->view('category',$this->data);
		}
		else
		{
			header('Location: /');
		}
	}
	public function music()
	{
		if($news=$this->Main_m->get_news_cat('Программы по музыке'))
		{
			$this->data['news']=$this->_process($news);	
			$this->load->view('category',$this->data);
		}
		else
		{
			header('Location: /');
		}
	}
	public function song()
	{
		if($news=$this->Main_m->get_news_cat('Песни для исполнения'))
		{
			$this->data['news']=$this->_process($news);	
			$this->load->view('category',$this->data);
		}
		else
		{
			header('Location: /');
		}
	}
	public function openlessons()
	{
		if($news=$this->Main_m->get_news_cat('Открытые уроки'))
		{
			$this->data['news']=$this->_process($news);	
			$this->load->view('category',$this->data);
		}
		else
		{
			header('Location: /');
		}
	}
	public function extracurricularactivities()
	{
		if($news=$this->Main_m->get_news_cat('Внеклассные мероприятия'))
		{
			$this->data['news']=$this->_process($news);	
			$this->load->view('category',$this->data);
		}
		else
		{
			header('Location: /');
		}
	}
	
	
	
	public function photoalbum()
	{
		$this->data['about_me']=$this->Main_m->get_setting('about_me');
		$this->data['slider3']=$this->Main_m->get_slider3();
		$this->load->view('photoalbum',$this->data);
	}
	
	public function aboutme()
	{
		$this->data['about_me']=$this->Main_m->get_setting('about_me');
		$this->load->view('aboutme',$this->data);
	}
	
	
}
