<?php

interface PaymentInterface{
    public function paymentProcess();
}

interface LoginInterface{
    public function loginFirst();
}

abstract class Grants {
    protected function grants(){
        echo "<br>Grants for all";
    }

    abstract public function paymentProcess();
}

class Paypal extends Grants implements PaymentInterface, LoginInterface {
    public function loginFirst(){
        echo "<br>login paypal";
    }
    public function payNow(){
        echo "<br>paynow paypal";
    }
    public function paymentProcess(){
        echo "<br>paymentProcess PAYPAL";
        $this->grants();
        $this->loginFirst();
        $this->payNow();
    }
}

class BankTransfer implements PaymentInterface, LoginInterface {
    public function loginFirst(){
        echo "<br>login banktransfer";
    }
    public function payNow(){
        echo "<br>paynow banktransfer";
    }
    public function paymentProcess(){
        echo "<br>paymentProcess BANKTRANSFER";
        $this->loginFirst();
        $this->payNow();
    }
}

class Mastercard implements PaymentInterface {
    public function payNow(){
        echo "<br>paynow mastercard";
    }
    public function paymentProcess(){
        echo "<br>paymentProcess MASTERCARD";
        $this->payNow();
    }
}

class Cash implements PaymentInterface {
    public function payNow(){
        echo "<br>paynow cash";
    }
    public function paymentProcess(){
        echo "<br>paymentProcess CASH";
        $this->payNow();
    }
}

class BuyProduct {
    public function pay(PaymentInterface $paymentType){
        $paymentType->paymentProcess();
    }

    public function onlinePay(LoginInterface $paymentType){
        $paymentType->loginFirst();
    }
}