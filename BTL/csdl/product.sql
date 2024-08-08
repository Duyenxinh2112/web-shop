-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2023 lúc 05:05 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name`, `price`, `img`, `img1`, `img2`, `img3`, `description`, `size`) VALUES
('nam10', 'ÁO KHOÁC BLAZER NAM', '407', 'nam10.jpg', 'nam10.1.jpg', 'nam10.2.jpg', 'nam10.3.jpg', 'Áo khoác blazer cổ 2 ve khoét chữ K. Tay dài. Vai đệm. 2 nắp túi bên tà và 1 viền túi giả bên ngực. Có hàng 6 khuy phía trước. Sau lưng có đai kèm khuy.\r\n', 'S'),
('nam11', 'ÁO KHOÁC DẠ DÁNG DÀI', '868', 'nam11.jpg', 'nam11.1.jpg', 'nam11.2.jpg', 'nam11.3.jpg', 'Áo khoác dạ cổ 2 ve khoét chữ K. Tay dài có hàng khuy trang trí. 2 túi chéo 2 bên. Dáng áo suông dài qua mông. Cài bằng hàng khuy phía trước.', 'L'),
('nam12', 'ÁO KHOÁC NAM CỔ ĐỨC KHÔNG CHÂN', '245', 'nam12.jpg', 'nam12.1.jpg', 'nam12.2.jpg', 'nam12.3.jpg', 'Áo khoác cổ đức không chân. Tay dài. Gấu áo và tay bo chun co giãn. Có 2 túi chéo 2 bên. Cài bằng hàng khuy phía trước. Vải họa tiết bắt mắt.', 'L'),
('nam13', 'ÁO KHOÁC NAM', '347', 'nam13.jpg', 'nam13.1.jpg', 'nam13.2.jpg', 'nam13.3.jpg', 'Áo khoác dạ cổ 2 ve khoét chữ K. Tay dài có hàng khuy trang trí. 2 túi chéo 2 bên. Dáng áo suông dài qua mông. Cài bằng hàng khuy phía trước.', 'L'),
('nam14', 'ÁO BOMBER NAM OVERSIZE', '947', 'nam14.jpg', 'nam14.1.jpg', 'nam14.2.jpg', 'nam14.3.jpg', 'Áo khoác thun nam dáng bomber (không mũ). Cổ viền thun gân co giãn. Tay áo dài bo gấu. Có 2 túi chéo. Cài bằng dây kéo khóa phía trước.', 'M'),
('nam15', 'ÁO KHOÁC NAM DA', '990', 'nam15.jpg', 'nam15.1.jpg', 'nam15.2.jpg', 'nam15.3.jpg', 'Áo khoác da dáng suông dài tay, cổ cao bo bằng vải gân co giãn. Gấu áo bo thun co giãn. Cài phía trước bằng khóa kéo cùng màu.', 'L'),
('nam16', 'ÁO KHOÁC BOMBER VẢI KẺ', '507', 'nam16.jpg', 'nam16.1.jpg', 'nam16.2.jpg', 'nam16.3.jpg', 'Dáng áo xuông, phom dáng thoải mái. Bạn có thể phối cùng áo Hoodie, áo thun dáng rộng quần jeans, jogger... để có set đồ năng động và trẻ trung nhất!', 'L'),
('nam2', 'ÁO POLO PHỐI MÀU VẢI SỢI MODAL', '407', 'nam2.jpg', 'nam2.1.jpg', 'nam2.2.jpg', 'nam2.3.jpg', 'Chất liệu vải sợi modal là vật liệu vải sinh học được làm từ cellulose tái chế từ cây sồi. Với chiết xuất hoàn toàn tự nhiên, có sự thuần khiết, bền bỉ và đặc biệt thân thiện với sức khỏe của người dùng, dễ dàng phân hủy trong môi trường tự nhiên. Kết cấu sợi vải chắc chắn, thoáng khí, ít vón cục sau khi bị ma sát. Sợi bóng, bề mặt mịn, mát hơn so với các chất liệu tương tự... Bền màu sau nhiều lần giặt và thời gian sử dụng lâu dài.', 'M'),
('nam3', 'ÁO POLO PHỐI VIỀN CỔ', '395', 'nam3.jpg', 'nam3.1.jpg', 'nam3.2.jpg', 'nam3.3.jpg', 'Áo polo màu trơn bắt mắt cùng họa tiết 2 đường sọc cùng màu từ cầu vai xuống giữa áo và đường viền dọc theo đường cổ áo tạo cảm giác thu hút cho người đối diện.', 'XL'),
('nam4', 'Áo polo cổ tàu trụ', '345', 'nam4.jpg', 'nam4.1.jpg', 'nam4.2.jpg', 'nam4.3.jpg', 'Với chất liệu thoáng mát và thấm mồ hôi giúp người mặc có thể thoải mái vận động mà không lo nóng. Họa tiết kẻ ngang trẻ trung cùng cổ tàu trụ sẽ là điểm nhấn thu hút ánh nhìn của mọi người. Có thể mặc đi làm, đi học hay đi chơi đều rất phù hợp.', 'L'),
('nam5', 'Áo polo nam cổ bo', '347', 'nam5.jpg', 'nam5.1.jpg', 'nam5.2.jpg', 'nam5.3.jpg', 'Chất liệu vải pique dệt - cotton sợi dệt mặt lưới, tạo ra được độ mềm và thoáng cho những người ưa vận động hay chơi thể thao, độ thấm hút mồ hôi tốt và có khả năng co giãn 4 chiều, đem đến cảm giác vô cùng thoải mái, dễ chịu khi sử dụng.', 'L'),
('nam6', 'MEN TWEED BOMBER JACKET', '395', 'nam6.jpg', 'nam6.1.jpg', 'nam6.2.jpg', 'nam6.3.jpg', 'Áo khoác nam vải tweed dáng bomber. Cổ và tay áo viền chun gân co giãn. Tay áo dài , có dây kéo khóa kim loại 1 bên tay áo. Có 2 túi chéo. Cài bằng hàng khuy bấm phía trước. ', 'XL'),
('nam7', 'ÁO KHOÁC NAM VẢI VINILON', '990', 'nam7.jpg', 'nam7.1.jpg', 'nam7.2.jpg', 'nam7.3.jpg', 'Áo khoác nam vải vinilon phom suông, giúp người mặc thoải mái trong từng cử động, nhưng đồng thời vẫn đảm bảo vừa vặn về số đo vai, độ dài tay, áo.', 'L'),
('nam8', 'ÁO KHOÁC THUN CỔ PHỐI MÀU', '990', 'nam8.jpg', 'nam8.1.jpg', 'nam8.2.jpg', 'nam8.3.jpg', 'Dáng áo xuông, phom dáng thoải mái. Bạn có thể phối cùng áo Hoodie, áo thun dáng rộng quần jeans, jogger... để có set đồ năng động và trẻ trung nhất!', 'XXL'),
('nam9', 'ÁO POLO PHỐI VẠCH', '207', 'nam9.jpg', 'nam9.1.jpg', 'nam9.2.jpg', 'nam9.3.jpg', 'Áo polo trơn cổ đức với độ dài vừa phải kết hợp cùng tay ngắn sẽ là lựa chọn hoàn hảo cho những buổi đi chơi, cũng có thể cả đi làm.Họa tiết màu trơn trẻ trung năng động với điểm nhấn họa tiết vạch ở cổ áo và gáy áo tạo cảm giác mới lạ cho người mặc. Bất kì trang phục nào đi kèm cũng mang lại cảm giác vừa lịch sự, vừa thoải mái.\r\n', 'L'),
('nu1', 'Light Turquoise Bowtie Midi Dress', '896', 'nu1.jpg', 'nu1.1.jpg', 'nu1.2.jpg', 'nu1.3.jpg', 'Thiết kế đầm dáng xoè xếp ly giúp tôn lên vẻ đẹp của vóc dáng và mang đến sự thoải mái khi mặc. Chi tiết tay ngắn cùng phần nếp ly phối xoắn trước cổ áo tạo điểm nhấn và thêm phần nổi bật cho sản phẩm. Thiết kế thân dưới váy dạng xếp ly tạo sự bồng bềnh, mềm mại khi di chuyển, giúp người diện luôn tự tin và thoải mái vận động trong mọi hoạt động.', 'M'),
('nu10', ' Đầm dạ hội sang trọng', '991', 'nu10.jpg', 'nu10.1.jpg', 'nu10.2.jpg', 'nu10.3.jpg', 'Chất liệu voan cao cấp vừa kín đáo vừa giúp tăng vẻ quyến rũ cho quý cô. Thiết kế tay phồng khéo léo che đi phần bắp tay giúp tổng thể thêm phần thanh thoát.', 'L'),
('nu11', 'SARAH DRESS - ĐẦM DỰ TIỆC ĐÍNH HOA', '996', 'nu11.jpg', 'nu11.1.jpg', 'nu11.2.jpg', 'nu11.3.jpg', 'Đầm dự tiệc đính hoa là sản phẩm thuộc BST Timeless và được trình diễn trong show thời trang Fall Winter 2022. BST lấy cảm hứng từ phong cách Academia với ý tưởng sáng tạo mang tính xu hướng và nổi bật, đem đến diện mạo học thức vượt ra khỏi khái niệm sắc đẹp đơn thuần, dấu ấn vượt thời gian cùng những trang phục \"không tuổi\".', 'M'),
('nu12', 'ELLIE DRESS - ĐẦM DỰ TIỆC ĐÍNH HOA', '968', 'nu12.jpg', 'nu12.1.jpg', 'nu12.2.jpg', 'nu12.3.jpg', 'Đầm dự tiệc đính hoa với thiết kế là dáng đầm đuôi cá, có 2 lớp dày dặn và độ dài của váy ngang bắp chân. Đầm xẻ ngực hình chữ V viền ngực áo đính hoa nổi tạo điểm nhấn cho phần ngực thêm quyến rũ và có điểm nhấn lên phần trên cơ thể nhiều hơn. Phần tay áo phối vải voan tơ lưới được may nhún tạo độ phồng.', 'L'),
('nu13', 'ÁO SƠ MI TAY LỬNG', '833', 'nu13.jpg', 'nu13.1.jpg', 'nu13.2.jpg', 'nu13.3.jpg', 'Áo sơ mi thiết kế cổ đức với chất liệu vải thô dễ dàng phối đồ theo nhiều cách khác nhau phù hợp với sự thay đổi của thời tiết. Tay áo lửng và dáng áo ôm mang lại dáng vẻ thanh lịch, tôn dáng người mặc.', 'M'),
('nu14', 'ÁO SƠ MI TENCEL DÂY RÚT EO', '693', 'nu14.jpg', 'nu14.1.jpg', 'nu14.2.jpg', 'nu14.3.jpg', 'Chất liệu lụa mang lại cảm giác thoáng mát, thoải mái cho người mặc bởi khả năng hút ẩm cao, thấm hút tốt. Nàng có thể mix&match mẫu áo này với quần dài, quần short, chân váy để tạo ra các outfit khác nhau một cách dễ dàng.', 'XXL'),
('nu15', 'ÁO SƠ MI CỔ V TAY LỠ', '545', 'nu15.jpg', 'nu15.1.jpg', 'nu15.2.jpg', 'nu15.3.jpg', 'Thiết kế áo cổ V giúp khoe trọn đường xương quai xanh thu hút của nàng. Phần tay áo lỡ được may cắt thông minh tôn lên vẻ đẹp hiện đại, phóng khoáng trong mùa hè. Với item này nàng hãy kết hợp cùng áo chân váy hoặc quần âu là đã có ngay outfit lịch sự, hiện đại.', 'L'),
('nu16', 'ÁO SƠ MI TAY NGẮN CỔ ĐỨC', '693', 'nu16.jpg', 'nu16.1.jpg', 'nu16.2.jpg', 'nu16.3.jpg', 'Áo sơ mi là lựa chọn hoàn hảo dành cho quý cô công sở với vẻ đẹp nhẹ nhàng nhưng vẫn lịch sự, chỉn chu. Đặc biệt phần tay lỡ vừa có tác giúp tạo điểm nhấn vừa mang lại cảm giác thoải mái, dễ dàng vận động trong những ngày hè oi ả. Nàng có thể kết hợp item này với chân váy nữ tính, quần âu thanh lịch hay quần jean cá tính cũng đều phù hợp.\r\n', 'XXL'),
('nu2', 'Light Pink Peasant Sleeves Midi Dress', '796', 'nu2.jpg', 'nu2.1.jpg', 'nu2.2.jpg', 'nu2.3.jpg', 'Kiểu dáng midi thướt tha, xoè dần về đuôi mang đến sự bồng bềnh và quyến rũ trên mỗi bước di chuyển. Tầng bèo quây trước ngực tạo điểm nhấn nổi bật và thu hút cho sản phẩm. ', 'XL'),
('nu3', 'Purple Short Sleeves Midi Dress', '896', 'nu3.jpg', 'nu3.1.jpg', 'nu3.2.jpg', 'nu3.3.jpg', 'Thiết kế đầm dáng xoè xếp ly giúp tôn lên vẻ đẹp của vóc dáng và mang đến sự thoải mái khi mặc. Chi tiết tay ngắn cùng phần nếp ly phối xoắn trước cổ áo tạo điểm nhấn và thêm phần nổi bật cho sản phẩm. Thiết kế thân dưới váy dạng xếp ly tạo sự bồng bềnh, mềm mại khi di chuyển, giúp người diện luôn tự tin và thoải mái vận động trong mọi hoạt động.', 'S'),
('nu4', 'Sơ mi họa tiết ren', '897', 'nu4.jpg', 'nu4.1.jpg', 'nu4.2.jpg', 'nu4.3.jpg', 'Chất liệu sợi vải mềm mịn, thoáng mát được tuyển chọn cẩn thận để đảm bảo sự thoải mái tuyệt đối khi mặc vào. Kiểu dáng áo dài thướt tha sẽ tôn lên vẻ đẹp sang trọng. Đặc biệt, hoa văn ren được điểm trên thân áo, may nổi trên nền vải sẽ tăng thêm vẻ nhã nhặn và quý phái cho chiếc áo.', 'XXL'),
('nu5', 'Chân váy xếp ly cạp cao phối khuy', '855', 'nu5.jpg', 'nu5.1.jpg', 'nu5.2.jpg', 'nu5.3.jpg', 'Chân váy xếp ly dáng xoè là một sản phẩm thời trang đẹp mắt và nữ tính, được thiết kế để tôn lên vẻ đẹp của người diện. Với sự kết hợp giữa chất liệu vải thô đứng dáng và độ rộng của ly xếp, chiếc váy này mang đến cảm giác thoải mái và nền nã khi mặc.\r\n', 'L'),
('nu6', 'ÁO CROPTOP CHUN EO PHỐI CHÂN VÁY CHỮ A', '645', 'nu6.jpg', 'nu6.1.jpg', 'nu6.2.jpg', 'nu6.3.jpg', 'Muse set là sản phẩm thời trang sành điệu và nổi bật được phối hợp giữa áo croptop và chân váy ngắn chữ A. Chất liệu vải linen đồng bộ tạo cảm giác mềm mại và rất dễ chịu khi mặc.', 'XL'),
('nu7', 'ĐẦM LỤA NHẤN EO', '797', 'nu7.jpg', 'nu7.1.jpg', 'nu7.2.jpg', 'nu7.3.jpg', 'Thiết kế đầm từ chất liệu lụa mềm mang đến cảm giác bay bổng, nhẹ nhàng. Chiếc đầm này sẽ khiến nàng sở hữu diện mạo nữ tính và dịu dàng hơn. Dáng đầm không tay cùng cổ tròn basic phù hợp với mọi vóc người. Đặc biệt, phần nhấn eo bằng chun giúp nàng có thể tùy chính theo số đo của bản thân. ', 'XL'),
('nu8', 'ÁO CROPTOP TAY PHỒNG', '990', 'nu8.jpg', 'nu8.1.jpg', 'nu8.2.jpg', 'nu8.3.jpg', 'Thiết kế áo không những tôn dáng mà còn mang lại vẻ trẻ trung, năng động cho các cô nàng. Mix cùng quần short, mini skirt hay quần dài là nàng đã có 1 outfit xuống phố thật \"chất\"!', 'S'),
('nu9', 'ĐẦM DỰ TIỆC XẾP NGỰC', '973', 'nu9.jpg', 'nu9.1.jpg', 'nu9.2.jpg', 'nu9.3.jpg', 'Đầm dự tiệc màu trắng sang trọng kết hợp cùng phụ kiện thời trang nữ và túi xách bản nhỏ giúp nàng thêm nổi bật và hoàn hảo hơn đi dự tiệc hoặc đến những sự kiện lớn. ', 'S'),
('tre1', 'ĐẦM HOA CỔ PETERPAN', '168', 'tre1.jpg', 'tre1.1.jpg', 'tre1.2.jpg', 'tre1.3.jpg', 'Đầm hoa cổ Peterpan, tay ngắn diềm bèo. Lớp bên ngoài lưới xuyên thấu, gấu diềm bèo. Bên trong lót lớp vải thô họa tiết hoa. Cài khuy giọt lệ phía sau.', 'L'),
('tre10', 'ÁO POLO KẺ NGANG', '387', 'tre10.jpg', 'tre10.1.jpg', 'tre10.2.jpg', 'tre10.3.jpg', 'Áo polo bé trai cổ đức bằng chun co giãn. Tay ngắn. Dáng xuông, gấu xẻ và lệch tà. Vải kẻ ngang.', 'S'),
('tre11', 'ÁO POLO BÉ TRAI CREATE', '187', 'tre11.jpg', 'tre11.1.jpg', 'tre11.2.jpg', 'tre11.3.jpg', 'Áo thun kiểu dáng polo tay ngắn là một sản phẩm lý tưởng cho các bé trai. Thiết kế áo polo giúp tạo sự phong cách, năng động cho các bé và dễ dàng phối đồ với nhiều kiểu quần khác nhau.', 'L'),
('tre12', 'ÁO SƠ MI BÉ TRAI', '693', 'tre12.jpg', 'tre12.1.jpg', 'tre12.2.jpg', 'tre12.3.jpg', 'Áo sơ mi dáng suông. Các chi tiết bao gồm: cổ đức, tay ngắn, khuy cài. Chất liệu vải thô được xử lý màu đặc biệt. Mẫu thiết kế đáng yêu và năng động phù hợp cho bé trai diện đi chơi.', 'L'),
('tre13', 'ÁO 3 LỖ KHỦNG LONG ', '599', 'tre13.jpg', 'tre13.1.jpg', 'tre13.2.jpg', 'tre13.3.jpg', 'Áo thun ba lỗ dáng suông in họa tiết hình khủng long trước ngực. Quần sooc eo chun có dây rút.', 'XL'),
('tre14', 'ÁO THUN BASKETBALL', '199', 'tre14.jpg', 'tre14.1.jpg', 'tre14.2.jpg', 'tre14.3.jpg', 'Áo thun cho bé trai, cổ tròn, tay ngắn, độ dài vừa phải, dáng suông rộng. Phía trước được in hình trái bóng rổ.', 'XL'),
('tre15', 'ÁO THUN CON VẬT', '559', 'tre15.jpg', 'tre15.1.jpg', 'tre15.2.jpg', 'tre15.3.jpg', 'Áo thun cổ tròn, tay ngắn. Dáng áo xuông. In hình các con vật tạo điểm nhấn. Quần đùi cạp chun co giãn đi kèm, có 2 túi chéo.', 'M'),
('tre16', 'ÁO THUN KHỦNG LONG', '105', 'tre16.jpg', 'tre16.1.jpg', 'tre16.2.jpg', 'tre16.3.jpg', 'Áo thun cổ tròn, tay ngắn. In chữ và hình khủng long nhiều màu mặt trước.', 'XL'),
('tre2', 'ĐẦM ORGANZA DÁNG XÒE', '387', 'tre2.jpg', 'tre2.1.jpg', 'tre2.2.jpg', 'tre2.3.jpg', 'Đầm organza 2 lớp, cổ tròn, tay ngắn bồng. Trang trí 1 trái tim nổi trước ngực. Cài bằng khóa kéo ẩn sau lưng.', 'L'),
('tre3', 'ĐẦM THUN XÒE ROYAL', '187', 'tre3.jpg', 'tre3.1.jpg', 'tre3.2.jpg', 'tre3.3.jpg', 'Đầm xòe cổ mũ có dây khóa kéo. Tay đầm dài bo gấu. Tùng váy xếp nếp tạo xòe.', 'L'),
('tre4', 'ĐẦM LỤA NHẤN BÈO', '693', 'tre4.jpg', 'tre4.1.jpg', 'tre4.2.jpg', 'tre4.3.jpg', 'Đầm gồm 2 lớp bằng lụa, tay cánh dơi ngắn 1 lớp. Cổ áo dáng tròn có dây buộc. Dọc thân đầm được nhấn bèo và xếp layer chồng nhau. Thiết kế đầm từ lụa đem đến độ bay tự nhiên, chất vải tôn lên trọn vẹn màu sắc rực rỡ của họa tiết hoa.\r\n', 'M'),
('tre5', 'ĐẦM XÒE ĐUÔI CÁ MY KIDS', '599', 'tre5.jpg', 'tre5.1.jpg', 'tre5.2.jpg', 'tre5.3.jpg', 'Đầm xoè đuôi cá My Kids là thiết kế không thể thiếu trong tủ quần áo của các bé gái. Với chất liệu thun cotton mềm mại, sản phẩm mang lại sự thoải mái và dễ chịu cho bé khi mặc cả ngày dài.', 'XL'),
('tre6', 'ĐẦM XÒE ĐUÔI CÁ MY KIDS', '599', 'tre6.jpg', 'tre6.1.jpg', 'tre6.2.jpg', 'tre6.3.jpg', 'Đầm xoè đuôi cá My Kids là thiết kế không thể thiếu trong tủ quần áo của các bé gái. Với chất liệu thun cotton mềm mại, sản phẩm mang lại sự thoải mái và dễ chịu cho bé khi mặc cả ngày dài.', 'L'),
('tre7', 'ĐẦM BABYDOLL VAI PHỐI BÈO', '559', 'tre7.jpg', 'tre7.1.jpg', 'tre7.2.jpg', 'tre7.3.jpg', 'Thiết kế đầm babydoll vải thô mềm mại, họa tiết quả dâu dễ thương dành cho bé gái. Đầm sát nách, cầu vai được phối bèo xinh trên. Dáng đầm xòe tự nhiên, được xếp tầng.\r\n', 'XL'),
('tre8', 'ĐẦM THUN ĐUÔI CÁ', '399', 'tre8.jpg', 'tre8.1.jpg', 'tre8.2.jpg', 'tre8.3.jpg', 'Đầm thun dáng đuôi cá, phần cổ áo dáng polo, chiều dài đầm qua đầu gối. Tay áo ngắn phồng nhẹ, hơi bo ở đầu ống. Thân đầm dáng suông, được thêu họa tiết ống nhòm ngộ nghĩnh bên phía ngực trái.\r\n', 'L'),
('yt1', 'Dark Blue Pleated Midi Jean Dress', '996', 'yt.jpg', 'yt1.1.jpg', 'yt1.2.jpg', 'yt1.3.jpg', '', 'M'),
('yt2', 'Brown Stripe Sarong Midi Woven Dress', '896', 'yt2.jpg', 'yt2.1.jpg', 'yt2.2.jpg', 'yt2.3.jpg', '', 'M'),
('yt3', 'Black Rose Cap Sleeves Midi Dress', '996', 'yt3.jpg', 'yt3.1.jpg', 'yt3.2.jpg', 'yt3.3.jpg', '', 'S'),
('yt4', 'Dark Mint Pegged Mini Taffeta Dress', '998', 'yt4.jpg', 'yt4.1.jpg', 'yt4.2.jpg', 'yt4.3.jpg', '', 'S');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `img` (`img`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
