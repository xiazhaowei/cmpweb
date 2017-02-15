<?php
//创建产品表
$sqls[]="CREATE TABLE IF NOT EXISTS `lanke_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `title` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `keywords` varchar(300) NOT NULL DEFAULT '',
  `description` varchar(400) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  `ename` varchar(200) NOT NULL DEFAULT '',
  `etitle` varchar(300) NOT NULL DEFAULT '',
  `ekeywords` varchar(300) NOT NULL DEFAULT '',
  `edescription` varchar(400) NOT NULL DEFAULT '',
  `econtents` text NOT NULL,
  `pid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `photo` varchar(400) NOT NULL DEFAULT '',
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `property1` varchar(200) NOT NULL DEFAULT '',
  `property2` varchar(200) NOT NULL DEFAULT '',
  `property3` varchar(200) NOT NULL DEFAULT '',
  `property4` varchar(200) NOT NULL,
  `eproperty1` varchar(200) NOT NULL DEFAULT '',
  `eproperty2` varchar(200) NOT NULL DEFAULT '',
  `eproperty3` varchar(200) NOT NULL DEFAULT '',
  `eproperty4` varchar(200) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;";

//创建相册表
$sqls[]="CREATE TABLE IF NOT EXISTS `lanke_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `title` varchar(200) NOT NULL DEFAULT '',
  `ename` varchar(200) NOT NULL DEFAULT '',
  `etitle` varchar(300) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `keywords` varchar(300) NOT NULL DEFAULT '',
  `description` varchar(400) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  `ekeywords` varchar(300) NOT NULL DEFAULT '',
  `edescription` varchar(400) NOT NULL DEFAULT '',
  `econtents` text NOT NULL,
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `photo` varchar(400) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;";

//创建新闻表
$sqls[]="CREATE TABLE IF NOT EXISTS `lanke_new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `etitle` varchar(300) NOT NULL DEFAULT '',
  `ekeywords` varchar(300) NOT NULL DEFAULT '',
  `edescription` varchar(400) NOT NULL DEFAULT '',
  `econtents` text NOT NULL,
  `keywords` varchar(300) NOT NULL DEFAULT '',
  `description` varchar(400) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `bid` int(11) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url_2` (`url`),
  KEY `url` (`url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;";

//创建下载表
$sqls[]="CREATE TABLE IF NOT EXISTS `lanke_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `title` varchar(200) NOT NULL DEFAULT '',
  `ename` varchar(200) NOT NULL DEFAULT '',
  `etitle` varchar(300) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `keywords` varchar(300) NOT NULL DEFAULT '',
  `description` varchar(400) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  `ekeywords` varchar(300) NOT NULL DEFAULT '',
  `edescription` varchar(400) NOT NULL DEFAULT '',
  `econtents` text NOT NULL,
  `filename` varchar(400) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;";

//创建留言表
$sqls[]="CREATE TABLE IF NOT EXISTS `lanke_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `tel` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `add` varchar(200) NOT NULL DEFAULT '',
  `contents` varchar(500) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";

//创建广告表
$sqls[]="CREATE TABLE IF NOT EXISTS `lanke_flash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `link` varchar(300) NOT NULL DEFAULT '',
  `photo` varchar(100) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  `description` varchar(400) NOT NULL DEFAULT '',
  `edescription` varchar(400) NOT NULL DEFAULT '',
  `type` varchar(30) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;";

//创建订单表
$sqls[]="CREATE TABLE IF NOT EXISTS `lanke_inquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(100) NOT NULL DEFAULT '',
  `num` varchar(50) NOT NULL DEFAULT '0',
  `name` varchar(30) NOT NULL DEFAULT '',
  `company` varchar(50) NOT NULL DEFAULT '',
  `add` varchar(200) NOT NULL DEFAULT '',
  `tel` varchar(50) NOT NULL DEFAULT '',
  `fax` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `contents` varchar(500) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";

