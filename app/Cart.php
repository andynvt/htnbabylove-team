<?php

namespace App;

class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id, $sl){
		$giohang = ['qty'=>0, 'price' => $item->unit_price, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$giohang['qty'] += $sl;
		$giamgia = $item->promotion_price;

		if($giamgia == 0){
			$giohang['price'] = $item->unit_price * $giohang['qty'];
			$this->items[$id] = $giohang;
			$this->totalQty += $sl;
			$this->totalPrice += $item->unit_price * $sl;
		}
		else{
			$giohang['price'] = $item->promotion_price * $giohang['qty'];
			$this->items[$id] = $giohang;
			$this->totalQty += $sl;
			$this->totalPrice += $item->promotion_price * $sl;
		}
		
	}

	public function update($item,$id, $newqty, $oldqty)
    {
        $giohang = ['qty'=>$newqty, 'price' => $item->unit_price, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$giohang['qty'] = $newqty;
		$giamgia = $item->promotion_price;
		if($giamgia == 0){
			$giohang['price'] = $item->unit_price * $giohang['qty'];

			// newqty của sp
			$giohang['qty'] = $item->newqty += $newqty;

			$this->items[$id]['qty'] = $newqty;
			$this->totalQty -= $oldqty;
			$this->totalQty += $giohang['qty'];

			$this->totalPrice -= $item->unit_price * $oldqty;
			$this->totalPrice += $item->unit_price * $giohang['qty'];

		}
		else{
			$giohang['price'] = $item->promotion_price * $giohang['qty'];

			// newqty của sp
			$giohang['qty'] = $item->newqty += $newqty;

			$this->items[$id]['qty'] = $newqty;

			// tổng newqty
			$this->totalQty -= $oldqty;
			$this->totalQty += $giohang['qty'];

			// tổng tiền
			$this->totalPrice -= $item->promotion_price * $oldqty;
			$this->totalPrice += $item->promotion_price * $giohang['qty'];
		}
    }

	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}

	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= ($this->items[$id]['price'] * $this->items[$id]['qty']);
		unset($this->items[$id]);
	}
}
