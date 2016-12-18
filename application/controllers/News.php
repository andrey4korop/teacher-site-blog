<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

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
		
	public function page($id='')
	{
		if($id=='')
		{
			header('Location: /');
			exit();	
		}
		$this->load->model('Main_m');
		$new=$this->Main_m->get_new($id);
		
			if($new->type=='text')
			{
				$this->data['text']='
                <div class="un-post-caption un-shadow">
                	<div class="un-share-mask"></div>
                	<div class="un-post-head">
                        <div class="un-post-title">'.$new->title.'</div>
                    </div>
                    <div class="un-post-exc">'.$new->full_text.'</div>
                    <div class="un-divider"></div>
                    <div class="un-post-info">
                        <div class="un-clearfix"></div>
                    </div><!-- end post meta / stats -->
            	</div><!-- end post caption -->';
			}
			if($new->type=='video')
			{
				$this->data['text']='
				<div class="un-item-post un-item-medium">
            	<div class="un-post-media un-post-video un-iframe">
                	'.$new->media_video.'
                </div><!-- end post media / video -->
                <div class="un-post-caption un-shadow">
                	<div class="un-share-mask"></div>
                	<div class="un-post-head">
                        <div class="un-post-title">'.$new->title.'</div>
                        <div class="un-divider-center"></div>
                    </div>
                    <div class="un-post-content">
                        <p>'.$new->full_text.'</p>
                        <div class="un-clearfix"></div>
                    </div>
				</div><!-- end page content -->
				</div>';
			}
			if($new->type=='chit')
			{
				$this->data['text']='
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
			$this->data['text']='
			<div class="un-item-post un-item-medium">
            	<div class="un-post-media un-post-audio">
                	<img src="/img/media/item-big/img4.jpg" alt="">
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
                   
                   
            	</div><!-- end post caption -->
        	</div><!-- end item post audio -->';
			}
			
	//////////////////////////////////////////	
		$this->data['new']=$new;
		
		$this->load->view('newsvideo',$this->data);
	}
}
