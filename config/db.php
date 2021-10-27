<?php

class Database{
    public static function connect() {
        
        $db =  new mysqli('bswt27gmvho2ck4gf2ld-mysql.services.clever-cloud.com', 'udtovgzdu0xww6f2', 'udtovgzdu0xww6f2', 'bswt27gmvho2ck4gf2ld');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}
