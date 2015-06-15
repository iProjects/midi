CREATE TABLE  IF NOT EXISTS `midiaccounts` (
	`accountID`  int(11) NOT NULL,
	`customerId`  int  NULL,
	`accountName`  varchar (200) NULL,
	`accountNo`  varchar (200) NULL,
	`bookBalance`  decimal  NULL,
	`clearedBalance`  decimal  NULL,
	`interestRate`  float  NULL,
	`accountTypeId`  int  NULL,
	`cOAId`  int  NULL,
	`branch`  varchar (200) NULL,
	`passFlag`  smallint  NULL,
	`accruedInt`  decimal  NULL,
	`limit`  decimal  NULL,
	`limitFlag`  smallint  NULL,
	`limitCheckFlag`  smallint NULL,
	`bal30`  decimal  NULL,
	`bal60`  decimal  NULL,
	`bal90`  decimal  NULL,
	`balOver90` decimal  NULL,
	`intRate30`  float  NULL,
	`intRate60`  float  NULL,
	`intRate90`  float  NULL,
	`intRateOver90`  float  NULL,
	`closed`  bit  NULL ) 
ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;



ALTER TABLE `midiaccounts`
  ADD PRIMARY KEY (`accountID`), ADD UNIQUE KEY `accountID` (`accountID`);


ALTER TABLE `midiaccounts`
  MODIFY `accountID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;


 