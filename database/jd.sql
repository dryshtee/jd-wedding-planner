-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 08:38 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', 'Admin1345', 'Dryshtee', 'Woozir');

-- --------------------------------------------------------

--
-- Table structure for table `aubineauxbookings`
--

CREATE TABLE IF NOT EXISTS `aubineauxbookings` (
`id` int(11) NOT NULL,
  `supplier_id` int(3) NOT NULL DEFAULT '5',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block',
  `user_id` int(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `guests` int(100) NOT NULL,
  `hour` int(11) NOT NULL,
  `minutes` varchar(11) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `confirmation` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `aubineauxbookings`
--

INSERT INTO `aubineauxbookings` (`id`, `supplier_id`, `title`, `date`, `created`, `modified`, `status`, `user_id`, `fname`, `address`, `contact`, `email`, `guests`, `hour`, `minutes`, `duration`, `confirmation`) VALUES
(1, 5, 'LE DOMAINE DES AUBINEAUX', '2017-05-31', '2017-05-23 19:14:24', '2017-05-23 19:14:24', 1, 1, 'Jeeya Gayan', 'Savanne road, nouvelle-france', 57847584, 'jeeya123@gmail.com', 0, 9, '00', '1 Hour', 'Pending'),
(2, 5, 'LE DOMAINE DES AUBINEAUX', '2017-05-19', '2017-05-23 19:19:15', '2017-05-23 19:19:15', 1, 1, 'Jeeya Gayan', 'Savanne road, nouvelle-france', 57847584, 'jeeya123@gmail.com', 0, 9, '00', '1 Hour', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `cakemaker`
--

CREATE TABLE IF NOT EXISTS `cakemaker` (
`id` int(11) NOT NULL,
  `supplier_id` int(15) NOT NULL DEFAULT '10',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block',
  `user_id` int(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `vlocation` varchar(100) NOT NULL,
  `hour` int(11) NOT NULL,
  `minutes` varchar(11) NOT NULL,
  `choice` varchar(20) NOT NULL,
  `tier` varchar(15) NOT NULL,
  `flavor` text NOT NULL,
  `info` varchar(500) NOT NULL,
  `confirmation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `carsbookings`
--

CREATE TABLE IF NOT EXISTS `carsbookings` (
`id` int(11) NOT NULL,
  `supplier_id` int(15) NOT NULL DEFAULT '13',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block',
  `user_id` int(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `paddress` varchar(30) NOT NULL,
  `location` varchar(100) NOT NULL,
  `vlocation` varchar(100) NOT NULL,
  `hour` int(11) NOT NULL,
  `minutes` varchar(11) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `transport` varchar(20) NOT NULL,
  `transport1` varchar(20) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `confirmation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `catererbookings`
--

CREATE TABLE IF NOT EXISTS `catererbookings` (
`id` int(11) NOT NULL,
  `supplier_id` int(15) NOT NULL DEFAULT '9',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block',
  `user_id` int(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `vlocation` varchar(100) NOT NULL,
  `hour` int(11) NOT NULL,
  `minutes` varchar(11) NOT NULL,
  `deal` varchar(100) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `confirmation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

CREATE TABLE IF NOT EXISTS `checklist` (
`item_id` int(11) NOT NULL,
  `item` varchar(264) NOT NULL,
  `tips` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `checklist`
--

INSERT INTO `checklist` (`item_id`, `item`, `tips`) VALUES
(1, 'Venue', '<h3>Venue</h3>\r\n<br/>\r\n<p> Perhaps you''ve just got engaged and can''t wait to book your wedding venue but do you really know what you''re looking for? Before you go dashing off to look around every single wedding reception venue within a hundred miles, here are some top tips to think about when choosing a wedding venue: </p>\r\n<br/>\r\n<b>Communication is key</b>\r\n<br/>\r\n<p>Have a chat with your other half about the sort of wedding you would like and be prepared to compromise if you have different ideas; this could help avoid disagreements later! </p>\r\n<br/>\r\n<b>Decide on a budget</b>\r\n<br/>\r\n<p>Working out a budget early on will help you to shortlist potential wedding venues.  Wedding catering and alcohol normally take up quite a large chunk of your budget so remember to include it in your calculations.</p>\r\n<br/>\r\n<b>What''s best for guests?</b>\r\n<br/>\r\n<p>Don''t forget about guests travelling to your wedding.  If you want to avoid incurring expensive taxi charges and hotel bills for them or coach costs for you, look for a wedding venue near to where the majority of your guests live.</p>'),
(2, 'Wedding Planner', '<h3>Wedding Planner</h3>\r\n<br/>\r\n<b>Total Cost and Your Budget</b>\r\n<p>While consulting with your wedding planner, be sure they understand all of your budgetary restrictions. Being able to work within a set budget is an important part of being a wedding planner, and they should be able to make suggestions that can save you money while providing first class service on the day.</p>\r\n<br/>\r\n <p>A good wedding coordinator will have contacts with a variety of vendors and caterers so that they can provide the best service at the best price for all of their clients. Finally, ask about what will be covered in the total cost. Will the vendor''s and caterer''s fees be included in the total cost, or will they be paid separately. This applies to any support staff required prior to, and on the day of, the wedding as well. Confirm when payment is due, and what forms of payment will be accepted.</p>\r\n<br/>\r\n<p>Hiring a wedding planner can help to take much of the stress out of planning your wedding. When choosing a wedding planner, look for someone that understands what you want on your wedding day. Choose someone you are comfortable with, who will work closely with you and who is committed to bringing your dream wedding to life.</p>'),
(3, 'Food Caterers', '<h3>Food Catering</h3>\r\n<br/>\r\n<p>When planning a wedding, choosing the right Catering is one of the most important decisions. Not only do you have to find the right caterer but you also have to decide what kind of meal you would like. You can host a formal sit down dinner, a buffet style meal or a cocktail party with small plates of food. Here are 5 tips for choosing the best form of catering for your wedding:</p>\r\n<br/>\r\n<b>Know your audience</b>\r\n<p>Will the majority of your guests prefer a "simple dish", is one side of the family vegan, or do any guests have food allergies? It is rare that you will be able to appease everyone at your wedding reception, but you should definitely try your best.</p>\r\n<br/>\r\n<b>Know your budget</b>\r\n<p>You don''t want to start your newly married life being thousands of dollars in debt. Talk with your caterer to come up with a plan that works for you. A three or four course meal will cost more than a catered buffet. Don''t let this discourage you, because buffet style catering services can be very delicious, creative and appealing.</p>\r\n<br/>\r\n<b>Know the vibe you want</b>\r\n<p>Do you want people to be sitting most of the reception or dancing? If you want people to mingle and dance, a cocktail style menu may be the best option. Some soon-to-be newlyweds want to focus on a creative bar menu more so than a formal dinner.</p>\r\n<br/>\r\n<b>Have a solid head count</b>\r\n<p>One thing that really gets in the way of planning is not knowing how many people on your guest list will actually attend the wedding. The type of catering you choose highly depends on how many people will attend your wedding. Unfortunately, a good percentage of invited guests don''t RSVP, therefore it''s up to those planning the wedding to call and check in with their invited guests. According to Annie Lee, principal planner for Daughter of Design, 20-25% will say no to a local wedding, and maybe 30-35% for a destination wedding. To make the process of knowing your headcount less stressful, send your invites out 6-8 weeks before the wedding.</p>\r\n<br/>\r\n<b>Consider the season</b>\r\n<p>The menu your catering company provides will likely be created around the season. If you''re choosing to get married in the fall, consider butternut squash soup and pumpkin themed desert. If your wedding is in the heat of the summer, replace soup with salad and consider sorbet or ice cream for dessert. What type of food do you like best? The date you plan for your wedding can reflect the type of food that is served.</p>\r\n<p>Planning your wedding will be one of the most exciting life events you will ever have. To make things less stressful, choose a Catering like Taste Mauritius Private Catering. We''ve been serving the area for over 12 years and over 100 banquet and reception halls rely on our creative catering. We also provide the most romantic, elegant and memorable wedding reception you could wish for.</p>'),
(4, 'Wedding Cars', '<h3>Wedding Cars</h3>\r\n<br/>\r\n<b>Book a car company way in advance</b>\r\n\r\n<p>You should hire your car company with about six months to go (after you''ve settled on your date, ceremony and reception sites, and wedding party size). If you''re getting married in April, May or June - also known as prom and graduation season - formal vehicles will be in high demand, so you''ll need to book your transportation even earlier (around nine months is a good benchmark). The same goes for special rides like vintage cars, which are in shorter supply than your typical town car or limousine.</p>\r\n\r\n<br/>\r\n<b>Don''t leave your guests stranded</b>\r\n\r\n<p>If you''re hosting a lot of out-of-towners, consider providing them with a ride from their hotel to the wedding and back. That way, no one has to worry about navigating an unfamiliar city or choosing designated drivers. A charter bus or shuttle, which holds up to 60 passengers, will usually do the trick (it can take a couple trips). Or go the extra mile and choose something with character that matches your wedding-like a fleet of yellow school buses for a blast from the past or a double decker bus for a city affair.</p>\r\n<br/>\r\n<b>Make your reservation in person</b>\r\n\r\n<p>Have you ever booked a rental car online and been disappointed by the junky lemon you picked up? Don''t let this happen on your wedding day. Research companies online and chat with a few over the phone, but make your final booking in person. You''ll be able to get a look at the car you''ll be riding in (or at least a very similar one). This way you can avoid any unwelcome surprises by making sure the fleet looks in tip-top shape before putting down a deposit.</p>\r\n<br/>\r\n<b>Plan to pay for wait time</b>\r\n\r\n<p>Most rental companies charge by the hour and require a minimum booking, typically three hours. In most cases, this means that you''ll contract them for the full day. Either way, calculate the total hours needed from the ceremony pickup to the end of the reception, to determine whether it''s worth it to pay for the wait. (We think it generally is, if only to save you from stressing out about another detail during your busy day.) Expect to pay between $50 and $150 per hour, plus a 15 to 20 percent tip, which is usually included in the contract (sales tax may also be charged). If it''s not included, a $20 tip for each driver will cover your bases.</p>'),
(5, 'Photos & Videos', '<h3>Photos & Videos</h3>\r\n<br/>\r\n<p>So, you just got engaged.. Congratulations! Now start looking for a wedding photographer. The truth is, the best professional photographers book their schedules a year in advance, so hiring someone is one of the first things you should do after you''ve set the date.\r\nHowever, if your plans call for an out-of-season wedding or a Sunday ceremony, there is a good chance your chosen photographer is available. Give yourself six months to find the photographer of your dreams if you''re having a more uniquely timed wedding.</p>\r\n<br/>\r\n<p>After narrowing your selection of wedding photographers down to around three, make appointments to interview the candidates. Likely, the photographer will have two or three wedding albums available to show. Make sure you see at least one album of an entire wedding, from start to finish, preferably something that is comparable to what your wedding will be like in physical setting and emotional tone. After examining all of the sample work closely, request to see another set of photographs from a recent wedding. This will enable you to see both his best work from the pre-selected albums and his average daily work. Some things to keep in mind:</p>\r\n<br/>\r\n<p>Examine the basics of the pictures such as color, clarity, exposure, graininess and composition. Determine the photographer''s style - does she shoot photos that are adventurous and artistic, or are they standard and ordinary? Do the guests look natural or self-conscious?\r\nDo the photos capture the emotional tone organically, or does do the couple''s poses feel forced?\r\nBe sure to leave the interview knowing the highest vs. average quality of the photographer''s work, her visual style, and if she will adjust her style to your individual taste. Her willingness to work closely with you to satisfy you as a client is key to producing an exceptional result, and a professional knows that.</p>\r\n<br/>\r\n<p>While you want to book your photographer for the date of your wedding immediately, make sure you read over the legal details of exactly what you will get before signing the contract. Ensure the photographer you meet with is the photographer who will show up on your wedding day and if you should expect a second camera person or assistant. Determine what parts of your wedding day will be covered and how many hours you have with your photographer. Clear communication and reiteration of the details of the ceremony, the reception, and the specific types of photographs you want is crucial. In all, the contract is in place to remind both you and the photographer of the services you agreed upon.</p>\r\n'),
(6, 'Music & Entertainment', '<h3>Music & Entertainment</h3>\r\n<br/>\r\n<p>Choosing your wedding entertainment is a task that should be well researched. Nowadays, there is an overwhelming selection to choose from and most people will choose a band or DJ either through a wedding they''ve attended, by word of mouth or recommended by their chosen venue.</p>\r\n\r\n<p>You shouldn''t feel obligated to book any old band. It is likely that you will have put huge effort into your wedding so it''s important to have a band that will complement your day and allow you to relax and have fun with your guests. Everyone knows a wedding day is about the happy couple, but they also want their guests to have a rocking time, right?</p>\r\n<br/>\r\n<b>Budget, Budget, Budget!</b>\r\n\r\n<p>It is extremely important before you look to book any wedding entertainment that you set a figure so that you know what you have to work with. It is very easy to get carried away and overspend so be very cautious. It''s worth shopping around and getting quotes from a few people as prices can vary quite a lot depending on what you go for.</p>\r\n<br/>\r\n<b>What kind of entertainment do you want for your wedding?</b>\r\n\r\n<p>This is the first question you need to ask yourselves as a couple. The best way to do this is to look at your wedding as a whole. Has a theme or style emerged from the planning of your big day? This will help you to narrow down your options, as there is a lot of choice out there.</p>\r\n\r\n<p>If you are having a very low-key wedding, a simple guitarist may fit the bill. However, if you are having a big traditional elegant wedding a full band may be the best choice.</p>\r\n\r\n<p>Be sure to talk to some of your guests and the reception venue and get their ideas or recommendations - it''s your choice but always worth getting other opinions! If you do decide to pick entertainment not on a recommendation, be sure to get references from wedding parties that have booked them previously.</p>\r\n<br/>\r\n<b>Keep the wedding venue in mind</b>\r\n\r\n<p>Before you book any entertainment think about the venue - has it got a lot of room or is space restricted? If you have a smaller space you may need to scale back on the entertainment to suit the venue. If there is more space to work with, you are likely to leave yourself open to a lot of choice. Remember, having a 2-piece band with a huge dance floor and 200 plus guests doesn''t usually work and will most likely be too quiet for all your guests.</p>\r\n\r\n<p>Also think about when the band will set-up. There is nothing worse than a band traipsing through the reception to set up while you are trying to enjoy your meal. Ensure you work with the band to either set-up before the reception commences or after the meal has finished. In my experience before the dinner starts is the best option.</p>\r\n\r\n<p>Most importantly HAVE FUN with choosing your wedding entertainment - After all, it is meant to be an exciting experience planning your wedding! Now where did I put my dancing shoes?</p>'),
(7, 'Cakemaker', '<h3>Cake maker</h3>\r\n<br/>\r\n<p>If you have a sweet tooth and an appreciation for creative confectionery, choosing your wedding cake is likely to be one of your favorite parts of wedding planning.</p>\r\n<br/>\r\n<b>Be honest about your budget</b>\r\n\r\n<p>It really is important that you trust your cake designer enough that you tell them your real budget. Real! There are lots of ways to translate blush pink peonies and lace into a wedding cake, and letting your designer know means they can work on ideas that are actually realistic. (And they won''t try to wring you for every penny, I promise.</p>\r\n\r\n<p>If you''re on a tight budget, think about having an oversized statement sugar flower or blocks of color, rather than piped lace or a floral cascade.</p>\r\n<br/>\r\n<b>Portions dictate size</b>\r\n\r\n<p>It''s not the other way around, the number of people you need to serve is more important than the number of tiers you think your cake should have. If your number is on the low side you can make it up with dummy tiers, but bear in mind that they aren''t free, and a 5 tier cake at a wedding with 40 people will probably result in a few awkward stares.</p>\r\n<br/>\r\n<b>Make sure you like their style</b>\r\n\r\n<p>Cake designers have styles too! If you are looking for an ombre cake with an extended/double barrel tier, chances are you shouldn''t go looking for someone who still uses pillars and stairways. The same goes for buttercream vs fondant, some designers are happy to work with both, but you''re much better off finding someone who works with the medium you want for your cake.</p>\r\n<br/>\r\n<b>You get what you pay for</b>\r\n\r\n<p>If you want to save money, try to be flexible with your designs. But if you''re really keen on being featured on cakewrecks, and you don''t mind being embarrassed by a badly made cake, you can find some hilarious prices online. As the saying goes, ''cheap cake ain''t good, good cake ain''t cheap</p>');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`email_id` tinyint(4) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `contact` int(15) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `floralbookings`
--

CREATE TABLE IF NOT EXISTS `floralbookings` (
`id` int(11) NOT NULL,
  `supplier_id` int(15) NOT NULL DEFAULT '4',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block',
  `user_id` int(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `vlocation` varchar(100) NOT NULL,
  `hour` int(11) NOT NULL,
  `minutes` varchar(11) NOT NULL,
  `deal` text NOT NULL,
  `guests` int(100) NOT NULL,
  `chairs` int(100) NOT NULL,
  `tables` int(100) NOT NULL,
  `style` varchar(50) NOT NULL,
  `types` varchar(50) NOT NULL,
  `instruction` varchar(500) NOT NULL,
  `confirmation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kvsbookings`
--

CREATE TABLE IF NOT EXISTS `kvsbookings` (
`id` int(11) NOT NULL,
  `supplier_id` int(15) NOT NULL DEFAULT '3',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block',
  `user_id` int(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `vlocation` varchar(100) NOT NULL,
  `hour` int(11) NOT NULL,
  `minutes` varchar(11) NOT NULL,
  `deal` text NOT NULL,
  `guests` int(100) NOT NULL,
  `chairs` int(100) NOT NULL,
  `tables` int(100) NOT NULL,
  `style` varchar(50) NOT NULL,
  `types` varchar(50) NOT NULL,
  `instruction` varchar(500) NOT NULL,
  `confirmation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `longbeachbookings`
--

CREATE TABLE IF NOT EXISTS `longbeachbookings` (
`id` int(11) NOT NULL,
  `supplier_id` int(15) NOT NULL DEFAULT '6',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block',
  `user_id` int(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `guests` int(100) NOT NULL,
  `hour` int(11) NOT NULL,
  `minutes` varchar(11) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `confirmation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `musicbookings`
--

CREATE TABLE IF NOT EXISTS `musicbookings` (
`id` int(11) NOT NULL,
  `supplier_id` int(15) NOT NULL DEFAULT '11',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block',
  `user_id` int(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `vlocation` varchar(100) NOT NULL,
  `hour` int(11) NOT NULL,
  `minutes` varchar(11) NOT NULL,
  `music` varchar(20) NOT NULL,
  `music1` varchar(20) NOT NULL,
  `music2` varchar(20) NOT NULL,
  `music3` varchar(20) NOT NULL,
  `music4` varchar(20) NOT NULL,
  `info` varchar(500) NOT NULL,
  `confirmation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `photosbookings`
--

CREATE TABLE IF NOT EXISTS `photosbookings` (
`id` int(11) NOT NULL,
  `supplier_id` int(15) NOT NULL DEFAULT '12',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block',
  `user_id` int(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `vlocation` varchar(100) NOT NULL,
  `hour` int(11) NOT NULL,
  `minutes` varchar(11) NOT NULL,
  `deal` varchar(100) NOT NULL,
  `confirmation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `posid` varchar(15) NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`posid`, `position`) VALUES
('CAKEMAKER-1', 'Cake Maker'),
('CATERER-1', 'Food Caterer'),
('ENTERTAINMENT-1', 'Music and Entertainment'),
('PHOTOGRAPHY-1', 'Photos and Videos'),
('PLANNER-1', 'Wedding Planner'),
('PLANNER-2', 'Wedding Planner'),
('PLANNER-3', 'Wedding Planner'),
('TRANSPORT-1', 'Wedding Cars'),
('VENUE-1', 'Venue Supplier'),
('VENUE-2', 'Venue Supplier'),
('VENUE-3', 'Venue Supplier'),
('VENUE-4', 'Venue Supplier');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
`supplier_id` int(3) NOT NULL,
  `fname` text NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `supplier_link` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(30) NOT NULL,
  `price2` int(20) NOT NULL,
  `price3` int(20) NOT NULL,
  `price4` int(20) NOT NULL,
  `price5` int(20) NOT NULL,
  `price6` int(20) NOT NULL,
  `date_added` date NOT NULL,
  `posid` varchar(15) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `fname`, `address`, `contact`, `username`, `password`, `supplier_name`, `supplier_link`, `facebook`, `description`, `price`, `price2`, `price3`, `price4`, `price5`, `price6`, `date_added`, `posid`, `status`) VALUES
(2, '', 'Coastal road, Balaclava', 6844603, 'beachplanner', 'weddingplus1345', 'WEDDINGPLUS WEDDING PLANNER', 'www.weddingsplus.info/Home.html', 'https://www.facebook.com/Weddings-Plus-59704060855/?ref=ts', '<p>Get married with Weddingplus Wedding Planner on the sun kissed of Mauritius Paradise. We are Mauritian based wedding Planner in the delivering the very best of Mauritius Beach Weddings with clients with distinguished taste who want nothing less than the absolute finest in quality and service. </p>	\r\n\r\n<p>At The Wedding Plus we look forward to helping you create your dream wedding. We offer personalized, caring service in an intimate relaxing environment. Our personalized service is what sets us apart from other bridal stores in the area. We believe that every customer is unique and deserves special attention and  our goal is to provide you with the service and expertise to make your special day nothing less than beautiful.We believe that every customer is unique and deserves the best. </p>', 'Rs 4000', 0, 0, 0, 0, 0, '2016-12-21', 'PLANNER-1', 'deactive'),
(3, '', 'Labourdonnais road, Rose-Hill', 5919646, 'rusticplanner', 'kvs1345', 'KVS WEDDING PLANNER', 'www.kvswedding.com/', 'https://www.facebook.com/kvsweddingset/', '<p>Rustic weddings come in all sorts of styles but some couples decide to plan a trueclassic rustic style wedding. A classic rustic style wedding has the elements of a logde wedding and combine design elements from a woodland rustic weddings and northwoods style wedding.</p>\r\n			\r\n<p>KVS is one of those wedding planners who invests massively in high class equipments to be able to meet the exigencies of the clients,therefore delivering a five star service. All equipemnts are kept neat and are properly maintained. We have a very young and dynamic team who have the ability of delivering the goods at the first time asking and within time. </p>', '20000', 0, 0, 0, 0, 0, '2016-12-21', 'PLANNER-2', 'active'),
(4, '', 'Royal road, Mahebourg', 6379068, 'floralplanner', 'lms1345', 'LMS WEDDING PLANNER', 'www.lmsweddings.co.uk/ ', 'https://www.facebook.com/LMSWeddingplanner/ ', '<p>We pride ourselves in knowing that our floral arrangements and event design awaken the senses! We create harmonious designs, combining our floral and eent decor expertise, that unexpectedly pulls at your heartstrings. </p>\r\n			\r\n<p>Our experience in large scale indian weddings, where	the fabric mandap, jay mala garlands, and elaborated drapings are design focal points, has developed our deep understanding in the  intricacies of decor, ensuring that every detail complements one another. Our traines artistic eye will fine tune the varying elements to create lovely custom designs for a romantic ambience that visually shares your style and tells your story.</p>', 'Rs 30000 - Rs 45000', 0, 0, 0, 0, 0, '2016-12-21', 'PLANNER-3', 'active'),
(5, '', 'Forest-side, Curepipe', 6867394, 'venue1', 'aubineaux1345', 'LE DOMAINE DES AUBINEAUX', 'http://www.saintaubin.mu/fr/domaine_des_aubineaux.aspx ', 'https://www.facebook.com/ledomainedesaubineaux.mauritius/', '<p> "Domaine des Aubineaux", is a colonial house built in 1872, which has been converted into a museum dedicated to the history of Mauritian Tea. It is a trip that  will take you back in time to the first days of Mauritius with its rich colonial history. </p>\r\n			\r\n<p> While strolling in the "Camphor tree garden", take a look at the diversity of exotic plants as well as of the trees of the endemic forest, and enjoy the beautiful sight of the tea plantation and of the breathtaking nature all around. If you are assionate about nature and you want to have a rustic theme wedding. There is no place better than "Domaine des Aubineaux".</p>', '2500', 0, 0, 0, 0, 0, '2016-12-21', 'VENUE-1', 'active'),
(6, '', 'Coastal road, Belle-Mare', 4020000, 'venue2', 'longbeach1345', 'LONG BEACH RESORT & SPA', 'http://www.longbeachmauritius.com/en/', 'https://www.facebook.com/longbeachmauritius ', '<p> The season for Indian weddings in Mauritius started with a bang and the famous Mauritius 5-star hotel group Sun Resorts recently hosted 350 guests for a large stunning wedding. We witnessed richly decorated magnificent buffets and an array of invited guests with glittering and stylish outfits, all the ingredients were there for a grand party that was enjoyed by everyone. </p>\r\n\r\n<p>Your wedding is certainly one of the most memorable events you will experience, a day you will never forget. Because of this, the Long Beach team takes particular care when organizing your perfect destination wedding in Mauritius so that you have an amazing day and leave with wonderful memories. Get in touch if you would like to discuss your dream wedding in any of our Sun Resorts locations. </p>', 'As from Rs 5500, depending on ', 0, 0, 0, 0, 0, '2016-12-21', 'VENUE-2', 'active'),
(7, '', 'M1 Motorway, Nouvelle-France', 6153000, 'venue3', 'parbeaux1345', 'ROYAL PARBEAUX HALL', ' www.royalparbeaux.com/ ', 'https://www.facebook.com/Royal-Parbeaux-Hall-1011888188825655/ ', '<p> Royal Parbeaux Hall has reached the pinnacle of luxury. Over years of hospitality and	catering experience, unmatched service, exclusive amenities and a pictureque facility inside and out, makes Royal Parbeauux Hall the best choice for your next event. Royal Parbeaux Hall is unique in our long-standing reputation as a family owned and operated business for generations, and continues to provide the consistency of excellent service.</p>	\r\n<p> Royal Parbeaux Hall serves as the ideal setting for any occasion. From the moment you walk throughout doors, you are greeted with our highly experienced event planners. We are equipped with the expertise and versatility to help coordinate your special event to perfection.</p>\r\n', 'Rs 1500', 0, 0, 0, 0, 0, '2016-12-21', 'VENUE-3', 'active'),
(8, '', 'Balaclava 20108, Balaclava', 2401000, 'venue4', 'mondesir1345', 'CHATEAU MON DESIR', 'www.chateaumondesir.mu/ ', 'https://www.facebook.com/chateaumondesir/ ', '<p> Nothing more elegant than your wedding  at Chateau Mon Desir! It is indeed the idyllic place to say "I DO"...The ''Chateau Mon Desir'' fine dining reaturant overlooking the ''Historical ruins of Balaclava'' and the Citron river is simply one of the best restaurants in the Indian Ocean and one of the most exceptional venues for your wedding on the island. </p>\r\n			\r\n<p> Our professional wedding and events team will be more than pleased to assist you with all the planning for your special day. </p>', '''MUR'' Rs 4500', 0, 0, 0, 0, 0, '2016-12-21', 'VENUE-4', 'active'),
(9, '', 'Pope Henessy st, Port-Louis', 59607859, 'food caterer1', 'tastecaterer1345', 'TASTE MAURITIUS PRIVATE CATERING', 'www.tastemauritius.com/ ', 'https://www.facebook.com/tastemauritius/ ', '<p> We offer the opportunity to cater for a variety of events and individuals whether this is at a hired location or at home. Private dining events are a great opportunity to be creative and devise wonderful bespoke menus to suit your needs. So while you are planning your outfit, getting the kids ready or last minute shopping; you can do it all safely in knowledge that we will be taking care of everything in the kitchen! </p>\r\n			\r\n<p> Ideas of typical dishes can be found on our website. </p>', 'As from ''MUR'' Rs 2500', 0, 0, 0, 0, 0, '2016-12-21', 'CATERER-1', 'active'),
(10, '', 'Vacoas Phoenix town, Mauritius', 6865659, 'cakemaker1', 'delicecake1345', 'SEASONS DELICE', 'https://www.linkedin.com/company/season''s-delice', 'https://www.facebook.com/SeasonsDelice/', '<p> Season''s Delice is a Health-conscious, Lean & Green, freshly prepared foods company. Our high-quality manufacturing process with the use of local & organic ingredients when possible has set us apart from other companies.. </p>\r\n\r\n<p>The company has an excellent reputation for producing beautiful bespoke wedding cakes, party cakes, cupcakes and decadent dessert tables that taste as gorgeous as they look.\r\nKnown for their intricate detail and realistic sugar flowers, sugar pearls and edible jewellery we create award winning cakes that have often been described as memorable for their aesthetic and deliciousness.<br/>\r\n Our ordering process is very simple: just place a booking or give us a call and we would be very happy to arrange an informal consultation to discuss your wedding cake.</p>', 'Kindly please check on our web', 0, 0, 0, 0, 0, '2016-12-21', 'CAKEMAKER-1', 'active'),
(11, '', 'St louis street, Castel', 6925592, 'music1', 'kudos1345', 'KUDOS MUSIC', 'http://kudosmusic.co.uk/ \r\n', 'https://www.facebook.com/KudosMusic/ ', '<p> The Mauritian Dancers and made up of young adults and children both male and female who will put on a show that will see your guests clapping, whistling and dancing along to. </p>\r\n			\r\n<p> Our dancers have performed at weddings, private parties, festivals and corporate events. The average size of the Mauritian Dancers group is 5-7 but this can vary dependant on your requirements. Their performance is ideal for during dinner entertainment and the dancers will also provide an energetic grand entrance for the Bride & Groom at weddings. Call and speak to one of our expert staff who will tell you more about this great dance group. </p>', 'Kindly please check on our web', 0, 0, 0, 0, 0, '2016-12-21', 'ENTERTAINMENT-1', 'active'),
(12, '', 'Balgobin road, Pamplemousses', 59105422, 'photography', 'girishphoto1345', 'GIRISH BALLGOBIN PHOTOGRAPHY', 'https://photographer.mu/page/3/?pages-list ', 'https://africa.facebook.com/GirishBallgobinPhotography/reviews/', '<p> The only thing that lasts longer than the memories from your wedding day are the photos, so you need to invest in truly perfect pictures. This means framing the bride just right, showing off your love in the cutest ways, letting the groom have fun, and making sure all the family get camera time.   </p>\r\n			\r\n<p> We know the camera angles to take and we''ve identified the important wedding events for each of the ceremonies. Being specialists in Indian Wedding Photography, we will capture every important moment, making both the couple and their families happy with the wedding photos, the wedding albums, and the overall experience with Girish Ballgobin Photography.</p>', 'as from ''MUR'' Rs 6000', 0, 0, 0, 0, 0, '2016-12-21', 'PHOTOGRAPHY-1', 'active'),
(13, '', 'L''escalier rd, Plaine Magnien', 59207990, 'transport', 'vipcars1345', 'VIP WEDDING CARS', 'www.vipweddingcars.co.uk/ ', ' 	https://www.facebook.com/belleweddingcar/ ', '<h2>About</h2>\r\n<p>VIP Wedding Cars specializes in car rental and transport services in Mauritius. As a quality leader in the vehicle rental industry, we offer the widest range of vehicles available in Mauritius. </p>\r\n			\r\n<p>Our wide range of vehicles offers you maximum flexibility and availability; ranging from the Economy car to family car and other prestige cars with drivers. All cars are	    air-conditioned and maintained regularly to provide our highest level of service and 	ensure your safety and your peace of mind.</p>', '''MUR'' as from Rs 3000', 0, 0, 0, 0, 0, '2016-12-21', 'TRANSPORT-1', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(9) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date_added` date NOT NULL,
  `partnername` varchar(50) NOT NULL,
  `weddingdate` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `email`, `password`, `date_added`, `partnername`, `weddingdate`, `location`, `contact`, `photo`) VALUES
(1, 'Jeeya Gayan', 'jeeyaS', 'jeeya123@gmail.com', '123Jeeya', '2017-04-17', 'hj', '2017-12-12', 'Savanne road, nouvelle-france', 57847584, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
`user_log_id` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `login_date` varchar(20) NOT NULL,
  `logout_date` varchar(20) NOT NULL,
  `user_id` int(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `user_id`) VALUES
(1, 'admin', '2017-04-25 10:28:01', '2017-05-24 11:04:06', 0),
(2, 'admin', '2017-05-07 09:07:25', '2017-05-24 11:04:06', 0),
(3, 'admin', '2017-05-07 09:13:19', '2017-05-24 11:04:06', 0),
(4, 'admin', '2017-05-08 09:12:34', '2017-05-24 11:04:06', 0),
(5, 'admin', '2017-05-19 10:21:30', '2017-05-24 11:04:06', 0),
(6, 'admin', '2017-05-19 10:55:09', '2017-05-24 11:04:06', 0),
(7, 'admin', '2017-05-19 11:07:57', '2017-05-24 11:04:06', 0),
(8, 'admin', '2017-05-22 09:53:01', '2017-05-24 11:04:06', 0),
(9, 'admin', '2017-05-22 11:01:28', '2017-05-24 11:04:06', 0),
(10, 'admin', '2017-05-23 13:46:35', '2017-05-24 11:04:06', 0),
(11, 'admin', '2017-05-24 10:07:50', '2017-05-24 11:04:06', 0),
(12, 'admin', '2017-05-24 10:07:55', '2017-05-24 11:04:06', 0),
(13, 'admin', '2017-05-24 10:13:38', '2017-05-24 11:04:06', 0),
(14, 'admin', '2017-05-24 11:05:55', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `venue3bookings`
--

CREATE TABLE IF NOT EXISTS `venue3bookings` (
`id` int(11) NOT NULL,
  `supplier_id` int(15) NOT NULL DEFAULT '7',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block',
  `user_id` int(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `guests` int(100) NOT NULL,
  `hour` int(11) NOT NULL,
  `minutes` varchar(11) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `confirmation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `venue4bookings`
--

CREATE TABLE IF NOT EXISTS `venue4bookings` (
`id` int(11) NOT NULL,
  `supplier_id` int(15) NOT NULL DEFAULT '8',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block',
  `user_id` int(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `guests` int(100) NOT NULL,
  `hour` int(11) NOT NULL,
  `minutes` varchar(11) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `confirmation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `weddingplusbookings`
--

CREATE TABLE IF NOT EXISTS `weddingplusbookings` (
`id` int(11) NOT NULL,
  `supplier_id` int(15) NOT NULL DEFAULT '2',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block',
  `user_id` int(15) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `vlocation` varchar(100) NOT NULL,
  `hour` int(11) NOT NULL,
  `minutes` varchar(11) NOT NULL,
  `deal` text NOT NULL,
  `guests` int(100) NOT NULL,
  `chairs` int(100) NOT NULL,
  `tables` int(100) NOT NULL,
  `style` varchar(50) NOT NULL,
  `types` varchar(50) NOT NULL,
  `instruction` varchar(500) NOT NULL,
  `confirmation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aubineauxbookings`
--
ALTER TABLE `aubineauxbookings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cakemaker`
--
ALTER TABLE `cakemaker`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carsbookings`
--
ALTER TABLE `carsbookings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catererbookings`
--
ALTER TABLE `catererbookings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checklist`
--
ALTER TABLE `checklist`
 ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `floralbookings`
--
ALTER TABLE `floralbookings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kvsbookings`
--
ALTER TABLE `kvsbookings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `longbeachbookings`
--
ALTER TABLE `longbeachbookings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musicbookings`
--
ALTER TABLE `musicbookings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photosbookings`
--
ALTER TABLE `photosbookings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
 ADD PRIMARY KEY (`posid`), ADD UNIQUE KEY `posid` (`posid`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
 ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
 ADD PRIMARY KEY (`user_log_id`);

--
-- Indexes for table `venue3bookings`
--
ALTER TABLE `venue3bookings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue4bookings`
--
ALTER TABLE `venue4bookings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weddingplusbookings`
--
ALTER TABLE `weddingplusbookings`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `aubineauxbookings`
--
ALTER TABLE `aubineauxbookings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cakemaker`
--
ALTER TABLE `cakemaker`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `carsbookings`
--
ALTER TABLE `carsbookings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `catererbookings`
--
ALTER TABLE `catererbookings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `checklist`
--
ALTER TABLE `checklist`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `email_id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `floralbookings`
--
ALTER TABLE `floralbookings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kvsbookings`
--
ALTER TABLE `kvsbookings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `longbeachbookings`
--
ALTER TABLE `longbeachbookings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `musicbookings`
--
ALTER TABLE `musicbookings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photosbookings`
--
ALTER TABLE `photosbookings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
MODIFY `supplier_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
MODIFY `user_log_id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `venue3bookings`
--
ALTER TABLE `venue3bookings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `venue4bookings`
--
ALTER TABLE `venue4bookings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `weddingplusbookings`
--
ALTER TABLE `weddingplusbookings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
