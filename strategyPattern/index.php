<?php
interface Strategy
{
  function filter( $record );
}

class FindAfter implements Strategy
{
  private $_name;

  public function __construct( $name )
  {
    $this->_name = $name;
  }

  public function filter( $record )
  {
    return strcmp( $this->_name, $record ) <= 0;
  }
}

class FindRandom implements Strategy
{
  public function filter( $record )
  {
    return rand( 0, 1 ) >= 0.5;
  }
}

class CustomerList
{
  private $_list = array();

  public function __construct( $names )
  {
    if ( $names != null )
    {
      foreach( $names as $name )
      {
        $this->_list []= $name;
      }
    }
  }

  public function add( $name )
  {
    $this->_list []= $name;
  }

  public function find( $filter )
  {
    $recs = array();
    foreach( $this->_list as $user )
    {
      if ( $filter->filter( $user ) )
        $recs []= $user;
    }
    return $recs;
  }
}

$ul = new CustomerList( array( "Dan Joe", "Ric Anderson", "Nick Paul", "Megan Pit" ) );
$f1 = $ul->find( new FindAfter( "J" ) );
print_r( $f1 );

$f2 = $ul->find( new FindRandom());
print_r( $f2 );
?>
