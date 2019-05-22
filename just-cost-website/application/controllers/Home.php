<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{

    private $num_rows = 20;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('pagination'));
       /* $this->load->Model('AdminModel');*/
    }

    public function index($page = 0)
    {
        $data = array();
        $head = array();
        $arrSeo = $this->Publicmodel->getSeo('page_home');
        $head['title'] = @$arrSeo['title'];
        $head['description'] = @$arrSeo['description'];
        $head['keywords'] = str_replace(" ", ",", $head['title']);
        $all_categories = $this->Publicmodel->getCategories();

        /*
         * Tree Builder for categories menu
         */

        function buildTree(array $elements, $parentId = 0)
        {
            $branch = array();
            foreach ($elements as $element) {
                if ($element['parent_id'] == $parentId) {
                    $children = buildTree($elements, $element['id']);
                    if ($children) {
                        $element['children'] = $children;
                    }
                    $branch[] = $element;
                }
            }
            return $branch;
        }

        $data['home_categories'] = $tree = buildTree($all_categories);
        $data['all_categories'] = $all_categories;
        $data['ads'] = $this->Publicmodel->getads($this->num_rows, $page, $_GET);
        $rowscount = $this->Publicmodel->adsCount($_GET);
        $data['links_pagination'] = pagination('home', $rowscount, $this->num_rows);
        $this->render('home', $head, $data);
    }

   

    public function viewads($id)
    {
        $data = array();
        $head = array();
        $data['ads'] = $this->Publicmodel->getOneads($id);
        $data['sameCagegoryads'] = $this->Publicmodel->sameCagegoryads($data['ads']['parent_id'], $id);
        if ($data['ads'] === null) {
            show_404();
        }
        $this->load->vars($vars);
        $head['title'] = $data['ads']['title'];
        $description = url_title(character_limiter(strip_tags($data['ads']['description']), 130));
        $description = str_replace("-", " ", $description) . '..';
        $head['description'] = $description;
        $head['keywords'] = str_replace(" ", ",", $data['ads']['title']);
        $this->render('view_product', $head, $data);
    }
    public function memberlogin(){
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($username !="" && $password!=""){
            $loginRes = $this->Publicmodel->login($username,$password);
             

            if($loginRes>0){
                echo "success";
                $this->session->set_userdata('username', $username);
            }else{
                echo "faild";
            }
        }else{
            echo "blank";
        }
    }

  

   

}
