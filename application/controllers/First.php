<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();
		$this->data = array_merge($this->data, $source);

        $this->render();
    }
	
	// Directs user to the first author and renders that pages elements
	function zzz() {
		$this->data['pagebody'] = 'justone'; 
		$source = $this->quotes->get(1);
		$this->data = array_merge($this->data, $source);
		$this->render();
	}
	
	// Directs user to the third author and renders that pages elements
	function gimme($n) {
		$this->data['pagebody'] = 'justone'; 
		$source = $this->quotes->get($n);
		$this->data = array_merge($this->data, $source);
		$this->render();
	}

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */