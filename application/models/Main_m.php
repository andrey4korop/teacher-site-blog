<?php 
class Main_m extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
///////////////////////////////////////////////////
        public function get_slider()
        {
                $query = $this->db->get('slider');
                return $query->result();
        }
		
		public function update_slider($dat)
        {
			$this->db->where('id', $dat->id);
               $this->db->update('slider', $dat);
        }
	///////////////////////////////////////////////////
		public function get_slider2()
        {
                $query = $this->db->get('slider2');
                return $query->result();
        }
		public function ins_slider2($data)
        {
                $query = $this->db->insert('slider2',$data);
        }
		public function del_slider2($dat)
        {
			$this->db->where('id', $dat);
            $query = $this->db->delete('slider2');
        }
//////////////////////////////////////////////////////
		public function get_slider3()
        {
                $query = $this->db->get('slider3');
                return $query->result();
        }
		public function ins_slider3($data)
        {
                $query = $this->db->insert('slider3',$data);
        }
		public function update_slider3($dat)
        {
			$this->db->where('id', $dat->id);
               $this->db->update('slider3', $dat);
        }
		public function del_slider3($dat)
        {
			$this->db->where('id', $dat);
            $query = $this->db->delete('slider3');
        }
//////////////////////////////////////////////////////
		public function get_news()
        {
                $query = $this->db->get('news');
                return $query->result();
        }
		public function get_new($id)
        {
				$this->db->where('id',$id);
                $query = $this->db->get('news');
                return $query->row();
        }
		public function get_news_cat($s)
		{
				$this->db->where('category',$s);
                $query = $this->db->get('news');
                return $query->result();
		}	
		public function get_vaz_new()
        {
				$this->db->where('vazhno','1');
                $query = $this->db->get('news');
                return $query->result();
        }
		public function add_new($dat)
        {
			$query = $this->db->insert('news',$dat);
        }
		public function update_new($dat)
        {
			$this->db->where('id', $dat->id);
            $query = $this->db->update('news',$dat);
        }
		public function del_new($dat)
        {
			$this->db->where('id', $dat);
            $query = $this->db->delete('news');
        }
///////////////////////////////////////////////////////
		public function get_setting($par)
        {
			$this->db->where('set',$par);
                $query = $this->db->get('setting');
                return $query->row();
        }
		public function upd_about($dat)
        {
			$this->db->where('id', $dat->id);
            $query = $this->db->update('setting',$dat);
        }
///////////////////////////////////////		
		public function get_count($par)
        {
			$this->db->where('type', $par);
			$this->db->from('news');
			return $this->db->count_all_results();
		}
		

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }
		public function login($login, $pass)
		{
			$this->db->where('login',$login);
			$this->db->where('pass',$pass);
			$this->db->from('user');
            return  $this->db->count_all_results();
		}

}

?>