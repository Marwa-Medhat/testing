<?php

	class User {
        public $name;
        public $email;

        function set_name($name='null') {
            $this->name = $name;
          }

          function get_name() {
            return  $this->name;
          }
          function set_email($email='null') {
            $this->email = $email;
          }
          function get_email() {
            return  $this->email;
          }
         
        //  function unset_user ()
        //   {
        //     unset($this);
        //   }
        // function unset_user (User $user)
        //   {
        //     unset($user->name);
        //     unset($user->value);

        //   }
        //   function unset_user ()
        //   {
        //     unset($this->name);
        //     unset($this->value);

        //   }

	}

   


    //delete person.age; 
     
