-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2023 at 03:51 PM
-- Server version: 10.3.39-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ficuslotco_owaiz_architect`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'owaizarchitect@gmail.com', 'owaiz224225');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `totalFiles` varchar(1000) NOT NULL,
  `listing_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `category`, `title`, `location`, `director`, `description`, `img1`, `img2`, `img3`, `img4`, `totalFiles`, `listing_date`) VALUES
(14, 'RESIDENTIAL', 'Shahid\'s Residence', 'Krishnagiri, Tamil Nadu (2023)', 'Manoj, Owaiz', '<p>The site is located on a residential area in Krishnagiri, Tamil Nadu. The two storied building acts as two different houses with an external staircase and a common terrace. The project aims to be functionally effective and cost-friendly with a modern façade. The façade is steel fabricate.</p>\r\n', '139.jpg', '216.jpg', '320.jpg', '419.jpg', '[\"519.jpg\",\"614.jpg\",\"711.jpg\",\"89.jpg\"]', '2023-05-18 19:14:57'),
(15, 'RESIDENTIAL', 'Mohid\'s Apartments', 'Bengaluru (2020)', ' Kishor, Varsha, Owaiz', '<p>This is an upcoming project in a prime residential area in North Bengaluru. The requirement was to have 3 bedrooms flat on each floor with a modern floor plan. That dictates having flowing spaces of living, dining and kitchen. The spaces open to a 360-degree view from each floor facilitating large balconies as well as an ample amount of parking space and penthouse facing terrace garden on the last floor. The Residential Flats display Contemporary Interior design with a blend of local influence through materials.</p>\r\n', '12.jpg', '21.jpg', '31.jpg', '41.jpg', '[\"51.jpg\",\"61.jpg\"]', '2023-05-16 18:36:30'),
(17, 'RESIDENTIAL', 'Mysore Mane', 'Mysore (2020)', ' Kishor, Owaiz', '<p>A simple 5-Bedroom Residence designed to accommodate a large family, Located in Subhash nagar, Mysuru. The project displays the creative use of brick in the facade along with large size Teak wood windows. This proposal was to design a contemporary brick facade home that opens into large balconies from their private bedrooms. It has a double-storey dining area flowing into a living space overlooking the kitchen to achieve a beautiful</p>\r\n', '16.jpg', 'mysore.jpg', '33.jpg', '43.jpg', '[\"54.jpg\",\"62.jpg\"]', '2023-05-16 18:49:47'),
(19, 'RESIDENTIAL', 'Suheb\'s Residence', 'Mysore (2022)', ' Sweta, Owaiz', '<p>A basic and compact four-bedroom residence built on a 40x60 land in Mysore to accommodate a three-person family. The design features a contemporary façade with large glass windows that is simple and clean. The concept was to allow each space open itself into large open terraces to punctuate ample natural lighting and ventilation. Furthermore the play of subtle colours and materials with a touch of landscape motifs gives a sense of serenity and calmness to the space.</p>\r\n', '136.jpg', '214.jpg', '318.jpg', '417.jpg', '[\"517.jpg\",\"612.jpg\",\"79.jpg\",\"87.jpg\"]', '2023-05-16 18:56:36'),
(20, 'RESIDENTIAL', 'Mujawar\'s Residence', ' ', ' ', '', '112.jpg', 'mujawar.jpg', '36.jpg', '46.jpg', '[\"57.jpg\"]', '2023-05-16 18:57:57'),
(21, 'COMMERCIAL', 'MSM Corner', 'Bengaluru (2018)', ' Pushpak, Divya, Owaiz', '<p>The building explores the extensive use of Foam concrete and seamless glass in the facade. The concept was to create panoramic views for the people working throughout the day and night in shifts. The building is situated in a commercial area in Indiranagar, Bengaluru. The Red band creates a timeless effect which blends with the concrete grey. The project has been a learning experience to the team as they tried to achieve maximum functionality along with form building.</p>\r\n', '114.jpg', 'msm.jpg', '37.jpg', '47.jpg', '', '2023-05-16 19:05:26'),
(22, 'COMMERCIAL', 'OA Office', 'Bengaluru (2019)', ' Pushpak, Zafar, Owaiz', '<p>Zed One is one of our first initiatives, and it&#39;s sole purpose is to function as a business workspace. The use of bold colours in the interiors gives the office a sense of vibrancy and adds in a sense of liveliness to the space.</p>\r\n', '116.jpg', '24.jpg', '38.jpg', '48.jpg', '[\"58.jpg\"]', '2023-05-16 19:10:38'),
(23, 'COMMERCIAL', 'Orange Health', 'Bengaluru (2022)', ' Arun Mozhi, Owaiz', '<p>Orange Health is a new age online diagnostic office. The clients wanted to expand their old space from a different floor. We explored different ways to light up the office and create colourful interactive space to achieve a workspace which is enjoyable and at the same time productive. The meetings and discussion rooms are painted with modern pastel colours to add more play to the whole office complimenting the exposed ceiling and the workstation spaces touch which has a triangular splash of colours highlighting the corners.</p>\r\n', '118.jpg', '25.jpg', '39.jpg', '49.jpg', '[\"59.jpg\",\"65.jpg\",\"73.jpg\",\"83.jpg\"]', '2023-05-16 19:12:17'),
(24, 'COMMERCIAL', 'Zed One', 'Bengaluru (2018)', ' Owaiz', '<p>Zed One is one of our first initiatives, and it&#39;s sole purpose is to function as a business workspace. The use of bold colours in the interiors gives the office a sense of vibrancy and adds in a sense of liveliness to the space.</p>\r\n', '120.jpg', '26.jpg', '310.jpg', '410.jpg', '[\"510.jpg\",\"66.jpg\",\"74.jpg\"]', '2023-05-16 19:14:50'),
(25, 'COMMERCIAL', 'Zed Pearl', 'Bengaluru (2021)', ' Kishor, Varsha, Owaiz', '<p>Zed Pearl is one of our premium projects. The building now hosts the Head office of Licious. The facade is one of the main design elements and works as a device that allows the building to stand out from the surrounding buildings. It is reminiscent of an image of a Barcode. The building has Effective open-plan offices, conference rooms for large meetings, breakout areas and a rooftop cafeteria floor with panoramic views of a metro city.</p>\r\n', '122.jpg', '27.jpg', '311.jpg', '411.jpg', '[\"511.jpg\",\"67.jpg\"]', '2023-05-16 19:19:35'),
(27, 'COMMERCIAL', 'Zed Tech Park', 'Bengaluru (2018)', ' Pushpak, Zafar, Owaiz', '<p>After the success of Zed One, Owaiz Architects has made a promising office model which beats the rest of the monotonous designs. Located in the heart of Silicon Valley with good connectivity and access, Zed Tech Park is abutted by wide Roads on 2 sides giving Its prime view makes it a landmark. Designed with modern technology to inspire growth and prosperity, it provides the platform that will give true justice to individual talents and workplace synergy.</p>\r\n', '126.jpg', '29.jpg', '313.jpg', '', '', '2023-05-16 19:24:00'),
(28, 'LEISURE', 'The Garden', 'Bengaluru (On-Going)', '  Divya, Varsha, Kishore', '<p>The Garden Project explores contemporary style of design for a holiday destination located in Srirangapatna. This project gives a luxury feel with a blend of tropical nature, natural materials, modern design with a mixture of local characteristics. It explores diversity of typologies from Luxury rooms, row villas to private pool villas amidst a variety of activities ranging from spa, rooftop restaurants ,swimming pools and banquet halls, open lawns where events can be organised. Overall the project displays the connection between nature and beautifully designed spaces.</p>\r\n', '128.jpg', '210.jpg', '314.jpg', '413.jpg', '[\"513.jpg\",\"69.jpg\"]', '2023-05-16 19:27:31'),
(29, 'LEISURE', 'Zed Farmhouse', 'Mysore  (On- Going)', ' Divya, Varsha, Kishore', '<p>Zed farmhouse is a recreational getaway, It is situated in a Farmland covered with tall plantations and exotic horticulture. It is located in Taripura, Srirangapatna district. 25 mins drive from Mysore city. We explored an A-Frame structure with shingle roofing accommodating 4 luxury bedrooms, Every bedroom is overlooking the beautiful panoramic views of the farm. The project has one of the largest swimming pools for a residential scale, a Barbecue court, 4-acres of landscaped areas. This is by far the most detailed-oriented work of OA.</p>\r\n', '130.jpg', '211.jpg', '315.jpg', '414.jpg', '[\"514.jpg\",\"610.jpg\",\"76.jpg\",\"85.jpg\"]', '2023-05-16 19:29:26'),
(30, 'PUBLIC', 'Jamia Masjid', 'Bangalore (On-Going)', '  Arun Mozhi, Sheril, Owaiz', '<p>As an ancestral property, the land was given to the public in order to build a Masjid for the local community. In front of the masjid is a burial yard. The masjid&#39;s exterior was precisely constructed with Flying buttresses and Islamic jaali to provide a modern facade with a fresh and appealing appearance to the mosque. The materials were chosen specifically to highlight the delicate features while maintaining a basic aesthetic with clean lines.</p>\r\n', '132.jpg', '212.jpg', '316.jpg', '415.jpg', '[\"515.jpg\",\"77.jpg\"]', '2023-05-16 19:31:23'),
(31, 'INDUSTRIAL', 'YUTO', ' ', ' ', '', '134.jpg', '213.jpg', '317.jpg', '416.jpg', '[\"516.jpg\",\"611.jpg\",\"78.jpg\",\"86.jpg\"]', '2023-05-16 19:33:06'),
(32, 'COMMERCIAL', 'Zed Pentagon', 'Bengaluru (2021)', 'Kishor, Varsha, Owaiz', '<p>Zed Pentagon is one of our complex projects which shares its context with the BMRCL Metro station. The building houses 700 IT Professionals. Its function is purely Commercial office use. Our main goal was to achieve a futuristic design in terms of Functionality, Facade design, Services to cater to 700 IT professionals. The interior design of this building meets the current need for Social distancing, Covid-19 workspaces norms. It consists of the stack parking facility, services cores, Effective open-plan offices, conference room for large meetings, landscape outdoor area for smaller gatherings, break out areas and rooftop cafeteria floor with panoramic views of the metro city.</p>\r\n', '137.jpg', '215.jpg', '319.jpg', '418.jpg', '[\"518.jpg\",\"613.jpg\",\"710.jpg\",\"88.jpg\"]', '2023-05-18 19:08:33'),
(33, 'RESIDENTIAL', 'Hasan\'s Residence', 'Mysore  (2023)', ' Arun Mozhi, Owaiz', '<p>A family of six hailing from Mysore wanted to build their dream house on a plot size of 50’x80’. A five-bedroom duplex house, a wet and dry kitchen with an additional pantry on the first floor, a formal and informal living room, and a beautiful terrace on the second floor. The house was planned with spaces that opened to pockets of nature. Large openings were included in the house&#39;s design to allow natural light to fill the rooms. The house’s facade was designed with protruding curves that stood out in the elevation. The materials in the facade were chosen to be subtle and earthy. The standout among others in the facade is the steel fabrication that is intricately planned with small wooden pieces that appear to be suspended in air while also being able to rotate.</p>\r\n', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '[\"5.jpg\",\"6.jpg\",\"7.jpg\",\"8.jpg\"]', '2023-05-16 18:33:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
