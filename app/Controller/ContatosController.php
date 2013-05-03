<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ContatosController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Contatos';
    public $components = array('Email');
	
	
   
    //visualizador de todos os posts vindos do banco
    function index() {
       $this->set('contatos', $this->Contato->find('all'));
    }
     /*
    //vuncao de visualizacao de detalhes dos contatos
    public function view($id = null) {
       // $this->Contato->id = $id;
       // $this->set('contato', $this->Contato->read());
    }
     * 
     */

	//mais uma tentativa de Recaptcha
	function captcha()	{
		$this->autoRender = false;
		$this->layout='ajax';
		if(!isset($this->Captcha))	{ //if Component was not loaded throug $components array()
			$this->Captcha = $this->Components->load('Captcha', array(
				'width' => 150,
				'height' => 50,
				'theme' => 'default', //possible values : default, random ; No value means 'default'
			)); //load it
			}
		$this->Captcha->create();
	}
	 
    //metodo de adicao de nova mensagem de fale conosco
    public function faleconosco() {
        if ($this->request->is('post') ) {
		
			if(!isset($this->Captcha))	{ //if Component was not loaded throug $components array()
				$this->Captcha = $this->Components->load('Captcha'); //load it
			}
			$this->Contato->setCaptcha($this->Captcha->getVerCode()); //getting from component and passing to model to make proper validation check
			$this->Contato->set($this->request->data);
			if($this->Contato->validates())	{ //as usual data save call
				//$this->Signup->save($this->request->data);//save or something
				// validation passed, do something
				$this->Session->setFlash('Data Validation Success');
			}	else	{ //or
				$this->Session->setFlash('Digito de validação não corresponde, favor tente novamente.');
				//pr($this->Signup->validationErrors);
				//something do something else
			}
			
			
            if ($this->Contato->save($this->request->data) ) {
                
               //-------------------------------------------------------------
               // debug($this->request->data);
               
              
                $to      = "robertomelo822@gmail.com";
                $subject = 'Teste de envio de mensagem';
                // message
                $message = '
                <html>
                <head>
                 <title>Contato feito pelo formulario do site:</title>
                </head>
                <body>
                <p>Segue abaixo as informações de preenchimento.</p>
                <br />
                ------------------------------------------------------------
                <br />
                <b>Nome:</b>        '.$this->request->data['Contato']['nome'].'<br />
                <b>Email:</b>       '.$this->request->data['Contato']['email'].'<br />
                <b>Telefone:</b>    '.$this->request->data['Contato']['telefone'].'<br />
                <b>Celular:</b>     '.$this->request->data['Contato']['celular'].'<br />
                <b>Mensagem:</b>    '.$this->request->data['Contato']['mensagem'].'<br />
                ------------------------------------------------------------
                </body>
                </html>
                ';

                /* Atenção se você pretende inserir numa variável uma mensagem html mais
                 complexa do que essa sem precisar escapar os carateres 
                 necessários pode ser feito o uso da sintaxe heredoc, consulte tipos-string-sintaxe-heredoc */

                // To send HTML mail, the Content-type header must be set
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                // Additional headers
                $headers .= "De: robertomelo822@gmail.com". "\r\n";
                $headers .= 'From: Contato Automatizado do site <robertomelo822@gmail.com>' . "\r\n";
                //$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
                //$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

               
                if (  mail($to, $subject, $message, $headers) ) {
                   $this->Session->setFlash('E-mail enviado');
               } else {
                   $this->Session->setFlash('E-mail nao enviado');
               }
               
               //-------------------------------------------------------------
                
                $this->Session->setFlash('Seu Post Foi Salvo com sucesso.');
                //$this->redirect(array('action' => '../'));
            }
        }
    }
}
?>
