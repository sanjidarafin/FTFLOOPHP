<?php

            class Stack{
                private $queArray = array();
                private $index = -1;



                public function push($element)
                {

                    $this->index++;
                    array_unshift($this->queArray,$element);
                }

                public function pop()
                {
                    if(!$this->isEmpty())
                    {
                        $element = $this->queArray[$this->index];
                        unset($this->queArray[$this->index]);
                        $this->index--;
                        return $element;
                    }
                    echo "There is no element in the quee array";
                }

                public function isEmpty()
                {
                    if($this->index == -1)
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }

                public function first()
                {
                    return $this->queArray[$this->index];
                }

                public function last()
                {
                    return $this->queArray[0];
                }
            }

            $muy = new Stack(array(3,4,7));


            $myStack = new Stack;
            $myStack->push(1);
            $myStack->push(4);
            echo $myStack->first(),"<br>";
            echo $myStack->last(),"<br>";
            echo $myStack->pop(),"<br>";
            echo $myStack->pop(),"<br>";
            $myStack->pop();






?>