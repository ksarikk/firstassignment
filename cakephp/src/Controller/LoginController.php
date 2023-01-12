<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

class LoginController extends AppController
{
  
    public function login()
    {

        // $connection = ConnectionManager::get('default');
        // $show = $connection->execute('select * from users')->fetchAll('assoc');

        // print_r($show);        
    }
  

    public function insert()
    {
        if ($this->request->is('post'))
        {
            $connection = ConnectionManager::get('default');

            $firstname = $this->request->getData('firstname');
            $lastname = $this->request->getData('lastname');
            $email = $this->request->getData('email');
            $password = $this->request->getData('password');
            
          


                $result = $connection->execute("insert into users (firstname,lastname,email,password) values ('$firstname','$lastname','$email','$password')");

                if ($result == true) {
                    return $this->redirect(['action' => 'login']);
                    

                } else {
                    echo "Data not submitted";
                }
            
          
        }
    }



    public function update()
    {

    }

    public function delete()
    {

    }
}


?>