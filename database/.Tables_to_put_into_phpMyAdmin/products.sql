-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2022 at 03:23 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snkys`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(18) NOT NULL AUTO_INCREMENT,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productDesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productQty` int(255) NOT NULL,
  `productPrice` double(255,2) NOT NULL,
  `productImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productDesc`, `productQty`, `productPrice`, `productImage`) VALUES
(1, 'FORUM MID SHOES', 'Let\'s take a moment to honour an icon. Is it the gravity-defying B-ball legend from the \'80s?', 100, 429.00, 'https://assets.adidas.com/images/w_600,f_auto,q_auto/1c0a267a632e45e3abe1acb600270983_9366/Forum_Mid_Shoes_White_FY7939.jpg'),
(2, 'STAN SMITH SHOES', 'Timeless appeal. Effortless style. Everyday versatility. For over 50 years and counting, adidas Stan Smith Shoes have continued to hold their place as an icon.', 100, 429.00, 'https://assets.adidas.com/images/w_600,f_auto,q_auto/f86168171d2a4644a8eeac1e00f52f85_9366/Stan_Smith_Shoes_White_FX5502.jpg'),
(3, 'ULTRABOOST 22 SHOES', 'A little extra push. The Ultraboost running shoes serve up comfort and responsiveness at every pace and distance.', 100, 799.00, 'https://assets.adidas.com/images/w_600,f_auto,q_auto/2cf5e0fd2e184d26b746ad7800abed79_9366/Ultraboost_22_Shoes_Black_GZ0127.jpg'),
(4, 'FORUM LOW SHOES', 'More than just a shoe, it\'s a statement. The adidas Forum hit the scene in \'84 and gained major love on both the hardwood and in the music biz.', 100, 399.00, 'https://assets.adidas.com/images/w_600,f_auto,q_auto/ab5e228c8b4749288d3eacb6001dec33_9366/Forum_Low_Shoes_White_FY7757.jpg'),
(5, '4DFWD SHOES', 'Feel progress every time you lace up with adidas 4DFWD, 3D printed midsole technology, designed to move you forward.', 100, 894.00, 'https://assets.adidas.com/images/w_600,f_auto,q_auto/11a726b52bc74999b58ead4400dd51b8_9366/4DFWD_Shoes_Black_Q46447.jpg'),
(6, 'Airfast Shoes', 'The shoes allows you to run much more secure to your feet', 100, 1200.00, 'https://rukminim1.flixcart.com/image/850/850/l0sgyvk0/shoe/r/3/j/10-b-102-brucharm-white-original-imagcg6yxdaryn5y.jpeg?q=90'),
(7, 'Boost Fire', 'Extra protection for those hiking lover', 100, 750.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrulvEy0OZDesXnAGIc_ubDfcyi26Ey_41lNeIKP3v2BbCrB8YCGgF1d0q6URVZYA_05U&usqp=CAU'),
(8, 'Space walk', 'Feels the float, flies on the land, experience the limits', 100, 899.00, 'https://www.sneakers-actus.fr/wp-content/uploads/2020/06/Nike-Space-Hippie-03-gris-et-orange-1.jpg'),
(9, 'Nike America', 'Nike America provides the loves for the USA increase the resident to buy made in USA', 100, 450.00, 'https://i.pinimg.com/originals/6f/70/59/6f705906ff2d77f9317f63d929c218ff.jpg'),
(10, 'Nike Texas Speed', 'This shoes not only did it felt comfortable when wearing it, but it gives mobility', 100, 699.00, 'https://5.imimg.com/data5/AB/UL/XN/ANDROID-19051907/product-jpeg-500x500.jpg'),
(11, 'Nike Silver', 'The sick silver give a whole new view and vision for the love of the sneakers', 100, 299.00, 'https://media.karousell.com/media/photos/products/2020/7/31/nike_tevas_air_max_1596177293_a730e02d.jpg'),
(12, 'Nike Force', 'Combine the military boot and the casual wearing for better appearance and sensation of foot', 100, 700.00, 'https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2022%2F04%2Foff-white-nike-air-force-1-mid-release-date-info-do6290-001-do6290-100-001.jpg?q=75&w=800&cbr=1&fit=max'),
(13, 'AMACD Speed', 'Go red for the track field dominances', 100, 1000.00, 'https://ae01.alicdn.com/kf/S409d06fcbeb44dbd9725da9a5fa1a7e29/Fashion-Women-Sneakers-Running-Shoes-Outdoor-Sports-Shoes-Breathable-Mesh-Comfort-Jogging-Shoes-Air-Cushion-Lace.jpg_Q90.jpg_.webp'),
(14, 'AMACD black', 'The stylish black keeps the foot to be warm even if against temperature', 100, 499.00, 'https://i1.wp.com/ae01.alicdn.com/kf/H94b414802d3f49129102e140cbcf2b5ab/Big-Size-Summer-Hard-wearing-Women-Sneackers-Women-s-Sneakers-Ladies-Sport-Shoes-Womens-Running-Shoes.jpg'),
(15, 'Monolgue BD White', 'Out of vision, out of box, out of roads, lawless to conquer your life', 100, 789.00, 'https://ae01.alicdn.com/kf/H8b8a3741ac22417c94d2937855c21c0fY/Thick-Sole-Running-Shoes-for-Women-Purple-White-Sport-Shoes-Jogging-Walking-Sneakers-7-CM-Height.jpg_Q90.jpg_.webp'),
(16, 'Monolgue BD Run', 'Not only does this shoes give a fresh feeling, rather makes your more comfortable and confident than ever when stepping out', 100, 1400.00, 'https://www.cssonlineshop.com/images/original/2617-1.jpg'),
(17, 'Monolgue BD Purple', 'Purple for the joyful and luck girls to explore', 100, 1200.00, 'https://ae01.alicdn.com/kf/H8b8a3741ac22417c94d2937855c21c0fY/Thick-Sole-Running-Shoes-for-Women-Purple-White-Sport-Shoes-Jogging-Walking-Sneakers-7-CM-Height.jpg_Q90.jpg_.webp'),
(18, 'Monolgue BD Rose', 'Mixture of white and rose to attract the sight of the eyes ', 100, 1099.00, 'https://ae01.alicdn.com/kf/Hec579166b4a24a57b56c7471e7bf053bx/New-Ins-Hotsale-High-Heel-Sneakers-Women-Chunky-Sneakers-Wedge-Shoes-Girls-Pink-White-Platform-Sneakers.jpg_Q90.jpg_.webp'),
(19, 'Monolgue BD fire', 'Shine Shine Shine Silver has arrive!!! This pair will catch the eyes of everyone, and make your feet like experiencing paradise', 100, 1300.00, 'https://i.pinimg.com/originals/3e/cd/8c/3ecd8cd012b16141c856220b88721ff8.jpg'),
(20, 'Little feet', 'The little feet used latex and plastic to cover all side of your child feets', 100, 250.00, 'https://i.pinimg.com/originals/6e/95/08/6e950877d64bb09b8e6b77d3667a3a1d.jpg'),
(21, 'Little Feet cover', 'This variations is build different with a whole new concept of materials that provides more comfortabilities to your precious child', 100, 1300.00, 'https://ae01.alicdn.com/kf/H61ae1d11cfff4030bdbdac6731b2f769k.jpg'),
(22, 'Little Cement', 'Looks like cement? Well it does , but don\'t get scam by it outside! The feeling when kids wear feels like protected ', 100, 99.00, 'https://cdn.shopify.com/s/files/1/1821/4215/files/kids-category_1024x1024.jpg?v=1631723011'),
(23, 'Fast micro', 'The classic design to bring child\'s feet development to its finest. Protect their feet from being hurt of long walk', 100, 299.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWyy8I7iLsz5G3tQLU2g6y9FR58IFlF8fzbY7d5KwGyWdtcnrlCw7c4acrHqasuYcrC0U&usqp=CAU'),
(24, 'Musek Bumbelle', 'The yellow from bumbleble suggests the shoes is able to cover the childs like the unbeatable transformer.', 100, 38.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT21FTGp9umcxhZxdpnQpZcnHE0fY5q-kHTkD7i-cf_mgcCmIkT2wq9Wf-FK99YbXQeXQE&usqp=CAU');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
