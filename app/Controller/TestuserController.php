<?php
App::uses('AppController', 'Controller');
 
class TestuserController extends AppController {
  function index(){
    // 以下がデータベース関係
    $datas = $this->Testuser->find('all');
    $this->set('datas',$datas);
  }
  public function find(){
    // post時の処理
    if ($this->request->is('post')) {
      $data = $this->Testuser->findByAge($this->
          request->data('SearchData.age'));
      $this->set('data',$data);
    }
  }
}
 
 