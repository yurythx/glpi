<?php
class DB extends DBmysql {
   public $dbhost = 'glpi-db:3306';
   public $dbuser = 'glpiuser';
   public $dbpassword = 'change_me_glpi_password';
   public $dbdefault = 'glpidb';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
