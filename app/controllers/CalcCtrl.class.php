<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {

	private $form;
	private $wynik; 

	public function __construct(){
		$this->form = new CalcForm();
		$this->wynik = new CalcResult();
	}
	
	public function getParams(){
		$this->form->x = getFromRequest('liczba');
	}
	
	public function validate() {

		if (! (isset ( $this->form->x ))) {
			return false; 
		}
		

		if ($this->form->x == "") {
			getMessages()->addError('Nie podano liczby');
		}

        $liczby = explode(",", $this->form->x);
        $ilosc = count($liczby);
		
        for($i=0; $i<$ilosc; $i++){
    
        $j = $i+1;
    
        if (! is_numeric( $liczby[$i] )) {
            getMessages()->addError('wartość ' . $j . ' nie jest prawidłowa');
	       }
        
        }
		
		return ! getMessages()->isError();
	}
	

	public function action_calcCompute(){

		$this->getparams();
		
		if ($this->validate()) {
				
        $liczby = explode(",", $this->form->x);
            $ilosc = count($liczby);

            if (inRole('admin') || inRole('user') && $ilosc<=5){

            $dodaj = 0;
            for($i=0; $i<$ilosc; $i++){

                $dodaj = $dodaj + $liczby[$i];

            }

            $this->wynik->wynik = $dodaj/($ilosc);
                
                getMessages()->addInfo('Wykonano obliczenia.');
            }
            
            else if (inRole('admin') && $ilosc>5){
                
            $dodaj = 0;
            for($i=0; $i<$ilosc; $i++){

                $dodaj = $dodaj + $liczby[$i];

            }

            $this->wynik->wynik = $dodaj/($ilosc);
                
                getMessages()->addInfo('Wykonano obliczenia.');
            }    
                
            else{ 
                getMessages()->addError('Tylko administrator może wyliczyć średnią z więcej niż 5 liczb');
            }

			
		}
		
		$this->generateView();
	}
	
	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}

	public function generateView(){
		global $user;
        
        getSmarty()->assign('user',unserialize($_SESSION['user']));
		
		getSmarty()->assign('page_title','Kalkulator Średniej');
		getSmarty()->assign('page_description','Prosty Kalkulator do Obliczania Średniej');
			
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->wynik);
		
		getSmarty()->display('calc_view.tpl'); 
	}
}
