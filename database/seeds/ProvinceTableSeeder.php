<?php

use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		/**
		 * Database `sandwichgo`
		 */

		/* `sandwichgo`.`provinces` */
		$provinces = array(
			array('id' => '1','code' => '10','name_th' => 'กรุงเทพมหานคร','name_en' => 'Bangkok'),
			array('id' => '2','code' => '11','name_th' => 'สมุทรปราการ','name_en' => 'Samut Prakarn'),
			array('id' => '3','code' => '12','name_th' => 'นนทบุรี','name_en' => 'Nonthaburi'),
			array('id' => '4','code' => '13','name_th' => 'ปทุมธานี','name_en' => 'Pathum Thani'),
			array('id' => '5','code' => '14','name_th' => 'พระนครศรีอยุธยา','name_en' => 'Phra Nakhon Si Ayutthaya'),
			array('id' => '6','code' => '15','name_th' => 'อ่างทอง','name_en' => 'Ang Thong'),
			array('id' => '7','code' => '16','name_th' => 'ลพบุรี','name_en' => 'Lop Buri'),
			array('id' => '8','code' => '17','name_th' => 'สิงห์บุรี','name_en' => 'Sing Buri'),
			array('id' => '9','code' => '18','name_th' => 'ชัยนาท','name_en' => 'Chai Nat'),
			array('id' => '10','code' => '19','name_th' => 'สระบุรี','name_en' => 'Saraburi'),
			array('id' => '11','code' => '20','name_th' => 'ชลบุรี','name_en' => 'Chon Buri'),
			array('id' => '12','code' => '21','name_th' => 'ระยอง','name_en' => 'Rayong'),
			array('id' => '13','code' => '22','name_th' => 'จันทบุรี','name_en' => 'Chanthaburi'),
			array('id' => '14','code' => '23','name_th' => 'ตราด','name_en' => 'Trat'),
			array('id' => '15','code' => '24','name_th' => 'ฉะเชิงเทรา','name_en' => 'Chachoengsao'),
			array('id' => '16','code' => '25','name_th' => 'ปราจีนบุรี','name_en' => 'Prachin Buri'),
			array('id' => '17','code' => '26','name_th' => 'นครนายก','name_en' => 'Nakhon Nayok'),
			array('id' => '18','code' => '27','name_th' => 'สระแก้ว','name_en' => 'Sa kaeo'),
			array('id' => '19','code' => '30','name_th' => 'นครราชสีมา','name_en' => 'Nakhon Ratchasima'),
			array('id' => '20','code' => '31','name_th' => 'บุรีรัมย์','name_en' => 'Buri Ram'),
			array('id' => '21','code' => '32','name_th' => 'สุรินทร์','name_en' => 'Surin'),
			array('id' => '22','code' => '33','name_th' => 'ศรีสะเกษ','name_en' => 'Si Sa Ket'),
			array('id' => '23','code' => '34','name_th' => 'อุบลราชธานี','name_en' => 'Ubon Ratchathani'),
			array('id' => '24','code' => '35','name_th' => 'ยโสธร','name_en' => 'Yasothon'),
			array('id' => '25','code' => '36','name_th' => 'ชัยภูมิ','name_en' => 'Chaiyaphum'),
			array('id' => '26','code' => '37','name_th' => 'อำนาจเจริญ','name_en' => 'Amnat Charoen'),
			array('id' => '27','code' => '38','name_th' => 'บึงกาฬ','name_en' => 'Bueng Kan'),
			array('id' => '28','code' => '39','name_th' => 'หนองบัวลำภู','name_en' => 'Nong Bua Lam Phu'),
			array('id' => '29','code' => '40','name_th' => 'ขอนแก่น','name_en' => 'Khon Kaen'),
			array('id' => '30','code' => '41','name_th' => 'อุดรธานี','name_en' => 'Udon Thani'),
			array('id' => '31','code' => '42','name_th' => 'เลย','name_en' => 'Loei'),
			array('id' => '32','code' => '43','name_th' => 'หนองคาย','name_en' => 'Nong Khai'),
			array('id' => '33','code' => '44','name_th' => 'มหาสารคาม','name_en' => 'Maha Sarakham'),
			array('id' => '34','code' => '45','name_th' => 'ร้อยเอ็ด','name_en' => 'Roi Et'),
			array('id' => '35','code' => '46','name_th' => 'กาฬสินธุ์','name_en' => 'Kalasin'),
			array('id' => '36','code' => '47','name_th' => 'สกลนคร','name_en' => 'Sakon Nakhon'),
			array('id' => '37','code' => '48','name_th' => 'นครพนม','name_en' => 'Nakhon Phanom'),
			array('id' => '38','code' => '49','name_th' => 'มุกดาหาร','name_en' => 'Mukdahan'),
			array('id' => '39','code' => '50','name_th' => 'เชียงใหม่','name_en' => 'Chiang Mai'),
			array('id' => '40','code' => '51','name_th' => 'ลำพูน','name_en' => 'Lamphun'),
			array('id' => '41','code' => '52','name_th' => 'ลำปาง','name_en' => 'Lampang'),
			array('id' => '42','code' => '53','name_th' => 'อุตรดิตถ์','name_en' => 'Uttaradit'),
			array('id' => '43','code' => '54','name_th' => 'แพร่','name_en' => 'Phrae'),
			array('id' => '44','code' => '55','name_th' => 'น่าน','name_en' => 'Nan'),
			array('id' => '45','code' => '56','name_th' => 'พะเยา','name_en' => 'Phayao'),
			array('id' => '46','code' => '57','name_th' => 'เชียงราย','name_en' => 'Chiang Rai'),
			array('id' => '47','code' => '58','name_th' => 'แม่ฮ่องสอน','name_en' => 'Mae Hong Son'),
			array('id' => '48','code' => '60','name_th' => 'นครสวรรค์','name_en' => 'Nakhon Sawan'),
			array('id' => '49','code' => '61','name_th' => 'อุทัยธานี','name_en' => 'Uthai Thani'),
			array('id' => '50','code' => '62','name_th' => 'กำแพงเพชร','name_en' => 'Kamphaeng Phet'),
			array('id' => '51','code' => '63','name_th' => 'ตาก','name_en' => 'Tak'),
			array('id' => '52','code' => '64','name_th' => 'สุโขทัย','name_en' => 'Sukhothai'),
			array('id' => '53','code' => '65','name_th' => 'พิษณุโลก','name_en' => 'Phitsanulok'),
			array('id' => '54','code' => '66','name_th' => 'พิจิตร','name_en' => 'Phichit'),
			array('id' => '55','code' => '67','name_th' => 'เพชรบูรณ์','name_en' => 'Phetchabun'),
			array('id' => '56','code' => '70','name_th' => 'ราชบุรี','name_en' => 'Ratchaburi'),
			array('id' => '57','code' => '71','name_th' => 'กาญจนบุรี','name_en' => 'Kanchanaburi'),
			array('id' => '58','code' => '72','name_th' => 'สุพรรณบุรี','name_en' => 'Suphan Buri'),
			array('id' => '59','code' => '73','name_th' => 'นครปฐม','name_en' => 'Nakhon Pathom'),
			array('id' => '60','code' => '74','name_th' => 'สมุทรสาคร','name_en' => 'Samut Sakhon'),
			array('id' => '61','code' => '75','name_th' => 'สมุทรสงคราม','name_en' => 'Samut Songkhram'),
			array('id' => '62','code' => '76','name_th' => 'เพชรบุรี','name_en' => 'Phetchaburi'),
			array('id' => '63','code' => '77','name_th' => 'ประจวบคีรีขันธ์','name_en' => 'Prachuap Khiri Khan'),
			array('id' => '64','code' => '80','name_th' => 'นครศรีธรรมราช','name_en' => 'Nakhon Si Thammarat'),
			array('id' => '65','code' => '81','name_th' => 'กระบี่','name_en' => 'Krabi'),
			array('id' => '66','code' => '82','name_th' => 'พังงา','name_en' => 'Phang-nga'),
			array('id' => '67','code' => '83','name_th' => 'ภูเก็ต','name_en' => 'Phuket'),
			array('id' => '68','code' => '84','name_th' => 'สุราษฎร์ธานี','name_en' => 'Surat Thani'),
			array('id' => '69','code' => '85','name_th' => 'ระนอง','name_en' => 'Ranong'),
			array('id' => '70','code' => '86','name_th' => 'ชุมพร','name_en' => 'Chumphon'),
			array('id' => '71','code' => '90','name_th' => 'สงขลา','name_en' => 'Songkhla'),
			array('id' => '72','code' => '91','name_th' => 'สตูล','name_en' => 'Satun'),
			array('id' => '73','code' => '92','name_th' => 'ตรัง','name_en' => 'Trang'),
			array('id' => '74','code' => '93','name_th' => 'พัทลุง','name_en' => 'Phatthalung'),
			array('id' => '75','code' => '94','name_th' => 'ปัตตานี','name_en' => 'Pattani'),
			array('id' => '76','code' => '95','name_th' => 'ยะลา','name_en' => 'Yala'),
			array('id' => '77','code' => '96','name_th' => 'นราธิวาส','name_en' => 'Narathiwat')
		);
		Province::insert($provinces);
    }
}
