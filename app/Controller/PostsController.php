<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class PostsController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Posts';
    
    //visualizador de todos os posts vindos do banco
    function index() {
        $this->set('posts', $this->Post->find('all'));
    }
    //vuncao de visualizacao de detalhes do post
    public function view($id = null) {
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());
    }
    //metodo de adicao de novo post
    public function add() {
        if ($this->request->is('post')) {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Seu Post Foi Salvo com sucesso.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    //editanto os Posts
    function edit($id = null) {
        $this->Post->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Post->read();
        } else {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Post atualizado com sucesso.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    //apagando os posts
    function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Post->delete($id)) {
            $this->Session->setFlash('O Post de id: ' . $id . ' foi corretamente apagado.');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>
