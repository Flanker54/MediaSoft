CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '""',
  `description` mediumtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usr_id` (`user_id`);
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


INSERT INTO `user` (`username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`, `last_login_at`) VALUES
( 'anononimous', 'anon@anon.ru', '1', '1', 1494796687, '', 0, '127.0.0.1', 40552, 40552, 0, 0);
