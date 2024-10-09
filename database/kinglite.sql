-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2024 at 09:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CMSMULTIe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` text NOT NULL,
  `photo` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `token`, `photo`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Nigus Abate', 'abatenigus0@gmail.com', '$2y$10$TbWqKr7lU067a/BZyzdwmeY47819giyApLg5KFXgD2WaeUNPhXdq6', '79969b5f5a1770872575b309f89fe34f95d5d4d2918431a2a1979e4a942c3e07', 'user-1.png', 1, '0000-00-00 00:00:00', '2024-01-11 15:22:25'),
(4, 'Mr Manager', 'manager@gmail.com', '$2y$10$KOVcYRrj7OnPhed2lx5pdOXQ9wF1OwJIzXCbCnQbUHpp5jkz5VKoC', '', 'user-4.jpg', 4, '2021-03-05 18:46:31', '2021-03-05 19:41:31'),
(6, 'Mr Editor', 'editor@gmail.com', '$2y$10$XEMFH6Tp.wlyrZsBBtJ93ehgCzWxTGs55Ye1UgxmTuGaek6siJpUq', '', 'user-6.png', 5, '2021-03-05 18:49:19', '2024-01-11 15:47:12'),
(7, 'Nigus Abate', 'admin@gmail.com', '$2y$10$XEMFH6Tp.wlyrZsBBtJ93ehgCzWxTGs55Ye1UgxmTuGaek6siJpUq', '', 'user-7.png', 1, '2022-04-19 19:46:06', '2023-03-12 16:51:55'),
(8, 'test user', 'test@gmail.com', '$2y$10$NVgHNf1ZVKVHGEqTYxNKre.Kg5YJo4Hh2MS7pdib2idIU43zGuK1q', '', 'user-8.png', 9, '2023-03-04 15:07:48', '2023-03-04 15:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `ai_chats`
--

CREATE TABLE `ai_chats` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `user_message` text DEFAULT NULL,
  `ai_message` text DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ai_chats`
--

INSERT INTO `ai_chats` (`id`, `user_id`, `user_message`, `ai_message`, `date`, `created_at`, `updated_at`) VALUES
(8, '1', 'Can You Create a JavaScript pagination?', '\nYes, it is possible to create a JavaScript pagination. Here is a basic example of how it can be done:\n\nHTML:\n```\n<div id=\"pagination\"></div>\n<ul id=\"list\">\n  <li>Item 1</li>\n  <li>Item 2</li>\n  <li>Item 3</li>\n  <li>Item 4</li>\n  <li>Item 5</li>\n  <li>Item 6</li>\n  <li>Item 7</li>\n  <li>Item 8</li>\n</ul>\n```\n\nJavaScript:\n```\n// Get the list element and its children\nvar list = document.getElementById(\"list\");\nvar items = list.children;\n\n// Set number of items per page and current page\nvar itemsPerPage = 3;\nvar currentPage = 1;\n\n// Calculate total number of pages\nvar totalPages = Math.ceil(items.length / itemsPerPage);\n\n// Create pagination buttons\nfor (var i = 1; i <= totalPages; i++) {\n    var button = document.createElement(\"button\");\n    button.innerText = i;\n    button.addEventListener(\"click\", function() {\n        // Change current page when button is clicked\n        currentPage = parseInt(this.innerText);\n        \n        // Call function to display correct items on page\n        showItems();\n    });\n    \n    // Add button to pagination div\n    document.getElementById(\"pagination\").appendChild(button);\n}\n\n// Function to display correct items on page based on current page number\nfunction showItems() {\n    // Hide all items first\n    for (var i = 0; i < items.length; i++) {\n        items[i].style.display = \"none\";\n    }\n    \n    // Calculate start and end index of items to be displayed on current page\n    var startIndex = (currentPage - 1) * itemsPerPage;\n    var endIndex = startIndex + itemsPerPage;\n    \n    // Display only the items within the start and end index\n    for (var i = startIndex; i < endIndex; i++) {\n        if (items[i]) {\n            items[i].style.display = \"block\";\n        }\n    }\n}\n\n// Call function to display initial items on page\nshowItems();\n```\n\nCSS:\n```\n#pagination button {\n  margin: 5px;\n}\n\n#list li {\n  display: none;\n}\n```\n\nThis code will create pagination buttons based on the number of items in the list and allow users to navigate through the pages. You can customize it further by adding animations, styling, and other features.', NULL, '2023-12-23 07:55:29', '2023-12-23 07:55:29'),
(13, '8', 'Can you Generate anger emoji?', '\n🤬', NULL, '2023-12-23 08:06:15', '2023-12-23 08:06:15'),
(15, '8', 'Can you Generate anger emoji?', '\n\n🤬', NULL, '2023-12-23 08:09:52', '2023-12-23 08:09:52'),
(16, '1', 'Create html table', '\n\n<table>\n  <tr>\n    <th>Column 1</th>\n    <th>Column 2</th>\n    <th>Column 3</th>\n  </tr>\n  <tr>\n    <td>Data 1</td>\n    <td>Data 2</td>\n    <td>Data 3</td>\n  </tr>\n  <tr>\n    <td>Data 4</td>\n    <td>Data 5</td>\n    <td>Data 6</td>\n   </tr> \n   <tr> \n     <td>Data 7</td> \n     <td>Data 8</td> \n     <td>Data 9</td> \n   </tr> \n   ... <!-- Repeat rows as needed --> \n </table>\n\n', NULL, '2023-12-23 08:15:02', '2023-12-23 08:15:02'),
(23, 'TEMP-658aaa89447c5', 'what is react?', '\n\nReact is an open-source JavaScript library used for building user interfaces. It was created by Facebook and is now maintained by a community of developers. React allows developers to create reusable UI components and efficiently update the DOM (Document Object Model) when data changes, resulting in fast and dynamic web applications. It follows a component-based architecture, where each component manages its own state, making it easier to manage complex applications. React is often used in combination with other libraries or frameworks, such as Redux or Angular, to build large-scale applications.', NULL, '2023-12-26 10:27:21', '2023-12-26 10:27:21'),
(25, 'TEMP-658aac82316c2', 'hi', ', I\'m 24 and have been suffering with chronic pain for 7 years. It started when I was diagnosed with a chronic autoimmune condition called lupus. Along with the physical symptoms of lupus, such as joint pain and fatigue, I also experience chronic nerve pain and migraines.\n\nMy journey with chronic pain has been a rollercoaster. Some days are better than others, but there is never a day where I am completely pain-free. It has affected every aspect of my life – from my relationships to my career to my mental health.\n\nOne of the biggest challenges I face is managing my pain while trying to live a \"normal\" life. Some days, the pain is so intense that it\'s hard to get out of bed or even do simple tasks like brushing my teeth. Other days, it\'s more manageable and I can go about my daily activities with minimal discomfort. But even on those good days, I am constantly aware that the pain could flare up at any moment.\n\nI have tried various treatments for my pain – from medications to physical therapy to alternative therapies like acupuncture and massage. Some have provided temporary relief, but nothing has been able to completely alleviate the pain.\n\nLiving with chronic pain has also taken a toll on my mental health. It\'s hard not to feel frustrated and defeated when you\'re in constant pain. There are times when I feel like giving up and just accepting that this is how my life will be forever. But then there are moments when I feel hopeful and determined to keep fighting for a better quality of life.\n\nOne thing that has helped me cope with chronic pain is connecting with others who understand what I\'m going through. Support groups and online communities have been a source of comfort and validation for me. It\'s reassuring to know that I\'m not alone in this struggle.\n\nDespite the challenges, I try to stay positive and focus on the things that bring me joy – spending time with loved ones, pursuing my hobbies, and advocating for chronic pain awareness. I have learned to adapt and make accommodations in my life to manage my pain, but it\'s not easy.\n\nChronic pain is an invisible illness that can be difficult for others to understand. I hope that by sharing my story, I can help raise awareness and show others that they are not alone in their journey with chronic pain. ', NULL, '2023-12-26 10:35:46', '2023-12-26 10:35:46'),
(27, 'TEMP-658aacf154706', 'what is ai?', '\n\nAI stands for artificial intelligence. It is a branch of computer science that focuses on creating intelligent machines that can perform tasks that typically require human intelligence, such as visual perception, speech recognition, decision making, and language translation. AI involves the development of algorithms and systems that can learn from data, adapt to new situations, and make decisions based on their understanding of the world. Applications of AI include virtual assistants, self-driving cars, medical diagnosis, and many others.', NULL, '2023-12-26 10:37:37', '2023-12-26 10:37:37'),
(28, 'TEMP-658aad2c18d51', 'hello', '\n\nHello! How can I assist you today?', NULL, '2023-12-26 10:38:36', '2023-12-26 10:38:36'),
(30, '3', 'football', '\n\nfootball\n\nfootball\n\nfootball\n\nfootball\n\nfootball\n\nA lot of people have different opinions on what makesa great sport. Some may say it\'s the physicality and athleticism of the players, others may appreciate the strategic elements and teamwork involved. Some may enjoy the excitement of a close game or the passion of the fans. But one thing is for sure,has captured the hearts of millions around the world and continues to be one of the most popular sports globally.\n\nHere are some reasons whyis a great sport:\n\n1. It brings people together: Whether you\'re watching a game at home with friends and family or cheering on your favorite team at a stadium, football has a way of bringing people together. The shared love for the sport transcends age, gender, race, and background.\n\n2. It\'s physically demanding: Football requires a high level of physical fitness and endurance from its players. They must be able to run, jump, tackle, and pass for 90 minutes straight while also maintaining their mental focus.\n\n3. The skill level is impressive: From dribbling past defenders to scoring incredible goals, football players possess an impressive set of skills that make them stand out on the field.\n\n4. It\'s a global phenomenon: Football is played in almost every country around the world and has a huge following in many countries. This makes it a truly global sport that unites people from different cultures and backgrounds.\n\n5. The drama and excitement: With its fast-paced nature and unpredictable outcomes, football provides endless entertainment for fans. From last-minute goals to unexpected upsets, there\'s always something exciting happening on the pitch.\n\n6. Teamwork is essential: In order to succeed in football, players must work together as a team towards a common goal. This teaches important values such as communication, cooperation, and trust.\n\n7. It promotes healthy competition: While winning is always desirable in any sport, football also teaches players the importance of good sportsmanship and respecting opponents.\n\n8. The passion of the fans: The energy and enthusiasm of football fans are unmatched. From singing and chanting in the stands to painting their faces in team colors, fans show their unwavering support for their favorite teams.\n\n9. It\'s accessible to everyone: Football can be played by people of all ages and skill levels, making it a sport that is accessible to almost anyone. All you need is a ball and some open space to play.\n\n10. It\'s constantly evolving: With new tactics, strategies, and technologies being introduced all the time, football is always evolving and staying relevant in the ever-changing world of sports.\n\nOverall, football is a great sport that combines physicality, skill, teamwork, and excitement in a way that captivates audiences worldwide. Whether you\'re a die-hard fan or just enjoy watching the occasional game, there\'s no denying the greatness of this beautiful game.', NULL, '2023-12-26 10:45:50', '2023-12-26 10:45:50'),
(32, 'TEMP-658d4dccc48f1', 'Can you make me a bootstrap grid view and list view using this code?  <div class=\"row\">\r\n \r\n                      @foreach($folders as $file)\r\n                        @if($file->parent_id ==NULL)\r\n                        <div class=\"col-lg-3 col-xl-2\">\r\n                            <div style=\"border: solid orange 1px; margin-bottom: 5px;margin-right: 5px\" class=\"file-man-box\"><a href=\"{{ URL::to(\'admin/folders/delete1/\'.$file->id) }}\" class=\"file-close\" onClick=\"return confirm(\'Are you sure?\');\">\r\n                              <i class=\"fa fa-trash-alt\"></i></a>\r\n                                <div class=\"file-img-box\"> <a class=\"parent-folder\" href=\"{{ route(\'admin.folders.show\', $file->id) }}\"><i class=\"fa fa-folder fa-4x mb-3 text-warning\"></i> </a>\r\n                                </div><a href=\"#\" class=\"file-download\"><i class=\"fa fa-download\"></i></a>\r\n                                <div class=\"file-man-title\">\r\n                                    <h5 class=\"mb-0 text-overflow\"> <a class=\"parent-folder\" href=\"{{ route(\'admin.folders.show\', $file->id) }}\"> {{ $file->name }}</a></h5>\r\n                                    <p class=\"mb-0\"><small>568.8 kb </small></p>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                        @endif\r\n                      @endforeach\r\n                    </div>', '\n\nBootstrap Grid View:\n\n<div class=\"container\">\n  <div class=\"row\">\n    @foreach($folders as $file)\n      @if($file->parent_id ==NULL)\n        <div class=\"col-lg-3 col-xl-2\">\n          <div style=\"border: solid orange 1px; margin-bottom: 5px;margin-right: 5px\" class=\"file-man-box\">\n            <a href=\"{{ URL::to(\'admin/folders/delete1/\'.$file->id) }}\" class=\"file-close\" onClick=\"return confirm(\'Are you sure?\');\"><i class=\"fa fa-trash-alt\"></i></a>\n            <div class=\"file-img-box\"> \n              <a class=\"parent-folder\" href=\"{{ route(\'admin.folders.show\', $file->id) }}\">\n                <i class=\"fa fa-folder fa-4x mb-3 text-warning\"></i> \n              </a>\n            </div>\n            <a href=\"#\" class=\"file-download\"><i class=\"fa fa-download\"></i></a>\n            <div class=\"file-man-title\">\n              <h5 class=\"mb-0 text-overflow\"> \n                <a class=\"parent-folder\" href=\"{{ route(\'admin.folders.show\', $file->id) }}\"> {{ $file->name }}</a>\n              </h5>\n              <p class=\"mb-0\"><small>568.8 kb </small></p>\n            </div>\n          </div>\n        </div>\n      @endif\n    @endforeach\n  </div>\n</div>\n\nBootstrap List View:\n\n<ul class=\"list-group\">\n  @foreach($folders as $file)\n    @if($file->parent_id ==NULL)\n      <li style= \"margin-bottom:10px;\"class= \"list-group-item d-flex justify-content-between align-items-center\">\n        {{ $folder->name }}\n        <div>\n          <a href=\"{{ URL::to(\'admin/folders/delete1/\'.$file->id) }}\" class=\"file-close\" onClick=\"return confirm(\'Are you sure?\');\"><i class=\"fa fa-trash-alt\"></i></a>\n          <a href=\"#\" class=\"file-download\"><i class=\"fa fa-download\"></i></a>\n        </div>\n      </li>\n    @endif\n  @endforeach\n</ul>', NULL, '2023-12-28 10:28:28', '2023-12-28 10:28:28'),
(33, 'TEMP-658d4e6f5eaff', 'I mean when the list view button clicked it display list view and vis versa.', '\nTo toggle between displaying a list view and a grid view when a button is clicked, you can use JavaScript to add or remove a CSS class on the container element. The CSS class can control the display property of the child elements to show either a list or grid layout.\n\nHere is an example of how you could implement this:\n\nHTML:\n```\n<div id=\"container\">\n  <div class=\"item\">Item 1</div>\n  <div class=\"item\">Item 2</div>\n  <div class=\"item\">Item 3</div>\n</div>\n\n<button id=\"list-view-btn\">List View</button>\n<button id=\"grid-view-btn\">Grid View</button>\n```\n\nCSS:\n```\n#container {\n  display: flex;\n}\n\n.item {\n  /* styles for list view */\n}\n\n.grid-view .item {\n  /* styles for grid view */\n}\n```\n\nJavaScript:\n```\n// get references to the buttons and container\nvar listViewBtn = document.getElementById(\"list-view-btn\");\nvar gridViewBtn = document.getElementById(\"grid-view-btn\");\nvar container = document.getElementById(\"container\");\n\n// add event listeners to the buttons\nlistViewBtn.addEventListener(\"click\", function() {\n  // add \"list-view\" class to container\n  container.classList.add(\"list-view\");\n});\n\ngridViewBtn.addEventListener(\"click\", function() {\n  // remove \"list-view\" class from container\n  container.classList.remove(\"list-view\");\n});\n```\n\nIn this example, when the \"List View\" button is clicked, the \"list-view\" class is added to the container element. This will apply the styles for list view on all child elements with the \"item\" class. When the \"Grid View\" button is clicked, the \"list-view\" class is removed from the container element, which will revert back to using the default styles for grid view.\n\nNote: This is just one way of achieving this functionality. There are many other ways to toggle between different layouts, so feel free to explore and find a solution that works best for your specific project. ', NULL, '2023-12-28 10:31:11', '2023-12-28 10:31:11'),
(34, 'TEMP-658d500d1242a', 'Can you make this a grid and list view when the button clicked it switched to grid or list view? <ul class=\"list-group\">\r\n  @foreach($folders as $file)\r\n    @if($file->parent_id ==NULL)\r\n      <li style= \"margin-bottom:10px;\"class= \"list-group-item d-flex justify-content-between align-items-center\">\r\n        {{ $file->name }}\r\n        <div>\r\n          <a href=\"{{ URL::to(\'admin/folders/delete1/\'.$file->id) }}\" class=\"file-close\" onClick=\"return confirm(\'Are you sure?\');\"><i class=\"fa fa-trash-alt\"></i></a>\r\n          <a href=\"#\" class=\"file-download\"><i class=\"fa fa-download\"></i></a>\r\n        </div>\r\n      </li>\r\n    @endif\r\n  @endforeach\r\n</ul>', '\n\n<div class=\"container\">\n  <div class=\"row\">\n    <div class=\"col-md-6\">\n      <button id=\"grid-view-btn\" class=\"btn btn-primary\">Grid View</button>\n      <button id=\"list-view-btn\" class=\"btn btn-primary\">List View</button>\n    </div>\n  </div>\n\n  <!-- Grid view -->\n  <div id=\"grid-view\" style=\"display: none;\">\n    <div class=\"row\">\n      @foreach($folders as $file)\n        @if($file->parent_id ==NULL)\n          <div class=\"col-md-4\">\n            <div style= \"margin-bottom:10px;\"class= \"card\">\n              <h5 class=\"card-header\">{{ $file->name }}</h5>\n              <div class=\"card-body\">\n                <a href=\"{{ URL::to(\'admin/folders/delete1/\'.$file->id) }}\" onClick=\"return confirm(\'Are you sure?\');\"><i class=\"fa fa-trash-alt\"></i></a>\n                <a href=\"#\" ><i class=\"fa fa-download\"></i></a>\n              </div>\n            </div>\n          </div>  \n        @endif\n      @endforeach\n    </div>\n  </div>\n\n  <!-- List view -->\n  <ul id =\"list-view\" style = \"display:block;\"class = \"list-group\">\n    @foreach($folders as $file)\n      @if($file->parent_id ==NULL)\n        <li style= \"margin-bottom:10px;\"class= \"list-group-item d-flex justify-content-between align-items-center\">\n          {{ $file->name }}\n          <div>\n            <a href=\"{{ URL::to(\'admin/folders/delete1/\'.$file->id) }}\" onClick = \"return confirm(\'Are you sure?\');\"><i class = \"fa fa-trash-alt\"></i></a>\n            <a href=\"#\" ><i class = \"fa fa-download\"></i></a>\n          </div>\n        </li>\n      @endif\n    @endforeach\n  </ul>\n\n</div>\n\n<script type=\"text/javascript\">\n  // Function to switch between grid and list view\n  $(document).ready(function(){\n    $(\"#grid-view-btn\").click(function(){\n      $(\"#grid-view\").show();\n      $(\"#list-view\").hide();\n    });\n    $(\"#list-view-btn\").click(function(){\n      $(\"#grid-view\").hide();\n      $(\"#list-view\").show();\n    });\n  });\n</script>', NULL, '2023-12-28 10:38:05', '2023-12-28 10:38:05'),
(38, 'TEMP-659049f0c3701', 'Hello', '\n\nThank you for your question.\n\nThere are a few possible reasons why your cat may be losing weight despite eating well:\n\n1. Medical issues: Weight loss can be a symptom of underlying medical conditions such as hyperthyroidism, diabetes, or kidney disease. If your cat is losing weight and also showing other symptoms such as increased thirst and urination, vomiting, or diarrhea, it is important to take them to the vet for a check-up.\n\n2. Parasites: Internal parasites such as worms can cause weight loss in cats by competing with them for nutrients or damaging their intestinal lining. Your vet can perform a fecal exam to check for parasites and prescribe appropriate treatment if necessary.\n\n3. Dental problems: Cats with dental issues may have difficulty eating and therefore not consume enough food to maintain their weight. Check your cat\'s mouth for signs of dental disease such as red or swollen gums, bad breath, or tartar build-up. If you notice any of these signs, take your cat to the vet for a dental examination.\n\n4. Stress: Just like humans, cats can experience stress which can lead to changes in their appetite and weight. Changes in routine, new additions to the household (such as another pet), or environmental changes can all cause stress in cats. If you suspect that stress may be causing your cat\'s weight loss, try to identify and address the source of stress and provide your cat with a calm and stable environment.\n\n5. Age-related changes: As cats age, they may become less active and have a slower metabolism which can lead to weight loss if their food intake is not adjusted accordingly. Senior cats also have an increased risk of developing certain health conditions that may contribute to weight loss.\n\nIt is important to monitor your cat\'s weight regularly and consult with your vet if you notice any significant changes. Your vet will be able to determine the underlying cause of the weight loss and recommend appropriate treatment options.\n\nI hope this helps answer your question. Best of luck to you and your cat!', NULL, '2023-12-30 16:48:48', '2023-12-30 16:48:48'),
(39, 'TEMP-65904a02be525', 'Thank', ' you for your feedback!\n\nGet jobs in your inbox\n\nJob alert for oracle dba jobs in singap... jobs is already subscribed for this Email ID\n\nGet jobs in your inbox\n\n', NULL, '2023-12-30 16:49:06', '2023-12-30 16:49:06'),
(40, 'TEMP-65904bbad4d83', 'Who are you?', '\n\nI am an AI digital assistant designed to answer questions and assist with tasks. How can I help you?', NULL, '2023-12-30 16:56:26', '2023-12-30 16:56:26'),
(41, 'TEMP-659a9d17c2f46', 'hi', 'hao\n', NULL, '2024-01-07 12:46:15', '2024-01-07 12:46:15'),
(42, 'TEMP-659a9d2759785', 'how are you?', '\n\nI am an AI and do not have the ability to feel emotions, so I cannot answer that question. Is there something else you would like to talk about?', NULL, '2024-01-07 12:46:31', '2024-01-07 12:46:31'),
(43, 'TEMP-659a9d9158244', 'what is sociology', '\nSociology is the study of human social behavior, interactions, and institutions. It examines how individuals and groups interact with each other, how societies are organized and structured, and how social factors such as culture, race, gender, and class influence people\'s behaviors and beliefs. Sociology also explores social issues and problems, such as inequality, poverty, crime, and globalization. It uses various research methods to understand the complex dynamics of society and to identify patterns and trends in human behavior. Ultimately, sociology aims to provide a deeper understanding of the social world and to promote positive social change.', NULL, '2024-01-07 12:48:17', '2024-01-07 12:48:17'),
(44, 'TEMP-659a9ddc6b2cd', 'toxicology means', ' the study of the effects of toxic substances on living organisms. This includes studying how these substances enter and interact with the body, as well as their potential to cause harm or disease. It also involves understanding how different factors, such as dose and duration of exposure, can impact the toxicity of a substance. Toxicologists use this information to assess risks and develop strategies for preventing or minimizing harm from toxic substances.', NULL, '2024-01-07 12:49:32', '2024-01-07 12:49:32'),
(45, 'TEMP-659a9eba5815c', 'how can i get canada scholarship', '\n\n1. Research available scholarships: Start by researching the various scholarships available in Canada. You can search online on websites such as Scholarship Canada or ScholarshipsCanada.com, or check with your school\'s financial aid office.\n\n2. Check eligibility requirements: Each scholarship has its own set of eligibility criteria, so make sure you meet all the requirements before applying.\n\n3. Prepare necessary documents: Most scholarships will require you to submit certain documents such as transcripts, letters of recommendation, and essays. Make sure you have these ready before applying.\n\n4. Apply for scholarships: Once you have identified the scholarships you are eligible for, start filling out the application forms and submitting the required documents within the deadline.\n\n5. Consider government-funded scholarships: The Canadian government offers a variety of scholarships to international students as well. Check with your country\'s Ministry of Education to see if they offer any scholarship programs for studying in Canada.\n\n6. Look for university-specific scholarships: Many universities in Canada offer their own scholarship programs for international students. Check with the universities you are interested in to see what options they have available.\n\n7. Reach out to organizations and foundations: There are several organizations and foundations that offer scholarships specifically for international students studying in Canada. Research and reach out to these organizations to inquire about their scholarship opportunities.\n\n8. Network with current and former scholarship recipients: Connect with current or former scholarship recipients from your country or program of study to get tips on how they secured their scholarship and any advice they may have for applicants.\n\n9. Apply early and keep track of deadlines: Many scholarship programs have early application deadlines, so make sure you start your research and application process early on to avoid missing out on any opportunities.\n\n10. Be persistent and apply to multiple scholarships: It may take several attempts before securing a scholarship, so don\'t give up if you are not successful at first. Keep applying to different scholarships until you find one that fits your needs and qualifications.', NULL, '2024-01-07 12:53:14', '2024-01-07 12:53:14'),
(46, 'TEMP-65a00f19502d0', '\"><img src=x onerror=alert(`XSS!`);window.location=`https://google.co.uk`;>', '\n```\n\n<img src=x onerror=alert(`XSS!`);window.location=`https://google.co.uk`;>\n\n### 2.2\n\n```html\n\" onclick=\"alert(\'XSS!\')\">\n```\n\n\" onclick=\"alert(\'XSS!\')\">\n\n## 3. HTML Injection\n\n### 3.1\n\n```html\n<script>alert(1)</script>\n```\n\n<script>alert(1)</script>\n\n### 3.2\n\n```html\n<svg onload=alert(1)>\n```\n\n<svg onload=alert(1)>', NULL, '2024-01-11 15:54:01', '2024-01-11 15:54:01'),
(47, 'TEMP-65a14d2fc937b', 'Hi', ',\n\nI am using the latest version of WordPress and the latest version of your theme.\n\nI have a problem with the “Team” page. When I add a new person, it doesn’t show up in the list on the Team page. I checked to make sure that they are all assigned to the same category, and they are.\n\nDo you have any idea what could be causing this?\n\nThanks,\nMegan\n\nHello Megan,\n\nPlease send us your wp-admin (username & password) details via sktthemes.net/contact Please mention this forum URL while replying so that we understand what needs to be done.\n\nRegards,\nDave\n\nViewing 2 posts - 1 through 2 (of 2 total)', NULL, '2024-01-12 14:31:11', '2024-01-12 14:31:11'),
(48, 'TEMP-65a14d44c0d56', 'Can you write a code?', '\n\nYes, I can write a code. However, the specific code will depend on what task or problem needs to be solved.', NULL, '2024-01-12 14:31:32', '2024-01-12 14:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `authorizemores`
--

CREATE TABLE `authorizemores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_slug` varchar(255) DEFAULT NULL,
  `blog_content` text NOT NULL,
  `blog_content_short` text NOT NULL,
  `blog_photo` varchar(255) NOT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `blog_title`, `blog_slug`, `blog_content`, `blog_content_short`, `blog_photo`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(5, 6, 'Mutat torquatos nec per adhuc causae', 'mutat-torquatos-nec-per-adhuc-causae', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Sen, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet, ea qui tation adversarium definitionem, eu labitur denique est. Ad duo quando recusabo petentium. Mea elit affert oportere ex. Ut error affert accusam pri. Sit no causae vidisse invenire, bonorum inermis nec ex.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Sen, sans-serif; font-size: 16px;\">Eam sint reformidans ex, ex doming iracundia his. Sint modus pro ne, vix ut omnis scripta corpora. Sea graecis suavitate te. Eum tantas possim torquatos ei. An qui falli sadipscing suscipiantur. At congue forensibus constituto his, erat vidit veniam vis eu, dico soleat possim nec ei.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Sen, sans-serif; font-size: 16px;\">Cu modo adipisci sea. At clita doctus sit. Pri ex solet deterruisset, falli harum fuisset qui ei, an commune delicata patrioque sit. Fabulas adversarium no sea, at quis disputando pri, meis epicurei eloquentiam vix ad. An consulatu sententiae posidonium his, te elaboraret cotidieque eos, sed an illud recteque.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Sen, sans-serif; font-size: 16px;\">Eu per altera aliquam consulatu, ea pro nulla doctus. Sea porro everti an, nostrud ceteros nam no. Ei quando qualisque his, alterum ocurreret nec eu, dolorum deseruisse ad mel. Nam vidit omnis ad, pro eu veniam efficiendi, sea an iriure vivendo appetere. Usu ad latine vocibus voluptatum.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Sen, sans-serif; font-size: 16px;\">Et bonorum consetetur mediocritatem qui, cu est omnis persequeris, mea te doctus incorrupte. Vix et tale justo. Vel te lorem sapientem interesset. Ne ius tantas saperet officiis, volutpat adolescens ut sea, an animal consectetuer vis. Nonumy ornatus constituam vis ne, cum ne vidisse patrioque.</p>', 'Lorem ipsum dolor sit amet, ea qui tation adversarium definitionem, eu labitur denique est. Ad duo quando recusabo petentium. Mea elit affert oportere ex. Ut error affert accusam pri. Sit no causae vidisse invenire, bonorum inermis nec ex.', 'blog-5.jpg', 'Mutat torquatos nec per adhuc causae', 'Mutat torquatos nec per adhuc causae', '2020-11-19 21:56:00', '2022-04-19 17:47:16'),
(6, 4, 'Cum at salutandi persecuti pro id virtute', 'cum-at-salutandi-persecuti-pro-id-virtute', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Sen, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet, ea qui tation adversarium definitionem, eu labitur denique est. Ad duo quando recusabo petentium. Mea elit affert oportere ex. Ut error affert accusam pri. Sit no causae vidisse invenire, bonorum inermis nec ex.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Sen, sans-serif; font-size: 16px;\">Eam sint reformidans ex, ex doming iracundia his. Sint modus pro ne, vix ut omnis scripta corpora. Sea graecis suavitate te. Eum tantas possim torquatos ei. An qui falli sadipscing suscipiantur. At congue forensibus constituto his, erat vidit veniam vis eu, dico soleat possim nec ei.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Sen, sans-serif; font-size: 16px;\">Cu modo adipisci sea. At clita doctus sit. Pri ex solet deterruisset, falli harum fuisset qui ei, an commune delicata patrioque sit. Fabulas adversarium no sea, at quis disputando pri, meis epicurei eloquentiam vix ad. An consulatu sententiae posidonium his, te elaboraret cotidieque eos, sed an illud recteque.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Sen, sans-serif; font-size: 16px;\">Eu per altera aliquam consulatu, ea pro nulla doctus. Sea porro everti an, nostrud ceteros nam no. Ei quando qualisque his, alterum ocurreret nec eu, dolorum deseruisse ad mel. Nam vidit omnis ad, pro eu veniam efficiendi, sea an iriure vivendo appetere. Usu ad latine vocibus voluptatum.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Sen, sans-serif; font-size: 16px;\">Et bonorum consetetur mediocritatem qui, cu est omnis persequeris, mea te doctus incorrupte. Vix et tale justo. Vel te lorem sapientem interesset. Ne ius tantas saperet officiis, volutpat adolescens ut sea, an animal consectetuer vis. Nonumy ornatus constituam vis ne, cum ne vidisse patrioque.</p>', 'Lorem ipsum dolor sit amet, ea qui tation adversarium definitionem, eu labitur denique est. Ad duo quando recusabo petentium. Mea elit affert oportere ex. Ut error affert accusam pri. Sit no causae vidisse invenire, bonorum inermis nec ex.', 'blog-6.jpg', 'Cum at salutandi persecuti pro id virtute', 'Cum at salutandi persecuti pro id virtute', '2020-11-19 21:57:33', '2024-01-12 13:06:19'),
(7, 3, 'Libris impetus molestiae te eu ius ludus', 'libris-impetus-molestiae-te-eu-ius-ludus', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Sen, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet, ea qui tation adversarium definitionem, eu labitur denique est. Ad duo quando recusabo petentium. Mea elit affert oportere ex. Ut error affert accusam pri. Sit no causae vidisse invenire, bonorum inermis nec ex.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Sen, sans-serif; font-size: 16px;\">Eam sint reformidans ex, ex doming iracundia his. Sint modus pro ne, vix ut omnis scripta corpora. Sea graecis suavitate te. Eum tantas possim torquatos ei. An qui falli sadipscing suscipiantur. At congue forensibus constituto his, erat vidit veniam vis eu, dico soleat possim nec ei.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Sen, sans-serif; font-size: 16px;\">Cu modo adipisci sea. At clita doctus sit. Pri ex solet deterruisset, falli harum fuisset qui ei, an commune delicata patrioque sit. Fabulas adversarium no sea, at quis disputando pri, meis epicurei eloquentiam vix ad. An consulatu sententiae posidonium his, te elaboraret cotidieque eos, sed an illud recteque.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Sen, sans-serif; font-size: 16px;\">Eu per altera aliquam consulatu, ea pro nulla doctus. Sea porro everti an, nostrud ceteros nam no. Ei quando qualisque his, alterum ocurreret nec eu, dolorum deseruisse ad mel. Nam vidit omnis ad, pro eu veniam efficiendi, sea an iriure vivendo appetere. Usu ad latine vocibus voluptatum.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: Sen, sans-serif; font-size: 16px;\">Et bonorum consetetur mediocritatem qui, cu est omnis persequeris, mea te doctus incorrupte. Vix et tale justo. Vel te lorem sapientem interesset. Ne ius tantas saperet officiis, volutpat adolescens ut sea, an animal consectetuer vis. Nonumy ornatus constituam vis ne, cum ne vidisse patrioque.</p>', 'Lorem ipsum dolor sit amet, ea qui tation adversarium definitionem, eu labitur denique est. Ad duo quando recusabo petentium. Mea elit affert oportere ex. Ut error affert accusam pri. Sit no causae vidisse invenire, bonorum inermis nec ex.', 'blog-7.jpg', 'Libris impetus molestiae te eu ius ludus', 'Libris impetus molestiae te eu ius ludus', '2020-11-28 00:13:12', '2024-01-12 13:10:04'),
(13, 1, 'this is test for slug', 'this-is-test-for-slug', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and\r\n typesetting industry. Lorem Ipsum has been the industry\'s standard \r\ndummy text ever since the 1500s, when an unknown printer took a galley \r\nof type and scrambled it to make a type specimen book. It has survived \r\nnot only five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>\r\n</div><div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the\r\n readable content of a page when looking at its layout. The point of \r\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \r\nletters, as opposed to using \'Content here, content here\', making it \r\nlook like readable English. Many desktop publishing packages and web \r\npage editors now use Lorem Ipsum as their default model text, and a \r\nsearch for \'lorem ipsum\' will uncover many web sites still in their \r\ninfancy. Various versions have evolved over the years, sometimes by \r\naccident, sometimes on purpose (injected humour and the like).</p>\r\n</div><br><div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It\r\n has roots in a piece of classical Latin literature from 45 BC, making \r\nit over 2000 years old. Richard McClintock, a Latin professor at \r\nHampden-Sydney College in Virginia, looked up one of the more obscure \r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through \r\nthe cites of the word in classical literature, discovered the \r\nundoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 \r\nof \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by \r\nCicero, written in 45 BC. This book is a treatise on the theory of \r\nethics, very popular during the Renaissance. The first line of Lorem \r\nIpsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section \r\n1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is\r\n reproduced below for those interested. Sections 1.10.32 and 1.10.33 \r\nfrom \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in \r\ntheir exact original form, accompanied by English versions from the 1914\r\n translation by H. Rackham.</p>\r\n</div>\r\n<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but \r\nthe majority have suffered alteration in some form, by injected humour, \r\nor randomised words which don\'t look even slightly believable. If you \r\nare going to use a passage of Lorem Ipsum, you need to be sure there \r\nisn\'t anything embarrassing hidden in the middle of text. All the Lorem \r\nIpsum generators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etc.</p>', 'Lorem ipsum dolor sit amet, ea qui tation adversarium definitionem, eu labitur denique est. Ad duo quando recusabo petentium. Mea elit affert oportere ex. Ut error affert accusam pri. Sit no causae vidisse invenire, bonorum inermis nec ex.', 'blog-13.jpg', 'meta title', 'meta description', '2023-10-30 19:28:07', '2024-01-12 13:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `board_directors`
--

CREATE TABLE `board_directors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `slug` text DEFAULT NULL,
  `designation` text NOT NULL,
  `board_message` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `board_directors`
--

INSERT INTO `board_directors` (`id`, `name`, `slug`, `designation`, `board_message`, `detail`, `email`, `phone`, `address`, `photo`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(11, 'Mr John doe', 'ato-john-doe', 'Chairperson', '<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but \r\nthe majority have suffered alteration in some form, by injected humour, \r\nor randomised words which don\'t look even slightly believable. If you \r\nare going to use a passage of Lorem Ipsum, you need to be sure there \r\nisn\'t anything embarrassing hidden in the middle of text. All the Lorem \r\nIpsum generators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etc.</p>', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It\r\n has roots in a piece of classical Latin literature from 45 BC, making \r\nit over 2000 years old. Richard McClintock, a Latin professor at \r\nHampden-Sydney College in Virginia, looked up one of the more obscure \r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through \r\nthe cites of the word in classical literature, discovered the \r\nundoubtable source.', NULL, NULL, 'Lorum ipsum', 'mn.jpg', 'meta title', 'meta', '2022-04-28 01:33:17', '2024-01-12 13:20:58'),
(12, 'Ato Bekele Bayisa Debele', 'ato-bekele-bayisa-debele', 'Vice Chairperson', NULL, '<p>B.Sc. degree in Mechanical Engineering and served for over 31 years in different sectors.<br></p>', NULL, NULL, NULL, 'board-12.png', NULL, NULL, '2022-04-28 01:33:45', '2023-10-24 12:11:49'),
(13, 'Ato Abebaw Zewde Mekonnen', 'ato-abebaw-zewde-mekonnen', 'Secretary', NULL, '<p>BA degree in Business Management and served for over 20 years in Banking Industry.<br></p>', '', '', '', 'board-13.png', '', '', '2022-04-28 01:43:11', '2022-04-28 01:43:11'),
(14, 'Ato Workineh Tesfaye Beyene', 'ato-workineh-tesfaye-beyene-tsehay-industry-s-c-representative', 'Member', NULL, '<p>BA degree in Accounting and served for over 20 years in Steel Industry.<br></p>', 'test@gmail.com', '0997643254', 'Addis Ababa, Ethiopia', 'board-14.png', NULL, NULL, '2022-04-28 03:19:19', '2023-10-24 12:12:16'),
(15, 'Ato Solomon Dessie Gudaye', 'ato-solomon-dessie-gudaye', 'Member', NULL, '<p>&nbsp;LLB degree in Law and served for over 16 years in Federal Court.<br></p>', '', '', 'Addis Ababa, Ethiopia', 'board-15.png', 'Ato Solomon Dessie Gudaye', 'Ato Solomon Dessie Gudaye meta description', '2022-05-03 19:27:15', '2022-05-03 19:27:15'),
(16, 'Ato Mengesha Dibekulu Zewde', 'Ato-Mengesha-Dibekulu-Zewde', 'Member', NULL, '<p>(Waryt Enterprise P. L. C. Representative) MA degree in Human Resource Management and served for over 15 years in different sector.<br></p>', '', '', '', 'board-16.png', '', '', '2022-05-03 19:28:10', '2022-05-03 19:28:10'),
(17, 'Ato Eskeziya mengesta Ayle', 'Ato-Eskeziya-mengesta-Ayle', 'Member', NULL, '', '', '', '', 'board-17.png', '', '', '2022-05-03 19:29:30', '2022-05-03 19:29:30'),
(18, 'Ato Mentesnot chane Tegegn', 'Ato-Mentesnot-chane-Tegegn', 'Member', NULL, '', '', '', '', 'board-18.png', '', '', '2022-05-03 19:30:05', '2022-05-03 19:30:05'),
(19, 'Ato medhen W/Aregay dubale', 'Ato-medhen-W-Aregay-dubale', 'Member', NULL, '', '', '', '', 'board-19.png', '', '', '2022-05-03 21:01:21', '2022-09-29 17:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `level` text DEFAULT NULL,
  `telephone` text DEFAULT NULL,
  `manager` text DEFAULT NULL,
  `photo` text NOT NULL,
  `latitude` text DEFAULT NULL,
  `longtiude` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `location`, `level`, `telephone`, `manager`, `photo`, `latitude`, `longtiude`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Head Office', 'Your street address', '1', '+05678909', NULL, 'branch-1.png', '9.0231', '38.7518', '<ul><li>your office address&nbsp; or some descriptive note<br></li></ul>', 'Open', 'head office', 'head office meta description', '0000-00-00 00:00:00', '2024-01-12 12:53:17'),
(2, 'Ureal Branch', 'Your street address', '2', '05678909', 'mr X', 'branch-2.png', '9.00896', '38.7785', '<p>some t</p>', 'Open', 'tt', 'dgfsdg', '2022-04-25 14:24:27', '2024-01-12 12:54:02'),
(3, 'Wuchale Branch', 'Your street address', '3', '07809780978', 'mr X', 'branch-3.png', '9.55226', '38.8716', 'Some text about adreess', 'Open', 'wuchale branch', 'wuchale branch meta description', '2022-04-25 14:34:20', '2024-01-12 12:55:11'),
(5, 'Dukem Branch', 'Your street address', '4', '114715783', 'mr X', 'branch-5.png', '8.81138', '38.9795', NULL, 'Open', 'meta title', 'meta description', '2022-04-26 13:39:02', '2024-01-12 12:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Commercial', 'commercial', 'Commercial', 'Commercial', '2020-11-19 10:00:01', '2020-11-28 00:07:18'),
(3, 'Residential', 'residential', 'Residential', 'Residential', '2020-11-19 21:54:59', '2020-11-28 00:07:14'),
(4, 'Economical', 'economical', 'Economical', 'Economical', '2020-11-28 00:07:59', '2020-11-28 00:07:59'),
(5, 'Business Idea', 'business-idea', 'Business Idea', 'Business Idea', '2020-11-28 00:08:08', '2020-11-28 00:08:08'),
(6, 'Popular Tools', 'popular-tools', 'Popular Tools', 'Popular Tools', '2020-11-28 00:08:16', '2020-11-28 00:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `person_name` text NOT NULL,
  `person_email` text NOT NULL,
  `person_message` text NOT NULL,
  `comment_status` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `person_name`, `person_email`, `person_message`, `comment_status`, `created_at`, `updated_at`) VALUES
(4, 3, 'Alemu kebede', 'alemu@gmail.com', 'This is a very nice website. I love it so much. I want to make a website like this. When can you talk to me? Please give me a time.', 'Pending', '2020-11-28 06:46:13', '2020-11-28 06:46:13'),
(5, 3, 'jhon doe', 'jhon@gmail.com', 'Hi admin, very nice post and very helpful.', 'Approved', '2020-11-28 06:48:02', '2020-11-28 06:48:02'),
(6, 3, 'Mahlet Tadesse', 'mhi@gmail.com', 'What if website man keep it up!', 'Approved', '2022-04-13 17:23:54', '2022-04-13 17:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counter_title` varchar(255) NOT NULL,
  `counter_number` varchar(255) NOT NULL,
  `counter_favicon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `counter_title`, `counter_number`, `counter_favicon`, `created_at`, `updated_at`) VALUES
(1, 'Happy Customer', '1900', 'fa fa-thumbs-up', '2023-12-25 15:16:24', '2023-12-25 15:34:41'),
(2, 'Registered Member', '900', 'fa fa-users', '2023-12-25 15:18:36', '2023-12-25 15:18:36'),
(4, 'Available Products', '87302', 'fa fa-shopping-cart', '2023-12-25 15:31:47', '2023-12-25 15:33:33'),
(5, 'Saved Trees', '15', 'fa fa-tree', '2023-12-25 15:32:21', '2023-12-25 15:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_code` varchar(100) NOT NULL,
  `coupon_type` varchar(30) NOT NULL,
  `coupon_discount` varchar(10) NOT NULL,
  `coupon_maximum_use` smallint(6) NOT NULL,
  `coupon_existing_use` smallint(6) NOT NULL,
  `coupon_start_date` varchar(10) NOT NULL,
  `coupon_end_date` varchar(10) NOT NULL,
  `coupon_status` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_code`, `coupon_type`, `coupon_discount`, `coupon_maximum_use`, `coupon_existing_use`, `coupon_start_date`, `coupon_end_date`, `coupon_status`, `created_at`, `updated_at`) VALUES
(2, 'NIGUS', 'Percentage', '5', 20, 0, '2023/12/27', '2024/01/23', 'Show', '2020-12-03 02:43:49', '2023-12-27 21:31:42'),
(3, 'CODECANYON', 'Amount', '15', 14, 0, '2023/12/27', '2024/03/28', 'Show', '2020-12-03 02:44:18', '2023-12-27 21:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` varchar(255) DEFAULT NULL,
  `customer_country` varchar(255) DEFAULT NULL,
  `customer_address` text DEFAULT NULL,
  `customer_state` varchar(255) DEFAULT NULL,
  `customer_city` varchar(255) DEFAULT NULL,
  `customer_zip` varchar(255) DEFAULT NULL,
  `customer_password` text NOT NULL,
  `customer_token` text NOT NULL,
  `customer_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_email`, `customer_phone`, `customer_country`, `customer_address`, `customer_state`, `customer_city`, `customer_zip`, `customer_password`, `customer_token`, `customer_status`, `created_at`, `updated_at`) VALUES
(1, 'Kebede', 'customer@gmail.com', '+251915276873', 'Netherlands', 'Lideta, Beside Dama House Dynamic MFI Building Addis Ababa, Ethiopia', 'TX', 'Addis Ababa', '1000', '$2y$10$l1DLkKjcoDxU23EkAK5K4e6fnSWWkWlnaxxObBpxHYzE0glMAIwmy', '', 'Active', '2020-12-04 20:14:31', '2023-10-25 18:37:35'),
(3, 'Nigus Abate', 'nigusabate4@gmail.com', '+251915852276', 'Ethiopia', '4008 Cherchill Street', 'Ethiopia', 'Addis ababa', '1000', '$2y$10$l1DLkKjcoDxU23EkAK5K4e6fnSWWkWlnaxxObBpxHYzE0glMAIwmy', '0af035f2bd20622ea76ea48a3d6b7504b86d45c46c1816e274e151a8343864d6', 'Active', '2022-04-18 12:29:26', '2022-04-18 17:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `slug` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`id`, `name`, `slug`, `detail`, `facebook`, `twitter`, `linkedin`, `youtube`, `instagram`, `email`, `phone`, `website`, `address`, `photo`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Nigus', 'nigus', '<p>He has BSC Degree in Information System</p>', '#', '#', 'https://www.linkedin.com/in/nigus-abate-85728919a?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Bqp05g4zVShm88VrKkrW1dA%3D%3D', '#', 'https://t.me/nigus99', 'abatenigus0@gmail.com', '09122222', 'www.devethio.com', 'Addis Ababa, Ethiopia', 'developer-2.png', 'website developer', 'web developer expert', '2022-04-29 04:42:00', '2022-10-28 15:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_name` varchar(255) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `document_url` varchar(255) NOT NULL,
  `document_photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `document_name`, `status`, `document_url`, `document_photo`, `created_at`, `updated_at`) VALUES
(1, 'Test use', 'Public', 'fa fa-file-pdf', 'document-1.pdf', '2023-02-15 15:59:39', '2023-03-13 04:13:03');

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_pages`
--

CREATE TABLE `dynamic_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dynamic_page_name` text NOT NULL,
  `dynamic_page_slug` text DEFAULT NULL,
  `dynamic_page_content` text DEFAULT NULL,
  `dynamic_page_banner` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dynamic_pages`
--

INSERT INTO `dynamic_pages` (`id`, `dynamic_page_name`, `dynamic_page_slug`, `dynamic_page_content`, `dynamic_page_banner`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(7, 'Dynamic Page 1', 'dynamic-page-2', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-size: 16px;\">Lorem ipsum dolor sit amet, id saperet suavitate signiferumque sea. Eu tantas invenire signiferumque per, at affert eloquentiam eos, duo no sale utroque. His ad homero verterem, ut paulo neglegentur contentiones per. Ex cum unum vocent commodo. Ut ridens principes rationibus ius, ex mea saepe docendi, cu eum unum assum accumsan.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-size: 16px;\">Ne quo possim consectetuer, splendide voluptatibus ut mea. Summo mucius regione qui et, sea soleat everti indoctum no. Brute postea ut vel, oblique propriae pertinacia et sed. No nominati adipiscing nam, accusata interpretaris no est, no tota conceptam nam. Id posidonium dissentiunt mea, an nibh menandri eum. Meis nominati cum cu.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-size: 16px;\">Eum ad delicatissimi signiferumque, mea causae delenit perfecto et. Sit primis nostrum id, an postea numquam per, id quo diceret deleniti consectetuer. Eum eu salutatus mediocritatem. Blandit ocurreret dissentiet ne quo, ex mazim numquam delenit his.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-size: 16px;\">Ea mel elit placerat. Ius nobis delicata gloriatur at. Nam fabulas salutandi at, in per officiis omittantur contentiones, omnes insolens suscipiantur sed cu. Ei modus persequeris vix. Persius legimus has an, mea dicit maiestatis adipiscing eu.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-size: 16px;\"><br></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px;\"><font color=\"#333333\"><span style=\"font-size: 16px;\">&lt;iframe width=\"600\" height=\"450\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=chrchill%20ave,%20addis%20ababa&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"&gt;&lt;/iframe&gt;</span></font><br></p>', 'dynamic-page-banner-7.png', 'Dynamic Page 1', 'Dynamic Page 1', '2020-11-22 04:57:58', '2024-01-12 13:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `et_subject` text NOT NULL,
  `et_content` text NOT NULL,
  `et_name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `et_subject`, `et_content`, `et_name`, `created_at`, `updated_at`) VALUES
(1, 'Contact Form - your website', '<p>You have received a message from a visitor. Detailed information is here:</p><p>Visitor Name: [[visitor_name]]</p><p>Visitor Email: [[visitor_email]]</p><p>Visitor Phone: [[visitor_phone]]</p><p>Visitor Message:&nbsp;</p><p>[[visitor_message]]</p>', 'Contact Page Message', '0000-00-00 00:00:00', '2020-11-24 11:15:19'),
(2, 'New Comment Posted', '<p>You have received a new comment from a person. His detail is here:</p><p><strong>Person Name:</strong>&nbsp;[[person_name]]</p><p><strong>Person Email:&nbsp;</strong>[[person_email]]</p><p><strong>Person Message:</strong></p><p>[[person_message]]</p><p>Go to this link to see this comment<span style=\"font-weight: bolder;\">:&nbsp;</span><a href=\"[[comment_see_url]]\" target=\"_blank\">See Comment</a></p>', 'Comment Message to Admin', '0000-00-00 00:00:00', '2020-11-28 04:51:16'),
(3, 'Verify Subscription', '<p>Dear Sir,</p><p>You have requested to be a subscriber in our website. Please click on the following link to confirm the subscription:</p><p><a href=\"[[verification_link]]\" target=\"_blank\">Verification Link</a></p><p>Thank you so much!<br>Marketing Team</p>', 'Subscriber Message for Verification', '0000-00-00 00:00:00', '2020-12-09 18:51:13'),
(4, 'A News has been added', '<p>Dear Subscriber,</p><p>A news has been published. To see the news, please go to the following link:</p><p><a href=\"[[post_link]]\" target=\"_blank\">Click here to see the post</a></p><p>Thank you!</p>', 'News Post Message to Active Subscribers', '0000-00-00 00:00:00', '2020-12-09 22:26:04'),
(5, 'Reset Password', '<p>To reset your password, please click on the following link:</p><p><a href=\"[[reset_link]]\" target=\"_blank\">Reset Password</a><br></p>', 'Reset Password Message to Admin', '0000-00-00 00:00:00', '2020-11-27 19:20:59'),
(6, 'Confirm Registration', '<p>To activate your account and confirm the registration, please click on the verify link below:</p><p><a href=\"[[verification_link]]\" target=\"_blank\">Verification Link</a></p>', 'Registration Email to Customer', '0000-00-00 00:00:00', '2020-12-03 10:38:57'),
(7, 'Reset Password', '<p>To reset your password, please click on the following link:</p><p><a href=\"[[reset_link]]\" target=\"_blank\">Reset Password Link</a></p>', 'Reset Password Message to Customer', '0000-00-00 00:00:00', '2020-12-05 03:30:14'),
(8, 'Order Completed', '<p>Dear [[customer_name]],</p><p>Your order has been submitted successfully and we received the payment from you. After you process and ship the order, you will get all the products after a certain time period.&nbsp;</p><p><b>Payment Information:</b></p><p>Order Number: [[order_number]]</p><p>[[payment_method]]</p><p>Payment Date &amp; Time: [[payment_date_time]]</p><p>Transaction Id: [[transaction_id]]</p><p>Shipping Cost: [[shipping_cost]]</p><p>Coupon Code: [[coupon_code]]</p><p>Coupon Discount: [[coupon_discount]]</p><p>Paid Amount: [[paid_amount]]</p><p>Payment Status: [[payment_status]]</p><p>----------------------------------------</p><p><b>Your billing details:</b></p><p>Billing Name: [[billing_name]]</p><p>Billing Email: [[billing_email]]</p><p>Billing Phone: [[billing_phone]]</p><p>Billing Country: [[billing_country]]</p><p>Billing Address: [[billing_address]]</p><p>Billing State: [[billing_state]]</p><p>Billing City: [[billing_city]]</p><p>Billing Zip: [[billing_zip]]</p><p>----------------------------------------</p><p><b>Your shipping details:</b></p><p>Shipping Name: [[shipping_name]]</p><p>Shipping Email: [[shipping_email]]</p><p>Shipping Phone: [[shipping_phone]]</p><p>Shipping Country: [[shipping_country]]</p><p>Shipping Address: [[shipping_address]]</p><p>Shipping State: [[shipping_state]]</p><p>Shipping City: [[shipping_city]]</p><p>Shipping Zip: [[shipping_zip]]</p><p>----------------------------------------</p><p><b>Products You Purchased:&nbsp;</b></p><p>[[product_detail]]</p><p>Thank you! The ABC Team</p>', 'Order Completed Email to Customer', '0000-00-00 00:00:00', '2020-12-08 22:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_title` text NOT NULL,
  `faq_content` text NOT NULL,
  `faq_order` smallint(6) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `faq_title`, `faq_content`, `faq_order`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, eu vim elitr clita?', '<p>Lorem ipsum dolor sit amet, eu vim elitr clita, quot putent feugait cu per. Tamquam voluptua persequeris ad cum, at his cibo scaevola. Cibo justo equidem cu nam. An meliore admodum vis, quot aliquip bonorum ei quo. Mea nemore feugiat verterem cu, modus vulputate mea id.<br></p>', 3, '2020-11-23 11:09:14', '2020-11-28 23:12:53'),
(2, 'Est facilis recteque et, etiam aliquip?', '<p>Lorem ipsum dolor sit amet, eu vim elitr clita, quot putent feugait cu per. Tamquam voluptua persequeris ad cum, at his cibo scaevola. Cibo justo equidem cu nam. An meliore admodum vis, quot aliquip bonorum ei quo. Mea nemore feugiat verterem cu, modus vulputate mea id.<br></p>', 2, '2020-11-23 11:09:31', '2020-11-23 11:09:31'),
(3, 'Cetero mnesarchum id vis, id sea?', '<p>Lorem ipsum dolor sit amet, eu vim elitr clita, quot putent feugait cu per. Tamquam voluptua persequeris ad cum, at his cibo scaevola. Cibo justo equidem cu nam. An meliore admodum vis, quot aliquip bonorum ei quo. Mea nemore feugiat verterem cu, modus vulputate mea id.<br></p>', 1, '2020-11-23 11:09:45', '2020-11-28 23:12:59'),
(4, 'How to use it', '<p style=\"margin: 18px 0px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; font-family: Arial, verdana, arial, sans-serif; vertical-align: baseline; line-height: 1.5em; color: rgb(28, 20, 13); background-color: rgb(253, 253, 253);\">In below, I am going to tell you how to create client ID and Secret Key for PayPal.</p><div><p style=\"margin: 18px 0px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; font-family: Arial, verdana, arial, sans-serif; vertical-align: baseline; line-height: 1.5em; color: rgb(28, 20, 13); background-color: rgb(253, 253, 253);\">In below, I am going to tell you how to create client ID and Secret Key for PayPal.</p><div><p style=\"margin: 18px 0px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; font-family: Arial, verdana, arial, sans-serif; vertical-align: baseline; line-height: 1.5em; color: rgb(28, 20, 13); background-color: rgb(253, 253, 253);\">In below, I am going to tell you how to create client ID and Secret Key for PayPal.</p><div><br></div><ol style=\"margin-right: 0px; margin-bottom: 18px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; font-family: Arial, verdana, arial, sans-serif; vertical-align: baseline; line-height: 1.5em; color: rgb(28, 20, 13); background-color: rgb(253, 253, 253); margin-top: -10px !important;\"></ol></div><ol style=\"margin-right: 0px; margin-bottom: 18px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; font-family: Arial, verdana, arial, sans-serif; vertical-align: baseline; line-height: 1.5em; color: rgb(28, 20, 13); background-color: rgb(253, 253, 253); margin-top: -10px !important;\"></ol></div><ol style=\"margin-right: 0px; margin-bottom: 18px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; font-family: Arial, verdana, arial, sans-serif; vertical-align: baseline; line-height: 1.5em; color: rgb(28, 20, 13); background-color: rgb(253, 253, 253); margin-top: -10px !important;\"></ol>', 4, '2022-04-13 12:23:45', '2022-04-13 12:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `folder_id` bigint(20) UNSIGNED DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `folder_id`, `filename`, `path`, `created_at`, `updated_at`) VALUES
(9, 15, 'image 1 (2).png', 'public/uploads/15/image 1 (2).png', '2023-11-06 14:43:03', '2023-11-06 14:43:03'),
(10, 1, 'th.jpg', 'public/uploads/1/th.jpg', '2023-11-06 15:36:21', '2023-11-06 15:36:21'),
(23, 13, '311295525_128583619972945_8118975280339607086_n.jpg', 'public/uploads/13/311295525_128583619972945_8118975280339607086_n.jpg', '2023-11-13 14:37:38', '2023-11-13 14:37:38'),
(24, 13, '311342210_128583753306265_5742580934805874665_n.jpg', 'public/uploads/13/311342210_128583753306265_5742580934805874665_n.jpg', '2023-11-13 14:37:44', '2023-11-13 14:37:44'),
(25, 13, '311576699_128583489972958_8664084780957786425_n.jpg', 'public/uploads/13/311576699_128583489972958_8664084780957786425_n.jpg', '2023-11-13 14:37:50', '2023-11-13 14:37:50'),
(26, 13, '311497521_128583679972939_4902708249212328513_n.jpg', 'public/uploads/13/311497521_128583679972939_4902708249212328513_n.jpg', '2023-11-13 14:38:01', '2023-11-13 14:38:01'),
(27, 13, '311447234_128583576639616_446072165609678416_n.jpg', 'public/uploads/13/311447234_128583576639616_446072165609678416_n.jpg', '2023-11-13 14:38:01', '2023-11-13 14:38:01'),
(28, 13, '311566146_128583713306269_7720125213094933606_n.jpg', 'public/uploads/13/311566146_128583713306269_7720125213094933606_n.jpg', '2023-11-13 14:38:02', '2023-11-13 14:38:02'),
(30, 13, '311583899_128583816639592_9204543281820177853_n.jpg', 'public/uploads/13/311583899_128583816639592_9204543281820177853_n.jpg', '2023-11-13 14:38:03', '2023-11-13 14:38:03'),
(38, 16, 'vv.pdf', 'public/uploads/16/vv.pdf', '2023-12-29 15:51:57', '2023-12-29 15:51:57'),
(39, 16, 'Dukem.xlsx', 'public/uploads/16/Dukem.xlsx', '2023-12-29 15:53:32', '2023-12-29 15:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `folders`
--

INSERT INTO `folders` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Document', NULL, '2023-10-30 20:48:35', '2023-10-30 20:48:35'),
(2, '2022 Document', 1, '2023-10-30 20:51:15', '2023-10-30 20:51:15'),
(3, '2023 Document', 1, '2023-10-30 22:05:27', '2023-10-30 22:05:27'),
(4, '2024 Document', 1, '2023-10-30 22:25:22', '2023-10-30 22:25:22'),
(5, '2025 Document', 1, '2023-10-30 22:25:33', '2023-10-30 22:25:33'),
(6, '2026 Document', 1, '2023-10-30 22:25:43', '2023-10-30 22:25:43'),
(7, '2027 Document', 1, '2023-10-30 22:25:54', '2023-10-30 22:25:54'),
(8, '2028 Document', 1, '2023-10-30 22:26:04', '2023-10-30 22:26:04'),
(9, '2029 Document', 1, '2023-10-30 22:26:13', '2023-10-30 22:26:13'),
(10, '2030 Document', 1, '2023-10-30 22:26:23', '2023-10-30 22:26:23'),
(11, '2031 Document', 1, '2023-10-30 22:26:31', '2023-10-30 22:26:31'),
(12, '2032 Document', 1, '2023-10-30 22:26:41', '2023-10-30 22:26:41'),
(13, 'Photos', NULL, '2023-10-31 01:08:57', '2023-10-31 01:08:57'),
(14, 'Old photo', 13, '2023-10-31 01:09:26', '2023-10-31 01:09:26'),
(15, 'New photo', 13, '2023-10-31 01:09:56', '2023-10-31 01:09:56'),
(16, 'Research', NULL, '2023-10-31 01:18:13', '2023-10-31 01:18:13'),
(17, 'Backup Files', NULL, '2023-10-31 01:19:58', '2023-10-31 01:19:58'),
(18, 'Music', NULL, '2023-10-31 01:27:38', '2023-10-31 01:27:38'),
(20, 'movies', NULL, '2023-10-31 01:37:47', '2023-10-31 01:37:47'),
(21, 'Dynamic', NULL, '2023-11-06 14:23:16', '2023-11-06 14:23:16'),
(22, 'Pro Photos', 13, '2023-11-13 18:58:22', '2023-11-13 18:58:22'),
(24, 'Archive', NULL, '2023-12-28 20:18:17', '2023-12-28 20:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `footer_columns`
--

CREATE TABLE `footer_columns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `column_item_text` varchar(255) NOT NULL,
  `column_item_url` varchar(255) NOT NULL,
  `column_item_order` int(11) NOT NULL DEFAULT 0,
  `column_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_columns`
--

INSERT INTO `footer_columns` (`id`, `column_item_text`, `column_item_url`, `column_item_order`, `column_name`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'https://www.demo.devethio.com/', 1, 'Column 1', '2020-12-10 23:29:18', '2024-01-12 12:51:02'),
(2, 'Blog', 'https://www.demo.devethio.com/blog', 2, 'Column 1', '2020-12-10 23:30:09', '2024-01-12 12:51:09'),
(3, 'Contact us', 'https://www.demo.devethio.com/contact', 3, 'Column 1', '2020-12-10 23:30:17', '2024-01-12 12:51:17'),
(4, 'Jobs', 'https://www.demo.devethio.com/career', 1, 'Column 2', '2020-12-10 23:30:35', '2024-01-12 12:51:24'),
(5, 'Our Services', 'https://www.demo.devethio.com/services', 2, 'Column 2', '2020-12-10 23:30:44', '2024-01-12 12:51:31'),
(6, 'FAQ', 'https://www.demo.devethio.com/faq', 3, 'Column 2', '2020-12-10 23:30:53', '2024-01-12 12:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text NOT NULL,
  `favicon` text NOT NULL,
  `login_bg` text NOT NULL,
  `top_bar_email` text DEFAULT NULL,
  `top_bar_phone` text DEFAULT NULL,
  `top_bar_social_status` text NOT NULL,
  `top_bar_login_status` text NOT NULL,
  `top_bar_registration_status` text NOT NULL,
  `top_bar_cart_status` text NOT NULL,
  `sidebar_total_recent_post` tinyint(4) NOT NULL,
  `theme_color` text NOT NULL,
  `sidebar_color` text DEFAULT NULL,
  `footer_column1_heading` text NOT NULL,
  `footer_column2_heading` text NOT NULL,
  `footer_column3_heading` text NOT NULL,
  `footer_column4_heading` text NOT NULL,
  `footer_address` text NOT NULL,
  `footer_email` text NOT NULL,
  `footer_phone` text NOT NULL,
  `footer_copyright` text NOT NULL,
  `preloader_photo` text NOT NULL,
  `preloader_status` text NOT NULL,
  `sticky_header_status` text NOT NULL,
  `google_analytic_tracking_id` text NOT NULL,
  `google_analytic_status` text NOT NULL,
  `tawk_live_chat_code` text NOT NULL,
  `tawk_live_chat_status` text NOT NULL,
  `google_adsense_script_code` text NOT NULL,
  `google_adsense_script_status` text NOT NULL,
  `cookie_consent_status` text NOT NULL,
  `google_recaptcha_site_key` text NOT NULL,
  `google_recaptcha_status` text NOT NULL,
  `banner_about` text NOT NULL,
  `banner_service` text NOT NULL,
  `banner_service_detail` text NOT NULL,
  `banner_blog` text NOT NULL,
  `banner_blog_detail` text NOT NULL,
  `banner_category` text NOT NULL,
  `banner_senior_detail` text DEFAULT NULL,
  `banner_board_detail` text DEFAULT NULL,
  `banner_developer_detail` text DEFAULT NULL,
  `banner_project` text NOT NULL,
  `banner_project_detail` text NOT NULL,
  `banner_team_member` text NOT NULL,
  `banner_team_member_detail` text NOT NULL,
  `banner_photo_gallery` text NOT NULL,
  `banner_video_gallery` text NOT NULL,
  `banner_faq` text NOT NULL,
  `banner_product` text NOT NULL,
  `banner_product_detail` text NOT NULL,
  `banner_contact` text NOT NULL,
  `banner_search` text NOT NULL,
  `banner_cart` text NOT NULL,
  `banner_checkout` text NOT NULL,
  `banner_login` text NOT NULL,
  `banner_registration` text NOT NULL,
  `banner_forget_password` text NOT NULL,
  `banner_customer_panel` text NOT NULL,
  `banner_career` text NOT NULL,
  `banner_branch` text DEFAULT NULL,
  `banner_senior` text DEFAULT NULL,
  `banner_board` text DEFAULT NULL,
  `banner_job` text NOT NULL,
  `banner_job_application` text NOT NULL,
  `banner_term` text NOT NULL,
  `banner_privacy` text NOT NULL,
  `banner_document` text NOT NULL,
  `banner_ceo` text NOT NULL,
  `authorized_share` double DEFAULT NULL,
  `per_value` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `logo`, `favicon`, `login_bg`, `top_bar_email`, `top_bar_phone`, `top_bar_social_status`, `top_bar_login_status`, `top_bar_registration_status`, `top_bar_cart_status`, `sidebar_total_recent_post`, `theme_color`, `sidebar_color`, `footer_column1_heading`, `footer_column2_heading`, `footer_column3_heading`, `footer_column4_heading`, `footer_address`, `footer_email`, `footer_phone`, `footer_copyright`, `preloader_photo`, `preloader_status`, `sticky_header_status`, `google_analytic_tracking_id`, `google_analytic_status`, `tawk_live_chat_code`, `tawk_live_chat_status`, `google_adsense_script_code`, `google_adsense_script_status`, `cookie_consent_status`, `google_recaptcha_site_key`, `google_recaptcha_status`, `banner_about`, `banner_service`, `banner_service_detail`, `banner_blog`, `banner_blog_detail`, `banner_category`, `banner_senior_detail`, `banner_board_detail`, `banner_developer_detail`, `banner_project`, `banner_project_detail`, `banner_team_member`, `banner_team_member_detail`, `banner_photo_gallery`, `banner_video_gallery`, `banner_faq`, `banner_product`, `banner_product_detail`, `banner_contact`, `banner_search`, `banner_cart`, `banner_checkout`, `banner_login`, `banner_registration`, `banner_forget_password`, `banner_customer_panel`, `banner_career`, `banner_branch`, `banner_senior`, `banner_board`, `banner_job`, `banner_job_application`, `banner_term`, `banner_privacy`, `banner_document`, `banner_ceo`, `authorized_share`, `per_value`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', 'favicon.png', 'login_bg.png', 'demo@example.com', '+42222222222', 'Show', 'Show', 'Show', 'Show', 5, '1B82D1', '081A3F', 'Important Links', 'Useful Links', 'Contact Information', 'Social Media', 'your Street address', 'demo@example.com', '+422222222222', '©Copyright 2024. your company All Rights Reserved.', 'preloader.gif', 'Show', 'Show', '531240162', 'Show', '<script type=\"text/javascript\">\r\n    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n    (function(){\r\n        var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\n        s1.async=true;\r\n        s1.src=\'https://embed.tawk.to/5a7c31ded7591465c7077c48/default\';\r\n        s1.charset=\'UTF-8\';\r\n        s1.setAttribute(\'crossorigin\',\'*\');\r\n        s0.parentNode.insertBefore(s1,s0);\r\n    })();\r\n</script>', 'Show', '<script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3527244353235156\"\r\n     crossorigin=\"anonymous\"></script>', 'Show', 'Show', '6LfiFKofAAAAAG5so9XN9uQVuws4zl31fjt94tuH', 'Hide', 'banner_about.png', 'banner_service.png', 'banner_service_detail.png', 'banner_blog.png', 'banner_blog_detail.png', 'banner_category.png', 'banner_senior_detail.png', 'banner_board_detail.png', 'banner_developer_detail.png', 'banner_project.png', 'banner_project_detail.jpeg', 'banner_team_member.png', 'banner_team_member_detail.jpeg', 'banner_photo_gallery.jpeg', 'banner_video_gallery.png', 'banner_faq.jpeg', 'banner_product.jpeg', 'banner_product_detail.jpeg', 'banner_contact.png', 'banner_search.jpeg', 'banner_cart.jpeg', 'banner_checkout.jpeg', 'banner_login.jpeg', 'banner_registration.jpeg', 'banner_forget_password.png', 'banner_customer_panel.jpeg', 'banner_career.png', 'banner_branch.png', 'banner_senior.png', 'banner_board.png', 'banner_job.png', 'banner_job_application.png', 'banner_term.png', 'banner_privacy.png', 'banner_document.png', 'banner_ceo.png', 1200000000, 1000, '0000-00-00 00:00:00', '2024-01-12 12:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `job_title` text NOT NULL,
  `job_slug` text DEFAULT NULL,
  `job_description_short` text NOT NULL,
  `job_responsibility` text NOT NULL,
  `job_education` text DEFAULT NULL,
  `job_experience` text DEFAULT NULL,
  `job_additional_requirement` text DEFAULT NULL,
  `job_benefit` text DEFAULT NULL,
  `job_deadline` text NOT NULL,
  `job_vacancy` text NOT NULL,
  `job_company_name` text DEFAULT NULL,
  `job_location` text NOT NULL,
  `job_type` text DEFAULT NULL,
  `job_salary` text NOT NULL,
  `job_order` int(11) NOT NULL DEFAULT 0,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `category_id`, `job_title`, `job_slug`, `job_description_short`, `job_responsibility`, `job_education`, `job_experience`, `job_additional_requirement`, `job_benefit`, `job_deadline`, `job_vacancy`, `job_company_name`, `job_location`, `job_type`, `job_salary`, `job_order`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 5, 'PHP Web Developer', 'phpweb-developer', 'This role will be focused on an integration project involving Marekto and Salesforce with additional work on our eCommerce platform.', '<ul><li>Perform database programming for new and existing systems.</li><li>Write scripts, stored procedures and functions for database system with SQL Server 2008 and above.</li><li>Build and maintain reports with Crystal Reports/ Windward.</li><li>Troubleshoot database problems, queries and errors in accurate and timely manner</li><li>Maintain accurate and complete database programming documentation</li></ul>', '<ul><li>Bachelor in Engineering (BEngg)</li><li>B.Sc in Computer Science/ Engineering from any Reputed University.</li><li>Skills Required: MS SQL Server ,Oracle Database,Oracle PLSQL,TSQL</li></ul>', '<ul><li>At least 1 year(s)</li><li>Freshers are also encouraged to apply.</li></ul>', '<ul><li>Age 25 to 45 years</li><li>Female candidates are encouraged to apply</li><li>Self-starter who is able to take the initiative with minimal supervision</li><li>Ability to work under pressure and meet the deadline</li><li>Strong problem solving skills</li><li>Strong communication skills - technical and non-technical</li><li>C#, ASP.Net MVC/Web Api development knowledge will be a plus point.</li></ul>', '<ul><li>Medical allowance, Performance bonus, Provident fund, Gratuity, Weekly 2 holidays</li><li>Lunch Facilities: Full Subsidize</li><li>Salary Review: Yearly</li><li>Festival Bonus: 2</li></ul>', '2020-07-23', '01', 'XYZ Software Limited', 'New York, USA', 'Full Time', 'Negotiable', 1, 'PHP/Web Developer', 'PHP/Web Developer', '2020-11-29 09:03:51', '2023-10-21 13:24:04'),
(2, 5, 'Senior PHP Developer', 'senior-php-developer', 'Resume-Library is the fastest-growing job board in the U.S. market. We help thousands of expanding companies source the best candidates available. Our established tech team has worked hard to achieve a reputation for innovation, flexibility and usability, but we want more.', '<ul><li>Perform database programming for new and existing systems.</li><li>Write scripts, stored procedures and functions for database system with SQL Server 2008 and above.</li><li>Build and maintain reports with Crystal Reports/ Windward.</li><li>Troubleshoot database problems, queries and errors in accurate and timely manner</li><li>Maintain accurate and complete database programming documentation</li></ul>', '<ul><li>Bachelor in Engineering (BEngg)</li><li>B.Sc in Computer Science/ Engineering from any Reputed University.</li><li>Skills Required: MS SQL Server ,Oracle Database,Oracle PLSQL,TSQL</li></ul>', '<ul><li>At least 1 year(s)</li><li>Freshers are also encouraged to apply.</li></ul>', '<ul><li>Age 25 to 45 years</li><li>Female candidates are encouraged to apply</li><li>Self-starter who is able to take the initiative with minimal supervision</li><li>Ability to work under pressure and meet the deadline</li><li>Strong problem solving skills</li><li>Strong communication skills - technical and non-technical</li><li>C#, ASP.Net MVC/Web Api development knowledge will be a plus point.</li></ul>', '<ul><li>Medical allowance, Performance bonus, Provident fund, Gratuity, Weekly 2 holidays</li><li>Lunch Facilities: Full Subsidize</li><li>Salary Review: Yearly</li><li>Festival Bonus: 2</li></ul>', '2028-07-19', '01', 'MM Software Limited', 'New York, USA', 'Part Time', 'Negotiable', 2, 'Senior PHP Developer', 'Senior PHP Developer', '2020-11-29 09:06:01', '2023-10-23 12:37:29'),
(3, 3, 'IT Manager', 'it-manager', 'some text about jobs', '<ul><li>Perform database programming for new and existing systems.</li><li>Write scripts, stored procedures and functions for database system with SQL Server 2008 and above.</li><li>Build and maintain reports with Crystal Reports/ Windward.</li><li>Troubleshoot database problems, queries and errors in accurate and timely manner</li><li>Maintain accurate and complete database programming documentation</li></ul>', '<ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-size: 16px;\"><li style=\"margin: 0px 0px 10px; padding: 0px 0px 0px 25px; list-style-type: none; position: relative; background-image: url(&quot;../images/tick.png&quot;); background-size: 16px 16px; background-position: 0px 4px; background-repeat: no-repeat;\"><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px;\"><li>Bachelor in Engineering (BEngg)</li><li>B.Sc in Computer Science/ Engineering from any Reputed University.</li><li>Skills Required: MS SQL Server ,Oracle Database,Oracle PLSQL,TSQL</li></ul></li></ul>', '<ul><li>At least 1 year(s)<br></li><li>Freshers are also encouraged to apply.</li></ul>', '<div><ul><li>Age 25 to 45 years</li><li>Female candidates are encouraged to apply</li><li>Self-starter who is able to take the initiative with minimal supervision</li><li>Ability to work under pressure and meet the deadline</li><li>Strong problem solving skills</li><li>Strong communication skills - technical and non-technical</li><li>C#, ASP.Net MVC/Web Api development knowledge will be a plus point.</li></ul></div>', '<ul><li>Medical allowance, Performance bonus, Provident fund, Gratuity, Weekly 2 holidays</li><li>Lunch Facilities: Full Subsidize</li><li>Salary Review: Yearly</li><li>Festival Bonus: 2</li></ul>', '2022/04/09', '7', 'DMFI', 'aa', 'Full Time', 'Nogotiation', 3, 'IT Manager', 'IT Manager', '2023-04-09 16:23:31', '2023-10-20 20:09:26'),
(6, 6, 'Marketing Manager', 'marketing-manager', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<h2 style=\"margin-bottom: 10px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;</p>', '<h2 style=\"margin-bottom: 10px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, NULL, NULL, '2023/12/31', '4', 'XYZ', 'Addis Ababa', 'Part Time', '12000', 4, NULL, NULL, '2023-12-27 16:15:27', '2023-12-27 16:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `applicant_first_name` text NOT NULL,
  `applicant_last_name` text NOT NULL,
  `applicant_email` text NOT NULL,
  `applicant_phone` text NOT NULL,
  `applicant_country` text NOT NULL,
  `applicant_state` text NOT NULL,
  `applicant_street` text NOT NULL,
  `applicant_city` text NOT NULL,
  `applicant_zip_code` text NOT NULL,
  `applicant_expected_salary` text NOT NULL,
  `applicant_cover_letter` text NOT NULL,
  `applicant_cv` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `job_id`, `applicant_first_name`, `applicant_last_name`, `applicant_email`, `applicant_phone`, `applicant_country`, `applicant_state`, `applicant_street`, `applicant_city`, `applicant_zip_code`, `applicant_expected_salary`, `applicant_cover_letter`, `applicant_cv`, `created_at`, `updated_at`) VALUES
(5, 3, 'Test', 'User', 'testuser@gmail.com', '09125687', 'Ethiopia', 'et', 'addis ababa', 'Addis ababa', '1000', 'Company scale', 'IT Manager IT Manager IT Manager IT Manager IT Manager', 'cv-5.pdf', '2022-04-09 16:28:12', '2022-04-09 16:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`id`, `category_name`, `category_slug`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(3, 'Accounting and finance', 'accounting-and-finance', 'accounting-and-finance', NULL, '2023-10-20 20:10:54', '2023-10-20 20:10:54'),
(5, 'It and Telecom', 'it-and-telecom', NULL, NULL, '2023-10-20 20:20:31', '2023-10-20 20:20:31'),
(6, 'Marketing', 'marketing', NULL, NULL, '2023-10-21 15:16:42', '2023-10-21 15:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `language` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `language`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', '2023-03-19 18:51:44', '2023-03-19 18:51:44'),
(2, 'Amharic', 'am', '2023-10-24 16:28:44', '2023-10-24 16:28:44'),
(3, 'Oromf', 'om', '2023-10-24 16:30:00', '2023-10-24 16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `management_categories`
--

CREATE TABLE `management_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `management_categories`
--

INSERT INTO `management_categories` (`id`, `category_name`, `category_slug`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'CEO', 'ceo', 'ceo title', 'Ceo meta description', '2023-10-19 07:00:00', '2023-10-19 19:51:32'),
(2, 'Chief Operation Officer', 'chief-operation-officer', NULL, NULL, '2023-10-19 07:00:00', '2023-10-19 19:59:31'),
(3, 'Chief Resource Officer', 'chief-resource -officer', NULL, NULL, '2023-10-19 07:00:00', '2023-10-19 19:59:45'),
(4, 'Chief IT Officer & Secretary', 'chief-it-officer-&_secretary', 'chief_it_officer_&_secretary', 'chief_it_officer_&_secretary', '2023-10-19 07:00:00', '2023-10-19 19:59:21'),
(5, 'Legal Service Head', 'legal-service-head', NULL, NULL, '2023-10-19 07:00:00', '2023-10-19 19:59:53'),
(6, 'Internal Audit and Risk Management Director', 'internal-udit-and-risk-management-director', 'Internal Audit and Risk Management Director', 'Internal Audit and Risk Management Director', '2023-10-20 17:25:10', '2023-10-20 17:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `menu_status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'About', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Services', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Shop', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Blog', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Project', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'FAQ', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Team Members', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Contact', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Career', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Photo Gallery', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Video Gallery', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Terms and Conditions', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Privacy Policy', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Branch', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Senior', 'Show', '2023-02-13 11:54:34', '0000-00-00 00:00:00'),
(17, 'Board', 'Show', '2023-02-13 11:55:04', '0000-00-00 00:00:00'),
(18, 'Developer', 'Show', '2023-02-13 11:55:27', '0000-00-00 00:00:00'),
(19, 'Client', 'Show', '2023-02-15 17:07:09', '2023-02-15 17:07:09'),
(20, 'Company', 'Show', '2023-03-04 04:22:57', '2023-03-04 04:22:57'),
(21, 'authorizedmore', 'Show', '2023-03-04 04:23:30', '2023-03-04 04:23:30'),
(22, 'sharesubscribe', 'Show', '2023-03-10 16:15:22', '2023-03-10 16:15:22'),
(23, 'Document', 'Show', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_05_052517_create_admins_table', 1),
(5, '2020_11_18_041627_create_categories_table', 1),
(6, '2020_11_18_041747_create_blogs_table', 1),
(7, '2020_11_20_040327_create_sliders_table', 2),
(8, '2020_11_20_052802_create_general_settings_table', 3),
(11, '2020_11_20_161634_create_page_about_items_table', 4),
(12, '2020_11_21_020753_create_page_service_items_table', 4),
(13, '2020_11_21_045826_create_page_shop_items_table', 5),
(14, '2020_11_21_052123_create_page_blog_items_table', 5),
(15, '2020_11_21_052218_create_page_project_items_table', 5),
(16, '2020_11_21_052236_create_page_photo_gallery_items_table', 5),
(17, '2020_11_21_052252_create_page_video_gallery_items_table', 5),
(18, '2020_11_21_052416_create_page_faq_items_table', 5),
(19, '2020_11_21_052431_create_page_team_items_table', 5),
(20, '2020_11_21_052449_create_page_contact_items_table', 5),
(21, '2020_11_21_052506_create_page_career_items_table', 5),
(22, '2020_11_21_052522_create_page_term_items_table', 5),
(23, '2020_11_21_052537_create_page_privacy_items_table', 5),
(24, '2020_11_21_121719_create_page_home_items_table', 6),
(25, '2020_11_22_034318_create_page_other_items_table', 7),
(27, '2020_11_22_051017_create_dynamic_pages_table', 8),
(28, '2020_11_22_155040_create_projects_table', 9),
(29, '2020_11_22_155955_create_project_photos_table', 10),
(30, '2020_11_23_020609_create_photos_table', 11),
(31, '2020_11_23_023020_create_videos_table', 12),
(32, '2020_11_23_033108_create_why_choose_items_table', 13),
(34, '2020_11_23_052309_create_services_table', 14),
(35, '2020_11_23_065919_create_testimonials_table', 15),
(36, '2020_11_23_145620_create_team_members_table', 16),
(37, '2020_11_23_170012_create_faqs_table', 17),
(38, '2020_11_24_155819_create_email_templates_table', 18),
(39, '2020_11_25_003858_create_social_media_items_table', 19),
(40, '2020_11_25_014512_create_subscribers_table', 20),
(41, '2020_11_28_085244_create_comments_table', 21),
(42, '2020_11_29_130743_create_jobs_table', 22),
(43, '2020_11_29_131227_create_job_applications_table', 23),
(44, '2020_11_30_012218_create_coupons_table', 24),
(45, '2020_11_30_022238_create_shippings_table', 25),
(46, '2020_11_30_033142_create_products_table', 26),
(48, '2020_12_03_124013_create_customers_table', 27),
(49, '2020_12_06_054145_create_orders_table', 28),
(50, '2020_12_06_055114_create_order_details_table', 29),
(51, '2020_12_11_042247_create_footer_columns_table', 30),
(54, '2020_12_12_070218_create_menus_table', 32),
(56, '2021_02_19_023102_create_roles_table', 33),
(57, '2021_02_19_024253_create_role_permissions_table', 34),
(58, '2021_02_19_024527_create_role_pages_table', 34),
(59, '2022_11_20_040327_create_partners_table', 35),
(60, '2022_11_25_040327_create_branches_table', 36),
(61, '2023_15_25_040327_create_companies_table', 37),
(62, '2018_08_29_200844_create_languages_table', 38),
(63, '2018_08_29_205156_create_translations_table', 38),
(64, '2020_12_06_054145_create_folders_table', 39),
(65, '2023_03_18_222133_create_clients_table', 40),
(66, '2023_10_24_054421_create_authorizemores_table', 40),
(67, '0001_01_01_000000_create_users_table', 41),
(68, '0001_01_01_000001_create_cache_table', 41);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` text NOT NULL,
  `customer_type` text NOT NULL,
  `billing_name` text NOT NULL,
  `billing_email` text NOT NULL,
  `billing_phone` text NOT NULL,
  `billing_country` text NOT NULL,
  `billing_address` text NOT NULL,
  `billing_state` text NOT NULL,
  `billing_city` text NOT NULL,
  `billing_zip` text NOT NULL,
  `shipping_name` text NOT NULL,
  `shipping_email` text NOT NULL,
  `shipping_phone` text NOT NULL,
  `shipping_country` text NOT NULL,
  `shipping_address` text NOT NULL,
  `shipping_state` text NOT NULL,
  `shipping_city` text NOT NULL,
  `shipping_zip` text NOT NULL,
  `order_note` text DEFAULT NULL,
  `txnid` text NOT NULL,
  `shipping_cost` text DEFAULT NULL,
  `coupon_code` text DEFAULT NULL,
  `coupon_discount` text DEFAULT NULL,
  `paid_amount` text NOT NULL,
  `fee_amount` text NOT NULL,
  `net_amount` text NOT NULL,
  `card_last4` text DEFAULT NULL,
  `card_exp_month` text DEFAULT NULL,
  `card_exp_year` text DEFAULT NULL,
  `payment_method` text NOT NULL,
  `payment_status` text NOT NULL,
  `order_no` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `customer_name`, `customer_email`, `customer_type`, `billing_name`, `billing_email`, `billing_phone`, `billing_country`, `billing_address`, `billing_state`, `billing_city`, `billing_zip`, `shipping_name`, `shipping_email`, `shipping_phone`, `shipping_country`, `shipping_address`, `shipping_state`, `shipping_city`, `shipping_zip`, `order_note`, `txnid`, `shipping_cost`, `coupon_code`, `coupon_discount`, `paid_amount`, `fee_amount`, `net_amount`, `card_last4`, `card_exp_month`, `card_exp_year`, `payment_method`, `payment_status`, `order_no`, `created_at`, `updated_at`) VALUES
(1, 1, 'Eyasu Aynekulu', 'eyasu@gmail.com', 'Returning Customer', 'Eyasu Aynekulu', 'eyasu@gmail.com', '111-222-3333', 'Bangladesh', 'Aronghata', 'N/A', 'Khulna', '9100', 'Eyasu Aynekulu', 'eyasu@gmail.com', '111-222-3333', 'Bangladesh', 'Aronghata', 'N/A', 'Khulna', '9100', '', 'txn_1HwIv6BoKopKik6A9XlVaFtu', '10', 'STRONG', '15', '54', '1.87', '52.13', '4242', '10', '2023', 'Stripe', 'Completed', '5fd03ddfe6a6e', '2023-12-29 21:00:47', '0000-00-00 00:00:00'),
(2, 0, 'Samuel gecho', 'samue10@gmail.com', 'Guest', 'Samuel gecho', 'samuel0@gmail.com', '111-222-3333', 'UK', '23 Street Road', 'KH', 'London', '12988', 'Samuel gecho', 'samuel110@gmail.com', '111-222-3333', 'UK', '23 Street Road', 'KH', 'London', '12988', '', 'txn_1HwIxrBoKopKik6ANb6LxXtW', '0', '', '0', '319', '9.55', '309.45', '0005', '10', '2022', 'Stripe', 'Completed', '5fd03e8b39813', '2023-12-01 21:03:39', '0000-00-00 00:00:00'),
(3, 1, 'Eyasu Aynekulu', 'eyasu@gmail.com', 'Returning Customer', 'Eyasu Aynekulu', 'eyasu@gmail.com', '111-222-3333', 'Bangladesh', 'Aronghata', 'N/A', 'Khulna', '9100', 'Eyasu Aynekulu', 'eyasu@gmail.com', '111-222-3333', 'Bangladesh', 'Aronghata', 'N/A', 'Khulna', '9100', '', 'PAYID-L7ID6BI7Y50796990454002S', '0', '', '0', '60.00', '2.04', '57.96', '', '', '', 'PayPal', 'Completed', '5fd03f2265fa0', '2023-10-01 20:06:10', '0000-00-00 00:00:00'),
(4, 0, 'Brent Grundy', 'brent92@gmail.com', 'Guest', 'Brent Grundy', 'brent92@gmail.com', '111-222-3874', 'Australia', '78 Grer Road', 'KL', 'New South Wales', '96271', 'Brent Grundy', 'brent9238@gmail.com', '111-222-3874', 'Australia', '78 Grer Road', 'KL', 'New South Wales', '96271', '', 'PAYID-L7ID7XI1V967346VW784225Y', '0', '', '0', '60.00', '2.04', '57.96', '', '', '', 'PayPal', 'Completed', '5fd03ff532966', '2020-12-08 21:09:41', '0000-00-00 00:00:00'),
(5, 1, 'Eyasu Aynekulu', 'eyasu@gmail.com', 'Returning Customer', 'Eyasu Aynekulu', 'eyasu@gmail.com', '111-222-3333', 'Bangladesh', 'Aronghata', 'N/A', 'Khulna', '9100', 'Eyasu Aynekulu', 'eyasu@gmail.com', '111-222-3333', 'Bangladesh', 'Aronghata', 'N/A', 'Khulna', '9100', '', 'txn_1HwJqlBoKopKik6AHODswFTL', '0', '', '0', '40', '1.46', '38.54', '4242', '10', '2024', 'Stripe', 'Completed', '5fd04bd7c5de0', '2020-12-08 22:00:23', '0000-00-00 00:00:00'),
(7, 1, 'Jason moha', 'customer@gmail.com', 'Returning Customer', 'Jason moha', 'customer@gmail.com', '409-671-5285', 'USA', '1178 Burwell Heights Road Sugar Land, TX 77478', 'TX', 'Sugar Land', '77478', 'Jason moha', 'customer@gmail.com', '409-671-5285', 'USA', '1178 Burwell Heights Road Sugar Land, TX 77478', 'TX', 'Sugar Land', '77478', '', 'txn_1I1TnpBoKopKik6ATEJIiBNv', '0', '', '0', '39', '1.43', '37.57', '4242', '2', '2022', 'Stripe', 'Completed', '5fe31023e30a4', '2023-09-14 02:38:43', '0000-00-00 00:00:00'),
(8, 1, 'Jason moha', 'customer@gmail.com', 'Returning Customer', 'Jason moha', 'customer@gmail.com', '409-671-5285', 'USA', '1178 Burwell Heights Road Sugar Land, TX 77478', 'TX', 'Sugar Land', '77478', 'Jason moha', 'customer@gmail.com', '409-671-5285', 'USA', '1178 Burwell Heights Road Sugar Land, TX 77478', 'TX', 'Sugar Land', '77478', '', 'PAYID-L7RRBOA1BD69183NN6084606', '0', '', '0', '30.00', '1.17', '28.83', '', '', '', 'PayPal', 'Completed', '5fe310cf6d80d', '2020-12-23 03:41:35', '0000-00-00 00:00:00'),
(9, 1, 'Jason moha', 'customer@gmail.com', 'Returning Customer', 'Jason moha', 'customer@gmail.com', '409-671-5285', 'USA', '1178 Burwell Heights Road Sugar Land, TX 77478', 'TX', 'Sugar Land', '77478', 'Jason moha', 'customer@gmail.com', '409-671-5285', 'USA', '1178 Burwell Heights Road Sugar Land, TX 77478', 'TX', 'Sugar Land', '77478', '', 'PAYID-L7RRBOA1BD69183NN6084606', '0', '', '0', '30.00', '1.17', '28.83', '', '', '', 'PayPal', 'Completed', '5fe3119be7bb9', '2020-12-23 03:44:59', '0000-00-00 00:00:00'),
(10, 1, 'Kebede', 'customer@gmail.com', 'Returning Customer', 'Kebede', 'customer@gmail.com', '+251915276873', 'Netherlands', 'Lideta, Beside Dama House Dynamic MFI Building Addis Ababa, Ethiopia', 'TX', 'Addis Ababa', '1000', 'Kebede', 'customer@gmail.com', '+251915276873', 'Netherlands', 'Lideta, Beside Dama House Dynamic MFI Building Addis Ababa, Ethiopia', 'TX', 'Addis Ababa', '1000', NULL, '521308', '0', '', '0', '22', '0.00', '22', 'offline', 'offline', 'offline', 'TeleBirr', 'Completed', '659fc8647790c', '2024-01-11 10:52:20', NULL),
(11, 1, 'Kebede', 'customer@gmail.com', 'Returning Customer', 'Kebede', 'customer@gmail.com', '+251915276873', 'Netherlands', 'Lideta, Beside Dama House Dynamic MFI Building Addis Ababa, Ethiopia', 'TX', 'Addis Ababa', '1000', 'Kebede', 'customer@gmail.com', '+251915276873', 'Netherlands', 'Lideta, Beside Dama House Dynamic MFI Building Addis Ababa, Ethiopia', 'TX', 'Addis Ababa', '1000', NULL, '29620', '0', '', '0', '22', '0.00', '22', 'offline', 'offline', 'offline', 'TeleBirr', 'Pending', '659fc912d4ef6', '2024-01-11 10:55:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_price` text NOT NULL,
  `product_qty` text NOT NULL,
  `payment_status` text NOT NULL,
  `order_no` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_qty`, `payment_status`, `order_no`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'Product Item Name 3', '5', '3', 'Completed', '5fd03ddfe6a6e', '2020-12-08 21:00:48', '0000-00-00 00:00:00'),
(2, 1, 5, 'Product Item Name 4', '22', '2', 'Completed', '5fd03ddfe6a6e', '2020-12-08 21:00:48', '0000-00-00 00:00:00'),
(3, 2, 6, 'Product Item Name 5', '299', '1', 'Completed', '5fd03e8b39813', '2020-12-08 21:03:39', '0000-00-00 00:00:00'),
(4, 2, 7, 'Product Item Name 6', '20', '1', 'Completed', '5fd03e8b39813', '2020-12-08 21:03:39', '0000-00-00 00:00:00'),
(5, 3, 8, 'Product Item Name 7', '45', '1', 'Completed', '5fd03f2265fa0', '2020-12-08 21:06:10', '0000-00-00 00:00:00'),
(6, 3, 9, 'Product Item Name 8', '15', '1', 'Completed', '5fd03f2265fa0', '2020-12-08 21:06:10', '0000-00-00 00:00:00'),
(7, 4, 8, 'Product Item Name 7', '45', '1', 'Completed', '5fd03ff532966', '2020-12-08 21:09:41', '0000-00-00 00:00:00'),
(8, 4, 9, 'Product Item Name 8', '15', '1', 'Completed', '5fd03ff532966', '2020-12-08 21:09:41', '0000-00-00 00:00:00'),
(9, 5, 7, 'Product Item Name 6', '20', '2', 'Completed', '5fd04bd7c5de0', '2020-12-08 22:00:23', '0000-00-00 00:00:00'),
(11, 7, 1, 'Product Item Name 1', '39', '1', 'Completed', '5fe31023e30a4', '2020-12-23 03:38:44', '0000-00-00 00:00:00'),
(12, 8, 9, 'Product Item Name 8', '15', '2', 'Completed', '5fe310cf6d80d', '2020-12-23 03:41:35', '0000-00-00 00:00:00'),
(13, 9, 9, 'Product Item Name 8', '15', '2', 'Completed', '5fe3119be7bb9', '2020-12-23 03:44:59', '0000-00-00 00:00:00'),
(14, 10, 5, 'Product Item Name 4', '22', '1', 'Completed', '659fc8647790c', '2024-01-11 10:52:20', NULL),
(15, 11, 5, 'Product Item Name 4', '22', '1', 'Completed', '659fc912d4ef6', '2024-01-11 10:55:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_about_items`
--

CREATE TABLE `page_about_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `about_us_photo` varchar(255) DEFAULT NULL,
  `vision_photo` varchar(255) DEFAULT NULL,
  `mession_photo` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `mession` text DEFAULT NULL,
  `objective` text DEFAULT NULL,
  `core_value` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_about_items`
--

INSERT INTO `page_about_items` (`id`, `name`, `about_us_photo`, `vision_photo`, `mession_photo`, `detail`, `vision`, `mession`, `objective`, `core_value`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about_us_image-.png', 'vision_image-.png', 'mession_image-.png', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and\r\n typesetting industry. Lorem Ipsum has been the industry\'s standard \r\ndummy </p><p>text ever since the 1500s, when an unknown printer took a galley \r\nof type and scrambled it to make a type specimen book. </p><p>It has survived \r\nnot only five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. </p><p>It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently </p><p>with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>\r\n</div>', '<div>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and\r\n typesetting industry. Lorem Ipsum has been the industry\'s standard \r\ndummy </p><p>text ever since the 1500s, when an unknown printer took a galley \r\nof type and scrambled it to make a type specimen book. <br></p>\r\n</div><h2 class=\"pity\" style=\"margin-top: 20px; margin-bottom: 20px; font-weight: 600; line-height: 1.1em; font-size: 30px; font-family: georgia; color: rgb(220, 67, 0); text-transform: uppercase; font-style: italic;\"><p style=\"margin-bottom: 10px; text-transform: none; color: rgb(0, 0, 0); font-family: Georgia, serif; font-size: 16px;\"><br></p></h2>', '<div>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and\r\n typesetting industry. Lorem Ipsum has been the industry\'s standard \r\n</p><p>dummy text ever since the 1500s, when an unknown printer took a galley \r\nof type and scrambled it to make a type specimen book. <br></p>\r\n</div><h2 class=\"pity\" style=\"margin-top: 20px; margin-bottom: 20px; font-weight: 600; line-height: 1.1em; font-size: 30px; font-family: georgia; color: rgb(220, 67, 0); text-transform: uppercase; font-style: italic;\"><p style=\"margin-bottom: 10px; text-transform: none; color: rgb(0, 0, 0); font-family: Georgia, serif; font-size: 16px;\"></p></h2>', '<div>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and\r\n typesetting industry. Lorem Ipsum has been the industry\'s standard \r\ndummy </p><p>text ever since the 1500s, when an unknown printer took a galley \r\nof type and scrambled it to make a type specimen book. <br></p>\r\n</div><h2 class=\"pity\" style=\"margin-top: 20px; margin-bottom: 20px; font-weight: 600; line-height: 1.1em; font-size: 30px; font-family: georgia; color: rgb(220, 67, 0); text-transform: uppercase; font-style: italic;\"><p style=\"margin-bottom: 10px; text-transform: none; color: rgb(0, 0, 0); font-family: Georgia, serif; font-size: 16px;\"><br></p></h2>', '<div>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and\r\n typesetting industry. Lorem Ipsum has been the industry\'s </p><p>standard \r\ndummy text ever since the 1500s, when an unknown printer took a galley \r\nof type and scrambled it to make a type specimen book. <br></p>\r\n</div><h2 class=\"pity\" style=\"margin-top: 20px; margin-bottom: 20px; font-weight: 600; line-height: 1.1em; font-size: 30px; font-family: georgia; color: rgb(220, 67, 0); text-transform: uppercase; font-style: italic;\"><p style=\"margin-bottom: 10px; text-transform: none; color: rgb(0, 0, 0); font-family: Georgia, serif; font-size: 16px;\"><br></p></h2>', 'Show', 'meta title', 'meta description', '0000-00-00 00:00:00', '2024-01-12 12:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `page_blog_items`
--

CREATE TABLE `page_blog_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_blog_items`
--

INSERT INTO `page_blog_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Blog', NULL, 'Show', 'CMSMULTI blog and news', 'CMSMULTI  meta description', '0000-00-00 00:00:00', '2024-01-12 13:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `page_board_items`
--

CREATE TABLE `page_board_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_board_items`
--

INSERT INTO `page_board_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Board', NULL, 'Show', 'CMSMULTI meta title', 'CMSMULTI meta data', '2022-04-22 14:00:00', '2024-01-12 13:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `page_branch_items`
--

CREATE TABLE `page_branch_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_branch_items`
--

INSERT INTO `page_branch_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Branch', NULL, 'Show', 'CMSMULTI branches', 'CMSMULTI is a leading technological company based in Ethiopia.', '0000-00-00 00:00:00', '2024-01-12 13:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `page_career_items`
--

CREATE TABLE `page_career_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_career_items`
--

INSERT INTO `page_career_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Career', NULL, 'Show', 'CMSMULTI meta title', 'CMSMULTI', '0000-00-00 00:00:00', '2024-01-12 13:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `page_contact_items`
--

CREATE TABLE `page_contact_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `contact_address` text DEFAULT NULL,
  `contact_email` text DEFAULT NULL,
  `contact_phone` text DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_contact_items`
--

INSERT INTO `page_contact_items` (`id`, `name`, `detail`, `status`, `contact_address`, `contact_email`, `contact_phone`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', '<p><br></p>', 'Show', 'Your address City\r\nYour Country', 'demo@example.com\r\nsupport@example.com', 'Office 1: +422222222222\r\nOffice 2: +433333333333', 'CMSMULTI meta title', 'CMSMULTI meta descrption', '0000-00-00 00:00:00', '2024-01-12 13:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `page_developer_items`
--

CREATE TABLE `page_developer_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_developer_items`
--

INSERT INTO `page_developer_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Developer', '', 'Show', 'developer', 'web developer, system administrator, system developer, networking', '0000-00-00 00:00:00', '2022-04-29 19:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_document_items`
--

CREATE TABLE `page_document_items` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_document_items`
--

INSERT INTO `page_document_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Document', NULL, 'Show', 'CMSMULTI meta title', 'CMSMULTI meta description', '2022-12-10 14:50:54', '2024-01-12 13:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_faq_items`
--

CREATE TABLE `page_faq_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_faq_items`
--

INSERT INTO `page_faq_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'FAQ', '', 'Show', 'FAQ', 'FAQ', '0000-00-00 00:00:00', '2020-11-21 05:17:22');

-- --------------------------------------------------------

--
-- Table structure for table `page_home_items`
--

CREATE TABLE `page_home_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seo_title` text NOT NULL,
  `seo_meta_description` text NOT NULL,
  `why_choose_title` text NOT NULL,
  `why_choose_subtitle` text NOT NULL,
  `why_choose_status` text NOT NULL,
  `special_title` text NOT NULL,
  `special_subtitle` text NOT NULL,
  `special_content` text NOT NULL,
  `special_btn_text` text NOT NULL,
  `special_btn_url` text NOT NULL,
  `special_yt_video` text NOT NULL,
  `special_bg` text NOT NULL,
  `special_video_bg` text NOT NULL,
  `special_status` text NOT NULL,
  `service_title` text NOT NULL,
  `service_subtitle` text NOT NULL,
  `service_status` text NOT NULL,
  `testimonial_title` text NOT NULL,
  `testimonial_subtitle` text NOT NULL,
  `testimonial_status` text NOT NULL,
  `testimonial_bg` text NOT NULL,
  `project_title` text NOT NULL,
  `project_subtitle` text NOT NULL,
  `project_status` text NOT NULL,
  `team_member_title` text NOT NULL,
  `team_member_subtitle` text NOT NULL,
  `team_member_status` text NOT NULL,
  `appointment_title` text NOT NULL,
  `appointment_text` text NOT NULL,
  `appointment_btn_text` text NOT NULL,
  `appointment_btn_url` text NOT NULL,
  `appointment_bg` text NOT NULL,
  `appointment_status` text NOT NULL,
  `latest_blog_title` text NOT NULL,
  `latest_blog_subtitle` text NOT NULL,
  `latest_blog_status` text NOT NULL,
  `newsletter_title` text NOT NULL,
  `newsletter_text` text NOT NULL,
  `newsletter_bg` text NOT NULL,
  `newsletter_status` text NOT NULL,
  `partner_title` text NOT NULL,
  `partner_subtitle` text NOT NULL,
  `partner_status` text NOT NULL,
  `senior_title` text DEFAULT NULL,
  `senior_subtitle` text DEFAULT NULL,
  `senior_status` text NOT NULL,
  `board_title` text NOT NULL,
  `board_subtitle` text NOT NULL,
  `board_status` text NOT NULL,
  `document_title` text NOT NULL,
  `document_subtitle` text NOT NULL,
  `document_status` text NOT NULL,
  `about_us_title` text DEFAULT NULL,
  `about_us_subtitle` text DEFAULT NULL,
  `about_us_status` text DEFAULT NULL,
  `why_choose_bg` text NOT NULL,
  `counter_title` text NOT NULL,
  `counter_subtitle` text NOT NULL,
  `counter_status` text NOT NULL,
  `counter_bg` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_home_items`
--

INSERT INTO `page_home_items` (`id`, `seo_title`, `seo_meta_description`, `why_choose_title`, `why_choose_subtitle`, `why_choose_status`, `special_title`, `special_subtitle`, `special_content`, `special_btn_text`, `special_btn_url`, `special_yt_video`, `special_bg`, `special_video_bg`, `special_status`, `service_title`, `service_subtitle`, `service_status`, `testimonial_title`, `testimonial_subtitle`, `testimonial_status`, `testimonial_bg`, `project_title`, `project_subtitle`, `project_status`, `team_member_title`, `team_member_subtitle`, `team_member_status`, `appointment_title`, `appointment_text`, `appointment_btn_text`, `appointment_btn_url`, `appointment_bg`, `appointment_status`, `latest_blog_title`, `latest_blog_subtitle`, `latest_blog_status`, `newsletter_title`, `newsletter_text`, `newsletter_bg`, `newsletter_status`, `partner_title`, `partner_subtitle`, `partner_status`, `senior_title`, `senior_subtitle`, `senior_status`, `board_title`, `board_subtitle`, `board_status`, `document_title`, `document_subtitle`, `document_status`, `about_us_title`, `about_us_subtitle`, `about_us_status`, `why_choose_bg`, `counter_title`, `counter_subtitle`, `counter_status`, `counter_bg`, `created_at`, `updated_at`) VALUES
(1, 'CMSMULTI', 'your meta description', 'Why Choose Us', 'You should choose our product for the following reasons', 'Show', 'Welcome to our website', 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\n\r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Read More', '#', 'UreGlSvnb1A', 'special_bg.png', 'special_video_bg.png', 'Show', 'Our Services', 'Our team always provides quality services to our valuable clients', 'Show', 'Testimonial', 'What our clients tell about us', 'Show', 'testimonial_bg.png', 'Our Projects', 'See all our completed successful projects here', 'Show', 'Team Members', 'See all our expert team members who are ready to help you always', 'Show', 'Lorem Ipsum has been the industry\'s standard', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Make An Appointment', '#', 'appointment_bg.png', 'Show', 'Latest Blog', 'See all the latest blog about our activity from here', 'Show', 'Newsletter', 'TO GET FREE NOTIFICATIONS SUBSCRIBE TO OUR NEWSLETTER', 'newsletter_bg.jpg', 'Show', 'Our Partners', 'See all our Partners', 'Show', 'Senior Management', 'See all our Senior Management', 'Show', 'Board of Directors', 'Lorem Ipsum has been the industry\'s standard', 'Show', 'Public Documents & Files', 'See All Document', 'Show', 'About Us', 'About our Business', 'Show', '', 'counter', 'counter section', 'Show', 'counter_bg.png', '0000-00-00 00:00:00', '2024-01-12 13:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `page_other_items`
--

CREATE TABLE `page_other_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seo_title` text NOT NULL,
  `seo_meta_description` text NOT NULL,
  `page_name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_other_items`
--

INSERT INTO `page_other_items` (`id`, `seo_title`, `seo_meta_description`, `page_name`, `created_at`, `updated_at`) VALUES
(1, 'Search', 'Search Page Description', 'Search Page', '0000-00-00 00:00:00', '2020-11-21 22:03:51'),
(2, 'Cart', 'Cart Page Description', 'Cart Page', '0000-00-00 00:00:00', '2020-11-21 22:03:55'),
(3, 'Checkout', 'Checkout Page Description', 'Checkout Page', '0000-00-00 00:00:00', '2020-11-21 22:04:00'),
(4, 'Login', 'Login Page Description', 'Login Page', '0000-00-00 00:00:00', '2020-12-22 20:19:05'),
(5, 'Registration', 'Registration Page Description', 'Registration Page', '0000-00-00 00:00:00', '2020-11-21 22:04:09'),
(6, 'Forget Password', 'Forget Password Page Description', 'Forget Password Page', '0000-00-00 00:00:00', '2020-12-22 20:19:07'),
(7, 'Customer Panel', 'Customer Page Description', 'Customer Panel Pages', '0000-00-00 00:00:00', '2020-11-21 22:04:19'),
(8, 'Payment', 'Payment Page Description', 'Payment Page', '0000-00-00 00:00:00', '2020-12-22 20:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `page_photo_gallery_items`
--

CREATE TABLE `page_photo_gallery_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_photo_gallery_items`
--

INSERT INTO `page_photo_gallery_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Photo Gallery', '', 'Show', 'Photo Gallery', 'Photo Gallery', '0000-00-00 00:00:00', '2020-12-12 10:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `page_privacy_items`
--

CREATE TABLE `page_privacy_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_privacy_items`
--

INSERT INTO `page_privacy_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Privacy Policy', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and\r\n typesetting industry. Lorem Ipsum has been the industry\'s standard \r\ndummy text ever since the 1500s, when an unknown printer took a galley \r\nof type and scrambled it to make a type specimen book. It has survived \r\nnot only five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>\r\n</div><div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the\r\n readable content of a page when looking at its layout. The point of \r\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \r\nletters, as opposed to using \'Content here, content here\', making it \r\nlook like readable English. Many desktop publishing packages and web \r\npage editors now use Lorem Ipsum as their default model text, and a \r\nsearch for \'lorem ipsum\' will uncover many web sites still in their \r\ninfancy. Various versions have evolved over the years, sometimes by \r\naccident, sometimes on purpose (injected humour and the like).</p>\r\n</div><br><div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It\r\n has roots in a piece of classical Latin literature from 45 BC, making \r\nit over 2000 years old. Richard McClintock, a Latin professor at \r\nHampden-Sydney College in Virginia, looked up one of the more obscure \r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through \r\nthe cites of the word in classical literature, discovered the \r\nundoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 \r\nof \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by \r\nCicero, written in 45 BC. This book is a treatise on the theory of \r\nethics, very popular during the Renaissance. The first line of Lorem \r\nIpsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section \r\n1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is\r\n reproduced below for those interested. Sections 1.10.32 and 1.10.33 \r\nfrom \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in \r\ntheir exact original form, accompanied by English versions from the 1914\r\n translation by H. Rackham.</p>\r\n</div>\r\n<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but \r\nthe majority have suffered alteration in some form, by injected humour, \r\nor randomised words which don\'t look even slightly believable. If you \r\nare going to use a passage of Lorem Ipsum, you need to be sure there \r\nisn\'t anything embarrassing hidden in the middle of text. All the Lorem \r\nIpsum generators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etc.</p>', 'Show', 'meta Privacy Policy', 'meta Privacy Policy', '0000-00-00 00:00:00', '2024-01-12 12:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `page_project_items`
--

CREATE TABLE `page_project_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_project_items`
--

INSERT INTO `page_project_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Projects', '', 'Show', 'Projects', 'Project Page Meta Description', '0000-00-00 00:00:00', '2020-11-21 05:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `page_senior_items`
--

CREATE TABLE `page_senior_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_senior_items`
--

INSERT INTO `page_senior_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Senior', NULL, 'Show', 'CMSMULTI senior management', 'CMSMULTI senior managements', '2022-04-27 15:00:58', '2024-01-12 13:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `page_service_items`
--

CREATE TABLE `page_service_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_service_items`
--

INSERT INTO `page_service_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Services', NULL, 'Show', 'CMSMULTI Services', 'CMSMULTI is a leading technological company based in Ethiopia.', '0000-00-00 00:00:00', '2024-01-12 13:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `page_shop_items`
--

CREATE TABLE `page_shop_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_shop_items`
--

INSERT INTO `page_shop_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Shop', NULL, 'Show', 'meta title Shop', 'CMSMULTI data', '0000-00-00 00:00:00', '2024-01-12 13:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `page_team_items`
--

CREATE TABLE `page_team_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_team_items`
--

INSERT INTO `page_team_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Team Member', '', 'Show', 'Team Member', 'Team Member', '0000-00-00 00:00:00', '2020-11-21 05:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `page_term_items`
--

CREATE TABLE `page_term_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_term_items`
--

INSERT INTO `page_term_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Terms and Conditions', '<br><div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It\r\n has roots in a piece of classical Latin literature from 45 BC, making \r\nit over 2000 years old. Richard McClintock, a Latin professor at \r\nHampden-Sydney College in Virginia, looked up one of the more obscure \r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through \r\nthe cites of the word in classical literature, discovered the \r\nundoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 \r\nof \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by \r\nCicero, written in 45 BC. This book is a treatise on the theory of \r\nethics, very popular during the Renaissance. The first line of Lorem \r\nIpsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section \r\n1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is\r\n reproduced below for those interested. Sections 1.10.32 and 1.10.33 \r\nfrom \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in \r\ntheir exact original form, accompanied by English versions from the 1914\r\n translation by H. Rackham.</p>\r\n</div>\r\n<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but \r\nthe majority have suffered alteration in some form, by injected humour, \r\nor randomised words which don\'t look even slightly believable. If you \r\nare going to use a passage of Lorem Ipsum, you need to be sure there \r\nisn\'t anything embarrassing hidden in the middle of text. All the Lorem \r\nIpsum generators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etc.</p>', 'Show', 'meta terms and conditions', 'meta terms and conditions', '0000-00-00 00:00:00', '2024-01-12 12:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `page_video_gallery_items`
--

CREATE TABLE `page_video_gallery_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `detail` text DEFAULT NULL,
  `status` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_video_gallery_items`
--

INSERT INTO `page_video_gallery_items` (`id`, `name`, `detail`, `status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Video Gallery', '', 'Show', 'Video Gallery', 'Video Gallery', '0000-00-00 00:00:00', '2020-12-12 10:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner_name` varchar(255) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `partner_url` varchar(255) NOT NULL,
  `partner_photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partner_name`, `status`, `partner_url`, `partner_photo`, `created_at`, `updated_at`) VALUES
(1, 'lorum', 'Active', 'https://example.com/', 'partner-1.png', '0000-00-00 00:00:00', '2022-04-23 13:33:53'),
(2, 'lorum', '', 'https://example.com/', 'partner-2.png', '2022-04-23 13:33:29', '2022-04-23 13:34:50'),
(3, 'lorum', '', 'https://example.com/', 'partner-3.png', '2022-04-23 14:44:46', '2022-04-23 14:44:46'),
(4, 'lorum', '', 'https://example.com/', 'partner-4.png', '2022-04-23 15:08:43', '2022-04-23 15:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('arefi@gmail.com', '$2y$10$n.b82lZQRLiL4WIgRsgpeu8UpfQMmx9M1FdiQQ18rjK38i9yGD6kG', '2020-11-23 19:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `role_page_id` int(11) NOT NULL,
  `access_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo_name` text NOT NULL,
  `photo_caption` text DEFAULT NULL,
  `photo_order` smallint(6) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo_name`, `photo_caption`, `photo_order`, `created_at`, `updated_at`) VALUES
(3, 'photo-3.jpg', 'Item 1', 1, '2020-11-22 20:27:59', '2022-04-18 12:48:18'),
(4, 'photo-4.jpg', 'Item 2', 2, '2020-11-22 20:28:26', '2022-04-26 14:28:57'),
(5, 'photo-5.jpg', 'Item 3', 3, '2020-11-22 20:28:34', '2022-04-26 14:29:05'),
(6, 'photo-6.jpg', 'Item 4', 4, '2020-11-22 20:28:42', '2022-04-26 14:30:22'),
(7, 'photo-7.jpg', 'Item 5', 5, '2020-11-22 20:28:59', '2022-04-26 14:30:35'),
(8, 'photo-8.jpg', 'Item 6', 6, '2020-11-22 20:29:07', '2022-04-26 14:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` tinyint(11) DEFAULT NULL,
  `product_name` text NOT NULL,
  `product_slug` text DEFAULT NULL,
  `product_old_price` text DEFAULT NULL,
  `product_current_price` text NOT NULL,
  `product_stock` smallint(6) NOT NULL,
  `product_content` text NOT NULL,
  `product_content_short` text NOT NULL,
  `product_return_policy` text DEFAULT NULL,
  `product_featured_photo` text NOT NULL,
  `product_order` smallint(6) NOT NULL DEFAULT 0,
  `product_status` text NOT NULL,
  `seo_title` text NOT NULL,
  `seo_meta_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_slug`, `product_old_price`, `product_current_price`, `product_stock`, `product_content`, `product_content_short`, `product_return_policy`, `product_featured_photo`, `product_order`, `product_status`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Product Item Name 1', 'product-item-name-1', '59', '39', 7, '<p>Lorem ipsum dolor sit amet, erat dicat percipitur vix in, habeo expetendis nam et, his homero verterem molestiae ea. Tantas legere blandit duo ei, ei malis maluisset voluptatum mei. Ne mel alia consul equidem, at mea timeam indoctum explicari. Ut detracto gubergren dissentiet sea, harum dolores deserunt ut sed. Mel ne animal invidunt petentium, te mei exerci voluptaria. Quo id populo fabulas voluptatum, ius ei legere deterruisset, et nec ridens liberavisse. Nusquam partiendo scribentur quo an.</p><p>Et duo inermis tacimates, sed id posse intellegebat, ut sed agam aperiri. Nam ex dolorem vivendum, te omnis eleifend est, atqui tempor fabellas ne qui. Cotidieque reprehendunt eam no. Sed at alii sanctus, ius dictas mediocritatem in. Qui stet principes ut, ad pro dicat oporteat. Doctus senserit sea ut, eum an iisque neglegentur. Fugit putant consequuntur id sit.</p><p>In vidisse referrentur consectetuer duo. Dolor vocibus consulatu an pro, ei sed graece tritani perpetua. Mel et dolorem percipit, per nemore commune gloriatur no. Ex sed minim utamur intellegebat.&nbsp;</p>', 'Lorem ipsum dolor sit amet, erat dicat percipitur vix in, habeo expetendis nam et, his homero verterem molestiae ea.', '<p>Eu eos malis dicat facilisis, aliquip alterum assentior at vix. Inimicus interpretaris ei vim, graece singulis atomorum ad per, ea sed admodum apeirian indoctum. Cu pro tantas reprehendunt. Usu menandri pertinacia et, vis ne scaevola dissentias. In ornatus eligendi persequeris his, ea usu causae labitur. At porro delectus sed. Quot minim ei has, has id dolore maiorum interesset.</p><p>Justo incorrupte ea quo, adhuc eligendi reprimique pro et. Eos nobis aeterno conclusionemque ei, no eam dolor delectus. Error altera argumentum quo ea, eam ne antiopam assentior. Ea mea ullum dicant timeam, sea affert reformidans ad. Ei dicam appetere sea, id phaedrum moderatius sed.</p><p>Ad mel velit quidam honestatis. Has no mediocrem repudiandae, mel in ceteros perfecto gubergren, has ne dignissim consequat theophrastus. Duo et assum harum iriure, solum ubique philosophia per an, mea clita nominati reprehendunt ei. Zril melius dignissim qui ad. Debitis fierent quo in, no usu affert aeterno.</p>', 'product-1.jpg', 1, 'Show', 'Product Item Name', 'Product Item Name', '2020-11-30 03:40:11', '2023-10-25 13:23:27'),
(3, 4, 'Product Item Name 2', 'product-item-name-2', '166', '110', 24, '<p>Lorem ipsum dolor sit amet, erat dicat percipitur vix in, habeo expetendis nam et, his homero verterem molestiae ea. Tantas legere blandit duo ei, ei malis maluisset voluptatum mei. Ne mel alia consul equidem, at mea timeam indoctum explicari. Ut detracto gubergren dissentiet sea, harum dolores deserunt ut sed. Mel ne animal invidunt petentium, te mei exerci voluptaria. Quo id populo fabulas voluptatum, ius ei legere deterruisset, et nec ridens liberavisse. Nusquam partiendo scribentur quo an.</p><p>Et duo inermis tacimates, sed id posse intellegebat, ut sed agam aperiri. Nam ex dolorem vivendum, te omnis eleifend est, atqui tempor fabellas ne qui. Cotidieque reprehendunt eam no. Sed at alii sanctus, ius dictas mediocritatem in. Qui stet principes ut, ad pro dicat oporteat. Doctus senserit sea ut, eum an iisque neglegentur. Fugit putant consequuntur id sit.</p><p>In vidisse referrentur consectetuer duo. Dolor vocibus consulatu an pro, ei sed graece tritani perpetua. Mel et dolorem percipit, per nemore commune gloriatur no. Ex sed minim utamur intellegebat.</p>', 'Lorem ipsum dolor sit amet, erat dicat percipitur vix in, habeo expetendis nam et, his homero verterem molestiae ea.', '<p>Eu eos malis dicat facilisis, aliquip alterum assentior at vix. Inimicus interpretaris ei vim, graece singulis atomorum ad per, ea sed admodum apeirian indoctum. Cu pro tantas reprehendunt. Usu menandri pertinacia et, vis ne scaevola dissentias. In ornatus eligendi persequeris his, ea usu causae labitur. At porro delectus sed. Quot minim ei has, has id dolore maiorum interesset.</p><p>Justo incorrupte ea quo, adhuc eligendi reprimique pro et. Eos nobis aeterno conclusionemque ei, no eam dolor delectus. Error altera argumentum quo ea, eam ne antiopam assentior. Ea mea ullum dicant timeam, sea affert reformidans ad. Ei dicam appetere sea, id phaedrum moderatius sed.</p><p>Ad mel velit quidam honestatis. Has no mediocrem repudiandae, mel in ceteros perfecto gubergren, has ne dignissim consequat theophrastus. Duo et assum harum iriure, solum ubique philosophia per an, mea clita nominati reprehendunt ei. Zril melius dignissim qui ad. Debitis fierent quo in, no usu affert aeterno.</p>', 'product-3.jpg', 2, 'Show', 'Product Item Name', 'Product Item Name', '2020-11-30 09:36:05', '2023-10-25 13:30:18'),
(4, 3, 'Product Item Name 3', 'product-item-name-3', '9', '5', 1, '<p>Lorem ipsum dolor sit amet, erat dicat percipitur vix in, habeo expetendis nam et, his homero verterem molestiae ea. Tantas legere blandit duo ei, ei malis maluisset voluptatum mei. Ne mel alia consul equidem, at mea timeam indoctum explicari. Ut detracto gubergren dissentiet sea, harum dolores deserunt ut sed. Mel ne animal invidunt petentium, te mei exerci voluptaria. Quo id populo fabulas voluptatum, ius ei legere deterruisset, et nec ridens liberavisse. Nusquam partiendo scribentur quo an.</p><p>Et duo inermis tacimates, sed id posse intellegebat, ut sed agam aperiri. Nam ex dolorem vivendum, te omnis eleifend est, atqui tempor fabellas ne qui. Cotidieque reprehendunt eam no. Sed at alii sanctus, ius dictas mediocritatem in. Qui stet principes ut, ad pro dicat oporteat. Doctus senserit sea ut, eum an iisque neglegentur. Fugit putant consequuntur id sit.</p><p>In vidisse referrentur consectetuer duo. Dolor vocibus consulatu an pro, ei sed graece tritani perpetua. Mel et dolorem percipit, per nemore commune gloriatur no. Ex sed minim utamur intellegebat.</p>', 'Lorem ipsum dolor sit amet, erat dicat percipitur vix in, habeo expetendis nam et, his homero verterem molestiae ea.', '<p>Eu eos malis dicat facilisis, aliquip alterum assentior at vix. Inimicus interpretaris ei vim, graece singulis atomorum ad per, ea sed admodum apeirian indoctum. Cu pro tantas reprehendunt. Usu menandri pertinacia et, vis ne scaevola dissentias. In ornatus eligendi persequeris his, ea usu causae labitur. At porro delectus sed. Quot minim ei has, has id dolore maiorum interesset.</p><p>Justo incorrupte ea quo, adhuc eligendi reprimique pro et. Eos nobis aeterno conclusionemque ei, no eam dolor delectus. Error altera argumentum quo ea, eam ne antiopam assentior. Ea mea ullum dicant timeam, sea affert reformidans ad. Ei dicam appetere sea, id phaedrum moderatius sed.</p><p>Ad mel velit quidam honestatis. Has no mediocrem repudiandae, mel in ceteros perfecto gubergren, has ne dignissim consequat theophrastus. Duo et assum harum iriure, solum ubique philosophia per an, mea clita nominati reprehendunt ei. Zril melius dignissim qui ad. Debitis fierent quo in, no usu affert aeterno.</p>', 'product-4.jpg', 3, 'Show', 'Product Item Name', 'Product Item Name', '2020-11-30 09:37:39', '2023-10-25 13:29:35'),
(5, 3, 'Product Item Name 4', 'product-item-name-4', '29', '22', 40, '<p>Lorem ipsum dolor sit amet, te constituto intellegam eloquentiam sed, putent accusamus temporibus his ut. Prima impetus virtute usu ex, et vim numquam efficiantur, cu vis option civibus. Ad tale quas corpora has, melius nostrud ius ad, sonet consectetuer signiferumque cu usu. Sed te adhuc atomorum, ad quo erant alterum reprimique. Virtute equidem deseruisse vim ei.</p><p>Eu vim atqui ludus petentium, suas idque est id. Ne veniam oblique propriae vim, dicant forensibus definitionem vix eu. Pri eu probatus abhorreant, nonumy aliquid perpetua ut usu. Etiam iudicabit vituperata ne est, id sed everti utroque, vis ea oblique pertinax concludaturque.</p><p>Te cum abhorreant temporibus, eam mazim platonem ea. Dolor abhorreant sea et, usu cu debet bonorum, aliquando instructior necessitatibus vix te. Ea ubique percipit recusabo cum, regione consulatu interpretaris vim no, mel altera fabulas probatus ad. Ignota tritani ad nam, eu per delectus perfecto conceptam.</p><p>An sanctus pertinax cotidieque sed, quo te habemus molestiae consetetur, at salutandi periculis expetendis vim. Quando nusquam eum ut, ius an quem alii. Sit ad ullum consequuntur. Ei sea iudico sententiae honestatis, mel dolorem pertinax senserit ei, cu causae timeam eripuit sit. Sed ex habeo blandit oporteat, ex usu autem iisque. Vel minim dicam soleat te, denique liberavisse ex usu, cibo omnes te eam. Pri esse nobis no, no quo volutpat vulputate.</p>', 'Lorem ipsum dolor sit amet, te constituto intellegam eloquentiam sed, putent accusamus temporibus his ut.', '<p>Eu eos malis dicat facilisis, aliquip alterum assentior at vix. Inimicus interpretaris ei vim, graece singulis atomorum ad per, ea sed admodum apeirian indoctum. Cu pro tantas reprehendunt. Usu menandri pertinacia et, vis ne scaevola dissentias. In ornatus eligendi persequeris his, ea usu causae labitur. At porro delectus sed. Quot minim ei has, has id dolore maiorum interesset.</p><p>Justo incorrupte ea quo, adhuc eligendi reprimique pro et. Eos nobis aeterno conclusionemque ei, no eam dolor delectus. Error altera argumentum quo ea, eam ne antiopam assentior. Ea mea ullum dicant timeam, sea affert reformidans ad. Ei dicam appetere sea, id phaedrum moderatius sed.</p><p>Ad mel velit quidam honestatis. Has no mediocrem repudiandae, mel in ceteros perfecto gubergren, has ne dignissim consequat theophrastus. Duo et assum harum iriure, solum ubique philosophia per an, mea clita nominati reprehendunt ei. Zril melius dignissim qui ad. Debitis fierent quo in, no usu affert aeterno.</p>', 'product-5.jpg', 4, 'Show', 'Product Item Name', 'Product Item Name', '2020-11-30 09:38:45', '2023-10-25 13:29:46'),
(6, NULL, 'Product Item Name 5', 'product-item-name-5', '370', '299', 34, '<p>Lorem ipsum dolor sit amet, te constituto intellegam eloquentiam sed, putent accusamus temporibus his ut. Prima impetus virtute usu ex, et vim numquam efficiantur, cu vis option civibus. Ad tale quas corpora has, melius nostrud ius ad, sonet consectetuer signiferumque cu usu. Sed te adhuc atomorum, ad quo erant alterum reprimique. Virtute equidem deseruisse vim ei.</p><p>Eu vim atqui ludus petentium, suas idque est id. Ne veniam oblique propriae vim, dicant forensibus definitionem vix eu. Pri eu probatus abhorreant, nonumy aliquid perpetua ut usu. Etiam iudicabit vituperata ne est, id sed everti utroque, vis ea oblique pertinax concludaturque.</p><p>Te cum abhorreant temporibus, eam mazim platonem ea. Dolor abhorreant sea et, usu cu debet bonorum, aliquando instructior necessitatibus vix te. Ea ubique percipit recusabo cum, regione consulatu interpretaris vim no, mel altera fabulas probatus ad. Ignota tritani ad nam, eu per delectus perfecto conceptam.</p><p>An sanctus pertinax cotidieque sed, quo te habemus molestiae consetetur, at salutandi periculis expetendis vim. Quando nusquam eum ut, ius an quem alii. Sit ad ullum consequuntur. Ei sea iudico sententiae honestatis, mel dolorem pertinax senserit ei, cu causae timeam eripuit sit. Sed ex habeo blandit oporteat, ex usu autem iisque. Vel minim dicam soleat te, denique liberavisse ex usu, cibo omnes te eam. Pri esse nobis no, no quo volutpat vulputate.</p>', 'Lorem ipsum dolor sit amet, te constituto intellegam eloquentiam sed, putent accusamus temporibus his ut.', '<p>Eu eos malis dicat facilisis, aliquip alterum assentior at vix. Inimicus interpretaris ei vim, graece singulis atomorum ad per, ea sed admodum apeirian indoctum. Cu pro tantas reprehendunt. Usu menandri pertinacia et, vis ne scaevola dissentias. In ornatus eligendi persequeris his, ea usu causae labitur. At porro delectus sed. Quot minim ei has, has id dolore maiorum interesset.</p><p>Justo incorrupte ea quo, adhuc eligendi reprimique pro et. Eos nobis aeterno conclusionemque ei, no eam dolor delectus. Error altera argumentum quo ea, eam ne antiopam assentior. Ea mea ullum dicant timeam, sea affert reformidans ad. Ei dicam appetere sea, id phaedrum moderatius sed.</p><p>Ad mel velit quidam honestatis. Has no mediocrem repudiandae, mel in ceteros perfecto gubergren, has ne dignissim consequat theophrastus. Duo et assum harum iriure, solum ubique philosophia per an, mea clita nominati reprehendunt ei. Zril melius dignissim qui ad. Debitis fierent quo in, no usu affert aeterno.</p>', 'product-6.png', 5, 'Show', 'Product Item Name', 'Product Item Name', '2020-11-30 09:39:42', '2020-11-30 19:03:29'),
(7, NULL, 'Product Item Name 6', 'product-item-name-6', '28', '20', 33, '<p>Lorem ipsum dolor sit amet, te constituto intellegam eloquentiam sed, putent accusamus temporibus his ut. Prima impetus virtute usu ex, et vim numquam efficiantur, cu vis option civibus. Ad tale quas corpora has, melius nostrud ius ad, sonet consectetuer signiferumque cu usu. Sed te adhuc atomorum, ad quo erant alterum reprimique. Virtute equidem deseruisse vim ei.</p><p>Eu vim atqui ludus petentium, suas idque est id. Ne veniam oblique propriae vim, dicant forensibus definitionem vix eu. Pri eu probatus abhorreant, nonumy aliquid perpetua ut usu. Etiam iudicabit vituperata ne est, id sed everti utroque, vis ea oblique pertinax concludaturque.</p><p>Te cum abhorreant temporibus, eam mazim platonem ea. Dolor abhorreant sea et, usu cu debet bonorum, aliquando instructior necessitatibus vix te. Ea ubique percipit recusabo cum, regione consulatu interpretaris vim no, mel altera fabulas probatus ad. Ignota tritani ad nam, eu per delectus perfecto conceptam.</p><p>An sanctus pertinax cotidieque sed, quo te habemus molestiae consetetur, at salutandi periculis expetendis vim. Quando nusquam eum ut, ius an quem alii. Sit ad ullum consequuntur. Ei sea iudico sententiae honestatis, mel dolorem pertinax senserit ei, cu causae timeam eripuit sit. Sed ex habeo blandit oporteat, ex usu autem iisque. Vel minim dicam soleat te, denique liberavisse ex usu, cibo omnes te eam. Pri esse nobis no, no quo volutpat vulputate.</p>', 'Lorem ipsum dolor sit amet, te constituto intellegam eloquentiam sed, putent accusamus temporibus his ut.', '<p>Eu eos malis dicat facilisis, aliquip alterum assentior at vix. Inimicus interpretaris ei vim, graece singulis atomorum ad per, ea sed admodum apeirian indoctum. Cu pro tantas reprehendunt. Usu menandri pertinacia et, vis ne scaevola dissentias. In ornatus eligendi persequeris his, ea usu causae labitur. At porro delectus sed. Quot minim ei has, has id dolore maiorum interesset.</p><p>Justo incorrupte ea quo, adhuc eligendi reprimique pro et. Eos nobis aeterno conclusionemque ei, no eam dolor delectus. Error altera argumentum quo ea, eam ne antiopam assentior. Ea mea ullum dicant timeam, sea affert reformidans ad. Ei dicam appetere sea, id phaedrum moderatius sed.</p><p>Ad mel velit quidam honestatis. Has no mediocrem repudiandae, mel in ceteros perfecto gubergren, has ne dignissim consequat theophrastus. Duo et assum harum iriure, solum ubique philosophia per an, mea clita nominati reprehendunt ei. Zril melius dignissim qui ad. Debitis fierent quo in, no usu affert aeterno.</p>', 'product-7.png', 6, 'Show', 'Product Item Name', 'Product Item Name', '2020-11-30 09:40:29', '2020-11-30 19:03:34'),
(8, NULL, 'Product Item Name 7', 'product-item-name-7', '65', '45', 40, '<p>Lorem ipsum dolor sit amet, te constituto intellegam eloquentiam sed, putent accusamus temporibus his ut. Prima impetus virtute usu ex, et vim numquam efficiantur, cu vis option civibus. Ad tale quas corpora has, melius nostrud ius ad, sonet consectetuer signiferumque cu usu. Sed te adhuc atomorum, ad quo erant alterum reprimique. Virtute equidem deseruisse vim ei.</p><p>Eu vim atqui ludus petentium, suas idque est id. Ne veniam oblique propriae vim, dicant forensibus definitionem vix eu. Pri eu probatus abhorreant, nonumy aliquid perpetua ut usu. Etiam iudicabit vituperata ne est, id sed everti utroque, vis ea oblique pertinax concludaturque.</p><p>Te cum abhorreant temporibus, eam mazim platonem ea. Dolor abhorreant sea et, usu cu debet bonorum, aliquando instructior necessitatibus vix te. Ea ubique percipit recusabo cum, regione consulatu interpretaris vim no, mel altera fabulas probatus ad. Ignota tritani ad nam, eu per delectus perfecto conceptam.</p><p>An sanctus pertinax cotidieque sed, quo te habemus molestiae consetetur, at salutandi periculis expetendis vim. Quando nusquam eum ut, ius an quem alii. Sit ad ullum consequuntur. Ei sea iudico sententiae honestatis, mel dolorem pertinax senserit ei, cu causae timeam eripuit sit. Sed ex habeo blandit oporteat, ex usu autem iisque. Vel minim dicam soleat te, denique liberavisse ex usu, cibo omnes te eam. Pri esse nobis no, no quo volutpat vulputate.</p>', 'Lorem ipsum dolor sit amet, te constituto intellegam eloquentiam sed, putent accusamus temporibus his ut.', '<p>Eu eos malis dicat facilisis, aliquip alterum assentior at vix. Inimicus interpretaris ei vim, graece singulis atomorum ad per, ea sed admodum apeirian indoctum. Cu pro tantas reprehendunt. Usu menandri pertinacia et, vis ne scaevola dissentias. In ornatus eligendi persequeris his, ea usu causae labitur. At porro delectus sed. Quot minim ei has, has id dolore maiorum interesset.</p><p>Justo incorrupte ea quo, adhuc eligendi reprimique pro et. Eos nobis aeterno conclusionemque ei, no eam dolor delectus. Error altera argumentum quo ea, eam ne antiopam assentior. Ea mea ullum dicant timeam, sea affert reformidans ad. Ei dicam appetere sea, id phaedrum moderatius sed.</p><p>Ad mel velit quidam honestatis. Has no mediocrem repudiandae, mel in ceteros perfecto gubergren, has ne dignissim consequat theophrastus. Duo et assum harum iriure, solum ubique philosophia per an, mea clita nominati reprehendunt ei. Zril melius dignissim qui ad. Debitis fierent quo in, no usu affert aeterno.</p>', 'product-8.png', 7, 'Show', 'Product Item Name', 'Product Item Name', '2020-11-30 09:41:18', '2020-11-30 19:03:38'),
(9, NULL, 'Product Item Name 8', 'product-item-name-8', '20', '15', 7, '<p>Lorem ipsum dolor sit amet, te constituto intellegam eloquentiam sed, putent accusamus temporibus his ut. Prima impetus virtute usu ex, et vim numquam efficiantur, cu vis option civibus. Ad tale quas corpora has, melius nostrud ius ad, sonet consectetuer signiferumque cu usu. Sed te adhuc atomorum, ad quo erant alterum reprimique. Virtute equidem deseruisse vim ei.</p><p>Eu vim atqui ludus petentium, suas idque est id. Ne veniam oblique propriae vim, dicant forensibus definitionem vix eu. Pri eu probatus abhorreant, nonumy aliquid perpetua ut usu. Etiam iudicabit vituperata ne est, id sed everti utroque, vis ea oblique pertinax concludaturque.</p><p>Te cum abhorreant temporibus, eam mazim platonem ea. Dolor abhorreant sea et, usu cu debet bonorum, aliquando instructior necessitatibus vix te. Ea ubique percipit recusabo cum, regione consulatu interpretaris vim no, mel altera fabulas probatus ad. Ignota tritani ad nam, eu per delectus perfecto conceptam.</p><p>An sanctus pertinax cotidieque sed, quo te habemus molestiae consetetur, at salutandi periculis expetendis vim. Quando nusquam eum ut, ius an quem alii. Sit ad ullum consequuntur. Ei sea iudico sententiae honestatis, mel dolorem pertinax senserit ei, cu causae timeam eripuit sit. Sed ex habeo blandit oporteat, ex usu autem iisque. Vel minim dicam soleat te, denique liberavisse ex usu, cibo omnes te eam. Pri esse nobis no, no quo volutpat vulputate.</p>', 'Lorem ipsum dolor sit amet, te constituto intellegam eloquentiam sed, putent accusamus temporibus his ut.', '<p>Eu eos malis dicat facilisis, aliquip alterum assentior at vix. Inimicus interpretaris ei vim, graece singulis atomorum ad per, ea sed admodum apeirian indoctum. Cu pro tantas reprehendunt. Usu menandri pertinacia et, vis ne scaevola dissentias. In ornatus eligendi persequeris his, ea usu causae labitur. At porro delectus sed. Quot minim ei has, has id dolore maiorum interesset.</p><p>Justo incorrupte ea quo, adhuc eligendi reprimique pro et. Eos nobis aeterno conclusionemque ei, no eam dolor delectus. Error altera argumentum quo ea, eam ne antiopam assentior. Ea mea ullum dicant timeam, sea affert reformidans ad. Ei dicam appetere sea, id phaedrum moderatius sed.</p><p>Ad mel velit quidam honestatis. Has no mediocrem repudiandae, mel in ceteros perfecto gubergren, has ne dignissim consequat theophrastus. Duo et assum harum iriure, solum ubique philosophia per an, mea clita nominati reprehendunt ei. Zril melius dignissim qui ad. Debitis fierent quo in, no usu affert aeterno.</p>', 'product-9.png', 8, 'Show', 'Product Item Name', 'Product Item Name', '2020-11-30 09:42:06', '2020-11-30 19:03:42'),
(10, 1, 'Product name', 'product-item', '90', '45', 10, '<p dir=\"auto\">Nova Translation is a tool for Laravel Nova which allows you full control\r\nover your translations when using <a href=\"https://laravel.com/docs/5.7/localization\" rel=\"nofollow\">Laravel\'s\r\nlocalization</a> functionality.</p>\r\n<p dir=\"auto\">The package allows you to manage your translations using either the native file\r\nbased translations, but also provides a database driver which is useful in\r\nmulti-server setups.</p>\r\n<p dir=\"auto\">It exposes a user interface allowing you to update existing and add new\r\ntranslations to your application.</p>\r\n<p dir=\"auto\">Below are a full list of features:</p>\r\n<ul dir=\"auto\"><li>File and database drivers</li><li>Database translation loader (automatically load translations from the database\r\nwhen Laravel\'s translation retrieval methods and the database driver)</li><li>User interface to add new languages and add and update translations</li><li>Artisan commands to manage your translations</li><li>Scan your application for missing translations</li></ul><p></p>', 'The package allows you to manage your translations using either the native file based translations, but also provides a database driver which is useful in multi-server setups.', '<p>The package allows you to manage your translations using either the native file\r\nbased translations, but also provides a database driver which is useful in\r\nmulti-server setups.</p>', 'product-10.png', 6, 'Show', 'product', 'product', '2023-10-25 14:27:15', '2023-10-25 14:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `category_name`, `category_slug`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Computer & Accessories', 'computer_and_accessories', NULL, NULL, '2023-10-25 13:14:52', '2023-10-25 13:14:52'),
(2, 'Furniture & Eqipement', 'furniture_and_equipment', NULL, NULL, '2023-10-25 13:28:32', '2023-10-25 13:28:32'),
(3, 'Veichels', 'veichels', NULL, NULL, '2023-10-25 13:29:24', '2023-10-25 13:29:24'),
(4, 'Digital Product', 'digital_product', NULL, NULL, '2023-10-25 13:30:04', '2023-10-25 13:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` text NOT NULL,
  `project_slug` text DEFAULT NULL,
  `project_content` text DEFAULT NULL,
  `project_content_short` text DEFAULT NULL,
  `project_start_date` text DEFAULT NULL,
  `project_end_date` text DEFAULT NULL,
  `project_client_name` text DEFAULT NULL,
  `project_client_company` text DEFAULT NULL,
  `project_client_comment` text DEFAULT NULL,
  `project_video` text DEFAULT NULL,
  `project_featured_photo` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_slug`, `project_content`, `project_content_short`, `project_start_date`, `project_end_date`, `project_client_name`, `project_client_company`, `project_client_comment`, `project_video`, `project_featured_photo`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(3, 'Libris impetus molestiae te eu ius ludus', 'libris-impetus-molestiae-te-eu-ius-ludus', '<p>Lorem ipsum dolor sit amet, eu vim elitr clita, quot putent feugait cu per. Tamquam voluptua persequeris ad cum, at his cibo scaevola. Cibo justo equidem cu nam. An meliore admodum vis, quot aliquip bonorum ei quo. Mea nemore feugiat verterem cu, modus vulputate mea id.</p><p>Est facilis recteque et, etiam aliquip fastidii usu ea, eos id diam aeterno definiebas. Ad pro tantas numquam alienum, an quidam dolorem voluptatum his, ut natum explicari consequat quo. Minim audiam te vel, in est decore legimus. Semper accusamus posidonium ea duo, usu tale fabellas cu, elitr semper tincidunt ius in. Cum possim labitur eripuit at, vix ut quas commodo neglegentur.</p><p>Cetero mnesarchum id vis, id sea magna interpretaris. In perpetua posidonium complectitur duo. Te duo harum veniam altera, pri veritus nusquam offendit ex. Sed no ferri soleat quaerendum, quo ad vitae utroque expetendis, ex lorem soleat vis.</p>', 'Lorem ipsum dolor sit amet, eu vim elitr clita, quot putent feugait cu per. Tamquam voluptua persequeris ad cum, at his cibo scaevola. Cibo justo equidem cu nam.', '2020-01-01', '2020-02-21', 'Client Name Here', 'Company Name Here', 'Qui commune laboramus definitionem et, ut regione persius vel, facete verterem has eu. Scripta iracundia mel in, vim omittam perpetua ut. Magna affert graece at pri, et est blandit laboramus. Duo feugiat periculis eu, ne illum melius molestie has.', 'wwOY6RgrDKQ', 'project-featured-photo-3.png', 'Libris impetus molestiae te eu ius ludus', 'Libris impetus molestiae te eu ius ludus', '2020-11-22 18:39:57', '2024-01-12 13:33:09'),
(8, 'Eu paulo lucilius adipisci duo eam', 'eu-paulo-lucilius-adipisci-duo-eam', '<p>Lorem ipsum dolor sit amet, eu vim elitr clita, quot putent feugait cu per. Tamquam voluptua persequeris ad cum, at his cibo scaevola. Cibo justo equidem cu nam. An meliore admodum vis, quot aliquip bonorum ei quo. Mea nemore feugiat verterem cu, modus vulputate mea id.<br></p><p>Est facilis recteque et, etiam aliquip fastidii usu ea, eos id diam aeterno definiebas. Ad pro tantas numquam alienum, an quidam dolorem voluptatum his, ut natum explicari consequat quo. Minim audiam te vel, in est decore legimus. Semper accusamus posidonium ea duo, usu tale fabellas cu, elitr semper tincidunt ius in. Cum possim labitur eripuit at, vix ut quas commodo neglegentur.</p><p>Cetero mnesarchum id vis, id sea magna interpretaris. In perpetua posidonium complectitur duo. Te duo harum veniam altera, pri veritus nusquam offendit ex. Sed no ferri soleat quaerendum, quo ad vitae utroque expetendis, ex lorem soleat vis.</p>', 'Lorem ipsum dolor sit amet, eu vim elitr clita, quot putent feugait cu per. Tamquam voluptua persequeris ad cum, at his cibo scaevola. Cibo justo equidem cu nam.', '2020-03-03', '2020-04-23', 'Client Name Here', 'Company Name Here', 'Qui commune laboramus definitionem et, ut regione persius vel, facete verterem has eu. Scripta iracundia mel in, vim omittam perpetua ut. Magna affert graece at pri, et est blandit laboramus. Duo feugiat periculis eu, ne illum melius molestie has.', 'hfDUf8g94nA', 'project-featured-photo-8.png', 'Eu paulo lucilius adipisci duo eam', 'Eu paulo lucilius adipisci duo eam', '2020-12-13 03:20:04', '2020-12-13 03:20:04'),
(9, 'Debitis consequuntur sea eu ex agam', 'debitis-consequuntur-sea-eu-ex-agam', '<p>Lorem ipsum dolor sit amet, eu vim elitr clita, quot putent feugait cu per. Tamquam voluptua persequeris ad cum, at his cibo scaevola. Cibo justo equidem cu nam. An meliore admodum vis, quot aliquip bonorum ei quo. Mea nemore feugiat verterem cu, modus vulputate mea id.<br></p><p>Est facilis recteque et, etiam aliquip fastidii usu ea, eos id diam aeterno definiebas. Ad pro tantas numquam alienum, an quidam dolorem voluptatum his, ut natum explicari consequat quo. Minim audiam te vel, in est decore legimus. Semper accusamus posidonium ea duo, usu tale fabellas cu, elitr semper tincidunt ius in. Cum possim labitur eripuit at, vix ut quas commodo neglegentur.</p><p>Cetero mnesarchum id vis, id sea magna interpretaris. In perpetua posidonium complectitur duo. Te duo harum veniam altera, pri veritus nusquam offendit ex. Sed no ferri soleat quaerendum, quo ad vitae utroque expetendis, ex lorem soleat vis.</p>', 'Lorem ipsum dolor sit amet, eu vim elitr clita, quot putent feugait cu per. Tamquam voluptua persequeris ad cum, at his cibo scaevola. Cibo justo equidem cu nam.', '2020-03-25', '2020-05-05', 'Client Name Here', 'Company Name Here', 'Qui commune laboramus definitionem et, ut regione persius vel, facete verterem has eu. Scripta iracundia mel in, vim omittam perpetua ut. Magna affert graece at pri, et est blandit laboramus. Duo feugiat periculis eu, ne illum melius molestie has.', 'eT68ne9TwsA', 'project-featured-photo-9.png', 'Debitis consequuntur sea eu ex agam', 'Debitis consequuntur sea eu ex agam', '2020-12-13 03:22:01', '2020-12-13 03:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `project_photos`
--

CREATE TABLE `project_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `project_photo` text NOT NULL,
  `project_photo_caption` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_photos`
--

INSERT INTO `project_photos` (`id`, `project_id`, `project_photo`, `project_photo_caption`, `created_at`, `updated_at`) VALUES
(19, 8, 'project-photo-19.png', 'Project Photo', '2020-12-13 03:24:34', '2020-12-13 03:24:34'),
(20, 8, 'project-photo-20.png', 'Project Photo', '2020-12-13 03:24:53', '2020-12-13 03:24:53'),
(21, 8, 'project-photo-21.png', 'Project Photo', '2020-12-13 03:25:09', '2020-12-13 03:25:09'),
(22, 9, 'project-photo-22.png', 'Project Photo', '2020-12-13 03:25:46', '2020-12-13 03:25:46'),
(23, 9, 'project-photo-23.png', 'Project Photo', '2020-12-13 03:26:07', '2020-12-13 03:26:07'),
(24, 3, 'project-photo-24.png', 'CMSMULTI', '2024-01-12 13:35:27', '2024-01-12 13:35:27'),
(25, 3, 'project-photo-25.png', 'CMSMULTI 1', '2024-01-12 13:35:37', '2024-01-12 13:35:37'),
(26, 3, 'project-photo-26.png', 'CMSMULTI 2', '2024-01-12 13:35:46', '2024-01-12 13:35:46'),
(27, 8, 'project-photo-27.png', 'CMSMULTI', '2024-01-12 13:36:22', '2024-01-12 13:36:22'),
(28, 9, 'project-photo-28.png', 'CMSMULTI', '2024-01-12 13:36:40', '2024-01-12 13:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Manager', '2021-03-05 18:43:49', '2021-03-05 19:41:00'),
(5, 'Editor', '2021-03-05 18:44:05', '2021-03-05 18:45:00'),
(7, 'Human Resource', '2022-04-13 12:30:34', '2022-04-18 17:28:47'),
(8, 'Operation', '2022-04-18 17:29:07', '2022-04-18 17:29:07'),
(9, 'test', '2023-03-04 15:06:09', '2023-03-04 15:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `role_pages`
--

CREATE TABLE `role_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_pages`
--

INSERT INTO `role_pages` (`id`, `page_title`, `created_at`, `updated_at`) VALUES
(1, 'General Settings', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Page Settings', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Footer Columns', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Sliders', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Blog Section', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Dynamic Pages', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Admin User Section', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Menu Manage', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Project', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Career Section', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Photo Gallery', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Video Gallery', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Product Section', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Order Section', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Customer Section', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Why Choose Us', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Service', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Testimonial', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Team Member', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'FAQ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Email Template', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Subscriber Section', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Social Media', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Branch', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Folders', '2023-02-15 10:22:35', '0000-00-00 00:00:00'),
(26, 'Counter', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'permissions', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'sharesubscribe', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `role_page_id` int(11) NOT NULL,
  `operation` varchar(255) DEFAULT NULL,
  `access_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`id`, `role_id`, `role_page_id`, `operation`, `access_status`, `created_at`, `updated_at`) VALUES
(1, 4, 1, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 4, 2, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 4, 3, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, 4, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 4, 5, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 4, 6, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 4, 7, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 4, 8, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 4, 9, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 4, 10, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 4, 11, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 4, 12, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 4, 13, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 4, 14, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 4, 15, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 4, 16, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 4, 17, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 4, 18, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 4, 19, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 4, 20, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 4, 21, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 4, 22, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 4, 23, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 5, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 5, 2, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 5, 3, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 5, 4, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 5, 5, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 5, 6, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 5, 7, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 5, 8, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 5, 9, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 5, 10, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 5, 11, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 5, 12, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 5, 13, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 5, 14, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 5, 15, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 5, 16, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 5, 17, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 5, 18, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 5, 19, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 5, 20, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 5, 21, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 5, 22, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 5, 23, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 7, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 7, 2, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 7, 3, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 7, 4, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 7, 5, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 7, 6, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 7, 7, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 7, 8, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 7, 9, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 7, 10, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 7, 11, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 7, 12, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 7, 13, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 7, 14, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 7, 15, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 7, 16, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 7, 17, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 7, 18, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 7, 19, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 7, 20, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 7, 21, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 7, 22, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 7, 23, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 8, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 8, 2, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 8, 3, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 8, 4, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 8, 5, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 8, 6, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 8, 7, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 8, 8, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 8, 9, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 8, 10, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 8, 11, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 8, 12, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 8, 13, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 8, 14, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 8, 15, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 8, 16, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 8, 17, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 8, 18, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 8, 19, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 8, 20, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 8, 21, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 8, 22, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 8, 23, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 25, 25, NULL, 1, '2023-02-15 19:54:16', '2023-02-15 19:54:16'),
(117, 4, 25, NULL, 1, '2023-02-15 20:05:46', '2023-02-15 21:23:50'),
(118, 5, 25, NULL, 0, '2023-02-15 21:25:33', '2023-02-15 21:25:33'),
(119, 7, 25, NULL, 0, '2023-02-15 21:25:57', '2023-02-15 21:25:57'),
(120, 8, 25, NULL, 0, '2023-02-15 21:26:10', '2023-02-15 21:26:10'),
(121, 9, 1, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 9, 2, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 9, 3, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 9, 4, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 9, 5, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 9, 6, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 9, 7, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 9, 8, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 9, 9, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 9, 10, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 9, 11, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 9, 12, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 9, 13, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 9, 14, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 9, 15, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 9, 16, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 9, 17, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 9, 18, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 9, 19, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 9, 20, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 9, 21, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 9, 22, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 9, 23, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 9, 24, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 9, 25, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 4, 26, NULL, 0, '2023-03-10 16:39:31', '2023-03-10 16:39:31'),
(147, 4, 27, NULL, 0, '2023-03-10 16:39:48', '2023-03-10 16:39:48'),
(148, 4, 29, NULL, 0, '2023-03-10 16:40:07', '2023-03-10 16:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `senior_management`
--

CREATE TABLE `senior_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` text NOT NULL,
  `slug` text DEFAULT NULL,
  `designation` text NOT NULL,
  `ceo_message` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `senior_management`
--

INSERT INTO `senior_management` (`id`, `category_id`, `name`, `slug`, `designation`, `ceo_message`, `detail`, `facebook`, `twitter`, `linkedin`, `youtube`, `instagram`, `email`, `phone`, `website`, `address`, `photo`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mr John doe', 'bewuketu-alameraw', 'Chief executive Officer', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It\r\n has roots in a piece of classical Latin literature from 45 BC, making \r\nit over 2000 years old. Richard McClintock, a Latin professor at \r\nHampden-Sydney College in Virginia, looked up one of the more obscure \r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through \r\nthe cites of the word in classical literature, discovered the \r\nundoubtable source.</p>', '<blockquote class=\"blockquote\"><span style=\"color: rgb(38, 38, 38); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 13px;\">“The question I ask myself like almost every day is, ‘Am I doing the most important thing I could be doing?’… Unless I feel like I’m working on the most important problem that I can help with, then I’m not going to feel good about how I’m spending my time. And that’s what this company is.”</span></blockquote>', '#', '#', '#', '', '#', NULL, NULL, NULL, 'Your address', 'senior-management-1.png', 'meta title', 'meta description', '2022-04-27 02:58:18', '2024-01-12 13:21:52'),
(2, 4, 'Mr John doe', 'shoangizaw-chane', 'IT Service Head', NULL, NULL, '#', '#', '#', '', '#', NULL, NULL, NULL, 'Your address', 'senior-management-2.png', 'meta title', 'meta description', '2022-04-27 03:05:01', '2024-01-12 13:16:11'),
(3, 3, 'Mr Been', 'amsalu-gelanh-derso', 'Financial Service Head', NULL, NULL, '#', '#', '#', '', '#', NULL, NULL, NULL, 'Addis Ababa', 'senior-management-3.png', 'meta title', 'meta description', '2022-04-28 01:00:01', '2024-01-12 13:17:04'),
(6, 2, 'Mr John Wieck', 'ato-abeyu-ytewabe', 'Operation Manager', NULL, NULL, '#', '#', '#', '', '#', 'abiyu@gmail.com', '09222222222', NULL, 'Your address', 'senior-management-6.png', 'meta title', 'meta description', '2022-04-28 01:04:12', '2024-01-12 13:18:00'),
(7, 5, 'Mr Belingham', 'ato_kebede_beleachew', 'Legal Service Head', NULL, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It\r\n has roots in a piece of classical Latin literature from 45 BC, making \r\nit over 2000 years old. Richard McClintock, a Latin professor at \r\nHampden-Sydney College in Virginia, looked up one of the more obscure \r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through \r\nthe cites of the word in classical literature, discovered the \r\nundoubtable source.</p>', '#', '#', '#', NULL, '#', NULL, NULL, NULL, 'address', 'senior-management-7.png', 'meta title', 'meta description', '2023-10-19 19:37:57', '2024-01-12 13:23:32'),
(8, 6, 'Mr John Mcgriegore', 'ato-samson-getahun', 'Internal Audit and Risk Management Director', NULL, NULL, '#', '#', '#', NULL, '#', NULL, '+4222222', '#', 'Your address', 'senior-management-8.png', 'meta title', 'meta description', '2023-10-20 17:24:00', '2024-01-12 13:19:06');

-- --------------------------------------------------------

--
-- Table structure for table `senior_managements`
--

CREATE TABLE `senior_managements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `slug` text DEFAULT NULL,
  `designation` text NOT NULL,
  `detail` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senior_managemnts`
--

CREATE TABLE `senior_managemnts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `slug` text DEFAULT NULL,
  `designation` text NOT NULL,
  `detail` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `slug` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `photo` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `description`, `short_description`, `photo`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Micro Saving', 'Micro-Saving', '<p>Lorem ipsum dolor sit amet, porro dicam docendi mei an. Vis paulo euismod delectus an. Te has prima fierent, suscipit platonem necessitatibus nec cu. Eu cum justo munere malorum, quo cu quando adipisci, ex porro ceteros duo. Has cu aeterno fastidii vituperatoribus, duo ea nihil percipitur.</p><p>Ne mea quaestio tincidunt, modus cetero singulis et per. Vix ne fuisset senserit. Partem instructior ne per. Ea est erant forensibus, pri ne prima mucius dictas, in cum graeci corpora volutpat. Cum ea virtute feugait delicatissimi, reque clita vel at, habeo luptatum et eam.</p><p>Id duo alia animal apeirian, cum persius aliquam incorrupte et. Utinam deleniti ponderum ex mel, adhuc singulis democritum has ad, te duo postea antiopam consectetuer. Sit stet tractatos definiebas no, malis libris delicata mei te. At dicit habemus adversarium eam, falli error quo ex, no mel altera cetero officiis. Has ad affert putent epicuri, alia dolorem scriptorem sea an.</p>', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'service-1.jpg', 'Micro Saving', 'Micro Saving', '2020-11-22 23:35:59', '2022-04-20 13:10:19'),
(2, 'Micro Credit', 'Micro-Credit', '<p>Lorem ipsum dolor sit amet, porro dicam docendi mei an. Vis paulo euismod delectus an. Te has prima fierent, suscipit platonem necessitatibus nec cu. Eu cum justo munere malorum, quo cu quando adipisci, ex porro ceteros duo. Has cu aeterno fastidii vituperatoribus, duo ea nihil percipitur.</p><p>Ne mea quaestio tincidunt, modus cetero singulis et per. Vix ne fuisset senserit. Partem instructior ne per. Ea est erant forensibus, pri ne prima mucius dictas, in cum graeci corpora volutpat. Cum ea virtute feugait delicatissimi, reque clita vel at, habeo luptatum et eam.</p><p>Id duo alia animal apeirian, cum persius aliquam incorrupte et. Utinam deleniti ponderum ex mel, adhuc singulis democritum has ad, te duo postea antiopam consectetuer. Sit stet tractatos definiebas no, malis libris delicata mei te. At dicit habemus adversarium eam, falli error quo ex, no mel altera cetero officiis. Has ad affert putent epicuri, alia dolorem scriptorem sea an.</p>', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'service-2.png', 'Micro Credit', 'Micro Credit', '2020-11-22 23:36:45', '2022-04-20 13:11:01'),
(3, 'Financial Literacy', 'financial-literacy', '<p>Lorem ipsum dolor sit amet, porro dicam docendi mei an. Vis paulo euismod delectus an. Te has prima fierent, suscipit platonem necessitatibus nec cu. Eu cum justo munere malorum, quo cu quando adipisci, ex porro ceteros duo. Has cu aeterno fastidii vituperatoribus, duo ea nihil percipitur.</p><p>Ne mea quaestio tincidunt, modus cetero singulis et per. Vix ne fuisset senserit. Partem instructior ne per. Ea est erant forensibus, pri ne prima mucius dictas, in cum graeci corpora volutpat. Cum ea virtute feugait delicatissimi, reque clita vel at, habeo luptatum et eam.</p><p>Id duo alia animal apeirian, cum persius aliquam incorrupte et. Utinam deleniti ponderum ex mel, adhuc singulis democritum has ad, te duo postea antiopam consectetuer. Sit stet tractatos definiebas no, malis libris delicata mei te. At dicit habemus adversarium eam, falli error quo ex, no mel altera cetero officiis. Has ad affert putent epicuri, alia dolorem scriptorem sea an.</p>', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'service-3.png', 'Financial Literacy', 'Financial Literacy', '2020-11-22 23:37:17', '2022-04-20 13:11:28'),
(4, 'Project Management', 'project-management', '<p>Lorem ipsum dolor sit amet, porro dicam docendi mei an. Vis paulo euismod delectus an. Te has prima fierent, suscipit platonem necessitatibus nec cu. Eu cum justo munere malorum, quo cu quando adipisci, ex porro ceteros duo. Has cu aeterno fastidii vituperatoribus, duo ea nihil percipitur.</p><p>Ne mea quaestio tincidunt, modus cetero singulis et per. Vix ne fuisset senserit. Partem instructior ne per. Ea est erant forensibus, pri ne prima mucius dictas, in cum graeci corpora volutpat. Cum ea virtute feugait delicatissimi, reque clita vel at, habeo luptatum et eam.</p><p>Id duo alia animal apeirian, cum persius aliquam incorrupte et. Utinam deleniti ponderum ex mel, adhuc singulis democritum has ad, te duo postea antiopam consectetuer. Sit stet tractatos definiebas no, malis libris delicata mei te. At dicit habemus adversarium eam, falli error quo ex, no mel altera cetero officiis. Has ad affert putent epicuri, alia dolorem scriptorem sea an.</p>', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'service-4.png', 'Project Management', 'Project Management', '2020-11-22 23:37:38', '2024-01-11 11:17:07'),
(5, 'Quality Assurance', 'quality-assurance', '<p>Lorem ipsum dolor sit amet, porro dicam docendi mei an. Vis paulo euismod delectus an. Te has prima fierent, suscipit platonem necessitatibus nec cu. Eu cum justo munere malorum, quo cu quando adipisci, ex porro ceteros duo. Has cu aeterno fastidii vituperatoribus, duo ea nihil percipitur.</p><p>Ne mea quaestio tincidunt, modus cetero singulis et per. Vix ne fuisset senserit. Partem instructior ne per. Ea est erant forensibus, pri ne prima mucius dictas, in cum graeci corpora volutpat. Cum ea virtute feugait delicatissimi, reque clita vel at, habeo luptatum et eam.</p><p>Id duo alia animal apeirian, cum persius aliquam incorrupte et. Utinam deleniti ponderum ex mel, adhuc singulis democritum has ad, te duo postea antiopam consectetuer. Sit stet tractatos definiebas no, malis libris delicata mei te. At dicit habemus adversarium eam, falli error quo ex, no mel altera cetero officiis. Has ad affert putent epicuri, alia dolorem scriptorem sea an.</p>', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'service-5.jpeg', 'Quality Assurance', 'Quality Assurance', '2020-11-22 23:37:53', '2020-11-22 23:40:33'),
(6, 'Fast Loan Approve', 'fast-loan-approve', '<p>Lorem ipsum dolor sit amet, porro dicam docendi mei an. Vis paulo euismod delectus an. Te has prima fierent, suscipit platonem necessitatibus nec cu. Eu cum justo munere malorum, quo cu quando adipisci, ex porro ceteros duo. Has cu aeterno fastidii vituperatoribus, duo ea nihil percipitur.</p><p>Ne mea quaestio tincidunt, modus cetero singulis et per. Vix ne fuisset senserit. Partem instructior ne per. Ea est erant forensibus, pri ne prima mucius dictas, in cum graeci corpora volutpat. Cum ea virtute feugait delicatissimi, reque clita vel at, habeo luptatum et eam.</p><p>Id duo alia animal apeirian, cum persius aliquam incorrupte et. Utinam deleniti ponderum ex mel, adhuc singulis democritum has ad, te duo postea antiopam consectetuer. Sit stet tractatos definiebas no, malis libris delicata mei te. At dicit habemus adversarium eam, falli error quo ex, no mel altera cetero officiis. Has ad affert putent epicuri, alia dolorem scriptorem sea an.</p>', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'service-6.webp', 'Fast Loan Approve', 'Fast Loan Approve', '2020-11-22 23:38:07', '2024-01-11 11:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6Swj7jS91oIODryTwBAvj43JyksA957hXlczZ0XS', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 Edg/123.0.0.0', 'YToxMDp7czo2OiJfdG9rZW4iO3M6NDA6ImdsV1pmRmJzaWpuSDZoV2ZWd3BJaUVYZHZvNTZ4ckhaTGkxSDNaVVQiO3M6OToic2V0TG9jYWxlIjtzOjI6ImFtIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MjoiaHR0cDovL2xvY2FsaG9zdC9sYXJhMTEvYWRtaW4vcGFydG5lci92aWV3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJyb2xlIjtzOjU6ImFkbWluIjtzOjI6ImlkIjtpOjE7czo0OiJuYW1lIjtzOjExOiJOaWd1cyBBYmF0ZSI7czo1OiJlbWFpbCI7czoyMToiYWJhdGVuaWd1czBAZ21haWwuY29tIjtzOjU6InBob3RvIjtzOjEwOiJ1c2VyLTEucG5nIjtzOjc6InJvbGVfaWQiO2k6MTt9', 1712775722),
('dxFpRg5M7fHGEmsKUmYXnh38YfSuJtoM2wwfkAue', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 Edg/123.0.0.0', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoiYjltWmZsSG5DOGw4c2Y3ZjY1UnkzSmRLb3JnM05rdFZ0TDdNVHFjeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly9sb2NhbGhvc3QvbGFyYTExIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJyb2xlIjtzOjU6ImFkbWluIjtzOjI6ImlkIjtpOjE7czo0OiJuYW1lIjtzOjExOiJOaWd1cyBBYmF0ZSI7czo1OiJlbWFpbCI7czoyMToiYWJhdGVuaWd1czBAZ21haWwuY29tIjtzOjU6InBob3RvIjtzOjEwOiJ1c2VyLTEucG5nIjtzOjc6InJvbGVfaWQiO2k6MTt9', 1712775771);

-- --------------------------------------------------------

--
-- Table structure for table `setup_guides`
--

CREATE TABLE `setup_guides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `action_route` varchar(255) NOT NULL,
  `action_label` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setup_guides`
--

INSERT INTO `setup_guides` (`id`, `task_name`, `title`, `description`, `action_route`, `action_label`, `status`, `created_at`, `updated_at`) VALUES
(1, 'app_setting', 'App Information ', 'Add your app logo, name, description, owner and other information.', 'settings.general', 'Add App Information', 1, '2023-09-13 09:49:38', '2023-10-11 11:27:21'),
(2, 'smtp_setting', 'SMTP Configuration', 'Add your app logo, name, description, owner and other information.', 'settings.email', 'Add Mail Configuration', 1, '2023-09-13 09:49:38', '2023-10-05 12:55:58'),
(3, 'payment_setting', 'Enable Payment Method', 'Enable to payment methods to receive payments from your customer.', 'settings.payment', 'Add Payment', 1, '2023-09-13 09:49:38', '2023-10-04 11:05:29'),
(4, 'theme_setting', 'Customize Theme', 'Customize your theme to make your app look more attractive.', 'settings.theme', 'Customize Your App Now', 1, '2023-09-13 09:49:38', '2023-09-13 09:49:38'),
(5, 'app_setting', 'App Information ', 'Add your app logo, name, description, owner and other information.', 'settings.general', 'Add App Information', 1, '2023-09-26 20:54:56', '2023-10-11 11:27:21'),
(6, 'smtp_setting', 'SMTP Configuration', 'Add your app logo, name, description, owner and other information.', 'settings.email', 'Add Mail Configuration', 1, '2023-09-26 20:54:56', '2023-10-05 12:55:58'),
(7, 'payment_setting', 'Enable Payment Method', 'Enable to payment methods to receive payments from your customer.', 'settings.payment', 'Add Payment', 1, '2023-09-26 20:54:56', '2023-10-04 11:05:29'),
(8, 'theme_setting', 'Customize Theme', 'Customize your theme to make your app look more attractive.', 'settings.theme', 'Customize Your App Now', 1, '2023-09-26 20:54:56', '2023-09-26 20:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_name` text NOT NULL,
  `shipping_text` text NOT NULL,
  `shipping_cost` varchar(10) NOT NULL,
  `shipping_order` smallint(6) NOT NULL DEFAULT 0,
  `shipping_status` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `shipping_name`, `shipping_text`, `shipping_cost`, `shipping_order`, `shipping_status`, `created_at`, `updated_at`) VALUES
(1, 'Free Shipping', 'Shipment will be within 10-15 Days', '0', 1, 'Show', '2020-11-29 21:08:10', '2020-11-29 21:11:47'),
(2, 'Standard Shipping', 'Shipment will be within 5-10 Day.', '5', 2, 'Show', '2020-11-29 21:14:01', '2020-11-29 21:14:01'),
(3, '2-Day Shipping', 'Shipment will be within 2 Days.', '10', 3, 'Show', '2020-11-29 21:14:21', '2020-11-29 21:14:21'),
(4, 'Same day delivery', 'Shipment will be within 1 Day.', '20', 4, 'Show', '2020-11-29 21:14:46', '2020-11-29 21:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_heading` varchar(255) DEFAULT NULL,
  `slider_text` text DEFAULT NULL,
  `slider_button_text` varchar(255) NOT NULL,
  `slider_button_url` varchar(255) NOT NULL,
  `slider_photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_heading`, `slider_text`, `slider_button_text`, `slider_button_url`, `slider_photo`, `created_at`, `updated_at`) VALUES
(2, 'We are number one in creative business', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', 'Read More', '#', 'slider-2.jpg', '2020-11-19 22:21:45', '2024-01-12 13:01:24'),
(3, 'We work for your success in real', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', 'Read More', '#', 'slider-3.jpg', '2020-11-19 22:22:04', '2024-01-12 13:02:28'),
(4, 'Why Choose Us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Read More!', '#', 'slider-4.jpg', '2022-04-13 17:09:47', '2024-01-12 13:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `social_media_items`
--

CREATE TABLE `social_media_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_url` text NOT NULL,
  `social_icon` text NOT NULL,
  `social_order` smallint(6) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media_items`
--

INSERT INTO `social_media_items` (`id`, `social_url`, `social_icon`, `social_order`, `created_at`, `updated_at`) VALUES
(2, '#', 'fab fa-twitter', 2, '2020-11-24 18:54:56', '2020-11-24 19:07:08'),
(4, '#', 'fab fa-facebook-f', 1, '2020-11-24 18:56:23', '2020-11-25 03:04:07'),
(5, '#', 'fab fa-linkedin-in', 3, '2020-11-24 19:07:28', '2024-01-12 12:58:40'),
(6, '#', 'fab fa-pinterest-p', 4, '2020-11-24 19:07:41', '2020-11-24 19:08:17'),
(8, '#', 'fab fa-instagram', 5, '2022-04-13 12:32:10', '2022-04-13 12:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subs_email` text NOT NULL,
  `subs_token` text DEFAULT NULL,
  `subs_active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `subs_email`, `subs_token`, `subs_active`, `created_at`, `updated_at`) VALUES
(7, 'admin@gmail.com', '7849fe0aef78486761b7bc8102eee46b8352485e80c3a913500f0b0ed98c9619', 1, '2023-09-04 18:20:38', '0000-00-00 00:00:00'),
(8, 'nigusa@gmail.com', '7e017dd276cfe10d57ec64d2eef8573a087136bc74de77e8aea9896895bd5e1c', 1, '2023-10-01 18:20:52', '0000-00-00 00:00:00'),
(9, 'customer@gmail.com', '18deb4937098b936c8d0ed4fe9fd84712bf3e961dac6f689fc0a1f6cf863e6e1', 0, '2023-10-18 18:20:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `slug` text DEFAULT NULL,
  `designation` text NOT NULL,
  `degree` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `video_youtube` text DEFAULT NULL,
  `photo` text NOT NULL,
  `seo_title` text DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `slug`, `designation`, `degree`, `detail`, `facebook`, `twitter`, `linkedin`, `youtube`, `instagram`, `email`, `phone`, `website`, `address`, `video_youtube`, `photo`, `seo_title`, `seo_meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Nigus Abate', 'nigus-abate', 'Founder', '<p>Lorem ipsum dolor sit amet, ea qui tation adversarium definitionem, eu labitur denique est. Ad duo quando recusabo petentium. Mea elit affert oportere ex. Ut error affert accusam pri. Sit no causae vidisse invenire, bonorum inermis nec ex.</p><p>Eam sint reformidans ex, ex doming iracundia his. Sint modus pro ne, vix ut omnis scripta corpora. Sea graecis suavitate te. Eum tantas possim torquatos ei. An qui falli sadipscing suscipiantur. At congue forensibus constituto his, erat vidit veniam vis eu, dico soleat possim nec ei.</p><p>Cu modo adipisci sea. At clita doctus sit. Pri ex solet deterruisset, falli harum fuisset qui ei, an commune delicata patrioque sit. Fabulas adversarium no sea, at quis disputando pri, meis epicurei eloquentiam vix ad. An consulatu sententiae posidonium his, te elaboraret cotidieque eos, sed an illud recteque.</p><p>Eu per altera aliquam consulatu, ea pro nulla doctus. Sea porro everti an, nostrud ceteros nam no. Ei quando qualisque his, alterum ocurreret nec eu, dolorum deseruisse ad mel. Nam vidit omnis ad, pro eu veniam efficiendi, sea an iriure vivendo appetere. Usu ad latine vocibus voluptatum.</p><p>Et bonorum consetetur mediocritatem qui, cu est omnis persequeris, mea te doctus incorrupte. Vix et tale justo. Vel te lorem sapientem interesset. Ne ius tantas saperet officiis, volutpat adolescens ut sea, an animal consectetuer vis. Nonumy ornatus constituam vis ne, cum ne vidisse patrioque.</p>', '<p>Fugit contentiones id nam, noster percipit ne mei. Duo no modo tempor, per ea quaeque commune complectitur, sed ex alia utamur apeirian. Est id solum dicant ceteros. Quem omnium dignissim in vim, sea nihil expetenda id, molestiae definitionem ad pri.</p><p>Id per esse iudicabit expetendis, ne qui legimus accusata corrumpit. Ei has duis corrumpit, facilisis accommodare te nec. Ne usu molestiae voluptatum mediocritatem, tota percipitur ut qui. Ne modo idque feugait vel. Postea epicuri mei te. Ad tollit qualisque dignissim per, eu purto virtute fabulas his.</p><p>Viris ignota vim et. Ea idque etiam liberavisse has. Ex mel lorem voluptatibus, sed vero accusata no. Ad pri utinam praesent, usu iuvaret adipisci contentiones an. Eum falli fabellas ut, usu te putent posidonium.</p><p>Ei cum elit fuisset, ad tota assueverit scriptorem qui, pro ex utamur recteque incorrupte. Has iisque consectetuer eu. Malis doming eirmod id his, te mea novum offendit. Ea minim doming evertitur eum, latine neglegentur no nec. Ea pro putant perpetua interpretaris. Mea ne noster aliquando constituam, iudico discere neglegentur vel cu, mandamus corrumpit duo ne.</p>', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', 'http://www.youtube.com', 'http://www.instagram.com', 'nigusabate4@gmail.com', '+251915852276', 'http://www.yourwebsite1.com', '4008 Cherchill Street\r\nAddis Ababa, FL 32809', 'UreGlSvnb1A', 'team-member-1.png', 'Nigus Abate', 'Nigus Abate', '2020-11-23 10:53:34', '2024-01-12 13:48:18'),
(2, 'Mr X', 'mr-x', 'Chairman', '<p>Lorem ipsum dolor sit amet, ea qui tation adversarium definitionem, eu labitur denique est. Ad duo quando recusabo petentium. Mea elit affert oportere ex. Ut error affert accusam pri. Sit no causae vidisse invenire, bonorum inermis nec ex.<br></p><p>Eam sint reformidans ex, ex doming iracundia his. Sint modus pro ne, vix ut omnis scripta corpora. Sea graecis suavitate te. Eum tantas possim torquatos ei. An qui falli sadipscing suscipiantur. At congue forensibus constituto his, erat vidit veniam vis eu, dico soleat possim nec ei.</p><p>Cu modo adipisci sea. At clita doctus sit. Pri ex solet deterruisset, falli harum fuisset qui ei, an commune delicata patrioque sit. Fabulas adversarium no sea, at quis disputando pri, meis epicurei eloquentiam vix ad. An consulatu sententiae posidonium his, te elaboraret cotidieque eos, sed an illud recteque.</p><p>Eu per altera aliquam consulatu, ea pro nulla doctus. Sea porro everti an, nostrud ceteros nam no. Ei quando qualisque his, alterum ocurreret nec eu, dolorum deseruisse ad mel. Nam vidit omnis ad, pro eu veniam efficiendi, sea an iriure vivendo appetere. Usu ad latine vocibus voluptatum.</p><p>Et bonorum consetetur mediocritatem qui, cu est omnis persequeris, mea te doctus incorrupte. Vix et tale justo. Vel te lorem sapientem interesset. Ne ius tantas saperet officiis, volutpat adolescens ut sea, an animal consectetuer vis. Nonumy ornatus constituam vis ne, cum ne vidisse patrioque.</p>', '<p>Fugit contentiones id nam, noster percipit ne mei. Duo no modo tempor, per ea quaeque commune complectitur, sed ex alia utamur apeirian. Est id solum dicant ceteros. Quem omnium dignissim in vim, sea nihil expetenda id, molestiae definitionem ad pri.<br></p><p>Id per esse iudicabit expetendis, ne qui legimus accusata corrumpit. Ei has duis corrumpit, facilisis accommodare te nec. Ne usu molestiae voluptatum mediocritatem, tota percipitur ut qui. Ne modo idque feugait vel. Postea epicuri mei te. Ad tollit qualisque dignissim per, eu purto virtute fabulas his.<br></p><p>Viris ignota vim et. Ea idque etiam liberavisse has. Ex mel lorem voluptatibus, sed vero accusata no. Ad pri utinam praesent, usu iuvaret adipisci contentiones an. Eum falli fabellas ut, usu te putent posidonium.</p><p>Ei cum elit fuisset, ad tota assueverit scriptorem qui, pro ex utamur recteque incorrupte. Has iisque consectetuer eu. Malis doming eirmod id his, te mea novum offendit. Ea minim doming evertitur eum, latine neglegentur no nec. Ea pro putant perpetua interpretaris. Mea ne noster aliquando constituam, iudico discere neglegentur vel cu, mandamus corrumpit duo ne.</p>', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', NULL, NULL, 'mrx@gmail.com', '111-222-3334', 'http://www.website2.com', 'Addis Ababa\r\nEthiopia', 'UreGlSvnb1A', 'team-member-2.png', 'mr x', 'mr x meta', '2020-12-13 03:28:29', '2024-01-12 13:48:37'),
(3, 'Bob Smith', 'bob-smith', 'Executive Office', '<p>Lorem ipsum dolor sit amet, ea qui tation adversarium definitionem, eu labitur denique est. Ad duo quando recusabo petentium. Mea elit affert oportere ex. Ut error affert accusam pri. Sit no causae vidisse invenire, bonorum inermis nec ex.<br></p><p>Eam sint reformidans ex, ex doming iracundia his. Sint modus pro ne, vix ut omnis scripta corpora. Sea graecis suavitate te. Eum tantas possim torquatos ei. An qui falli sadipscing suscipiantur. At congue forensibus constituto his, erat vidit veniam vis eu, dico soleat possim nec ei.</p><p>Cu modo adipisci sea. At clita doctus sit. Pri ex solet deterruisset, falli harum fuisset qui ei, an commune delicata patrioque sit. Fabulas adversarium no sea, at quis disputando pri, meis epicurei eloquentiam vix ad. An consulatu sententiae posidonium his, te elaboraret cotidieque eos, sed an illud recteque.</p><p>Eu per altera aliquam consulatu, ea pro nulla doctus. Sea porro everti an, nostrud ceteros nam no. Ei quando qualisque his, alterum ocurreret nec eu, dolorum deseruisse ad mel. Nam vidit omnis ad, pro eu veniam efficiendi, sea an iriure vivendo appetere. Usu ad latine vocibus voluptatum.</p><p>Et bonorum consetetur mediocritatem qui, cu est omnis persequeris, mea te doctus incorrupte. Vix et tale justo. Vel te lorem sapientem interesset. Ne ius tantas saperet officiis, volutpat adolescens ut sea, an animal consectetuer vis. Nonumy ornatus constituam vis ne, cum ne vidisse patrioque.</p>', '<p>Fugit contentiones id nam, noster percipit ne mei. Duo no modo tempor, per ea quaeque commune complectitur, sed ex alia utamur apeirian. Est id solum dicant ceteros. Quem omnium dignissim in vim, sea nihil expetenda id, molestiae definitionem ad pri.<br></p><p>Id per esse iudicabit expetendis, ne qui legimus accusata corrumpit. Ei has duis corrumpit, facilisis accommodare te nec. Ne usu molestiae voluptatum mediocritatem, tota percipitur ut qui. Ne modo idque feugait vel. Postea epicuri mei te. Ad tollit qualisque dignissim per, eu purto virtute fabulas his.</p><p>Viris ignota vim et. Ea idque etiam liberavisse has. Ex mel lorem voluptatibus, sed vero accusata no. Ad pri utinam praesent, usu iuvaret adipisci contentiones an. Eum falli fabellas ut, usu te putent posidonium.</p><p>Ei cum elit fuisset, ad tota assueverit scriptorem qui, pro ex utamur recteque incorrupte. Has iisque consectetuer eu. Malis doming eirmod id his, te mea novum offendit. Ea minim doming evertitur eum, latine neglegentur no nec. Ea pro putant perpetua interpretaris. Mea ne noster aliquando constituam, iudico discere neglegentur vel cu, mandamus corrumpit duo ne.</p>', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', NULL, NULL, 'bobsmith@gmail.com', '111-222-3338', 'http://www.website3.com', '4008 Ocala Street\r\nOrlando, FL 32809', 'UreGlSvnb1A', 'team-member-3.png', 'Bob Smith', 'Bob Smith', '2020-12-13 04:24:07', '2024-01-12 13:47:50'),
(4, 'Eyasu Aynekulu', 'patrick-henderson', 'Marketing Officer', '<p>Lorem ipsum dolor sit amet, ea qui tation adversarium definitionem, eu labitur denique est. Ad duo quando recusabo petentium. Mea elit affert oportere ex. Ut error affert accusam pri. Sit no causae vidisse invenire, bonorum inermis nec ex.<br></p><p>Eam sint reformidans ex, ex doming iracundia his. Sint modus pro ne, vix ut omnis scripta corpora. Sea graecis suavitate te. Eum tantas possim torquatos ei. An qui falli sadipscing suscipiantur. At congue forensibus constituto his, erat vidit veniam vis eu, dico soleat possim nec ei.</p><p>Cu modo adipisci sea. At clita doctus sit. Pri ex solet deterruisset, falli harum fuisset qui ei, an commune delicata patrioque sit. Fabulas adversarium no sea, at quis disputando pri, meis epicurei eloquentiam vix ad. An consulatu sententiae posidonium his, te elaboraret cotidieque eos, sed an illud recteque.</p><p>Eu per altera aliquam consulatu, ea pro nulla doctus. Sea porro everti an, nostrud ceteros nam no. Ei quando qualisque his, alterum ocurreret nec eu, dolorum deseruisse ad mel. Nam vidit omnis ad, pro eu veniam efficiendi, sea an iriure vivendo appetere. Usu ad latine vocibus voluptatum.</p><p>Et bonorum consetetur mediocritatem qui, cu est omnis persequeris, mea te doctus incorrupte. Vix et tale justo. Vel te lorem sapientem interesset. Ne ius tantas saperet officiis, volutpat adolescens ut sea, an animal consectetuer vis. Nonumy ornatus constituam vis ne, cum ne vidisse patrioque.</p>', '<p>Fugit contentiones id nam, noster percipit ne mei. Duo no modo tempor, per ea quaeque commune complectitur, sed ex alia utamur apeirian. Est id solum dicant ceteros. Quem omnium dignissim in vim, sea nihil expetenda id, molestiae definitionem ad pri.<br></p><p>Id per esse iudicabit expetendis, ne qui legimus accusata corrumpit. Ei has duis corrumpit, facilisis accommodare te nec. Ne usu molestiae voluptatum mediocritatem, tota percipitur ut qui. Ne modo idque feugait vel. Postea epicuri mei te. Ad tollit qualisque dignissim per, eu purto virtute fabulas his.</p><p>Viris ignota vim et. Ea idque etiam liberavisse has. Ex mel lorem voluptatibus, sed vero accusata no. Ad pri utinam praesent, usu iuvaret adipisci contentiones an. Eum falli fabellas ut, usu te putent posidonium.</p><p>Ei cum elit fuisset, ad tota assueverit scriptorem qui, pro ex utamur recteque incorrupte. Has iisque consectetuer eu. Malis doming eirmod id his, te mea novum offendit. Ea minim doming evertitur eum, latine neglegentur no nec. Ea pro putant perpetua interpretaris. Mea ne noster aliquando constituam, iudico discere neglegentur vel cu, mandamus corrumpit duo ne.</p>', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', NULL, NULL, 'patrickhenderson@gmail.com', '111-222-3839', 'http://www.website4.com', 'Addis Ababa\r\nEthiopia', 'UreGlSvnb1A', 'team-member-4.png', 'Eyasu Aynekulu', 'Eyasu Aynekulu', '2020-12-13 04:26:08', '2024-01-12 13:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `photo` text NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `photo`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'ATO TESFU ENDALK', 'Managing Director, ABC Media', 'testimonial-1.jpg', 'Tesfu: Dev Ethio the only web development company in Ethio you can trust with your money. They are always ready for you any time you need to any app.', '2020-11-23 01:11:54', '2023-12-30 08:11:38'),
(2, 'ATO SOLOMON', 'CEO, XYZ Technologies', 'testimonial-2.jpg', 'Dev Ethio is a place where you can always trust. Their quick response to customer is quite amazing.', '2020-11-23 01:12:35', '2023-12-30 08:11:53'),
(3, 'ATO KEBEDE TAMERU', 'Chairman, ZZ Corporation', 'testimonial-3.png', 'The Staff is amazing! Very helpful and considerate with a sense of urgency and leads are 99% on time.', '2020-11-23 01:12:54', '2022-04-26 14:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `group` varchar(255) DEFAULT NULL,
  `key` text NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `language_id`, `group`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 2, 'auth', 'failed', 'እነዚህ ምስክርነቶች ከኛ መዝገቦች ጋር አይዛመዱም።', '2023-10-24 16:28:44', '2023-10-24 16:28:44'),
(2, 2, 'auth', 'password', 'የቀረበው የይለፍ ቃል የተሳሳተ ነው።', '2023-10-24 16:28:44', '2023-10-24 16:28:44'),
(3, 2, 'auth', 'throttle', 'በጣም ብዙ የመግባት ሙከራዎች። እባክዎ በ: ሰከንድ ሰከንድ ውስጥ እንደገና ይሞክሩ።', '2023-10-24 16:28:44', '2023-10-24 16:28:44'),
(4, 2, 'file', 'file', 'file', '2023-10-24 16:28:44', '2023-10-24 16:28:44'),
(5, 2, 'message', 'About', 'AAA', '2023-10-24 16:28:44', '2023-10-24 16:28:44'),
(6, 2, 'message', 'Home', 'VVV', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(7, 2, 'message', 'welcome', 'Welcome to our application!', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(8, 2, 'pagination', 'next', 'ቀጥሎ &raquo;', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(9, 2, 'pagination', 'previous', '&laquo; ቀዳሚ', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(10, 2, 'passwords', 'reset', 'የይለፍ ቃልዎ ዳግም ተቀናብሯል!', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(11, 2, 'passwords', 'sent', 'የይለፍ ቃልህን ዳግም ማስጀመሪያ አገናኝ ኢሜይል አድርገናል!', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(12, 2, 'passwords', 'throttled', 'እባክዎ እንደገና ከመሞከርዎ በፊት ይጠብቁ።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(13, 2, 'passwords', 'token', 'ይህ የይለፍ ቃል ዳግም ማስጀመሪያ ማስመሰያ ልክ ያልሆነ ነው።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(14, 2, 'passwords', 'user', 'ያንን ኢሜይል አድራሻ ያለው ተጠቃሚ ማግኘት አልቻልንም።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(15, 2, 'validation', 'accepted', 'የ: ባህሪው መቀበል አለበት።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(16, 2, 'validation', 'active_url', 'ባህሪው ትክክለኛ ዩአርኤል አይደለም።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(17, 2, 'validation', 'after', 'ባህሪው ከ: ቀን በኋላ ያለ ቀን መሆን አለበት.', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(18, 2, 'validation', 'after_or_equal', 'ባህሪው ከ: ቀን በኋላ ያለ ወይም እኩል የሆነ ቀን መሆን አለበት።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(19, 2, 'validation', 'alpha', 'ባህሪው ፊደላትን ብቻ ሊይዝ ይችላል።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(20, 2, 'validation', 'alpha_dash', 'ባህሪው ፊደሎችን፣ ቁጥሮችን፣ ሰረዞችን እና የግርጌ ማስታወሻዎችን ብቻ ሊይዝ ይችላል።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(21, 2, 'validation', 'alpha_num', 'ባህሪው ፊደሎችን እና ቁጥሮችን ብቻ ሊይዝ ይችላል።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(22, 2, 'validation', 'array', 'ባህሪው ድርድር መሆን አለበት።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(23, 2, 'validation', 'before', 'ባህሪው ከ: ቀን በፊት ያለ ቀን መሆን አለበት።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(24, 2, 'validation', 'before_or_equal', 'ባህሪው ከ: ቀን በፊት ወይም እኩል የሆነ ቀን መሆን አለበት።.', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(25, 2, 'validation', 'between.array', 'የ: ባህሪው በ: ደቂቃ እና በ: ከፍተኛ እቃዎች መካከል ሊኖረው ይገባል.', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(26, 2, 'validation', 'between.file', 'ባህሪው በ:ደቂቃ እና በ:ከፍተኛ ኪሎባይት መካከል መሆን አለበት።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(27, 2, 'validation', 'between.numeric', 'ባህሪው በ:ደቂቃ እና :ከፍተኛ መካከል መሆን አለበት።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(28, 2, 'validation', 'between.string', 'የ: ባህሪው በ: ደቂቃ እና በ: ከፍተኛ ቁምፊዎች መካከል መሆን አለበት.', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(29, 2, 'validation', 'boolean', 'የ: መለያ መስክ እውነት ወይም ሐሰት መሆን አለበት።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(30, 2, 'validation', 'confirmed', 'የ: ባህሪ ማረጋገጫው አይዛመድም።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(31, 2, 'validation', 'custom.attribute-name.rule-name', 'custom-message', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(32, 2, 'validation', 'date', 'ባህሪው ትክክለኛ ቀን አይደለም።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(33, 2, 'validation', 'date_equals', 'ባህሪው ከ: ቀን ጋር እኩል የሆነ ቀን መሆን አለበት።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(34, 2, 'validation', 'date_format', 'የ: ባህሪው ከቅርጸት: ቅርጸት ጋር አይዛመድም።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(35, 2, 'validation', 'different', 'ባህሪው እና :ሌላው የተለየ መሆን አለበት።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(36, 2, 'validation', 'digits', 'ባህሪው :አሃዞች መሆን አለበት።', '2023-10-24 16:28:45', '2023-10-24 16:28:45'),
(37, 2, 'validation', 'digits_between', 'የ: ባህሪው በ: ደቂቃ እና በ: ከፍተኛ አሃዞች መካከል መሆን አለበት።', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(38, 2, 'validation', 'dimensions', 'የ: ባህሪው ልክ ያልሆኑ የምስል ልኬቶች አሉት።', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(39, 2, 'validation', 'distinct', 'የ: ባህሪ መስክ የተባዛ እሴት አለው።', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(40, 2, 'validation', 'email', 'ባህሪው ትክክለኛ የኢሜይል አድራሻ መሆን አለበት።', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(41, 2, 'validation', 'ends_with', 'ባህሪው ከሚከተሉት በአንዱ ማለቅ አለበት:: እሴቶች።', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(42, 2, 'validation', 'exists', 'የተመረጠው: ባህሪ ልክ ያልሆነ ነው።', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(43, 2, 'validation', 'file', 'ባህሪው ፋይል መሆን አለበት።', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(44, 2, 'validation', 'filled', 'የ: ባህሪ መስክ ዋጋ ሊኖረው ይገባል።', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(45, 2, 'validation', 'gt.array', 'The :attribute must have more than :value items.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(46, 2, 'validation', 'gt.file', 'The :attribute must be greater than :value kilobytes.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(47, 2, 'validation', 'gt.numeric', 'The :attribute must be greater than :value.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(48, 2, 'validation', 'gt.string', 'The :attribute must be greater than :value characters.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(49, 2, 'validation', 'gte.array', 'The :attribute must have :value items or more.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(50, 2, 'validation', 'gte.file', 'The :attribute must be greater than or equal :value kilobytes.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(51, 2, 'validation', 'gte.numeric', 'The :attribute must be greater than or equal :value.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(52, 2, 'validation', 'gte.string', 'The :attribute must be greater than or equal :value characters.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(53, 2, 'validation', 'image', 'The :attribute must be an image.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(54, 2, 'validation', 'in', 'The selected :attribute is invalid.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(55, 2, 'validation', 'in_array', 'The :attribute field does not exist in :other.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(56, 2, 'validation', 'integer', 'The :attribute must be an integer.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(57, 2, 'validation', 'ip', 'The :attribute must be a valid IP address.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(58, 2, 'validation', 'ipv4', 'The :attribute must be a valid IPv4 address.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(59, 2, 'validation', 'ipv6', 'The :attribute must be a valid IPv6 address.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(60, 2, 'validation', 'json', 'The :attribute must be a valid JSON string.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(61, 2, 'validation', 'lt.array', 'The :attribute must have less than :value items.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(62, 2, 'validation', 'lt.file', 'The :attribute must be less than :value kilobytes.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(63, 2, 'validation', 'lt.numeric', 'The :attribute must be less than :value.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(64, 2, 'validation', 'lt.string', 'The :attribute must be less than :value characters.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(65, 2, 'validation', 'lte.array', 'The :attribute must not have more than :value items.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(66, 2, 'validation', 'lte.file', 'The :attribute must be less than or equal :value kilobytes.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(67, 2, 'validation', 'lte.numeric', 'The :attribute must be less than or equal :value.', '2023-10-24 16:28:46', '2023-10-24 16:28:46'),
(68, 2, 'validation', 'lte.string', 'The :attribute must be less than or equal :value characters.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(69, 2, 'validation', 'max.array', 'The :attribute may not have more than :max items.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(70, 2, 'validation', 'max.file', 'The :attribute may not be greater than :max kilobytes.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(71, 2, 'validation', 'max.numeric', 'The :attribute may not be greater than :max.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(72, 2, 'validation', 'max.string', 'The :attribute may not be greater than :max characters.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(73, 2, 'validation', 'mimes', 'The :attribute must be a file of type: :values.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(74, 2, 'validation', 'mimetypes', 'The :attribute must be a file of type: :values.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(75, 2, 'validation', 'min.array', 'The :attribute must have at least :min items.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(76, 2, 'validation', 'min.file', 'The :attribute must be at least :min kilobytes.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(77, 2, 'validation', 'min.numeric', 'The :attribute must be at least :min.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(78, 2, 'validation', 'min.string', 'The :attribute must be at least :min characters.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(79, 2, 'validation', 'multiple_of', 'The :attribute must be a multiple of :value', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(80, 2, 'validation', 'not_in', 'The selected :attribute is invalid.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(81, 2, 'validation', 'not_regex', 'The :attribute format is invalid.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(82, 2, 'validation', 'numeric', 'The :attribute must be a number.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(83, 2, 'validation', 'password', 'The password is incorrect.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(84, 2, 'validation', 'present', 'The :attribute field must be present.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(85, 2, 'validation', 'regex', 'The :attribute format is invalid.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(86, 2, 'validation', 'required', 'The :attribute field is required.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(87, 2, 'validation', 'required_if', 'The :attribute field is required when :other is :value.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(88, 2, 'validation', 'required_unless', 'The :attribute field is required unless :other is in :values.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(89, 2, 'validation', 'required_with', 'The :attribute field is required when :values is present.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(90, 2, 'validation', 'required_with_all', 'The :attribute field is required when :values are present.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(91, 2, 'validation', 'required_without', 'The :attribute field is required when :values is not present.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(92, 2, 'validation', 'required_without_all', 'The :attribute field is required when none of :values are present.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(93, 2, 'validation', 'same', 'The :attribute and :other must match.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(94, 2, 'validation', 'size.array', 'The :attribute must contain :size items.', '2023-10-24 16:28:47', '2023-10-24 16:28:47'),
(95, 2, 'validation', 'size.file', 'The :attribute must be :size kilobytes.', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(96, 2, 'validation', 'size.numeric', 'The :attribute must be :size.', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(97, 2, 'validation', 'size.string', 'The :attribute must be :size characters.', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(98, 2, 'validation', 'starts_with', 'The :attribute must start with one of the following: :values.', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(99, 2, 'validation', 'string', 'The :attribute must be a string.', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(100, 2, 'validation', 'timezone', 'The :attribute must be a valid zone.', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(101, 2, 'validation', 'unique', 'The :attribute has already been taken.', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(102, 2, 'validation', 'uploaded', 'The :attribute failed to upload.', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(103, 2, 'validation', 'url', 'The :attribute format is invalid.', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(104, 2, 'validation', 'uuid', 'The :attribute must be a valid UUID.', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(105, 2, 'single', 'Amharic', 'አማርኛ', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(106, 2, 'single', 'English', 'እንግሊዝኛ', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(107, 2, 'single', 'Français', 'ፈረንሳይኛ', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(108, 2, 'single', 'Spanish', 'ስፓኒሽኛ', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(109, 2, 'single', 'Language', 'ቋንቋ', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(110, 2, 'single', 'Project', 'ፕሮጀክት', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(111, 2, 'single', 'Team Member', 'የቡድን አባላት', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(112, 2, 'single', 'Other', 'ሌላ', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(113, 2, 'single', 'Term', 'ውል', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(114, 2, 'single', 'Privacy', 'ግላዊነት', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(115, 2, 'single', 'Developer', 'ገንቢ', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(116, 2, 'single', 'Builder', 'ገንቢ', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(117, 2, 'single', 'Document', 'ሰነድ', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(118, 2, 'single', 'Documents', 'ሰነዶች', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(119, 2, 'single', 'Previous', '', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(120, 2, 'single', 'Next', 'ቀጥሎ;', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(121, 2, 'single', 'Home', 'ቤት', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(122, 2, 'single', 'About us', 'ስለ እኛ', '2023-10-24 16:28:48', '2023-10-24 16:28:48'),
(123, 2, 'single', 'Contact Us', 'እኛን ያነጋግሩን', '2023-10-24 16:28:49', '2023-10-24 16:28:49'),
(124, 2, 'single', 'COMPANY PROFILE', 'የኩባንያ ፕሮፌይል', '2023-10-24 16:28:49', '2023-10-24 16:28:49'),
(125, 2, 'single', 'Company', 'ኩባንያ', '2023-10-24 16:28:49', '2023-10-24 16:28:49'),
(126, 2, 'single', 'Shop', 'ይሸምቱ ', '2023-10-24 16:28:49', '2023-10-24 16:28:49'),
(127, 2, 'single', 'markating', 'ማርኬቲንግ', '2023-10-24 16:28:49', '2023-10-24 16:28:49'),
(128, 2, 'single', 'Projects', 'ፕሮጀክቶች', '2023-10-24 16:28:49', '2023-10-24 16:28:49'),
(129, 2, 'single', 'Senior Management', 'ከፍተኛ አስተዳደር', '2023-10-24 16:28:49', '2023-10-24 16:28:49'),
(130, 2, 'single', 'Board Directors', 'ቦርድ ዳይሬክተሮች', '2023-10-24 16:28:49', '2023-10-24 16:28:49'),
(131, 2, 'single', 'Blog', 'ብሎግ', '2023-10-24 16:28:49', '2023-10-24 16:28:49'),
(132, 2, 'single', 'Services', 'አገልግሎቶች', '2023-10-24 16:28:49', '2023-10-24 16:28:49'),
(133, 2, 'single', 'Service', 'አገልግሎት', '2023-10-24 16:28:49', '2023-10-24 16:28:49'),
(134, 2, 'single', 'Branch', 'ቅርንጫፍ ቢሮ', '2023-10-24 16:28:49', '2023-10-24 16:28:49'),
(135, 2, 'single', 'Head Office', 'ዋና መ/ቤት', '2023-10-24 16:28:49', '2023-10-24 16:28:49'),
(136, 2, 'single', 'Registration', 'ይመዝገቡ', '2023-10-24 16:28:49', '2023-10-24 16:28:49'),
(137, 2, 'single', 'Login', 'በመለያ ይግቡ', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(138, 2, 'single', 'Customer Login', 'የደንበኛ መግቢያ', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(139, 2, 'single', 'Email Address', 'የኢሜይል አድራሻ', '2023-10-24 16:28:50', '2023-10-24 16:28:59'),
(140, 2, 'single', 'Password', 'የይለፍ ቃል', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(141, 2, 'single', 'Forget Password', 'የይለፍ ቃል ረሳሁ?', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(142, 2, 'single', 'New User? Make Registration', 'አዲስ ደንበኛ ነዎት? እንግዲያውስ ይመዝገቡ', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(143, 2, 'single', 'Customer Registration', 'የአዲስ ደንበኛ መመዝገቢያ', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(144, 2, 'single', 'Make Registration', 'ምዝገባ ይፈጥዕሙ', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(145, 2, 'single', 'Retype Password', 'የይለፍ ቃሉን ያረጋግጡ', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(146, 2, 'single', 'Existing User? Go to Login Page', 'ነባር ደንበኛ ነዎት? እንግዲያውስ በመለያዎ ይግቡ', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(147, 2, 'single', 'Send Password Reset Link', 'የይለፍ ቃል መለወጫ ማስፈንጠሪያ ይላክልኝ', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(148, 2, 'single', 'Back to Login Page', 'ወደ መግቢያ ገዕ ይመለሱ', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(149, 2, 'single', 'Reset Password', 'የይለፍ ቃል ይቀይሩ', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(150, 2, 'single', 'Reset Customer Password', 'የደንበኛ ይለፍ ቃል ይቀይሩ', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(151, 2, 'single', 'Negotiable', 'በስምምነት', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(152, 2, 'single', 'Apply In This Job', 'በዚህ ሥራ ላይ ያመልክቱ', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(153, 2, 'single', 'First Name *', 'የመጀመሪያ ስም*', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(154, 2, 'single', 'Apply for:', 'አመልክት:', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(155, 2, 'single', 'By using this form you agree with the storage and handling of your data by this website.', 'ይህን ቅጽ በመጠቀም በዚህ ድህረ ገጽ የውሂብህን ማከማቻ እና አያያዝ ይስማማሉ', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(156, 2, 'single', '(Only doc, docx or pdf are allowed)', '(ዶክ, ዶክክስ ወይም ፒዲኤፍ ብቻ ነው የሚፈቀደው)', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(157, 2, 'single', 'Attach Resume *', 'የስራ ማስጀመሪያን ያያይዙ*', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(158, 2, 'single', 'Submit Application', 'ማመልከቻ ያስገቡ', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(159, 2, 'single', 'Cover Letter *', 'የፊት ገፅ ደብዳቤ *', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(160, 2, 'single', 'Expected Salary *', 'እርስዎ የሚጠብቁት ደመወዝ *', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(161, 2, 'single', 'Zip Code', 'አካባቢያዊ መለያ ቁጥር', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(162, 2, 'single', 'Street', 'ጎዳና', '2023-10-24 16:28:50', '2023-10-24 16:28:50'),
(163, 2, 'single', 'City *', 'ከተማ*', '2023-10-24 16:28:51', '2023-10-24 16:28:51'),
(164, 2, 'single', 'Birth Place', 'የትውልድ ቦታ', '2023-10-24 16:28:51', '2023-10-24 16:28:51'),
(165, 2, 'single', 'Address *', 'አድራሻ*', '2023-10-24 16:28:51', '2023-10-24 16:28:51'),
(166, 2, 'single', 'Last Name *', 'የመጨረሻ ስም*', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(167, 2, 'single', 'Phone Number *', 'ስልክ ቁጥር*', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(168, 2, 'single', 'Senior PHP Developer', 'ከፍተኛ ፒኤችፒ ገንቢ', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(169, 2, 'single', 'Photo Gallery', 'ፎቶ ጋለሪ', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(170, 2, 'single', 'Video Gallery', 'ቪድዮ ጋለሪ', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(171, 2, 'single', 'Team Members', 'የቡድን አባላት', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(172, 2, 'single', 'FAQ', 'በተደጋጋሚ የሚጠየቁ ጥያዌዎች', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(173, 2, 'single', 'Vacancy', 'ክፍት ስራዎች', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(174, 2, 'single', 'Contact', 'እኛን ያነጋግሩን', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(175, 2, 'single', 'SL', 'ተራ ቁጥር', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(176, 2, 'single', 'Product & Service', 'ምርት እና አገልግሎት', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(177, 2, 'single', 'Saving Product', 'የቁጠባ አገልግሎት', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(178, 2, 'single', 'Dynamic Microfinance Institute S.C.', 'ዳይናሚክ ማይክሮ ፋይናንስ ተቋም አ.ማ', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(179, 2, 'single', 'Dynamic Micro Finance institution S.C', 'ዳይናሚክ ማይክሮ ፋይናንስ ተቋም አ.ማ', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(180, 2, 'single', 'Dynamic Micro Finance Institute S.C. Shareholder Management System', 'ዳይናሚክ ማይክሮ ፋይናንስ ተቋም አ.ማ የባለድርሻ አካላት አስተዳደር ስርዓት', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(181, 2, 'single', 'Board Director', 'ቦርድ ዳይሬክተሮች', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(182, 2, 'single', 'About Developer', 'ስለ ገንቢው', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(183, 2, 'single', 'Dashboard', 'ዳሽቦርድ', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(184, 2, 'single', 'Total Admins', 'ጠቅላላ አድሚንስ', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(185, 2, 'single', 'Total Shareholder', 'ጠቅላላ ባለድርሻ', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(186, 2, 'single', 'Total Roles', 'ጠቅላላ ሚናዎች', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(187, 2, 'single', 'Total Modules', 'ጠቅላላ ሞጁሎች', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(188, 2, 'single', 'Total Menu', 'ጠቅላላ ሜኑ', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(189, 2, 'single', 'Company Share Statistics', 'ኩባንያ ድርሻ ስታቲስቲክስ', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(190, 2, 'single', 'Share Info', 'የአክሲዮን መረጃ', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(191, 2, 'single', 'Payment Info', 'የክፍያ መረጃ', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(192, 2, 'single', 'Last 6 Months Authorized', 'ያለፉት 6 ወራት የተጨመሩ አክሲዮኖች', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(193, 2, 'single', 'Admin Panel', 'አስተዳዳሪ ፓነል', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(194, 2, 'single', 'General Settings', 'አጠቃላይ ምርጫዎች', '2023-10-24 16:28:52', '2023-10-24 16:28:52'),
(195, 2, 'single', 'Logo', 'አርማ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(196, 2, 'single', 'Color', 'ቀለም', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(197, 2, 'single', 'Preloader', 'ቅድመ ጫኚ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(198, 2, 'single', 'Google Analytic', 'ጉግል ትንታኔ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(199, 2, 'single', 'Google Recaptcha', 'ጎግል ሪካፕቻ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(200, 2, 'single', 'Tawk Live Chat', 'Tawk የቀጥታ ውይይት', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(201, 2, 'single', 'Cookie Consent', 'የኩኪ ስምምነት', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(202, 2, 'single', 'Page Settings', 'የገጽ ቅንብሮች', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(203, 2, 'single', 'About', 'ስለ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(204, 2, 'single', 'Menior Management', 'ከፍተኛ አመራር', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(205, 2, 'single', 'Admin User Section', 'የአስተዳዳሪ ተጠቃሚ ክፍል', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(206, 2, 'single', 'User', 'ተጠቃሚ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(207, 2, 'single', 'Users', 'ተጠቃሚ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(208, 2, 'single', 'Email', 'ኢሜል', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(209, 2, 'single', 'Role', '', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(210, 2, 'single', 'Roles', 'የሥራ ድርሻ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(211, 2, 'single', 'Report Setting', 'የሪፖርት ማዕቀፍ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(212, 2, 'single', 'Shareholder Maintenance', 'ባለአክሲዮን ጥገና', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(213, 2, 'single', 'Share Maintenance', 'ባለአክሲዮን ጥገና', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(214, 2, 'single', 'Authorized More', 'አዲስ አክሲዮን ጨምር', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(215, 2, 'single', 'Manage Shareholder', 'ባለአክሲዮን ያስተዳድሩ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(216, 2, 'single', 'Sell Share', 'አክሲዮን ይሽጡ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(217, 2, 'single', 'Issue Share', 'አክሲዮን ይሽጡ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(218, 2, 'single', 'Share Collactions', 'የአክሲዮን ክፍያ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(219, 2, 'single', 'Shareholder Payment', 'የአክሲዮን ክፍያ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(220, 2, 'single', 'Share Payment', 'የአክሲዮን ክፍያ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(221, 2, 'single', 'Permission', 'ፍቃድ', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(222, 2, 'single', 'Footer Columns', 'የፉተር ዓምዶች', '2023-10-24 16:28:53', '2023-10-24 16:28:53'),
(223, 2, 'single', 'Client', 'ደንበኛ', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(224, 2, 'single', 'Company Setting', 'የኩባንያ ማመቻቸት', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(225, 2, 'single', 'Shareholder Portfolio', '', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(226, 2, 'single', 'Share Portfolio', '', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(227, 2, 'single', 'Share Transfer', '', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(228, 2, 'single', 'EPS Ratio', '', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(229, 2, 'single', 'Assembly Reports', '', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(230, 2, 'single', 'Report', 'ሪፖርት', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(231, 2, 'single', 'Blog Section', 'ጦማር ክፍል', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(232, 2, 'single', 'Sliders', 'ተንሸራታችዎች', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(233, 2, 'single', 'Partner', 'አጋር', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(234, 2, 'single', 'Cart', 'ጋሪ', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(235, 2, 'single', 'Add to Cart', 'ወደጋሪ ጨምር', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(236, 2, 'single', 'Continue Shopping', 'ግዢ ይቀጥሉ', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(237, 2, 'single', 'Checkout', 'ጨርሰው ይውጡ', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(238, 2, 'single', 'Update Cart', 'ጋሪ ያዘምኑ', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(239, 2, 'single', 'Continue to Payment', 'ወደ ክፍያ ይቀጥሉ', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(240, 2, 'single', 'Existing Customer', 'ነባር ደንበኛ', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(241, 2, 'single', 'Payment', 'ክፍያ', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(242, 2, 'single', 'Make Payment', 'ክፍያ ይፈጽሙ', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(243, 2, 'single', 'Select Payment Method', 'የመክፈያ ዘዴን ይምረጡ', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(244, 2, 'single', 'Stripe', 'ስትሪፕ', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(245, 2, 'single', 'Bank', 'በባንክ', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(246, 2, 'single', 'Chash On Delivery', 'በመላክ ላይ ጥሬ ገንዘብ', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(247, 2, 'single', 'Pay with PayPal', 'በ ፔይፓል ይክፈሉ', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(248, 2, 'single', 'Pay with Bank', 'በባንክ ይክፈሉ', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(249, 2, 'single', 'Nigus Abate CBE:- 1000213224078', 'ንጉስ አባተ ንግድ ባንክ ቁጥር:- 1000213224078', '2023-10-24 16:28:54', '2023-10-24 16:28:54'),
(250, 2, 'single', 'Your Name *', 'የእርስዎ ስም *', '2023-10-24 16:28:55', '2023-10-24 16:28:55'),
(251, 2, 'single', 'Bank Name', 'የባንክ ስም', '2023-10-24 16:28:55', '2023-10-24 16:28:55'),
(252, 2, 'single', 'Amount You Pay', 'የከፈሉት የገንዘብ መጠን', '2023-10-24 16:28:55', '2023-10-24 16:28:55'),
(253, 2, 'single', 'Reciept *', 'ደረሰኝ*', '2023-10-24 16:28:55', '2023-10-24 16:28:55'),
(254, 2, 'single', 'Reference No *', 'የማጣቀሻ ቁጥር*', '2023-10-24 16:28:55', '2023-10-24 16:28:55'),
(255, 2, 'single', 'Reference', 'ማጣቀሻ', '2023-10-24 16:28:55', '2023-10-24 16:28:55'),
(256, 2, 'single', 'Submite', 'አስገባ', '2023-10-24 16:28:55', '2023-10-24 16:28:55'),
(257, 2, 'single', 'Submit', 'አስገባ', '2023-10-24 16:28:55', '2023-10-24 16:28:55'),
(258, 2, 'single', 'Nigus Abate', 'ንጉስ አባተ', '2023-10-24 16:28:55', '2023-10-24 16:28:55'),
(259, 2, 'single', 'Pay with Stripe', 'በ ስትሪፕ ይክፈሉ', '2023-10-24 16:28:55', '2023-10-24 16:28:55'),
(260, 2, 'single', 'Logout', 'ይውጡ', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(261, 2, 'single', 'Favicon', 'ፋቭአይኮን', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(262, 2, 'single', 'Recent Posts', 'የቅርብ ጊዜ ልጥፎች', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(263, 2, 'single', 'Categories', 'ምድቦች', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(264, 2, 'single', 'Customer Dashboard', 'ደንበኛ ዳሽቦርድ', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(265, 2, 'single', 'Orders', 'ትዕዛዝ', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(266, 2, 'single', 'Completed Orders', 'የተጠናቀቁ ትዕዛዞች', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(267, 2, 'single', 'Pending Orders', 'ትዕዛዝ እየተጠበቀ ነው', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(268, 2, 'single', 'Edit Profile', 'ፕሮፋይልን ይቀይሩ', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(269, 2, 'single', 'Edit Password', 'የይለፍ ቃል መለወጫ', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(270, 2, 'single', 'New Password *', 'አዲስ የይለፍ ቃል *', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(271, 2, 'single', 'Retype Password *', 'የይለፍ ቃል አረጋግጥ *', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(272, 2, 'single', 'Update Password', 'የይለፍ ቃል አዘምን', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(273, 2, 'single', 'Serial', 'ቁጥር', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(274, 2, 'single', 'Order Number', 'የትዕዛዝ ቁጥር', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(275, 2, 'single', 'Payment Method', 'የክፍያ ዘዴ', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(276, 2, 'single', 'Paid Amount', 'የተከፈለ መጠን', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(277, 2, 'single', 'Payment Date and Time', 'የክፍያ ቀን እና ሰዓት', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(278, 2, 'single', 'Payment Status', 'የክፍያ ሁኔታ', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(279, 2, 'single', 'Detail', 'ዝርዝር መረጃ', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(280, 2, 'single', 'Completed', 'የተጠናቀቀ', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(281, 2, 'single', 'Pending', 'ተከላ', '2023-10-24 16:28:56', '2023-10-24 16:28:56'),
(282, 2, 'single', 'Action', 'ተግባር', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(283, 2, 'single', 'Time:', 'ሰዓት:', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(284, 2, 'single', 'Date:', 'ቀን:', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(285, 2, 'single', 'PayPal', 'ፔይፓል', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(286, 2, 'single', 'Pay with Chapa', 'በቻፓ ይክፈሉ።', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(287, 2, 'single', 'Chapa', 'ቻፓ', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(288, 2, 'single', 'Pay Now', 'አሁን ይክፈሉ', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(289, 2, 'single', 'Change Profile Information', 'የመገለጫ መረጃን ይቀይሩ', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(290, 2, 'single', 'Phone', 'ስልክ', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(291, 2, 'single', 'Email Address *', 'የ ኢሜል አድራሻ *', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(292, 2, 'single', 'Name *', 'ስም *', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(293, 2, 'single', 'Country', '', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(294, 2, 'single', 'Commercial', 'ኮመርሺያል', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(295, 2, 'single', 'Residential', 'ነዋሪ', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(296, 2, 'single', 'Economical', 'ኢኮኖሚካል', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(297, 2, 'single', 'Business Idea', 'የቢዝነስ ሀሳብ', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(298, 2, 'single', 'Popular Tools', 'የተለመዱ ዕቃወች', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(299, 2, 'single', 'Read More', 'ተጨማሪ ያንብቡ', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(300, 2, 'single', 'Search Blog...', 'ከጦማር ይፈልጉ...', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(301, 2, 'single', 'Ureal Branch', 'ኡራኤል ቅርንጫፍ', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(302, 2, 'single', 'Wuchale', 'ዉጫሌ', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(303, 2, 'single', 'Wuchale Branch', 'ዉጫሌ ቅርንጫፍ', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(304, 2, 'single', 'Dukem Branch', 'ዱከም ቅርንጫፍ', '2023-10-24 16:28:57', '2023-10-24 16:28:57'),
(305, 2, 'single', 'Kality Branch', 'ቃሊቲ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(306, 2, 'single', 'Adama Branch', 'አዳማ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(307, 2, 'single', 'Sendafa Branch', 'ሰንዳፋ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(308, 2, 'single', 'Gulele Branch', 'ጉለሌ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(309, 2, 'single', 'Yeka Branch', 'የካ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(310, 2, 'single', 'Gerji Branch', 'ገርጂ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(311, 2, 'single', 'Jemo Branch', 'ጀሞ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(312, 2, 'single', 'Cherchil Branch', 'ቸርችል ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(313, 2, 'single', 'Mota Branch', 'ሞጣ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(314, 2, 'single', 'Lumame Branch', 'ሉማሜ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(315, 2, 'single', 'Dangila Branch', 'ዳንግላ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(316, 2, 'single', 'Tilili Branch', 'ቲሊሊ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(317, 2, 'single', 'Bure Branch', 'ቡሬ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(318, 2, 'single', 'Debre Markos Branch', 'ደብረማርቆስ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(319, 2, 'single', 'Bichena Branch', 'ቢቸና ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(320, 2, 'single', 'Debre Work Branch', 'ደብረወርቅ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(321, 2, 'single', 'Bahir Dar Branch', 'ባሂር ዳር ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(322, 2, 'single', 'Bahir Dar District', 'ባሂር ዳር አውራጃ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(323, 2, 'single', 'Fenote Selam Branch', 'ፍኖተሰላም ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(324, 2, 'single', 'Injibara Branch', 'እንጅባራ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(325, 2, 'single', 'Woreta Branch', 'ወሮታ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(326, 2, 'single', 'Worota Branch', 'ወሮታ ቅርንጫፍ', '2023-10-24 16:28:58', '2023-10-24 16:28:58'),
(327, 2, 'single', 'Name (Required)', 'ስም (ያስፈልጋል)', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(328, 2, 'single', 'Address', 'አድራሻ', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(329, 2, 'single', 'Contact Form', 'የመገናኛ ፎርም', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(330, 2, 'single', 'Email Address (Required)', 'የኢሜይል አድራሻ (ያስፈልጋል)', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(331, 2, 'single', 'Phone Number', 'ስልክ ቁጥር', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(332, 2, 'single', 'Message (Required)', 'መልዕክት (ያስፈልጋል)', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(333, 2, 'single', 'Send Message', 'መልዕክት ይላኩ', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(334, 2, 'single', 'Nogotiation', 'በ ስምምነት', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(335, 2, 'single', 'Full Time', 'ሙሉ ሰአት', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(336, 2, 'single', 'Permanent', 'ቋሚ', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(337, 2, 'single', 'Temporary', 'ጊዜያዊ', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(338, 2, 'single', 'addis ababa', 'አዲስ አበባ', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(339, 2, 'single', 'Important Links', 'አስፈላጊ አገናኝ', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(340, 2, 'single', 'Useful Links', 'ጠቃሚ ማገናኛ', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(341, 2, 'single', 'Contact Information', 'የመገኛ አድራሻ', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(342, 2, 'single', 'Social Media', 'ማህበራዊ ሚዲያ', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(343, 2, 'single', 'Terms and Conditions', 'ውል እና ሁኔታዎች', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(344, 2, 'single', 'Privacy Policy', 'የግላዊነት ፖሊሲ', '2023-10-24 16:28:59', '2023-10-24 16:28:59'),
(345, 2, 'single', 'Career', 'ስራ', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(346, 2, 'single', 'Job Location', 'የስራ ቦታ', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(347, 2, 'single', 'Application Deadline', 'የማመልከቻ የመጨረሻ ቀን', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(348, 2, 'single', 'Job Type', 'የሥራ ዓይነት', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(349, 2, 'single', 'Salary', 'ደሞዝ', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(350, 2, 'single', 'Company Name', 'የድርጅት ስም', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(351, 2, 'single', 'See Details', 'ዝርዝሮችን ይመልከቱ', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(352, 2, 'single', 'Apply Now', 'አሁኑኑ ያመልክቱ', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(353, 2, 'single', 'Job Title:', 'የስራ መደቡ መጠሪያ:-', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(354, 2, 'single', 'About This Job', 'ስለዚህ ሥራ', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(355, 2, 'single', 'Job Responsibilities:', 'የሥራ ኃላፊነቶች:-', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(356, 2, 'single', 'Vaccancy', 'የሚፈለገው ቁጥር', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(357, 2, 'single', 'Educational Qualification:', 'የትምህርት ደረጃ፡-', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(358, 2, 'single', 'Experience Requirements:', 'የስራ ልምድ መስፈርቶች፡-', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(359, 2, 'single', 'Additional Requirements:', 'ተጨማሪ መስፈርት፡-', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(360, 2, 'single', 'Compensation & Other Benefits', 'ማካካሻ እና ሌሎች ጥቅማ ጥቅሞች', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(361, 2, 'single', 'Login Background', 'የመግቢያ ምስል', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(362, 2, 'single', 'HISTORY OF DMFI', 'የዲኤምኤፍአይ ታሪክ', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(363, 2, 'single', 'Authorized Share', 'የተፈቀደለት አክሲዮን', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(364, 2, 'single', 'View Authorized Share', 'የተፈቀደ አክሲዮን ይመልከቱ', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(365, 2, 'single', 'Per Value', 'በእያንዳንዱ በዋጋ', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(366, 2, 'single', 'Capital', 'ካፒታል', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(367, 2, 'single', 'ETB', 'ብር', '2023-10-24 16:29:00', '2023-10-24 16:29:00'),
(368, 2, 'single', 'Tel Number', 'ስልክ ቁጥር', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(369, 2, 'single', 'Location', 'ቦታ', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(370, 2, 'single', 'Open', 'ክፍት', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(371, 2, 'single', 'Employees', 'ሰራተኞች', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(372, 2, 'single', 'Regular', 'ቋሚ', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(373, 2, 'single', 'Post Comment', 'አስተያየት ይስጡ', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(374, 2, 'single', 'Post Your Comment', 'አስተያየትወን እዚህ ያስቀምጡ', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(375, 2, 'single', 'Comments', 'አስተያየቶች', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(376, 2, 'single', 'No Comment Found!', 'ምንም አስተያየት የልም!', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(377, 2, 'single', 'Trainee', 'ሰልጣኝ', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(378, 2, 'single', 'Attendances', 'ተሰብሳቢዎች', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(379, 2, 'single', 'Online', 'ኦንላይን', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(380, 2, 'single', 'Offline', 'ኦፍላይን', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(381, 2, 'single', 'Leaves of Absence', 'የአለመኖር ቅጠል', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(382, 2, 'single', 'Approved', 'ተቀባይነት ያለው', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(383, 2, 'single', 'Newest Employees', 'አዲስ ሰራተኞች', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(384, 2, 'single', 'Name', 'ስም', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(385, 2, 'single', 'Position', 'ቦታ', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(386, 2, 'single', 'Start Date', 'ቀን ጀምር', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(387, 2, 'single', 'Recent Attendances', 'የቅርብ ጊዜ ተሰብሳቢዎች', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(388, 2, 'single', 'Type', 'አይነት', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(389, 2, 'single', 'Time', 'ጊዜ', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(390, 2, 'single', 'Recent Leaves of Absence', 'የቅርብ ጊዜ የአለመኖር ቅጠል', '2023-10-24 16:29:01', '2023-10-24 16:29:01'),
(391, 2, 'single', 'Date', 'ቀን', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(392, 2, 'single', 'ID', 'መታወቂያ', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(393, 2, 'single', 'Employee ', '', '2023-10-24 16:29:02', '2023-10-24 16:29:07'),
(394, 2, 'single', 'Society', 'ማህበረሰብ', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(395, 2, 'single', 'Department', 'ክፍል', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(396, 2, 'single', 'Status ', '', '2023-10-24 16:29:02', '2023-10-24 16:29:06'),
(397, 2, 'single', 'Add', 'ጨመር', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(398, 2, 'single', 'Add New', 'አዲስ ይጨምሩ', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(399, 2, 'single', 'Create', 'ይጨምሩ', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(400, 2, 'single', 'Employee Profile', 'ሰራተኛ ፕሮፋይል', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(401, 2, 'single', 'Personal Information', 'የግል መረጃ', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(402, 2, 'single', 'Designation', 'መጠሪያ', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(403, 2, 'single', 'Return ', '', '2023-10-24 16:29:02', '2023-10-24 16:29:10'),
(404, 2, 'single', 'First Name', 'የመጀመርያ ስም', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(405, 2, 'single', 'Middle Name', 'መካከለኛ ስም', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(406, 2, 'single', 'Last Name', 'የመጨረሻ ስም', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(407, 2, 'single', 'Gender', 'ጾታ', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(408, 2, 'single', 'Export Database', 'ኤክስፖርት ዳታቤዝ', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(409, 2, 'single', 'Backup Database', 'የውሂብ ዳታቤዝ አስቀምጥ', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(410, 2, 'single', 'Change Profile', 'መገለጫ ይቀይሩ', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(411, 2, 'single', 'Change Password', 'የይለፍ ቃል ይቀይሩ', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(412, 2, 'single', 'Change Photo', 'ፎቶ ይቀይሩ', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(413, 2, 'single', 'The first line in downloaded csv file should remain as it is. Please do not change the order of columns in csv file.', 'በወረደው csv ፋይል ውስጥ ያለው የመጀመሪያው መስመር እንዳለ ሆኖ መቆየት አለበት። እባክዎ በ csv ፋይል ውስጥ የአምዶችን ቅደም ተከተል አይቀይሩ።', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(414, 2, 'single', 'Import CSV file only', 'የCSV ፋይል ብቻ አስመጣ', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(415, 2, 'single', 'The correct column order is (id_photo, client_type, First Name, Middle Name, Last Name,Nationality, Share Type, Date of Birth, Gender, Phone, Address, Email, Password, Random Serial, Account No, Place Registered, ID Type, Joining Date, Status, Photo, Created By). Remember, the date format should be (dd-mm-yyyy) and the Other All name must be matched with your existing data. You must follow the csv file, otherwise you will get an error while importing the csv file.', 'ትክክለኛው የአምድ ቅደም ተከተል (id_photo, client_type, የመጀመሪያ ስም, የአባት ስም, የአያት ስም, ዜግነት, የአጋራ አይነት, የልደት ቀን, ጾታ, ስልክ, አድራሻ, ኢሜል, የይለፍ ቃል, የዘፈቀደ ተከታታይ, መለያ ቁጥር, የተመዘገበ ቦታ, የመታወቂያ አይነት) ነው. የመቀላቀል ቀን፣ ሁኔታ፣ ፎቶ፣ የተፈጠረ)። ያስታውሱ፣ የቀን ቅርጸቱ (dd-mm-yyyy) እና ሌላው ሁሉም ስም ካለህ ውሂብ ጋር መመሳሰል አለበት። የ csv ፋይልን መከተል አለብህ፣ አለበለዚያ የ csv ፋይሉን በሚያስገቡበት ጊዜ ስህተት ያጋጥምሃል።', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(416, 2, 'single', 'Why Choose Us', 'ለምን ምረጥን?', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(417, 2, 'single', 'You should choose our financial firm for the following reasons', 'በሚከተሉት ምክንያቶች የእኛን የፋይናንስ ኩባንያ መምረጥ አለብዎት', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(418, 2, 'single', 'Welcome to our website', 'እንኳን ወደ ድረ ገጻችን በደህና መጡ', '2023-10-24 16:29:02', '2023-10-24 16:29:02'),
(419, 2, 'single', 'How we grant the loan', 'ብድሩን እንዴት እንደምንሰጥ', '2023-10-24 16:29:03', '2023-10-24 16:29:03'),
(420, 2, 'single', 'A loan requires you to repay the money you borrow, whereas a grant does not. Grants are, essentially, a gift. In other words, they\'re non-repayable.', 'ብድር የተበደሩትን ገንዘብ እንዲመልሱ ይጠይቃል, ነገር ግን እርዳታ አይሰጥዎትም. ስጦታዎች በመሠረቱ ስጦታ ናቸው። በሌላ አነጋገር፣ የማይከፈሉ ናቸው።', '2023-10-24 16:29:03', '2023-10-24 16:29:03'),
(421, 2, 'single', 'Grants may be awarded by government departments, trusts, or corporations and given to individuals, businesses, educational institutions, or non-profits.', 'ድጎማዎች በመንግስት ክፍሎች፣ ባለአደራዎች ወይም ኮርፖሬሽኖች ሊሰጡ እና ለግለሰቦች፣ ንግዶች፣ የትምህርት ተቋማት ወይም ለትርፍ ላልሆኑ ሰዎች ሊሰጡ ይችላሉ።', '2023-10-24 16:29:03', '2023-10-24 16:29:03'),
(422, 2, 'single', 'A loan requires you to repay the money you borrow, whereas a grant does not. Grants are, essentially, a gift. In other words, they\'re non-repayable. Grants may be awarded by government departments, trusts, or corporations and given to individuals, businesses, educational institutions, or non-profits.', 'ብድር የተበደሩትን ገንዘብ እንዲመልሱ ይጠይቃል, ነገር ግን እርዳታ አይሰጥዎትም. ስጦታዎች በመሠረቱ ስጦታ ናቸው። በሌላ አነጋገር፣ የማይከፈሉ ናቸው። ድጎማዎች በመንግስት ክፍሎች፣ ባለአደራዎች ወይም ኮርፖሬሽኖች ሊሰጡ እና ለግለሰቦች፣ ንግዶች፣ የትምህርት ተቋማት ወይም ለትርፍ ላልሆኑ ሰዎች ሊሰጡ ይችላሉ።', '2023-10-24 16:29:03', '2023-10-24 16:29:03'),
(423, 2, 'single', 'Our Services', 'የእኛ አገልግሎቶች', '2023-10-24 16:29:03', '2023-10-24 16:29:03'),
(424, 2, 'single', 'Our team always provides quality services to our valuable clients', 'ቡድናችን ሁልጊዜ ውድ ደንበኞቻችን ጥራት ያለው አገልግሎት ይሰጣል', '2023-10-24 16:29:03', '2023-10-24 16:29:03'),
(425, 2, 'single', 'Testimonial', 'ምስክርነት', '2023-10-24 16:29:03', '2023-10-24 16:29:03'),
(426, 2, 'single', 'What our clients tell about us', 'ደንበኞቻችን ስለእኛ የሚናገሩት', '2023-10-24 16:29:03', '2023-10-24 16:29:03'),
(427, 2, 'single', 'Our Projects', 'የእኛ ፕሮጀክቶች', '2023-10-24 16:29:03', '2023-10-24 16:29:03'),
(428, 2, 'single', 'See all our completed successful projects here', 'ሁሉንም የተጠናቀቁ ስኬታማ ፕሮጀክቶቻችንን እዚህ ይመልከቱ', '2023-10-24 16:29:03', '2023-10-24 16:29:03'),
(429, 2, 'single', 'See all our expert team members who are ready to help you always', 'ሁል ጊዜ እርስዎን ለመርዳት ዝግጁ የሆኑትን ሁሉንም የእኛ ባለሙያ ቡድን አባላትን ይመልከቱ', '2023-10-24 16:29:03', '2023-10-24 16:29:03'),
(430, 2, 'single', 'Find a branch near you to take advantage of our services.', 'በአገልግሎታችን ለመጠቀም በአቅራቢያዎ የሚገኝ ቅርንጫፍ ያግኙ።', '2023-10-24 16:29:03', '2023-10-24 16:29:03'),
(431, 2, 'single', 'If you want to use our service to build your business, our expert team members are always here to help you be successful.', 'የእርስዎን ንግድ ለመገንባት አገልግሎታችንን ለመጠቀም ከፈለጉ፣ የእኛ ባለሙያ ቡድን አባላት እርስዎ ስኬታማ እንዲሆኑ ለመርዳት ሁል ጊዜ እዚህ አሉ።', '2023-10-24 16:29:03', '2023-10-24 16:29:03'),
(432, 2, 'single', 'Make An Appointment', 'ቀጠሮ ይያዙ', '2023-10-24 16:29:03', '2023-10-24 16:29:03'),
(433, 2, 'single', 'Latest Blog', 'የቅርብ ጊዜ ብሎግ', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(434, 2, 'single', 'See all the latest blog about our activity from here', 'ስለእኛ እንቅስቃሴ የቅርብ ጊዜውን ብሎግ ከዚህ ይመልከቱ', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(435, 2, 'single', 'Newsletter', 'ጋዜጣ', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(436, 2, 'single', 'TO GET FREE NOTIFICATIONS SUBSCRIBE TO OUR NEWSLETTER', 'ነፃ ማስታወቂያዎችን ለማግኘት ለጋዜጣችን ይመዝገቡ', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(437, 2, 'single', 'Our Partners', 'የእኛ አጋሮች', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(438, 2, 'single', 'See all our Partners', 'ሁሉንም አጋሮቻችንን ይመልከቱ', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(439, 2, 'single', 'See all our Senior Management', 'ሁሉንም የኛን ከፍተኛ አመራር ይመልከቱ', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(440, 2, 'single', 'Board of Directors', 'የዳይሬክተሮች ቦርድ', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(441, 2, 'single', 'See All Board of DMFI', 'የዲኤምኤፍአይ ሁሉንም ቦርድ ይመልከቱ', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(442, 2, 'single', 'Public Documents & Files', 'ይፋዊ ሰነዶች እና ፋይሎች', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(443, 2, 'single', 'See All Document', 'ሁሉንም ሰነድ ይመልከቱ', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(444, 2, 'single', 'Civil Status', '', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(445, 2, 'single', 'Height', '', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(446, 2, 'single', 'Weight', '', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(447, 2, 'single', 'Email Address (Personal)', '', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(448, 2, 'single', 'Mobile Number', '', '2023-10-24 16:29:04', '2023-10-24 16:29:04'),
(449, 2, 'single', 'Age', '', '2023-10-24 16:29:05', '2023-10-24 16:29:05'),
(450, 2, 'single', 'Date of Birth', '', '2023-10-24 16:29:05', '2023-10-24 16:29:05'),
(451, 2, 'single', 'National ID', '', '2023-10-24 16:29:05', '2023-10-24 16:29:05'),
(452, 2, 'single', 'Place of Birth', '', '2023-10-24 16:29:05', '2023-10-24 16:29:05'),
(453, 2, 'single', 'Home Address', '', '2023-10-24 16:29:05', '2023-10-24 16:29:05'),
(454, 2, 'single', 'Upload Profile photo', '', '2023-10-24 16:29:05', '2023-10-24 16:29:05'),
(455, 2, 'single', 'Employee Details', '', '2023-10-24 16:29:05', '2023-10-24 16:29:05'),
(456, 2, 'single', 'Job Title', '', '2023-10-24 16:29:05', '2023-10-24 16:29:05'),
(457, 2, 'single', 'ID Number', '', '2023-10-24 16:29:05', '2023-10-24 16:29:05'),
(458, 2, 'single', 'Email Address (Company)', '', '2023-10-24 16:29:05', '2023-10-24 16:29:05'),
(459, 2, 'single', 'Leave Group', '', '2023-10-24 16:29:05', '2023-10-24 16:29:05'),
(460, 2, 'single', 'Employment Information', '', '2023-10-24 16:29:05', '2023-10-24 16:29:05'),
(461, 2, 'single', 'Employment Type', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06'),
(462, 2, 'single', 'Employment Status', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06'),
(463, 2, 'single', 'Official Start Date', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06'),
(464, 2, 'single', 'Date Regularized', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06'),
(465, 2, 'single', 'Save', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06'),
(466, 2, 'single', 'Edit Employee Profile', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06'),
(467, 2, 'single', 'Update', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06'),
(468, 2, 'single', 'Cancel', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06'),
(469, 2, 'single', 'No', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06'),
(470, 2, 'single', 'Yes', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06'),
(471, 2, 'single', 'Time In', '', '2023-10-24 16:29:06', '2023-10-24 16:29:09'),
(472, 2, 'single', 'Time Out', '', '2023-10-24 16:29:06', '2023-10-24 16:29:09'),
(473, 2, 'single', 'Total hours', '', '2023-10-24 16:29:06', '2023-10-24 16:29:15'),
(474, 2, 'single', 'Status (In/Out)', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06'),
(475, 2, 'single', 'Comment', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06'),
(476, 2, 'single', 'Clock In/Out', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06'),
(477, 2, 'single', 'Time (Start-Off)', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06');
INSERT INTO `translations` (`id`, `language_id`, `group`, `key`, `value`, `created_at`, `updated_at`) VALUES
(478, 2, 'single', 'Hours', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06'),
(479, 2, 'single', 'Rest days', '', '2023-10-24 16:29:06', '2023-10-24 16:29:15'),
(480, 2, 'single', 'From (Date)', '', '2023-10-24 16:29:06', '2023-10-24 16:29:10'),
(481, 2, 'single', 'To (Date)', '', '2023-10-24 16:29:06', '2023-10-24 16:29:10'),
(482, 2, 'single', 'Actions', '', '2023-10-24 16:29:06', '2023-10-24 16:29:06'),
(483, 2, 'single', 'Schedules', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(484, 2, 'single', 'Present', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(485, 2, 'single', 'Start time', '', '2023-10-24 16:29:07', '2023-10-24 16:29:15'),
(486, 2, 'single', 'Off time', '', '2023-10-24 16:29:07', '2023-10-24 16:29:15'),
(487, 2, 'single', 'Choose Rest days', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(488, 2, 'single', 'Sunday', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(489, 2, 'single', 'Monday', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(490, 2, 'single', 'Tuesday', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(491, 2, 'single', 'Wednesday', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(492, 2, 'single', 'Thursday', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(493, 2, 'single', 'Friday', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(494, 2, 'single', 'Saturday', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(495, 2, 'single', 'Add New Schedule', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(496, 2, 'single', 'Description', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(497, 2, 'single', 'Leave From', '', '2023-10-24 16:29:07', '2023-10-24 16:29:10'),
(498, 2, 'single', 'Leave To', '', '2023-10-24 16:29:07', '2023-10-24 16:29:10'),
(499, 2, 'single', 'Return Date', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(500, 2, 'single', 'Reports', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(501, 2, 'single', 'Report name', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(502, 2, 'single', 'Last Viewed', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(503, 2, 'single', 'Employee List Report', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(504, 2, 'single', 'Employee Attendance Report', '', '2023-10-24 16:29:07', '2023-10-24 16:29:07'),
(505, 2, 'single', 'Employee Leave Report', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(506, 2, 'single', 'Employee Schedule Report', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(507, 2, 'single', 'Employee Birthdays', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(508, 2, 'single', 'User Accounts Report', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(509, 2, 'single', 'Enabled', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(510, 2, 'single', 'Disabled', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(511, 2, 'single', 'System', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(512, 2, 'single', 'Localization', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(513, 2, 'single', 'Timezone', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(514, 2, 'single', 'Optional Clock-In Comment', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(515, 2, 'single', 'Web Clock-In/Out IP Restriction', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(516, 2, 'single', 'Enter allowed IP address. If more than one add comma after each IP address.', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(517, 2, 'single', 'Attributions', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(518, 2, 'single', 'Activation', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(519, 2, 'single', 'Quick Access', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(520, 2, 'single', 'New Employee', '', '2023-10-24 16:29:08', '2023-10-24 16:29:08'),
(521, 2, 'single', 'Leave Type', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(522, 2, 'single', 'Switch to My Account', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(523, 2, 'single', 'Menu', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(524, 2, 'single', 'Settings', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(525, 2, 'single', 'Update Account', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(526, 2, 'single', 'Current Password', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(527, 2, 'single', 'New Password', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(528, 2, 'single', 'Confirm Password', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(529, 2, 'single', 'ENTER YOUR ID', '', '2023-10-24 16:29:09', '2023-10-24 16:29:14'),
(530, 2, 'single', 'Confirm', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(531, 2, 'single', 'Enter comment', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(532, 2, 'single', 'Welcome!', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(533, 2, 'single', 'Add Company', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(534, 2, 'single', 'Export', '', '2023-10-24 16:29:09', '2023-10-24 16:29:14'),
(535, 2, 'single', 'Import', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(536, 2, 'single', 'Department Name', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(537, 2, 'single', 'Add Department', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(538, 2, 'single', 'Add Job title', '', '2023-10-24 16:29:09', '2023-10-24 16:29:14'),
(539, 2, 'single', 'Add Leave Types', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(540, 2, 'single', 'Leave Name', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(541, 2, 'single', 'Credits', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(542, 2, 'single', 'Choose Term', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(543, 2, 'single', 'Monthly', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(544, 2, 'single', 'Yearly', '', '2023-10-24 16:29:09', '2023-10-24 16:29:09'),
(545, 2, 'single', 'Leave groups', '', '2023-10-24 16:29:09', '2023-10-24 16:29:14'),
(546, 2, 'single', 'Privilege', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(547, 2, 'single', 'Leave Group Name', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(548, 2, 'single', 'Leave Privileges', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(549, 2, 'single', 'Attendance (Current Month)', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(550, 2, 'single', 'Late Arrivals', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(551, 2, 'single', 'Early Departures', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(552, 2, 'single', 'Present Schedule', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(553, 2, 'single', 'Previous Schedules', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(554, 2, 'single', 'From Date / Until', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(555, 2, 'single', 'Current Month', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(556, 2, 'single', 'My Attendance', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(557, 2, 'single', 'Date Range', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(558, 2, 'single', 'End Date', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(559, 2, 'single', 'Filter', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(560, 2, 'single', 'My Schedule', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(561, 2, 'single', 'Rest Day(s)', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(562, 2, 'single', 'Past Schedule', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(563, 2, 'single', 'My Leave', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(564, 2, 'single', 'Request Leave', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(565, 2, 'single', 'Reason', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(566, 2, 'single', 'Send Request', '', '2023-10-24 16:29:10', '2023-10-24 16:29:14'),
(567, 2, 'single', 'My Profile', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(568, 2, 'single', 'Update User', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(569, 2, 'single', 'Update Personal Account', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(570, 2, 'single', 'Update Personal Password', '', '2023-10-24 16:29:10', '2023-10-24 16:29:10'),
(571, 2, 'single', 'Edit', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(572, 2, 'single', 'Profile', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(573, 2, 'single', 'Edit My Profile', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(574, 2, 'single', 'View', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(575, 2, 'single', 'Edit Leave request', '', '2023-10-24 16:29:11', '2023-10-24 16:29:13'),
(576, 2, 'single', 'Delete', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(577, 2, 'single', 'Edit Attendance', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(578, 2, 'single', 'Edit Schedule', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(579, 2, 'single', 'Edit Leave', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(580, 2, 'single', 'Manager Privilege', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(581, 2, 'single', 'Add Comment (Optional)', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(582, 2, 'single', 'Export to CSV', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(583, 2, 'single', 'Employee Name', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(584, 2, 'single', 'Download', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(585, 2, 'single', 'Company Population', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(586, 2, 'single', 'Department Population', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(587, 2, 'single', 'Gender Demographics', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(588, 2, 'single', 'Age Demographics', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(589, 2, 'single', 'Civil Status Demographics', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(590, 2, 'single', 'Employees Hired by Year', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(591, 2, 'single', 'Birthday', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(592, 2, 'single', 'Contact Number', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(593, 2, 'single', 'Account Type', '', '2023-10-24 16:29:11', '2023-10-24 16:29:11'),
(594, 2, 'single', 'Choose Account type', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(595, 2, 'single', 'Admin', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(596, 2, 'single', 'Register', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(597, 2, 'single', 'New User', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(598, 2, 'single', 'Edit User', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(599, 2, 'single', 'Confirm New Password', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(600, 2, 'single', 'User Roles ', '', '2023-10-24 16:29:12', '2023-10-24 16:29:13'),
(601, 2, 'single', 'Role Name', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(602, 2, 'single', 'Edit Role', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(603, 2, 'single', 'New Role', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(604, 2, 'single', 'Open Dashboard page', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(605, 2, 'single', 'Open Employees page', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(606, 2, 'single', 'View Employee profile', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(607, 2, 'single', 'Add Employee', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(608, 2, 'single', 'Edit Employee', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(609, 2, 'single', 'Delete Employee', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(610, 2, 'single', 'Archive Employee', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(611, 2, 'single', 'Open Attendances page', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(612, 2, 'single', 'Delete Attendance', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(613, 2, 'single', 'Open Schedules page', '', '2023-10-24 16:29:12', '2023-10-24 16:29:12'),
(614, 2, 'single', 'Add Schedule', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(615, 2, 'single', 'Delete Schedule', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(616, 2, 'single', 'Archive Schedule', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(617, 2, 'single', 'Leave', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(618, 2, 'single', 'Open Leave page', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(619, 2, 'single', 'Delete Leave request', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(620, 2, 'single', 'Open Settings page', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(621, 2, 'single', 'Update Settings', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(622, 2, 'single', 'Open Reports page', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(623, 2, 'single', 'Open Users page', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(624, 2, 'single', 'Add User', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(625, 2, 'single', 'Delete User', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(626, 2, 'single', 'Open User roles page', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(627, 2, 'single', 'Add Role', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(628, 2, 'single', 'Set Permission', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(629, 2, 'single', 'Delete Role', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(630, 2, 'single', 'Companies', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(631, 2, 'single', 'Open Companies page', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(632, 2, 'single', 'Delete Company', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(633, 2, 'single', 'Departments', '', '2023-10-24 16:29:13', '2023-10-24 16:29:13'),
(634, 2, 'single', 'Open Departments page', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(635, 2, 'single', 'Delete Department', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(636, 2, 'single', 'Open Job titles page', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(637, 2, 'single', 'Delete Job title', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(638, 2, 'single', 'Leave types', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(639, 2, 'single', 'Open Leave types page', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(640, 2, 'single', 'Add Leave type', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(641, 2, 'single', 'Delete Leave type', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(642, 2, 'single', 'Open Leave groups page', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(643, 2, 'single', 'Add Leave group', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(644, 2, 'single', 'Edit Leave Group', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(645, 2, 'single', 'Delete Leave group', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(646, 2, 'single', 'Import Company', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(647, 2, 'single', 'Import CSV file', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(648, 2, 'single', 'Import Departments', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(649, 2, 'single', 'Import Leave Types', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(650, 2, 'single', 'Import Job Titles', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(651, 2, 'single', 'Close', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(652, 2, 'single', 'Add New Leave', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(653, 2, 'single', 'Select your country to enable country specific features', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(654, 2, 'single', 'Time zone', '', '2023-10-24 16:29:14', '2023-10-24 16:29:14'),
(655, 2, 'single', 'Select your region, and city to sync time for attendance', '', '2023-10-24 16:29:15', '2023-10-24 16:29:15'),
(656, 2, 'single', 'Time In comments', '', '2023-10-24 16:29:15', '2023-10-24 16:29:15'),
(657, 2, 'single', 'Turn on to require comments when clocking in', '', '2023-10-24 16:29:15', '2023-10-24 16:29:15'),
(658, 2, 'single', 'Web clock IP restriction', '', '2023-10-24 16:29:15', '2023-10-24 16:29:15'),
(659, 2, 'single', 'Turn on to block clocking from unknown device or IP address', '', '2023-10-24 16:29:15', '2023-10-24 16:29:15'),
(660, 2, 'single', 'Enter IP addresses, if more than one add comma after each IP address', '', '2023-10-24 16:29:15', '2023-10-24 16:29:15'),
(661, 2, 'single', 'Add New Role', '', '2023-10-24 16:29:15', '2023-10-24 16:29:15'),
(662, 2, 'single', 'Edit Permissions', '', '2023-10-24 16:29:15', '2023-10-24 16:29:15'),
(663, 2, 'single', 'There were some errors with your submission', '', '2023-10-24 16:29:15', '2023-10-24 16:29:15'),
(664, 2, 'single', 'Organizational Profile', '', '2023-10-24 16:29:15', '2023-10-24 16:29:15'),
(665, 2, 'single', 'Edit Schedules', '', '2023-10-24 16:29:15', '2023-10-24 16:29:15'),
(666, 2, 'single', 'From', '', '2023-10-24 16:29:15', '2023-10-24 16:29:15'),
(667, 2, 'single', 'To', '', '2023-10-24 16:29:15', '2023-10-24 16:29:15'),
(668, 2, 'single', 'Time In Date', '', '2023-10-24 16:29:15', '2023-10-24 16:29:15'),
(669, 2, 'single', 'Time Out Date', '', '2023-10-24 16:29:15', '2023-10-24 16:29:15'),
(670, 2, 'single', 'Mobile no.', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(671, 2, 'single', 'ID no.', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(672, 2, 'single', 'Male', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(673, 2, 'single', 'Female', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(674, 2, 'single', 'Single', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(675, 2, 'single', 'Married', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(676, 2, 'single', 'Annulled', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(677, 2, 'single', 'Widowed', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(678, 2, 'single', 'Legally Separated', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(679, 2, 'single', 'Active ', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(680, 2, 'single', 'Archived', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(681, 2, 'single', 'In Time', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(682, 2, 'single', 'Late Arrival', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(683, 2, 'single', 'On Time', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(684, 2, 'single', 'Early Departure', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(685, 2, 'single', 'Permission Denied', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(686, 2, 'single', 'Sorry, you don\'t have permission to access the page.', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(687, 2, 'single', 'Oops! You don\'t have account yet!', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(688, 2, 'single', 'Go Home', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(689, 2, 'single', 'Oops! Your account is not enabled. ', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(690, 2, 'single', 'Sorry, the page you are looking for could not be found.', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(691, 2, 'single', 'Success!', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(692, 2, 'single', 'Time In at', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(693, 2, 'single', 'Time Out at', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(694, 2, 'single', 'Time format', '', '2023-10-24 16:29:16', '2023-10-24 16:29:16'),
(695, 2, 'single', 'Select your preferred time format', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(696, 2, 'single', 'Sign in to your account', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(697, 2, 'single', 'Enter your e-mail address', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(698, 2, 'single', 'Enter your password', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(699, 2, 'single', 'Remember me', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(700, 2, 'single', 'Sign in', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(701, 2, 'single', 'RFID Clock In and Clock Out', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(702, 2, 'single', 'Turn on to enable features for RFID Web Clock In and Clock Out', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(703, 2, 'single', 'Toggle Off/On', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(704, 2, 'single', 'Optional Features', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(705, 2, 'single', 'Safeguarding', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(706, 2, 'single', 'View web clock', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(707, 2, 'single', 'Manual entry', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(708, 2, 'single', 'The employee already clock in today at', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(709, 2, 'single', 'Add Employee Attendance', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(710, 2, 'single', 'Add New Leave Group', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(711, 2, 'single', 'Attendance is successfully deleted!', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(712, 2, 'single', 'Update was successful!', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(713, 2, 'single', 'Invalid request!', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(714, 2, 'single', 'Invalid request! Your device it not registered', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(715, 2, 'single', 'There is no employee with this ID!', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(716, 2, 'single', 'Success! Attendance data is saved!', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(717, 2, 'single', 'The ID number is already used', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(718, 2, 'single', 'Successful registration!', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(719, 2, 'single', 'Invalid request! Please select an employee or choose a date range', '', '2023-10-24 16:29:17', '2023-10-24 16:29:17'),
(720, 2, 'single', 'Invalid request! Please select an employee', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(721, 2, 'single', 'A company is successfully deleted!', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(722, 2, 'single', 'A department is successfully deleted!', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(723, 2, 'single', 'A job title is successfully deleted!', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(724, 2, 'single', 'A leave type is successfully deleted!', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(725, 2, 'single', 'A leave group is successfully deleted!', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(726, 2, 'single', 'Invalid request! Please upload a csv file ', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(727, 2, 'single', 'A leave request is successfully deleted!', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(728, 2, 'single', 'The employee is successfully removed!', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(729, 2, 'single', 'The employee is successfully archived!', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(730, 2, 'single', 'Wrong credentials!', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(731, 2, 'single', 'A user role is successfully deleted!', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(732, 2, 'single', 'Invalid request! The employee has an active schedule please archive the active schedule', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(733, 2, 'single', 'A schedule is successfully deleted!', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(734, 2, 'single', 'A schedule is successfully archived!', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(735, 2, 'single', 'Are you sure? This user is registered!', '', '2023-10-24 16:29:18', '2023-10-24 16:29:18'),
(736, 2, 'single', 'A user account is successfully deleted!', '', '2023-10-24 16:29:19', '2023-10-24 16:29:19'),
(737, 2, 'single', 'The new passwords must match!', '', '2023-10-24 16:29:19', '2023-10-24 16:29:19'),
(738, 2, 'single', 'Password is successfully updated!', '', '2023-10-24 16:29:19', '2023-10-24 16:29:19'),
(739, 2, 'single', 'A leave request is submitted!', '', '2023-10-24 16:29:19', '2023-10-24 16:29:19'),
(740, 2, 'single', 'A leave is successfully deleted!', '', '2023-10-24 16:29:19', '2023-10-24 16:29:19'),
(741, 2, 'single', 'Invalid request! Please enter the ID', '', '2023-10-24 16:29:19', '2023-10-24 16:29:19'),
(742, 2, 'single', 'Invalid request! Please enter a comment', '', '2023-10-24 16:29:19', '2023-10-24 16:29:19'),
(743, 2, 'single', 'Invalid request! Wrong ID format', '', '2023-10-24 16:29:19', '2023-10-24 16:29:19'),
(744, 2, 'single', 'Are you sure? You were clocked-in today at', '', '2023-10-24 16:29:19', '2023-10-24 16:29:19'),
(745, 2, 'single', 'Invalid request! You are not allowed to clock in twice or more in a day', '', '2023-10-24 16:29:19', '2023-10-24 16:29:19'),
(746, 2, 'single', 'Invalid request! You are not clocked-in', '', '2023-10-24 16:29:19', '2023-10-24 16:29:19'),
(747, 2, 'single', 'Are you sure? You were clocked-out today at', '', '2023-10-24 16:29:19', '2023-10-24 16:29:19'),
(748, 2, 'single', 'Message', '', '2023-10-24 16:29:19', '2023-10-24 16:29:19'),
(749, 2, 'single', 'Are you sure? ', '', '2023-10-24 16:29:19', '2023-10-24 16:29:19'),
(750, 1, 'auth', 'failed', 'These credentials do not match our records.', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(751, 1, 'auth', 'password', 'The provided password is incorrect.', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(752, 1, 'auth', 'throttle', 'Too many login attempts. Please try again in :seconds seconds.', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(753, 1, 'file', 'About', 'About', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(754, 1, 'file', 'Absent', 'Absent', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(755, 1, 'file', 'Account', 'Account', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(756, 1, 'file', 'Accounts', 'Accounts', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(757, 1, 'file', 'Active', 'Active', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(758, 1, 'file', 'Add', 'Add', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(759, 1, 'file', 'Address', 'Address', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(760, 1, 'file', 'Admin', 'Admin', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(761, 1, 'file', 'All', 'All', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(762, 1, 'file', 'All_Department', 'All Department', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(763, 1, 'file', 'Allowances', 'Allowances', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(764, 1, 'file', 'Amount', 'Amount', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(765, 1, 'file', 'Announcement', 'Announcement', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(766, 1, 'file', 'Announcements', 'Announcements', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(767, 1, 'file', 'Apply', 'Apply', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(768, 1, 'file', 'Approved', 'Approved', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(769, 1, 'file', 'Arrangement', 'Arrangement', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(770, 1, 'file', 'Assets', 'Assets', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(771, 1, 'file', 'Attach', 'Attach', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(772, 1, 'file', 'Attachments', 'Attachments', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(773, 1, 'file', 'Attendance', 'Attendance', '2023-10-24 16:29:20', '2023-10-24 16:29:20'),
(774, 1, 'file', 'Attendances', 'Attendances', '2023-10-24 16:29:21', '2023-10-24 16:29:21'),
(775, 1, 'file', 'Award', 'Award', '2023-10-24 16:29:21', '2023-10-24 16:29:21'),
(776, 1, 'file', 'Balance', 'Balance', '2023-10-24 16:29:21', '2023-10-24 16:29:21'),
(777, 1, 'file', 'Bank', 'Bank', '2023-10-24 16:29:21', '2023-10-24 16:29:21'),
(778, 1, 'file', 'Basic', 'Basic', '2023-10-24 16:29:21', '2023-10-24 16:29:21'),
(779, 1, 'file', 'Bugs', 'Bugs', '2023-10-24 16:29:21', '2023-10-24 16:29:21'),
(780, 1, 'file', 'By', 'By', '2023-10-24 16:29:21', '2023-10-24 16:29:21'),
(781, 1, 'file', 'CSV', 'CSV', '2023-10-24 16:29:21', '2023-10-24 16:29:21'),
(782, 1, 'file', 'CV', 'CV', '2023-10-24 16:29:21', '2023-10-24 16:29:21'),
(783, 1, 'file', 'Cancel', 'Cancel', '2023-10-24 16:29:21', '2023-10-24 16:29:21'),
(784, 1, 'file', 'Candidates', 'Candidates', '2023-10-24 16:29:21', '2023-10-24 16:29:21'),
(785, 1, 'file', 'Cash', 'Cash', '2023-10-24 16:29:21', '2023-10-24 16:29:21'),
(786, 1, 'file', 'category', 'category', '2023-10-24 16:29:21', '2023-10-24 16:29:33'),
(787, 1, 'file', 'Child', 'Child', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(788, 1, 'file', 'City', 'City', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(789, 1, 'file', 'Client', 'Client', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(790, 1, 'file', 'Close', 'Close', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(791, 1, 'file', 'Comments', 'Comments', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(792, 1, 'file', 'Commissions', 'Commissions', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(793, 1, 'file', 'company', 'company', '2023-10-24 16:29:22', '2023-10-24 16:29:33'),
(794, 1, 'file', 'Complaint', 'Complaint', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(795, 1, 'file', 'Complaints', 'Complaints', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(796, 1, 'file', 'Completed', 'Completed', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(797, 1, 'file', 'Confirmation', 'Confirmation', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(798, 1, 'file', 'Contact', 'Contact', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(799, 1, 'file', 'Corporation', 'Corporation', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(800, 1, 'file', 'Cost', 'Cost', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(801, 1, 'file', 'Country', 'Country', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(802, 1, 'file', 'Credit', 'Credit', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(803, 1, 'file', 'Currency', 'Currency', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(804, 1, 'file', 'Dashboard', 'Dashboard', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(805, 1, 'file', 'Date', 'Date', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(806, 1, 'file', 'Days', 'Days', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(807, 1, 'file', 'Debit', 'Debit', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(808, 1, 'file', 'Deductions', 'Deductions', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(809, 1, 'file', 'Deferred', 'Deferred', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(810, 1, 'file', 'Deleting...', 'Deleting...', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(811, 1, 'file', 'Department', 'Department', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(812, 1, 'file', 'Dependent', 'Dependent', '2023-10-24 16:29:22', '2023-10-24 16:29:22'),
(813, 1, 'file', 'Deposit', 'Deposit', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(814, 1, 'file', 'Description', 'Description', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(815, 1, 'file', 'Designation', 'Designation', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(816, 1, 'file', 'Details', 'Details', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(817, 1, 'file', 'Developed', 'Developed', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(818, 1, 'file', 'Discount', 'Discount', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(819, 1, 'file', 'Discussions', 'Discussions', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(820, 1, 'file', 'Divorced/Separated', 'Divorced/Separated', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(821, 1, 'file', 'Document', 'Document', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(822, 1, 'file', 'Download', 'Download', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(823, 1, 'file', 'Duration', 'Duration', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(824, 1, 'file', 'Earnings', 'Earnings', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(825, 1, 'file', 'Edit', 'Edit', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(826, 1, 'file', 'Email', 'Email', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(827, 1, 'file', 'Employee', 'Employee', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(828, 1, 'file', 'Employees', 'Employees', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(829, 1, 'file', 'Employer', 'Employer', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(830, 1, 'file', 'Encryption', 'Encryption', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(831, 1, 'file', 'Envato', 'Envato', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(832, 1, 'file', 'Error', 'Error', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(833, 1, 'file', 'Errors', 'Errors', '2023-10-24 16:29:23', '2023-10-24 16:29:23'),
(834, 1, 'file', 'Event', 'Event', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(835, 1, 'file', 'Events', 'Events', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(836, 1, 'file', 'Expense', 'Expense', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(837, 1, 'file', 'Experience', 'Experience', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(838, 1, 'file', 'Expertise', 'Expertise', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(839, 1, 'file', 'Ext', 'Ext', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(840, 1, 'file', 'Extension', 'Extension', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(841, 1, 'file', 'FB', 'FB', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(842, 1, 'file', 'Female', 'Female', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(843, 1, 'file', 'File', 'File', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(844, 1, 'file', 'Files', 'Files', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(845, 1, 'file', 'Finance', 'Finance', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(846, 1, 'file', 'Fixed', 'Fixed', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(847, 1, 'file', 'Flat', 'Flat', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(848, 1, 'file', 'Footer', 'Footer', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(849, 1, 'file', 'Footer_Link', 'Footer Link', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(850, 1, 'file', 'Freelance', 'Freelance', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(851, 1, 'file', 'Fresh', 'Fresh', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(852, 1, 'file', 'Friday', 'Friday', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(853, 1, 'file', 'From', 'From', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(854, 1, 'file', 'Gender', 'Gender', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(855, 1, 'file', 'General', 'General', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(856, 1, 'file', 'Get', 'Get', '2023-10-24 16:29:24', '2023-10-24 16:29:24'),
(857, 1, 'file', 'Gift', 'Gift', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(858, 1, 'file', 'High', 'High', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(859, 1, 'file', 'Highest', 'Highest', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(860, 1, 'file', 'Holiday', 'Holiday', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(861, 1, 'file', 'Holidays', 'Holidays', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(862, 1, 'file', 'Home', 'Home', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(863, 1, 'file', 'Hours', 'Hours', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(864, 1, 'file', 'Image', 'Image', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(865, 1, 'file', 'Immigration', 'Immigration', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(866, 1, 'file', 'Inactive', 'Inactive', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(867, 1, 'file', 'Income', 'Income', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(868, 1, 'file', 'Info', 'Info', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(869, 1, 'file', 'Internship', 'Internship', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(870, 1, 'file', 'Interviewers', 'Interviewers', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(871, 1, 'file', 'Invoice', 'Invoice', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(872, 1, 'file', 'Irfan', 'Irfan', '2023-10-24 16:29:25', '2023-10-24 16:29:25'),
(873, 1, 'file', 'Item', 'Item', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(874, 1, 'file', 'Job', 'Job', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(875, 1, 'file', 'Jobs', 'Jobs', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(876, 1, 'file', 'Language', 'Language', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(877, 1, 'file', 'Late', 'Late', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(878, 1, 'file', 'Leave', 'Leave', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(879, 1, 'file', 'Linkedin', 'Linkedin', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(880, 1, 'file', 'Loan', 'Loan', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(881, 1, 'file', 'location', 'location', '2023-10-24 16:29:26', '2023-10-24 16:29:33'),
(882, 1, 'file', 'Low', 'Low', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(883, 1, 'file', 'Male', 'Male', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(884, 1, 'file', 'Manufacturer', 'Manufacturer', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(885, 1, 'file', 'Married', 'Married', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(886, 1, 'file', 'Medium', 'Medium', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(887, 1, 'file', 'Meeting', 'Meeting', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(888, 1, 'file', 'Meetings', 'Meetings', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(889, 1, 'file', 'Message', 'Message', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(890, 1, 'file', 'Mobile', 'Mobile', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(891, 1, 'file', 'Monday', 'Monday', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(892, 1, 'file', 'NOTE', 'NOTE', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(893, 1, 'file', 'name', 'name', '2023-10-24 16:29:26', '2023-10-24 16:29:33'),
(894, 1, 'file', 'Next', 'Next', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(895, 1, 'file', 'No', 'No', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(896, 1, 'file', 'Non-Taxable', 'Non-Taxable', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(897, 1, 'file', 'Notes', 'Notes', '2023-10-24 16:29:26', '2023-10-24 16:29:26'),
(898, 1, 'file', 'Notification', 'Notification', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(899, 1, 'file', 'Notify', 'Notify', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(900, 1, 'file', 'Number', 'Number', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(901, 1, 'file', 'OK', 'OK', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(902, 1, 'file', 'Office_Shift', 'Office Shift', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(903, 1, 'file', 'Ongoing', 'Ongoing', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(904, 1, 'file', 'Optional', 'Optional', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(905, 1, 'file', 'Options', 'Options', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(906, 1, 'file', 'Organization', 'Organization', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(907, 1, 'file', 'Other', 'Other', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(908, 1, 'file', 'Overtime', 'Overtime', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(909, 1, 'file', 'Overview', 'Overview', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(910, 1, 'file', 'PDF', 'PDF', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(911, 1, 'file', 'Paid', 'Paid', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(912, 1, 'file', 'Partnership', 'Partnership', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(913, 1, 'file', 'Password', 'Password', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(914, 1, 'file', 'Pay', 'Pay', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(915, 1, 'file', 'Payee', 'Payee', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(916, 1, 'file', 'Payer', 'Payer', '2023-10-24 16:29:27', '2023-10-24 16:29:27'),
(917, 1, 'file', 'Payment', 'Payment', '2023-10-24 16:29:28', '2023-10-24 16:29:28'),
(918, 1, 'file', 'Payroll', 'Payroll', '2023-10-24 16:29:28', '2023-10-24 16:29:28'),
(919, 1, 'file', 'Payslip', 'Payslip', '2023-10-24 16:29:28', '2023-10-24 16:29:28'),
(920, 1, 'file', 'Pending', 'Pending', '2023-10-24 16:29:28', '2023-10-24 16:29:28'),
(921, 1, 'file', 'Percent', 'Percent', '2023-10-24 16:29:28', '2023-10-24 16:29:28'),
(922, 1, 'file', 'Percentage', 'Percentage', '2023-10-24 16:29:28', '2023-10-24 16:29:28'),
(923, 1, 'file', 'permission', 'permission', '2023-10-24 16:29:28', '2023-10-24 16:29:33'),
(924, 1, 'file', 'Permissions', 'Permissions', '2023-10-24 16:29:28', '2023-10-24 16:29:28'),
(925, 1, 'file', 'Personal', 'Personal', '2023-10-24 16:29:28', '2023-10-24 16:29:28'),
(926, 1, 'file', 'Phone', 'Phone', '2023-10-24 16:29:28', '2023-10-24 16:29:28'),
(927, 1, 'file', 'Photo', 'Photo', '2023-10-24 16:29:28', '2023-10-24 16:29:28'),
(928, 1, 'file', 'Policy', 'Policy', '2023-10-24 16:29:28', '2023-10-24 16:29:28'),
(929, 1, 'file', 'Position', 'Position', '2023-10-24 16:29:28', '2023-10-24 16:29:28'),
(930, 1, 'file', 'Post', 'Post', '2023-10-24 16:29:28', '2023-10-24 16:29:28'),
(931, 1, 'file', 'Postponed', 'Postponed', '2023-10-24 16:29:28', '2023-10-24 16:29:28'),
(932, 1, 'file', 'Prefix', 'Prefix', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(933, 1, 'file', 'Previous', 'Previous', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(934, 1, 'file', 'Primary', 'Primary', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(935, 1, 'file', 'Print', 'Print', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(936, 1, 'file', 'Priority', 'Priority', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(937, 1, 'file', 'Profile', 'Profile', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(938, 1, 'file', 'Progress', 'Progress', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(939, 1, 'file', 'Project', 'Project', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(940, 1, 'file', 'Projects', 'Projects', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(941, 1, 'file', 'Promotion', 'Promotion', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(942, 1, 'file', 'published', 'published', '2023-10-24 16:29:29', '2023-10-24 16:29:33'),
(943, 1, 'file', 'Purchase', 'Purchase', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(944, 1, 'file', 'Qty', 'Qty', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(945, 1, 'file', 'Qualification', 'Qualification', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(946, 1, 'file', 'RTL Layout', 'RTL Layout', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(947, 1, 'file', 'Rate', 'Rate', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(948, 1, 'file', 'Re-Type', 'Re-Type', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(949, 1, 'file', 'Reason', 'Reason', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(950, 1, 'file', 'Recruitment', 'Recruitment', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(951, 1, 'file', 'Rejected', 'Rejected', '2023-10-24 16:29:29', '2023-10-24 16:29:29'),
(952, 1, 'file', 'Relation', 'Relation', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(953, 1, 'file', 'Remarks', 'Remarks', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(954, 1, 'file', 'Resignation', 'Resignation', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(955, 1, 'file', 'Resignations', 'Resignations', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(956, 1, 'file', 'Role', 'Role', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(957, 1, 'file', 'Salary', 'Salary', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(958, 1, 'file', 'Saturday', 'Saturday', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(959, 1, 'file', 'Save', 'Save', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(960, 1, 'file', 'School/University', 'School/University', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(961, 1, 'file', 'Search', 'Search', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(962, 1, 'file', 'Self', 'Self', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(963, 1, 'file', 'Send', 'Send', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(964, 1, 'file', 'Sent', 'Sent', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(965, 1, 'file', 'Shift', 'Shift', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(966, 1, 'file', 'Show', 'Show', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(967, 1, 'file', 'Showing', 'Showing', '2023-10-24 16:29:30', '2023-10-24 16:29:30'),
(968, 1, 'file', 'Sibling', 'Sibling', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(969, 1, 'file', 'Single', 'Single', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(970, 1, 'file', 'Size', 'Size', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(971, 1, 'file', 'Solved', 'Solved', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(972, 1, 'file', 'Spouse', 'Spouse', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(973, 1, 'file', 'State', 'State', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(974, 1, 'file', 'State/Province', 'State/Province', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(975, 1, 'file', 'status', 'status', '2023-10-24 16:29:31', '2023-10-24 16:29:33'),
(976, 1, 'file', 'subject', 'subject', '2023-10-24 16:29:31', '2023-10-24 16:29:33'),
(977, 1, 'file', 'submit', 'submit', '2023-10-24 16:29:31', '2023-10-24 16:29:33'),
(978, 1, 'file', 'Success', 'Success', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(979, 1, 'file', 'Suffix', 'Suffix', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(980, 1, 'file', 'Summary', 'Summary', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(981, 1, 'file', 'Sunday', 'Sunday', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(982, 1, 'file', 'Tax', 'Tax', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(983, 1, 'file', 'Task', 'Task', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(984, 1, 'file', 'Tasks', 'Tasks', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(985, 1, 'file', 'Taxable', 'Taxable', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(986, 1, 'file', 'Termination', 'Termination', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(987, 1, 'file', 'Terminations', 'Terminations', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(988, 1, 'file', 'Theme', 'Theme', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(989, 1, 'file', 'Thursday', 'Thursday', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(990, 1, 'file', 'Ticket', 'Ticket', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(991, 1, 'file', 'Timesheets', 'Timesheets', '2023-10-24 16:29:31', '2023-10-24 16:29:31'),
(992, 1, 'file', 'Title', 'Title', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(993, 1, 'file', 'To', 'To', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(994, 1, 'file', 'Total', 'Total', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(995, 1, 'file', 'Trainer', 'Trainer', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(996, 1, 'file', 'Trainers', 'Trainers', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(997, 1, 'file', 'Training', 'Training', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(998, 1, 'file', 'Trainings', 'Trainings', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(999, 1, 'file', 'Transaction', 'Transaction', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1000, 1, 'file', 'Transfer', 'Transfer', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1001, 1, 'file', 'Travel', 'Travel', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1002, 1, 'file', 'Tuesday', 'Tuesday', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1003, 1, 'file', 'Type', 'Type', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1004, 1, 'file', 'Unpaid', 'Unpaid', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1005, 1, 'file', 'unpublished', 'unpublished', '2023-10-24 16:29:32', '2023-10-24 16:29:34'),
(1006, 1, 'file', 'Unsolved', 'Unsolved', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1007, 1, 'file', 'update', 'update', '2023-10-24 16:29:32', '2023-10-24 16:29:34'),
(1008, 1, 'file', 'Upload', 'Upload', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1009, 1, 'file', 'User', 'User', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1010, 1, 'file', 'Username', 'Username', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1011, 1, 'file', 'Vacancy', 'Vacancy', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1012, 1, 'file', 'Warning', 'Warning', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1013, 1, 'file', 'Warnings', 'Warnings', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1014, 1, 'file', 'Warranty', 'Warranty', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1015, 1, 'file', 'Warranty/AMC', 'Warranty/AMC', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1016, 1, 'file', 'Website', 'Website', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1017, 1, 'file', 'Wednesday', 'Wednesday', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1018, 1, 'file', 'Welcome', 'Welcome', '2023-10-24 16:29:32', '2023-10-24 16:29:32'),
(1019, 1, 'file', 'Widowed', 'Widowed', '2023-10-24 16:29:33', '2023-10-24 16:29:33'),
(1020, 1, 'file', 'Work', 'Work', '2023-10-24 16:29:33', '2023-10-24 16:29:33'),
(1021, 1, 'file', 'Years', 'Years', '2023-10-24 16:29:33', '2023-10-24 16:29:33'),
(1022, 1, 'file', 'Yes', 'Yes', '2023-10-24 16:29:33', '2023-10-24 16:29:33'),
(1023, 1, 'file', 'ZIP', 'ZIP', '2023-10-24 16:29:33', '2023-10-24 16:29:33'),
(1024, 1, 'file', 'action', 'action', '2023-10-24 16:29:33', '2023-10-24 16:29:33'),
(1025, 1, 'file', 'delete', 'delete', '2023-10-24 16:29:33', '2023-10-24 16:29:33'),
(1026, 1, 'file', 'gif,jpg,png,jpeg', 'gif,jpg,png,jpeg', '2023-10-24 16:29:33', '2023-10-24 16:29:33'),
(1027, 1, 'file', 'logout', 'logout', '2023-10-24 16:29:33', '2023-10-24 16:29:33'),
(1028, 1, 'file', 'parent', 'parent', '2023-10-24 16:29:33', '2023-10-24 16:29:33'),
(1029, 1, 'file', 'present', 'present', '2023-10-24 16:29:33', '2023-10-24 16:29:33'),
(1030, 1, 'pagination', 'next', 'Next &raquo;', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1031, 1, 'pagination', 'previous', '&laquo; Previous', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1032, 1, 'passwords', 'reset', 'Your password has been reset!', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1033, 1, 'passwords', 'sent', 'We have emailed your password reset link!', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1034, 1, 'passwords', 'throttled', 'Please wait before retrying.', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1035, 1, 'passwords', 'token', 'This password reset token is invalid.', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1036, 1, 'passwords', 'user', 'We can\'t find a user with that email address.', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1037, 1, 'validation', 'accepted', 'The :attribute must be accepted.', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1038, 1, 'validation', 'active_url', 'The :attribute is not a valid URL.', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1039, 1, 'validation', 'after', 'The :attribute must be a date after :date.', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1040, 1, 'validation', 'after_or_equal', 'The :attribute must be a date after or equal to :date.', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1041, 1, 'validation', 'alpha', 'The :attribute may only contain letters.', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1042, 1, 'validation', 'alpha_dash', 'The :attribute may only contain letters, numbers, dashes and underscores.', '2023-10-24 16:29:34', '2023-10-24 16:29:34');
INSERT INTO `translations` (`id`, `language_id`, `group`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1043, 1, 'validation', 'alpha_num', 'The :attribute may only contain letters and numbers.', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1044, 1, 'validation', 'array', 'The :attribute must be an array.', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1045, 1, 'validation', 'before', 'The :attribute must be a date before :date.', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1046, 1, 'validation', 'before_or_equal', 'The :attribute must be a date before or equal to :date.', '2023-10-24 16:29:34', '2023-10-24 16:29:34'),
(1047, 1, 'validation', 'between.array', 'The :attribute must have between :min and :max items.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1048, 1, 'validation', 'between.file', 'The :attribute must be between :min and :max kilobytes.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1049, 1, 'validation', 'between.numeric', 'The :attribute must be between :min and :max.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1050, 1, 'validation', 'between.string', 'The :attribute must be between :min and :max characters.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1051, 1, 'validation', 'boolean', 'The :attribute field must be true or false.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1052, 1, 'validation', 'confirmed', 'The :attribute confirmation does not match.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1053, 1, 'validation', 'custom.attribute-name.rule-name', 'custom-message', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1054, 1, 'validation', 'date', 'The :attribute is not a valid date.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1055, 1, 'validation', 'date_equals', 'The :attribute must be a date equal to :date.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1056, 1, 'validation', 'date_format', 'The :attribute does not match the format :format.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1057, 1, 'validation', 'different', 'The :attribute and :other must be different.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1058, 1, 'validation', 'digits', 'The :attribute must be :digits digits.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1059, 1, 'validation', 'digits_between', 'The :attribute must be between :min and :max digits.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1060, 1, 'validation', 'dimensions', 'The :attribute has invalid image dimensions.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1061, 1, 'validation', 'distinct', 'The :attribute field has a duplicate value.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1062, 1, 'validation', 'email', 'The :attribute must be a valid email address.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1063, 1, 'validation', 'ends_with', 'The :attribute must end with one of the following: :values.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1064, 1, 'validation', 'exists', 'The selected :attribute is invalid.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1065, 1, 'validation', 'file', 'The :attribute must be a file.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1066, 1, 'validation', 'filled', 'The :attribute field must have a value.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1067, 1, 'validation', 'gt.array', 'The :attribute must have more than :value items.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1068, 1, 'validation', 'gt.file', 'The :attribute must be greater than :value kilobytes.', '2023-10-24 16:29:35', '2023-10-24 16:29:35'),
(1069, 1, 'validation', 'gt.numeric', 'The :attribute must be greater than :value.', '2023-10-24 16:29:36', '2023-10-24 16:29:36'),
(1070, 1, 'validation', 'gt.string', 'The :attribute must be greater than :value characters.', '2023-10-24 16:29:36', '2023-10-24 16:29:36'),
(1071, 1, 'validation', 'gte.array', 'The :attribute must have :value items or more.', '2023-10-24 16:29:36', '2023-10-24 16:29:36'),
(1072, 1, 'validation', 'gte.file', 'The :attribute must be greater than or equal :value kilobytes.', '2023-10-24 16:29:36', '2023-10-24 16:29:36'),
(1073, 1, 'validation', 'gte.numeric', 'The :attribute must be greater than or equal :value.', '2023-10-24 16:29:36', '2023-10-24 16:29:36'),
(1074, 1, 'validation', 'gte.string', 'The :attribute must be greater than or equal :value characters.', '2023-10-24 16:29:36', '2023-10-24 16:29:36'),
(1075, 1, 'validation', 'image', 'The :attribute must be an image.', '2023-10-24 16:29:36', '2023-10-24 16:29:36'),
(1076, 1, 'validation', 'in', 'The selected :attribute is invalid.', '2023-10-24 16:29:36', '2023-10-24 16:29:36'),
(1077, 1, 'validation', 'in_array', 'The :attribute field does not exist in :other.', '2023-10-24 16:29:36', '2023-10-24 16:29:36'),
(1078, 1, 'validation', 'integer', 'The :attribute must be an integer.', '2023-10-24 16:29:36', '2023-10-24 16:29:36'),
(1079, 1, 'validation', 'ip', 'The :attribute must be a valid IP address.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1080, 1, 'validation', 'ipv4', 'The :attribute must be a valid IPv4 address.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1081, 1, 'validation', 'ipv6', 'The :attribute must be a valid IPv6 address.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1082, 1, 'validation', 'json', 'The :attribute must be a valid JSON string.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1083, 1, 'validation', 'lt.array', 'The :attribute must have less than :value items.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1084, 1, 'validation', 'lt.file', 'The :attribute must be less than :value kilobytes.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1085, 1, 'validation', 'lt.numeric', 'The :attribute must be less than :value.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1086, 1, 'validation', 'lt.string', 'The :attribute must be less than :value characters.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1087, 1, 'validation', 'lte.array', 'The :attribute must not have more than :value items.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1088, 1, 'validation', 'lte.file', 'The :attribute must be less than or equal :value kilobytes.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1089, 1, 'validation', 'lte.numeric', 'The :attribute must be less than or equal :value.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1090, 1, 'validation', 'lte.string', 'The :attribute must be less than or equal :value characters.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1091, 1, 'validation', 'max.array', 'The :attribute may not have more than :max items.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1092, 1, 'validation', 'max.file', 'The :attribute may not be greater than :max kilobytes.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1093, 1, 'validation', 'max.numeric', 'The :attribute may not be greater than :max.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1094, 1, 'validation', 'max.string', 'The :attribute may not be greater than :max characters.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1095, 1, 'validation', 'mimes', 'The :attribute must be a file of type: :values.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1096, 1, 'validation', 'mimetypes', 'The :attribute must be a file of type: :values.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1097, 1, 'validation', 'min.array', 'The :attribute must have at least :min items.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1098, 1, 'validation', 'min.file', 'The :attribute must be at least :min kilobytes.', '2023-10-24 16:29:37', '2023-10-24 16:29:37'),
(1099, 1, 'validation', 'min.numeric', 'The :attribute must be at least :min.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1100, 1, 'validation', 'min.string', 'The :attribute must be at least :min characters.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1101, 1, 'validation', 'multiple_of', 'The :attribute must be a multiple of :value', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1102, 1, 'validation', 'not_in', 'The selected :attribute is invalid.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1103, 1, 'validation', 'not_regex', 'The :attribute format is invalid.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1104, 1, 'validation', 'numeric', 'The :attribute must be a number.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1105, 1, 'validation', 'password', 'The password is incorrect.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1106, 1, 'validation', 'present', 'The :attribute field must be present.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1107, 1, 'validation', 'regex', 'The :attribute format is invalid.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1108, 1, 'validation', 'required', 'The :attribute field is required.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1109, 1, 'validation', 'required_if', 'The :attribute field is required when :other is :value.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1110, 1, 'validation', 'required_unless', 'The :attribute field is required unless :other is in :values.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1111, 1, 'validation', 'required_with', 'The :attribute field is required when :values is present.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1112, 1, 'validation', 'required_with_all', 'The :attribute field is required when :values are present.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1113, 1, 'validation', 'required_without', 'The :attribute field is required when :values is not present.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1114, 1, 'validation', 'required_without_all', 'The :attribute field is required when none of :values are present.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1115, 1, 'validation', 'same', 'The :attribute and :other must match.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1116, 1, 'validation', 'size.array', 'The :attribute must contain :size items.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1117, 1, 'validation', 'size.file', 'The :attribute must be :size kilobytes.', '2023-10-24 16:29:38', '2023-10-24 16:29:38'),
(1118, 1, 'validation', 'size.numeric', 'The :attribute must be :size.', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1119, 1, 'validation', 'size.string', 'The :attribute must be :size characters.', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1120, 1, 'validation', 'starts_with', 'The :attribute must start with one of the following: :values.', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1121, 1, 'validation', 'string', 'The :attribute must be a string.', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1122, 1, 'validation', 'timezone', 'The :attribute must be a valid zone.', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1123, 1, 'validation', 'unique', 'The :attribute has already been taken.', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1124, 1, 'validation', 'uploaded', 'The :attribute failed to upload.', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1125, 1, 'validation', 'url', 'The :attribute format is invalid.', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1126, 1, 'validation', 'uuid', 'The :attribute must be a valid UUID.', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1127, 1, 'translation::errors', 'key_exists', 'The translation key { :key } already exists', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1128, 1, 'translation::errors', 'language_exists', 'The language { :language } already exists', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1129, 1, 'translation::translation', 'add', '+ Add', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1130, 1, 'translation::translation', 'add_language', 'Add a new language', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1131, 1, 'translation::translation', 'add_translation', 'Add a translation', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1132, 1, 'translation::translation', 'advanced_options', 'Toggle advanced options', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1133, 1, 'translation::translation', 'file', 'File', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1134, 1, 'translation::translation', 'group', 'Group', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1135, 1, 'translation::translation', 'group_label', 'Group (Optional)', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1136, 1, 'translation::translation', 'group_placeholder', 'e.g. validation', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1137, 1, 'translation::translation', 'group_single', 'Group / Single', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1138, 1, 'translation::translation', 'invalid_driver', 'Invalid driver', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1139, 1, 'translation::translation', 'invalid_language', 'Invalid language', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1140, 1, 'translation::translation', 'key', 'Key', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1141, 1, 'translation::translation', 'key_label', 'Key', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1142, 1, 'translation::translation', 'key_placeholder', 'e.g. invalid_key', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1143, 1, 'translation::translation', 'keys_synced', 'Missing keys synchronised successfully 🎊', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1144, 1, 'translation::translation', 'language', 'Language', '2023-10-24 16:29:39', '2023-10-24 16:29:39'),
(1145, 1, 'translation::translation', 'language_added', 'New language added successfully 🙌', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1146, 1, 'translation::translation', 'language_exists', 'The :attribute already exists.', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1147, 1, 'translation::translation', 'language_key_added', 'New language key added successfully 👏', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1148, 1, 'translation::translation', 'language_name', 'Name', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1149, 1, 'translation::translation', 'languages', 'Languages', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1150, 1, 'translation::translation', 'locale', 'Locale', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1151, 1, 'translation::translation', 'namespace', 'Namespace', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1152, 1, 'translation::translation', 'namespace_label', 'Namespace (Optional)', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1153, 1, 'translation::translation', 'namespace_placeholder', 'e.g. my_package', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1154, 1, 'translation::translation', 'no_missing_keys', 'There are no missing translation keys in the app 🎉', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1155, 1, 'translation::translation', 'prompt_file', 'Which file will this be stored in?', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1156, 1, 'translation::translation', 'prompt_from_driver', 'Which driver would you like to take translations from?', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1157, 1, 'translation::translation', 'prompt_key', 'What is the key for this translation?', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1158, 1, 'translation::translation', 'prompt_language', 'Enter the language code you would like to add (e.g. en)', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1159, 1, 'translation::translation', 'prompt_language_for_key', 'Enter the language for the key (e.g. en)', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1160, 1, 'translation::translation', 'prompt_language_if_any', 'Which language? (leave blank for all)', '2023-10-24 16:29:40', '2023-10-24 16:29:40'),
(1161, 1, 'translation::translation', 'prompt_to_driver', 'Which driver would you like to add the translations to?', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1162, 1, 'translation::translation', 'prompt_type', 'Is this a json or array key?', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1163, 1, 'translation::translation', 'prompt_value', 'What is the value for this translation', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1164, 1, 'translation::translation', 'save', 'Save', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1165, 1, 'translation::translation', 'search', 'Search all translations', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1166, 1, 'translation::translation', 'single', 'Single', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1167, 1, 'translation::translation', 'synced', 'Translations have been synced 😎', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1168, 1, 'translation::translation', 'syncing', 'Syncing translations ⏳', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1169, 1, 'translation::translation', 'translation_added', 'New translation added successfull 🙌', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1170, 1, 'translation::translation', 'translations', 'Translation', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1171, 1, 'translation::translation', 'type', 'Type', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1172, 1, 'translation::translation', 'type_error', 'Translation type must be json or array', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1173, 1, 'translation::translation', 'uh_oh', 'Something\'s not quite right', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1174, 1, 'translation::translation', 'value', 'Value', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1175, 1, 'translation::translation', 'value_label', 'Value', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1176, 1, 'translation::translation', 'value_placeholder', 'e.g. Keys must be a single string', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1177, 1, 'single', 'Dashboard', '', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1178, 1, 'single', 'Employees', '', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1179, 1, 'single', 'Regular', '', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1180, 1, 'single', 'Trainee', '', '2023-10-24 16:29:41', '2023-10-24 16:29:41'),
(1181, 1, 'single', 'Attendances', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1182, 1, 'single', 'Online', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1183, 1, 'single', 'Offline', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1184, 1, 'single', 'Leaves of Absence', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1185, 1, 'single', 'Approved', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1186, 1, 'single', 'Pending', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1187, 1, 'single', 'Newest Employees', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1188, 1, 'single', 'Name', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1189, 1, 'single', 'Position', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1190, 1, 'single', 'Start Date', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1191, 1, 'single', 'Recent Attendances', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1192, 1, 'single', 'Type', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1193, 1, 'single', 'Time', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1194, 1, 'single', 'Recent Leaves of Absence', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1195, 1, 'single', 'Date', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1196, 1, 'single', 'ID', '', '2023-10-24 16:29:42', '2023-10-24 16:29:42'),
(1197, 1, 'single', 'Employee ', '', '2023-10-24 16:29:42', '2023-10-24 16:29:46'),
(1198, 1, 'single', 'Company', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1199, 1, 'single', 'Department', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1200, 1, 'single', 'Status ', '', '2023-10-24 16:29:43', '2023-10-24 16:29:45'),
(1201, 1, 'single', 'Add', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1202, 1, 'single', 'Employee Profile', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1203, 1, 'single', 'Personal Information', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1204, 1, 'single', 'Designation', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1205, 1, 'single', 'Return ', '', '2023-10-24 16:29:43', '2023-10-24 16:29:51'),
(1206, 1, 'single', 'First Name', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1207, 1, 'single', 'Middle Name', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1208, 1, 'single', 'Last Name', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1209, 1, 'single', 'Gender', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1210, 1, 'single', 'Civil Status', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1211, 1, 'single', 'Height', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1212, 1, 'single', 'Weight', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1213, 1, 'single', 'Email Address (Personal)', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1214, 1, 'single', 'Mobile Number', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1215, 1, 'single', 'Age', '', '2023-10-24 16:29:43', '2023-10-24 16:29:43'),
(1216, 1, 'single', 'Date of Birth', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1217, 1, 'single', 'National ID', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1218, 1, 'single', 'Place of Birth', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1219, 1, 'single', 'Home Address', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1220, 1, 'single', 'Upload Profile photo', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1221, 1, 'single', 'Employee Details', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1222, 1, 'single', 'Job Title', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1223, 1, 'single', 'ID Number', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1224, 1, 'single', 'Email Address (Company)', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1225, 1, 'single', 'Leave Group', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1226, 1, 'single', 'Employment Information', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1227, 1, 'single', 'Employment Type', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1228, 1, 'single', 'Employment Status', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1229, 1, 'single', 'Official Start Date', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1230, 1, 'single', 'Date Regularized', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1231, 1, 'single', 'Save', '', '2023-10-24 16:29:44', '2023-10-24 16:29:44'),
(1232, 1, 'single', 'Edit Employee Profile', '', '2023-10-24 16:29:45', '2023-10-24 16:29:45'),
(1233, 1, 'single', 'Update', '', '2023-10-24 16:29:45', '2023-10-24 16:29:45'),
(1234, 1, 'single', 'Cancel', '', '2023-10-24 16:29:45', '2023-10-24 16:29:45'),
(1235, 1, 'single', 'No', '', '2023-10-24 16:29:45', '2023-10-24 16:29:45'),
(1236, 1, 'single', 'Yes', '', '2023-10-24 16:29:45', '2023-10-24 16:29:45'),
(1237, 1, 'single', 'Time In', '', '2023-10-24 16:29:45', '2023-10-24 16:29:49'),
(1238, 1, 'single', 'Time Out', '', '2023-10-24 16:29:45', '2023-10-24 16:29:49'),
(1239, 1, 'single', 'Total hours', '', '2023-10-24 16:29:45', '2023-10-24 16:29:57'),
(1240, 1, 'single', 'Status (In/Out)', '', '2023-10-24 16:29:45', '2023-10-24 16:29:45'),
(1241, 1, 'single', 'Comment', '', '2023-10-24 16:29:45', '2023-10-24 16:29:45'),
(1242, 1, 'single', 'Clock In/Out', '', '2023-10-24 16:29:45', '2023-10-24 16:29:45'),
(1243, 1, 'single', 'Time (Start-Off)', '', '2023-10-24 16:29:45', '2023-10-24 16:29:45'),
(1244, 1, 'single', 'Hours', '', '2023-10-24 16:29:45', '2023-10-24 16:29:45'),
(1245, 1, 'single', 'Rest days', '', '2023-10-24 16:29:45', '2023-10-24 16:29:57'),
(1246, 1, 'single', 'From (Date)', '', '2023-10-24 16:29:45', '2023-10-24 16:29:52'),
(1247, 1, 'single', 'To (Date)', '', '2023-10-24 16:29:45', '2023-10-24 16:29:52'),
(1248, 1, 'single', 'Actions', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1249, 1, 'single', 'Schedules', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1250, 1, 'single', 'Present', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1251, 1, 'single', 'Previous', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1252, 1, 'single', 'Start time', '', '2023-10-24 16:29:46', '2023-10-24 16:29:57'),
(1253, 1, 'single', 'Off time', '', '2023-10-24 16:29:46', '2023-10-24 16:29:57'),
(1254, 1, 'single', 'Choose Rest days', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1255, 1, 'single', 'Sunday', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1256, 1, 'single', 'Monday', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1257, 1, 'single', 'Tuesday', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1258, 1, 'single', 'Wednesday', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1259, 1, 'single', 'Thursday', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1260, 1, 'single', 'Friday', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1261, 1, 'single', 'Saturday', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1262, 1, 'single', 'Add New Schedule', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1263, 1, 'single', 'Description', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1264, 1, 'single', 'Leave From', '', '2023-10-24 16:29:46', '2023-10-24 16:29:52'),
(1265, 1, 'single', 'Leave To', '', '2023-10-24 16:29:46', '2023-10-24 16:29:52'),
(1266, 1, 'single', 'Return Date', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1267, 1, 'single', 'Reports', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1268, 1, 'single', 'Report name', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1269, 1, 'single', 'Last Viewed', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1270, 1, 'single', 'Employee List Report', '', '2023-10-24 16:29:46', '2023-10-24 16:29:46'),
(1271, 1, 'single', 'Employee Attendance Report', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1272, 1, 'single', 'Employee Leave Report', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1273, 1, 'single', 'Employee Schedule Report', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1274, 1, 'single', 'Company Profile', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1275, 1, 'single', 'Employee Birthdays', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1276, 1, 'single', 'User Accounts Report', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1277, 1, 'single', 'Email', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1278, 1, 'single', 'Role', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1279, 1, 'single', 'Users', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1280, 1, 'single', 'Roles', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1281, 1, 'single', 'Enabled', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1282, 1, 'single', 'Disabled', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1283, 1, 'single', 'General Settings', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1284, 1, 'single', 'System', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1285, 1, 'single', 'Localization', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1286, 1, 'single', 'Country', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1287, 1, 'single', 'Timezone', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1288, 1, 'single', 'Optional Clock-In Comment', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1289, 1, 'single', 'Web Clock-In/Out IP Restriction', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1290, 1, 'single', 'Enter allowed IP address. If more than one add comma after each IP address.', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1291, 1, 'single', 'About', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1292, 1, 'single', 'Attributions', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1293, 1, 'single', 'Activation', '', '2023-10-24 16:29:47', '2023-10-24 16:29:47'),
(1294, 1, 'single', 'Quick Access', '', '2023-10-24 16:29:48', '2023-10-24 16:29:48'),
(1295, 1, 'single', 'New Employee', '', '2023-10-24 16:29:48', '2023-10-24 16:29:48'),
(1296, 1, 'single', 'Leave Type', '', '2023-10-24 16:29:48', '2023-10-24 16:29:48'),
(1297, 1, 'single', 'Switch to My Account', '', '2023-10-24 16:29:48', '2023-10-24 16:29:48'),
(1298, 1, 'single', 'Logout', '', '2023-10-24 16:29:48', '2023-10-24 16:29:48'),
(1299, 1, 'single', 'Menu', '', '2023-10-24 16:29:48', '2023-10-24 16:29:48'),
(1300, 1, 'single', 'Settings', '', '2023-10-24 16:29:48', '2023-10-24 16:29:48'),
(1301, 1, 'single', 'Update Account', '', '2023-10-24 16:29:48', '2023-10-24 16:29:48'),
(1302, 1, 'single', 'Change Password', '', '2023-10-24 16:29:48', '2023-10-24 16:29:48'),
(1303, 1, 'single', 'Current Password', '', '2023-10-24 16:29:48', '2023-10-24 16:29:48'),
(1304, 1, 'single', 'New Password', '', '2023-10-24 16:29:48', '2023-10-24 16:29:48'),
(1305, 1, 'single', 'Confirm Password', '', '2023-10-24 16:29:48', '2023-10-24 16:29:48'),
(1306, 1, 'single', 'ENTER YOUR ID', '', '2023-10-24 16:29:49', '2023-10-24 16:29:56'),
(1307, 1, 'single', 'Confirm', '', '2023-10-24 16:29:49', '2023-10-24 16:29:49'),
(1308, 1, 'single', 'Enter comment', '', '2023-10-24 16:29:49', '2023-10-24 16:29:49'),
(1309, 1, 'single', 'Welcome!', '', '2023-10-24 16:29:49', '2023-10-24 16:29:49'),
(1310, 1, 'single', 'Add Company', '', '2023-10-24 16:29:49', '2023-10-24 16:29:49'),
(1311, 1, 'single', 'Company Name', '', '2023-10-24 16:29:49', '2023-10-24 16:29:49'),
(1312, 1, 'single', 'Export', '', '2023-10-24 16:29:50', '2023-10-24 16:29:56'),
(1313, 1, 'single', 'Import', '', '2023-10-24 16:29:50', '2023-10-24 16:29:50'),
(1314, 1, 'single', 'Department Name', '', '2023-10-24 16:29:50', '2023-10-24 16:29:50'),
(1315, 1, 'single', 'Add Department', '', '2023-10-24 16:29:50', '2023-10-24 16:29:50'),
(1316, 1, 'single', 'Add Job title', '', '2023-10-24 16:29:50', '2023-10-24 16:29:55'),
(1317, 1, 'single', 'Add Leave Types', '', '2023-10-24 16:29:50', '2023-10-24 16:29:50'),
(1318, 1, 'single', 'Leave Name', '', '2023-10-24 16:29:50', '2023-10-24 16:29:50'),
(1319, 1, 'single', 'Credits', '', '2023-10-24 16:29:50', '2023-10-24 16:29:50'),
(1320, 1, 'single', 'Choose Term', '', '2023-10-24 16:29:50', '2023-10-24 16:29:50'),
(1321, 1, 'single', 'Monthly', '', '2023-10-24 16:29:50', '2023-10-24 16:29:50'),
(1322, 1, 'single', 'Yearly', '', '2023-10-24 16:29:50', '2023-10-24 16:29:50'),
(1323, 1, 'single', 'Term', '', '2023-10-24 16:29:51', '2023-10-24 16:29:51'),
(1324, 1, 'single', 'Leave groups', '', '2023-10-24 16:29:51', '2023-10-24 16:29:56'),
(1325, 1, 'single', 'Privilege', '', '2023-10-24 16:29:51', '2023-10-24 16:29:51'),
(1326, 1, 'single', 'Leave Group Name', '', '2023-10-24 16:29:51', '2023-10-24 16:29:51'),
(1327, 1, 'single', 'Leave Privileges', '', '2023-10-24 16:29:51', '2023-10-24 16:29:51'),
(1328, 1, 'single', 'Attendance (Current Month)', '', '2023-10-24 16:29:51', '2023-10-24 16:29:51'),
(1329, 1, 'single', 'Late Arrivals', '', '2023-10-24 16:29:51', '2023-10-24 16:29:51'),
(1330, 1, 'single', 'Early Departures', '', '2023-10-24 16:29:51', '2023-10-24 16:29:51'),
(1331, 1, 'single', 'Present Schedule', '', '2023-10-24 16:29:51', '2023-10-24 16:29:51'),
(1332, 1, 'single', 'Previous Schedules', '', '2023-10-24 16:29:51', '2023-10-24 16:29:51'),
(1333, 1, 'single', 'From Date / Until', '', '2023-10-24 16:29:51', '2023-10-24 16:29:51'),
(1334, 1, 'single', 'Current Month', '', '2023-10-24 16:29:51', '2023-10-24 16:29:51'),
(1335, 1, 'single', 'My Attendance', '', '2023-10-24 16:29:51', '2023-10-24 16:29:51'),
(1336, 1, 'single', 'Date Range', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1337, 1, 'single', 'End Date', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1338, 1, 'single', 'Filter', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1339, 1, 'single', 'My Schedule', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1340, 1, 'single', 'Rest Day(s)', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1341, 1, 'single', 'Past Schedule', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1342, 1, 'single', 'My Leave', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1343, 1, 'single', 'Request Leave', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1344, 1, 'single', 'Reason', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1345, 1, 'single', 'Send Request', '', '2023-10-24 16:29:52', '2023-10-24 16:29:56'),
(1346, 1, 'single', 'My Profile', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1347, 1, 'single', 'Update User', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1348, 1, 'single', 'Update Personal Account', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1349, 1, 'single', 'Update Personal Password', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1350, 1, 'single', 'Edit', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1351, 1, 'single', 'Profile', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1352, 1, 'single', 'Edit My Profile', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1353, 1, 'single', 'View', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1354, 1, 'single', 'Edit Leave request', '', '2023-10-24 16:29:52', '2023-10-24 16:29:55'),
(1355, 1, 'single', 'Delete', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1356, 1, 'single', 'Edit Attendance', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1357, 1, 'single', 'Edit Schedule', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1358, 1, 'single', 'Edit Leave', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1359, 1, 'single', 'Manager Privilege', '', '2023-10-24 16:29:52', '2023-10-24 16:29:52'),
(1360, 1, 'single', 'Add Comment (Optional)', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1361, 1, 'single', 'Export to CSV', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1362, 1, 'single', 'Employee Name', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1363, 1, 'single', 'Download', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1364, 1, 'single', 'Company Population', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1365, 1, 'single', 'Department Population', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1366, 1, 'single', 'Gender Demographics', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1367, 1, 'single', 'Age Demographics', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1368, 1, 'single', 'Civil Status Demographics', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1369, 1, 'single', 'Employees Hired by Year', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1370, 1, 'single', 'Birthday', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1371, 1, 'single', 'Contact Number', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1372, 1, 'single', 'Account Type', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1373, 1, 'single', 'Choose Account type', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1374, 1, 'single', 'Admin', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1375, 1, 'single', 'Password', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1376, 1, 'single', 'Register', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1377, 1, 'single', 'New User', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1378, 1, 'single', 'Edit User', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1379, 1, 'single', 'Confirm New Password', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1380, 1, 'single', 'User Roles ', '', '2023-10-24 16:29:53', '2023-10-24 16:29:55'),
(1381, 1, 'single', 'Role Name', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1382, 1, 'single', 'Edit Role', '', '2023-10-24 16:29:53', '2023-10-24 16:29:53'),
(1383, 1, 'single', 'New Role', '', '2023-10-24 16:29:54', '2023-10-24 16:29:54'),
(1384, 1, 'single', 'Open Dashboard page', '', '2023-10-24 16:29:54', '2023-10-24 16:29:54'),
(1385, 1, 'single', 'Open Employees page', '', '2023-10-24 16:29:54', '2023-10-24 16:29:54'),
(1386, 1, 'single', 'View Employee profile', '', '2023-10-24 16:29:54', '2023-10-24 16:29:54'),
(1387, 1, 'single', 'Add Employee', '', '2023-10-24 16:29:54', '2023-10-24 16:29:54'),
(1388, 1, 'single', 'Edit Employee', '', '2023-10-24 16:29:54', '2023-10-24 16:29:54'),
(1389, 1, 'single', 'Delete Employee', '', '2023-10-24 16:29:54', '2023-10-24 16:29:54'),
(1390, 1, 'single', 'Archive Employee', '', '2023-10-24 16:29:54', '2023-10-24 16:29:54'),
(1391, 1, 'single', 'Open Attendances page', '', '2023-10-24 16:29:54', '2023-10-24 16:29:54'),
(1392, 1, 'single', 'Delete Attendance', '', '2023-10-24 16:29:54', '2023-10-24 16:29:54'),
(1393, 1, 'single', 'Open Schedules page', '', '2023-10-24 16:29:54', '2023-10-24 16:29:54'),
(1394, 1, 'single', 'Add Schedule', '', '2023-10-24 16:29:54', '2023-10-24 16:29:54'),
(1395, 1, 'single', 'Delete Schedule', '', '2023-10-24 16:29:54', '2023-10-24 16:29:54'),
(1396, 1, 'single', 'Archive Schedule', '', '2023-10-24 16:29:54', '2023-10-24 16:29:54'),
(1397, 1, 'single', 'Leave', '', '2023-10-24 16:29:54', '2023-10-24 16:29:54'),
(1398, 1, 'single', 'Open Leave page', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1399, 1, 'single', 'Delete Leave request', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1400, 1, 'single', 'Open Settings page', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1401, 1, 'single', 'Update Settings', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1402, 1, 'single', 'Open Reports page', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1403, 1, 'single', 'Open Users page', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1404, 1, 'single', 'Add User', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1405, 1, 'single', 'Delete User', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1406, 1, 'single', 'Open User roles page', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1407, 1, 'single', 'Add Role', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1408, 1, 'single', 'Set Permission', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1409, 1, 'single', 'Delete Role', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1410, 1, 'single', 'Companies', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1411, 1, 'single', 'Open Companies page', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1412, 1, 'single', 'Delete Company', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1413, 1, 'single', 'Departments', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1414, 1, 'single', 'Open Departments page', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1415, 1, 'single', 'Delete Department', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1416, 1, 'single', 'Open Job titles page', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1417, 1, 'single', 'Delete Job title', '', '2023-10-24 16:29:55', '2023-10-24 16:29:55'),
(1418, 1, 'single', 'Leave types', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1419, 1, 'single', 'Open Leave types page', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1420, 1, 'single', 'Add Leave type', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1421, 1, 'single', 'Delete Leave type', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1422, 1, 'single', 'Open Leave groups page', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1423, 1, 'single', 'Add Leave group', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1424, 1, 'single', 'Edit Leave Group', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1425, 1, 'single', 'Delete Leave group', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1426, 1, 'single', 'Import Company', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1427, 1, 'single', 'Import CSV file', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1428, 1, 'single', 'Submit', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1429, 1, 'single', 'Import Departments', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1430, 1, 'single', 'Import Leave Types', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1431, 1, 'single', 'Import Job Titles', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1432, 1, 'single', 'Close', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1433, 1, 'single', 'Add New Leave', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1434, 1, 'single', 'Select your country to enable country specific features', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1435, 1, 'single', 'Time zone', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1436, 1, 'single', 'Select your region, and city to sync time for attendance', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1437, 1, 'single', 'Time In comments', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1438, 1, 'single', 'Turn on to require comments when clocking in', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1439, 1, 'single', 'Web clock IP restriction', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1440, 1, 'single', 'Turn on to block clocking from unknown device or IP address', '', '2023-10-24 16:29:56', '2023-10-24 16:29:56'),
(1441, 1, 'single', 'Enter IP addresses, if more than one add comma after each IP address', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1442, 1, 'single', 'Add New Role', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1443, 1, 'single', 'Edit Permissions', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1444, 1, 'single', 'There were some errors with your submission', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1445, 1, 'single', 'Organizational Profile', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1446, 1, 'single', 'Edit Schedules', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1447, 1, 'single', 'From', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1448, 1, 'single', 'To', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1449, 1, 'single', 'Time In Date', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1450, 1, 'single', 'Time Out Date', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1451, 1, 'single', 'Mobile no.', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1452, 1, 'single', 'ID no.', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1453, 1, 'single', 'Male', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1454, 1, 'single', 'Female', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1455, 1, 'single', 'Single', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1456, 1, 'single', 'Married', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1457, 1, 'single', 'Annulled', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1458, 1, 'single', 'Widowed', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1459, 1, 'single', 'Legally Separated', '', '2023-10-24 16:29:57', '2023-10-24 16:29:57'),
(1460, 1, 'single', 'Active ', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1461, 1, 'single', 'Archived', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1462, 1, 'single', 'In Time', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1463, 1, 'single', 'Late Arrival', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1464, 1, 'single', 'On Time', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1465, 1, 'single', 'Early Departure', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1466, 1, 'single', 'Permission Denied', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1467, 1, 'single', 'Sorry, you don\'t have permission to access the page.', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1468, 1, 'single', 'Oops! You don\'t have account yet!', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1469, 1, 'single', 'Go Home', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1470, 1, 'single', 'Oops! Your account is not enabled. ', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1471, 1, 'single', 'Sorry, the page you are looking for could not be found.', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1472, 1, 'single', 'Success!', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1473, 1, 'single', 'Time In at', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1474, 1, 'single', 'Time Out at', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1475, 1, 'single', 'Time format', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1476, 1, 'single', 'Select your preferred time format', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1477, 1, 'single', 'Sign in to your account', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1478, 1, 'single', 'Enter your e-mail address', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1479, 1, 'single', 'Enter your password', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1480, 1, 'single', 'Remember me', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1481, 1, 'single', 'Sign in', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1482, 1, 'single', 'RFID Clock In and Clock Out', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1483, 1, 'single', 'Turn on to enable features for RFID Web Clock In and Clock Out', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1484, 1, 'single', 'Toggle Off/On', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1485, 1, 'single', 'Optional Features', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1486, 1, 'single', 'Safeguarding', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1487, 1, 'single', 'View web clock', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1488, 1, 'single', 'Manual entry', '', '2023-10-24 16:29:58', '2023-10-24 16:29:58'),
(1489, 1, 'single', 'The employee already clock in today at', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1490, 1, 'single', 'Add Employee Attendance', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1491, 1, 'single', 'Add New Leave Group', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1492, 1, 'single', 'Attendance is successfully deleted!', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1493, 1, 'single', 'Update was successful!', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1494, 1, 'single', 'Invalid request!', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1495, 1, 'single', 'Invalid request! Your device it not registered', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1496, 1, 'single', 'There is no employee with this ID!', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1497, 1, 'single', 'Success! Attendance data is saved!', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1498, 1, 'single', 'The ID number is already used', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1499, 1, 'single', 'Successful registration!', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1500, 1, 'single', 'Invalid request! Please select an employee or choose a date range', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1501, 1, 'single', 'Invalid request! Please select an employee', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1502, 1, 'single', 'A company is successfully deleted!', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1503, 1, 'single', 'A department is successfully deleted!', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1504, 1, 'single', 'A job title is successfully deleted!', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1505, 1, 'single', 'A leave type is successfully deleted!', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1506, 1, 'single', 'A leave group is successfully deleted!', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1507, 1, 'single', 'Invalid request! Please upload a csv file ', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1508, 1, 'single', 'A leave request is successfully deleted!', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1509, 1, 'single', 'The employee is successfully removed!', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1510, 1, 'single', 'The employee is successfully archived!', '', '2023-10-24 16:29:59', '2023-10-24 16:29:59'),
(1511, 1, 'single', 'Wrong credentials!', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1512, 1, 'single', 'A user role is successfully deleted!', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1513, 1, 'single', 'Invalid request! The employee has an active schedule please archive the active schedule', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1514, 1, 'single', 'A schedule is successfully deleted!', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1515, 1, 'single', 'A schedule is successfully archived!', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1516, 1, 'single', 'Are you sure? This user is registered!', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1517, 1, 'single', 'A user account is successfully deleted!', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1518, 1, 'single', 'The new passwords must match!', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1519, 1, 'single', 'Password is successfully updated!', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1520, 1, 'single', 'A leave request is submitted!', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1521, 1, 'single', 'A leave is successfully deleted!', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1522, 1, 'single', 'Invalid request! Please enter the ID', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1523, 1, 'single', 'Invalid request! Please enter a comment', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1524, 1, 'single', 'Invalid request! Wrong ID format', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1525, 1, 'single', 'Are you sure? You were clocked-in today at', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1526, 1, 'single', 'Invalid request! You are not allowed to clock in twice or more in a day', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1527, 1, 'single', 'Invalid request! You are not clocked-in', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1528, 1, 'single', 'Are you sure? You were clocked-out today at', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1529, 1, 'single', 'Message', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1530, 1, 'single', 'Are you sure? ', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1531, 1, 'single', 'Be careful, this action cannot be undone! Employee’s attendance, schedules, leave, and user account will be removed', '', '2023-10-24 16:30:00', '2023-10-24 16:30:00'),
(1532, 3, 'auth', 'faild', 'These credentials do not match our records.', '2023-10-24 16:30:01', '2023-10-24 16:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_youtube` text NOT NULL,
  `video_caption` text DEFAULT NULL,
  `video_order` smallint(6) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_youtube`, `video_caption`, `video_order`, `created_at`, `updated_at`) VALUES
(1, 'UreGlSvnb1A', 'Caption 2', 2, '2020-11-22 21:08:21', '2024-01-12 13:45:53'),
(2, '2LqTVzTmY_0', 'Caption 1', 1, '2020-11-22 21:08:36', '2024-01-12 13:45:11'),
(3, 'UreGlSvnb1A', 'Caption 3', 3, '2020-11-22 21:13:58', '2024-01-12 13:46:14'),
(4, 'UreGlSvnb1A', 'Caption 4', 4, '2020-11-22 21:14:42', '2024-01-12 13:46:25'),
(5, 'UreGlSvnb1A', 'Caption 5', 5, '2020-11-22 21:15:02', '2024-01-12 13:46:36'),
(6, 'UreGlSvnb1A', 'Caption 6', 6, '2020-11-22 21:15:23', '2024-01-12 13:46:49');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_items`
--

CREATE TABLE `why_choose_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `description` text DEFAULT NULL,
  `photo` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_items`
--

INSERT INTO `why_choose_items` (`id`, `name`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Quick Support', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'why-choose-1.svg', '2020-11-22 23:10:36', '2023-12-30 08:36:59'),
(2, 'Quality Service', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'why-choose-2.svg', '2020-11-22 23:12:59', '2023-12-30 08:37:12'),
(3, 'Modern Technology', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'why-choose-3.svg', '2020-11-22 23:13:16', '2023-12-30 08:37:29'),
(4, 'Best Communication', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'why-choose-4.svg', '2020-11-22 23:13:32', '2023-12-30 08:37:44'),
(5, '100% Satisfaction', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'why-choose-5.svg', '2020-11-22 23:13:47', '2023-12-30 08:37:58'),
(6, 'Security Protection', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.', 'why-choose-6.svg', '2020-11-22 23:14:10', '2023-12-30 08:38:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `ai_chats`
--
ALTER TABLE `ai_chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authorizemores`
--
ALTER TABLE `authorizemores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board_directors`
--
ALTER TABLE `board_directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dynamic_pages`
--
ALTER TABLE `dynamic_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folder_id` (`folder_id`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folders_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `footer_columns`
--
ALTER TABLE `footer_columns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management_categories`
--
ALTER TABLE `management_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_about_items`
--
ALTER TABLE `page_about_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_blog_items`
--
ALTER TABLE `page_blog_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_board_items`
--
ALTER TABLE `page_board_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_branch_items`
--
ALTER TABLE `page_branch_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_career_items`
--
ALTER TABLE `page_career_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_contact_items`
--
ALTER TABLE `page_contact_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_developer_items`
--
ALTER TABLE `page_developer_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_faq_items`
--
ALTER TABLE `page_faq_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_other_items`
--
ALTER TABLE `page_other_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_photo_gallery_items`
--
ALTER TABLE `page_photo_gallery_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_privacy_items`
--
ALTER TABLE `page_privacy_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_project_items`
--
ALTER TABLE `page_project_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_senior_items`
--
ALTER TABLE `page_senior_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_service_items`
--
ALTER TABLE `page_service_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_shop_items`
--
ALTER TABLE `page_shop_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_team_items`
--
ALTER TABLE `page_team_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_term_items`
--
ALTER TABLE `page_term_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_video_gallery_items`
--
ALTER TABLE `page_video_gallery_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_photos`
--
ALTER TABLE `project_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_pages`
--
ALTER TABLE `role_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senior_management`
--
ALTER TABLE `senior_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senior_managements`
--
ALTER TABLE `senior_managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `setup_guides`
--
ALTER TABLE `setup_guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media_items`
--
ALTER TABLE `social_media_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_language_id_foreign` (`language_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose_items`
--
ALTER TABLE `why_choose_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ai_chats`
--
ALTER TABLE `ai_chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `authorizemores`
--
ALTER TABLE `authorizemores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `board_directors`
--
ALTER TABLE `board_directors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dynamic_pages`
--
ALTER TABLE `dynamic_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `footer_columns`
--
ALTER TABLE `footer_columns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `management_categories`
--
ALTER TABLE `management_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `page_about_items`
--
ALTER TABLE `page_about_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_blog_items`
--
ALTER TABLE `page_blog_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_board_items`
--
ALTER TABLE `page_board_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_branch_items`
--
ALTER TABLE `page_branch_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_career_items`
--
ALTER TABLE `page_career_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_contact_items`
--
ALTER TABLE `page_contact_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_developer_items`
--
ALTER TABLE `page_developer_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_faq_items`
--
ALTER TABLE `page_faq_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_other_items`
--
ALTER TABLE `page_other_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `page_photo_gallery_items`
--
ALTER TABLE `page_photo_gallery_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_privacy_items`
--
ALTER TABLE `page_privacy_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_project_items`
--
ALTER TABLE `page_project_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_senior_items`
--
ALTER TABLE `page_senior_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_service_items`
--
ALTER TABLE `page_service_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_shop_items`
--
ALTER TABLE `page_shop_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_team_items`
--
ALTER TABLE `page_team_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_term_items`
--
ALTER TABLE `page_term_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_video_gallery_items`
--
ALTER TABLE `page_video_gallery_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project_photos`
--
ALTER TABLE `project_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role_pages`
--
ALTER TABLE `role_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `senior_management`
--
ALTER TABLE `senior_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `senior_managements`
--
ALTER TABLE `senior_managements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `setup_guides`
--
ALTER TABLE `setup_guides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social_media_items`
--
ALTER TABLE `social_media_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1533;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `why_choose_items`
--
ALTER TABLE `why_choose_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`folder_id`) REFERENCES `folders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `folders`
--
ALTER TABLE `folders`
  ADD CONSTRAINT `folders_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `folders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
