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

function get_msg(){
    $query = "SELECT `Sender`, `Message` FROM `chat`.`chat` ORDER BY `Msg_ID` DESC";
    
    $run = mysql_query($query);
    
    $messages = [];
    
    while ($message = mysql_fetch_assoc($run)){
        $messages[] = array(
            'sender' => $message['Sender'],
            'message' => $message['Message']
        );
    }
    
    return $messages;
}

function send_msg($sender, $message){
    
    if(!empty($sender) && !empty($message)){
        $sender = mysql_real_escape_string($sender);
        $message = mysql_real_escape_string($message);
        
        $query = "INSERT INTO `chat`.`chat` VALUES (null, `{$sender}`, `{$message}`)";
        
        if($run = mysql_query($query)){
            return true; 
        } else {
            return false;
        }
    } else {
        return false;
    }
}