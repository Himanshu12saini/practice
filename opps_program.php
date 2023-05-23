<?php
// class Books{
//   public function name(){
//   echo "himanhu";
//   }
//   public function price(){
//   echo 900;
//   }
// }
// // To create php object we have to use a  new operator. Here php object is the object of the Books Class. 
// $obj = new Books();
// $obj->name();
// echo "<br>";
// $obj->price();





// class A {
// 	public function myage() {
// 	return  ' age is 80';
// 	}
// }
// class B extends A {	
// 	public function mysonage() {
// 	return  ' age is 50';
// 	}
// }
// class C extends B {
// 	public function mygrandsonage() {
// 	return  'age is 20';
// 	   }
//         public function myHistory() {
//         echo "Class A " .$this->myage();
//         echo "<br>";
//         echo "Class B ".$this-> mysonage();
//         echo "<br>";
//         echo "Class C " . $this->mygrandsonage();
//         }
// }
// $obj = new C();
// $obj->myHistory();



class factorial_of_a_number
{
  protected $n;
  public function __construct($n)
   {
     if (!is_int($n))
	   {
	      throw new InvalidArgumentException('Not a number or missing argument');
       }
    $this->_n = $n;
	}
  public function result()
    {
     $factorial = 1;
     for ($i = 1; $i <= $this->_n; $i++)
	  {
	    $factorial *= $i;
      }
	   return $factorial;
	 }
 }

$newfactorial = New factorial_of_a_number(5);
echo $newfactorial->result();
?>