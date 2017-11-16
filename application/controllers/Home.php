<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->lang->load("language","english");
		
		$this->load->helper('url');
		$this->load->library('session');
		
	}
	public function index()
	
	{      
	       /* nav */
	        $data['lang'] = $this->lang->line('lang'); 
	        $data['list1'] = $this->lang->line('list1');
		    $data['list2'] = $this->lang->line('list2');
		    $data['list3'] = $this->lang->line('list3');
		    $data['list4'] = $this->lang->line('list4');
		    $data['list5'] = $this->lang->line('list5');
		    
		    /* slider*/
		    
		    $data['slider1'] = $this->lang->line('slider1');
		    $data['slider2'] = $this->lang->line('slider2');
		    $data['slider22'] = $this->lang->line('slider22');
		    $data['slider3'] = $this->lang->line('slider3');
		    
		    
		    /* section 1 */ 
		    
		    $data['heads1'] = $this->lang->line('heads1');
		    $data['ourvision'] = $this->lang->line('ourvision');
		    $data['vision'] = $this->lang->line('vision');
		    $data['whyq'] = $this->lang->line('whyq');


		    $data['quaity'] = $this->lang->line('quality');
		    $data['qcontent'] = $this->lang->line('qcontent');
		   
		    $data['warranty'] = $this->lang->line('warranty');
		    $data['wcontent'] = $this->lang->line('wcontent');

            $data['price'] = $this->lang->line('price');
            $data['pcontent1'] = $this->lang->line('pcontent1');

            $data['cost'] = $this->lang->line('cost');
            $data['ccontent'] = $this->lang->line('ccontent');

            $data['com'] = $this->lang->line('com');
            $data['comcontent'] = $this->lang->line('comcontent');

           /* our work*/
           $data['ourwork'] = $this->lang->line('ourwork');
           $data['aldesiner0'] = $this->lang->line('eldesigner')[0];
           $data['aldesiner1'] = $this->lang->line('eldesigner')[1];
           $data['jordansteps0'] =  $this->lang->line('jordansteps')[0];
           $data['jordansteps1'] =  $this->lang->line('jordansteps')[1];
           $data['tech0'] = $this->lang->line('tech')[0];
           $data['tech1'] = $this->lang->line('tech')[1];
           $data['aldawaj0'] = $this->lang->line('aldawaj')[0];
           $data['aldawaj1'] = $this->lang->line('aldawaj')[1];
           $data['bigshop0'] = $this->lang->line('bigshop')[0];
           $data['bigshop1'] = $this->lang->line('bigshop')[1];
           $data['react0'] = $this->lang->line('react')[0];
           $data['react1'] = $this->lang->line('react')[1];






        /* section 3*/
		    
		    $data['service1'] = $this->lang->line('service1');
		    $data['service2'] = $this->lang->line('service2');
		    $data['service3'] = $this->lang->line('service3');
		    $data['service33'] = $this->lang->line('service33');
		    $data['service22'] = $this->lang->line('service22');
		    $data['service11'] = $this->lang->line('service22');
		    
		    
		    /* section 4*/
		    $data['fact'] = $this->lang->line('fact');
		    $data['fact1'] = $this->lang->line('fact1');
		    $data['fact2'] = $this->lang->line('fact2');
		    $data['fact3'] = $this->lang->line('fact3');
		    $data['fact4'] = $this->lang->line('fact4');
		    
		    
		    
		    /* section 5 */
		    $data['caption1'] = $this->lang->line('caption1');
		    $data['caption2'] = $this->lang->line('caption2');
		    /* member */
		    
		    $data['name1']  = $this->lang->line('member1')[0]; 
		    $data['major1'] = $this->lang->line('member1')[1]; 
		    $data['postion1'] = $this->lang->line('member1')[2];
		    $data['social1'] = $this->lang->line('member1')[3];
		    
		    
		    $data['name2']  = $this->lang->line('member2')[0];
		    $data['major2'] = $this->lang->line('member2')[1];
		    $data['postion2'] = $this->lang->line('member2')[2];
		    $data['social2'] = $this->lang->line('member2')[3];
		    
		    
		    
		    $data['name3']  = $this->lang->line('member3')[0];
		    $data['major3'] = $this->lang->line('member3')[1];
		    $data['postion3'] = $this->lang->line('member3')[2];
		    $data['social3'] = $this->lang->line('member3')[3];
		    
		    
		    /* section 7 */
		    
		    $data['head'] = $this->lang->line('head');
		    $data['descreption'] = $this->lang->line('descreption');
		    $data['hello'] = $this->lang->line('hello');
		    $data['name'] = $this->lang->line('name');
		    $data['email'] = $this->lang->line('email');
		    $data['message'] = $this->lang->line('message');
		    $data['send'] = $this->lang->line('send');
		    $data['infotitle'] = $this->lang->line('infotitle');



		    $data['text'] = $this->lang->line('text');

		    
		    $this->load->view('pages/new_home', $data);
	}

		
	
	
	}
