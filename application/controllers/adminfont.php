<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminfont extends CI_Controller {

  public function __construct()
	{
 		parent::__construct();
		$this->load->model('adminshop_model');
    $this->load->model('ShoppingCart_Model');
		$this->load->library('cart');
    $this->load->model('adminblog_model');
    $this->load->model('admincourse_model');
    $this->load->model('adminpromotion_model');
	}


                //---------------------------หน้าหลัก--------------------------------//
  public function index()
  	{
      $this->load->view('header_view');
  		$this->load->view('css');
  		$this->load->view('Adminfont/banneraddmin');
  		$this->load->view('Adminfont/adminfont_index');
  		$this->load->view('footer');
  		$this->load->view('js');
    }

//---------------------------------------หน้าช็อป---------------------------------//
    public function shop()
      {
        $data['query'] = $this->adminshop_model->jointableshop();
        $this->load->view('header_view');
        $this->load->view('css');
        $this->load->view('Adminfont/banneraddmin');
        $this->load->view('Adminfont/adminfont_shop',$data);
        $this->load->view('footer');
        $this->load->view('js');
      }

      public function shopsingle($product_id)
        {
          $data['rowshow']=$this->adminshop_model->read($product_id);
          $this->load->view('header_view');
          $this->load->view('css');
          $this->load->view('Adminfont/banneraddmin');
          $this->load->view('Adminfont/adminfont_shopsingle',$data);
          $this->load->view('footer');
          $this->load->view('js');
        }

        public function shopcart()
        {
          $id = $this->input->post('id');
          if ($this->input->post('id'))
          {
            $id = $this->input->post('id');
            $qty  = $this->input->post('qty');
            $cart = $this->ShoppingCart_Model->Cart($id);

                  $data = array
                  (
                      'id'      => $cart->product_id,
                      'qty'     => $qty,
                      'price'   => $cart->product_price,
                      'name'    => $cart->product_name,
                      'img' => $cart->product_img

                  );

              $this->cart->insert($data);

              $this->load->view('header_view');
              $this->load->view('css');
              $this->load->view('Adminfont/banneraddmin');
              $this->load->view('Adminfont/adminfont_shoppingcart');
              $this->load->view('footer');
              $this->load->view('js');
          }
          else
          {
            $this->load->view('header_view');
            $this->load->view('css');
            $this->load->view('Adminfont/banneraddmin');
            $this->load->view('Adminfont/adminfont_shoppingcart');
            $this->load->view('footer');
            $this->load->view('js');
          }
        }

        public function Cart_remove()
      	{

      		$id = $this->input->get('id');

      		$this->cart->update(array('rowid' => $id , 'qty' => 0));
      		redirect('adminfont/shopcart');


      	}

        public function Cart_del()
      	{
      		$this->cart->destroy();
      		redirect('Index');
      	}

        public function Add_order()
    		{
    			// echo '<pre>';
    			//  print_r($_POST);
    			// echo '</pre>';
    			//  exit;


    			$config['upload_path'] = './assets/img/Slip/';
    			$config['allowed_types'] = 'gif|jpg|png';
    			$config['max_size'] = '2000';
    			$config['max_width'] = '3000';
    			$config['max_heigth'] = '3000';


    			$this->load->library('upload',$config);

    			if (! $this->upload->do_upload('ShoppingCart_slip'))
    			{
    				echo $this->upload->display_errors();
    			}else
    			{
    				$data = $this->upload->data();

    				$filename = $data['file_name'];
    				// echo '<pre>';
    				//  print_r($filename);
    				// echo '</pre>';
    				//  exit;
    				if ($cartAs = $this->cart->contents())
    				{

    					foreach ($cartAs as $key => $itemAs) :



    							$data = array(
    								'member_ID'         => $this->input->post('id'),
    								'ShoppingCart_Name' => $this->input->post('ShoppingCart_Name'),
    								'ShoppingCart_slip' => $filename,
    								'ShoppingCart_Email' => $this->input->post('ShoppingCart_Email'),
    								'ShoppingCart_Phone' => $this->input->post('ShoppingCart_Phone'),
    								'product_id' => $itemAs['id'],
    								'ShoppingCart_Quantity' => $itemAs['qty'],
    								'ShoppingCart_total' => $this->cart->total(),
    								'ShoppingCart_pricec' => $itemAs['price'] * $itemAs['qty'],
    								'ShoppingCart_img' => $itemAs['img'],
    								'ShoppingCart_Payment_status' => '1',
    								'ShoppingCart_Order_status' => '1'
    							);



    								$query=$this->db->insert('shoppingcart',$data);

    								endforeach;
    							}

    			if($query){
    				$this->cart->destroy();
    				redirect('adminfont/orderadmin','refresh');
    			}else {
    				echo 'false';
    				}
    			}
    			}

          public function checkoutadmin()
            {

              $this->load->view('header_view');
              $this->load->view('css');
              $this->load->view('Adminfont/banneraddmin');
              $this->load->view('Adminfont/adminfont_checkout');
              $this->load->view('footer');
              $this->load->view('js');
            }

            public function add_orderadmin()
        		{

        			$config['upload_path'] = './assets/img/Slip/';
        			$config['allowed_types'] = 'gif|jpg|png';
        			$config['max_size'] = '2000';
        			$config['max_width'] = '3000';
        			$config['max_heigth'] = '3000';


        			$this->load->library('upload',$config);

        			if (! $this->upload->do_upload('ShoppingCart_slip'))
        			{
        				echo $this->upload->display_errors();
        			}else {
        				$data = $this->upload->data();

        				$filename = $data['file_name'];
        				// echo '<pre>';
        				//  print_r($filename);
        				// echo '</pre>';
        				//  exit;
        			$data = array(
        				'member_ID'         => $this->input->post('id'),
        				'ShoppingCart_Name' => $this->input->post('ShoppingCart_Name'),
        				'ShoppingCart_slip' => $filename,
        				'ShoppingCart_Email' => $this->input->post('ShoppingCart_Email'),
        				'ShoppingCart_Phone' => $this->input->post('ShoppingCart_Phone'),
        				'product_id' => $items['id'],
        				'ShoppingCart_Quantity' => $items['qty'],
        				'ShoppingCart_total' => $this->cart->total,
        				'ShoppingCart_pricec' => $items['price'] * $items['qty'],
        				'ShoppingCart_img' => $items['img'],
        				'ShoppingCart_Payment_status' => '1',
        				'ShoppingCart_Order_status' => '1'
        			);



        			$query=$this->db->insert('shoppingcart',$data);
        			if($query){
        				redirect('adminfont/orderadmin','refresh');
        			}else {
        				echo 'false';
        				}
        			}
        		}

            public function orderadmin()
          	{
             if ($this->session->userdata('member_email') != '')
          	 {

               $this->load->view('header_view');
               $this->load->view('css');
               $this->load->view('Adminfont/banneraddmin');
               $this->load->view('Adminfont/adminfont_order');
               $this->load->view('footer');
               $this->load->view('js');
          	 }
          		else
          		{
          			redirect('adminfont/index');
          		}

          	}

//------------------------------------หน้าบทความ--------------------------------------//
            public function blogadmin()
              {
                $data['query'] = $this->adminblog_model->jointableblog();
                $this->load->view('header_view');
                $this->load->view('css');
                $this->load->view('Adminfont/banneraddmin');
                $this->load->view('Adminfont/adminfont_blogadmin',$data);
                $this->load->view('footer');
                $this->load->view('js');
              }

              public function blogadmin_details($blog_id)
                {
                  $data['rowshow']=$this->adminblog_model->read($blog_id);
                  $this->load->view('header_view');
                  $this->load->view('css');
                  $this->load->view('Adminfont/banneraddmin');
                  $this->load->view('Adminfont/adminfont_blogdetails',$data);
                  $this->load->view('footer');
                  $this->load->view('js');
                }

  //-----------------------------------หน้าคอร์ส--------------------------------------------//


              public function courseadmin()
                {
                  $data['query'] = $this->admincourse_model->get();
                  $this->load->view('header_view');
                  $this->load->view('css');
                  $this->load->view('Adminfont/banneraddmin');
                  $this->load->view('Adminfont/adminfont_courseadmin',$data);
                  $this->load->view('footer');
                  $this->load->view('js');
                }

                public function courseadmin_details($course_id)
                  {
                    $data['rowshow']=$this->admincourse_model->read($course_id);
                    $this->load->view('header_view');
                    $this->load->view('css');
                    $this->load->view('Adminfont/banneraddmin');
                    $this->load->view('Adminfont/adminfont_coursedetails',$data);
                    $this->load->view('footer');
                    $this->load->view('js');
                  }

                  public function recourseadmin($course_id)
                    {
                      $data['rowshow']=$this->admincourse_model->read($course_id);
                      $this->load->view('header_view');
                      $this->load->view('css');
                      $this->load->view('Adminfont/banneraddmin');
                      $this->load->view('Adminfont/adminfont_recourseadmin',$data);
                      $this->load->view('footer');
                      $this->load->view('js');
                    }

                    public function add_recourse()
                  	{
                  		$course_id  = $this->input->post('course_id');
                  		$data = array(
                  			'recourse_name' => $this->input->post('recourse_name'),
                  			'recourse_surname' => $this->input->post('recourse_surname'),
                  			'recourse_address' => $this->input->post('recourse_address'),
                  			'recourse_email' => $this->input->post('recourse_email'),
                  			'recourse_phone' => $this->input->post('recourse_phone'),
                  			'course_id'=> $this->input->post('course_id')
                  		);
                  	 	// echo '<pre>';
                  		// print_r($data);
                  		// echo '</pre>';
                  		// exit;

                  		$query=$this->db->insert('recourse',$data);
                  		if($query){
                  			redirect('adminfont/cfcourse/'.$course_id);
                  		}else {
                  			echo 'false';
                  			}
                  	}

                    public function cfcourse($course_id)
                      {
                        $data['rowshow']=$this->admincourse_model->read($course_id);
                        $this->load->view('header_view');
                        $this->load->view('css');
                        $this->load->view('Adminfont/banneraddmin');
                        $this->load->view('Adminfont/adminfont_cfcourse',$data);
                        $this->load->view('footer');
                        $this->load->view('js');
                      }

//-------------------------------------หน้าโปรโมชั่น---------------------------------------------------///

                    public function promotionadmin()
                      {
                        $data['query'] = $this->adminpromotion_model->get();
                        $this->load->view('header_view');
                        $this->load->view('css');
                        $this->load->view('Adminfont/banneraddmin');
                        $this->load->view('Adminfont/adminfont_promotionadmin',$data);
                        $this->load->view('footer');
                        $this->load->view('js');
                      }

                    public function proadmin_details($promotion_id)
                      {
                        $data['rowshow']=$this->adminpromotion_model->read($promotion_id);
                        $this->load->view('header_view');
                        $this->load->view('css');
                        $this->load->view('Adminfont/banneraddmin');
                        $this->load->view('Adminfont/adminfont_promotiondetails',$data);
                        $this->load->view('footer');
                        $this->load->view('js');
                      }

//---------------------------------------หน้าติดต่อ--------------------------------------------------//
                    public function contactadmin()
                      {

                        $this->load->view('header_view');
                        $this->load->view('css');
                        $this->load->view('Adminfont/banneraddmin');
                        $this->load->view('Adminfont/adminfont_contactadmin');
                        $this->load->view('footer');
                        $this->load->view('js');
                      }

                      public function add_contact()
                    	{
                    		$data = array(
                    			'contact_name' => $this->input->post('contact_name'),
                    			'contact_email' => $this->input->post('contact_email'),
                    			'contact_phone' => $this->input->post('contact_phone'),
                    			'contact_message' => $this->input->post('contact_message')
                    		);

                    		$query=$this->db->insert('contact',$data);
                    		if($query){
                    			redirect('adminfont/contactadmin','refresh');
                    		}else {
                    			echo 'false';
                    			}
                    }
}
?>
