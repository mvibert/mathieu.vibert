<?php

/////////////////////////////////////////////////////////////////////////////////////////

	/**
	 * compulsory line to prevent the user from executing the code of this source file
	 * by direct access
	 */

	defined ('ROOT') or die('Restricted access');
	
/////////////////////////////////////////////////////////////////////////////////////////

	class Query {
	
		// ***************************************************************
		//					MEMBERS
		// ***************************************************************
		
		/**
		 * An array of the tables on which the query is applied
		 */
		private $tables;
		
		/**
		 * An array of some conditions that can be used in the query
		 */
		 private $conditions;

		// ***************************************************************
		//					CONSTRUCTORS
		// ***************************************************************

		/**
		 * Default constructor of this class
		 */		
	    public function Query() {
	    	$tables = array();
	    	$conditions = array();
	    }
	    
		// ***************************************************************
		//					STATIC METHODS
		// ***************************************************************

		/**
		 * Returns the expression in parameter surrounded by parentheses
		 * 
		 * @param $expression The expression that is to be surrounded by parentheses
		 * @return The expression with parentheses
		 */		
		public static function getParenthesized($expression) {
			return ' ('.$expression.') ';
		}

	}
	
?>
