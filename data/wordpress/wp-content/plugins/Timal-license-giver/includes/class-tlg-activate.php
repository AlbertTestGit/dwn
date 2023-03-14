<?php

class Tlg_Activate
{
    public static function activate()
    {
        global $wpdb;
        $wpdb->query("
CREATE TABLE IF NOT EXISTS `tlg_tbl` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3");
        $query = "INSERT INTO `tlg_tbl` (`id`, `content`) VALUES (NULL, %s)";
        $wpdb->query($wpdb->prepare( $query, 'API'));
    }
}