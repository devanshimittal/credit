<?php
class AdminDao {
	function __construct($db) {
		$this->pdo = $db;
	}

	public function allList() {
		  $query = "SELECT
					T.id AS id,
					T.name AS name,
					T.email AS email,
					T.ccredits AS ccredits
                    FROM user T";
		$stmt = $this->pdo->prepare ( $query );
		$stmt->execute ();
		$result = $stmt->fetchAll ( PDO::FETCH_OBJ );
		if (! empty ( $result )) {
			return $result;
		} else {
			return false;
		}
	}
	
	
	public function allAboutById($id) {
		  $query = "SELECT
					A.id AS id,
					A.name AS name,
					A.email AS email,
					A.ccredits AS ccredits
					FROM user A where A.id='$id'";
		$stmt = $this->pdo->prepare ( $query );
		$stmt->execute ();
		$result = $stmt->fetch ( PDO::FETCH_OBJ );
		if (! empty ( $result )) {
			return $result;
		} else {
			return false;
		}
	}
	
	public function ById($id) {
		  $query = "SELECT
					A.ccredits AS ccredits
					FROM user A where A.id='$id'";
		$stmt = $this->pdo->prepare ( $query );
		$stmt->execute ();
		$result = $stmt->fetch ( PDO::FETCH_OBJ );
		if (! empty ( $result )) {
			return $result;
		} else {
			return false;
		}
	}
	
	public function save( $id,$left)
	 {
		 $query = "UPDATE user SET
					ccredits=:left
					where id='$id' ";
		$stmt = $this->pdo->prepare ( $query );
		$stmt->bindValue ( ':left', $left, PDO::PARAM_STR );	
		$stmt->execute ();
		$recordId = $this->pdo->lastInsertId ();
		if ($recordId > 0) {
			return $recordId;
		} else {
			return false;
		}
	}
	
	public function savenew($transfer, $credits)
	 {	
		 $query = "UPDATE user SET
					ccredits= ccredits+$credits
					where id='$transfer' ";
		$stmt = $this->pdo->prepare ( $query );
		$stmt->bindValue ( ':credits', $credits, PDO::PARAM_STR );	
		$stmt->execute ();
		$recordId = $this->pdo->lastInsertId ();
		if ($recordId > 0) {
			return $recordId;
		} else {
			return false;
		}
	}
	
		
	public function saveTrans ( $name,$transfer, $credits) {
		  $query = "INSERT INTO transfers SET
		            from=:name,
					to=:transfer,
					tcredit=:credits";
		$stmt = $this->pdo->prepare ( $query );
		$stmt->bindValue ( ':name', $name, PDO::PARAM_STR );
		$stmt->bindValue ( ':transfer', $transfer, PDO::PARAM_STR );
		$stmt->bindValue ( ':credits', $credits, PDO::PARAM_STR );
		$stmt->execute ();
		$recordId = $this->pdo->lastInsertId ();
		if ($recordId > 0) {
			return $recordId;
		} else {
			return false;
		}
	}
	
}