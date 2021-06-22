<?php

use Illuminate\Database\Seeder;
use App\District;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $district = new District(); 
		$district->name_local = "Ba Đình"; $district->name_global = "Ba Dinh county"; $district->alias = "ba-dinh";
		$district->district_id = "001"; $district->level = "Quận"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hoàn Kiếm"; $district->name_global = "Hoan Kiem county"; $district->alias = "hoan-kiem";
		$district->district_id = "002"; $district->level = "Quận"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tây Hồ"; $district->name_global = "Tay Ho county"; $district->alias = "tay-ho";
		$district->district_id = "003"; $district->level = "Quận"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Long Biên"; $district->name_global = "Long Bien county"; $district->alias = "long-bien";
		$district->district_id = "004"; $district->level = "Quận"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cầu Giấy"; $district->name_global = "Cau Giay county"; $district->alias = "cau-giay";
		$district->district_id = "005"; $district->level = "Quận"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đống Đa"; $district->name_global = "Dong Da county"; $district->alias = "dong-da";
		$district->district_id = "006"; $district->level = "Quận"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hai Bà Trưng"; $district->name_global = "Hai Ba Trung county"; $district->alias = "hai-ba-trung";
		$district->district_id = "007"; $district->level = "Quận"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hoàng Mai"; $district->name_global = "Hoang Mai county"; $district->alias = "hoang-mai";
		$district->district_id = "008"; $district->level = "Quận"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thanh Xuân"; $district->name_global = "Thanh Xuan county"; $district->alias = "thanh-xuan";
		$district->district_id = "009"; $district->level = "Quận"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sóc Sơn"; $district->name_global = "Soc Son district"; $district->alias = "soc-son";
		$district->district_id = "016"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đông Anh"; $district->name_global = "Dong Anh district"; $district->alias = "dong-anh";
		$district->district_id = "017"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Gia Lâm"; $district->name_global = "Gia Lam district"; $district->alias = "gia-lam";
		$district->district_id = "018"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nam Từ Liêm"; $district->name_global = "Nam Tu Liem county"; $district->alias = "nam-tu-liem";
		$district->district_id = "019"; $district->level = "Quận"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thanh Trì"; $district->name_global = "Thanh Tri district"; $district->alias = "thanh-tri";
		$district->district_id = "020"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bắc Từ Liêm"; $district->name_global = "Bac Tu Liem county"; $district->alias = "bac-tu-liem";
		$district->district_id = "021"; $district->level = "Quận"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mê Linh"; $district->name_global = "Me Linh district"; $district->alias = "me-linh";
		$district->district_id = "250"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hà Đông"; $district->name_global = "Ha Dong county"; $district->alias = "ha-dong";
		$district->district_id = "268"; $district->level = "Quận"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sơn Tây"; $district->name_global = "Son Tay town"; $district->alias = "son-tay";
		$district->district_id = "269"; $district->level = "Thị xã"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ba Vì"; $district->name_global = "Ba Vi district"; $district->alias = "ba-vi";
		$district->district_id = "271"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phúc Thọ"; $district->name_global = "Phuc Tho district"; $district->alias = "phuc-tho";
		$district->district_id = "272"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đan Phượng"; $district->name_global = "Dan Phuong district"; $district->alias = "dan-phuong";
		$district->district_id = "273"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hoài Đức"; $district->name_global = "Hoai Duc district"; $district->alias = "hoai-duc";
		$district->district_id = "274"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quốc Oai"; $district->name_global = "Quoc Oai district"; $district->alias = "quoc-oai";
		$district->district_id = "275"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thạch Thất"; $district->name_global = "Thach That district"; $district->alias = "thach-that";
		$district->district_id = "276"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Chương Mỹ"; $district->name_global = "Chuong My district"; $district->alias = "chuong-my";
		$district->district_id = "277"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thanh Oai"; $district->name_global = "Thanh Oai district"; $district->alias = "thanh-oai";
		$district->district_id = "278"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thường Tín"; $district->name_global = "Thuong Tin district"; $district->alias = "thuong-tin";
		$district->district_id = "279"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Xuyên"; $district->name_global = "Phu Xuyen district"; $district->alias = "phu-xuyen";
		$district->district_id = "280"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ứng Hòa"; $district->name_global = "Ung Hoa district"; $district->alias = "ung-hoa";
		$district->district_id = "281"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mỹ Đức"; $district->name_global = "My Duc district"; $district->alias = "my-duc";
		$district->district_id = "282"; $district->level = "Huyện"; $district->city_id = "01"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hà Giang"; $district->name_global = "Ha Giang city"; $district->alias = "ha-giang";
		$district->district_id = "024"; $district->level = "Thành phố"; $district->city_id = "02"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đồng Văn"; $district->name_global = "Dong Van district"; $district->alias = "dong-van";
		$district->district_id = "026"; $district->level = "Huyện"; $district->city_id = "02"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mèo Vạc"; $district->name_global = "Meo Vac district"; $district->alias = "meo-vac";
		$district->district_id = "027"; $district->level = "Huyện"; $district->city_id = "02"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Minh"; $district->name_global = "Yen Minh district"; $district->alias = "yen-minh";
		$district->district_id = "028"; $district->level = "Huyện"; $district->city_id = "02"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quản Bạ"; $district->name_global = "Quan Ba district"; $district->alias = "quan-ba";
		$district->district_id = "029"; $district->level = "Huyện"; $district->city_id = "02"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vị Xuyên"; $district->name_global = "Vi Xuyen district"; $district->alias = "vi-xuyen";
		$district->district_id = "030"; $district->level = "Huyện"; $district->city_id = "02"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bắc Mê"; $district->name_global = "Bac Me district"; $district->alias = "bac-me";
		$district->district_id = "031"; $district->level = "Huyện"; $district->city_id = "02"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hoàng Su Phì"; $district->name_global = "Hoang Su Phi district"; $district->alias = "hoang-su-phi";
		$district->district_id = "032"; $district->level = "Huyện"; $district->city_id = "02"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Xín Mần"; $district->name_global = "Xin Man district"; $district->alias = "xin-man";
		$district->district_id = "033"; $district->level = "Huyện"; $district->city_id = "02"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bắc Quang"; $district->name_global = "Bac Quang district"; $district->alias = "bac-quang";
		$district->district_id = "034"; $district->level = "Huyện"; $district->city_id = "02"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quang Bình"; $district->name_global = "Quang Binh district"; $district->alias = "quang-binh";
		$district->district_id = "035"; $district->level = "Huyện"; $district->city_id = "02"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cao Bằng"; $district->name_global = "Cao Bang city"; $district->alias = "cao-bang";
		$district->district_id = "040"; $district->level = "Thành phố"; $district->city_id = "04"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bảo Lâm"; $district->name_global = "Bao Lam district"; $district->alias = "bao-lam";
		$district->district_id = "042"; $district->level = "Huyện"; $district->city_id = "04"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bảo Lạc"; $district->name_global = "Bao Lac district"; $district->alias = "bao-lac";
		$district->district_id = "043"; $district->level = "Huyện"; $district->city_id = "04"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thông Nông"; $district->name_global = "Thong Nong district"; $district->alias = "thong-nong";
		$district->district_id = "044"; $district->level = "Huyện"; $district->city_id = "04"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hà Quảng"; $district->name_global = "Ha Quang district"; $district->alias = "ha-quang";
		$district->district_id = "045"; $district->level = "Huyện"; $district->city_id = "04"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Trà Lĩnh"; $district->name_global = "Tra Linh district"; $district->alias = "tra-linh";
		$district->district_id = "046"; $district->level = "Huyện"; $district->city_id = "04"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Trùng Khánh"; $district->name_global = "Trung Khanh district"; $district->alias = "trung-khanh";
		$district->district_id = "047"; $district->level = "Huyện"; $district->city_id = "04"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hạ Lang"; $district->name_global = "Ha Lang district"; $district->alias = "ha-lang";
		$district->district_id = "048"; $district->level = "Huyện"; $district->city_id = "04"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quảng Uyên"; $district->name_global = "Quang Uyen district"; $district->alias = "quang-uyen";
		$district->district_id = "049"; $district->level = "Huyện"; $district->city_id = "04"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phục Hoà"; $district->name_global = "Phuc Hoa district"; $district->alias = "phuc-hoa";
		$district->district_id = "050"; $district->level = "Huyện"; $district->city_id = "04"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hoà An"; $district->name_global = "Hoa An district"; $district->alias = "hoa-an";
		$district->district_id = "051"; $district->level = "Huyện"; $district->city_id = "04"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nguyên Bình"; $district->name_global = "Nguyen Binh district"; $district->alias = "nguyen-binh";
		$district->district_id = "052"; $district->level = "Huyện"; $district->city_id = "04"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thạch An"; $district->name_global = "Thach An district"; $district->alias = "thach-an";
		$district->district_id = "053"; $district->level = "Huyện"; $district->city_id = "04"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bắc Kạn"; $district->name_global = "Bac Kan city"; $district->alias = "bac-kan";
		$district->district_id = "058"; $district->level = "Thành phố"; $district->city_id = "06"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Pác Nặm"; $district->name_global = "Pac Nam district"; $district->alias = "pac-nam";
		$district->district_id = "060"; $district->level = "Huyện"; $district->city_id = "06"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ba Bể"; $district->name_global = "Ba Be district"; $district->alias = "ba-be";
		$district->district_id = "061"; $district->level = "Huyện"; $district->city_id = "06"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ngân Sơn"; $district->name_global = "Ngan Son district"; $district->alias = "ngan-son";
		$district->district_id = "062"; $district->level = "Huyện"; $district->city_id = "06"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bạch Thông"; $district->name_global = "Bach Thong district"; $district->alias = "bach-thong";
		$district->district_id = "063"; $district->level = "Huyện"; $district->city_id = "06"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Chợ Đồn"; $district->name_global = "Cho Don district"; $district->alias = "cho-don";
		$district->district_id = "064"; $district->level = "Huyện"; $district->city_id = "06"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Chợ Mới"; $district->name_global = "Cho Moi district"; $district->alias = "cho-moi";
		$district->district_id = "065"; $district->level = "Huyện"; $district->city_id = "06"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Na Rì"; $district->name_global = "Na Ri district"; $district->alias = "na-ri";
		$district->district_id = "066"; $district->level = "Huyện"; $district->city_id = "06"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tuyên Quang"; $district->name_global = "Tuyen Quang city"; $district->alias = "tuyen-quang";
		$district->district_id = "070"; $district->level = "Thành phố"; $district->city_id = "08"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lâm Bình"; $district->name_global = "Lam Binh district"; $district->alias = "lam-binh";
		$district->district_id = "071"; $district->level = "Huyện"; $district->city_id = "08"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Na Hang"; $district->name_global = "Na Hang district"; $district->alias = "na-hang";
		$district->district_id = "072"; $district->level = "Huyện"; $district->city_id = "08"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Chiêm Hóa"; $district->name_global = "Chiem Hoa district"; $district->alias = "chiem-hoa";
		$district->district_id = "073"; $district->level = "Huyện"; $district->city_id = "08"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hàm Yên"; $district->name_global = "Ham Yen district"; $district->alias = "ham-yen";
		$district->district_id = "074"; $district->level = "Huyện"; $district->city_id = "08"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Sơn"; $district->name_global = "Yen Son district"; $district->alias = "yen-son";
		$district->district_id = "075"; $district->level = "Huyện"; $district->city_id = "08"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sơn Dương"; $district->name_global = "Son Duong district"; $district->alias = "son-duong";
		$district->district_id = "076"; $district->level = "Huyện"; $district->city_id = "08"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lào Cai"; $district->name_global = "Lao Cai city"; $district->alias = "lao-cai";
		$district->district_id = "080"; $district->level = "Thành phố"; $district->city_id = "10"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bát Xát"; $district->name_global = "Bat Xat district"; $district->alias = "bat-xat";
		$district->district_id = "082"; $district->level = "Huyện"; $district->city_id = "10"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mường Khương"; $district->name_global = "Muong Khuong district"; $district->alias = "muong-khuong";
		$district->district_id = "083"; $district->level = "Huyện"; $district->city_id = "10"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Si Ma Cai"; $district->name_global = "Si Ma Cai district"; $district->alias = "si-ma-cai";
		$district->district_id = "084"; $district->level = "Huyện"; $district->city_id = "10"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bắc Hà"; $district->name_global = "Bac Ha district"; $district->alias = "bac-ha";
		$district->district_id = "085"; $district->level = "Huyện"; $district->city_id = "10"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bảo Thắng"; $district->name_global = "Bao Thang district"; $district->alias = "bao-thang";
		$district->district_id = "086"; $district->level = "Huyện"; $district->city_id = "10"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bảo Yên"; $district->name_global = "Bao Yen district"; $district->alias = "bao-yen";
		$district->district_id = "087"; $district->level = "Huyện"; $district->city_id = "10"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sa Pa"; $district->name_global = "Sa Pa district"; $district->alias = "sa-pa";
		$district->district_id = "088"; $district->level = "Huyện"; $district->city_id = "10"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Văn Bàn"; $district->name_global = "Van Ban district"; $district->alias = "van-ban";
		$district->district_id = "089"; $district->level = "Huyện"; $district->city_id = "10"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Điện Biên Phủ"; $district->name_global = "Dien Bien Phu city"; $district->alias = "dien-bien-phu";
		$district->district_id = "094"; $district->level = "Thành phố"; $district->city_id = "11"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mường Lay"; $district->name_global = "Muong Lay town"; $district->alias = "muong-lay";
		$district->district_id = "095"; $district->level = "Thị xã"; $district->city_id = "11"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mường Nhé"; $district->name_global = "Muong Nhe district"; $district->alias = "muong-nhe";
		$district->district_id = "096"; $district->level = "Huyện"; $district->city_id = "11"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mường Chà"; $district->name_global = "Muong Cha district"; $district->alias = "muong-cha";
		$district->district_id = "097"; $district->level = "Huyện"; $district->city_id = "11"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tủa Chùa"; $district->name_global = "Tua Chua district"; $district->alias = "tua-chua";
		$district->district_id = "098"; $district->level = "Huyện"; $district->city_id = "11"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tuần Giáo"; $district->name_global = "Tuan Giao district"; $district->alias = "tuan-giao";
		$district->district_id = "099"; $district->level = "Huyện"; $district->city_id = "11"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Điện Biên"; $district->name_global = "Dien Bien district"; $district->alias = "dien-bien";
		$district->district_id = "100"; $district->level = "Huyện"; $district->city_id = "11"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Điện Biên Đông"; $district->name_global = "Dien Bien Dong district"; $district->alias = "dien-bien-dong";
		$district->district_id = "101"; $district->level = "Huyện"; $district->city_id = "11"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mường Ảng"; $district->name_global = "Muong Ang district"; $district->alias = "muong-ang";
		$district->district_id = "102"; $district->level = "Huyện"; $district->city_id = "11"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nậm Pồ"; $district->name_global = "Nam Po district"; $district->alias = "nam-po";
		$district->district_id = "103"; $district->level = "Huyện"; $district->city_id = "11"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lai Châu"; $district->name_global = "Lai Chau city"; $district->alias = "lai-chau";
		$district->district_id = "105"; $district->level = "Thành phố"; $district->city_id = "12"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tam Đường"; $district->name_global = "Tam Duong district"; $district->alias = "tam-duong";
		$district->district_id = "106"; $district->level = "Huyện"; $district->city_id = "12"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mường Tè"; $district->name_global = "Muong Te district"; $district->alias = "muong-te";
		$district->district_id = "107"; $district->level = "Huyện"; $district->city_id = "12"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sìn Hồ"; $district->name_global = "Sin Ho district"; $district->alias = "sin-ho";
		$district->district_id = "108"; $district->level = "Huyện"; $district->city_id = "12"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phong Thổ"; $district->name_global = "Phong Tho district"; $district->alias = "phong-tho";
		$district->district_id = "109"; $district->level = "Huyện"; $district->city_id = "12"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Than Uyên"; $district->name_global = "Than Uyen district"; $district->alias = "than-uyen";
		$district->district_id = "110"; $district->level = "Huyện"; $district->city_id = "12"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Uyên"; $district->name_global = "Tan Uyen district"; $district->alias = "tan-uyen";
		$district->district_id = "111"; $district->level = "Huyện"; $district->city_id = "12"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nậm Nhùn"; $district->name_global = "Nam Nhun district"; $district->alias = "nam-nhun";
		$district->district_id = "112"; $district->level = "Huyện"; $district->city_id = "12"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sơn La"; $district->name_global = "Son La city"; $district->alias = "son-la";
		$district->district_id = "116"; $district->level = "Thành phố"; $district->city_id = "14"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quỳnh Nhai"; $district->name_global = "Quynh Nhai district"; $district->alias = "quynh-nhai";
		$district->district_id = "118"; $district->level = "Huyện"; $district->city_id = "14"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thuận Châu"; $district->name_global = "Thuan Chau district"; $district->alias = "thuan-chau";
		$district->district_id = "119"; $district->level = "Huyện"; $district->city_id = "14"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mường La"; $district->name_global = "Muong La district"; $district->alias = "muong-la";
		$district->district_id = "120"; $district->level = "Huyện"; $district->city_id = "14"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bắc Yên"; $district->name_global = "Bac Yen district"; $district->alias = "bac-yen";
		$district->district_id = "121"; $district->level = "Huyện"; $district->city_id = "14"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phù Yên"; $district->name_global = "Phu Yen district"; $district->alias = "phu-yen";
		$district->district_id = "122"; $district->level = "Huyện"; $district->city_id = "14"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mộc Châu"; $district->name_global = "Moc Chau district"; $district->alias = "moc-chau";
		$district->district_id = "123"; $district->level = "Huyện"; $district->city_id = "14"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Châu"; $district->name_global = "Yen Chau district"; $district->alias = "yen-chau";
		$district->district_id = "124"; $district->level = "Huyện"; $district->city_id = "14"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mai Sơn"; $district->name_global = "Mai Son district"; $district->alias = "mai-son";
		$district->district_id = "125"; $district->level = "Huyện"; $district->city_id = "14"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sông Mã"; $district->name_global = "Song Ma district"; $district->alias = "song-ma";
		$district->district_id = "126"; $district->level = "Huyện"; $district->city_id = "14"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sốp Cộp"; $district->name_global = "Sop Cop district"; $district->alias = "sop-cop";
		$district->district_id = "127"; $district->level = "Huyện"; $district->city_id = "14"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vân Hồ"; $district->name_global = "Van Ho district"; $district->alias = "van-ho";
		$district->district_id = "128"; $district->level = "Huyện"; $district->city_id = "14"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Bái"; $district->name_global = "Yen Bai city"; $district->alias = "yen-bai";
		$district->district_id = "132"; $district->level = "Thành phố"; $district->city_id = "15"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nghĩa Lộ"; $district->name_global = "Nghia Lo town"; $district->alias = "nghia-lo";
		$district->district_id = "133"; $district->level = "Thị xã"; $district->city_id = "15"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lục Yên"; $district->name_global = "Luc Yen district"; $district->alias = "luc-yen";
		$district->district_id = "135"; $district->level = "Huyện"; $district->city_id = "15"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Văn Yên"; $district->name_global = "Van Yen district"; $district->alias = "van-yen";
		$district->district_id = "136"; $district->level = "Huyện"; $district->city_id = "15"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mù Căng Chải"; $district->name_global = "Mu Cang Chai district"; $district->alias = "mu-cang-chai";
		$district->district_id = "137"; $district->level = "Huyện"; $district->city_id = "15"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Trấn Yên"; $district->name_global = "Tran Yen district"; $district->alias = "tran-yen";
		$district->district_id = "138"; $district->level = "Huyện"; $district->city_id = "15"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Trạm Tấu"; $district->name_global = "Tram Tau district"; $district->alias = "tram-tau";
		$district->district_id = "139"; $district->level = "Huyện"; $district->city_id = "15"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Văn Chấn"; $district->name_global = "Van Chan district"; $district->alias = "van-chan";
		$district->district_id = "140"; $district->level = "Huyện"; $district->city_id = "15"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Bình"; $district->name_global = "Yen Binh district"; $district->alias = "yen-binh";
		$district->district_id = "141"; $district->level = "Huyện"; $district->city_id = "15"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hòa Bình"; $district->name_global = "Hoa Binh city"; $district->alias = "hoa-binh";
		$district->district_id = "148"; $district->level = "Thành phố"; $district->city_id = "17"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đà Bắc"; $district->name_global = "Da Bac district"; $district->alias = "da-bac";
		$district->district_id = "150"; $district->level = "Huyện"; $district->city_id = "17"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kỳ Sơn"; $district->name_global = "Ky Son district"; $district->alias = "ky-son";
		$district->district_id = "151"; $district->level = "Huyện"; $district->city_id = "17"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lương Sơn"; $district->name_global = "Luong Son district"; $district->alias = "luong-son";
		$district->district_id = "152"; $district->level = "Huyện"; $district->city_id = "17"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kim Bôi"; $district->name_global = "Kim Boi district"; $district->alias = "kim-boi";
		$district->district_id = "153"; $district->level = "Huyện"; $district->city_id = "17"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cao Phong"; $district->name_global = "Cao Phong district"; $district->alias = "cao-phong";
		$district->district_id = "154"; $district->level = "Huyện"; $district->city_id = "17"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Lạc"; $district->name_global = "Tan Lac district"; $district->alias = "tan-lac";
		$district->district_id = "155"; $district->level = "Huyện"; $district->city_id = "17"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mai Châu"; $district->name_global = "Mai Chau district"; $district->alias = "mai-chau";
		$district->district_id = "156"; $district->level = "Huyện"; $district->city_id = "17"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lạc Sơn"; $district->name_global = "Lac Son district"; $district->alias = "lac-son";
		$district->district_id = "157"; $district->level = "Huyện"; $district->city_id = "17"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Thủy"; $district->name_global = "Yen Thuy district"; $district->alias = "yen-thuy";
		$district->district_id = "158"; $district->level = "Huyện"; $district->city_id = "17"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lạc Thủy"; $district->name_global = "Lac Thuy district"; $district->alias = "lac-thuy";
		$district->district_id = "159"; $district->level = "Huyện"; $district->city_id = "17"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thái Nguyên"; $district->name_global = "Thai Nguyen city"; $district->alias = "thai-nguyen";
		$district->district_id = "164"; $district->level = "Thành phố"; $district->city_id = "19"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sông Công"; $district->name_global = "Song Cong city"; $district->alias = "song-cong";
		$district->district_id = "165"; $district->level = "Thành phố"; $district->city_id = "19"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Định Hóa"; $district->name_global = "Dinh Hoa district"; $district->alias = "dinh-hoa";
		$district->district_id = "167"; $district->level = "Huyện"; $district->city_id = "19"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Lương"; $district->name_global = "Phu Luong district"; $district->alias = "phu-luong";
		$district->district_id = "168"; $district->level = "Huyện"; $district->city_id = "19"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đồng Hỷ"; $district->name_global = "Dong Hy district"; $district->alias = "dong-hy";
		$district->district_id = "169"; $district->level = "Huyện"; $district->city_id = "19"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Võ Nhai"; $district->name_global = "Vo Nhai district"; $district->alias = "vo-nhai";
		$district->district_id = "170"; $district->level = "Huyện"; $district->city_id = "19"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đại Từ"; $district->name_global = "Dai Tu district"; $district->alias = "dai-tu";
		$district->district_id = "171"; $district->level = "Huyện"; $district->city_id = "19"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phổ Yên"; $district->name_global = "Pho Yen town"; $district->alias = "pho-yen";
		$district->district_id = "172"; $district->level = "Thị xã"; $district->city_id = "19"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Bình"; $district->name_global = "Phu Binh district"; $district->alias = "phu-binh";
		$district->district_id = "173"; $district->level = "Huyện"; $district->city_id = "19"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lạng Sơn"; $district->name_global = "Lang Son city"; $district->alias = "lang-son";
		$district->district_id = "178"; $district->level = "Thành phố"; $district->city_id = "20"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tràng Định"; $district->name_global = "Trang Dinh district"; $district->alias = "trang-dinh";
		$district->district_id = "180"; $district->level = "Huyện"; $district->city_id = "20"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bình Gia"; $district->name_global = "Binh Gia district"; $district->alias = "binh-gia";
		$district->district_id = "181"; $district->level = "Huyện"; $district->city_id = "20"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Văn Lãng"; $district->name_global = "Van Lang district"; $district->alias = "van-lang";
		$district->district_id = "182"; $district->level = "Huyện"; $district->city_id = "20"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cao Lộc"; $district->name_global = "Cao Loc district"; $district->alias = "cao-loc";
		$district->district_id = "183"; $district->level = "Huyện"; $district->city_id = "20"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Văn Quan"; $district->name_global = "Van Quan district"; $district->alias = "van-quan";
		$district->district_id = "184"; $district->level = "Huyện"; $district->city_id = "20"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bắc Sơn"; $district->name_global = "Bac Son district"; $district->alias = "bac-son";
		$district->district_id = "185"; $district->level = "Huyện"; $district->city_id = "20"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hữu Lũng"; $district->name_global = "Huu Lung district"; $district->alias = "huu-lung";
		$district->district_id = "186"; $district->level = "Huyện"; $district->city_id = "20"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Chi Lăng"; $district->name_global = "Chi Lang district"; $district->alias = "chi-lang";
		$district->district_id = "187"; $district->level = "Huyện"; $district->city_id = "20"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lộc Bình"; $district->name_global = "Loc Binh district"; $district->alias = "loc-binh";
		$district->district_id = "188"; $district->level = "Huyện"; $district->city_id = "20"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đình Lập"; $district->name_global = "Dinh Lap district"; $district->alias = "dinh-lap";
		$district->district_id = "189"; $district->level = "Huyện"; $district->city_id = "20"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hạ Long"; $district->name_global = "Ha Long city"; $district->alias = "ha-long";
		$district->district_id = "193"; $district->level = "Thành phố"; $district->city_id = "22"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Móng Cái"; $district->name_global = "Mong Cai city"; $district->alias = "mong-cai";
		$district->district_id = "194"; $district->level = "Thành phố"; $district->city_id = "22"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cẩm Phả"; $district->name_global = "Cam Pha city"; $district->alias = "cam-pha";
		$district->district_id = "195"; $district->level = "Thành phố"; $district->city_id = "22"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Uông Bí"; $district->name_global = "Uong Bi city"; $district->alias = "uong-bi";
		$district->district_id = "196"; $district->level = "Thành phố"; $district->city_id = "22"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bình Liêu"; $district->name_global = "Binh Lieu district"; $district->alias = "binh-lieu";
		$district->district_id = "198"; $district->level = "Huyện"; $district->city_id = "22"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tiên Yên"; $district->name_global = "Tien Yen district"; $district->alias = "tien-yen";
		$district->district_id = "199"; $district->level = "Huyện"; $district->city_id = "22"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đầm Hà"; $district->name_global = "Dam Ha district"; $district->alias = "dam-ha";
		$district->district_id = "200"; $district->level = "Huyện"; $district->city_id = "22"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hải Hà"; $district->name_global = "Hai Ha district"; $district->alias = "hai-ha";
		$district->district_id = "201"; $district->level = "Huyện"; $district->city_id = "22"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ba Chẽ"; $district->name_global = "Ba Che district"; $district->alias = "ba-che";
		$district->district_id = "202"; $district->level = "Huyện"; $district->city_id = "22"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vân Đồn"; $district->name_global = "Van Don district"; $district->alias = "van-don";
		$district->district_id = "203"; $district->level = "Huyện"; $district->city_id = "22"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hoành Bồ"; $district->name_global = "Hoanh Bo district"; $district->alias = "hoanh-bo";
		$district->district_id = "204"; $district->level = "Huyện"; $district->city_id = "22"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đông Triều"; $district->name_global = "Dong Trieu town"; $district->alias = "dong-trieu";
		$district->district_id = "205"; $district->level = "Thị xã"; $district->city_id = "22"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quảng Yên"; $district->name_global = "Quang Yen town"; $district->alias = "quang-yen";
		$district->district_id = "206"; $district->level = "Thị xã"; $district->city_id = "22"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cô Tô"; $district->name_global = "Co To district"; $district->alias = "co-to";
		$district->district_id = "207"; $district->level = "Huyện"; $district->city_id = "22"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bắc Giang"; $district->name_global = "Bac Giang city"; $district->alias = "bac-giang";
		$district->district_id = "213"; $district->level = "Thành phố"; $district->city_id = "24"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Thế"; $district->name_global = "Yen The district"; $district->alias = "yen-the";
		$district->district_id = "215"; $district->level = "Huyện"; $district->city_id = "24"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Yên"; $district->name_global = "Tan Yen district"; $district->alias = "tan-yen";
		$district->district_id = "216"; $district->level = "Huyện"; $district->city_id = "24"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lạng Giang"; $district->name_global = "Lang Giang district"; $district->alias = "lang-giang";
		$district->district_id = "217"; $district->level = "Huyện"; $district->city_id = "24"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lục Nam"; $district->name_global = "Luc Nam district"; $district->alias = "luc-nam";
		$district->district_id = "218"; $district->level = "Huyện"; $district->city_id = "24"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lục Ngạn"; $district->name_global = "Luc Ngan district"; $district->alias = "luc-ngan";
		$district->district_id = "219"; $district->level = "Huyện"; $district->city_id = "24"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sơn Động"; $district->name_global = "Son Dong district"; $district->alias = "son-dong";
		$district->district_id = "220"; $district->level = "Huyện"; $district->city_id = "24"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Dũng"; $district->name_global = "Yen Dung district"; $district->alias = "yen-dung";
		$district->district_id = "221"; $district->level = "Huyện"; $district->city_id = "24"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Việt Yên"; $district->name_global = "Viet Yen district"; $district->alias = "viet-yen";
		$district->district_id = "222"; $district->level = "Huyện"; $district->city_id = "24"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hiệp Hòa"; $district->name_global = "Hiep Hoa district"; $district->alias = "hiep-hoa";
		$district->district_id = "223"; $district->level = "Huyện"; $district->city_id = "24"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Việt Trì"; $district->name_global = "Viet Tri city"; $district->alias = "viet-tri";
		$district->district_id = "227"; $district->level = "Thành phố"; $district->city_id = "25"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Thọ"; $district->name_global = "Phu Tho town"; $district->alias = "phu-tho";
		$district->district_id = "228"; $district->level = "Thị xã"; $district->city_id = "25"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đoan Hùng"; $district->name_global = "Doan Hung district"; $district->alias = "doan-hung";
		$district->district_id = "230"; $district->level = "Huyện"; $district->city_id = "25"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hạ Hoà"; $district->name_global = "Ha Hoa district"; $district->alias = "ha-hoa";
		$district->district_id = "231"; $district->level = "Huyện"; $district->city_id = "25"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thanh Ba"; $district->name_global = "Thanh Ba district"; $district->alias = "thanh-ba";
		$district->district_id = "232"; $district->level = "Huyện"; $district->city_id = "25"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phù Ninh"; $district->name_global = "Phu Ninh district"; $district->alias = "phu-ninh";
		$district->district_id = "233"; $district->level = "Huyện"; $district->city_id = "25"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Lập"; $district->name_global = "Yen Lap district"; $district->alias = "yen-lap";
		$district->district_id = "234"; $district->level = "Huyện"; $district->city_id = "25"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cẩm Khê"; $district->name_global = "Cam Khe district"; $district->alias = "cam-khe";
		$district->district_id = "235"; $district->level = "Huyện"; $district->city_id = "25"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tam Nông"; $district->name_global = "Tam Nong district"; $district->alias = "tam-nong";
		$district->district_id = "236"; $district->level = "Huyện"; $district->city_id = "25"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lâm Thao"; $district->name_global = "Lam Thao district"; $district->alias = "lam-thao";
		$district->district_id = "237"; $district->level = "Huyện"; $district->city_id = "25"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thanh Sơn"; $district->name_global = "Thanh Son district"; $district->alias = "thanh-son";
		$district->district_id = "238"; $district->level = "Huyện"; $district->city_id = "25"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thanh Thuỷ"; $district->name_global = "Thanh Thuy district"; $district->alias = "thanh-thuy";
		$district->district_id = "239"; $district->level = "Huyện"; $district->city_id = "25"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Sơn"; $district->name_global = "Tan Son district"; $district->alias = "tan-son";
		$district->district_id = "240"; $district->level = "Huyện"; $district->city_id = "25"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vĩnh Yên"; $district->name_global = "Vinh Yen city"; $district->alias = "vinh-yen";
		$district->district_id = "243"; $district->level = "Thành phố"; $district->city_id = "26"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phúc Yên"; $district->name_global = "Phuc Yen town"; $district->alias = "phuc-yen";
		$district->district_id = "244"; $district->level = "Thị xã"; $district->city_id = "26"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lập Thạch"; $district->name_global = "Lap Thach district"; $district->alias = "lap-thach";
		$district->district_id = "246"; $district->level = "Huyện"; $district->city_id = "26"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tam Dương"; $district->name_global = "Tam Duong district"; $district->alias = "tam-duong";
		$district->district_id = "247"; $district->level = "Huyện"; $district->city_id = "26"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tam Đảo"; $district->name_global = "Tam Dao district"; $district->alias = "tam-dao";
		$district->district_id = "248"; $district->level = "Huyện"; $district->city_id = "26"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bình Xuyên"; $district->name_global = "Binh Xuyen district"; $district->alias = "binh-xuyen";
		$district->district_id = "249"; $district->level = "Huyện"; $district->city_id = "26"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Lạc"; $district->name_global = "Yen Lac district"; $district->alias = "yen-lac";
		$district->district_id = "251"; $district->level = "Huyện"; $district->city_id = "26"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vĩnh Tường"; $district->name_global = "Vinh Tuong district"; $district->alias = "vinh-tuong";
		$district->district_id = "252"; $district->level = "Huyện"; $district->city_id = "26"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sông Lô"; $district->name_global = "Song Lo district"; $district->alias = "song-lo";
		$district->district_id = "253"; $district->level = "Huyện"; $district->city_id = "26"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bắc Ninh"; $district->name_global = "Bac Ninh city"; $district->alias = "bac-ninh";
		$district->district_id = "256"; $district->level = "Thành phố"; $district->city_id = "27"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Phong"; $district->name_global = "Yen Phong district"; $district->alias = "yen-phong";
		$district->district_id = "258"; $district->level = "Huyện"; $district->city_id = "27"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quế Võ"; $district->name_global = "Que Vo district"; $district->alias = "que-vo";
		$district->district_id = "259"; $district->level = "Huyện"; $district->city_id = "27"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tiên Du"; $district->name_global = "Tien Du district"; $district->alias = "tien-du";
		$district->district_id = "260"; $district->level = "Huyện"; $district->city_id = "27"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Từ Sơn"; $district->name_global = "Tu Son town"; $district->alias = "tu-son";
		$district->district_id = "261"; $district->level = "Thị xã"; $district->city_id = "27"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thuận Thành"; $district->name_global = "Thuan Thanh district"; $district->alias = "thuan-thanh";
		$district->district_id = "262"; $district->level = "Huyện"; $district->city_id = "27"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Gia Bình"; $district->name_global = "Gia Binh district"; $district->alias = "gia-binh";
		$district->district_id = "263"; $district->level = "Huyện"; $district->city_id = "27"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lương Tài"; $district->name_global = "Luong Tai district"; $district->alias = "luong-tai";
		$district->district_id = "264"; $district->level = "Huyện"; $district->city_id = "27"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hải Dương"; $district->name_global = "Hai Duong city"; $district->alias = "hai-duong";
		$district->district_id = "288"; $district->level = "Thành phố"; $district->city_id = "30"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Chí Linh"; $district->name_global = "Chi Linh town"; $district->alias = "chi-linh";
		$district->district_id = "290"; $district->level = "Thị xã"; $district->city_id = "30"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nam Sách"; $district->name_global = "Nam Sach district"; $district->alias = "nam-sach";
		$district->district_id = "291"; $district->level = "Huyện"; $district->city_id = "30"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kinh Môn"; $district->name_global = "Kinh Mon district"; $district->alias = "kinh-mon";
		$district->district_id = "292"; $district->level = "Huyện"; $district->city_id = "30"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kim Thành"; $district->name_global = "Kim Thanh district"; $district->alias = "kim-thanh";
		$district->district_id = "293"; $district->level = "Huyện"; $district->city_id = "30"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thanh Hà"; $district->name_global = "Thanh Ha district"; $district->alias = "thanh-ha";
		$district->district_id = "294"; $district->level = "Huyện"; $district->city_id = "30"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cẩm Giàng"; $district->name_global = "Cam Giang district"; $district->alias = "cam-giang";
		$district->district_id = "295"; $district->level = "Huyện"; $district->city_id = "30"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bình Giang"; $district->name_global = "Binh Giang district"; $district->alias = "binh-giang";
		$district->district_id = "296"; $district->level = "Huyện"; $district->city_id = "30"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Gia Lộc"; $district->name_global = "Gia Loc district"; $district->alias = "gia-loc";
		$district->district_id = "297"; $district->level = "Huyện"; $district->city_id = "30"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tứ Kỳ"; $district->name_global = "Tu Ky district"; $district->alias = "tu-ky";
		$district->district_id = "298"; $district->level = "Huyện"; $district->city_id = "30"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ninh Giang"; $district->name_global = "Ninh Giang district"; $district->alias = "ninh-giang";
		$district->district_id = "299"; $district->level = "Huyện"; $district->city_id = "30"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thanh Miện"; $district->name_global = "Thanh Mien district"; $district->alias = "thanh-mien";
		$district->district_id = "300"; $district->level = "Huyện"; $district->city_id = "30"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hồng Bàng"; $district->name_global = "Hong Bang county"; $district->alias = "hong-bang";
		$district->district_id = "303"; $district->level = "Quận"; $district->city_id = "31"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ngô Quyền"; $district->name_global = "Ngo Quyen county"; $district->alias = "ngo-quyen";
		$district->district_id = "304"; $district->level = "Quận"; $district->city_id = "31"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lê Chân"; $district->name_global = "Le Chan county"; $district->alias = "le-chan";
		$district->district_id = "305"; $district->level = "Quận"; $district->city_id = "31"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hải An"; $district->name_global = "Hai An county"; $district->alias = "hai-an";
		$district->district_id = "306"; $district->level = "Quận"; $district->city_id = "31"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kiến An"; $district->name_global = "Kien An county"; $district->alias = "kien-an";
		$district->district_id = "307"; $district->level = "Quận"; $district->city_id = "31"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đồ Sơn"; $district->name_global = "Do Son county"; $district->alias = "do-son";
		$district->district_id = "308"; $district->level = "Quận"; $district->city_id = "31"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Dương Kinh"; $district->name_global = "Duong Kinh county"; $district->alias = "duong-kinh";
		$district->district_id = "309"; $district->level = "Quận"; $district->city_id = "31"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thuỷ Nguyên"; $district->name_global = "Thuy Nguyen district"; $district->alias = "thuy-nguyen";
		$district->district_id = "311"; $district->level = "Huyện"; $district->city_id = "31"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "An Dương"; $district->name_global = "An Duong district"; $district->alias = "an-duong";
		$district->district_id = "312"; $district->level = "Huyện"; $district->city_id = "31"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "An Lão"; $district->name_global = "An Lao district"; $district->alias = "an-lao";
		$district->district_id = "313"; $district->level = "Huyện"; $district->city_id = "31"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kiến Thuỵ"; $district->name_global = "Kien Thuy district"; $district->alias = "kien-thuy";
		$district->district_id = "314"; $district->level = "Huyện"; $district->city_id = "31"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tiên Lãng"; $district->name_global = "Tien Lang district"; $district->alias = "tien-lang";
		$district->district_id = "315"; $district->level = "Huyện"; $district->city_id = "31"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vĩnh Bảo"; $district->name_global = "Vinh Bao district"; $district->alias = "vinh-bao";
		$district->district_id = "316"; $district->level = "Huyện"; $district->city_id = "31"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cát Hải"; $district->name_global = "Cat Hai district"; $district->alias = "cat-hai";
		$district->district_id = "317"; $district->level = "Huyện"; $district->city_id = "31"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bạch Long Vĩ"; $district->name_global = "Bach Long Vi district"; $district->alias = "bach-long-vi";
		$district->district_id = "318"; $district->level = "Huyện"; $district->city_id = "31"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hưng Yên"; $district->name_global = "Hung Yen city"; $district->alias = "hung-yen";
		$district->district_id = "323"; $district->level = "Thành phố"; $district->city_id = "33"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Văn Lâm"; $district->name_global = "Van Lam district"; $district->alias = "van-lam";
		$district->district_id = "325"; $district->level = "Huyện"; $district->city_id = "33"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Văn Giang"; $district->name_global = "Van Giang district"; $district->alias = "van-giang";
		$district->district_id = "326"; $district->level = "Huyện"; $district->city_id = "33"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Mỹ"; $district->name_global = "Yen My district"; $district->alias = "yen-my";
		$district->district_id = "327"; $district->level = "Huyện"; $district->city_id = "33"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mỹ Hào"; $district->name_global = "My Hao district"; $district->alias = "my-hao";
		$district->district_id = "328"; $district->level = "Huyện"; $district->city_id = "33"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ân Thi"; $district->name_global = "An Thi district"; $district->alias = "an-thi";
		$district->district_id = "329"; $district->level = "Huyện"; $district->city_id = "33"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Khoái Châu"; $district->name_global = "Khoai Chau district"; $district->alias = "khoai-chau";
		$district->district_id = "330"; $district->level = "Huyện"; $district->city_id = "33"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kim Động"; $district->name_global = "Kim Dong district"; $district->alias = "kim-dong";
		$district->district_id = "331"; $district->level = "Huyện"; $district->city_id = "33"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tiên Lữ"; $district->name_global = "Tien Lu district"; $district->alias = "tien-lu";
		$district->district_id = "332"; $district->level = "Huyện"; $district->city_id = "33"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phù Cừ"; $district->name_global = "Phu Cu district"; $district->alias = "phu-cu";
		$district->district_id = "333"; $district->level = "Huyện"; $district->city_id = "33"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thái Bình"; $district->name_global = "Thai Binh city"; $district->alias = "thai-binh";
		$district->district_id = "336"; $district->level = "Thành phố"; $district->city_id = "34"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quỳnh Phụ"; $district->name_global = "Quynh Phu district"; $district->alias = "quynh-phu";
		$district->district_id = "338"; $district->level = "Huyện"; $district->city_id = "34"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hưng Hà"; $district->name_global = "Hung Ha district"; $district->alias = "hung-ha";
		$district->district_id = "339"; $district->level = "Huyện"; $district->city_id = "34"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đông Hưng"; $district->name_global = "Dong Hung district"; $district->alias = "dong-hung";
		$district->district_id = "340"; $district->level = "Huyện"; $district->city_id = "34"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thái Thụy"; $district->name_global = "Thai Thuy district"; $district->alias = "thai-thuy";
		$district->district_id = "341"; $district->level = "Huyện"; $district->city_id = "34"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tiền Hải"; $district->name_global = "Tien Hai district"; $district->alias = "tien-hai";
		$district->district_id = "342"; $district->level = "Huyện"; $district->city_id = "34"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kiến Xương"; $district->name_global = "Kien Xuong district"; $district->alias = "kien-xuong";
		$district->district_id = "343"; $district->level = "Huyện"; $district->city_id = "34"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vũ Thư"; $district->name_global = "Vu Thu district"; $district->alias = "vu-thu";
		$district->district_id = "344"; $district->level = "Huyện"; $district->city_id = "34"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phủ Lý"; $district->name_global = "Phu Ly city"; $district->alias = "phu-ly";
		$district->district_id = "347"; $district->level = "Thành phố"; $district->city_id = "35"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Duy Tiên"; $district->name_global = "Duy Tien district"; $district->alias = "duy-tien";
		$district->district_id = "349"; $district->level = "Huyện"; $district->city_id = "35"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kim Bảng"; $district->name_global = "Kim Bang district"; $district->alias = "kim-bang";
		$district->district_id = "350"; $district->level = "Huyện"; $district->city_id = "35"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thanh Liêm"; $district->name_global = "Thanh Liem district"; $district->alias = "thanh-liem";
		$district->district_id = "351"; $district->level = "Huyện"; $district->city_id = "35"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bình Lục"; $district->name_global = "Binh Luc district"; $district->alias = "binh-luc";
		$district->district_id = "352"; $district->level = "Huyện"; $district->city_id = "35"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lý Nhân"; $district->name_global = "Ly Nhan district"; $district->alias = "ly-nhan";
		$district->district_id = "353"; $district->level = "Huyện"; $district->city_id = "35"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nam Định"; $district->name_global = "Nam Dinh city"; $district->alias = "nam-dinh";
		$district->district_id = "356"; $district->level = "Thành phố"; $district->city_id = "36"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mỹ Lộc"; $district->name_global = "My Loc district"; $district->alias = "my-loc";
		$district->district_id = "358"; $district->level = "Huyện"; $district->city_id = "36"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vụ Bản"; $district->name_global = "Vu Ban district"; $district->alias = "vu-ban";
		$district->district_id = "359"; $district->level = "Huyện"; $district->city_id = "36"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ý Yên"; $district->name_global = "Y Yen district"; $district->alias = "y-yen";
		$district->district_id = "360"; $district->level = "Huyện"; $district->city_id = "36"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nghĩa Hưng"; $district->name_global = "Nghia Hung district"; $district->alias = "nghia-hung";
		$district->district_id = "361"; $district->level = "Huyện"; $district->city_id = "36"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nam Trực"; $district->name_global = "Nam Truc district"; $district->alias = "nam-truc";
		$district->district_id = "362"; $district->level = "Huyện"; $district->city_id = "36"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Trực Ninh"; $district->name_global = "Truc Ninh district"; $district->alias = "truc-ninh";
		$district->district_id = "363"; $district->level = "Huyện"; $district->city_id = "36"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Xuân Trường"; $district->name_global = "Xuan Truong district"; $district->alias = "xuan-truong";
		$district->district_id = "364"; $district->level = "Huyện"; $district->city_id = "36"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Giao Thủy"; $district->name_global = "Giao Thuy district"; $district->alias = "giao-thuy";
		$district->district_id = "365"; $district->level = "Huyện"; $district->city_id = "36"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hải Hậu"; $district->name_global = "Hai Hau district"; $district->alias = "hai-hau";
		$district->district_id = "366"; $district->level = "Huyện"; $district->city_id = "36"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ninh Bình"; $district->name_global = "Ninh Binh city"; $district->alias = "ninh-binh";
		$district->district_id = "369"; $district->level = "Thành phố"; $district->city_id = "37"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tam Điệp"; $district->name_global = "Tam Diep city"; $district->alias = "tam-diep";
		$district->district_id = "370"; $district->level = "Thành phố"; $district->city_id = "37"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nho Quan"; $district->name_global = "Nho Quan district"; $district->alias = "nho-quan";
		$district->district_id = "372"; $district->level = "Huyện"; $district->city_id = "37"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Gia Viễn"; $district->name_global = "Gia Vien district"; $district->alias = "gia-vien";
		$district->district_id = "373"; $district->level = "Huyện"; $district->city_id = "37"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hoa Lư"; $district->name_global = "Hoa Lu district"; $district->alias = "hoa-lu";
		$district->district_id = "374"; $district->level = "Huyện"; $district->city_id = "37"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Khánh"; $district->name_global = "Yen Khanh district"; $district->alias = "yen-khanh";
		$district->district_id = "375"; $district->level = "Huyện"; $district->city_id = "37"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kim Sơn"; $district->name_global = "Kim Son district"; $district->alias = "kim-son";
		$district->district_id = "376"; $district->level = "Huyện"; $district->city_id = "37"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Mô"; $district->name_global = "Yen Mo district"; $district->alias = "yen-mo";
		$district->district_id = "377"; $district->level = "Huyện"; $district->city_id = "37"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thanh Hóa"; $district->name_global = "Thanh Hoa city"; $district->alias = "thanh-hoa";
		$district->district_id = "380"; $district->level = "Thành phố"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bỉm Sơn"; $district->name_global = "Bim Son town"; $district->alias = "bim-son";
		$district->district_id = "381"; $district->level = "Thị xã"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sầm Sơn"; $district->name_global = "Sam Son city"; $district->alias = "sam-son";
		$district->district_id = "382"; $district->level = "Thành phố"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mường Lát"; $district->name_global = "Muong Lat district"; $district->alias = "muong-lat";
		$district->district_id = "384"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quan Hóa"; $district->name_global = "Quan Hoa district"; $district->alias = "quan-hoa";
		$district->district_id = "385"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bá Thước"; $district->name_global = "Ba Thuoc district"; $district->alias = "ba-thuoc";
		$district->district_id = "386"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quan Sơn"; $district->name_global = "Quan Son district"; $district->alias = "quan-son";
		$district->district_id = "387"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lang Chánh"; $district->name_global = "Lang Chanh district"; $district->alias = "lang-chanh";
		$district->district_id = "388"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ngọc Lặc"; $district->name_global = "Ngoc Lac district"; $district->alias = "ngoc-lac";
		$district->district_id = "389"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cẩm Thủy"; $district->name_global = "Cam Thuy district"; $district->alias = "cam-thuy";
		$district->district_id = "390"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thạch Thành"; $district->name_global = "Thach Thanh district"; $district->alias = "thach-thanh";
		$district->district_id = "391"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hà Trung"; $district->name_global = "Ha Trung district"; $district->alias = "ha-trung";
		$district->district_id = "392"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vĩnh Lộc"; $district->name_global = "Vinh Loc district"; $district->alias = "vinh-loc";
		$district->district_id = "393"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Định"; $district->name_global = "Yen Dinh district"; $district->alias = "yen-dinh";
		$district->district_id = "394"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thọ Xuân"; $district->name_global = "Tho Xuan district"; $district->alias = "tho-xuan";
		$district->district_id = "395"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thường Xuân"; $district->name_global = "Thuong Xuan district"; $district->alias = "thuong-xuan";
		$district->district_id = "396"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Triệu Sơn"; $district->name_global = "Trieu Son district"; $district->alias = "trieu-son";
		$district->district_id = "397"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thiệu Hóa"; $district->name_global = "Thieu Hoa district"; $district->alias = "thieu-hoa";
		$district->district_id = "398"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hoằng Hóa"; $district->name_global = "Hoang Hoa district"; $district->alias = "hoang-hoa";
		$district->district_id = "399"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hậu Lộc"; $district->name_global = "Hau Loc district"; $district->alias = "hau-loc";
		$district->district_id = "400"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nga Sơn"; $district->name_global = "Nga Son district"; $district->alias = "nga-son";
		$district->district_id = "401"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Như Xuân"; $district->name_global = "Nhu Xuan district"; $district->alias = "nhu-xuan";
		$district->district_id = "402"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Như Thanh"; $district->name_global = "Nhu Thanh district"; $district->alias = "nhu-thanh";
		$district->district_id = "403"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nông Cống"; $district->name_global = "Nong Cong district"; $district->alias = "nong-cong";
		$district->district_id = "404"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đông Sơn"; $district->name_global = "Dong Son district"; $district->alias = "dong-son";
		$district->district_id = "405"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quảng Xương"; $district->name_global = "Quang Xuong district"; $district->alias = "quang-xuong";
		$district->district_id = "406"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tĩnh Gia"; $district->name_global = "Tinh Gia district"; $district->alias = "tinh-gia";
		$district->district_id = "407"; $district->level = "Huyện"; $district->city_id = "38"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vinh"; $district->name_global = "Vinh city"; $district->alias = "vinh";
		$district->district_id = "412"; $district->level = "Thành phố"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cửa Lò"; $district->name_global = "Cua Lo town"; $district->alias = "cua-lo";
		$district->district_id = "413"; $district->level = "Thị xã"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thái Hoà"; $district->name_global = "Thai Hoa town"; $district->alias = "thai-hoa";
		$district->district_id = "414"; $district->level = "Thị xã"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quế Phong"; $district->name_global = "Que Phong district"; $district->alias = "que-phong";
		$district->district_id = "415"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quỳ Châu"; $district->name_global = "Quy Chau district"; $district->alias = "quy-chau";
		$district->district_id = "416"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kỳ Sơn"; $district->name_global = "Ky Son district"; $district->alias = "ky-son";
		$district->district_id = "417"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tương Dương"; $district->name_global = "Tuong Duong district"; $district->alias = "tuong-duong";
		$district->district_id = "418"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nghĩa Đàn"; $district->name_global = "Nghia Dan district"; $district->alias = "nghia-dan";
		$district->district_id = "419"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quỳ Hợp"; $district->name_global = "Quy Hop district"; $district->alias = "quy-hop";
		$district->district_id = "420"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quỳnh Lưu"; $district->name_global = "Quynh Luu district"; $district->alias = "quynh-luu";
		$district->district_id = "421"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Con Cuông"; $district->name_global = "Con Cuong district"; $district->alias = "con-cuong";
		$district->district_id = "422"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Kỳ"; $district->name_global = "Tan Ky district"; $district->alias = "tan-ky";
		$district->district_id = "423"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Anh Sơn"; $district->name_global = "Anh Son district"; $district->alias = "anh-son";
		$district->district_id = "424"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Diễn Châu"; $district->name_global = "Dien Chau district"; $district->alias = "dien-chau";
		$district->district_id = "425"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Yên Thành"; $district->name_global = "Yen Thanh district"; $district->alias = "yen-thanh";
		$district->district_id = "426"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đô Lương"; $district->name_global = "Do Luong district"; $district->alias = "do-luong";
		$district->district_id = "427"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thanh Chương"; $district->name_global = "Thanh Chuong district"; $district->alias = "thanh-chuong";
		$district->district_id = "428"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nghi Lộc"; $district->name_global = "Nghi Loc district"; $district->alias = "nghi-loc";
		$district->district_id = "429"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nam Đàn"; $district->name_global = "Nam Dan district"; $district->alias = "nam-dan";
		$district->district_id = "430"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hưng Nguyên"; $district->name_global = "Hung Nguyen district"; $district->alias = "hung-nguyen";
		$district->district_id = "431"; $district->level = "Huyện"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hoàng Mai"; $district->name_global = "Hoang Mai town"; $district->alias = "hoang-mai";
		$district->district_id = "432"; $district->level = "Thị xã"; $district->city_id = "40"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hà Tĩnh"; $district->name_global = "Ha Tinh city"; $district->alias = "ha-tinh";
		$district->district_id = "436"; $district->level = "Thành phố"; $district->city_id = "42"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hồng Lĩnh"; $district->name_global = "Hong Linh town"; $district->alias = "hong-linh";
		$district->district_id = "437"; $district->level = "Thị xã"; $district->city_id = "42"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hương Sơn"; $district->name_global = "Huong Son district"; $district->alias = "huong-son";
		$district->district_id = "439"; $district->level = "Huyện"; $district->city_id = "42"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đức Thọ"; $district->name_global = "Duc Tho district"; $district->alias = "duc-tho";
		$district->district_id = "440"; $district->level = "Huyện"; $district->city_id = "42"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vũ Quang"; $district->name_global = "Vu Quang district"; $district->alias = "vu-quang";
		$district->district_id = "441"; $district->level = "Huyện"; $district->city_id = "42"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nghi Xuân"; $district->name_global = "Nghi Xuan district"; $district->alias = "nghi-xuan";
		$district->district_id = "442"; $district->level = "Huyện"; $district->city_id = "42"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Can Lộc"; $district->name_global = "Can Loc district"; $district->alias = "can-loc";
		$district->district_id = "443"; $district->level = "Huyện"; $district->city_id = "42"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hương Khê"; $district->name_global = "Huong Khe district"; $district->alias = "huong-khe";
		$district->district_id = "444"; $district->level = "Huyện"; $district->city_id = "42"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thạch Hà"; $district->name_global = "Thach Ha district"; $district->alias = "thach-ha";
		$district->district_id = "445"; $district->level = "Huyện"; $district->city_id = "42"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cẩm Xuyên"; $district->name_global = "Cam Xuyen district"; $district->alias = "cam-xuyen";
		$district->district_id = "446"; $district->level = "Huyện"; $district->city_id = "42"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kỳ Anh"; $district->name_global = "Ky Anh district"; $district->alias = "ky-anh";
		$district->district_id = "447"; $district->level = "Huyện"; $district->city_id = "42"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lộc Hà"; $district->name_global = "Loc Ha district"; $district->alias = "loc-ha";
		$district->district_id = "448"; $district->level = "Huyện"; $district->city_id = "42"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kỳ Anh"; $district->name_global = "Ky Anh town"; $district->alias = "ky-anh";
		$district->district_id = "449"; $district->level = "Thị xã"; $district->city_id = "42"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đồng Hới"; $district->name_global = "Dong Hoi city"; $district->alias = "dong-hoi";
		$district->district_id = "450"; $district->level = "Thành phố"; $district->city_id = "44"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Minh Hóa"; $district->name_global = "Minh Hoa district"; $district->alias = "minh-hoa";
		$district->district_id = "452"; $district->level = "Huyện"; $district->city_id = "44"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tuyên Hóa"; $district->name_global = "Tuyen Hoa district"; $district->alias = "tuyen-hoa";
		$district->district_id = "453"; $district->level = "Huyện"; $district->city_id = "44"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quảng Trạch"; $district->name_global = "Quang Trach district"; $district->alias = "quang-trach";
		$district->district_id = "454"; $district->level = "Huyện"; $district->city_id = "44"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bố Trạch"; $district->name_global = "Bo Trach district"; $district->alias = "bo-trach";
		$district->district_id = "455"; $district->level = "Huyện"; $district->city_id = "44"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quảng Ninh"; $district->name_global = "Quang Ninh district"; $district->alias = "quang-ninh";
		$district->district_id = "456"; $district->level = "Huyện"; $district->city_id = "44"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lệ Thủy"; $district->name_global = "Le Thuy district"; $district->alias = "le-thuy";
		$district->district_id = "457"; $district->level = "Huyện"; $district->city_id = "44"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ba Đồn"; $district->name_global = "Ba Don town"; $district->alias = "ba-don";
		$district->district_id = "458"; $district->level = "Thị xã"; $district->city_id = "44"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đông Hà"; $district->name_global = "Dong Ha city"; $district->alias = "dong-ha";
		$district->district_id = "461"; $district->level = "Thành phố"; $district->city_id = "45"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quảng Trị"; $district->name_global = "Quang Tri town"; $district->alias = "quang-tri";
		$district->district_id = "462"; $district->level = "Thị xã"; $district->city_id = "45"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vĩnh Linh"; $district->name_global = "Vinh Linh district"; $district->alias = "vinh-linh";
		$district->district_id = "464"; $district->level = "Huyện"; $district->city_id = "45"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hướng Hóa"; $district->name_global = "Huong Hoa district"; $district->alias = "huong-hoa";
		$district->district_id = "465"; $district->level = "Huyện"; $district->city_id = "45"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Gio Linh"; $district->name_global = "Gio Linh district"; $district->alias = "gio-linh";
		$district->district_id = "466"; $district->level = "Huyện"; $district->city_id = "45"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đa Krông"; $district->name_global = "Da Krong district"; $district->alias = "da-krong";
		$district->district_id = "467"; $district->level = "Huyện"; $district->city_id = "45"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cam Lộ"; $district->name_global = "Cam Lo district"; $district->alias = "cam-lo";
		$district->district_id = "468"; $district->level = "Huyện"; $district->city_id = "45"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Triệu Phong"; $district->name_global = "Trieu Phong district"; $district->alias = "trieu-phong";
		$district->district_id = "469"; $district->level = "Huyện"; $district->city_id = "45"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hải Lăng"; $district->name_global = "Hai Lang district"; $district->alias = "hai-lang";
		$district->district_id = "470"; $district->level = "Huyện"; $district->city_id = "45"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cồn Cỏ"; $district->name_global = "Con Co district"; $district->alias = "con-co";
		$district->district_id = "471"; $district->level = "Huyện"; $district->city_id = "45"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Huế"; $district->name_global = "Hue city"; $district->alias = "hue";
		$district->district_id = "474"; $district->level = "Thành phố"; $district->city_id = "46"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phong Điền"; $district->name_global = "Phong Dien district"; $district->alias = "phong-dien";
		$district->district_id = "476"; $district->level = "Huyện"; $district->city_id = "46"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quảng Điền"; $district->name_global = "Quang Dien district"; $district->alias = "quang-dien";
		$district->district_id = "477"; $district->level = "Huyện"; $district->city_id = "46"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Vang"; $district->name_global = "Phu Vang district"; $district->alias = "phu-vang";
		$district->district_id = "478"; $district->level = "Huyện"; $district->city_id = "46"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hương Thủy"; $district->name_global = "Huong Thuy town"; $district->alias = "huong-thuy";
		$district->district_id = "479"; $district->level = "Thị xã"; $district->city_id = "46"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hương Trà"; $district->name_global = "Huong Tra town"; $district->alias = "huong-tra";
		$district->district_id = "480"; $district->level = "Thị xã"; $district->city_id = "46"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "A Lưới"; $district->name_global = "A Luoi district"; $district->alias = "a-luoi";
		$district->district_id = "481"; $district->level = "Huyện"; $district->city_id = "46"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Lộc"; $district->name_global = "Phu Loc district"; $district->alias = "phu-loc";
		$district->district_id = "482"; $district->level = "Huyện"; $district->city_id = "46"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nam Đông"; $district->name_global = "Nam Dong district"; $district->alias = "nam-dong";
		$district->district_id = "483"; $district->level = "Huyện"; $district->city_id = "46"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Liên Chiểu"; $district->name_global = "Lien Chieu county"; $district->alias = "lien-chieu";
		$district->district_id = "490"; $district->level = "Quận"; $district->city_id = "48"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thanh Khê"; $district->name_global = "Thanh Khe county"; $district->alias = "thanh-khe";
		$district->district_id = "491"; $district->level = "Quận"; $district->city_id = "48"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hải Châu"; $district->name_global = "Hai Chau county"; $district->alias = "hai-chau";
		$district->district_id = "492"; $district->level = "Quận"; $district->city_id = "48"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sơn Trà"; $district->name_global = "Son Tra county"; $district->alias = "son-tra";
		$district->district_id = "493"; $district->level = "Quận"; $district->city_id = "48"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ngũ Hành Sơn"; $district->name_global = "Ngu Hanh Son county"; $district->alias = "ngu-hanh-son";
		$district->district_id = "494"; $district->level = "Quận"; $district->city_id = "48"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cẩm Lệ"; $district->name_global = "Cam Le county"; $district->alias = "cam-le";
		$district->district_id = "495"; $district->level = "Quận"; $district->city_id = "48"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hòa Vang"; $district->name_global = "Hoa Vang district"; $district->alias = "hoa-vang";
		$district->district_id = "497"; $district->level = "Huyện"; $district->city_id = "48"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hoàng Sa"; $district->name_global = "Hoang Sa district"; $district->alias = "hoang-sa";
		$district->district_id = "498"; $district->level = "Huyện"; $district->city_id = "48"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tam Kỳ"; $district->name_global = "Tam Ky city"; $district->alias = "tam-ky";
		$district->district_id = "502"; $district->level = "Thành phố"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hội An"; $district->name_global = "Hoi An city"; $district->alias = "hoi-an";
		$district->district_id = "503"; $district->level = "Thành phố"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tây Giang"; $district->name_global = "Tay Giang district"; $district->alias = "tay-giang";
		$district->district_id = "504"; $district->level = "Huyện"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đông Giang"; $district->name_global = "Dong Giang district"; $district->alias = "dong-giang";
		$district->district_id = "505"; $district->level = "Huyện"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đại Lộc"; $district->name_global = "Dai Loc district"; $district->alias = "dai-loc";
		$district->district_id = "506"; $district->level = "Huyện"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Điện Bàn"; $district->name_global = "Dien Ban town"; $district->alias = "dien-ban";
		$district->district_id = "507"; $district->level = "Thị xã"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Duy Xuyên"; $district->name_global = "Duy Xuyen district"; $district->alias = "duy-xuyen";
		$district->district_id = "508"; $district->level = "Huyện"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quế Sơn"; $district->name_global = "Que Son district"; $district->alias = "que-son";
		$district->district_id = "509"; $district->level = "Huyện"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nam Giang"; $district->name_global = "Nam Giang district"; $district->alias = "nam-giang";
		$district->district_id = "510"; $district->level = "Huyện"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phước Sơn"; $district->name_global = "Phuoc Son district"; $district->alias = "phuoc-son";
		$district->district_id = "511"; $district->level = "Huyện"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hiệp Đức"; $district->name_global = "Hiep Duc district"; $district->alias = "hiep-duc";
		$district->district_id = "512"; $district->level = "Huyện"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thăng Bình"; $district->name_global = "Thang Binh district"; $district->alias = "thang-binh";
		$district->district_id = "513"; $district->level = "Huyện"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tiên Phước"; $district->name_global = "Tien Phuoc district"; $district->alias = "tien-phuoc";
		$district->district_id = "514"; $district->level = "Huyện"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bắc Trà My"; $district->name_global = "Bac Tra My district"; $district->alias = "bac-tra-my";
		$district->district_id = "515"; $district->level = "Huyện"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nam Trà My"; $district->name_global = "Nam Tra My district"; $district->alias = "nam-tra-my";
		$district->district_id = "516"; $district->level = "Huyện"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Núi Thành"; $district->name_global = "Nui Thanh district"; $district->alias = "nui-thanh";
		$district->district_id = "517"; $district->level = "Huyện"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Ninh"; $district->name_global = "Phu Ninh district"; $district->alias = "phu-ninh";
		$district->district_id = "518"; $district->level = "Huyện"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nông Sơn"; $district->name_global = "Nong Son district"; $district->alias = "nong-son";
		$district->district_id = "519"; $district->level = "Huyện"; $district->city_id = "49"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Quảng Ngãi"; $district->name_global = "Quang Ngai city"; $district->alias = "quang-ngai";
		$district->district_id = "522"; $district->level = "Thành phố"; $district->city_id = "51"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bình Sơn"; $district->name_global = "Binh Son district"; $district->alias = "binh-son";
		$district->district_id = "524"; $district->level = "Huyện"; $district->city_id = "51"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Trà Bồng"; $district->name_global = "Tra Bong district"; $district->alias = "tra-bong";
		$district->district_id = "525"; $district->level = "Huyện"; $district->city_id = "51"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tây Trà"; $district->name_global = "Tay Tra district"; $district->alias = "tay-tra";
		$district->district_id = "526"; $district->level = "Huyện"; $district->city_id = "51"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sơn Tịnh"; $district->name_global = "Son Tinh district"; $district->alias = "son-tinh";
		$district->district_id = "527"; $district->level = "Huyện"; $district->city_id = "51"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tư Nghĩa"; $district->name_global = "Tu Nghia district"; $district->alias = "tu-nghia";
		$district->district_id = "528"; $district->level = "Huyện"; $district->city_id = "51"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sơn Hà"; $district->name_global = "Son Ha district"; $district->alias = "son-ha";
		$district->district_id = "529"; $district->level = "Huyện"; $district->city_id = "51"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sơn Tây"; $district->name_global = "Son Tay district"; $district->alias = "son-tay";
		$district->district_id = "530"; $district->level = "Huyện"; $district->city_id = "51"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Minh Long"; $district->name_global = "Minh Long district"; $district->alias = "minh-long";
		$district->district_id = "531"; $district->level = "Huyện"; $district->city_id = "51"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nghĩa Hành"; $district->name_global = "Nghia Hanh district"; $district->alias = "nghia-hanh";
		$district->district_id = "532"; $district->level = "Huyện"; $district->city_id = "51"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mộ Đức"; $district->name_global = "Mo Duc district"; $district->alias = "mo-duc";
		$district->district_id = "533"; $district->level = "Huyện"; $district->city_id = "51"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đức Phổ"; $district->name_global = "Duc Pho district"; $district->alias = "duc-pho";
		$district->district_id = "534"; $district->level = "Huyện"; $district->city_id = "51"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ba Tơ"; $district->name_global = "Ba To district"; $district->alias = "ba-to";
		$district->district_id = "535"; $district->level = "Huyện"; $district->city_id = "51"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lý Sơn"; $district->name_global = "Ly Son district"; $district->alias = "ly-son";
		$district->district_id = "536"; $district->level = "Huyện"; $district->city_id = "51"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Qui Nhơn"; $district->name_global = "Qui Nhon city"; $district->alias = "qui-nhon";
		$district->district_id = "540"; $district->level = "Thành phố"; $district->city_id = "52"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "An Lão"; $district->name_global = "An Lao district"; $district->alias = "an-lao";
		$district->district_id = "542"; $district->level = "Huyện"; $district->city_id = "52"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hoài Nhơn"; $district->name_global = "Hoai Nhon district"; $district->alias = "hoai-nhon";
		$district->district_id = "543"; $district->level = "Huyện"; $district->city_id = "52"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hoài Ân"; $district->name_global = "Hoai An district"; $district->alias = "hoai-an";
		$district->district_id = "544"; $district->level = "Huyện"; $district->city_id = "52"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phù Mỹ"; $district->name_global = "Phu My district"; $district->alias = "phu-my";
		$district->district_id = "545"; $district->level = "Huyện"; $district->city_id = "52"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vĩnh Thạnh"; $district->name_global = "Vinh Thanh district"; $district->alias = "vinh-thanh";
		$district->district_id = "546"; $district->level = "Huyện"; $district->city_id = "52"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tây Sơn"; $district->name_global = "Tay Son district"; $district->alias = "tay-son";
		$district->district_id = "547"; $district->level = "Huyện"; $district->city_id = "52"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phù Cát"; $district->name_global = "Phu Cat district"; $district->alias = "phu-cat";
		$district->district_id = "548"; $district->level = "Huyện"; $district->city_id = "52"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "An Nhơn"; $district->name_global = "An Nhon town"; $district->alias = "an-nhon";
		$district->district_id = "549"; $district->level = "Thị xã"; $district->city_id = "52"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tuy Phước"; $district->name_global = "Tuy Phuoc district"; $district->alias = "tuy-phuoc";
		$district->district_id = "550"; $district->level = "Huyện"; $district->city_id = "52"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vân Canh"; $district->name_global = "Van Canh district"; $district->alias = "van-canh";
		$district->district_id = "551"; $district->level = "Huyện"; $district->city_id = "52"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tuy Hoà"; $district->name_global = "Tuy Hoa city"; $district->alias = "tuy-hoa";
		$district->district_id = "555"; $district->level = "Thành phố"; $district->city_id = "54"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sông Cầu"; $district->name_global = "Song Cau town"; $district->alias = "song-cau";
		$district->district_id = "557"; $district->level = "Thị xã"; $district->city_id = "54"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đồng Xuân"; $district->name_global = "Dong Xuan district"; $district->alias = "dong-xuan";
		$district->district_id = "558"; $district->level = "Huyện"; $district->city_id = "54"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tuy An"; $district->name_global = "Tuy An district"; $district->alias = "tuy-an";
		$district->district_id = "559"; $district->level = "Huyện"; $district->city_id = "54"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sơn Hòa"; $district->name_global = "Son Hoa district"; $district->alias = "son-hoa";
		$district->district_id = "560"; $district->level = "Huyện"; $district->city_id = "54"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sông Hinh"; $district->name_global = "Song Hinh district"; $district->alias = "song-hinh";
		$district->district_id = "561"; $district->level = "Huyện"; $district->city_id = "54"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tây Hoà"; $district->name_global = "Tay Hoa district"; $district->alias = "tay-hoa";
		$district->district_id = "562"; $district->level = "Huyện"; $district->city_id = "54"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Hoà"; $district->name_global = "Phu Hoa district"; $district->alias = "phu-hoa";
		$district->district_id = "563"; $district->level = "Huyện"; $district->city_id = "54"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đông Hòa"; $district->name_global = "Dong Hoa district"; $district->alias = "dong-hoa";
		$district->district_id = "564"; $district->level = "Huyện"; $district->city_id = "54"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nha Trang"; $district->name_global = "Nha Trang city"; $district->alias = "nha-trang";
		$district->district_id = "568"; $district->level = "Thành phố"; $district->city_id = "56"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cam Ranh"; $district->name_global = "Cam Ranh city"; $district->alias = "cam-ranh";
		$district->district_id = "569"; $district->level = "Thành phố"; $district->city_id = "56"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cam Lâm"; $district->name_global = "Cam Lam district"; $district->alias = "cam-lam";
		$district->district_id = "570"; $district->level = "Huyện"; $district->city_id = "56"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vạn Ninh"; $district->name_global = "Van Ninh district"; $district->alias = "van-ninh";
		$district->district_id = "571"; $district->level = "Huyện"; $district->city_id = "56"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ninh Hòa"; $district->name_global = "Ninh Hoa town"; $district->alias = "ninh-hoa";
		$district->district_id = "572"; $district->level = "Thị xã"; $district->city_id = "56"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Khánh Vĩnh"; $district->name_global = "Khanh Vinh district"; $district->alias = "khanh-vinh";
		$district->district_id = "573"; $district->level = "Huyện"; $district->city_id = "56"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Diên Khánh"; $district->name_global = "Dien Khanh district"; $district->alias = "dien-khanh";
		$district->district_id = "574"; $district->level = "Huyện"; $district->city_id = "56"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Khánh Sơn"; $district->name_global = "Khanh Son district"; $district->alias = "khanh-son";
		$district->district_id = "575"; $district->level = "Huyện"; $district->city_id = "56"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Trường Sa"; $district->name_global = "Truong Sa district"; $district->alias = "truong-sa";
		$district->district_id = "576"; $district->level = "Huyện"; $district->city_id = "56"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phan Rang - Tháp Chàm"; $district->name_global = "Phan Rang - Thap Cham city"; $district->alias = "phan-rang-thap-cham";
		$district->district_id = "582"; $district->level = "Thành phố"; $district->city_id = "58"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bác Ái"; $district->name_global = "Bac Ai district"; $district->alias = "bac-ai";
		$district->district_id = "584"; $district->level = "Huyện"; $district->city_id = "58"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ninh Sơn"; $district->name_global = "Ninh Son district"; $district->alias = "ninh-son";
		$district->district_id = "585"; $district->level = "Huyện"; $district->city_id = "58"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ninh Hải"; $district->name_global = "Ninh Hai district"; $district->alias = "ninh-hai";
		$district->district_id = "586"; $district->level = "Huyện"; $district->city_id = "58"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ninh Phước"; $district->name_global = "Ninh Phuoc district"; $district->alias = "ninh-phuoc";
		$district->district_id = "587"; $district->level = "Huyện"; $district->city_id = "58"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thuận Bắc"; $district->name_global = "Thuan Bac district"; $district->alias = "thuan-bac";
		$district->district_id = "588"; $district->level = "Huyện"; $district->city_id = "58"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thuận Nam"; $district->name_global = "Thuan Nam district"; $district->alias = "thuan-nam";
		$district->district_id = "589"; $district->level = "Huyện"; $district->city_id = "58"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phan Thiết"; $district->name_global = "Phan Thiet city"; $district->alias = "phan-thiet";
		$district->district_id = "593"; $district->level = "Thành phố"; $district->city_id = "60"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "La Gi"; $district->name_global = "La Gi town"; $district->alias = "la-gi";
		$district->district_id = "594"; $district->level = "Thị xã"; $district->city_id = "60"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tuy Phong"; $district->name_global = "Tuy Phong district"; $district->alias = "tuy-phong";
		$district->district_id = "595"; $district->level = "Huyện"; $district->city_id = "60"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bắc Bình"; $district->name_global = "Bac Binh district"; $district->alias = "bac-binh";
		$district->district_id = "596"; $district->level = "Huyện"; $district->city_id = "60"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hàm Thuận Bắc"; $district->name_global = "Ham Thuan Bac district"; $district->alias = "ham-thuan-bac";
		$district->district_id = "597"; $district->level = "Huyện"; $district->city_id = "60"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hàm Thuận Nam"; $district->name_global = "Ham Thuan Nam district"; $district->alias = "ham-thuan-nam";
		$district->district_id = "598"; $district->level = "Huyện"; $district->city_id = "60"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tánh Linh"; $district->name_global = "Tanh Linh district"; $district->alias = "tanh-linh";
		$district->district_id = "599"; $district->level = "Huyện"; $district->city_id = "60"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đức Linh"; $district->name_global = "Duc Linh district"; $district->alias = "duc-linh";
		$district->district_id = "600"; $district->level = "Huyện"; $district->city_id = "60"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hàm Tân"; $district->name_global = "Ham Tan district"; $district->alias = "ham-tan";
		$district->district_id = "601"; $district->level = "Huyện"; $district->city_id = "60"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Quí"; $district->name_global = "Phu Qui district"; $district->alias = "phu-qui";
		$district->district_id = "602"; $district->level = "Huyện"; $district->city_id = "60"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kon Tum"; $district->name_global = "Kon Tum city"; $district->alias = "kon-tum";
		$district->district_id = "608"; $district->level = "Thành phố"; $district->city_id = "62"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đắk Glei"; $district->name_global = "Dak Glei district"; $district->alias = "dak-glei";
		$district->district_id = "610"; $district->level = "Huyện"; $district->city_id = "62"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ngọc Hồi"; $district->name_global = "Ngoc Hoi district"; $district->alias = "ngoc-hoi";
		$district->district_id = "611"; $district->level = "Huyện"; $district->city_id = "62"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đắk Tô"; $district->name_global = "Dak To district"; $district->alias = "dak-to";
		$district->district_id = "612"; $district->level = "Huyện"; $district->city_id = "62"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kon Plông"; $district->name_global = "Kon Plong district"; $district->alias = "kon-plong";
		$district->district_id = "613"; $district->level = "Huyện"; $district->city_id = "62"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kon Rẫy"; $district->name_global = "Kon Ray district"; $district->alias = "kon-ray";
		$district->district_id = "614"; $district->level = "Huyện"; $district->city_id = "62"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đắk Hà"; $district->name_global = "Dak Ha district"; $district->alias = "dak-ha";
		$district->district_id = "615"; $district->level = "Huyện"; $district->city_id = "62"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sa Thầy"; $district->name_global = "Sa Thay district"; $district->alias = "sa-thay";
		$district->district_id = "616"; $district->level = "Huyện"; $district->city_id = "62"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tu Mơ Rông"; $district->name_global = "Tu Mo Rong district"; $district->alias = "tu-mo-rong";
		$district->district_id = "617"; $district->level = "Huyện"; $district->city_id = "62"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ia H' Drai"; $district->name_global = "Ia H' Drai district"; $district->alias = "ia-h'-drai";
		$district->district_id = "618"; $district->level = "Huyện"; $district->city_id = "62"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Pleiku"; $district->name_global = "Pleiku city"; $district->alias = "pleiku";
		$district->district_id = "622"; $district->level = "Thành phố"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "An Khê"; $district->name_global = "An Khe town"; $district->alias = "an-khe";
		$district->district_id = "623"; $district->level = "Thị xã"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ayun Pa"; $district->name_global = "Ayun Pa town"; $district->alias = "ayun-pa";
		$district->district_id = "624"; $district->level = "Thị xã"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "KBang"; $district->name_global = "KBang district"; $district->alias = "kbang";
		$district->district_id = "625"; $district->level = "Huyện"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đăk Đoa"; $district->name_global = "Dak Doa district"; $district->alias = "dak-doa";
		$district->district_id = "626"; $district->level = "Huyện"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Chư Păh"; $district->name_global = "Chu Pah district"; $district->alias = "chu-pah";
		$district->district_id = "627"; $district->level = "Huyện"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ia Grai"; $district->name_global = "Ia Grai district"; $district->alias = "ia-grai";
		$district->district_id = "628"; $district->level = "Huyện"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mang Yang"; $district->name_global = "Mang Yang district"; $district->alias = "mang-yang";
		$district->district_id = "629"; $district->level = "Huyện"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kông Chro"; $district->name_global = "Kong Chro district"; $district->alias = "kong-chro";
		$district->district_id = "630"; $district->level = "Huyện"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đức Cơ"; $district->name_global = "Duc Co district"; $district->alias = "duc-co";
		$district->district_id = "631"; $district->level = "Huyện"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Chư Prông"; $district->name_global = "Chu Prong district"; $district->alias = "chu-prong";
		$district->district_id = "632"; $district->level = "Huyện"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Chư Sê"; $district->name_global = "Chu Se district"; $district->alias = "chu-se";
		$district->district_id = "633"; $district->level = "Huyện"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đăk Pơ"; $district->name_global = "Dak Po district"; $district->alias = "dak-po";
		$district->district_id = "634"; $district->level = "Huyện"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ia Pa"; $district->name_global = "Ia Pa district"; $district->alias = "ia-pa";
		$district->district_id = "635"; $district->level = "Huyện"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Krông Pa"; $district->name_global = "Krong Pa district"; $district->alias = "krong-pa";
		$district->district_id = "637"; $district->level = "Huyện"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Thiện"; $district->name_global = "Phu Thien district"; $district->alias = "phu-thien";
		$district->district_id = "638"; $district->level = "Huyện"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Chư Pưh"; $district->name_global = "Chu Puh district"; $district->alias = "chu-puh";
		$district->district_id = "639"; $district->level = "Huyện"; $district->city_id = "64"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Buôn Ma Thuột"; $district->name_global = "Buon Ma Thuot city"; $district->alias = "buon-ma-thuot";
		$district->district_id = "643"; $district->level = "Thành phố"; $district->city_id = "66"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Buôn Hồ"; $district->name_global = "Buon Ho town"; $district->alias = "buon-ho";
		$district->district_id = "644"; $district->level = "Thị xã"; $district->city_id = "66"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ea H'leo"; $district->name_global = "Ea H'leo district"; $district->alias = "ea-h'leo";
		$district->district_id = "645"; $district->level = "Huyện"; $district->city_id = "66"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ea Súp"; $district->name_global = "Ea Sup district"; $district->alias = "ea-sup";
		$district->district_id = "646"; $district->level = "Huyện"; $district->city_id = "66"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Buôn Đôn"; $district->name_global = "Buon Don district"; $district->alias = "buon-don";
		$district->district_id = "647"; $district->level = "Huyện"; $district->city_id = "66"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cư M'gar"; $district->name_global = "Cu M'gar district"; $district->alias = "cu-m'gar";
		$district->district_id = "648"; $district->level = "Huyện"; $district->city_id = "66"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Krông Búk"; $district->name_global = "Krong Buk district"; $district->alias = "krong-buk";
		$district->district_id = "649"; $district->level = "Huyện"; $district->city_id = "66"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Krông Năng"; $district->name_global = "Krong Nang district"; $district->alias = "krong-nang";
		$district->district_id = "650"; $district->level = "Huyện"; $district->city_id = "66"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ea Kar"; $district->name_global = "Ea Kar district"; $district->alias = "ea-kar";
		$district->district_id = "651"; $district->level = "Huyện"; $district->city_id = "66"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "M'Đrắk"; $district->name_global = "M'Drak district"; $district->alias = "m'drak";
		$district->district_id = "652"; $district->level = "Huyện"; $district->city_id = "66"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Krông Bông"; $district->name_global = "Krong Bong district"; $district->alias = "krong-bong";
		$district->district_id = "653"; $district->level = "Huyện"; $district->city_id = "66"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Krông Pắc"; $district->name_global = "Krong Pac district"; $district->alias = "krong-pac";
		$district->district_id = "654"; $district->level = "Huyện"; $district->city_id = "66"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Krông A Na"; $district->name_global = "Krong A Na district"; $district->alias = "krong-a-na";
		$district->district_id = "655"; $district->level = "Huyện"; $district->city_id = "66"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lắk"; $district->name_global = "Lak district"; $district->alias = "lak";
		$district->district_id = "656"; $district->level = "Huyện"; $district->city_id = "66"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cư Kuin"; $district->name_global = "Cu Kuin district"; $district->alias = "cu-kuin";
		$district->district_id = "657"; $district->level = "Huyện"; $district->city_id = "66"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Gia Nghĩa"; $district->name_global = "Gia Nghia town"; $district->alias = "gia-nghia";
		$district->district_id = "660"; $district->level = "Thị xã"; $district->city_id = "67"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đăk Glong"; $district->name_global = "Dak Glong district"; $district->alias = "dak-glong";
		$district->district_id = "661"; $district->level = "Huyện"; $district->city_id = "67"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cư Jút"; $district->name_global = "Cu Jut district"; $district->alias = "cu-jut";
		$district->district_id = "662"; $district->level = "Huyện"; $district->city_id = "67"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đắk Mil"; $district->name_global = "Dak Mil district"; $district->alias = "dak-mil";
		$district->district_id = "663"; $district->level = "Huyện"; $district->city_id = "67"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Krông Nô"; $district->name_global = "Krong No district"; $district->alias = "krong-no";
		$district->district_id = "664"; $district->level = "Huyện"; $district->city_id = "67"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đắk Song"; $district->name_global = "Dak Song district"; $district->alias = "dak-song";
		$district->district_id = "665"; $district->level = "Huyện"; $district->city_id = "67"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đắk R'Lấp"; $district->name_global = "Dak R'Lap district"; $district->alias = "dak-r'lap";
		$district->district_id = "666"; $district->level = "Huyện"; $district->city_id = "67"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tuy Đức"; $district->name_global = "Tuy Duc district"; $district->alias = "tuy-duc";
		$district->district_id = "667"; $district->level = "Huyện"; $district->city_id = "67"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đà Lạt"; $district->name_global = "Da Lat city"; $district->alias = "da-lat";
		$district->district_id = "672"; $district->level = "Thành phố"; $district->city_id = "68"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bảo Lộc"; $district->name_global = "Bao Loc city"; $district->alias = "bao-loc";
		$district->district_id = "673"; $district->level = "Thành phố"; $district->city_id = "68"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đam Rông"; $district->name_global = "Dam Rong district"; $district->alias = "dam-rong";
		$district->district_id = "674"; $district->level = "Huyện"; $district->city_id = "68"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lạc Dương"; $district->name_global = "Lac Duong district"; $district->alias = "lac-duong";
		$district->district_id = "675"; $district->level = "Huyện"; $district->city_id = "68"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lâm Hà"; $district->name_global = "Lam Ha district"; $district->alias = "lam-ha";
		$district->district_id = "676"; $district->level = "Huyện"; $district->city_id = "68"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đơn Dương"; $district->name_global = "Don Duong district"; $district->alias = "don-duong";
		$district->district_id = "677"; $district->level = "Huyện"; $district->city_id = "68"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đức Trọng"; $district->name_global = "Duc Trong district"; $district->alias = "duc-trong";
		$district->district_id = "678"; $district->level = "Huyện"; $district->city_id = "68"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Di Linh"; $district->name_global = "Di Linh district"; $district->alias = "di-linh";
		$district->district_id = "679"; $district->level = "Huyện"; $district->city_id = "68"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bảo Lâm"; $district->name_global = "Bao Lam district"; $district->alias = "bao-lam";
		$district->district_id = "680"; $district->level = "Huyện"; $district->city_id = "68"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đạ Huoai"; $district->name_global = "Da Huoai district"; $district->alias = "da-huoai";
		$district->district_id = "681"; $district->level = "Huyện"; $district->city_id = "68"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đạ Tẻh"; $district->name_global = "Da Teh district"; $district->alias = "da-teh";
		$district->district_id = "682"; $district->level = "Huyện"; $district->city_id = "68"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cát Tiên"; $district->name_global = "Cat Tien district"; $district->alias = "cat-tien";
		$district->district_id = "683"; $district->level = "Huyện"; $district->city_id = "68"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phước Long"; $district->name_global = "Phuoc Long town"; $district->alias = "phuoc-long";
		$district->district_id = "688"; $district->level = "Thị xã"; $district->city_id = "70"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đồng Xoài"; $district->name_global = "Dong Xoai town"; $district->alias = "dong-xoai";
		$district->district_id = "689"; $district->level = "Thị xã"; $district->city_id = "70"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bình Long"; $district->name_global = "Binh Long town"; $district->alias = "binh-long";
		$district->district_id = "690"; $district->level = "Thị xã"; $district->city_id = "70"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bù Gia Mập"; $district->name_global = "Bu Gia Map district"; $district->alias = "bu-gia-map";
		$district->district_id = "691"; $district->level = "Huyện"; $district->city_id = "70"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lộc Ninh"; $district->name_global = "Loc Ninh district"; $district->alias = "loc-ninh";
		$district->district_id = "692"; $district->level = "Huyện"; $district->city_id = "70"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bù Đốp"; $district->name_global = "Bu Dop district"; $district->alias = "bu-dop";
		$district->district_id = "693"; $district->level = "Huyện"; $district->city_id = "70"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hớn Quản"; $district->name_global = "Hon Quan district"; $district->alias = "hon-quan";
		$district->district_id = "694"; $district->level = "Huyện"; $district->city_id = "70"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đồng Phú"; $district->name_global = "Dong Phu district"; $district->alias = "dong-phu";
		$district->district_id = "695"; $district->level = "Huyện"; $district->city_id = "70"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bù Đăng"; $district->name_global = "Bu Dang district"; $district->alias = "bu-dang";
		$district->district_id = "696"; $district->level = "Huyện"; $district->city_id = "70"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Chơn Thành"; $district->name_global = "Chon Thanh district"; $district->alias = "chon-thanh";
		$district->district_id = "697"; $district->level = "Huyện"; $district->city_id = "70"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Riềng"; $district->name_global = "Phu Rieng district"; $district->alias = "phu-rieng";
		$district->district_id = "698"; $district->level = "Huyện"; $district->city_id = "70"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tây Ninh"; $district->name_global = "Tay Ninh city"; $district->alias = "tay-ninh";
		$district->district_id = "703"; $district->level = "Thành phố"; $district->city_id = "72"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Biên"; $district->name_global = "Tan Bien district"; $district->alias = "tan-bien";
		$district->district_id = "705"; $district->level = "Huyện"; $district->city_id = "72"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Châu"; $district->name_global = "Tan Chau district"; $district->alias = "tan-chau";
		$district->district_id = "706"; $district->level = "Huyện"; $district->city_id = "72"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Dương Minh Châu"; $district->name_global = "Duong Minh Chau district"; $district->alias = "duong-minh-chau";
		$district->district_id = "707"; $district->level = "Huyện"; $district->city_id = "72"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Châu Thành"; $district->name_global = "Chau Thanh district"; $district->alias = "chau-thanh";
		$district->district_id = "708"; $district->level = "Huyện"; $district->city_id = "72"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hòa Thành"; $district->name_global = "Hoa Thanh district"; $district->alias = "hoa-thanh";
		$district->district_id = "709"; $district->level = "Huyện"; $district->city_id = "72"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Gò Dầu"; $district->name_global = "Go Dau district"; $district->alias = "go-dau";
		$district->district_id = "710"; $district->level = "Huyện"; $district->city_id = "72"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bến Cầu"; $district->name_global = "Ben Cau district"; $district->alias = "ben-cau";
		$district->district_id = "711"; $district->level = "Huyện"; $district->city_id = "72"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Trảng Bàng"; $district->name_global = "Trang Bang district"; $district->alias = "trang-bang";
		$district->district_id = "712"; $district->level = "Huyện"; $district->city_id = "72"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thủ Dầu Một"; $district->name_global = "Thu Dau Mot city"; $district->alias = "thu-dau-mot";
		$district->district_id = "718"; $district->level = "Thành phố"; $district->city_id = "74"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bàu Bàng"; $district->name_global = "Bau Bang district"; $district->alias = "bau-bang";
		$district->district_id = "719"; $district->level = "Huyện"; $district->city_id = "74"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Dầu Tiếng"; $district->name_global = "Dau Tieng district"; $district->alias = "dau-tieng";
		$district->district_id = "720"; $district->level = "Huyện"; $district->city_id = "74"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bến Cát"; $district->name_global = "Ben Cat town"; $district->alias = "ben-cat";
		$district->district_id = "721"; $district->level = "Thị xã"; $district->city_id = "74"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Giáo"; $district->name_global = "Phu Giao district"; $district->alias = "phu-giao";
		$district->district_id = "722"; $district->level = "Huyện"; $district->city_id = "74"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Uyên"; $district->name_global = "Tan Uyen town"; $district->alias = "tan-uyen";
		$district->district_id = "723"; $district->level = "Thị xã"; $district->city_id = "74"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Dĩ An"; $district->name_global = "Di An town"; $district->alias = "di-an";
		$district->district_id = "724"; $district->level = "Thị xã"; $district->city_id = "74"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thuận An"; $district->name_global = "Thuan An town"; $district->alias = "thuan-an";
		$district->district_id = "725"; $district->level = "Thị xã"; $district->city_id = "74"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bắc Tân Uyên"; $district->name_global = "Bac Tan Uyen district"; $district->alias = "bac-tan-uyen";
		$district->district_id = "726"; $district->level = "Huyện"; $district->city_id = "74"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Biên Hòa"; $district->name_global = "Bien Hoa city"; $district->alias = "bien-hoa";
		$district->district_id = "731"; $district->level = "Thành phố"; $district->city_id = "75"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Long Khánh"; $district->name_global = "Long Khanh town"; $district->alias = "long-khanh";
		$district->district_id = "732"; $district->level = "Thị xã"; $district->city_id = "75"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Phú"; $district->name_global = "Tan Phu district"; $district->alias = "tan-phu";
		$district->district_id = "734"; $district->level = "Huyện"; $district->city_id = "75"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vĩnh Cửu"; $district->name_global = "Vinh Cuu district"; $district->alias = "vinh-cuu";
		$district->district_id = "735"; $district->level = "Huyện"; $district->city_id = "75"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Định Quán"; $district->name_global = "Dinh Quan district"; $district->alias = "dinh-quan";
		$district->district_id = "736"; $district->level = "Huyện"; $district->city_id = "75"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Trảng Bom"; $district->name_global = "Trang Bom district"; $district->alias = "trang-bom";
		$district->district_id = "737"; $district->level = "Huyện"; $district->city_id = "75"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thống Nhất"; $district->name_global = "Thong Nhat district"; $district->alias = "thong-nhat";
		$district->district_id = "738"; $district->level = "Huyện"; $district->city_id = "75"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cẩm Mỹ"; $district->name_global = "Cam My district"; $district->alias = "cam-my";
		$district->district_id = "739"; $district->level = "Huyện"; $district->city_id = "75"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Long Thành"; $district->name_global = "Long Thanh district"; $district->alias = "long-thanh";
		$district->district_id = "740"; $district->level = "Huyện"; $district->city_id = "75"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Xuân Lộc"; $district->name_global = "Xuan Loc district"; $district->alias = "xuan-loc";
		$district->district_id = "741"; $district->level = "Huyện"; $district->city_id = "75"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nhơn Trạch"; $district->name_global = "Nhon Trach district"; $district->alias = "nhon-trach";
		$district->district_id = "742"; $district->level = "Huyện"; $district->city_id = "75"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vũng Tàu"; $district->name_global = "Vung Tau city"; $district->alias = "vung-tau";
		$district->district_id = "747"; $district->level = "Thành phố"; $district->city_id = "77"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bà Rịa"; $district->name_global = "Ba Ria city"; $district->alias = "ba-ria";
		$district->district_id = "748"; $district->level = "Thành phố"; $district->city_id = "77"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Châu Đức"; $district->name_global = "Chau Duc district"; $district->alias = "chau-duc";
		$district->district_id = "750"; $district->level = "Huyện"; $district->city_id = "77"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Xuyên Mộc"; $district->name_global = "Xuyen Moc district"; $district->alias = "xuyen-moc";
		$district->district_id = "751"; $district->level = "Huyện"; $district->city_id = "77"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Long Điền"; $district->name_global = "Long Dien district"; $district->alias = "long-dien";
		$district->district_id = "752"; $district->level = "Huyện"; $district->city_id = "77"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đất Đỏ"; $district->name_global = "Dat Do district"; $district->alias = "dat-do";
		$district->district_id = "753"; $district->level = "Huyện"; $district->city_id = "77"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Thành"; $district->name_global = "Tan Thanh district"; $district->alias = "tan-thanh";
		$district->district_id = "754"; $district->level = "Huyện"; $district->city_id = "77"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Côn Đảo"; $district->name_global = "Con Dao district"; $district->alias = "con-dao";
		$district->district_id = "755"; $district->level = "Huyện"; $district->city_id = "77"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "1"; $district->name_global = "1 county"; $district->alias = "1";
		$district->district_id = "760"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "12"; $district->name_global = "12 county"; $district->alias = "12";
		$district->district_id = "761"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thủ Đức"; $district->name_global = "Thu Duc county"; $district->alias = "thu-duc";
		$district->district_id = "762"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "9"; $district->name_global = "9 county"; $district->alias = "9";
		$district->district_id = "763"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Gò Vấp"; $district->name_global = "Go Vap county"; $district->alias = "go-vap";
		$district->district_id = "764"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bình Thạnh"; $district->name_global = "Binh Thanh county"; $district->alias = "binh-thanh";
		$district->district_id = "765"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Bình"; $district->name_global = "Tan Binh county"; $district->alias = "tan-binh";
		$district->district_id = "766"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Phú"; $district->name_global = "Tan Phu county"; $district->alias = "tan-phu";
		$district->district_id = "767"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Nhuận"; $district->name_global = "Phu Nhuan county"; $district->alias = "phu-nhuan";
		$district->district_id = "768"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "2"; $district->name_global = "2 county"; $district->alias = "2";
		$district->district_id = "769"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "3"; $district->name_global = "3 county"; $district->alias = "3";
		$district->district_id = "770"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "10"; $district->name_global = "10 county"; $district->alias = "10";
		$district->district_id = "771"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "11"; $district->name_global = "11 county"; $district->alias = "11";
		$district->district_id = "772"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "4"; $district->name_global = "4 county"; $district->alias = "4";
		$district->district_id = "773"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "5"; $district->name_global = "5 county"; $district->alias = "5";
		$district->district_id = "774"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "6"; $district->name_global = "6 county"; $district->alias = "6";
		$district->district_id = "775"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "8"; $district->name_global = "8 county"; $district->alias = "8";
		$district->district_id = "776"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bình Tân"; $district->name_global = "Binh Tan county"; $district->alias = "binh-tan";
		$district->district_id = "777"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "7"; $district->name_global = "7 county"; $district->alias = "7";
		$district->district_id = "778"; $district->level = "Quận"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Củ Chi"; $district->name_global = "Cu Chi district"; $district->alias = "cu-chi";
		$district->district_id = "783"; $district->level = "Huyện"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hóc Môn"; $district->name_global = "Hoc Mon district"; $district->alias = "hoc-mon";
		$district->district_id = "784"; $district->level = "Huyện"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bình Chánh"; $district->name_global = "Binh Chanh district"; $district->alias = "binh-chanh";
		$district->district_id = "785"; $district->level = "Huyện"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Nhà Bè"; $district->name_global = "Nha Be district"; $district->alias = "nha-be";
		$district->district_id = "786"; $district->level = "Huyện"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cần Giờ"; $district->name_global = "Can Gio district"; $district->alias = "can-gio";
		$district->district_id = "787"; $district->level = "Huyện"; $district->city_id = "79"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân An"; $district->name_global = "Tan An city"; $district->alias = "tan-an";
		$district->district_id = "794"; $district->level = "Thành phố"; $district->city_id = "80"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kiến Tường"; $district->name_global = "Kien Tuong town"; $district->alias = "kien-tuong";
		$district->district_id = "795"; $district->level = "Thị xã"; $district->city_id = "80"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Hưng"; $district->name_global = "Tan Hung district"; $district->alias = "tan-hung";
		$district->district_id = "796"; $district->level = "Huyện"; $district->city_id = "80"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vĩnh Hưng"; $district->name_global = "Vinh Hung district"; $district->alias = "vinh-hung";
		$district->district_id = "797"; $district->level = "Huyện"; $district->city_id = "80"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mộc Hóa"; $district->name_global = "Moc Hoa district"; $district->alias = "moc-hoa";
		$district->district_id = "798"; $district->level = "Huyện"; $district->city_id = "80"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Thạnh"; $district->name_global = "Tan Thanh district"; $district->alias = "tan-thanh";
		$district->district_id = "799"; $district->level = "Huyện"; $district->city_id = "80"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thạnh Hóa"; $district->name_global = "Thanh Hoa district"; $district->alias = "thanh-hoa";
		$district->district_id = "800"; $district->level = "Huyện"; $district->city_id = "80"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đức Huệ"; $district->name_global = "Duc Hue district"; $district->alias = "duc-hue";
		$district->district_id = "801"; $district->level = "Huyện"; $district->city_id = "80"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đức Hòa"; $district->name_global = "Duc Hoa district"; $district->alias = "duc-hoa";
		$district->district_id = "802"; $district->level = "Huyện"; $district->city_id = "80"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bến Lức"; $district->name_global = "Ben Luc district"; $district->alias = "ben-luc";
		$district->district_id = "803"; $district->level = "Huyện"; $district->city_id = "80"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thủ Thừa"; $district->name_global = "Thu Thua district"; $district->alias = "thu-thua";
		$district->district_id = "804"; $district->level = "Huyện"; $district->city_id = "80"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Trụ"; $district->name_global = "Tan Tru district"; $district->alias = "tan-tru";
		$district->district_id = "805"; $district->level = "Huyện"; $district->city_id = "80"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cần Đước"; $district->name_global = "Can Duoc district"; $district->alias = "can-duoc";
		$district->district_id = "806"; $district->level = "Huyện"; $district->city_id = "80"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cần Giuộc"; $district->name_global = "Can Giuoc district"; $district->alias = "can-giuoc";
		$district->district_id = "807"; $district->level = "Huyện"; $district->city_id = "80"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Châu Thành"; $district->name_global = "Chau Thanh district"; $district->alias = "chau-thanh";
		$district->district_id = "808"; $district->level = "Huyện"; $district->city_id = "80"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mỹ Tho"; $district->name_global = "My Tho city"; $district->alias = "my-tho";
		$district->district_id = "815"; $district->level = "Thành phố"; $district->city_id = "82"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Gò Công"; $district->name_global = "Go Cong town"; $district->alias = "go-cong";
		$district->district_id = "816"; $district->level = "Thị xã"; $district->city_id = "82"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cai Lậy"; $district->name_global = "Cai Lay town"; $district->alias = "cai-lay";
		$district->district_id = "817"; $district->level = "Thị xã"; $district->city_id = "82"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Phước"; $district->name_global = "Tan Phuoc district"; $district->alias = "tan-phuoc";
		$district->district_id = "818"; $district->level = "Huyện"; $district->city_id = "82"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cái Bè"; $district->name_global = "Cai Be district"; $district->alias = "cai-be";
		$district->district_id = "819"; $district->level = "Huyện"; $district->city_id = "82"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cai Lậy"; $district->name_global = "Cai Lay district"; $district->alias = "cai-lay";
		$district->district_id = "820"; $district->level = "Huyện"; $district->city_id = "82"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Châu Thành"; $district->name_global = "Chau Thanh district"; $district->alias = "chau-thanh";
		$district->district_id = "821"; $district->level = "Huyện"; $district->city_id = "82"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Chợ Gạo"; $district->name_global = "Cho Gao district"; $district->alias = "cho-gao";
		$district->district_id = "822"; $district->level = "Huyện"; $district->city_id = "82"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Gò Công Tây"; $district->name_global = "Go Cong Tay district"; $district->alias = "go-cong-tay";
		$district->district_id = "823"; $district->level = "Huyện"; $district->city_id = "82"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Gò Công Đông"; $district->name_global = "Go Cong Dong district"; $district->alias = "go-cong-dong";
		$district->district_id = "824"; $district->level = "Huyện"; $district->city_id = "82"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Phú Đông"; $district->name_global = "Tan Phu Dong district"; $district->alias = "tan-phu-dong";
		$district->district_id = "825"; $district->level = "Huyện"; $district->city_id = "82"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bến Tre"; $district->name_global = "Ben Tre city"; $district->alias = "ben-tre";
		$district->district_id = "829"; $district->level = "Thành phố"; $district->city_id = "83"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Châu Thành"; $district->name_global = "Chau Thanh district"; $district->alias = "chau-thanh";
		$district->district_id = "831"; $district->level = "Huyện"; $district->city_id = "83"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Chợ Lách"; $district->name_global = "Cho Lach district"; $district->alias = "cho-lach";
		$district->district_id = "832"; $district->level = "Huyện"; $district->city_id = "83"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mỏ Cày Nam"; $district->name_global = "Mo Cay Nam district"; $district->alias = "mo-cay-nam";
		$district->district_id = "833"; $district->level = "Huyện"; $district->city_id = "83"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Giồng Trôm"; $district->name_global = "Giong Trom district"; $district->alias = "giong-trom";
		$district->district_id = "834"; $district->level = "Huyện"; $district->city_id = "83"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bình Đại"; $district->name_global = "Binh Dai district"; $district->alias = "binh-dai";
		$district->district_id = "835"; $district->level = "Huyện"; $district->city_id = "83"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ba Tri"; $district->name_global = "Ba Tri district"; $district->alias = "ba-tri";
		$district->district_id = "836"; $district->level = "Huyện"; $district->city_id = "83"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thạnh Phú"; $district->name_global = "Thanh Phu district"; $district->alias = "thanh-phu";
		$district->district_id = "837"; $district->level = "Huyện"; $district->city_id = "83"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mỏ Cày Bắc"; $district->name_global = "Mo Cay Bac district"; $district->alias = "mo-cay-bac";
		$district->district_id = "838"; $district->level = "Huyện"; $district->city_id = "83"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Trà Vinh"; $district->name_global = "Tra Vinh city"; $district->alias = "tra-vinh";
		$district->district_id = "842"; $district->level = "Thành phố"; $district->city_id = "84"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Càng Long"; $district->name_global = "Cang Long district"; $district->alias = "cang-long";
		$district->district_id = "844"; $district->level = "Huyện"; $district->city_id = "84"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cầu Kè"; $district->name_global = "Cau Ke district"; $district->alias = "cau-ke";
		$district->district_id = "845"; $district->level = "Huyện"; $district->city_id = "84"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tiểu Cần"; $district->name_global = "Tieu Can district"; $district->alias = "tieu-can";
		$district->district_id = "846"; $district->level = "Huyện"; $district->city_id = "84"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Châu Thành"; $district->name_global = "Chau Thanh district"; $district->alias = "chau-thanh";
		$district->district_id = "847"; $district->level = "Huyện"; $district->city_id = "84"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cầu Ngang"; $district->name_global = "Cau Ngang district"; $district->alias = "cau-ngang";
		$district->district_id = "848"; $district->level = "Huyện"; $district->city_id = "84"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Trà Cú"; $district->name_global = "Tra Cu district"; $district->alias = "tra-cu";
		$district->district_id = "849"; $district->level = "Huyện"; $district->city_id = "84"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Duyên Hải"; $district->name_global = "Duyen Hai district"; $district->alias = "duyen-hai";
		$district->district_id = "850"; $district->level = "Huyện"; $district->city_id = "84"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Duyên Hải"; $district->name_global = "Duyen Hai town"; $district->alias = "duyen-hai";
		$district->district_id = "851"; $district->level = "Thị xã"; $district->city_id = "84"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vĩnh Long"; $district->name_global = "Vinh Long city"; $district->alias = "vinh-long";
		$district->district_id = "855"; $district->level = "Thành phố"; $district->city_id = "86"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Long Hồ"; $district->name_global = "Long Ho district"; $district->alias = "long-ho";
		$district->district_id = "857"; $district->level = "Huyện"; $district->city_id = "86"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mang Thít"; $district->name_global = "Mang Thit district"; $district->alias = "mang-thit";
		$district->district_id = "858"; $district->level = "Huyện"; $district->city_id = "86"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vũng Liêm"; $district->name_global = "Vung Liem district"; $district->alias = "vung-liem";
		$district->district_id = "859"; $district->level = "Huyện"; $district->city_id = "86"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tam Bình"; $district->name_global = "Tam Binh district"; $district->alias = "tam-binh";
		$district->district_id = "860"; $district->level = "Huyện"; $district->city_id = "86"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bình Minh"; $district->name_global = "Binh Minh town"; $district->alias = "binh-minh";
		$district->district_id = "861"; $district->level = "Thị xã"; $district->city_id = "86"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Trà Ôn"; $district->name_global = "Tra On district"; $district->alias = "tra-on";
		$district->district_id = "862"; $district->level = "Huyện"; $district->city_id = "86"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bình Tân"; $district->name_global = "Binh Tan district"; $district->alias = "binh-tan";
		$district->district_id = "863"; $district->level = "Huyện"; $district->city_id = "86"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cao Lãnh"; $district->name_global = "Cao Lanh city"; $district->alias = "cao-lanh";
		$district->district_id = "866"; $district->level = "Thành phố"; $district->city_id = "87"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sa Đéc"; $district->name_global = "Sa Dec city"; $district->alias = "sa-dec";
		$district->district_id = "867"; $district->level = "Thành phố"; $district->city_id = "87"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hồng Ngự"; $district->name_global = "Hong Ngu town"; $district->alias = "hong-ngu";
		$district->district_id = "868"; $district->level = "Thị xã"; $district->city_id = "87"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Hồng"; $district->name_global = "Tan Hong district"; $district->alias = "tan-hong";
		$district->district_id = "869"; $district->level = "Huyện"; $district->city_id = "87"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hồng Ngự"; $district->name_global = "Hong Ngu district"; $district->alias = "hong-ngu";
		$district->district_id = "870"; $district->level = "Huyện"; $district->city_id = "87"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tam Nông"; $district->name_global = "Tam Nong district"; $district->alias = "tam-nong";
		$district->district_id = "871"; $district->level = "Huyện"; $district->city_id = "87"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tháp Mười"; $district->name_global = "Thap Muoi district"; $district->alias = "thap-muoi";
		$district->district_id = "872"; $district->level = "Huyện"; $district->city_id = "87"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cao Lãnh"; $district->name_global = "Cao Lanh district"; $district->alias = "cao-lanh";
		$district->district_id = "873"; $district->level = "Huyện"; $district->city_id = "87"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thanh Bình"; $district->name_global = "Thanh Binh district"; $district->alias = "thanh-binh";
		$district->district_id = "874"; $district->level = "Huyện"; $district->city_id = "87"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lấp Vò"; $district->name_global = "Lap Vo district"; $district->alias = "lap-vo";
		$district->district_id = "875"; $district->level = "Huyện"; $district->city_id = "87"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Lai Vung"; $district->name_global = "Lai Vung district"; $district->alias = "lai-vung";
		$district->district_id = "876"; $district->level = "Huyện"; $district->city_id = "87"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Châu Thành"; $district->name_global = "Chau Thanh district"; $district->alias = "chau-thanh";
		$district->district_id = "877"; $district->level = "Huyện"; $district->city_id = "87"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Long Xuyên"; $district->name_global = "Long Xuyen city"; $district->alias = "long-xuyen";
		$district->district_id = "883"; $district->level = "Thành phố"; $district->city_id = "89"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Châu Đốc"; $district->name_global = "Chau Doc city"; $district->alias = "chau-doc";
		$district->district_id = "884"; $district->level = "Thành phố"; $district->city_id = "89"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "An Phú"; $district->name_global = "An Phu district"; $district->alias = "an-phu";
		$district->district_id = "886"; $district->level = "Huyện"; $district->city_id = "89"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Châu"; $district->name_global = "Tan Chau town"; $district->alias = "tan-chau";
		$district->district_id = "887"; $district->level = "Thị xã"; $district->city_id = "89"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Tân"; $district->name_global = "Phu Tan district"; $district->alias = "phu-tan";
		$district->district_id = "888"; $district->level = "Huyện"; $district->city_id = "89"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Châu Phú"; $district->name_global = "Chau Phu district"; $district->alias = "chau-phu";
		$district->district_id = "889"; $district->level = "Huyện"; $district->city_id = "89"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tịnh Biên"; $district->name_global = "Tinh Bien district"; $district->alias = "tinh-bien";
		$district->district_id = "890"; $district->level = "Huyện"; $district->city_id = "89"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tri Tôn"; $district->name_global = "Tri Ton district"; $district->alias = "tri-ton";
		$district->district_id = "891"; $district->level = "Huyện"; $district->city_id = "89"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Châu Thành"; $district->name_global = "Chau Thanh district"; $district->alias = "chau-thanh";
		$district->district_id = "892"; $district->level = "Huyện"; $district->city_id = "89"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Chợ Mới"; $district->name_global = "Cho Moi district"; $district->alias = "cho-moi";
		$district->district_id = "893"; $district->level = "Huyện"; $district->city_id = "89"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thoại Sơn"; $district->name_global = "Thoai Son district"; $district->alias = "thoai-son";
		$district->district_id = "894"; $district->level = "Huyện"; $district->city_id = "89"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Rạch Giá"; $district->name_global = "Rach Gia city"; $district->alias = "rach-gia";
		$district->district_id = "899"; $district->level = "Thành phố"; $district->city_id = "91"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hà Tiên"; $district->name_global = "Ha Tien town"; $district->alias = "ha-tien";
		$district->district_id = "900"; $district->level = "Thị xã"; $district->city_id = "91"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kiên Lương"; $district->name_global = "Kien Luong district"; $district->alias = "kien-luong";
		$district->district_id = "902"; $district->level = "Huyện"; $district->city_id = "91"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hòn Đất"; $district->name_global = "Hon Dat district"; $district->alias = "hon-dat";
		$district->district_id = "903"; $district->level = "Huyện"; $district->city_id = "91"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Tân Hiệp"; $district->name_global = "Tan Hiep district"; $district->alias = "tan-hiep";
		$district->district_id = "904"; $district->level = "Huyện"; $district->city_id = "91"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Châu Thành"; $district->name_global = "Chau Thanh district"; $district->alias = "chau-thanh";
		$district->district_id = "905"; $district->level = "Huyện"; $district->city_id = "91"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Giồng Riềng"; $district->name_global = "Giong Rieng district"; $district->alias = "giong-rieng";
		$district->district_id = "906"; $district->level = "Huyện"; $district->city_id = "91"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Gò Quao"; $district->name_global = "Go Quao district"; $district->alias = "go-quao";
		$district->district_id = "907"; $district->level = "Huyện"; $district->city_id = "91"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "An Biên"; $district->name_global = "An Bien district"; $district->alias = "an-bien";
		$district->district_id = "908"; $district->level = "Huyện"; $district->city_id = "91"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "An Minh"; $district->name_global = "An Minh district"; $district->alias = "an-minh";
		$district->district_id = "909"; $district->level = "Huyện"; $district->city_id = "91"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vĩnh Thuận"; $district->name_global = "Vinh Thuan district"; $district->alias = "vinh-thuan";
		$district->district_id = "910"; $district->level = "Huyện"; $district->city_id = "91"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Quốc"; $district->name_global = "Phu Quoc district"; $district->alias = "phu-quoc";
		$district->district_id = "911"; $district->level = "Huyện"; $district->city_id = "91"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kiên Hải"; $district->name_global = "Kien Hai district"; $district->alias = "kien-hai";
		$district->district_id = "912"; $district->level = "Huyện"; $district->city_id = "91"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "U Minh Thượng"; $district->name_global = "U Minh Thuong district"; $district->alias = "u-minh-thuong";
		$district->district_id = "913"; $district->level = "Huyện"; $district->city_id = "91"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Giang Thành"; $district->name_global = "Giang Thanh district"; $district->alias = "giang-thanh";
		$district->district_id = "914"; $district->level = "Huyện"; $district->city_id = "91"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ninh Kiều"; $district->name_global = "Ninh Kieu county"; $district->alias = "ninh-kieu";
		$district->district_id = "916"; $district->level = "Quận"; $district->city_id = "92"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ô Môn"; $district->name_global = "O Mon county"; $district->alias = "o-mon";
		$district->district_id = "917"; $district->level = "Quận"; $district->city_id = "92"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bình Thuỷ"; $district->name_global = "Binh Thuy county"; $district->alias = "binh-thuy";
		$district->district_id = "918"; $district->level = "Quận"; $district->city_id = "92"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cái Răng"; $district->name_global = "Cai Rang county"; $district->alias = "cai-rang";
		$district->district_id = "919"; $district->level = "Quận"; $district->city_id = "92"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thốt Nốt"; $district->name_global = "Thot Not county"; $district->alias = "thot-not";
		$district->district_id = "923"; $district->level = "Quận"; $district->city_id = "92"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vĩnh Thạnh"; $district->name_global = "Vinh Thanh district"; $district->alias = "vinh-thanh";
		$district->district_id = "924"; $district->level = "Huyện"; $district->city_id = "92"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cờ Đỏ"; $district->name_global = "Co Do district"; $district->alias = "co-do";
		$district->district_id = "925"; $district->level = "Huyện"; $district->city_id = "92"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phong Điền"; $district->name_global = "Phong Dien district"; $district->alias = "phong-dien";
		$district->district_id = "926"; $district->level = "Huyện"; $district->city_id = "92"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thới Lai"; $district->name_global = "Thoi Lai district"; $district->alias = "thoi-lai";
		$district->district_id = "927"; $district->level = "Huyện"; $district->city_id = "92"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vị Thanh"; $district->name_global = "Vi Thanh city"; $district->alias = "vi-thanh";
		$district->district_id = "930"; $district->level = "Thành phố"; $district->city_id = "93"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ngã Bảy"; $district->name_global = "Nga Bay town"; $district->alias = "nga-bay";
		$district->district_id = "931"; $district->level = "Thị xã"; $district->city_id = "93"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Châu Thành A"; $district->name_global = "Chau Thanh A district"; $district->alias = "chau-thanh-a";
		$district->district_id = "932"; $district->level = "Huyện"; $district->city_id = "93"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Châu Thành"; $district->name_global = "Chau Thanh district"; $district->alias = "chau-thanh";
		$district->district_id = "933"; $district->level = "Huyện"; $district->city_id = "93"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phụng Hiệp"; $district->name_global = "Phung Hiep district"; $district->alias = "phung-hiep";
		$district->district_id = "934"; $district->level = "Huyện"; $district->city_id = "93"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vị Thuỷ"; $district->name_global = "Vi Thuy district"; $district->alias = "vi-thuy";
		$district->district_id = "935"; $district->level = "Huyện"; $district->city_id = "93"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Long Mỹ"; $district->name_global = "Long My district"; $district->alias = "long-my";
		$district->district_id = "936"; $district->level = "Huyện"; $district->city_id = "93"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Long Mỹ"; $district->name_global = "Long My town"; $district->alias = "long-my";
		$district->district_id = "937"; $district->level = "Thị xã"; $district->city_id = "93"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Sóc Trăng"; $district->name_global = "Soc Trang city"; $district->alias = "soc-trang";
		$district->district_id = "941"; $district->level = "Thành phố"; $district->city_id = "94"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Châu Thành"; $district->name_global = "Chau Thanh district"; $district->alias = "chau-thanh";
		$district->district_id = "942"; $district->level = "Huyện"; $district->city_id = "94"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Kế Sách"; $district->name_global = "Ke Sach district"; $district->alias = "ke-sach";
		$district->district_id = "943"; $district->level = "Huyện"; $district->city_id = "94"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mỹ Tú"; $district->name_global = "My Tu district"; $district->alias = "my-tu";
		$district->district_id = "944"; $district->level = "Huyện"; $district->city_id = "94"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cù Lao Dung"; $district->name_global = "Cu Lao Dung district"; $district->alias = "cu-lao-dung";
		$district->district_id = "945"; $district->level = "Huyện"; $district->city_id = "94"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Long Phú"; $district->name_global = "Long Phu district"; $district->alias = "long-phu";
		$district->district_id = "946"; $district->level = "Huyện"; $district->city_id = "94"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Mỹ Xuyên"; $district->name_global = "My Xuyen district"; $district->alias = "my-xuyen";
		$district->district_id = "947"; $district->level = "Huyện"; $district->city_id = "94"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ngã Năm"; $district->name_global = "Nga Nam town"; $district->alias = "nga-nam";
		$district->district_id = "948"; $district->level = "Thị xã"; $district->city_id = "94"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thạnh Trị"; $district->name_global = "Thanh Tri district"; $district->alias = "thanh-tri";
		$district->district_id = "949"; $district->level = "Huyện"; $district->city_id = "94"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vĩnh Châu"; $district->name_global = "Vinh Chau town"; $district->alias = "vinh-chau";
		$district->district_id = "950"; $district->level = "Thị xã"; $district->city_id = "94"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Trần Đề"; $district->name_global = "Tran De district"; $district->alias = "tran-de";
		$district->district_id = "951"; $district->level = "Huyện"; $district->city_id = "94"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Bạc Liêu"; $district->name_global = "Bac Lieu city"; $district->alias = "bac-lieu";
		$district->district_id = "954"; $district->level = "Thành phố"; $district->city_id = "95"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hồng Dân"; $district->name_global = "Hong Dan district"; $district->alias = "hong-dan";
		$district->district_id = "956"; $district->level = "Huyện"; $district->city_id = "95"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phước Long"; $district->name_global = "Phuoc Long district"; $district->alias = "phuoc-long";
		$district->district_id = "957"; $district->level = "Huyện"; $district->city_id = "95"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Vĩnh Lợi"; $district->name_global = "Vinh Loi district"; $district->alias = "vinh-loi";
		$district->district_id = "958"; $district->level = "Huyện"; $district->city_id = "95"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Giá Rai"; $district->name_global = "Gia Rai town"; $district->alias = "gia-rai";
		$district->district_id = "959"; $district->level = "Thị xã"; $district->city_id = "95"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đông Hải"; $district->name_global = "Dong Hai district"; $district->alias = "dong-hai";
		$district->district_id = "960"; $district->level = "Huyện"; $district->city_id = "95"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Hoà Bình"; $district->name_global = "Hoa Binh district"; $district->alias = "hoa-binh";
		$district->district_id = "961"; $district->level = "Huyện"; $district->city_id = "95"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cà Mau"; $district->name_global = "Ca Mau city"; $district->alias = "ca-mau";
		$district->district_id = "964"; $district->level = "Thành phố"; $district->city_id = "96"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "U Minh"; $district->name_global = "U Minh district"; $district->alias = "u-minh";
		$district->district_id = "966"; $district->level = "Huyện"; $district->city_id = "96"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Thới Bình"; $district->name_global = "Thoi Binh district"; $district->alias = "thoi-binh";
		$district->district_id = "967"; $district->level = "Huyện"; $district->city_id = "96"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Trần Văn Thời"; $district->name_global = "Tran Van Thoi district"; $district->alias = "tran-van-thoi";
		$district->district_id = "968"; $district->level = "Huyện"; $district->city_id = "96"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Cái Nước"; $district->name_global = "Cai Nuoc district"; $district->alias = "cai-nuoc";
		$district->district_id = "969"; $district->level = "Huyện"; $district->city_id = "96"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Đầm Dơi"; $district->name_global = "Dam Doi district"; $district->alias = "dam-doi";
		$district->district_id = "970"; $district->level = "Huyện"; $district->city_id = "96"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Năm Căn"; $district->name_global = "Nam Can district"; $district->alias = "nam-can";
		$district->district_id = "971"; $district->level = "Huyện"; $district->city_id = "96"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Phú Tân"; $district->name_global = "Phu Tan district"; $district->alias = "phu-tan";
		$district->district_id = "972"; $district->level = "Huyện"; $district->city_id = "96"; 
		$district->save();

		$district = new District(); 
		$district->name_local = "Ngọc Hiển"; $district->name_global = "Ngoc Hien district"; $district->alias = "ngoc-hien";
		$district->district_id = "973"; $district->level = "Huyện"; $district->city_id = "96"; 
		$district->save();
    }
}
