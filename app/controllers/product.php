<?php 
    class product extends DController
    {
        function __construct()
        {
           parent::__construct();
        }
        public function index()
        {
            $this->add_product();
          
        }
        public function add_product()
        {
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/product/add_product');
            $this->load->view('cpanel/footer');
        }
        public function insert_product()
        {
            $title = $_POST['title_category_product'];
            $desc = $_POST['desc_category_product'];
            $table = "tbl_category_product";
            $data = array(
                'title_category_product' => $title,
                'desc_category_product' => $desc
            );
        }
    }
    
?>