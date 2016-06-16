<?phpclass User {
 
  // The class properties.
  public $firstName;
  public $lastName;
 
  public function hello()
  {
    return "hello, " .  $this -> firstName;
  }
 
  
  public function register()


  {
    echo $this -> firstName . " " . $this -> lastName . " registered.";
  }
}
?>