<?php

class deletepostContr extends deletePost{

        
        private $id;
        public function __construct($id)
        {
            $this->id = $id;
        }
        public function deletepost()
        {
            $this->removePost($this->id);
        }
    }