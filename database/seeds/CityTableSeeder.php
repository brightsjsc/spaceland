<?php

use Illuminate\Database\Seeder;
use App\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new City(); 
		$city->name_local = 'Hà Nội'; $city->name_global = 'Ha Noi'; 
		$city->alias = 'ha-noi'; $city->city_id = '01'; $city->level = 'Thành phố'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Hà Giang'; $city->name_global = 'Ha Giang'; 
		$city->alias = 'ha-giang'; $city->city_id = '02'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Cao Bằng'; $city->name_global = 'Cao Bang'; 
		$city->alias = 'cao-bang'; $city->city_id = '04'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Bắc Kạn'; $city->name_global = 'Bac Kan'; 
		$city->alias = 'bac-kan'; $city->city_id = '06'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Tuyên Quang'; $city->name_global = 'Tuyen Quang'; 
		$city->alias = 'tuyen-quang'; $city->city_id = '08'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Lào Cai'; $city->name_global = 'Lao Cai'; 
		$city->alias = 'lao-cai'; $city->city_id = '10'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Điện Biên'; $city->name_global = 'Dien Bien'; 
		$city->alias = 'dien-bien'; $city->city_id = '11'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Lai Châu'; $city->name_global = 'Lai Chau'; 
		$city->alias = 'lai-chau'; $city->city_id = '12'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Sơn La'; $city->name_global = 'Son La'; 
		$city->alias = 'son-la'; $city->city_id = '14'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Yên Bái'; $city->name_global = 'Yen Bai'; 
		$city->alias = 'yen-bai'; $city->city_id = '15'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Hoà Bình'; $city->name_global = 'Hoa Binh'; 
		$city->alias = 'hoa-binh'; $city->city_id = '17'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Thái Nguyên'; $city->name_global = 'Thai Nguyen'; 
		$city->alias = 'thai-nguyen'; $city->city_id = '19'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Lạng Sơn'; $city->name_global = 'Lang Son'; 
		$city->alias = 'lang-son'; $city->city_id = '20'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Quảng Ninh'; $city->name_global = 'Quang Ninh'; 
		$city->alias = 'quang-ninh'; $city->city_id = '22'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Bắc Giang'; $city->name_global = 'Bac Giang'; 
		$city->alias = 'bac-giang'; $city->city_id = '24'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Phú Thọ'; $city->name_global = 'Phu Tho'; 
		$city->alias = 'phu-tho'; $city->city_id = '25'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Vĩnh Phúc'; $city->name_global = 'Vinh Phuc'; 
		$city->alias = 'vinh-phuc'; $city->city_id = '26'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Bắc Ninh'; $city->name_global = 'Bac Ninh'; 
		$city->alias = 'bac-ninh'; $city->city_id = '27'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Hải Dương'; $city->name_global = 'Hai Duong'; 
		$city->alias = 'hai-duong'; $city->city_id = '30'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Hải Phòng'; $city->name_global = 'Hai Phong'; 
		$city->alias = 'hai-phong'; $city->city_id = '31'; $city->level = 'Thành phố'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Hưng Yên'; $city->name_global = 'Hung Yen'; 
		$city->alias = 'hung-yen'; $city->city_id = '33'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Thái Bình'; $city->name_global = 'Thai Binh'; 
		$city->alias = 'thai-binh'; $city->city_id = '34'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Hà Nam'; $city->name_global = 'Ha Nam'; 
		$city->alias = 'ha-nam'; $city->city_id = '35'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Nam Định'; $city->name_global = 'Nam Dinh'; 
		$city->alias = 'nam-dinh'; $city->city_id = '36'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Ninh Bình'; $city->name_global = 'Ninh Binh'; 
		$city->alias = 'ninh-binh'; $city->city_id = '37'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Thanh Hóa'; $city->name_global = 'Thanh Hoa'; 
		$city->alias = 'thanh-hoa'; $city->city_id = '38'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Nghệ An'; $city->name_global = 'Nghe An'; 
		$city->alias = 'nghe-an'; $city->city_id = '40'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Hà Tĩnh'; $city->name_global = 'Ha Tinh'; 
		$city->alias = 'ha-tinh'; $city->city_id = '42'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Quảng Bình'; $city->name_global = 'Quang Binh'; 
		$city->alias = 'quang-binh'; $city->city_id = '44'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Quảng Trị'; $city->name_global = 'Quang Tri'; 
		$city->alias = 'quang-tri'; $city->city_id = '45'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Thừa Thiên Huế'; $city->name_global = 'Thua Thien Hue'; 
		$city->alias = 'thua-thien-hue'; $city->city_id = '46'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Đà Nẵng'; $city->name_global = 'Da Nang'; 
		$city->alias = 'da-nang'; $city->city_id = '48'; $city->level = 'Thành phố'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Quảng Nam'; $city->name_global = 'Quang Nam'; 
		$city->alias = 'quang-nam'; $city->city_id = '49'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Quảng Ngãi'; $city->name_global = 'Quang Ngai'; 
		$city->alias = 'quang-ngai'; $city->city_id = '51'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Bình Định'; $city->name_global = 'Binh Dinh'; 
		$city->alias = 'binh-dinh'; $city->city_id = '52'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Phú Yên'; $city->name_global = 'Phu Yen'; 
		$city->alias = 'phu-yen'; $city->city_id = '54'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Khánh Hòa'; $city->name_global = 'Khanh Hoa'; 
		$city->alias = 'khanh-hoa'; $city->city_id = '56'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Ninh Thuận'; $city->name_global = 'Ninh Thuan'; 
		$city->alias = 'ninh-thuan'; $city->city_id = '58'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Bình Thuận'; $city->name_global = 'Binh Thuan'; 
		$city->alias = 'binh-thuan'; $city->city_id = '60'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Kon Tum'; $city->name_global = 'Kon Tum'; 
		$city->alias = 'kon-tum'; $city->city_id = '62'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Gia Lai'; $city->name_global = 'Gia Lai'; 
		$city->alias = 'gia-lai'; $city->city_id = '64'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Đắk Lắk'; $city->name_global = 'Dak Lak'; 
		$city->alias = 'dak-lak'; $city->city_id = '66'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Đắk Nông'; $city->name_global = 'Dak Nong'; 
		$city->alias = 'dak-nong'; $city->city_id = '67'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Lâm Đồng'; $city->name_global = 'Lam Dong'; 
		$city->alias = 'lam-dong'; $city->city_id = '68'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Bình Phước'; $city->name_global = 'Binh Phuoc'; 
		$city->alias = 'binh-phuoc'; $city->city_id = '70'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Tây Ninh'; $city->name_global = 'Tay Ninh'; 
		$city->alias = 'tay-ninh'; $city->city_id = '72'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Bình Dương'; $city->name_global = 'Binh Duong'; 
		$city->alias = 'binh-duong'; $city->city_id = '74'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Đồng Nai'; $city->name_global = 'Dong Nai'; 
		$city->alias = 'dong-nai'; $city->city_id = '75'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Bà Rịa - Vũng Tàu'; $city->name_global = 'Ba Ria - Vung Tau'; 
		$city->alias = 'ba-ria-vung-tau'; $city->city_id = '77'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Hồ Chí Minh'; $city->name_global = 'Ho Chi Minh'; 
		$city->alias = 'ho-chi-minh'; $city->city_id = '79'; $city->level = 'Thành phố'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Long An'; $city->name_global = 'Long An'; 
		$city->alias = 'long-an'; $city->city_id = '80'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Tiền Giang'; $city->name_global = 'Tien Giang'; 
		$city->alias = 'tien-giang'; $city->city_id = '82'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Bến Tre'; $city->name_global = 'Ben Tre'; 
		$city->alias = 'ben-tre'; $city->city_id = '83'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Trà Vinh'; $city->name_global = 'Tra Vinh'; 
		$city->alias = 'tra-vinh'; $city->city_id = '84'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Vĩnh Long'; $city->name_global = 'Vinh Long'; 
		$city->alias = 'vinh-long'; $city->city_id = '86'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Đồng Tháp'; $city->name_global = 'Dong Thap'; 
		$city->alias = 'dong-thap'; $city->city_id = '87'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'An Giang'; $city->name_global = 'An Giang'; 
		$city->alias = 'an-giang'; $city->city_id = '89'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Kiên Giang'; $city->name_global = 'Kien Giang'; 
		$city->alias = 'kien-giang'; $city->city_id = '91'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Cần Thơ'; $city->name_global = 'Can Tho'; 
		$city->alias = 'can-tho'; $city->city_id = '92'; $city->level = 'Thành phố'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Hậu Giang'; $city->name_global = 'Hau Giang'; 
		$city->alias = 'hau-giang'; $city->city_id = '93'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Sóc Trăng'; $city->name_global = 'Soc Trang'; 
		$city->alias = 'soc-trang'; $city->city_id = '94'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Bạc Liêu'; $city->name_global = 'Bac Lieu'; 
		$city->alias = 'bac-lieu'; $city->city_id = '95'; $city->level = 'Tỉnh'; 
		$city->save();

		$city = new City(); 
		$city->name_local = 'Cà Mau'; $city->name_global = 'Ca Mau'; 
		$city->alias = 'ca-mau'; $city->city_id = '96'; $city->level = 'Tỉnh'; 
		$city->save();
    }
}
