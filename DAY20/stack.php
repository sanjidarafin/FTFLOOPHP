<?php

    class Stack{
        private $stackArray = array();
        private $index     = -1;


        public function push($element)
        {
           return array_push($this->stackArray,$element);
            $this->index++;
        }
       /* public function getElement($position){
            if($position<$this->index+1)
            {
                    $arrayPosition = $this->index + 1 - $position;
                        return $this->stackArray[];
            }
            return "Invalid position";
        }
       */
        public function isEmpty(){
            if($this->index == -1){
                return true;
            }
            return false;
        }
        public function pop()
        {
            if(!$this->isEmpty())
            {
                $element = $this->stackArray[$this->index];
                unset($this->stackArray[$this->index]);
                $this->index--;
                return $element;
            }
            return "your stack is empty";
        }

        public function first()
        {
            return $this->stackArray[$this->index];

        }

        public function last()
        {
            return $this->stackArray[0];
        }

    }
    $mystack = new Stack;
    $mystack->push(1);
    $mystack->push(4);
    //echo "first is : ".$mystack->first()."<br>";
    //echo "last is : ".$mystack->last()."<br>";
    //echo "1st pop is :".$mystack->pop()."<br>";
    //echo "2nd pop is : ".$mystack->pop();



?>