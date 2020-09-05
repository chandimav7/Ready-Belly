-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 01:24 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `readybelly`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'chandima', 'chandima1');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `tableNo` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `conf` int(11) NOT NULL,
  `adminConf` int(11) NOT NULL,
  `resName` varchar(20) NOT NULL,
  `resAddress` varchar(255) NOT NULL,
  `rest` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user`, `tableNo`, `item`, `qty`, `time`, `conf`, `adminConf`, `resName`, `resAddress`, `rest`) VALUES
(9, 7, 0, 33, 2, '2019-07-10 08:36:09', 0, 0, '', '', 'RajaBojun'),
(12, 1, 0, 3, 2, '2019-07-11 07:43:31', 0, 0, '', '', 'GrandBeijing'),
(15, 1, 0, 50, 3, '2019-07-11 21:09:09', 0, 0, '', '', 'ThaiCorner'),
(17, 1, 0, 33, 5, '2019-07-12 00:10:13', 0, 0, '', '', 'RajaBojun');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `info` text NOT NULL,
  `rest` varchar(30) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `price`, `info`, `rest`, `img`) VALUES
(1, 'Beef chow fun', 200, '', 'GrandBeijing', 'http://recipe1.ezmember.co.kr/cache/recipe/2015/11/10/fb0c88cfa1c654ac703d15a6f57e81531.jpg'),
(2, 'Braised pork', 300, '', 'GrandBeijing', 'https://astorgasmexicanrestaurant.com/wp-content/uploads/2013/04/tacoplate32.jpg'),
(3, 'Char siu', 250, '', 'GrandBeijing', 'https://thewoksoflife.com/wp-content/uploads/2019/04/char-siu-recipe-11.jpg'),
(4, 'Chinese noodles', 120, '', 'GrandBeijing', 'https://www.recipetineats.com/wp-content/uploads/2014/06/Stir-Fried-Noodles-Build-Your-Own-1-500x375.jpg'),
(5, 'Chow mein', 180, '', 'GrandBeijing', 'https://bhetincha.com/files/large/28538.jpg'),
(6, 'Dried Pot Tofu', 250, '', 'GrandBeijing', 'https://savorjapan.com/gg/content_image/t0187_018_20181218114130.jpg'),
(7, 'Jiaozi', 250, '', 'GrandBeijing', 'https://www.goodindonesianfood.com/story/wp-content/uploads/2016/05/yogyakarta-heritage-angkringan-Lik-Man1--740x550.jpg'),
(8, 'Kung Pao chicken', 456, '', 'GrandBeijing', 'https://i.pinimg.com/originals/c2/9e/7c/c29e7ce01e4003fd64e543134e984cbb.jpg'),
(9, 'Mantou', 569, '', 'GrandBeijing', 'https://i1.go2yd.com/image.php?url=0JM2FomKp6'),
(10, 'Mapo tofu', 125, '', 'GrandBeijing', 'https://uds.gnst.jp/rest/img/7shsxet30000/s_0ncm.jpg?t=1559315218'),
(11, 'Mooncake', 140, '', 'GrandBeijing', 'https://i.pinimg.com/originals/d7/ad/98/d7ad98fb0182b2abe33c61f931b21b08.jpg'),
(12, 'Noodle soup', 300, '', 'GrandBeijing', 'https://www.fbs.hk/images/Box-Red-And-Black-Soup-Rice-Bowl-Disposable-Thick-Plastic-Takeaway-Packaging-Bowl-Of-Noodle-Soup-Rice-Porridge-Fast-Food-Bowl-With-Lid-Door-Delivery-Included-7622.jpg'),
(13, 'Peking Duck', 350, '', 'GrandBeijing', 'http://3.bp.blogspot.com/-K7NcVz2elwo/TafJ81y53dI/AAAAAAAAAjM/6Z3NRucdUZ8/s1600/guilinforrestgumprestaurant.jpg'),
(14, 'Phoenix Tail Shrimp', 100, '', 'GrandBeijing', 'https://www.newsherald.com/storyimage/DA/20140121/LIFESTYLE/301219960/AR/0/AR-301219960.jpg'),
(15, 'Popiah', 300, '', 'GrandBeijing', 'https://www.goodindonesianfood.com/story/wp-content/uploads/2016/06/bandung-classic-batagor-riri-740x550.jpg'),
(16, 'Sea cucumber', 150, '', 'GrandBeijing', 'http://mblogthumb3.phinf.naver.net/20130529_74/choine7_1369836359124SusG7_JPEG/1008_6783.jpg?type=w2'),
(17, 'Aloo Gobi', 250, '', 'BombayFoods', 'https://myheartbeets.com/wp-content/uploads/2018/06/indian-cauliflower-potato-aloo-gobi.jpg'),
(18, 'Aloo Matar Paneer', 320, '', 'BombayFoods', 'https://i2.wp.com/onceuponasupper.com/wp-content/uploads/2016/07/matarpaneer.jpg?fit=750%2C500'),
(19, 'Bardoli Ki Khichdi', 260, '', 'BombayFoods', 'https://www.ndtv.com/cooks/images/aloo.matar.pulao.jpg'),
(20, 'bhel puri', 180, '', 'BombayFoods', 'https://norecipes.com/wp-content/uploads/2009/06/bhel-puri-recipe.1024x1024.jpg'),
(21, 'Butter Chicken', 280, '', 'BombayFoods', 'https://assets.kraftfoods.com/recipe_images/opendeploy/582873_2_1_retail-f6e7dd02581fffa57782d96ef438844b16c7d0a9_642x428.jpg'),
(22, 'Gulab Jamun', 180, '', 'BombayFoods', 'https://domashniy.ru/upload/resize_cache/iblock/b1b/740_550_1dec72f34b7bd62373dec2d9788cbdba1/b1bae6d18771c8dd27b944463318df67.jpg'),
(23, 'Halwa', 180, '', 'BombayFoods', 'http://cdn2.foodviva.com/static-content/food-images/halwa-recipes/soojia-halwa/soojia-halwa.jpg'),
(24, 'Idly ', 190, '', 'BombayFoods', 'https://media-cdn.tripadvisor.com/media/photo-s/11/e9/01/5f/idly-sambar.jpg'),
(25, 'Laddu', 250, '', 'BombayFoods', 'https://5.imimg.com/data5/US/SG/MY-25206030/motichur-laddu-500x500.jpg'),
(26, 'lamb rogan josh', 350, '', 'BombayFoods', 'https://144f2a3a2f948f23fc61-ca525f0a2beaec3e91ca498facd51f15.ssl.cf3.rackcdn.com/uploads/food_portal_data/recipes/recipe/hero_article_image/4135/60857a2824fae13142fd/letterbox_Indian-Lamb-curry.jpg'),
(27, 'Marro Dhokla', 150, '', 'BombayFoods', 'https://steemitimages.com/p/FxX5caie56yqUbvo2DTJv1i6qm8z4ixTabBTrjod5Fewn51kmngoDMS7rvDcyjCQQdg5sQTYnejoJQFouh6oU2eLwy2f5o7TFPE4d1WgwLpN?format=match&mode=fit'),
(28, 'Masala Dosa', 400, '', 'BombayFoods', 'https://cdn.awesomecuisine.com/wp-content/uploads/2014/07/mysore_masala_dosa.jpg'),
(29, 'naan bread', 400, '', 'BombayFoods', 'https://www.mouthsofmums.com.au/wp-content/uploads/2017/08/04/Jalna_Member-Recipe-Main-Images_MoM-Generated-Recipes_750x516-28.jpg'),
(30, 'Nariyal Ki Kheer', 180, '', 'BombayFoods', 'https://www.indianfoodrecipesonline.com/wp-content/uploads/2018/05/Coconut-Kheer-Recipe-in-Hindi.jpg'),
(31, 'poori', 220, '', 'BombayFoods', 'https://www.yummytummyaarthi.com/wp-content/uploads/2017/08/1-19.jpg'),
(32, 'rajma masala', 450, '', 'BombayFoods', 'https://i2.wp.com/theindianclaypot.com/wp-content/uploads/2017/03/RAJMA-MASALA-SMALLER.jpg?w=770'),
(33, 'Achcharu', 230, '', 'RajaBojun', 'https://www.onelankaads.lk/wp-content/uploads/2019/04/56494474_439196470157663_7605153085572251648_n.jpg'),
(34, 'Ambul-thiyal', 170, '', 'RajaBojun', 'http://www.peckishme.com/wp-content/uploads/2016/06/fish-ambul-thiyal-759x500.jpg'),
(35, 'Chicken', 500, '', 'RajaBojun', 'https://assets.marthastewart.com/styles/wmax-1500/d28/perfect-roast-chicken-a97053/perfect-roast-chicken-a97053_horiz.jpg?itok=pLCyfqMG'),
(36, 'Mushroom Curry', 370, '', 'RajaBojun', 'https://1.bp.blogspot.com/-jaOzLpfltgU/WuduV-UGHmI/AAAAAAAARlk/NQh5w1CPbd8fGsX5i9HRRfpSh6TVHBGWwCLcBGAs/s1600/mushrooms_curry_rice1.jpg'),
(37, 'Hurullo', 600, '', 'RajaBojun', 'https://lh3.googleusercontent.com/-2mfWfuBAoNE/TYZoGJNkiTI/AAAAAAAAAP0/iHsAYNHZTxA/s1600/karry_sild_small_01.jpg'),
(38, 'Prawn Curry', 550, '', 'RajaBojun', 'https://i.pinimg.com/originals/c6/fb/d6/c6fbd61e1c58061beca4e932fec6fa5e.jpg'),
(39, 'Kankun Malluma', 800, '', 'RajaBojun', 'https://i.ytimg.com/vi/jpqbGVXldKA/hqdefault.jpg'),
(40, 'Kekulu Rice', 480, '', 'RajaBojun', 'https://d3dz4rogqkqh6r.cloudfront.net/uploads/files/2018/09/yimg_oB1duj-640x480.jpg'),
(41, 'Kiri malu', 160, '', 'RajaBojun', 'https://www.dailyfoodrecipes.com/wp-content/uploads/2012/08/fish-curry-malu-hodhi-daily-food-receipes-com.jpg'),
(42, 'Mango Curry', 780, '', 'RajaBojun', 'https://img.taste.com.au/4SfvR0W6/w720-h480-cfill-q80/taste/2016/11/mango-chicken-curry-102913-1.jpeg'),
(43, 'Dhal Curry', 750, '', 'RajaBojun', 'https://www.rotinrice.com/wp-content/uploads/2010/09/IMG_9260.jpg'),
(44, 'Wambatu moju', 550, '', 'RajaBojun', 'https://serandib.co.nz/wp-content/uploads/2016/01/curry1.jpg'),
(45, 'Wev Malu Curry', 360, '', 'RajaBojun', 'https://www.watscooking.com/images/dish/large/Fish-Curry.jpg'),
(46, 'Yellow Rice', 270, '', 'RajaBojun', 'https://d1alt1wkdk73qo.cloudfront.net/images/guide/47a954e715944df4b875ac4b4535c25e/640x478_ac.jpg'),
(47, 'Bistro Grill De Salita', 556, '', 'ThaiCorner', 'https://tblg.k-img.com/restaurant/images/Rvw/106607/640x640_rect_106607330.jpg'),
(48, 'Creamy Garlic White Bean soup', 485, '', 'ThaiCorner', 'https://www.kitchentreaty.com/wp-content/uploads/2013/02/tuscan-white-bean-soup-6-700x500.jpg'),
(49, 'Crunchy Nut Meatballs', 523, '', 'ThaiCorner', 'https://www.cavegirl.co.nz/wp-content/uploads/2014/12/BrazilNutMeatBallsMed-740x550.jpg'),
(50, 'Deviled eggs', 125, '', 'ThaiCorner', 'https://sugarspunrun.com/wp-content/uploads/2017/07/Best-Deviled-Eggs-1-of-1-3-500x443.jpg'),
(51, 'Epicureanentrees', 653, '', 'ThaiCorner', 'https://i0.wp.com/thefriendlyepicurean.com/wp-content/uploads/2018/01/img_0285.jpg?resize=740%2C492&ssl=1'),
(52, 'Fish soup', 659, '', 'ThaiCorner', 'https://cdn-image.foodandwine.com/sites/default/files/styles/medium_2x/public/201307-r-xl-thai-hot-and-sour-fish-soup.jpg?itok=Wb_3RC4A'),
(53, 'Fooding Madrid', 365, '', 'ThaiCorner', 'https://www.madridcoolblog.com/wp-content/uploads/2018/08/CAMINO-FOOD-DRINKS-pulpo-G-800x533.jpg'),
(54, 'Ivona bigmir', 520, '', 'ThaiCorner', 'http://edimsup.ru/wp-content/uploads/2016/06/italianskiy-sup-e1466506118726.jpg'),
(55, 'Khao-soy', 548, '', 'ThaiCorner', 'https://www.bite.co.nz/images/recipes/11042016BiteKhaoSoiBeef.jpg?width=603&height=339&mode=crop&upscale=false'),
(56, 'Marieclaire', 777, '', 'ThaiCorner', 'https://d1k7ylzxb2nyaj.cloudfront.net/9baabb207f22e1c05cdf0a4b9e64bb16/700/9baabb207f22e1c05cdf0a4b9e64bb16_5c0766fc2e00d.jpeg'),
(57, 'massaman curry', 256, '', 'ThaiCorner', 'https://www.connoisseurusveg.com/wp-content/uploads/2013/10/vegan-massaman-curry-4.jpg'),
(58, 'plats vegetariens', 845, '', 'ThaiCorner', 'https://static.750g.com/images/auto-426/2bf56d18f77eabe14fa0a9b0c7f15ebd/la-palme-d-or-ne-va-pas-qu-aux-carnivores.jpg'),
(59, 'Som Tam', 100, '', 'ThaiCorner', 'https://c.ndtvimg.com/1hkfbvu_som-tam-salad_625x300_04_September_18.jpg'),
(60, 'startseite', 856, '', 'ThaiCorner', 'https://www.guteguete.at/wp-content/uploads/2018/09/Polenta-Tarte-K%C3%BCrbis-Ziegenfrischk%C3%A4se-17-von-18-740x550.jpg'),
(61, 'Thai fried rice', 892, '', 'ThaiCorner', 'https://www.thespruceeats.com/thmb/hNqOOoK76Kt7uhLKqslbAWXUsE8=/450x0/filters:no_upscale():max_bytes(150000):strip_icc()/classic-thai-chicken-fried-rice-3217140-17-5b3f881946e0fb003753c35f.jpg'),
(62, 'Thai green curry', 456, '', 'ThaiCorner', 'https://img.taste.com.au/Bxi3QqN3/w720-h480-cfill-q80/taste/2016/11/thai-green-chicken-curry-106836-1.jpeg'),
(63, 'sdfdsfsd', 25, 'eawreasrosaljdfhaskljdbasl;dksabdsalkjdbsak,md sa bkasjdgsakjgdaskdc askhdfasjkdblkasdbiusad sdsdasd25', 'RB', 'https://editorial.pxcrush.net/carsales/general/editorial/commodore-ss-113.jpg'),
(64, 'xdfdzfsdaf', 255, 'sdfsdkhfgdskf', 'RajaBojun', 'https://editorial.pxcrush.net/carsales/general/editorial/commodore-ss-113.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(75) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `pass`, `active`) VALUES
(1, 'vishwajith.9t@gmail.com', 'chandima', 'a123', 1),
(2, 'harindu75@gmail.com', 'harindu', 'b123', 1),
(3, 'wickramasingheishuwara@gmail.com', 'ishuwara', 'c123', 1),
(9, 'shiromichristy@gmail.com', 'shiromi', 'd123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
