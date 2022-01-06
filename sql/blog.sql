-- Database: `blog`
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Inserting data for table `admin`
-- admin =>email: "admin@gmail.com" password: "12345678"

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `creationdate`, `updationdate`) VALUES
(1, 'admin', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-01-05 17:36:19', NULL);

-- Table structure for table `pages`

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `pagename` varchar(30) NOT NULL,
  `pagetype` varchar(10) NOT NULL,
  `description` longtext NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Inserting data for table `pages`

INSERT INTO `pages` (`id`, `pagename`, `pagetype`, `description`, `creationdate`, `updationdate`) VALUES
(1, 'About Us', 'aboutus', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\",', '2019-11-14 17:34:09', NULL),
(2, 'Contact Us', 'contactus', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2019-11-14 17:34:09', NULL);

-- Table structure for table `posts`

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `grabber` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `username` varchar(255) NOT NULL,
  `image1` varchar(120) NOT NULL,
  `userid` bigint(255) DEFAULT NULL,
  `creationdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Inserting data for table `posts`

INSERT INTO `posts` (`id`, `title`, `grabber`, `category`, `description`, `username`, `image1`, `userid`, `creationdate`, `updationdate`, `status`) VALUES
(5, 'Test003', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.', 'user 12345', '', 0, '2021-01-05 17:36:19', '2021-01-05 17:36:19', 2),
(8, 'Why\'d You Only Call Me When You\'re High', 'But I must explain to you how all this mistaken idea', '3', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', 'Ashraf Kabir', '69163662_2320677817979909_7944246629106712576_n.jpg', 2, '2021-01-05 17:36:19', '2021-01-05 17:36:19', 1),
(11, 'Crazy People all around', 'This is a grabber.', '3', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'Ashraf Kabir', '75388435_438957723474384_4500176611450028032_o.jpg', 2, '2019-11-14 19:05:42', '2019-11-15 14:38:22', 1),
(12, 'Post Six', 'This is a grabber.', '2', 'Something', 'Ashraf Kabir', '', 2, '2021-01-05 17:36:19', '2021-01-05 17:36:19', 1),
(13, 'Lorem ipsum dolor sit amet', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', '3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Ashraf Kabir', '', 2, '2021-01-05 17:36:19', '2021-01-05 17:36:19', 1),
(14, 'Sit amet consectetur adipiscing elit duis', 'Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque', '1', 'Nunc mi ipsum faucibus vitae aliquet nec ullamcorper. Non curabitur gravida arcu ac tortor dignissim. Lectus sit amet est placerat in egestas. Arcu non sodales neque sodales. Sed id semper risus in hendrerit. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. Lorem ipsum dolor sit amet consectetur adipiscing. In tellus integer feugiat scelerisque varius. Dignissim convallis aenean et tortor at risus viverra adipiscing at. Nisi est sit amet facilisis magna. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Sit amet consectetur adipiscing elit duis. Neque egestas congue quisque egestas. Feugiat nisl pretium fusce id velit ut tortor. Ipsum faucibus vitae aliquet nec ullamcorper sit amet.', 'Ashraf Kabir', '', 2, '2021-01-05 17:36:19', '2021-01-05 17:36:19', 1),
(15, 'Ullamcorper sit amet risus nullam eget felis eget', 'Magna ac placerat vestibulum lectus mauris', '2', 'Venenatis cras sed felis eget velit aliquet. Volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris. Amet dictum sit amet justo donec enim. Cras semper auctor neque vitae tempus quam pellentesque nec nam. Rutrum tellus pellentesque eu tincidunt tortor. Eros in cursus turpis massa. Mattis molestie a iaculis at erat pellentesque. Non pulvinar neque laoreet suspendisse interdum consectetur libero id. Congue eu consequat ac felis donec. Elementum eu facilisis sed odio morbi quis commodo. Habitant morbi tristique senectus et netus et malesuada. Diam quis enim lobortis scelerisque fermentum. Magna ac placerat vestibulum lectus mauris. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Commodo viverra maecenas accumsan lacus vel facilisis. Sit amet porttitor eget dolor morbi non. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Felis imperdiet proin fermentum leo vel. Ullamcorper sit amet risus nullam eget felis eget.', 'Ashraf Kabir', '', 2, '2021-01-05 17:36:19', '2021-01-05 17:36:19', 1);



-- Indexes for table `admin`
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

-- Indexes for table `pages`
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

-- Indexes for table `posts`
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);
-- AUTO_INCREMENT for table `admin`
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
-- AUTO_INCREMENT for table `pages`
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
-- AUTO_INCREMENT for table `posts`
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

