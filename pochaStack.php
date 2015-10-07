<?php
	class Stack{
	  public $stackArray = array();
	  private $index     = -1;
	  public function push($element)
	  {
		  $this->index++;
		  $this->stackArray[$this->index] = $element;
		 echo "input is : ".$element."<br>";
			
	  }
	  
	  public function getElement($position)
	  {
		  if($position<= $this->index + 1)
		  {
			  $arrPosition = $this->index + 1 - $position;
			  echo "Arr position is : ".$this->stackArray[$arrPosition];
		  }
		  echo "Invalid position";
	  }
	  public function pop()
	  {
		  if(!$this->isEmpty())
		  
		  {
			  echo "My index is : ".$this->index."<br>";
			 echo "pop out is : ".$this->stackArray[$this->index--]."<br>";
	     }
		 else
		 {
			 echo "stack is empty";
		 }
	  }
	  public function isEmpty()
	  {
		  if($this->index == -1)
		  {
			  return true;
	      }else 
	      {
		     return false;
	       }
	  }
	  public function first()
	  {
		  echo $this->stackArray[$this->index];
	  }
	   public function last()
	   {
		   echo $this->stackArray[0];
	   }
	}
  $newStack = new Stack;
  $newStack->push(2);
  $newStack->push(6);
  $newStack->pop();
  $newStack->pop();
  $newStack->pop();
  $newStack->isEmpty();
  $newStack->first();
  $newStack->last();
   $newStack->getElement(1);
?>