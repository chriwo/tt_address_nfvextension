#
# Table structure for table 'tt_address'
#
CREATE TABLE tt_address (
	tx_ttaddressnfvextension_color varchar(30) DEFAULT '' NOT NULL,
	tx_ttaddressnfvextension_address2 tinytext,
	tx_ttaddressnfvextension_zip2 varchar(20) DEFAULT '' NOT NULL,
	tx_ttaddressnfvextension_city2 varchar(80) DEFAULT '' NOT NULL,
	tx_ttaddressnfvextension_phone2 varchar(30) DEFAULT '' NOT NULL
);