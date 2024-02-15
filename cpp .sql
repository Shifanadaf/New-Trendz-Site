-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 02:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin123@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mrp` decimal(60,0) NOT NULL,
  `dealp` decimal(60,0) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `pid` int(150) NOT NULL,
  `pcat` varchar(150) NOT NULL,
  `date_time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cnt`
--

CREATE TABLE `cnt` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mob` int(60) NOT NULL,
  `city` varchar(100) NOT NULL,
  `feed` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mrp` decimal(60,0) NOT NULL,
  `dealp` decimal(60,0) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `discription` text NOT NULL,
  `color` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `stockqty` int(100) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `name`, `mrp`, `dealp`, `photo`, `discription`, `color`, `material`, `stockqty`, `brand`, `cat`, `about`, `pid`) VALUES
(9, 'Three Seater Sofa', '32999', '19949', 'sofa3.jpg', '<b>Colour: </b>	Green<br>\r\n<b>Material: </b>	Chrome<br>\r\n<b>Size: </b>	Standard<br>\r\n<b>Brand: </b>	Adorn India<br>\r\n<b>Style: </b>	Modern<br>\r\n<b>Frame Material: </b>	Wood<br>\r\n<b>Room Type: </b>	Living Room<br>\r\n<b>Arm Style: </b>	Armless<br>\r\n<b>Assembly Required: </b>	Yes<br>\r\n<b>Type: </b>	Sofa Bed<br>', 'Green', 'Chrome', 10, 'Adorn India', 'sofa', 'PLEASE MEASURE BEFORE PURCHASING: See Measuring Guide in Photos<br>\r\nModern Look and Design with Chrome Metal Legs, Split-back to suit your needs<br>\r\nWarranty : 2 year warranty for frame and foam ( We provide service warranty only for major<br> materials If Wood Gets Broken, Or Foam Gets Sink & never come back till one hour only that <br>two conditions you can claim warranty, And foam gets soft that is in its nature after regular use & There Is No Warranty For Fabric, Stitches, zipper Or Legs Get Bend Or Damage Or foam gets soft.)<br>\r\nRelaxing Sofa in Day and Queen size Bed at night time for comfortable sleep. Easy Care. <br>Converts from chaise to sleeper, wipes clean<br>\r\nMix and match, use anywhere your home or office even at showroom - Shipped to your door! BUY WITH CONFIDENCE.<br>\r\nPlease note that due to shortage of front cross legs , the back round legs may come in front instead of cross legs.<br>', 13),
(10, '5 Seater L Shape Sofa', '29762', '4200000', 'sofa4.jpg', '<b>Colour: </b>	Dark Grey<br>\r\n<b>Material: </b>	Wood<br>\r\n<b>Size: </b>	5S-RHS<br>\r\n<b>Brand: </b>	FURNY<br>\r\n<b>Style: </b>	Modern<br>\r\n<b>Frame Material: </b>	Wood<br>\r\n<b>Room Type: </b>	Living Room<br>\r\n<b>Assembly Required: </b>	Yes<br>\r\n<b>Type: </b>	Sectional<br>\r\n<b>Seating Capacity: </b>	5<br>', 'Dark Grey', 'Wood', 12, 'FURNY', 'sofa', 'Fabric L Shape Sofa Set For Living Room| PRIMARY MATERIAL- Solid Wood & high density <br>Supersoft Air Foam -::- UPHOLSTERY MATERIAL- Premium Fabric -::- SEATING CAPACITY- 5 seater<br>\r\nUpholstery Material : Fabric | Color : Dark Grey<br>\r\nAssembly Instructions: Assembly is Required and Will be Provided By The Seller.<br>\r\nFURNY is a leading provider of sofa sets - wooden sofa sets both in leather and fabric finishes, top quality recliner sofa sets, sofa sets in L shapes, sectional designs and comfortable rocking chairs.', 14),
(11, 'Coffee Table', '10000', '4579', 'table3.jpg', '<b>Item Dimensions LxWxH:</b>	104 x 47 x 47 Centimeters<br>\r\n<b>Shape:</b>	Rectangle<br>\r\n<b>Furniture Finish:</b>	Wenge<br>\r\n<b>Base Type:</b>	Leg<br>\r\n<b>Item Weight:</b>	25000 Grams<br>\r\n<b>Assembly Required:</b>	Yes<br>\r\n<b>Brand:</b>	Amazon Brand - Solimo<br>\r\n<b>Style:</b>	Contemporary<br>\r\n<b>Top Material Type:</b>	Maple Wood, Engineered Wood<br>\r\n<b>Frame Material:</b>	Engineered Wood', 'Dark Brown', 'Maple Wood, Engineered Wood', 15, 'Amazon Brand - Solimo', 'table', 'Premium-quality sturdy and stable engineered wood coffee table for home decor<br>\r\nUsage of European standard E1 board for enhanced strength and rust-resistant hardware ensures longevity<br>\r\nPresence of smooth edges and being free from burrs reduce chances of accidental scrapes and cuts<br>\r\nTested for distributed loading capacity of 91 kg for table top and 28 kg for each shelf<br>\r\nAbsence of toxins and harmful chemicals makes it safe for usage at home or in offices', 19),
(12, 'Multipurpose Laptop Table', '4499', '2499', 'table5.jpg', '<b>Product Dimensions:</b>	60D x 40W x 75H Centimeters<br>\r\n<b>Colour:</b>	Natural<br>\r\n<b>Room Type:</b>	Office<br>\r\n<b>Shape	:</b>Rectangular<br>\r\n<b>Style:</b>	Modern<br>\r\n<b>Brand:</b>	PAZANO\r\n', 'Natural', 'Wood', 5, 'PAZANO', 'table', '【Computer Desk Space 】Computer workstations Panel Dimension: 60x 40cm. Large space for a computer desk, great choice for home office activity including writing work. Desk Height: 75cm. Great for allowing tall people plenty of leg room for rest and relax.<br>\r\n【Modern Design】This sturdy desk designed in elegance. Durable structure with load bearing capacity of 50 kg on table.<br>\r\n【Multifunction Tables 】This desk have reasonable and modern design,it can widely use for computer desk,conference table,dining table,office desk,writing desks,ect.', 21),
(13, 'Walnut Finish Queen Bed', '17999', '11879', 'bed1.jpg', '<b>Size:</b>	Queen<br>\r\n<b>Material:</b>	Engineered Wood<br>\r\n<b>Colour:</b>	Walnut<br>\r\n<b>Furniture Finish:</b>	Walnut<br>\r\n<b>Style:</b>	Contemporary<br>\r\n<b>Brand:</b>	Amazon Brand - Solimo<br>\r\n<b>Weight:</b>	74000 Grams', 'Walnut', 'Engineered Wood', 12, 'Amazon Brand - Solimo', 'table', 'Premium-quality engineered wood bed that has undergone more than 20 safety and quality tests<br>\r\nIdeal Mattress size: 75x60 inches ; Material: European Standard Particle Board<br>\r\nSmooth and curved edges for appealing aesthetics and protection against scrapes and cuts', 23),
(14, 'Engineered Wood Bed', '31999', '13999', 'bed3.jpg', '<b>Size:</b>	Queen<br>\r\n<b>Material:</b>	Engineered Wood<br>\r\n<b>Type of product:</b>	Storage<br>\r\n<b>Colour:</b>	Real Ebony & White<br>\r\n<b>Brand:</b>	Klaxon<br>\r\n<b>Furniture Finish:</b>	White<br>\r\n<b>Style:</b>	Contemporary<br>', 'Real Ebony & White', 'Engineered Wood', 8, 'Klaxon', 'bed', 'Material: Engineered Wood, Colour: Real Ebony & White<br>\r\nThe bed comes with an additional attached box for storage<br>\r\nFeatures a spacious box storage for storing clothes, toys, manchester etc<br>\r\nSurpassed 20+ quality and safety tests; free from burrs and sharp edges for enhanced safety', 25),
(15, 'Bed with 4 Drawers', '39999', '33999', 'bed4.jpg', '<b>Size:</b>	Queen Size<br>\r\n<b>Material:</b>	Sheesham Wood<br>\r\n<b>Colour:</b>	4 Drawer-Honey<br>\r\n<b>Furniture Finish:</b>	Honey Finish<br>\r\n<b>Style:</b>	Modern<br>\r\n<b>Brand:</b>	GANPATI ARTS<br>\r\n<b>Maximum Weight:</b> Recommendation	300 Kilograms<br>\r\n<b>Product Care Instructions:</b> 	Wipe with Dry Cloth<br>\r\n', 'Honey', 'Sheesham Wood', 12, 'GANPATI ARTS', 'bed', 'Product Dimension: Length- 81 Inch, Width- 62 Inch, Height- 39 Inch, Mattress Size: 60 x 78 inches (Mattress not included)<br>\r\nThe Palang Double Bed furniture is made of Solid Wood which ensures durability of the Solid Wood Double Bed.', 26),
(16, 'Single Bed', '13690', '10053', 'bed5.jpg', '<b>Size:</b>	Single<br>\r\n<b>Material:</b>	Engineered Wood<br>\r\n<b>Colour	:</b>Natural Wenge<br>\r\n<b>Furniture Finish:</b>	Wenge<br>\r\n<b>Style	:</b>Modern<br>\r\n<b>Brand:</b>	Spacewood<br>\r\n<b>Weight:</b>	51000 Grams<br>\r\n<b>Product Dimensions:</b>	80.4L x 38W x 31.5H Centimeters\r\n', 'Natural Wenge', 'Engineered Wood', 5, 'Spacewood', 'bed', 'Product Dimensions: Length (204.2 cm) ,Width (96.5 cm) ,Height (80 cm). Bed size: Single<br>\r\nMaterial: Engineered Wood - Particle Board, Finish: Wood pore, Color: Natural Wenge<br>\r\nStorage Availability: No Storage. Mattress Size: Length (78 Inch) ,Width (42 Inch) ,Height (4 Inch & above)', 27),
(17, 'Furniture Plastic Chairs', '4999', '3229', 'chair1.jpg', '<b>Colour:</b>	Grey<br>\r\n<b>Material:</b>	Plastic<br>\r\n<b>Size:</b>	Standard<br>\r\n<b>Brand:</b>	Bhumika Overseas<br>\r\n<b>Style:</b>	Modern<br>\r\n<b>Frame Material:</b>	Engineered Wood<br>\r\n<b>Maximum Weight Recommendation:</b>	100 Kilograms<br>\r\n<b>Recommended Uses For Product:</b>	Office, Dining<br>\r\n<b>Seat Back Interior Height:</b>	18 Inches<br>\r\n<b>Product Dimensions:</b>	50D x 45W x 36H Centimeters\r\n', 'Grey', 'Plastic', 12, 'Bhumika Overseas', 'chair', '\"Product Dimensions\":- Height: (32.0 inches) X Width: (18.0 inches) X Diameter: 19.0 (inches) | Main Material:- Polypropylene, PU-Leather, Wooden Legs | Seating Height: 18 Inches | Casing - ABS Plastic | Pillow - Eco Leather | Legs - Engineered Wood | Stylish chair with universal use | Seat material: PU Leather | The seat is made of the highest quality polypropylene | Finish:- Plastic | Stacking:- No | Weight Capacity:- 100 Kgs | Used for:- Living Room | Style:- Modern |<br>\r\nThe seat & backrest of the chair is made of high quality polypropylene. The stability and durability of the structure is ensured by beech wood legs, which also give it a unique character. An additional advantage is also a seat lined with a soft sponge and covered with artificial leather, providing even greater comfort of its use. The Norden DSW chair will be perfect for a Home dining room, kitchen or living room. They can be used in various kinds of fashionable public spaces, cafes & restaurant', 29),
(18, 'Wooden Arm Sofa Chair', '18200', '8499', 'chair6.jpg', '<b>Colour:</b>	Teak Finish<br>\r\n<b>Material:</b>	Wood<br>\r\n<b>Size:</b>	1 Seater<br>\r\n<b>Brand:</b>	DEMIWALL<br>\r\n<b>Style:</b>	Rustic<br>\r\n<b>Finish Type:</b>	Glossy<br>\r\n<b>Frame Material:</b>	Wood<br>\r\n<b>Furniture Finish:</b>	Teak<br>\r\n<b>Room Type:</b>	Bedroom, Living Room, Study Room, Dining Room', 'Teak Finish', 'Wood', 10, 'DEMIWALL', 'chair', 'Product Dimension(In Inch): Length: 35 X Width: 22 X Height: 24<br>\r\nPrimary Material: Sheesham Wood | Secondary Material: Solid MDF/Plywood Depending On Availability | <br>Product Name: Wooden Armchair For Living Room.<br>\r\nGive Your Home A Luxurious Look With Sheesham Wooden Armchair | Fits In Your Space, Fits On Your Budget.\r\nAssembly Or Installation Is Based On Diy (Do It Yourself) Basis.', 30);

-- --------------------------------------------------------

--
-- Table structure for table `kausar@gmail.com`
--

CREATE TABLE `kausar@gmail.com` (
  `id` int(100) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mrp` int(100) DEFAULT NULL,
  `dealp` int(100) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `qty` int(100) DEFAULT NULL,
  `pid` int(100) DEFAULT NULL,
  `pcat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kausar@gmail.com`
