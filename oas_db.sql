SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `inmates` (
  `id` int(11) NOT NULL,
  `inmate` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `inmates` (`id`, `inmate`, `date`, `time`) VALUES
(1, 'Thandolwenkosi Munenge\r\n', '2022-08-19', '20:45:57'),
(2, 'Elon Musk\r\n', '2022-08-19', '20:49:30');

ALTER TABLE `inmates`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `inmates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;