<?
namespace Project::DB;

interface iDB {
	/**
	 * Base constructor
	 *
	 * @param string $server
	 * @param string $user
	 * @param string $pass
	 * @param string $DB
	 * @return bool Is successful
	 */
	public function __construct ($server, $user, $pass, $DB);

	/**
	 * Execute query
	 *
	 * @param query $query SQL Statement
	 * @return DBQuery Object or boolean
	 */
	public function query ($query);

	/**
	 * Close connection
	 * Not needed to call - destructor will do it
	 *
	 * @return bool Is successful
	 *
	 */
	public function close ();
}

interface iDBQuery {
	/**
	 * DBQuery constructor
	 * Not intended for public use
	 * Should be called by DB implementing object
	 *
	 * @param resource $link
	 * @param resource $resource
	 *
	 */
	public function __construct ($link, $resource);

	/**
	 * Close the query and cleanup resources
	 *
	 * @return bool True on success
	 */
	public function close ();

	/**
	 * Returns object, representing the next row
	 *
	 * @return DBRow Row object or false on error
	 *
	 */
	public function getNext ();

	/**
	 * Move internal cursor to row number
	 *
	 * @return True on success
	 *
	 */
	public function moveToRow ();

	/**
	 * Returns count of rows in the query
	 *
	 * @return integer Row count or -1 on error
	 *
	 */
	public function getRowsCount ();

	/**
	 * Returns array with the fields names
	 *
	 * @return array
	 *
	 */
	public function getFields ();

	/**
	 * Get the value of a cell, given by row number and column number or name
	 *
	 * @param integer $row
	 * @param mixed $column
	 */
	public function getValue ($row, $column);

}

interface iDBRow {
	/**
	 * Create row object
	 * Not intended for public use, must be created by DBQuery implementing object
	 *
	 * @param DBQuery $query
	 * @param array $data
	 */
	public function __construct ($query, $data);

	/**
	 * Return value of a cell by column name or number
	 *
	 * @param mixed $column
	 */
	public function getValue ($column);

	/**
	 * Return array, containing all the values in the row
	 *
	 * @param bool $associative_array
	 */
	public function getValuesAsArray ($associative_array);

	public function __destruct ();

}
?>