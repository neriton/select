<?php


App::uses('AppController', 'Controller');

class ClientesController extends AppController {

    public $components = array('RequestHandler');
    public $helpers = array('Js');

    function beforeFilter() {
        $this->loadModel('Estado');
        $this->loadModel('Cidade');
    }
private function getEstados() {
        $this->set('estados', $this->Estado->find('list'));
    }
   public function index() {
         $this->set('clientes', $this->Cliente->find('all'));
         $this->set('estados', $this->Estado->find('list'));
    }
        public function listar_cidades_json() {
        $this->layout = false;
        if ($this->RequestHandler->isAjax()) {
            $this->set('cidades', $this->Cidade->find('list', array('conditions' =>
                        array('Cidade.estado_id' => $this->params['url']['estadoId']),
                        'recursive' => -1)
                    ));
        }
    }
    public function add(){
        $isPost = $this->request->is('post');
        if($isPost && !empty($this->request->data)){
          if($this->Cliente->save($this->request->data)){
                $this->Session->setFlash(' ', 'sucesso');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(' ', 'error');
                
            }
            $cidades=array();
      $this->set(compact('estados','cidades'));
        /*$this->set('estados', $this->Estado->find('list'));
        $estados = $this->Cliente->Estado->find('list', array('fields' => array('id', 'nome')));
        $this->set('estados', $estados);
        $estados = $this->Cliente->Estado->find('list');
        $this->set(compact('estados'));*/
        //chama a função getEstados 
        }
        self::getEstados();
}


}
