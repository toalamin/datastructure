<?php 

class ReadingList{
	
	protected $stack;
	protected $limit;
	public function __construct($limit = 10){
		$this->stack = array();
		$this->limit = $limit;
		
	}
	public function push($item){
		if(count($this->stack) < $this->limit){
			array_unshift($this->stack,$item);
		}else{
			throw new RunTimeException("Stack is full");
		}
		
	}
	public function pop($item = null){
		if ($this->isEmpty()) {
            // trap for stack underflow
	      throw new RunTimeException('Stack is empty!');
	  } else {
            // pop item from the start of the array
            return array_shift($this->stack);
        }
	}
	public function top() {
        return current($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }
	
}
$myBooks = new ReadingList();
$myBooks->push('game 1');
$myBooks->push('game 2');
$myBooks->push('game 3');
$myBooks->push('game 4');
$myBooks->push('game 5'); 
$myBooks->push('game 6');
$myBooks->push('game 7');

echo $myBooks->pop();
echo "<br>"; // outputs 'A Game of Thrones'
echo $myBooks->pop();
echo "<br>"; // outputs 'A Clash of Kings'
echo $myBooks->pop(); // outputs 'A Storm of Swords'


echo "<br>";
echo $myBooks->top();




?>