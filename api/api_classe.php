<?php

    class HttpRequest{
        private $Url;
        private $Method = ['HTTP_METH_GET'];
        private $QueryData;
        private $Headers;
        private $Body;


        public function __construct()
        {
            
        }

        public function getUrl(){
            return $this->Url;
        }
        public function getMethod(){
            return $this->Method;
        }
        public function getQueryData(){
            return $this->QueryData;
        }
        public function getHeaders(){
            return $this->Headers;
        }
        public function getBody(){
            return $this->Body;
        }

        public function setUrl(){
            
        }
        public function setMethod(){
            
        }
        public function setQueryData(){
            
        }
        public function setHeaders(){
            
        }
        public function setBody(){
            
        }

        public function send(){
            
        }
    }