<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

class UsersController extends AppController
{
	
	public function register()
	{
		$this->autoRender = false;
		$user = $this->Users->newEntity();
		if($this->request->is('post'))
		{
			$user = $this->Users->patchEntity($user,$this->request->data);
			if($this->Users->save($user))
			{
				$this->Flash->success(_('Registration success..!'));
				$this->redirect(['action'=>'login']);
			}			
			else
			{
				$this->Flash->error(_('Registration failed...Try again'));
				$this->redirect(['action'=>'login']);
			}
		}
	}

    public function login()
    {
        $this->viewBuilder()->setLayout('login');
    	if ($this->request->is('post')) 
    	{
        	$user = $this->Auth->identify();
        	if ($user) 
        	{
                $time = Time::now();
            	$this->Auth->setUser($user);
            	$this->Users->uid = $this->Auth->user('uid');
            	$this->request->session()->write('user_id',$this->Users->uid);
                $Onlines = TableRegistry::get('Onlines');
                $query = $Onlines->query()->insert(['id','sessionid','timestamp'])
                                ->values(['sessionid'=>$this->request->session()->read('user_id'),'timestamp'=>$time])
                                ->execute();
         		$this->redirect(['action'=>'home']);
         	}
        	else
        	{
        	$this->Flash->error('Your username or password is incorrect.');
      		}
    	}
    }

    public function logout()
    {
        $this->autoRender=false;
        $Onlines = TableRegistry::get('Onlines');
        $query = $Onlines->query();
            $query->delete()->where(['sessionid'=>$this->request->session()->read('user_id')])->execute();
        $this->request->session()->destroy();
        $this->redirect(['action'=>'login']);
    }


    public function home()
    {
        $userid =  $this->request->session()->read('user_id');
        
        $this->loadModel('Requests');
        $notify = $this->Requests->find()
                ->where(['receiverid'=>$userid, 'status'=>0])
                ->all();
        $info = $notify->toArray();
        $this->request->session()->write('info',count($info));
        $all = array();
        foreach ($info as $data) {
        $getuser = $this->Users->find()->where(['uid'=>$data['senderid']])->all()->toArray();
        array_push($all, $getuser);
        }
        $this->set(compact('info'));
        $this->set(compact('all'));
    }


    public function alluser()
    {
    	$uid = $this->request->session()->read('user_id');
    	$query = $this->Users->find()
    		->where(['uid IS NOT'=>$uid])
    		->all();

    	$this->set('user',$query);
    }

    public function sendrequest($uid=null)
    {	
    	$this->autoRender =false;
    	$this->loadModel('Requests');
    	$req = $this->Requests->newEntity();
    	$user_id = $this->request->session()->read('user_id');
    	$uid = $_GET['uid'];
    	$query = $this->Requests->find()
    			->where(['senderid'=>$user_id, 'receiverid'=>$uid])
    			->first();
    	if(count($query)>0)
    	{
    		$this->Flash->error(__('You have already send a request'));
    	}
    	else
    	{
	    	$this->request->data['senderid']=$user_id;
	    	$this->request->data['receiverid']=$uid;
	    	$req = $this->Requests->patchEntity($req,$this->request->data);
	    	$this->Requests->save($req);
    	}

    	$this->redirect(['action'=>'alluser']);
    }

    public function confirm()
    {
        $this->autoRender = false;
        $userid = $this->request->session()->read('user_id');
        $senderid = $this->request->data['sid'];
        // $connection = ConnectionManager::get('default');
        // $connection->update('requests', ['status' => 0])->where(['receiverid'=>2]);
        $this->loadModel('Requests');
        $query = $this->Requests->query()->update()
                    ->set(['status'=>1])
                    ->where(['receiverid'=>$userid,'senderid'=>$senderid])
                    ->execute();
        $this->redirect(['action'=>'home']);
    }

    public function cancel()
    {
        $this->autoRender=false;
        $userid = $this->request->session()->read('user_id');
        $senderid = $this->request->data['sid'];
        $this->loadModel('Requests');
        $query = $this->Requests->query()->delete()->where(['receiverid'=>$userid,'senderid'=>$senderid])->execute();
        $this->redirect(['action'=>'home']);
    }

    public function checkonline()
    {
        $Onlines = TableRegistry::get('Onlines');
        $query = $Onlines->find()->where(['sessionid is not'=>$this->request->session()->read('user_id')])->toArray();
        $all = array();
        foreach ($query as $data) {
        $getuser = $this->Users->find()->where(['uid'=>$data['sessionid']])->all()->toArray();
        array_push($all, $getuser);
        }
        $this->set(compact('all'));
        
    }

   
}

