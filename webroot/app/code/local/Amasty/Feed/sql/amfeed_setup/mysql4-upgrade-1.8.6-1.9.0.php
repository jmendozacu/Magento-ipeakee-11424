<?php
    /**
 * @author Amasty Team
 * @copyright Copyright (c) 2016 Amasty (https://www.amasty.com)
 * @package Amasty_Feed
 */
    $installer = $this;
    $installer->startSetup();
    
    $installer->run("
                CREATE TABLE `{$this->getTable('amfeed/template')}` LIKE `{$this->getTable('amfeed/profile')}`;
                insert  into `{$this->getTable('amfeed/template')}` (`feed_id`,`store_id`,`status`,`generated_at`,`delivery_at`,`type`,`title`,`filename`,`mode`,`cond_stock`,`cond_disabled`,`cond_type`,`cond_advanced`,`xml_header`,`xml_body`,`xml_footer`,`xml_item`,`csv`,`csv_header`,`csv_enclosure`,`csv_delimiter`,`frm_date`,`frm_price`,`frm_url`,`frm_image_url`,`frm_dont_use_category_in_url`,`frm_use_parent`,`default_image`,`delivery_type`,`delivered`,`send_email`,`ftp_host`,`ftp_user`,`ftp_pass`,`ftp_folder`,`ftp_is_passive`,`info_total`,`info_cnt`,`info_errors`,`freq`,`on_days`,`hour_from`,`hour_to`,`error_email`,`max_images`) values (2,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'Shopping.com','shopping.com',0,1,1,'simple,grouped,configurable,virtual,bundle,downloadable','a:3:{s:4:\"attr\";a:0:{}s:2:\"op\";a:1:{i:0;s:2:\"eq\";}s:3:\"val\";a:1:{i:0;s:0:\"\";}}','','','',NULL,'a:12:{s:4:\"name\";a:11:{i:0;s:3:\"mpn\";i:1;s:12:\"manufacturer\";i:2;s:12:\"product name\";i:3;s:21:\"product  description \";i:4;s:5:\"price\";i:5;s:5:\"stock\";i:6;s:18:\"stock description \";i:7;s:11:\"product url\";i:8;s:9:\"image url\";i:9;s:8:\"category\";i:10;s:14:\"shipping rate \";}s:6:\"before\";a:12:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";}s:4:\"type\";a:11:{i:0;s:9:\"attribute\";i:1;s:9:\"attribute\";i:2;s:9:\"attribute\";i:3;s:9:\"attribute\";i:4;s:9:\"attribute\";i:5;s:4:\"text\";i:6;s:4:\"text\";i:7;s:9:\"attribute\";i:8;s:9:\"attribute\";i:9;s:9:\"attribute\";i:10;s:4:\"text\";}s:4:\"attr\";a:11:{i:0;s:3:\"sku\";i:1;s:12:\"manufacturer\";i:2;s:4:\"name\";i:3;s:11:\"description\";i:4;s:5:\"price\";i:5;s:22:\"activation_information\";i:6;s:22:\"activation_information\";i:7;s:3:\"url\";i:8;s:5:\"image\";i:9;s:13:\"category_name\";i:10;s:22:\"activation_information\";}s:3:\"txt\";a:12:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:3:\"Yes\";i:6;s:3:\"New\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";}s:9:\"meta_tags\";a:12:{i:0;s:10:\"meta_title\";i:1;s:10:\"meta_title\";i:2;s:10:\"meta_title\";i:3;s:10:\"meta_title\";i:4;s:10:\"meta_title\";i:5;s:10:\"meta_title\";i:6;s:10:\"meta_title\";i:7;s:10:\"meta_title\";i:8;s:10:\"meta_title\";i:9;s:10:\"meta_title\";i:10;s:10:\"meta_title\";i:11;s:10:\"meta_title\";}s:6:\"images\";a:12:{i:0;s:7:\"image_1\";i:1;s:7:\"image_1\";i:2;s:7:\"image_1\";i:3;s:7:\"image_1\";i:4;s:7:\"image_1\";i:5;s:7:\"image_1\";i:6;s:7:\"image_1\";i:7;s:7:\"image_1\";i:8;s:7:\"image_1\";i:9;s:7:\"image_1\";i:10;s:7:\"image_1\";i:11;s:7:\"image_1\";}s:5:\"after\";a:12:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";}s:6:\"format\";a:12:{i:0;s:5:\"as_is\";i:1;s:5:\"as_is\";i:2;s:5:\"as_is\";i:3;s:10:\"strip_tags\";i:4;s:5:\"price\";i:5;s:5:\"as_is\";i:6;s:5:\"as_is\";i:7;s:5:\"as_is\";i:8;s:5:\"as_is\";i:9;s:5:\"as_is\";i:10;s:5:\"as_is\";i:11;s:5:\"as_is\";}s:12:\"image_format\";a:12:{i:0;s:4:\"base\";i:1;s:4:\"base\";i:2;s:4:\"base\";i:3;s:4:\"base\";i:4;s:4:\"base\";i:5;s:4:\"base\";i:6;s:4:\"base\";i:7;s:4:\"base\";i:8;s:4:\"base\";i:9;s:4:\"base\";i:10;s:4:\"base\";i:11;s:4:\"base\";}s:6:\"length\";a:12:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";}s:6:\"parent\";a:12:{i:0;s:2:\"no\";i:1;s:2:\"no\";i:2;s:2:\"no\";i:3;s:2:\"no\";i:4;s:2:\"no\";i:5;s:2:\"no\";i:6;s:2:\"no\";i:7;s:2:\"no\";i:8;s:2:\"no\";i:9;s:2:\"no\";i:10;s:2:\"no\";i:11;s:2:\"no\";}}',1,34,44,'',2,0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,'',0,0,NULL,0),(3,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'Getprice.com','Getprice.com',0,0,0,'simple,grouped,configurable,virtual,bundle,downloadable','a:3:{s:4:\"attr\";a:0:{}s:2:\"op\";a:1:{i:0;s:2:\"eq\";}s:3:\"val\";a:1:{i:0;s:0:\"\";}}','','','','NULL','a:12:{s:4:\"name\";a:10:{i:0;s:3:\"SKU\";i:1;s:10:\"Product ID\";i:2;s:17:\"Short Description\";i:3;s:13:\"Category Name\";i:4;s:5:\"Brand\";i:5;s:5:\"Model\";i:6;s:10:\"Image Link\";i:7;s:11:\"Product URL\";i:8;s:5:\"Price\";i:9;s:14:\"Shipment Costs\";}s:6:\"before\";a:11:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";}s:4:\"type\";a:10:{i:0;s:9:\"attribute\";i:1;s:9:\"attribute\";i:2;s:9:\"attribute\";i:3;s:9:\"attribute\";i:4;s:9:\"attribute\";i:5;s:9:\"attribute\";i:6;s:9:\"attribute\";i:7;s:9:\"attribute\";i:8;s:9:\"attribute\";i:9;s:4:\"text\";}s:4:\"attr\";a:10:{i:0;s:3:\"sku\";i:1;s:9:\"entity_id\";i:2;s:17:\"short_description\";i:3;s:13:\"category_name\";i:4;s:12:\"manufacturer\";i:5;s:4:\"name\";i:6;s:5:\"image\";i:7;s:3:\"url\";i:8;s:5:\"price\";i:9;s:22:\"activation_information\";}s:3:\"txt\";a:11:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:1:\"0\";i:10;s:0:\"\";}s:9:\"meta_tags\";a:11:{i:0;s:10:\"meta_title\";i:1;s:10:\"meta_title\";i:2;s:10:\"meta_title\";i:3;s:10:\"meta_title\";i:4;s:10:\"meta_title\";i:5;s:10:\"meta_title\";i:6;s:10:\"meta_title\";i:7;s:10:\"meta_title\";i:8;s:10:\"meta_title\";i:9;s:10:\"meta_title\";i:10;s:10:\"meta_title\";}s:6:\"images\";a:11:{i:0;s:7:\"image_1\";i:1;s:7:\"image_1\";i:2;s:7:\"image_1\";i:3;s:7:\"image_1\";i:4;s:7:\"image_1\";i:5;s:7:\"image_1\";i:6;s:7:\"image_1\";i:7;s:7:\"image_1\";i:8;s:7:\"image_1\";i:9;s:7:\"image_1\";i:10;s:7:\"image_1\";}s:5:\"after\";a:11:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";}s:6:\"format\";a:11:{i:0;s:5:\"as_is\";i:1;s:5:\"as_is\";i:2;s:10:\"strip_tags\";i:3;s:5:\"as_is\";i:4;s:5:\"as_is\";i:5;s:5:\"as_is\";i:6;s:5:\"as_is\";i:7;s:5:\"as_is\";i:8;s:5:\"price\";i:9;s:5:\"as_is\";i:10;s:5:\"as_is\";}s:12:\"image_format\";a:11:{i:0;s:4:\"base\";i:1;s:4:\"base\";i:2;s:4:\"base\";i:3;s:4:\"base\";i:4;s:4:\"base\";i:5;s:4:\"base\";i:6;s:4:\"base\";i:7;s:4:\"base\";i:8;s:4:\"base\";i:9;s:4:\"base\";i:10;s:4:\"base\";}s:6:\"length\";a:11:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";}s:6:\"parent\";a:11:{i:0;s:2:\"no\";i:1;s:2:\"no\";i:2;s:2:\"no\";i:3;s:2:\"no\";i:4;s:2:\"no\";i:5;s:2:\"no\";i:6;s:2:\"no\";i:7;s:2:\"no\";i:8;s:2:\"no\";i:9;s:2:\"no\";i:10;s:2:\"no\";}}',1,110,9,'',2,0,0,0,0,0,0,0,NULL,'NULL','NULL','NULL','NULL',0,0,0,0,0,'',0,0,NULL,0),(4,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Google.com','Google.com',0,1,1,'simple,grouped,configurable,virtual,bundle,downloadable','a:3:{s:4:\"attr\";a:0:{}s:2:\"op\";a:1:{i:0;s:2:\"eq\";}s:3:\"val\";a:1:{i:0;s:0:\"\";}}','<?xml version=\"1.0\"?> <rss version=\"2.0\" xmlns:g=\"http://base.google.com/ns/1.0\"> <channel>','<g:id>{type=\"attribute\" value=\"sku\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</g:id> <title>{type=\"attribute\" value=\"name\" format=\"html_escape\" length=\"\" optional=\"no\" parent=\"no\"}</title> <description>{type=\"attribute\" value=\"description\" format=\"html_escape\" length=\"\" optional=\"no\" parent=\"no\"}</description> <g:product_type>{type=\"attribute\" value=\"category_name\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</g:product_type> <link>{type=\"attribute\" value=\"url\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</link> <g:image_link>{type=\"attribute\" value=\"image\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</g:image_link> <g:condition>{type=\"text\" value=\"new\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</g:condition> <g:availability>{type=\"attribute\" value=\"is_in_stock\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</g:availability> <g:price>{type=\"attribute\" value=\"price\" format=\"price\" length=\"\" optional=\"no\" parent=\"no\"} USD</g:price> <g:brand>{type=\"attribute\" value=\"manufacturer\" format=\"html_escape\" length=\"\" optional=\"no\" parent=\"no\"}</g:brand> <g:tax> <g:country>{type=\"text\" value=\"US\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</g:country> <g:rate>{type=\"attribute\" value=\"tax_percents\" format=\"price\" length=\"\" optional=\"no\" parent=\"no\"}</g:rate> <g:tax_ship>{type=\"text\" value=\"y\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</g:tax_ship> </g:tax><g:google_product_category>{type=\"attribute\" value=\"category_name\" format=\"as_is\" length=\"\" optional=\"no\" parent=\"no\"}</g:google_product_category>','</channel> </rss>','item','a:0:{}',0,34,44,'y.m.d',2,0,0,0,0,0,0,0,NULL,'NULL','NULL','NULL','NULL',0,0,0,0,0,'',0,0,NULL,0),(5,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'Myshopping.com','Myshopping.com',0,1,1,'simple,grouped,configurable,virtual,bundle,downloadable','a:3:{s:4:\"attr\";a:0:{}s:2:\"op\";a:1:{i:0;s:2:\"eq\";}s:3:\"val\";a:1:{i:0;s:0:\"\";}}','','','','NULL','a:12:{s:4:\"name\";a:8:{i:0;s:4:\"Code\";i:1;s:4:\"Name\";i:2;s:11:\"Description\";i:3;s:8:\"Category\";i:4;s:5:\"Price\";i:5;s:11:\"Product_URL\";i:6;s:9:\"Image_URL\";i:7;s:5:\"Brand\";}s:6:\"before\";a:9:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}s:4:\"type\";a:8:{i:0;s:9:\"attribute\";i:1;s:9:\"attribute\";i:2;s:9:\"attribute\";i:3;s:9:\"attribute\";i:4;s:9:\"attribute\";i:5;s:9:\"attribute\";i:6;s:9:\"attribute\";i:7;s:9:\"attribute\";}s:4:\"attr\";a:8:{i:0;s:9:\"entity_id\";i:1;s:4:\"name\";i:2;s:17:\"short_description\";i:3;s:13:\"category_name\";i:4;s:5:\"price\";i:5;s:3:\"url\";i:6;s:5:\"image\";i:7;s:12:\"manufacturer\";}s:3:\"txt\";a:9:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}s:9:\"meta_tags\";a:9:{i:0;s:10:\"meta_title\";i:1;s:10:\"meta_title\";i:2;s:10:\"meta_title\";i:3;s:10:\"meta_title\";i:4;s:10:\"meta_title\";i:5;s:10:\"meta_title\";i:6;s:10:\"meta_title\";i:7;s:10:\"meta_title\";i:8;s:10:\"meta_title\";}s:6:\"images\";a:9:{i:0;s:7:\"image_1\";i:1;s:7:\"image_1\";i:2;s:7:\"image_1\";i:3;s:7:\"image_1\";i:4;s:7:\"image_1\";i:5;s:7:\"image_1\";i:6;s:7:\"image_1\";i:7;s:7:\"image_1\";i:8;s:7:\"image_1\";}s:5:\"after\";a:9:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}s:6:\"format\";a:9:{i:0;s:5:\"as_is\";i:1;s:5:\"as_is\";i:2;s:11:\"html_escape\";i:3;s:5:\"as_is\";i:4;s:5:\"price\";i:5;s:5:\"as_is\";i:6;s:5:\"as_is\";i:7;s:5:\"as_is\";i:8;s:5:\"as_is\";}s:12:\"image_format\";a:9:{i:0;s:4:\"base\";i:1;s:4:\"base\";i:2;s:4:\"base\";i:3;s:4:\"base\";i:4;s:4:\"base\";i:5;s:4:\"base\";i:6;s:4:\"base\";i:7;s:4:\"base\";i:8;s:4:\"base\";}s:6:\"length\";a:9:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:3:\"255\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";}s:6:\"parent\";a:9:{i:0;s:2:\"no\";i:1;s:2:\"no\";i:2;s:2:\"no\";i:3;s:2:\"no\";i:4;s:2:\"no\";i:5;s:2:\"no\";i:6;s:2:\"no\";i:7;s:2:\"no\";i:8;s:2:\"no\";}}',1,34,44,'',2,0,0,0,0,0,0,0,NULL,'NULL','NULL','NULL','NULL',0,0,0,0,0,'',0,0,NULL,0),(6,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'Nextag.com','Nextag.com',0,1,1,'simple,grouped,configurable,virtual,bundle,downloadable','a:3:{s:4:\"attr\";a:0:{}s:2:\"op\";a:1:{i:0;s:2:\"eq\";}s:3:\"val\";a:1:{i:0;s:0:\"\";}}','','','','NULL','a:12:{s:4:\"name\";a:7:{i:0;s:22:\"Category: Other Format\";i:1;s:13:\"Click-Out URL\";i:2;s:11:\"Description\";i:3;s:9:\"Image URL\";i:4;s:12:\"Manufacturer\";i:5;s:5:\"Price\";i:6;s:12:\"Product Name\";}s:6:\"before\";a:8:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";}s:4:\"type\";a:7:{i:0;s:9:\"attribute\";i:1;s:9:\"attribute\";i:2;s:9:\"attribute\";i:3;s:9:\"attribute\";i:4;s:9:\"attribute\";i:5;s:9:\"attribute\";i:6;s:9:\"attribute\";}s:4:\"attr\";a:7:{i:0;s:13:\"category_name\";i:1;s:3:\"url\";i:2;s:11:\"description\";i:3;s:5:\"image\";i:4;s:12:\"manufacturer\";i:5;s:5:\"price\";i:6;s:4:\"name\";}s:3:\"txt\";a:8:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";}s:9:\"meta_tags\";a:8:{i:0;s:10:\"meta_title\";i:1;s:10:\"meta_title\";i:2;s:10:\"meta_title\";i:3;s:10:\"meta_title\";i:4;s:10:\"meta_title\";i:5;s:10:\"meta_title\";i:6;s:10:\"meta_title\";i:7;s:10:\"meta_title\";}s:6:\"images\";a:8:{i:0;s:7:\"image_1\";i:1;s:7:\"image_1\";i:2;s:7:\"image_1\";i:3;s:7:\"image_1\";i:4;s:7:\"image_1\";i:5;s:7:\"image_1\";i:6;s:7:\"image_1\";i:7;s:7:\"image_1\";}s:5:\"after\";a:8:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";}s:6:\"format\";a:8:{i:0;s:5:\"as_is\";i:1;s:5:\"as_is\";i:2;s:10:\"strip_tags\";i:3;s:5:\"as_is\";i:4;s:5:\"as_is\";i:5;s:5:\"price\";i:6;s:5:\"as_is\";i:7;s:5:\"as_is\";}s:12:\"image_format\";a:8:{i:0;s:4:\"base\";i:1;s:4:\"base\";i:2;s:4:\"base\";i:3;s:4:\"base\";i:4;s:4:\"base\";i:5;s:4:\"base\";i:6;s:4:\"base\";i:7;s:4:\"base\";}s:6:\"length\";a:8:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";}s:6:\"parent\";a:8:{i:0;s:2:\"no\";i:1;s:2:\"no\";i:2;s:2:\"no\";i:3;s:2:\"no\";i:4;s:2:\"no\";i:5;s:2:\"no\";i:6;s:2:\"no\";i:7;s:2:\"no\";}}',1,34,44,'',2,0,0,0,0,0,0,0,NULL,'NULL','NULL','NULL','NULL',0,0,0,0,0,'',0,0,NULL,0),(7,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'Shopmania.com','Shopmania.com',0,0,0,'simple,grouped,configurable,virtual,bundle,downloadable','a:3:{s:4:\"attr\";a:0:{}s:2:\"op\";a:1:{i:0;s:2:\"eq\";}s:3:\"val\";a:1:{i:0;s:0:\"\";}}','','','','NULL','a:12:{s:4:\"name\";a:9:{i:0;s:8:\"Category\";i:1;s:12:\"Manufacturer\";i:2;s:5:\"Model\";i:3;s:13:\"Merchant Code\";i:4;s:12:\"Product name\";i:5;s:19:\"Product description\";i:6;s:11:\"Product URL\";i:7;s:9:\"Image URL\";i:8;s:13:\"Product price\";}s:6:\"before\";a:10:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";}s:4:\"type\";a:9:{i:0;s:9:\"attribute\";i:1;s:9:\"attribute\";i:2;s:9:\"attribute\";i:3;s:9:\"attribute\";i:4;s:9:\"attribute\";i:5;s:9:\"attribute\";i:6;s:9:\"attribute\";i:7;s:9:\"attribute\";i:8;s:9:\"attribute\";}s:4:\"attr\";a:9:{i:0;s:13:\"category_name\";i:1;s:12:\"manufacturer\";i:2;s:4:\"name\";i:3;s:3:\"sku\";i:4;s:4:\"name\";i:5;s:11:\"description\";i:6;s:3:\"url\";i:7;s:5:\"image\";i:8;s:5:\"price\";}s:3:\"txt\";a:10:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";}s:9:\"meta_tags\";a:10:{i:0;s:10:\"meta_title\";i:1;s:10:\"meta_title\";i:2;s:10:\"meta_title\";i:3;s:10:\"meta_title\";i:4;s:10:\"meta_title\";i:5;s:10:\"meta_title\";i:6;s:10:\"meta_title\";i:7;s:10:\"meta_title\";i:8;s:10:\"meta_title\";i:9;s:10:\"meta_title\";}s:6:\"images\";a:10:{i:0;s:7:\"image_1\";i:1;s:7:\"image_1\";i:2;s:7:\"image_1\";i:3;s:7:\"image_1\";i:4;s:7:\"image_1\";i:5;s:7:\"image_1\";i:6;s:7:\"image_1\";i:7;s:7:\"image_1\";i:8;s:7:\"image_1\";i:9;s:7:\"image_1\";}s:5:\"after\";a:10:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";}s:6:\"format\";a:10:{i:0;s:5:\"as_is\";i:1;s:5:\"as_is\";i:2;s:5:\"as_is\";i:3;s:5:\"as_is\";i:4;s:5:\"as_is\";i:5;s:10:\"strip_tags\";i:6;s:5:\"as_is\";i:7;s:5:\"as_is\";i:8;s:5:\"price\";i:9;s:5:\"as_is\";}s:12:\"image_format\";a:10:{i:0;s:4:\"base\";i:1;s:4:\"base\";i:2;s:4:\"base\";i:3;s:4:\"base\";i:4;s:4:\"base\";i:5;s:4:\"base\";i:6;s:4:\"base\";i:7;s:4:\"base\";i:8;s:4:\"base\";i:9;s:4:\"base\";}s:6:\"length\";a:10:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";}s:6:\"parent\";a:10:{i:0;s:2:\"no\";i:1;s:2:\"no\";i:2;s:2:\"no\";i:3;s:2:\"no\";i:4;s:2:\"no\";i:5;s:2:\"no\";i:6;s:2:\"no\";i:7;s:2:\"no\";i:8;s:2:\"no\";i:9;s:2:\"no\";}}',1,110,124,'',2,0,0,0,0,0,0,0,NULL,'NULL','NULL','NULL','NULL',0,0,0,0,0,'',0,0,NULL,0);
    ");
    $installer->endSetup();
?>