//创建内链表
$sqls[]="CREATE TABLE IF NOT EXISTS `lanke_inside` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(50) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `ekeyword` varchar(100) NOT NULL DEFAULT '',
  `eurl` varchar(300) NOT NULL DEFAULT '',
  `number` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";

//创建友情链接表
$sqls[]="CREATE TABLE IF NOT EXISTS `lanke_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(500) NOT NULL DEFAULT '',
  `ename` varchar(100) NOT NULL DEFAULT '',
  `eurl` varchar(500) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";

//创建栏目表
$sqls[]="CREATE TABLE IF NOT EXISTS `lanke_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `ename` varchar(200) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL DEFAULT '',
  `etitle` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `keywords` varchar(200) NOT NULL DEFAULT '',
  `ekeywords` varchar(200) NOT NULL DEFAULT '',
  `description` varchar(400) NOT NULL DEFAULT '',
  `edescription` varchar(400) NOT NULL DEFAULT '',
  `sort` tinyint(1) NOT NULL DEFAULT '1',
  `nav` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(30) NOT NULL DEFAULT '',
  `link` varchar(200) NOT NULL DEFAULT '',
  `elink` varchar(200) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  `econtents` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50";

//创建标签表
$sqls[]="CREATE TABLE IF NOT EXISTS `lanke_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `ename` varchar(100) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";

//创建用户表
$sqls[]="CREATE TABLE IF NOT EXISTS `lanke_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";

//插入用户信息
$intosqls[]="INSERT INTO `lanke_user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');";

