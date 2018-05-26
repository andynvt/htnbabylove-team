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

	public function update($item,$id, $newqty, $oldtotalCart)
    {
        $giohang = ['qty'=>$newqty, 'price' => $item->unit_price, 'item' => $item, 'oldtotalCart' => $oldtotalCart];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$giohang['qty'] = $newqty;
		$giamgia = $item->promotion_price;
		if($giamgia == 0){
			$giohang['price'] = $item->unit_price * $giohang['qty'];
			$giohang['qty'] = $item->newqty += $newqty;
			$giohang['oldtotalCart'] = $oldtotalCart;

			$this->items[$id]['qty'] = $newqty;
			$this->totalQty -= $oldtotalCart;
			$this->totalQty += $giohang['qty'];
			$this->totalPrice += $item->unit_price * $newqty;
		}
		else{
			$giohang['price'] = $item->promotion_price * $giohang['qty'];

			// newqty của sp
			$giohang['qty'] = $item->newqty += $newqty;
			// newqty cũ trước khi đổi của sp
			$giohang['oldtotalCart'] = $oldtotalCart;

			$this->items[$id]['qty'] = $newqty;

			// tổng newqty
			// Ban đầu là trừ cho sl cũ của sp bị thay đổi
			$this->totalQty -= $oldtotalCart;
			$this->totalQty += $giohang['qty'];

			// tổng tiền
			$this->totalPrice -= $item->promotion_price * $oldtotalCart;
			$this->totalPrice += $item->promotion_price * $giohang['qty'];
		}
    }

	// public function update($rowId, $qty)
 //    {
 //        $cartItem = $this->get($rowId);
 //        if ($qty instanceof Buyable) {
 //            $cartItem->updateFromBuyable($qty);
 //        } elseif (is_array($qty)) {
 //            $cartItem->updateFromArray($qty);
 //        } else {
 //            $cartItem->qty = $qty;
 //        }
 //        $content = $this->getContent();
 //        if ($rowId !== $cartItem->rowId) {
 //            $content->pull($rowId);
 //            if ($content->has($cartItem->rowId)) {
 //                $existingCartItem = $this->get($cartItem->rowId);
 //                $cartItem->setQuantity($existingCartItem->qty + $cartItem->qty);
 //            }
 //        }
 //        if ($cartItem->qty <= 0) {
 //            $this->remove($cartItem->rowId);
 //            return;
 //        } else {
 //            $content->put($cartItem->rowId, $cartItem);
 //        }
 //        $this->events->fire('cart.updated', $cartItem);
 //        $this->session->put($this->instance, $content);
 //        return $cartItem;
 //        // $cc = 1;
 //        // return $rowId;
 //    }

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
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
}
