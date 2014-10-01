
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- archive_collections
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `archive_collections`;

CREATE TABLE `archive_collections`
(
    `id` INTEGER(11) NOT NULL AUTO_INCREMENT,
    `prev_id` INTEGER(11),
    `next_id` INTEGER(11),
    `us` VARCHAR(2047) NOT NULL,
    `with_user` VARCHAR(1023) NOT NULL,
    `with_server` VARCHAR(1023) NOT NULL,
    `with_resource` VARCHAR(1023) NOT NULL,
    `utc` DATETIME NOT NULL,
    `change_by` VARCHAR(3071),
    `change_utc` DATETIME,
    `deleted` TINYINT(4),
    `subject` VARCHAR(1023),
    `thread` VARCHAR(1023),
    `crypt` TINYINT(4),
    `extra` TEXT,
    PRIMARY KEY (`id`)
   # INDEX `IDX_archive_colls_with` (`us`, `with_user`, `with_server`, `utc`),
  #  INDEX `IDX_archive_colls_prev_id` (`prev_id`),
   # INDEX `IDX_archive_colls_next_id` (`next_id`),
    #INDEX `IDX_archive_colls_utc` (`us`, `utc`),
   # INDEX `IDX_archive_colls_change` (`deleted`, `change_utc`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- archive_global_prefsç
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `archive_global_prefs`;

CREATE TABLE `archive_global_prefs`
(
    `us` VARCHAR(70) NOT NULL,
    `save` TINYINT(4),
    `expire` INTEGER(11),
    `otr` TINYINT(4),
    `method_auto` TINYINT(4),
    `method_local` TINYINT(4),
    `method_manual` TINYINT(4),
    `auto_save` TINYINT(4),
    PRIMARY KEY (`us`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- archive_jid_prefs
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `archive_jid_prefs`;

CREATE TABLE `archive_jid_prefs`
(
    `us` VARCHAR(200) NOT NULL,
    `with_user` VARCHAR(102) NOT NULL,
    `with_server` VARCHAR(102) NOT NULL,
    `with_resource` VARCHAR(102) NOT NULL,
    `save` TINYINT(4),
    `expire` INTEGER(11),
    `otr` TINYINT(4),
    PRIMARY KEY (`us`,`with_user`,`with_server`,`with_resource`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- archive_messages
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `archive_messages`;

CREATE TABLE `archive_messages`
(
    `id` INTEGER(11) NOT NULL AUTO_INCREMENT,
    `coll_id` INTEGER(11) NOT NULL,
    `utc` DATETIME NOT NULL,
    `dir` TINYINT(4),
    `body` TEXT,
    `name` VARCHAR(1023),
    PRIMARY KEY (`id`),
    INDEX `IDX_archive_msgs_coll_id` (`coll_id`, `utc`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