//插入栏目信息
$intosqls[]="INSERT INTO `lanke_list` (`id`, `name`, `ename`, `pid`, `bid`, `title`, `etitle`, `url`, `keywords`, `ekeywords`, `description`, `edescription`, `sort`, `nav`, `type`, `link`, `elink`, `contents`, `econtents`) VALUES
(1, '产品中心', 'Products', 0, 1, '产品中心-SEO标题优化', 'seo-products', 'product', '产品中心', 'product', '产品中心产品中心', 'product product', 2, 1, 'product', '', '', '', ''),
(2, '新闻中心', 'News', 0, 2, '新闻优化标题', 'News', 'new', '新闻关键字优化', 'news,key', '新闻描述优化', 'New new new', 3, 1, 'new', '', '', '', ''),
(3, '下载中心', 'Download', 0, 3, 'seo标题-下载中心', 'Download title', 'download', '下载中心', 'Download keywords', '下载中心下载中心', 'Download Download Download', 4, 1, 'download', '', '', '', ''),
(4, '联系我们', 'Contact us', 0, 4, '联系我们', 'Contact us Contact us', 'Contact-us', '联系我们', 'Contact us', '联系我们', 'Contact us Contact us', 8, 1, 'page', '', '', '<p>\r\n  联系我们&nbsp;联系我们&nbsp;联系我们&nbsp;联系我们\r\n</p>\r\n<p>\r\n 联系我们&nbsp;联系我们&nbsp;联系我们\r\n</p>', 'Concact us'),
(5, '产品大类1', 'product bigclass', 1, 1, '产品大类1产品大类1', 'product-bigclass-1', 'product-bigclass-1', '产品大类1产品大类1', 'product-bigclass', '产品大类1产品大类1', 'product-bigclass-1', 1, 1, 'product', '', '', '', ''),
(6, '产品大类2', 'product bigclass 2', 1, 1, '产品大类2-SEO标题优化', 'product bigclass 2', 'product-bigclass-2', '产品大类2', 'product bigclass 2', '产品大类2', 'product bigclass 2', 2, 1, 'product', '', '', '', ''),
(7, '产品大类3', 'product bigclass 3', 1, 1, '产品大类3-SEO标题优化', 'product bigclass 3', 'product-bigclass-3', '产品大类3', 'product bigclass 3', '产品大类3', 'product bigclass 3', 3, 1, 'product', '', '', '', ''),
(8, '产品小类1_1', 'product smallclass 1', 5, 1, '产品小类1_1', 'product smallclass 1', 'product-smallclass-1', '产品小类1_1', 'product smallclass 1', '产品小类1_1', 'product smallclass 1', 1, 1, 'product', '', '', '', ''),
(9, '产品小类1_2', 'product smallclass 2', 5, 1, '产品小类1_2', 'product smallclass 2', 'product-smallclass-2', '产品小类1_2', 'product smallclass 2', '产品小类1_2', 'product smallclass 2', 2, 1, 'product', '', '', '', ''),
(10, '产品小类2_1', 'product smallclass 2_1', 6, 1, '产品小类2_1', 'product smallclass 2_1', 'product-smallclass2-1', '产品小类2_1', 'product smallclass 2_1', '产品小类2_1', 'product smallclass 2_1', 1, 1, 'product', '', '', '', ''),
(11, '产品小类2_2', 'product smallclass 2_2', 6, 1, '产品小类2_2', 'product smallclass 2_2', 'product-smallclass2-2', '产品小类2_2', 'product smallclass 2_2', '产品小类2_2', 'product smallclass 2_2', 2, 1, 'product', '', '', '', ''),
(12, '公司新闻', 'Company new', 2, 2, '公司新闻', 'Company new', 'Company-new', '公司新闻', 'Company new', '公司新闻公司新闻', 'Company new Company new', 1, 1, 'new', '', '', '', ''),
(13, '行业新闻', 'Industry new', 2, 2, '行业新闻', 'Industry new Industry new', 'Industry-news', '行业新闻', 'Industry new', '行业新闻行业新闻', 'Industry new Industry new Industry new', 2, 1, 'new', '', '', '', ''),
(14, '产品小类1_3', 'product smallclass 3', 5, 1, '产品小类1_3', 'product smallclass 3', 'product-smallclass-3', '产品小类1_3', 'product smallclass 3', '产品小类1_3', 'product smallclass 3', 3, 1, 'product', '', '', '', ''),
(15, '公司相册', 'Photo', 0, 15, '公司相册', 'photo title', 'photo', '公司相册', 'photo keyword', '公司相册 公司相册', 'photo photo photo', 5, 1, 'photo', '', '', '', ''),
(25, '公司简介', 'About us', 0, 25, '邦纳企业网站系统BunnerCMS', 'seo-About us', 'About-us', '邦纳,BunnerCMS', 'About us', '邦纳企业网站系统BunnerCMS是采用PHP+MYSQL技术和MVC模式进行开发的，架构清晰，代码易于维护。支持伪静态功能，可生成google和百度地图，支持自定义url、关键字和描述，符合SEO标准。', 'About us About us', 1, 1, 'page', '', '', '<p>\r\n 邦纳企业网站系统BunnerCMS是采用PHP+MYSQL技术和MVC模式进行开发的，架构清晰，代码易于维护。支持伪静态功能，可生成google和百度地图，支持自定义url、关键字和描述，符合SEO标准。拥有企业网站常用的模块功能(企业简介模块、新闻模块、产品模块、下载模块、图片模块、在线留言、在线订单、友情链接、网站地图等)，强大灵活的后台管理功能，可为企业打造出专业且具有营销力的标准网站。\r\n</p>\r\n网站系统功能介绍：<br />\r\n1. 单页模块：可发布企业的各类信息，如企业简介、组织机构、企业荣誉、联系方式等，并可随意增删。 <br />\r\n2. 新闻模块：可发布企业新闻和行业新闻等，支持二级栏目，栏目个数无限制。<br />\r\n3. 产品模块：产品支持二级分类，并可对产品直接下订单询价，且支持邮件通知，更符合企业营销。 <br />\r\n4. 图片模块：以图片相册的方式，可发布成功案例或公司相册等栏目，更直观的展示企业的优越性。<br />\r\n5. 下载模块：用户可在后台上传文档资料，方便网站客户下载使用。<br />\r\n6. 在线留言：让客户的建议留言能及时反馈给企业，且支持邮件通知，让沟通变得更加方便。<br />\r\n7. 产品搜索：可对客户输入的关键字进行产品搜索，增加了网站的灵活性。<br />\r\n8. 产品复制：可对已添加的产品进行复制，从而提高了添加产品的效率。<br />\r\n9. 图片水印：可在后台设置公司的水印图片，以防止企业产品图片被盗用。<br />\r\n10. 邮件通知：在客户下订单或留言的同时，会发邮件到您指定的邮箱，让工作更有效率的。<br />\r\n11.搜索优化：全站支持伪静态，可自定义keywords、description、url，生成sitemap功能，添加内链和标签等功能。<br />\r\n<div>\r\n  <br />\r\n</div>', 'LankeCMS website system is using PHP + MYSQL technology and MVC pattern, structure clear, the code easier to maintain. Support the pseudo static function, can generate Google and baidu map, support custom url, keywords and description, accord with standard of SEO. With corporate websites commonly used modules (description module, news module, product module, download module, image module, online messages, online orders, links, site map, etc.), strong background management functions, flexible marketing for enterprises to create professional and has force standard web site.\r\nThe website system function is introduced:\r\nModules: 1. The single page can release enterprises of all kinds of information, such as the description, organization, enterprise honor, contact information, etc., and can freely add or delete.\r\n2. News: modules can be issued corporate news and industry news, etc., to support the secondary column, column number is unlimited.\r\n3. The product module: product support secondary classification, and can place orders directly to the product inquiry, and support email notification, conforms to the enterprise marketing.\r\n4. Image module: in the form of picture album, photo albums and other columns can be successful or company, more intuitive to show the superiority of the enterprise.\r\n5. Download module: users can upload document in the background information, convenient website customers to download to use.\r\n6. Online message: let the customer advice message timely feedback to the enterprise, and support email notification, make communication more convenient.\r\n7. Product search: input a keyword search, the products to the customer to increase the flexibility of the site.\r\nCopy: 8. Product can add the products to replicate, so as to improve the efficiency of the added products.\r\n9. Image watermark: can set up the company in the background of the watermark image, in order to prevent the enterprise product pictures stolen.\r\n10. Email notification: under customer orders or leave a message at the same time, will send email to the email address you specify, make work more efficiently.\r\n11. Search optimization: total support pseudo static, customizable keywords, description, url, generates a sitemap function, add in chain and tags, and other functions.'),
(26, '员工相册', 'Staff photo', 15, 15, '员工相册-SEO标题', 'Staff photo Staff photo', 'Staff-photo-album', '员工相册', 'Staff photo', '员工相册员工相册员工相册', 'Staff photo Staff photo Staff photo', 1, 1, 'photo', '', '', '', ''),
(27, '客户案例', 'Customer Case', 15, 15, '客户案例-SEO标题', 'Customer Case', 'Customer-Case', '客户案例', 'Customer Case', '客户案例', 'Customer Case Customer Case', 2, 1, 'photo', '', '', '', ''),
(28, '帮助文档', 'Help document', 3, 3, '帮助文档帮助文档帮助文档', 'Help document', 'download28', 'SEO关键字SEO关键字', 'Help document', 'SEO描述SEO描述SEO描述', 'Help document Help document', 1, 1, 'download', '', '', '', ''),
(29, '档案下载', 'File download', 3, 3, '档案下载档案下载档案下载档案下载', 'File download', 'download29', 'SEO关键字SEO关键字', 'File download', 'SEO描述SEO描述SEO描述', 'File download File download ', 2, 1, 'download', '', '', '', ''),
(30, '在线留言', 'Feedback', 0, 30, '', '', 'Feedback', '', '', '', '', 6, 1, 'link', '/Feedback/', '/Feedback/', '', ''),
(31, '在线订购', 'Inquiry', 0, 31, '', '', 'Inquiry', '', '', '', '', 7, 0, 'link', '/Inquiry/', '/Inquiry/', '', ''),
(39, '科技创新', 'Science and technology', 2, 2, '科技创新', 'Science and technology', 'technology', '科技创新', 'Science and technology', '科技创新', 'Science and technology', 3, 1, 'new', '', '', '', ''),
(40, '部门新闻', 'Department new', 12, 2, '部门新闻', 'Department new', 'Department-of-journalism', '部门新闻部门新闻', 'Department new', '部门新闻部门新闻部门新闻', 'Department new', 1, 1, 'new', '', '', '', ''),
(44, '产品大类4', 'product bigclass 4', 1, 1, '产品大类4-标题', 'product bigclass4 title', 'product-bigclass', '产品大类4-关键字', 'product bigclass4 keyword', '产品大类4-描述', 'product bigclass4 description description', 4, 1, 'product', '', '', '', ''),
(45, '产品小类4_1', 'product small4_1', 44, 1, '产品小类4_1-标题', 'product small4_1 title', 'list-4-75', '产品小类4_1-关键字', 'product small4_1 keyword', '产品小类4_1-描述', 'product small4_1 description', 1, 1, 'product', '', '', '', '');";

