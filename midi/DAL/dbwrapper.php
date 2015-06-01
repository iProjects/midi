<?php
class DatabaseWrapper {
  private $dbh;
  
  public function __construct( $dbh, $table ) {
    $this->dbh = $dbh;
    $this->table = $table;
  }

  public function get( $id ) {
    $sql = 'SELECT * FROM '.$this->table.' WHERE id = :id';
    $sth = $this->dbh->prepare($sql);
    $sth->execute(array(':id' => $id));
    return $sth->fetchObject();
  }

  public function getAll( $options = array() ) {
    $sql = 'SELECT * FROM '.$this->table;
    if ( isset( $options->{'limit'} ) ) {
      $sql .= ' LIMIT '.$this->dbh->quote( $options->{'limit'}, PDO::PARAM_INT );
    }
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    return $sth->fetchAll( PDO::FETCH_CLASS );
  }

  public function delete( $id ) {
    $sql = 'DELETE FROM '.$this->table.' WHERE id = :id';
    $sth = $this->dbh->prepare($sql);
    $sth->execute(array(':id' => $id));
  }

  public function update( $id, $values ) {
    $binds = array( ':id' => $id );
    $bindnames = array();

    foreach(array_keys($values) as $k) {
      $k = $this->clean( $k );
      $binds[ ":$k" ] = $values[ $k ];
      $bindnames []= "$k=:$k";
    }

    $bindnames = join( $bindnames, ',' );

    $sql = 'UPDATE '.$this->table." SET $bindnames WHERE id=:id";

    $sth = $this->dbh->prepare($sql);

    $sth->execute( $binds );
  }

  public function insert( $values ) {
    $keys = array();
    $binds = array();
    $bindnames = array();

    foreach(array_keys($values) as $k) {
      $k = $this->clean( $k );
      $keys []= $k;
      $binds[ ":$k" ] = $values[ $k ];
      $bindnames []= ":$k";
    }

    $keys = join( $keys, ',' );
    $bindnames = join( $bindnames, ',' );

    $sql = 'INSERT INTO '.$this->table." ( $keys ) VALUES ( $bindnames )";

    $sth = $this->dbh->prepare($sql);

    $sth->execute( $binds );

    return $this->dbh->lastInsertId();
  }

  private function clean( $k ) {
    return preg_replace( '[^A-Za-z0-9_]', '', $k );
  }
}
?>