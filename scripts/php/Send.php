<?php

/* 
 * Copyright (C) 2016 Harun R Rayhan
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

require '../../includes/database/connect.db.php';
require '../../includes/functions/chat.func.php';

if(isset($_GET['sender']) && !empty($_GET['sender'])){
    $sender = $_GET['sender'];
    
    if(isset($_GET['message']) && !empty($_GET['message'])){
        $message = $_GET['message'];
        
        if(send_msg($sender, $message)){
            echo 'Message sent';
        } else {
            echo 'Message was\'nt sent.';
        }
    }  else {
        echo 'No Message was entered';
    }
} else {
    echo 'No name was entered';
}