//插入产品信息
$intosqls[]="INSERT INTO `lanke_product` (`id`, `name`, `title`, `url`, `keywords`, `description`, `contents`, `ename`, `etitle`, `ekeywords`, `edescription`, `econtents`, `pid`, `bid`, `photo`, `thumb`, `property1`, `property2`, `property3`, `property4`, `eproperty1`, `eproperty2`, `eproperty3`, `eproperty4`, `sort`, `featured`) VALUES
(1, '行车记录仪 白色真爱版WDR宽动态', '行车记录仪白色真爱版WDR宽动态1080P高清夜视广角', 'driving-record', '行车记录仪', 'PAPAGO P1pro 行车记录仪 白色真爱版 WDR宽动态 1080P高清夜视广角GoSafe600白色真爱版,WDR宽动态,夜视最清晰,拍摄角度最广', '产品介绍', 'Vehicle traveling data recorder', 'Vehicle traveling data recorder White love version of WDR wide dynamic', 'Vehicle traveling data', 'Vehicle traveling data recorder White love version of WDR wide dynamic', 'product product', 8, 1, '530860294daf2.jpg,530860295a23a.jpg,530860295aac2.jpg,530860295b15f.jpg,530860295b7ac.jpg,530860295beb7.jpg,530860295c676.jpg,530860295cd67.jpg', '5300c196f0537.png', '商品编号：1060991967', '拍摄角度：130度', '视频像素：1920*1080', '上架时间：2013-12-20 13:09:30', 'Product ID：1060991967', 'Shooting Angle: 130 degrees', 'Video pixel：1920*1080', 'Shelf time：2013-12-20 13:09:30', 0, 1)";		

