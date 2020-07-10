<?php

class OrderItem implements JsonSerializable {

    protected $idOrderItem;
    protected $idOrder;
    protected $idProduct;

    public function jsonSerialize() {
		return [
            'idOrderItens' => (int) $this->idOrderItem,
            'idOrder' => (int) $this->idOrder,
            'idProduct' => (int) $this->idProduct,
        ];
    }

    public function getIdOrderItem(){
		return $this->idOrderItem;
	}

	public function setIdOrderItem($idOrderItem){
		$this->idOrderItem = $idOrderItem;
	}

    public function getIdOrder(){
		return $this->idOrder;
	}

	public function setIdOrder($idOrder){
		$this->idOrder = $idOrder;
	}

    public function getIdProduct(){
        return $this->idProduct;
    }

    public function setIdProduct($idProduct){
        $this->idProduct = $idProduct;
    }


}