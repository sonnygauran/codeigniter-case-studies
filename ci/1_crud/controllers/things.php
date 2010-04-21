<?php
class Things extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->database();
        $this->load->library(array( 'utility', 'form_validation' ));
        $this->load->helpers(array( 'url', 'form' ));
        $this->_validation();
        
    }
    function index() {
        $things = $this->db->get('things');
        $data['things'] = $things->result_array();
        $this->load->view('things/index', $data);
    }
    function add() {
        $this->load->model('thing');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('things/add');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'quantity' => $this->input->post('quantity'),
                'price' => $this->input->post('price'),
            );
            $this->thing->add($data);
            redirect('/things');
        }
    }
    /**
     * Validation rules
     */
    function _validation() {
        $config = array(
            array(
                'field'   => 'name',
                'label'   => 'Name',
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'quantity',
                'label'   => 'Quantity',
                'rules'   => 'trim|required'
            ),
            array(
                'field'   => 'price',
                'label'   => 'Price',
                'rules'   => 'trim|required'
            ),
        );
        $this->form_validation->set_rules($config);
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
    }
}

?>