--

INSERT INTO `kausar@gmail.com` (`id`, `name`, `mrp`, `dealp`, `brand`, `photo`, `qty`, `pid`, `pcat`) VALUES
(1, 'Three Seater Sofa', 32999, 19949, 'Adorn India', 'sofa3.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mrp` decimal(60,0) NOT NULL,
  `dealp` decimal(60,0) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `discription` text NOT NULL,
  `color` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `stockqty` int(100) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `mrp`, `dealp`, `photo`, `discription`, `color`, `material`, `stockqty`, `brand`, `cat`, `about`) VALUES
(1, 'Kitchen Dish Rack', '2299', '1149', 'kt1.jpg', '<b>Material:</b> Stainless Steel<br>\r\n<b>Brand:</b> Home Creations\r\n<br><b>Color:</b> Silver \r\n<br><b>Item Weight:</b> 3200 Grams \r\n<br><b>Item Dimensions(LxWxH):</b> 45.7 x 25.4 x 61 Centimeters', 'Silver', 'Stainless Steel', 10, 'Home Creations', 'rack', 'Store recently washed dishes in this 18 x 24 \"inch chrome dish rack that features space for up to 17 plates or bowls and a side-mounted mug stand and cutlery holder to dry several place settings at once.\r\nProduct Features Holds up to 17 plates or bowls To accommodate several place settings\r\nItem Dimensions (L x B x H): 18 inch x 24 inch.\r\nIt comes in compress packaging.'),
(11, 'Solimo Tulip Leatherette', '50000', '19999', 'sofa1.jpg', '<b>Color:</b> Grey <br><b>Material:</b> Leatherette <br><b> Size:</b> Three Seats <br><b>Brand:</b> Solimo Style	<br><b>Material:</b> Engineered Wood <br><b>Room Type:</b> Living Room <br><b>Arm Style:</b> Curved <br><b>Assembly Required:</b> Yes <br><b>Type:</b> Standard<br><b>', 'Grey', 'Leatherette ', 10, 'Amazon Brand - Solimo', 'sofa', 'Relaxing 3 seater sofa made with high quality leatherette fabric<br>\r\nDimensions:- Length: 203 cm (79.92 in);<br> Width: 83 cm (32.68 in); <br>Height: 83 cm (32.68 in)<br>\r\nFabric does not lose colour with rubbing; <br>surpassed 30+ tests to ensure quality<br>\r\nDurability tested with 100 kg on each seat and backrest for 25,000 cycles<br>\r\nMeets Indian Standards IS 12674/ IS 5416 and European Safety Requirement Standard EN 12520 for performance and safety<br>\r\nSafe for family use;<br> free from toxins and harmful chemicals like Azo dye and formaldehyde<br>\r\nLightweight with good ground clearance for easy shifting and tidying up'),
(12, 'Sheesham Wood 3 Seater Sofa', '27999', '16299', 'sofa2_1.jpg', '<b>Colour	</b>Honey Finish<br>\r\n<b>Material	</b>Sheesham Wood<br>\r\n<b>Size</b>	3 Seater Sofa <br>\r\n<b>Brand	</b>Mamta Furniture<br>\r\n<b>Style	</b>Honey Finish<br>\r\n<b>Frame Material</b>	Wood<br>\r\n<b>Room Type</b>	Living Room<br>\r\n<b>Arm Style	</b>Square<br>\r\n<b>Assembly Required</b>	Yes<br>\r\n<b>Seating Capacity</b>	3.00<br>', 'Honey Finish', 'Sheesham Wood', 6, 'Mamta Furniture', 'sofa', 'Product Material: Original solid Sheesham Wood.<br>\r\nProduct Dimension: Length (71 inch), Width (29 inch), Height (32 inch) Meatrial: Sheesham<br> Wood, Seating Capacity: 3 Seat<br>\r\nColor: (Honey Finish)Cushion: Beige color, Style: Contemporary<br>\r\nWarranty: The product comes with a 10 Day warranty against any manufacturing defects<br>\r\nThe product requires basic self-assembly at customers end and comes with self-assembly <br>instructions along with necessary accessories.<br>'),
(13, 'Three Seater Sofa', '32999', '19949', 'sofa3.jpg', '<b>Colour: </b>	Green<br>\r\n<b>Material: </b>	Chrome<br>\r\n<b>Size: </b>	Standard<br>\r\n<b>Brand: </b>	Adorn India<br>\r\n<b>Style: </b>	Modern<br>\r\n<b>Frame Material: </b>	Wood<br>\r\n<b>Room Type: </b>	Living Room<br>\r\n<b>Arm Style: </b>	Armless<br>\r\n<b>Assembly Required: </b>	Yes<br>\r\n<b>Type: </b>	Sofa Bed<br>', 'Green', 'Chrome', 10, 'Adorn India', 'sofa', 'PLEASE MEASURE BEFORE PURCHASING: See Measuring Guide in Photos<br>\r\nModern Look and Design with Chrome Metal Legs, Split-back to suit your needs<br>\r\nWarranty : 2 year warranty for frame and foam ( We provide service warranty only for major<br> materials If Wood Gets Broken, Or Foam Gets Sink & never come back till one hour only that <br>two conditions you can claim warranty, And foam gets soft that is in its nature after regular use & There Is No Warranty For Fabric, Stitches, zipper Or Legs Get Bend Or Damage Or foam gets soft.)<br>\r\nRelaxing Sofa in Day and Queen size Bed at night time for comfortable sleep. Easy Care. <br>Converts from chaise to sleeper, wipes clean<br>\r\nMix and match, use anywhere your home or office even at showroom - Shipped to your door! BUY WITH CONFIDENCE.<br>\r\nPlease note that due to shortage of front cross legs , the back round legs may come in front instead of cross legs.<br>'),
(14, '5 Seater L Shape Sofa', '29762', '4200000', 'sofa4.jpg', '<b>Colour: </b>	Dark Grey<br>\r\n<b>Material: </b>	Wood<br>\r\n<b>Size: </b>	5S-RHS<br>\r\n<b>Brand: </b>	FURNY<br>\r\n<b>Style: </b>	Modern<br>\r\n<b>Frame Material: </b>	Wood<br>\r\n<b>Room Type: </b>	Living Room<br>\r\n<b>Assembly Required: </b>	Yes<br>\r\n<b>Type: </b>	Sectional<br>\r\n<b>Seating Capacity: </b>	5<br>', 'Dark Grey', 'Wood', 12, 'FURNY', 'sofa', 'Fabric L Shape Sofa Set For Living Room| PRIMARY MATERIAL- Solid Wood & high density <br>Supersoft Air Foam -::- UPHOLSTERY MATERIAL- Premium Fabric -::- SEATING CAPACITY- 5 seater<br>\r\nUpholstery Material : Fabric | Color : Dark Grey<br>\r\nAssembly Instructions: Assembly is Required and Will be Provided By The Seller.<br>\r\nFURNY is a leading provider of sofa sets - wooden sofa sets both in leather and fabric finishes, top quality recliner sofa sets, sofa sets in L shapes, sectional designs and comfortable rocking chairs.'),
(15, '3 Seater Sofa', '21116', '3300000', 'sofa5.jpg', '<b>Colour: </b>	Grey-Black<br>\r\n<b>Material:</b>	Wood<br>\r\n<b>Size:</b>	3S<br>\r\n<b>Brand:</b>	FURNY<br>\r\n<b>Style:</b>	Modern<br>\r\n<b>Frame:</b> Material</b>	Wood<br>\r\n<b>Assembly:</b> Required</b>	No<br>\r\n<b>Type:</b>	Sofa Bed<br>\r\n<b>Item Weight:</b>	45 Kilograms<br>\r\n<b>Seating Capacity:</b>	3.00<br>', 'Grey-Black', 'Wood', 5, 'FURNY', 'sofa', 'Primary Material: Timberwood, Upholstery Material: Fabric-Leatherette, Top Material: Wood<br>\r\nColor: Light Grey-Black, Style: Modern<br>\r\nSeating Capacity: Three seat, Clic-clac Mechanism helps sofa to turn to Sofa Cum Bed<br>\r\nAssembly Required: The product requires carpenter assembly and will be provided by the <br>brand/seller\r\nGet the best in class products made of quality materials for long term furniture needs<br>'),
(16, 'Uberlyfe 1 Seater Sofa', '6249', '1000000', 'sofa6.jpg', '<b>Colour: </b>	Dark Grey without Cushion<br>\r\n<b>Material: </b>	EPE Foam, PU Foam & Fabric<br>\r\n<b>Size: </b>	3 X 6<br>\r\n<b>Brand: </b>	Uberlyfe<br>\r\n<b>Style: </b>	Modern<br>\r\n<b>Seat Depth: </b>	55.9 Centimeters<br>\r\n<b>Room Type: </b>	Living Room<br>\r\n<b>Arm Style: </b>	Armless<br>\r\n<b>Assembly Required: </b>	No<br>\r\n<b>Type: </b>	Sofa Bed<br>', 'Dark Grey without Cushion', 'EPE Foam, PU Foam & Fabric', 6, 'Uberlyfe', 'sofa', 'SINGLE SEATER SOFA| SINGLE BED: When used as a bed this measures 35\" x 72\" x 8\", almost the size of a single bed. As sofa this product measures 35\"x30\"x28\". Designed to easily sit and cosily sleep a single adult.<br>\r\n☑ CUSTOMER CENTRIC WARRANTY POLICY: Our customer favouring resolution rate in the rare circumstance of a warranty claim is 98%. All our sofa beds come with a 1-year warranty against manufacturing defects backed by a 1-call resolution<br>\r\n☑ Relocation Friendly: Our DIY furniture requires no assembly. You can use start using it right from the time of delivery. The No-Assembly feature also makes it relocation friendly.<br>\r\n☑ In the Package:1 Uberlyfe Dark Grey Sofa cum Bedb<br>'),
(17, 'Laptop Table', '999', '749', 'table1.jpg', '<b>Brand: </b>	Ardith<br>\r\n<b>Material: </b>	Wood<br>\r\n<b>Colour: </b>	Black<br>\r\n<b>Item Dimensions LxWxH: </b>	59 x 35.1 x 4.5 Centimeters<br>\r\n<b>Style	: </b>Portable,Durable,Foldable<br>', 'Black', 'Wood', 10, 'Ardith', 'table', '【Study and Entertainment】Watching movies, reading, eating-all could be done in bed. The laptop desk is suitable for almost all sizes of laptops, tablets and phones. You can also put the laptop bed table on the sofa or floor, which can be used for reading at breakfast or making some handicrafts, which will be a very pleasant time.<br>\r\n【Unique Design】The middle part of the laptop bed tray has slot design, which can be used to put phones, tablets, books, etc. And the left slot can be used for charging, the right slot is used for putting pens. Additional, there is a cup holder, the depth is 3.5 cm. You can put a drink or cup in it without worrying about spilling.<br>\r\n【High Quality Material】The foldable laptop table is made of medium density fiberboard (MDF) and round aluminum alloy tube frame. It has an ergonomic curved desk design that is sturdy and durable. The laptop bed stand is very light and easy to carry, allowing you to easily complete work on the bed, sofa or floor.'),
(18, 'Office Desk', '6299', '4599', 'table2_3.jpg', '<b>Product Dimensions:</b>	40D x 103W x 72.5H Centimeters<br>\r\n<b>Colour:</b>	Blue<br>\r\n<b>Room Type:</b>	Office<br>\r\n<b>Shape:</b>	Rectangular<br>\r\n<b>Brand:</b>	BLUEWUD<br>\r\n<b>Top Material Type:</b>	Engineered Wood<br>\r\n<b>Included Components:</b>	Study Table<br>\r\n<b>Mounting Type:</b>	Tabletop<br>\r\n<b>Item Weight:</b>	18.2 Kilograms<br>\r\n<b>Furniture Finish:</b>	Wenge<br>', 'Blue', 'Engineered Wood', 10, 'BLUEWUD', 'table', 'Study Table Desk<br>\r\nFor Home and Office<br>\r\nIncludes Keyboard Shelf'),
(19, 'Coffee Table', '10000', '4579', 'table3.jpg', '<b>Item Dimensions LxWxH:</b>	104 x 47 x 47 Centimeters<br>\r\n<b>Shape:</b>	Rectangle<br>\r\n<b>Furniture Finish:</b>	Wenge<br>\r\n<b>Base Type:</b>	Leg<br>\r\n<b>Item Weight:</b>	25000 Grams<br>\r\n<b>Assembly Required:</b>	Yes<br>\r\n<b>Brand:</b>	Amazon Brand - Solimo<br>\r\n<b>Style:</b>	Contemporary<br>\r\n<b>Top Material Type:</b>	Maple Wood, Engineered Wood<br>\r\n<b>Frame Material:</b>	Engineered Wood', 'Dark Brown', 'Maple Wood, Engineered Wood', 15, 'Amazon Brand - Solimo', 'table', 'Premium-quality sturdy and stable engineered wood coffee table for home decor<br>\r\nUsage of European standard E1 board for enhanced strength and rust-resistant hardware ensures longevity<br>\r\nPresence of smooth edges and being free from burrs reduce chances of accidental scrapes and cuts<br>\r\nTested for distributed loading capacity of 91 kg for table top and 28 kg for each shelf<br>\r\nAbsence of toxins and harmful chemicals makes it safe for usage at home or in offices'),
(20, ' Multi-Purpose Laptop Table', '2599', '1699', 'table4.jpg', '<b>Brand:</b>	JOISCOPE<br>\r\n<b>Material:</b>	Wood<br>\r\n<b>Colour:</b>	Black<br>\r\n<b>Item Dimensions LxWxH:</b>	20 x 15 x 5 Centimeters<br>\r\n<b>Style	:</b>Industrial', 'Black', 'Wood', 14, 'JOISCOPE', 'table', 'Adjustable & Movable : Freely adjustable height from 26-36 inch. Mobile desk with 4 smooth wheels to move around your home. Steady design<Br>\r\nDimensions: 23.6L* 15.8W* 26-36H inch; Weighing about 4kg. Save Space and Easy Assembly.'),
(21, 'Multipurpose Laptop Table', '4499', '2499', 'table5.jpg', '<b>Product Dimensions:</b>	60D x 40W x 75H Centimeters<br>\r\n<b>Colour:</b>	Natural<br>\r\n<b>Room Type:</b>	Office<br>\r\n<b>Shape	:</b>Rectangular<br>\r\n<b>Style:</b>	Modern<br>\r\n<b>Brand:</b>	PAZANO\r\n', 'Natural', 'Wood', 5, 'PAZANO', 'table', '【Computer Desk Space 】Computer workstations Panel Dimension: 60x 40cm. Large space for a computer desk, great choice for home office activity including writing work. Desk Height: 75cm. Great for allowing tall people plenty of leg room for rest and relax.<br>\r\n【Modern Design】This sturdy desk designed in elegance. Durable structure with load bearing capacity of 50 kg on table.<br>\r\n【Multifunction Tables 】This desk have reasonable and modern design,it can widely use for computer desk,conference table,dining table,office desk,writing desks,ect.'),
(22, 'Bedside Table', '2599', '1598', 'table6_1.jpg', '<b>Item Dimensions LxWxH:</b>	25.5 x 38 x 50.8 Centimeters<br>\r\n<b>Shape:</b>	Rectangle<br>\r\n<b>Furniture Finish:</b>	Wenge<br>\r\n<b>Base Type:</b>	Legs<br>\r\n<b>Item Weight:</b>	5 Kilograms<br>\r\n<b>Assembly Required:</b>	Yes<br>\r\n<b>Brand:</b>	Search4Merch<br>\r\n<b>Style:</b>	European, Contemporary<br>\r\n<b>Top Material Type	:</b>Engineered Wood<br>\r\n<b>Frame Material:</b>	Engineered Wood', 'Black', 'Engineered Wood', 4, 'Search4Merch', 'table', 'Item Size :- (L X B X H): 40.65 x 25.4 x 50.8 CM (1 Ft 3 in x 0.84 Ft ) with rectangle shape<br>\r\n100% Made in India Product<br>\r\nMade With High Quality Durable MDF That Gives You Assurance Of Stability Of Item'),
(23, 'Walnut Finish Queen Bed', '17999', '11879', 'bed1.jpg', '<b>Size:</b>	Queen<br>\r\n<b>Material:</b>	Engineered Wood<br>\r\n<b>Colour:</b>	Walnut<br>\r\n<b>Furniture Finish:</b>	Walnut<br>\r\n<b>Style:</b>	Contemporary<br>\r\n<b>Brand:</b>	Amazon Brand - Solimo<br>\r\n<b>Weight:</b>	74000 Grams', 'Walnut', 'Engineered Wood', 12, 'Amazon Brand - Solimo', 'bed', 'Premium-quality engineered wood bed that has undergone more than 20 safety and quality tests<br>\r\nIdeal Mattress size: 75x60 inches ; Material: European Standard Particle Board<br>\r\nSmooth and curved edges for appealing aesthetics and protection against scrapes and cuts'),
(24, 'Regular King Bed', '13000', '7179', 'bed2.jpg', '<b>Size:</b>	King<br>\r\n<b>Material:</b>	Metal<br>\r\n<b>Colour:</b>	Black<br>\r\n<b>Furniture Finish:</b>	Black<br>\r\n<b>Style:</b>	Contemporary<br>\r\n<b>Brand:</b>	Amazon Brand - Solimo<br>\r\n<b>Item Weight:</b>	28000 Grams<br>', 'Black', 'Metal', 6, 'Amazon Brand - Solimo', 'bed', 'Solimo metal king-sized bed with a contemporary design in elegant black colour<br>\r\nPassed more than 20 tests to ensure quality and safety; Undergone durability test of bed for 30,000 cycles; Subjected to rigorous bed-edge testing for 100kgs and 1,000 cycles<br>\r\nSafe to use; does not contain toxins and harmful chemicals like formaldehyde and AZO Dye; Free from burrs and sharp edges for enhanced safety'),
(25, 'Engineered Wood Bed', '31999', '13999', 'bed3.jpg', '<b>Size:</b>	Queen<br>\r\n<b>Material:</b>	Engineered Wood<br>\r\n<b>Type of product:</b>	Storage<br>\r\n<b>Colour:</b>	Real Ebony & White<br>\r\n<b>Brand:</b>	Klaxon<br>\r\n<b>Furniture Finish:</b>	White<br>\r\n<b>Style:</b>	Contemporary<br>', 'Real Ebony & White', 'Engineered Wood', 8, 'Klaxon', 'bed', 'Material: Engineered Wood, Colour: Real Ebony & White<br>\r\nThe bed comes with an additional attached box for storage<br>\r\nFeatures a spacious box storage for storing clothes, toys, manchester etc<br>\r\nSurpassed 20+ quality and safety tests; free from burrs and sharp edges for enhanced safety'),
(26, 'Bed with 4 Drawers', '39999', '33999', 'bed4.jpg', '<b>Size:</b>	Queen Size<br>\r\n<b>Material:</b>	Sheesham Wood<br>\r\n<b>Colour:</b>	4 Drawer-Honey<br>\r\n<b>Furniture Finish:</b>	Honey Finish<br>\r\n<b>Style:</b>	Modern<br>\r\n<b>Brand:</b>	GANPATI ARTS<br>\r\n<b>Maximum Weight:</b> Recommendation	300 Kilograms<br>\r\n<b>Product Care Instructions:</b> 	Wipe with Dry Cloth<br>\r\n', 'Honey', 'Sheesham Wood', 12, 'GANPATI ARTS', 'bed', 'Product Dimension: Length- 81 Inch, Width- 62 Inch, Height- 39 Inch, Mattress Size: 60 x 78 inches (Mattress not included)<br>\r\nThe Palang Double Bed furniture is made of Solid Wood which ensures durability of the Solid Wood Double Bed.'),
(27, 'Single Bed', '13690', '10053', 'bed5.jpg', '<b>Size:</b>	Single<br>\r\n<b>Material:</b>	Engineered Wood<br>\r\n<b>Colour	:</b>Natural Wenge<br>\r\n<b>Furniture Finish:</b>	Wenge<br>\r\n<b>Style	:</b>Modern<br>\r\n<b>Brand:</b>	Spacewood<br>\r\n<b>Weight:</b>	51000 Grams<br>\r\n<b>Product Dimensions:</b>	80.4L x 38W x 31.5H Centimeters\r\n', 'Natural Wenge', 'Engineered Wood', 5, 'Spacewood', 'bed', 'Product Dimensions: Length (204.2 cm) ,Width (96.5 cm) ,Height (80 cm). Bed size: Single<br>\r\nMaterial: Engineered Wood - Particle Board, Finish: Wood pore, Color: Natural Wenge<br>\r\nStorage Availability: No Storage. Mattress Size: Length (78 Inch) ,Width (42 Inch) ,Height (4 Inch & above)'),
(28, 'Single Bed (Teak Finish)', '10799', '15000', 'bed6.jpg', '\r\n<b>Size:</b>	Single<br>\r\n<b>Material:</b>	Sheesham Wood<br>\r\n<b>Colour:</b>	Brown<br>\r\n<b>Furniture Finish:</b>	Teak<br>\r\n<b>Brand:</b>	Amazon Brand - Solimo<br>\r\n<b>Weight:</b>	25000 Grams<br>\r\n<b>Maximum Weight Recommendation:</b>	210 Kilograms', 'Brown', 'Sheesham Wood', 13, 'Amazon Brand - Solimo', 'bed', 'Bed Size: Single bed Dimensions: Length (73 Inches), Width, (37 inches), Height (6 inches)<br>\r\nMaterial: Sheesham Solid Wood with a premium teak finish. Mattress support is MDF board<br>\r\nRecommended mattress size: 72 x 36 inches'),
(29, 'Furniture Plastic Chairs', '4999', '3229', 'chair1.jpg', '<b>Colour:</b>	Grey<br>\r\n<b>Material:</b>	Plastic<br>\r\n<b>Size:</b>	Standard<br>\r\n<b>Brand:</b>	Bhumika Overseas<br>\r\n<b>Style:</b>	Modern<br>\r\n<b>Frame Material:</b>	Engineered Wood<br>\r\n<b>Maximum Weight Recommendation:</b>	100 Kilograms<br>\r\n<b>Recommended Uses For Product:</b>	Office, Dining<br>\r\n<b>Seat Back Interior Height:</b>	18 Inches<br>\r\n<b>Product Dimensions:</b>	50D x 45W x 36H Centimeters\r\n', 'Grey', 'Plastic', 12, 'Bhumika Overseas', 'chair', '\"Product Dimensions\":- Height: (32.0 inches) X Width: (18.0 inches) X Diameter: 19.0 (inches) | Main Material:- Polypropylene, PU-Leather, Wooden Legs | Seating Height: 18 Inches | Casing - ABS Plastic | Pillow - Eco Leather | Legs - Engineered Wood | Stylish chair with universal use | Seat material: PU Leather | The seat is made of the highest quality polypropylene | Finish:- Plastic | Stacking:- No | Weight Capacity:- 100 Kgs | Used for:- Living Room | Style:- Modern |<br>\r\nThe seat & backrest of the chair is made of high quality polypropylene. The stability and durability of the structure is ensured by beech wood legs, which also give it a unique character. An additional advantage is also a seat lined with a soft sponge and covered with artificial leather, providing even greater comfort of its use. The Norden DSW chair will be perfect for a Home dining room, kitchen or living room. They can be used in various kinds of fashionable public spaces, cafes & restaurant'),
(30, 'Wooden Arm Sofa Chair', '18200', '8499', 'chair6.jpg', '<b>Colour:</b>	Teak Finish<br>\r\n<b>Material:</b>	Wood<br>\r\n<b>Size:</b>	1 Seater<br>\r\n<b>Brand:</b>	DEMIWALL<br>\r\n<b>Style:</b>	Rustic<br>\r\n<b>Finish Type:</b>	Glossy<br>\r\n<b>Frame Material:</b>	Wood<br>\r\n<b>Furniture Finish:</b>	Teak<br>\r\n<b>Room Type:</b>	Bedroom, Living Room, Study Room, Dining Room', 'Teak Finish', 'Wood', 10, 'DEMIWALL', 'chair', 'Product Dimension(In Inch): Length: 35 X Width: 22 X Height: 24<br>\r\nPrimary Material: Sheesham Wood | Secondary Material: Solid MDF/Plywood Depending On Availability | <br>Product Name: Wooden Armchair For Living Room.<br>\r\nGive Your Home A Luxurious Look With Sheesham Wooden Armchair | Fits In Your Space, Fits On Your Budget.\r\nAssembly Or Installation Is Based On Diy (Do It Yourself) Basis.');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `preview_source` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `preview_source`) VALUES
(1, 11, 'sofa1_1.jpg'),
(3, 11, 'sofa1.jpg'),
(5, 11, 'sofa1_2.jpg'),
(6, 11, 'sofa1_3.jpg'),
(11, 12, 'sofa2_1.jpg'),
(12, 12, 'sofa2_2.jpg'),
(13, 12, 'sofa2_3.jpg'),
(14, 12, ''),
(15, 13, 'sofa3.jpg'),
(16, 13, 'sofa3_3.jpg'),
(17, 13, 'sofa3_2.jpg'),
(18, 13, 'sofa3_1.jpg'),
(19, 14, 'sofa4.jpg'),
(20, 14, 'sofa4_1.jpg'),
(21, 14, 'sofa4_2.jpg'),
(22, 14, 'sofa4_3.jpg'),
(23, 15, 'sofa5.jpg'),
(24, 15, 'sofa5_1.jpg'),
(25, 15, 'sofa5_2.jpg'),
(26, 15, 'sofa5_3.jpg'),
(27, 16, 'sofa6.jpg'),
(28, 16, 'sofa6_1.jpg'),
(29, 16, 'sofa6_2.jpg'),
(30, 16, 'sofa6_3.jpg'),
(31, 17, 'table1.jpg'),
(32, 17, 'table1_1.jpg'),
(33, 17, 'table1_2.jpg'),
(34, 17, 'table1_3.jpg'),
(35, 18, 'table2_3.jpg'),
(36, 18, 'table2_2.jpg'),
(37, 18, 'table2.jpg'),
(38, 18, 'table2_1.jpg'),
(39, 19, 'table3.jpg'),
(40, 19, 'table3_3.jpg'),
(41, 19, 'table3_1.jpg'),
(42, 19, 'table3_2.jpg'),
(43, 20, 'table4.jpg'),
(44, 20, 'table4_1.jpg'),
(45, 20, 'table4_2.jpg'),
(46, 20, 'table4_3.jpg'),
(47, 21, 'table5.jpg'),
(48, 21, 'table5_1.jpg'),
(49, 21, 'table5_2.jpg'),
(50, 21, 'table5_3.jpg'),
(51, 22, 'table6_1.jpg'),
(52, 22, 'table6.jpg'),
(53, 22, 'table6_2.jpg'),
(54, 22, 'table6_3.jpg'),
(55, 23, 'bed1.jpg'),
(56, 23, 'bed1_1.jpg'),
(57, 23, 'bed1_2.jpg'),
(58, 23, 'bed1_3.jpg'),
(59, 24, 'bed2.jpg'),
(60, 24, 'bed2_1.jpg'),
(61, 24, 'bed2_2.jpg'),
(62, 24, 'bed2_3.jpg'),
(63, 25, 'bed3.jpg'),
(64, 25, 'bed3_1.jpg'),
(65, 25, 'bed3_2.jpg'),
(66, 25, 'bed3_3.jpg'),
(67, 26, 'bed4.jpg'),
(68, 26, 'bed4_1.jpg'),
(69, 26, 'bed4_2.jpg'),
(70, 26, 'bed4_3.jpg'),
(71, 27, 'bed5.jpg'),
(72, 27, 'bed5_1.jpg'),
(73, 27, 'bed5_2.jpg'),
(74, 27, 'bed5_3.jpg'),
(75, 28, 'bed6.jpg'),
(76, 28, 'bed6_1.jpg'),
(77, 28, 'bed6_2.jpg'),
(78, 28, 'bed6_3.jpg'),
(79, 29, 'chair1.jpg'),
(80, 29, 'chair1_1.jpg'),
(81, 29, 'chair1_2.jpg'),
(82, 29, 'chair1_3.jpg'),
(83, 30, 'chair6.jpg'),
(84, 30, 'chair6_1.jpg'),
(85, 30, 'chair6_2.jpg'),
(86, 30, 'chair6_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `pass` varchar(200) NOT NULL,
  `ph_no` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `address`, `pass`, `ph_no`) VALUES
