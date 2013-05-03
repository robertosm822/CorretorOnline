<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Contato extends AppModel {
    public $name = 'Contato';
    
	public $captcha = ''; //intializing captcha var


    //validacao do formulario de contato
    public $validate = array(
        'nome' => array(
            'rule' => 'notEmpty',
            'rule'=> array('maxLength', 50),
            'message'=>'Campo deve ter no máximo 50 caracteres e não pode ser vazio'
        ),
        'mensagem' => array(
            'rule' => 'notEmpty',
            'message'=> 'Preencha o campo de mensagem.'
        ),
        'email' => array( 
            'rule'=>'email',
            'rule'=> array('maxLength', 150),
            'messsage'=> 'E-mail obrigatório e no formato correto.'
            ),
        'telefone' => array(
            'rule'=> array('maxLength', 15),
            'rule' => array('phone', '/\((10)|([1-9][1-9])\)/', 'us'),
            'message'=>'Digite somente numeros no formato (XX) XXXX-XXXX.'
        ),
        'celular' => array(
            'rule'=> array('maxLength', 15),
            'rule' => array('phone', '/\((10)|([1-9][1-9])\)/', 'us'),
            'message'=>'Digite somente numeros no formato (XX) XXXX-XXXX.'
        ),
		'captcha'=>array(
				'rule' => array('matchCaptcha'),
				'message'=>'Falha na validação de verificação humana.'
			)
                    
    );
	
	//---- METODOS USADOS PELO CAPTCHA IMPLEMENTADO - 03/02/2013  --------------------------
	public function matchCaptcha($inputValue)	{
		return $inputValue['captcha']==$this->getCaptcha(); //return true or false after comparing submitted value with set value of captcha
	}
	public function setCaptcha($value)	{
		$this->captcha = $value; //setting captcha value
	}
	public function getCaptcha()	{
		return $this->captcha; //getting captcha value
	}
	//--------------------------------------------------------------------------------------
}