//插入新闻信息
$intosqls[]="INSERT INTO `lanke_new` (`id`, `title`, `url`, `etitle`, `ekeywords`, `edescription`, `econtents`, `keywords`, `description`, `contents`, `pid`, `bid`, `sort`, `time`) VALUES
(1, '油价上涨激发勘探业石油钻探设备出', 'the-oil-price', 'The rise in oil prices stimulate exploration, oil drilling equipment', 'The rise', 'The rise in oil prices stimulate exploration, oil drilling equipment', 'China series of industrial policies implemented, receive the positive response of waterproofing enterprises, waterproofing industry adjust the industrial structure in China, the implementation of macroeconomic regulation and control, promotion of new waterproof materials, the fight against fake and inferior products, standardize the market for waterproof and push forward technical progress in the sector, guide the healthy development of industry has played a powerful role in promoting. (1) industry technology equipment level is generally improved. Annual output of 5 million square meters ability of modified asphalt waterproof coiled material production line, better performance of epdm waterproofing extended vulcanizing pot has been put into operation. (2) application products increases obviously, obviously improve the production technology, product structure is obviously improved. SBS/APP modified asphalt waterproofing materials, polymer waterproofing materials, high-grade waterproof coating are sustained growth, substantial increase in high-grade building sealing materials. (3) to carry out the restrictions on the use of products and technology policy has a breakthrough. Standard polyethylene polypropylene fiber waterproof coiled material production and application, the timely development and promotion of environmental protection waterproof materials and other obvious effect. (4) to ban the use of products and technology policy implemented in different range and extent. Out annual output of 1 million fetal asphalt paper linoleum volume capacity production line, coal tar oil waterproof coating and sealing materials have been well implemented, secondary molding polyethylene polypropylene fiber coil has been largely withdraw from the market. (5) the research and development of new products, new technologies and the introduction of a variety of results. Polymer waterproofing materials for the development of adhesives, adhesive tape, glass fiber asphalt shingle, adhesive waterproof coiled material production and application technology development, the development of the metal bond metal coil, coil, provides more choices for waterproof project', '油价上涨', '油价上涨激发勘探业石油钻探设备出', '家具一系列产业政策的贯彻实施，得到广大防水企业的积极响应，对我国防水行业调整产业结构、实施宏观调控、推广新型防水材料、打击假冒伪劣产品、规范防水市场和推动行业技术进步，引导行业健康发展起到了有力的促进作用。（1）行业的工艺装备水平普遍提高。年产500万平方米能力改性沥青防水卷材生产线不断增多，性能更好的三元乙丙防水卷材加长硫化罐已投入运行。（2）推广应用产品明显增长，生产技术明显提高，产品结构明显改善。SBS/APP改性沥青防水卷材、高分子防水卷材、中高档防水涂料均持续增长，中高档建筑密封材料大幅度增长。（3）落实限制使用产品和技术政策有突破性进展。规范聚乙烯丙纶防水卷材生产和应用，适时开发和推广环保型防水材料等显见成效。（4）禁止使用产品和技术的政策在不同范围和程度上得到落实。淘汰年产100万卷能力石油沥青纸胎油毡生产线、煤焦油基防水涂料和密封材料等的规定都得到较好的贯彻，二次成型聚乙烯丙纶卷材已基本退出市场。（5）新产品、新技术的研究开发和引进取得多方面的成果。高分子防水卷材胶粘剂、胶粘带的开发，玻纤沥青瓦、自粘防水卷材的生产和应用技术的开发，金属卷材、金属胎卷材的研发成果，为防水工程提供了更多的选择', 12, 2, 1, 1380356905)";

