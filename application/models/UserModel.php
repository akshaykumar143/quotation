<?php

class UserModel extends CI_Model
{

        public $name;
        public $email;
        public $password;


        public function get_alData($user_id)
        {
                // $query = $this->db->get_where('quotation', );
                $this->db->where('user_id', $user_id);
                $query = $this->db->get('quotation');
                return $query->result();
        }

        public function insert_entry()
        {
                $this->name    = $this->input->post("name");  // please read the below note
                $this->email  = $this->input->post("email");
                $this->password     = $this->input->post("password");
                $query = $this->db->get_where('user', array('email' => $this->email));
                if (!$query->num_rows()) {
                        $this->db->insert('user', $this);
                }
        }

        public function insert_quatation($user_id)
        {

                $files = [];
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|img';
                $config['max_size']             = 1000010;

                if (!empty($_FILES["file"]["name"])) {
                        foreach ($_FILES['file']["name"] as $key => $value) {
                                $_FILES['userfile']['name'] = $_FILES['file']['name'][$key];
                                $_FILES['userfile']['type'] = $_FILES['file']['type'][$key];
                                $_FILES['userfile']['tmp_name'] = $_FILES['file']['tmp_name'][$key];
                                $_FILES['userfile']['error'] = $_FILES['file']['error'][$key];
                                $_FILES['userfile']['size'] = $_FILES['file']['size'][$key];
                                $this->load->library('upload', $config);
                                if ($this->upload->do_upload('userfile')) {
                                        $files[] = $this->upload->data()['file_name'];
                                }
                        }
                }

                $this->db->insert('quotation', [
                        "q_no"          =>  $this->input->post("q_no"),
                        "pm_approval"   =>  $this->input->post("pm_approval"),
                        "pm_name"       =>  $this->input->post("pm_name"),
                        "date"          =>  $this->input->post("date"),
                        "client_name"          =>  $this->input->post("client_name"),
                        "unittype"          =>  $this->input->post("unittype"),
                        "units"          =>  serialize($this->input->post("units")),
                        "files"          =>  serialize($files),
                        "user_id"          =>  $user_id
                ]);
        }


        public function login()
        {

                $this->email  = $this->input->post("email");
                $this->password     = $this->input->post("password");
                // Query to fetch user based on email and password
                $query = $this->db->get_where('user', array('email' => $this->email, 'password' => $this->password));

                // return [ $this->email,  $this->password ];
                if ($query->num_rows() == 1) {
                        // User found, return user data
                        return $query->row_array();
                } else {
                        // User not found
                        return false;
                }
        }
}
