<?php

class Application_Model_Admin extends Core_Model_Default {

    public function __construct($datas = array()) {
        parent::__construct($datas);
        $this->_db_table = 'Application_Model_Db_Table_Admin';
    }
}
