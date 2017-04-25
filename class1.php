<?php
   class Books
   {
       /* Member variables */
       var $title;
       var $photo;
       var $price;


       /* Member functions */
       public function set($price,$title,$photo)
       {

	   $this->title = $title;
       $this->photo = $photo;
           $this->price = $price;
       }
 
       public function get()
       {
           echo "<div style='float: left; margin-right:40px;'>";
           //echo "<font size='5px'>{$this->title}</font>".self::BR;
	   echo $this->title . "<br>";
           echo "<img src='".$this->photo."'>" ."<br>";
           echo $this->price ."<br>";
           echo"</div>";
       }

   }
	$book = new Books;
    $book->title = 'Book=THE ULTIMATE';
    $book->photo = '3.jpg';
    $book->price = 'RS=1000';

	$book->get();

?>	
