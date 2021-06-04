<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class ProgramTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'=>'chuongtrinhtour1',
                'content'=>'<ul>
                                                        <p>Q08h30: Quý khách tập trung tại Vietravel Đà Lạt (56 Phan Đình
                                                            Phùng, Phường 1, Tp Đà Lạt) đoàn khởi hành đi Nha Trang. Ăn trưa
                                                            tại nhà hàng địa phương</p>
                                                        <li>Đoàn tham quan:</li>
                                                        <ul>
                                                            <li>Tháp Bà Ponagar: công trình tiêu biểu cho nghệ thuật kiến
                                                                trúc và điêu khắc tín ngưỡng tôn giáo bậc nhất của dân tộc
                                                                Chăm tại Nha Trang.</li>
                                                            <li>Làng Yến Mai Sinh: tham quan vách yến nhân tạo lớn nhất Việt
                                                                Nam, tìm hiểu quy trình lấy yến ở độ cao cheo leo hiểm trở
                                                                và cách thức sơ chế để tạo ra sản phẩm dinh dưỡng cho sức
                                                                khỏe.
                                                                Ăn tối tại nhà hàng địa phương. Đoàn nhận phòng, tự do tham
                                                                quan thành phố về.</li>
                                                        </ul>

                                                        Xem thêm

                                                    </ul> ',
                'nr_day'=>'1',
                'time' => new DateTime(),
                'tour_id'=>1
            ],
            [
                'name'=>'chuongtrinhtour2',
                'content'=>'<ul>
                                                        <p>Q08h30: Quý khách tập trung tại Vietravel Đà Lạt (56 Phan Đình
                                                            Phùng, Phường 1, Tp Đà Lạt) đoàn khởi hành đi Nha Trang. Ăn trưa
                                                            tại nhà hàng địa phương</p>
                                                        <li>Đoàn tham quan:</li>
                                                        <ul>
                                                            <li>Tháp Bà Ponagar: công trình tiêu biểu cho nghệ thuật kiến
                                                                trúc và điêu khắc tín ngưỡng tôn giáo bậc nhất của dân tộc
                                                                Chăm tại Nha Trang.</li>
                                                            <li>Làng Yến Mai Sinh: tham quan vách yến nhân tạo lớn nhất Việt
                                                                Nam, tìm hiểu quy trình lấy yến ở độ cao cheo leo hiểm trở
                                                                và cách thức sơ chế để tạo ra sản phẩm dinh dưỡng cho sức
                                                                khỏe.
                                                                Ăn tối tại nhà hàng địa phương. Đoàn nhận phòng, tự do tham
                                                                quan thành phố về.</li>
                                                        </ul>

                                                        Xem thêm

                                                    </ul>',
                'nr_day'=>'2',
                'time' => new DateTime(),
                'tour_id'=>1
            ],
            [
                'name'=>'chuongtrinhtour3',
                'content'=>'<ul>
                                                        <p>Q08h30: Quý khách tập trung tại Vietravel Đà Lạt (56 Phan Đình
                                                            Phùng, Phường 1, Tp Đà Lạt) đoàn khởi hành đi Nha Trang. Ăn trưa
                                                            tại nhà hàng địa phương</p>
                                                        <li>Đoàn tham quan:</li>
                                                        <ul>
                                                            <li>Tháp Bà Ponagar: công trình tiêu biểu cho nghệ thuật kiến
                                                                trúc và điêu khắc tín ngưỡng tôn giáo bậc nhất của dân tộc
                                                                Chăm tại Nha Trang.</li>
                                                            <li>Làng Yến Mai Sinh: tham quan vách yến nhân tạo lớn nhất Việt
                                                                Nam, tìm hiểu quy trình lấy yến ở độ cao cheo leo hiểm trở
                                                                và cách thức sơ chế để tạo ra sản phẩm dinh dưỡng cho sức
                                                                khỏe.
                                                                Ăn tối tại nhà hàng địa phương. Đoàn nhận phòng, tự do tham
                                                                quan thành phố về.</li>
                                                        </ul>

                                                        Xem thêm

                                                    </ul>',
                'nr_day'=>'3',
                'time' => new DateTime(),
                'tour_id'=>1
            ]
        ];
        return DB::table('program')->insert($data);
    }
}
