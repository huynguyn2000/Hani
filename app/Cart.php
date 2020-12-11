<?php
namespace App;

class Cart
{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __construct($cart)
    {
        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
        }
    }

    public function AddCart($product, $id, $quantity, $detail,$i)
    {
        $productDetail = [];
        for ($j = 0; $j < count($detail); $j++) {
            $productDetail[$j] = $detail[$j];
        }

        $newProduct = [
            'quantity' => 0,
            'price' => $product->pro_price,
            'productInfo' => $product,
            'detail' => $productDetail,
            'i' => $i
        ];

        //kiem tra san pham nay da co chua
//        if ($this->products) {
//            if (array_key_exists($id, $this->products)) {
//                $newProduct = $this->products[$id];
//            }
//        }

        $newProduct['quantity'] += $quantity;
        $newProduct['price'] = $quantity * $product->pro_price;

        $this->products[$i] = $newProduct;
        $this->totalPrice += $newProduct['price'];
        $this->totalQuantity += $quantity;
    }

    public function AddCartWithTopping($product, $id, $quantity, $topping, $detail, $i)
    {
        $totalTpprice = 0;
        $toppingName = [];
        $productDetail = [];

        for ($j = 0; $j < count($detail); $j++) {
            $productDetail[$j] = $detail[$j];
        }

        for ($j = 0; $j < count($topping); $j++) {
            $toppingName[$j] = $topping[$j]['name'];;
        }

        for ($j = 0; $j < count($topping); $j++) {
            $tpprice[$j] = $topping[$j]['price'];
            $totalTpprice += $tpprice[$j];
        }

        $newProduct = [
            'quantity' => 0,
            'price' => $product->pro_price,
            'productInfo' => $product,
            'topping' => $toppingName,
            'detail' => $productDetail,
            'i' => $i
        ];

        if ($this->products) {
            if (array_key_exists($id, $this->products)) {
                $newProduct = $this->products[$id];
            }
        }

        $product->pro_price += $totalTpprice;

        $newProduct['quantity'] = $quantity;
        $newProduct['price'] = $newProduct['quantity'] * $product->pro_price;

        $this->products[$i] = $newProduct;
        $this->totalPrice += $newProduct['price'];
        $this->totalQuantity += $quantity;
    }

    public function DeleteItemCart($stt)
    {
        $this->totalQuantity -= $this->products[$stt]['quantity'];
        $this->totalPrice -= $this->products[$stt]['price'];
        unset($this->products[$stt]);
    }

    public function IncreaseItemCart($stt)
    {
        $this->totalQuantity++;
        $this->products[$stt]['quantity']++;
        $this->totalPrice += $this->products[$stt]['productInfo']->pro_price;
        print_r($this->totalQuantity);
    }

    public function DecreaseItemCart($stt)
    {
        if($this->products[$stt]['quantity'] == 1){
            $this->totalQuantity -= $this->products[$stt]['quantity'];
            $this->totalPrice -= $this->products[$stt]['productInfo']->pro_price;
            unset($this->products[$stt]);
        }
        else{
            $this->totalQuantity --;
            $this->products[$stt]['quantity']--;
            $this->totalPrice -= $this->products[$stt]['productInfo']->pro_price;
        }
    }

    public function DeleteAllItemCart()
    {
        unset($this->products);
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.

    }
}
?>
