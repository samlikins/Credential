<?php
//Generated by buildORM from the cred:FormTest

	

	class FormTestBase extends BaseORM{ //which extends Eloquent...

		var $table = 'FormTest';

		protected $guarded = array(); //everything can be added via auto-fill... override this in custom code...
		

        //autogenerated this function... 
        public function Address()
        {
                return $this->belongs_to('Address','address_id');
        }


	}//the end of class FormTest		
?>