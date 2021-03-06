<?php
/** 
 * Copyright (c) 2015 Onxshop Ltd (https://onxshop.com)
 * Licensed under the New BSD License. See the file LICENSE.txt for details.
 * 
 */

require_once('controllers/api/v1_3/recipe_list.php');
require_once('controllers/api/v1_4/recipe_detail.php');

class Onxshop_Controller_Api_v1_4_Recipe_List extends Onxshop_Controller_Api_v1_3_Recipe_List {
    
    static $thumbnail_size = 200;
    
    /**
     * formatItem
     */
     
    public function formatItem($item) {
        
        return Onxshop_Controller_Api_v1_4_Recipe_Detail::formatItem($item);
        
    }
    
}
