<?php 

class Wishlist extends App_controller{

    function add()
    {
        echo json_encode($this->wishlist_model->add());
    }

    function remove()
    {
        echo json_encode($this->wishlist_model->remove());

    }
}