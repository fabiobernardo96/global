<?php

class Customer implements JsonSerializable {

    protected $idCustomer;
    protected $nmName;
    protected $nrCpfCnpj;
    
    public function jsonSerialize() {
		return [
            'idCustomer' => (int) $this->idCustomer,
            'nmName' => (string) $this->nmName,
            'nrCpfCnpj' => (string) $this->nrCpfCnpj,
        ];
    }

    public function getIdCustomer(){
		return $this->idCustomer;
	}

	public function setIdCustomer($idCustomer){
		$this->idCustomer = $idCustomer;
	}

	public function getNmName(){
		return $this->nmName;
	}

	public function setNmName($nmName){
		$this->nmName = $nmName;
	}

    public function getNrCpfCnpj(){
        return $this->nrCpfCnpj;
    }

    public function setNrCpfCnpj($nrCpfCnpj){
        $this->nrCpfCnpj = $nrCpfCnpj;
    }

}
