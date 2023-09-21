<?php
//question 1

class Author{
    private $authorname;
    private $email;
    private $gender;

    public function __construct($name,$email,$gender)
    {
        $this->authorname=$name;
        $this->email=$email;
        $this->gender=$gender;
    }
    public function setemail($email){
        $this->email=$email;
    }
    public function getname(){
        return $this->authorname;
    }
    public function getemail(){
        return $this->email;
    }
    public function getgender(){
        return $this->gender;
    }
    public function toostring(){
        return "Author[$this->authorname,$this->email,$this->gender]";
    }
}

class Book{
    private $name;
    private $author;
    private $price;
    private $qty;
    

    public function __construct($name, Author $author,$price,$qty)
    {
        $this->name=$name;
        $this->author=$author;
        $this->price=$price;
        $this->qty=$qty;
        
    }
    public function getname(){
        return $this->name;
    }
    public function getauthor(){
        return $this->author;
    }
    public function getprice(){
        return $this->price;
    }
    public function setprice($price) {
        $this->price=$price;
    }
    public function getqty(){
        return $this->qty;
    }
    public function setqty($qty) {
        $this->qty=$qty;
    }
    public function setauthor(Author $author) {
        $this->author=$author;
    }
    }
    $author = new Author("fares", "fares@admin.com", "M");
$book = new Book("programming Book", $author, 35.67, 10);

echo "Book name: " . $book->getName() . "<br>";
echo "Author name: " . $book->getAuthor()->getName() . "<br>";
echo "Author email: " . $book->getAuthor()->getEmail() . "<br>";
echo "Author gender: " . $book->getAuthor()->getGender() . "<br>";
echo "Price: $" . $book->getPrice() . "<br>";
echo "Quantity: " . $book->getqty() ."<br>";






//question 2


class Author1{
    private $authorname;
    private $email;
    private $gender;

    public function __construct($name,$email,$gender)
    {
        $this->authorname=$name;
        $this->email=$email;
        $this->gender=$gender;
    }
    public function setemail($email){
        $this->email=$email;
    }
    public function getname(){
        return $this->authorname;
    }
    public function getemail(){
        return $this->email;
    }
    public function getgender(){
        return $this->gender;
    }
    public function toostring(){
        return "Author[$this->authorname,$this->email,$this->gender]";
    }
}

class Book9{
    private $name;
    private $author=[];
    private $price;
    private $qty;
    

    public function __construct($name,$price,$qty)
    {
        $this->name=$name;
        $this->price=$price;
        $this->qty=$qty;
        
    }
    public function getname(){
        return $this->name;
    }
    public function getauthor(){
        return $this->author;
    }
    public function getprice(){
        return $this->price;
    }
    public function setprice($price) {
        $this->price=$price;
    }
    public function getqty(){
        return $this->qty;
    }
    public function setqty($qty) {
        $this->qty=$qty;
    }
    public function setauthor(Author1 $author) {
        $this->author[]=$author;
    }
    }
    $book = new Book9("math book", 44.89, 20);

    $author1 = new Author1("ahmad", "ahmad@gmail.com", "M");
    $book->setauthor($author1);
    
    $author2 = new Author1("asmaa", "asmaa@gmail.com", "F");
    $book->setauthor($author2);
    
    echo "Book name: " . $book->getName() ."<br>";
    
    $authors = $book->getauthor();
    foreach ($authors as $author) {
        echo "Author name: " . $author->getName() ."<br>";
        echo "Author email: " . $author->getEmail() ."<br>";
        echo "Author gender: " . $author->getGender() ."<br>";
    }
    echo "Price:". $book->getPrice() ."<br>";
    echo "Quantity: ". $book->getqty() ."<br>";




//question3

class Author{
    private $name;
    private $email;
   

    public function __construct($name,$email)
    {
        $this->name=$name;
        $this->email=$email;
       
    }
    public function setemail($email){
        $this->email=$email;
    }
    public function getname(){
        return $this->name;
    }
    public function getemail(){
        return $this->email;
    }
    
    public function toostring(){
        return "Author[$this->name,$this->email]";
    }
}
class Book{
    private $name;
    private $author;
    private $price;
    private $qty;
    private $isbn;

    public function __construct($name, Author $author,$price,$qty,$isbn)
    {
        $this->isbn=$isbn;
        $this->name=$name;
        $this->author=$author;
        $this->price=$price;
        $this->qty=$qty;
        
    }
    public function getname(){
        return $this->name;
    }
    public function getauthor(){
        return $this->author;
    }
    public function getprice(){
        return $this->price;
    }
    public function setprice($price) {
        $this->price=$price;
    }
    public function getqty(){
        return $this->qty;
    }
    public function getisbn(){
        return $this->isbn;
    }
    public function setqty($qty) {
        $this->qty=$qty;
    }
    public function setauthor(Author $author) {
        $this->author=$author;
    }
    }
    $author = new Author("mohamed", "mohamed@admin.com");
$book = new Book("science Book", $author, 55.68, 10,"jgdfhhjhk");

echo "Book name: " . $book->getName() . "<br>";
echo "Author name: " . $book->getAuthor()->getName() . "<br>";
echo "Author email: " . $book->getAuthor()->getEmail() . "<br>";
echo "Book isbn: " . $book->getisbn() . "<br>";
echo "Price: $" . $book->getPrice() . "<br>";
echo "Quantity: " . $book->getqty() ."<br>";






//question 4

class circle{
    protected $radius;
    protected $color;

    public function __construct($radius,$color)
    {
        $this->radius=$radius;
        $this->color=$color;
    }
    public function getradius(){
        return $this->radius;
    }
    public function setradius($radius){
        $this->radius=$radius;
    }
    public function getcolor(){
        return $this->color;
    }
    public function setcolor($color){
        $this->color=$color;
    }
    public function getarea(){
        return 3.14*($this->radius*$this->radius);
    }

}
class cylinder extends circle{
    protected $height;
    
    public function __construct($height,$radius,$color)
    {
        $this->height=$height;
        $this->radius=$radius;
        $this->color=$color;
        
    }
    public function getheight(){
        return $this->height;

    }
    public function setheight($height){
        $this->height=$height;
    }
    public function getvolume () {
     
       return  getarea() * $this->height;
    }

}
$myCircle = new Circle(7, 'black');
echo "Circle radius:" . $myCircle->getRadius() . "<br>";
echo "Circle color:" . $myCircle->getColor() . "<br>";
echo "Circle area:" . $myCircle->getArea() . "<br>";

// Create a cylinder
$myCylinder = new Cylinder(4, 'red', 20.0);
echo "Cylinder radius: " . $myCylinder->getRadius() . "<br>";
echo "Cylinder color: " . $myCylinder->getColor() . "<br>";
echo "Cylinder height: " . $myCylinder->getHeight() . "<br>";
echo "Cylinder volume: " . $myCylinder->getVolume() . "<br>";


