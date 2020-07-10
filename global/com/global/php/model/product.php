<?php

class Product implements JsonSerializable {

    protected $idProduct;
    protected $nmProduct;
    protected $vlPrice;

    public function jsonSerialize() {
		return [
            'idProduct' => (int) $this->idProduct,
            'nmProduct' => (string) $this->nmProduct,
            'vlPrice' => (float) $this->vlPrice,
        ];
    }

    public function getIdProduct(){
        return $this->idProduct;
    }

    public function setIdProduct($idProduct){
        $this->idProduct = $idProduct;
    }

    public function getNmProduct(){
		return $this->nmProduct;
	}

	public function setNmProduct($nmProduct){
		$this->nmProduct = $nmProduct;
	}

    public function getVlPrice(){
		return $this->vlPrice;
	}

	public function setVlPrice($vlPrice){
		$this->vlPrice = $vlPrice;
	}

}