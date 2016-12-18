<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public $id='';
	public $title='';
	public $full_text='';
	public $media_video='';
	public $media_audio='';
	public $type='';
	public $media_img='';
	public $category='';
	public $date='';
	
	
	public function __construct()
        {
			parent::__construct();
			$this->load->model('Main_m');
			//$this->load->library('session');
		}
	public function index()
	{
		/*foreach ($this->session->userdata() as $key => $value) 
                {
                         $data[$key]= $value;
                }
		if((!empty($data['yes'])) && ($data['yes']=='yes'))
		{
			$data['form'] ='';
			$this->load->view('admin_addnew',$data);
			
		}
		else
		{
			$this->load->view('login');
		}*/
		if(!empty($_POST))
		{
			if($this->Main_m->login($_POST['login'],$_POST['pass']))
			{
				//$cookie['yes']='yes';
				//$this->session->set_userdata($cookie);
				//header('Location: /admin');
				$data['form'] ='';
				$this->load->view('admin_addnew',$data);
			}
			else
			{
				$this->load->view('login');
			}
		}
		else{$this->load->view('login');}
		
		
	}
	public function exit1()
	    {
           
            /*foreach ($this->session->userdata() as $key => $value) 
            {
                $this->session->unset_userdata($key);
            }*/
            
            header('Location: /');
        }
	public function editslider()
	{
	
		
		
				$da = new Dada();
        
		
		$data['slider']=$this->Main_m->get_slider();
		
		if(!empty($_POST))
		{
			
			if($_POST['title1']!='')
			{
				$da->title=$_POST['title1'];
				$da->id='1';
				$uploaddir = './img/photo/';
				$uploadfile = $uploaddir . basename($_FILES['slider1']['name']);
				if (move_uploaded_file($_FILES['slider1']['tmp_name'], $uploadfile)) 
				{
					$da->url = substr($uploadfile,1);
				} 
				else
				{
					$da->url=$data['slider']['0']->url;
				}
				$this->Main_m->update_slider($da);
			}
			if($_POST['title2']!='')
			{
				$da->title=$_POST['title2'];
				$da->id='2';
				$uploaddir = './img/photo/';
				$uploadfile = $uploaddir . basename($_FILES['slider2']['name']);

				
				if (move_uploaded_file($_FILES['slider2']['tmp_name'], $uploadfile)) 
				{
					$da->url = substr($uploadfile,1);
					
				} 
				else
				{
					$da->url=$data['slider']['1']->url;
				}
				 
				$this->Main_m->update_slider($da);
			}
			if($_POST['title3']!='')
			{
				$da->title=$_POST['title3'];
				$da->id='3';
				$uploaddir = './img/photo/';
				$uploadfile = $uploaddir . basename($_FILES['slider3']['name']);

				
				if (move_uploaded_file($_FILES['slider3']['tmp_name'], $uploadfile)) 
				{
					$da->url = substr($uploadfile,1);
					
				} 
				else
				{
					$da->url=$data['slider']['3']->url;
				}
				 
				$this->Main_m->update_slider($da);
			}
		}
		$data['slider']=$this->Main_m->get_slider();
		$this->load->view('admin_edit_slider',$data);
	}
	
	public function editgalerey()
	{
		
		 
		 
		 
	$da = new Dada1();
		
		//$data['slider2']=$this->Main_m->get_slider2();
		
		if(!empty($_FILES))
		{
			$uploaddir = './img/photo/';
			$uploadfile = $uploaddir . basename($_FILES['slider1']['name']);
			if (move_uploaded_file($_FILES['slider1']['tmp_name'], $uploadfile)) 
			{
				$da->url = substr($uploadfile,1);
			} 
			$this->Main_m->ins_slider2($da);
		}
		$data['slider2']=$this->Main_m->get_slider2();
		$this->load->view('admin_edit_galereya',$data);
	}
	public function editgalerey2()
	{
		 
	$da = new Dada1();
		
		//$data['slider2']=$this->Main_m->get_slider2();
		
		if(!empty($_FILES))
		{
			$uploaddir = './img/photo/';
			$uploadfile = $uploaddir . basename($_FILES['slider1']['name']);
			if (move_uploaded_file($_FILES['slider1']['tmp_name'], $uploadfile)) 
			{
				$da->url = substr($uploadfile,1);
			} 
			$this->Main_m->ins_slider3($da);
		}
		$data['slider2']=$this->Main_m->get_slider3();
		$this->load->view('admin_edit_galereya2',$data);
	}
	public function delgal($int)
	{

		$this->Main_m->del_slider2($int);
		header('Location: /admin/editgalerey');
	}
	////////////////////////////////////////////////
	public function news()
	{
		$data['news']=$this->Main_m->get_news();
		$this->load->view('admin_news',$data);
	}
	public function addnew($par='')
	{
		if ($par=='')
		{
			if(!empty($_POST))
			{
				
				foreach($_POST as $key => $value)
				{
					$this->$key=$value;
				}
				if(!empty($_FILES))
				{
					$uploaddir = './img/photo/';
					$uploadfile = $uploaddir . basename($_FILES['media_img']['name']);
					//var_dump($_FILES);
					if (move_uploaded_file($_FILES['media_img']['tmp_name'], $uploadfile)) 
					{
						$this->media_img = substr($uploadfile,1);
					} 
					
				}
				$this->Main_m->add_new($this);
				header('Location: /admin/news');
				exit();
			}
			else
			{
				header('Location: /admin/news');
				exit();	
			}
		}
		if ($par=='text')
		{
			$data['form'] = $this->_text;
		}
		if ($par=='video')
		{
			$data['form'] = $this->_video;
		}
		if ($par=='audio')
		{
			$data['form'] = $this->_audio;
		}
		if ($par=='chit')
		{
			$data['form'] = $this->_chit;
		}
		$this->load->view('admin_addnew',$data);
	}
	public function editnew($id='')
	{
		
		if ($id=='')
		{
			if(!empty($_POST))
			{
				foreach($_POST as $key => $value)
				{
					$this->$key=$value;
				}
				$this->Main_m->update_new($this);
				header('Location: /admin/news');
				exit();	
			}
		}		
		else
		{
			$new=$this->Main_m->get_new($id);
			if ($new->type=='text')
			{
				$data['form'] = '
					<form action="/admin/editnew" enctype="multipart/form-data" method="POST">
						<input name="type" type="hidden" value="text">
						<input name="id" type="hidden" value="'.$new->id.'">
						<div class="form-group">
							<label>Введите заголовок</label>
							<input name="title" class="form-control" placeholder="Введите заголовок" value="'.$new->title.'">
						</div>
						<div class="form-group">
							<label>Введите текст</label>
							<textarea name="full_text" class="form-control" rows="8">'.$new->full_text.'</textarea>
						</div>
						<div class="form-group">
                                            <label>Выберите категорию</label>
                                            <select class="form-control" name="category">
                                                <option></option>
                                                <option value="Украинские композиторы">Украинские композиторы</option>
                                                <option value="Программы по музыке">Программы по музыке</option>
                                                <option value="Песни для исполнения">Песни для исполнения</option>
                                                <option value="Открытые уроки">Открытые уроки</option>
												<option value="Внеклассные мероприятия">Внеклассные мероприятия</option>
                                            </select>
                                        </div>
						<div class="form-group">
							<label>Важная новость?</label>
							<label class="checkbox-inline">
								<input type="checkbox" name="vazhno" value="1">
							</label>
						</div>
						<button type="submit" class="btn btn-default">Изменить/Сохранить</button>
					</form>';
			}
			if ($new->type=='video')
			{
				$data['form'] = '
					<form action="/admin/editnew" enctype="multipart/form-data" method="POST">
					<input name="type" type="hidden" value="video">
					<input name="id" type="hidden" value="'.$new->id.'">
					<div class="form-group">
						<label>Введите заголовок</label>
						<input name="title" class="form-control" placeholder="Введите заголовок" value="'.$new->title.'">
					</div>
					<div class="form-group">
						<label>Введите текст</label>
						<textarea name="full_text" class="form-control" rows="8">'.$new->full_text.'</textarea>
					</div>
					<div class="form-group">
						<label>Вставте код видео</label>
						<textarea name="media_video" class="form-control" rows="8">'.$new->media_video.'</textarea>
					</div>
					<div class="form-group">
                                            <label>Выберите категорию</label>
                                            <select class="form-control" name="category">
                                                <option></option>
                                                <option value="Украинские композиторы">Украинские композиторы</option>
                                                <option value="Программы по музыке">Программы по музыке</option>
                                                <option value="Песни для исполнения">Песни для исполнения</option>
                                                <option value="Открытые уроки">Открытые уроки</option>
												<option value="Внеклассные мероприятия">Внеклассные мероприятия</option>
                                            </select>
                                        </div>
					<div class="form-group">
							<label>Важная новость?</label>
							<label class="checkbox-inline">
								<input type="checkbox" name="vazhno" value="1">
							</label>
						</div>
					<button type="submit" class="btn btn-default">Изменить/Сохранить</button>
					</form>';
			}
			if ($new->type=='audio')
			{
				$data['form'] = '
					<form action="/admin/editnew" enctype="multipart/form-data" method="POST">
					<input name="type" type="hidden" value="audio">
					<input name="id" type="hidden" value="'.$new->id.'">
						<div class="form-group">
							<label>Введите заголовок</label>
							<input name="title" class="form-control" placeholder="Введите заголовок" value="'.$new->title.'">
						</div>
						<div class="form-group">
							<label>Введите текст</label>
							<textarea name="full_text" class="form-control" rows="8">'.$new->full_text.'</textarea>
						</div>
						<div class="form-group">
							<label>Вставте Песню</label>
							<input name="media_audio" class="form-control" type="file">
						</div>
						<div class="form-group">
                                            <label>Выберите категорию</label>
                                            <select class="form-control" name="category">
                                                <option></option>
                                                <option value="Украинские композиторы">Украинские композиторы</option>
                                                <option value="Программы по музыке">Программы по музыке</option>
                                                <option value="Песни для исполнения">Песни для исполнения</option>
                                                <option value="Открытые уроки">Открытые уроки</option>
												<option value="Внеклассные мероприятия">Внеклассные мероприятия</option>
                                            </select>
                                        </div>
						<div class="form-group">
							<label>Важная новость?</label>
							<label class="checkbox-inline">
								<input type="checkbox" name="vazhno" value="1">
							</label>
						</div>
						<button type="submit" class="btn btn-default">Изменить/Сохранить</button>
					</form>';
			}
			if ($new->type=='chit')
			{
				$data['form'] = '
					<form action="/admin/editnew" enctype="multipart/form-data" method="POST">
					<input name="type" type="hidden" value="chit">
					<input name="id" type="hidden" value="">
						<div class="form-group">
							<label>Введите автора цитаты</label>
							<input name="title" class="form-control" placeholder="Введите автора цитаты" value="'.$new->title.'">
						</div>
						<div class="form-group">
							<label>Введите цитату</label>
							<textarea name="full_text" class="form-control" rows="8">'.$new->full_text.'</textarea>
						</div>
						<button type="submit" class="btn btn-default">Submit Button</button>
					</form>';
			}
			
		}
		
		$this->load->view('admin_addnew',$data);
	}
	public function delnew($int)
	{
		$this->load->model('Main_m');
		$this->Main_m->del_new($int);
		header('Location: /admin/news');
	}
	public function aboutme()
	{
		$da = new Dada2();
		$da->id='1';
		$d=$this->Main_m->get_setting('about_me');
		if(!empty($_POST))
			{
				
				foreach($_POST as $key => $value)
				{
					$da->$key=$value;
				}
				if(!empty($_FILES))
				{
					$uploaddir = './img/photo/';
					$uploadfile = $uploaddir . basename($_FILES['img']['name']);
					//var_dump($_FILES);
					if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) 
					{
						$da->img = substr($uploadfile,1);
					} 
					else
					{
						$da->img = $d->img;
					}
				}
				$this->Main_m->upd_about($da);
			}
		
		$data['form'] = '
					<form action="/admin/aboutme" enctype="multipart/form-data" method="POST">
						<div class="form-group">
							<label>Введите текст</label>
							<textarea name="full_text" class="form-control" rows="8">'.$d->full_text.'</textarea>
						</div>
						<div class="form-group">
							<label>Вставте картинку</label>
							<input name="img" class="form-control" type="file">
						</div>
						
						<button type="submit" class="btn btn-default">Изменить/Сохранить</button>
					</form>';
		$this->load->view('admin_addnew',$data);
	}
	
	private  $_text='
					<form action="/admin/addnew" enctype="multipart/form-data" method="POST">
						<input name="type" type="hidden" value="text">
						<div class="form-group">
							<label>Введите заголовок</label>
							<input name="title" class="form-control" placeholder="Введите заголовок">
						</div>
						<div class="form-group">
							<label>Введите текст</label>
							<textarea name="full_text" class="form-control" rows="8"></textarea>
						</div>
						<div class="form-group">
							<label>Вставте картинку</label>
							<input name="media_img" class="form-control" type="file">
						</div>
						<div class="form-group">
                                            <label>Выберите категорию</label>
                                            <select class="form-control" name="category">
                                                <option></option>
                                                <option value="Украинские композиторы">Украинские композиторы</option>
                                                <option value="Программы по музыке">Программы по музыке</option>
                                                <option value="Песни для исполнения">Песни для исполнения</option>
                                                <option value="Открытые уроки">Открытые уроки</option>
												<option value="Внеклассные мероприятия">Внеклассные мероприятия</option>
                                            </select>
                                        </div>
						<div class="form-group">
							<label>Важная новость?</label>
							<label class="checkbox-inline">
								<input type="checkbox" name="vazhno" value="1">
							</label>
						</div>
						
						<button type="submit" class="btn btn-default">Изменить/Сохранить</button>
					</form>';

	private  $_video='
					<form action="/admin/addnew" enctype="multipart/form-data" method="POST">
					<input name="type" type="hidden" value="video">
					<div class="form-group">
						<label>Введите заголовок</label>
						<input name="title" class="form-control" placeholder="Введите заголовок">
					</div>
					<div class="form-group">
						<label>Введите текст</label>
						<textarea name="full_text" class="form-control" rows="8"></textarea>
					</div>
					<div class="form-group">
						<label>Вставте код видео</label>
						<textarea name="media_video" class="form-control" rows="8"></textarea>
					</div>
					<div class="form-group">
                                            <label>Выберите категорию</label>
                                            <select class="form-control" name="category">
                                                <option></option>
                                                <option value="Украинские композиторы">Украинские композиторы</option>
                                                <option value="Программы по музыке">Программы по музыке</option>
                                                <option value="Песни для исполнения">Песни для исполнения</option>
                                                <option value="Открытые уроки">Открытые уроки</option>
												<option value="Внеклассные мероприятия">Внеклассные мероприятия</option>
                                            </select>
                                        </div>
					<div class="form-group">
							<label>Важная новость?</label>
							<label class="checkbox-inline">
								<input type="checkbox" name="vazhno" value="1">
							</label>
						</div>
					<button type="submit" class="btn btn-default">Изменить/Сохранить</button>
				</form>';
	private  $_audio='
					<form action="/admin/addnew" enctype="multipart/form-data" method="POST">
					<input name="type" type="hidden" value="audio">
						<div class="form-group">
							<label>Введите заголовок</label>
							<input name="title" class="form-control" placeholder="Введите заголовок">
						</div>
						<div class="form-group">
							<label>Введите текст</label>
							<textarea name="full_text" class="form-control" rows="8"></textarea>
						</div>
						<div class="form-group">
							<label>Вставте Песню</label>
							<input name="media_audio" class="form-control" type="file">
						</div>
						<div class="form-group">
                                            <label>Выберите категорию</label>
                                            <select class="form-control" name="category">
                                                <option></option>
                                                <option value="Украинские композиторы">Украинские композиторы</option>
                                                <option value="Программы по музыке">Программы по музыке</option>
                                                <option value="Песни для исполнения">Песни для исполнения</option>
                                                <option value="Открытые уроки">Открытые уроки</option>
												<option value="Внеклассные мероприятия">Внеклассные мероприятия</option>
                                            </select>
                                        </div>
							<div class="form-group">
							<label>Важная новость?</label>
							<label class="checkbox-inline">
								<input type="checkbox" name="vazhno" value="1">
							</label>
						</div>
						<button type="submit" class="btn btn-default">Изменить/Сохранить</button>
					</form>';
	private  $_chit='
					<form action="/admin/addnew" enctype="multipart/form-data" method="POST">
					<input name="type" type="hidden" value="chit">
						<div class="form-group">
							<label>Введите автора цитаты</label>
							<input name="title" class="form-control" placeholder="Введите автора цитаты">
						</div>
						<div class="form-group">
							<label>Введите цитату</label>
							<textarea name="full_text" class="form-control" rows="8"></textarea>
						</div>
						<div class="form-group">
                                            <label>Выберите категорию</label>
                                            <select class="form-control" name="category">
                                                <option></option>
                                                <option value="Украинские композиторы">Украинские композиторы</option>
                                                <option value="Программы по музыке">Программы по музыке</option>
                                                <option value="Песни для исполнения">Песни для исполнения</option>
                                                <option value="Открытые уроки">Открытые уроки</option>
												<option value="Внеклассные мероприятия">Внеклассные мероприятия</option>
                                            </select>
                                        </div>
										
						<div class="form-group">
							<label>Важная новость?</label>
							<label class="checkbox-inline">
								<input type="checkbox" name="vazhno" value="1">
							</label>
						</div>
						<button type="submit" class="btn btn-default">Изменить/Сохранить</button>
					</form>';
}
class Dada2 extends CI_Controller {

	public $img='';
	public $full_text='';
}
class Dada1 extends CI_Controller {

	public $url='';
}
class Dada extends CI_Controller {

	public $id='';
	public $title='';
	public $url='';
}