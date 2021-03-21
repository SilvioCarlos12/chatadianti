<?php

use Adianti\Control\TAction;
use Adianti\Control\TPage;
use Adianti\Widget\Base\TScript;
use Adianti\Widget\Container\THBox;
use Adianti\Widget\Container\TVBox;
use Adianti\Widget\Form\TEntry;
use Adianti\Widget\Form\TLabel;
use Adianti\Widget\Template\THtmlRenderer;
use Adianti\Wrapper\BootstrapFormBuilder;

class Chat extends TPage{
    private $form;
    private $TBox;
    private static $html;
    public function __construct()
    {
        parent::__construct();
     
        self::$html=new THtmlRenderer('app/control/Chat/Chat.html');
        self::$html->enableSection('main',[
        
        ]);

        /*$this->TBox->add(self::$html,'height:100%;margin-bottom: 20%;');
        $this->TBox->add($this->form);*/
        parent::add(self::$html);
        
    }
    public function OnEnviar($param){
       
          $dados=[
              "msg"=>$param['msg'],
              "nome"=>$param['nome']
          ];
            var_dump($dados);
         
       
    }
}

