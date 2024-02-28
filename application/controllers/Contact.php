<?php


class Contact extends App_controller {
    public function add_user_data() {
        // die('test');
        $status = $this->Contact_model->add();
        // die($status);
        if ($status) {
            redirect(base_url('Welcome/contact_us'));
        } else {
            // Handle the error, for example, return an error message
            echo "Failed to add record.";
        }
    }
}