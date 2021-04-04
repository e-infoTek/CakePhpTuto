<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use Cake\Event\EventInterface;

use Cake\Controller\Controller;


class AppController extends Controller
{

    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'email','password' => 'password'],
                ]
            ],
            'authError' => 'Please login before continuing.',
            'loginAction' => ['controller' => 'Users', 'action' => 'login'],
            'loginRedirect' => ['controller' => 'Users', 'action' => 'index'],
            'logoutRedirect' =>  ['controller' => 'Users', 'action' => 'login'],
            'unauthorizedRedirect' => ['controller' => 'Users', 'action' => 'login']
        ]);
        $this->Auth->allow(['login' ]);

        $this->set('nom' , $this->Auth->user('username'));
        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }


    
}