//插入相册信息
$intosqls[]="INSERT INTO `lanke_photo` (`id`, `name`, `title`, `ename`, `etitle`, `url`, `keywords`, `description`, `contents`, `ekeywords`, `edescription`, `econtents`, `thumb`, `photo`, `pid`, `bid`, `sort`) VALUES
(1, '员工员工01', '员工员工01员工员工01', 'Photos of employees', 'seo title - Photos of employees', 'photo-1-90', '员工员工01', '员工员工01员工员工01', '员工员工01员工员工01员工员工01员工员工01员工员工01员工员工01', 'Photos-of-employees', 'Photos-of-employees', 'Photos of employees&nbsp;Photos of employees&nbsp;Photos of employees&nbsp;Photos of employees&nbsp;Photos of employees&nbsp;Photos of employees&nbsp;Photos of employees&nbsp;Photos of employees&nbsp;', '53086b2ce02c5.jpg', '530869feb247b.jpg,530869feb30f3.jpg,530869feb4c45.jpg,530869feb5357.jpg,530869feb5a6d.jpg,530869feb6146.jpg,530869feb6920.jpg,53086a8ade88c.jpg', 26, 15, 1)";

//插入广告信息
$intosqls[]="INSERT INTO `lanke_flash` (`id`, `title`, `link`, `photo`, `sort`) VALUES
(1, '广告一', 'http://www.dede168.com/', '53007d7931975.jpg', 1),
(2, '广告二', 'http://www.dede168.com/', '5300811240d99.jpg', 2);";
?>