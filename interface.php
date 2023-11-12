<?php
interface MyInterface
{
    public function A();
    public function B();
    public function setName($name);
}
class MyClass implements MyInterface
{
    protected $name;
    public function A()
    {
        echo("Ini Dari Fungsi A <br>");
    }
    public function B(){
        echo("Ini Dari Fungsi B <br> ");
    }
    public function setName($name){
        $this->name=$name;
        echo $this->name;
    }

}
$call= new MyClass();
$call->A();//panggil fungsi induk
$call->B();//panggil fungsi anak
$call->setName('Masukkan Nama Anda');
?>