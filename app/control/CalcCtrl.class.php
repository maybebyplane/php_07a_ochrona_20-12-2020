<?php

namespace app\control;

use app\forms\CalcForm;
use app\result\CalcResult;


class CalcCtrl {

	private $form;
	private $result;
	private $hide_intro;

	
	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}
	
	
	public function getParams(){
		$this->form->kwota = getFromRequest('kwota');
		$this->form->lat = getFromRequest('lat');
		$this->form->op = getFromRequest('op');
	}
	
	
	public function validate() {
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->lat ) && isset ( $this->form->op ))) {
			return false;
		} else { 
			$this->hide_intro = true;
		}
		
                
		if ($this->form->kwota == "") {
			getMessages()->addError('Nie podano kwoty kredytu.');
		}
		if ($this->form->lat == "") {
			getMessages()->addError('Nie podano na ile lat pobiera się kredyt.');
		}
		if ($this->form->op == "") {
			getMessages()->addError('Nie podano oprocentowania.');
		}
		
		
		if (! getMessages()->isError()) {
			if (! is_numeric ( $this->form->kwota )) {
				getMessages()->addError('Podana kwota nie jest liczbą całkowitą.');
			}
			if (! is_numeric ( $this->form->lat )) {
				getMessages()->addError('Podany okres, na jaki pobiera się kredyt nie jest liczbą całkowitą.');
			}
			if (! is_numeric ( $this->form->op )) {
				getMessages()->addError('Podane oprocentowanie jest nieprawidłowe.');
			}
		}
		return ! getMessages()->isError();
	}
	
	
	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			$this->form->kwota = intval($this->form->kwota);
			$this->form->lat = intval($this->form->lat);
			$this->form->op = intval($this->form->op);
			
			getMessages()->addInfo('Parametry poprawne.');
				
			$this->result->result = ($this->form->kwota/($this->form->lat*12)) + (($this->form->kwota/($this->form->lat*12))*($this->form->op/100));
			$this->result->result = intval($this->result->result);	
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	public function generateView(){
		
                getSmarty()->assign('user',unserialize($_SESSION['user']));
            
                getSmarty()->assign('page_title','Kalkulator kredytowy');
		getSmarty()->assign('page_description','ZAPRASZAMY DO SKORZYSTANIA Z NASZEGO PROFESJONALNEGO KALKULATORA KREDYTOWEGO.');
		getSmarty()->assign('page_header','namespaces');
				
		getSmarty()->assign('hide_intro',$this->hide_intro);
		
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl');
	}
}