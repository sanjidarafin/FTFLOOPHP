<?php

class Quee{
    private $QueeArray = array();
    private $index     = -1;


    public function push($element)
    {
        return array_push($this->QueeArray,$element);
        $this->index++;
    }

    public function isEmpty(){
        if(isset($this->index)){
            return true;
        }
        return false;
    }
    public function pop()
    {
        if(!$this->isEmpty())
        {
            $element = $this->QueeArray[0];
            unset($this->QueeArray[0]);
            $this->index++;
            return $element;
        }
        return "your stack is empty";
    }

    public function first()
    {
        return $this->QueeArray[0];

    }

    public function last()
    {
        return $this->QueeArray[$this->index];
    }

}
$mystack = new Quee;
$mystack->push(1);
$mystack->push(4);

echo "first is : ".$mystack->first()."<br>";
echo "last is : ".$mystack->last()."<br>";
echo "1st pop is :".$mystack->pop()."<br>";
echo "2nd pop is : ".$mystack->pop();



?>