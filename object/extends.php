<?php
class BaseProduct {
    public function echoProduct(){
        echo '親クラスです';
    }

//オーバーライド（上書き）親クラスに関数　同じ名前で子クラスで関数作る　子クラスでうわがく
    public function getProduct(){
        echo '親クラスの関数です';
    }


}
//子クラス 継承することで親クラスの変数関数が利用できる
class Product extends  BaseProduct {
    //     アクセス修飾子　public(公開・インスタンス化), protected（自分と継承したクラス）, private(外からアクセスできない　・変数)


    // 変数
    private $product = [];

    // 関数
    function __construct($product){//クラスを呼び出した初回に起動する関数
        $this->product =$product; //this このクラス　つまりclass Product　productの＄マークは描かない
    }
    // public function getProduct(){
    //     echo $this->product;
    // }
    public function addProduct($item){
        echo $this->product .=$item;//inputで入ってきたものを追加する
    }

    public static function getStaticProduct($str){
        echo $str; //静的に関数が使える
    }
}

$instance = new Product('テスト');

//Productクラスを呼び出すときの引数がテストになる
// クラスをインスタンス化するとObjectとして表示される

echo '<pre>';
var_dump($instance);
echo '<pre>';
//親クラスのメソッドを引き継いでいる
$instance->echoProduct();
echo'<br>';


$instance->getProduct();
echo'<br>';

$instance->addProduct('追加分');
echo'<br>';

// $instance->getProduct();
// echo'<br>';

//静的　staticにインスタンスをつくらずに使用できる関数 クラス名::関数名
Product::getStaticProduct('静的');
echo'<br>';





?>