(3, 'Shifa', 'Shifanadaf3@gmail.com', '3rd floor rukmini complex solapur', '1234', '9145286291'),
(4, 'Shifa', 'Shifa@gmail.com', '3rd floor rukmini complex solapur', '1234', '9145286291'),
(5, 'Kausar Shaikh', 'kausar@gmail.com', 'Solapur, Maharashtra', '1234', '9559926664'),
(6, 'Shafin', 'shfin@gamil.com', 'Solapur, Maharashtra', '1234', '9874563210'),
(7, 'Shafin', 'shfin@gamil.com', 'Solapur, Maharashtra', '1234', '9874563210'),
(8, 'Shafin', 'shfin@gamil.com', 'Solapur, Maharashtra', '1234', '9874563210'),
(9, 'Shafin', 'shfin@gamil.com', 'Solapur, Maharashtra', '1234', '9874563210');

-- --------------------------------------------------------

--
-- Table structure for table `shfin@gamil.com`
--

CREATE TABLE `shfin@gamil.com` (
  `id` int(100) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mrp` int(100) DEFAULT NULL,
  `dealp` int(100) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `qty` int(100) DEFAULT NULL,
  `pid` int(100) DEFAULT NULL,
  `pcat` varchar(255) DEFAULT NULL,
  `date_time` datetime(6) DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shfin@gamil.com`
--

INSERT INTO `shfin@gamil.com` (`id`, `name`, `mrp`, `dealp`, `brand`, `photo`, `qty`, `pid`, `pcat`, `date_time`) VALUES
(1, 'Multipurpose Laptop Table', 4499, 2499, 'PAZANO', 'table5.jpg', 1, NULL, NULL, '2022-05-16 16:46:53.871693'),
(2, 'Multipurpose Laptop Table', 4499, 2499, 'PAZANO', 'table5.jpg', 1, NULL, NULL, '2022-05-16 16:53:13.908102');

-- --------------------------------------------------------

--
-- Table structure for table `shifa@gmail.com`
--

CREATE TABLE `shifa@gmail.com` (
  `id` int(100) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mrp` int(100) DEFAULT NULL,
  `dealp` int(100) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `qty` int(100) DEFAULT NULL,
  `pid` int(100) DEFAULT NULL,
  `pcat` varchar(255) DEFAULT NULL,
  `date_time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shifa@gmail.com`
--

INSERT INTO `shifa@gmail.com` (`id`, `name`, `mrp`, `dealp`, `brand`, `photo`, `qty`, `pid`, `pcat`, `date_time`) VALUES
(3, '5 Seater L Shape Sofa', 29762, 4200000, 'FURNY', 'sofa4.jpg', 1, NULL, NULL, '2022-05-16 16:39:08.284796'),
(4, '5 Seater L Shape Sofa', 29762, 4200000, 'FURNY', 'sofa4.jpg', 1, NULL, NULL, '2022-05-16 16:39:08.284796'),
(7, '5 Seater L Shape Sofa', 29762, 4200000, 'FURNY', 'sofa4.jpg', 1, NULL, NULL, '2022-05-16 16:39:08.284796');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cnt`
--
ALTER TABLE `cnt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kausar@gmail.com`
--
ALTER TABLE `kausar@gmail.com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shfin@gamil.com`
--
ALTER TABLE `shfin@gamil.com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shifa@gmail.com`
--
ALTER TABLE `shifa@gmail.com`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cnt`
--
ALTER TABLE `cnt`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kausar@gmail.com`
--
ALTER TABLE `kausar@gmail.com`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shfin@gamil.com`
--
ALTER TABLE `shfin@gamil.com`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shifa@gmail.com`
--
ALTER TABLE `shifa@gmail.com`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
