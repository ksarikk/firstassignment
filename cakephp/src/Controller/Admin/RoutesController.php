<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use Cake\Controller\Controller;
use PhpParser\Node\Scalar\MagicConst\Function_;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoutesController extends Controller
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function myfunction(){
        echo "Hi";
         die();
        }
}  