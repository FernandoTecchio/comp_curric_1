<?php

  class PostsController extends AppController {
    public $helpers = array ('Html','Form');
    public $components = array ("Session");

    #action
    # /posts/index
    public function index() {
      $todasAsPostagens = $this->Post->find('all');

      # jogar pra VIEW
      $this->set('posts',$todasAsPostagens); 
      }

      // /post/view/3
      public function view($id = null){

        #setar o post com id == 3
        $this->Post->id = $id;

        #procurar no banco o item com id 3
        $p = $this->Post->read();

        #enviando para a VIEW os campos do item
        $this->set('post', $p);


      }

      # /post/add
      public function add(){
        #se for enviado um POST pegar os dados do forme salvar no banco
       if ($this->request->is('post')) {

        $dadosDoFormulario = $this->request->data;

        # tentar salvar os dados no banco
        # se conseguir salvar, mostrar MSG e REDIMENCIONAR para o INDEX
        if ($this->Post->save($dadosDoFormulario)) {
          # mostrar MSG
          $this->Session->setFlash("A Postagem foi inserida com Sucesso! ");

          # redirecionar para o index
          $this->redirect(array('action' => 'index'));

      }
  }

}

}


?>