<?php

/*
 *  Copyright (c) 2013  Rasmus Fuhse <fuhse@data-quest.de>
 * 
 *  This program is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU General Public License as
 *  published by the Free Software Foundation; either version 2 of
 *  the License, or (at your option) any later version.
 */

class CampusConnectSentItem extends SimpleORMap {

    public function __construct($id = null) {
        $this->db_table = "campus_connect_sent_items";
        parent::__construct($id);
    }
}