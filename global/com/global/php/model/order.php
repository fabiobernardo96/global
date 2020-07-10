<?php

class Order implements JsonSerializable {

    protected $idOrder;
    protected $ynFinished;
    protected $idCustomer;

    public function jsonSerialize() {
		return [
            'idOrder' => (int) $this->idOrder,
            'ynFinished' => (string) $this->ynFinished,
            'idCustomer' => (int) $this->idCustomer,
        ];
    }

    public function getIdOrder(){
		return $this->idOrder;
	}

	public function setIdOrder($idOrder){
		$this->idOrder = $idOrder;
	}

	public function getYnFinished(){
		return $this->ynFinished;
	}

	public function setYnFinished($ynFinished){
		$this->ynFinished = $ynFinished;
	}

    public function getIdCustomer(){
        return $this->idCustomer;
    }

    public function setIdCustomer($idCustomer){
        $this->idCustomer = $idCustomer;
    }


}