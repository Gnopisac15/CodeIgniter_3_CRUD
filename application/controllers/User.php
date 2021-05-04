<?php 

class User extends CI_Controller{
    public function index(){
        $this->load->model('User_model');

        $users = $this->User_model->getUsers();
        //print_r($users);
        $data = array();
        $data['users'] = $users;

        $this->load->view('users/list',$data); 
        

    }

    public function create(){
       
        //loads model here
        $this->load->model('User_model');


        //load library
        $this->load->library('form_validation');

        //set rules
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('address','Address','required');

        if($this->form_validation->run()== true){
            //print_r($_POST);
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $address = $this->input->post('address');

            $formData = array('name' => $name, 'email' => $email, 'address' => $address);

            $this->User_model->add_user($formData);

            $this->session->set_flashdata('message','Data has been successfully added ');
            redirect(base_url('index.php/user'));
        }else {
            $this->load->view('users/create');
        }
    }
   
    public function edit($id){
        $this->load->model('User_model');
        $data['users'] = $this->User_model->editUser($id);
        $this->load->view('users/edit',$data);
    }

    public function update($id){

       
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $address = $this->input->post('address');

        $data = array('name' => $name, 'email' => $email, 'address' => $address);

        $this->load->model('User_model');
        $this->User_model->updateUser($data, $id);

        $this->session->set_flashdata('message','Data has been successfully modified');
        redirect(base_url('index.php/user'));
    }

    public function delete($id){

        $this->load->model('User_model');
        $this->User_model->deleteUser($id);
        $this->session->set_flashdata('message','Data has been successfully deleted ');
        redirect(base_url('index.php/user'));
    }

}
?>