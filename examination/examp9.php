<?php
    class MyCalculator{
        public $number1;
        public $number2;
        function MyCalculator($num1, $num2){
            $this->number1 = $num1;
            $this->number2 = $num2;
        }
        function add(){
            $result = $this->number1 + $this->number2;
            return $result;
        }
        function multiply(){
            $result = $this->number1 * $this->number2;
            return $result;
        }

}
    $mycalc = new MyCalculator(12,6);
    echo $mycalc->add() ."<br/>";
    echo $mycalc->multiply();
?>