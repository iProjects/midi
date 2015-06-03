<?php
include '../DAL/dbwrapper.php';

header( 'Content-Type', 'application/json' );

try {
  $table = null;
  
  if ( $_GET['table'] == 'books' || $_GET['table'] == 'authors' )
    $table = $_GET['table'];
  else
    throw new Exception( 'Invalid table name' );

  $dw = new DatabaseWrapper(
    new PDO('mysql:host=localhost;dbname=books', 'sa', 'Pass12345'),
    $table
  );

  $additional = array();
  foreach( array_keys( $_GET ) as $k ) {
    if ( $k != 'table' && $k != 'method' && $k != 'id' ) {
      $additional[$k] = $_GET[$k];
    }
  }

  switch( $_GET['method'] ) {
    case 'get':
      print json_encode( $dw->get( $_GET['id'] ) );
      break;
    case 'getAll':
      print json_encode( $dw->getAll( $additional ) );
      break;
    case 'insert':
      print json_encode( $dw->insert( $additional ) );
      break;
    case 'update':
      $dw->update( $newid, $additional );
      print json_encode( true );
      break;
    case 'delete':
      $dw->delete( $_GET['id'] );
      print json_encode( true );
      break;
    default:
      throw new Exception( 'Unknown method' );
      break;
  }

} catch ( Exception $e ) {
  print json_encode( array( 'error' => $e->getMessage() ) );
}
?>