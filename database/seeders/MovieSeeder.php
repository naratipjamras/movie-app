<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Movie')->truncate();
        $movies =[
            [
                'name' => 'Rampage แรมเพจ ใหญ่ชนยักษ์',
                'link' => 'https://p2p-ns1.sage.stream/index.html?id=rampage-2018',
                'image' => 'https://www.037hdmovie.com/wp-content/uploads/2018/04/Rampage-2018-1.jpg',
                'youtube' => 'DHmptNyIuGQ',
            ],
            [
                'name' => 'San Andreas มหาวินาศแผ่นดินแยก',
                'link' => 'https://p2p-ns1.sage.stream/index.html?id=san-andreas-2015',
                'image' => 'https://www.037hdmovie.com/wp-content/uploads/2018/04/AR7OrBwGDThJPHWmzH9.jpg',
                'youtube' => 'yftHosO0eUo',
            ],
            [
                'name' => 'The Day After Tomorrow วิกฤติวันสิ้นโลก',
                'link' => 'https://p2p-ns1.sage.stream/index.html?id=the-day-after-tomorrow-2004-sub',
                'image' => 'https://www.037hdmovie.com/wp-content/uploads/2018/04/LqKGfMbIIGul9Xnh6Mf.jpg',
                'youtube' => 'Ku_IseK3xTc',
            ],
            [
                'name' => '2012 วันสิ้นโลก',
                'link' => 'https://p2p-ns1.sage.stream/index.html?id=2012-2009',
                'image' => 'https://www.037hdmovie.com/wp-content/uploads/2021/03/2021.jpg',
                'youtube' => 'gEI7FJIdRFc',
            ],
            [
                'name' => 'Independence Day ไอดี 4 สงครามวันดับโลก',
                'link' => 'https://p2p-ns1.sage.stream/index.html?id=independence-day-1996',
                'image' => 'https://www.037hdmovie.com/wp-content/uploads/2018/04/nN7oRkgXhK5yZMLMY9F.jpg',
                'youtube' => 'S3ce1Cvig-M',
            ],
            [
                'name' => 'Exodus: Gods and Kings เอ็กโซดัส : ก็อดส์ แอนด์ คิงส์',
                'link' => 'https://p2p-ns1.sage.stream/index.html?id=exodus-gods-and-kings-2014',
                'image' => 'https://www.037hdmovie.com/wp-content/uploads/2018/04/8WPyIlaevn3TEMAnzbK.jpg',
                'youtube' => '8YsulfxVI',
            ],
            [
                'name' => 'The Core ผ่านรกกลางใจโลก',
                'link' => 'https://p2p-ns1.sage.stream/index.html?id=the-core-2003',
                'image' => 'https://www.037hdmovie.com/wp-content/uploads/2018/04/VuBVLaCdtallhPQgXX7.jpg',
                'youtube' => 'LVkocdkcmAc',
            ],
            [
                'name' => 'True Legend ยาจกซู',
                'link' => 'https://p2p-ns1.sage.stream/index.html?id=true-legend-2010',
                'image' => 'https://www.037hdmovie.com/wp-content/uploads/2018/04/e3Vmd1VhnNURX9kYS1U.jpg',
                'youtube' => 'gLgnZYNf84c',
            ],
            [
                'name' => 'THE 5TH WAVE (2016) อุบัติการณ์ล้างโลก',
                'link' => 'https://p2p-ns1.sage.stream/index.html?id=the-5th-wave-2016',
                'image' => 'https://www.037hdmovie.com/wp-content/uploads/2018/04/ayq5f7pknuv1x7aAMmf.jpg',
                'youtube' => 'kmxLybfGNC4',
            ],
            [
                'name' => 'AQUAMAN (2018) อควาแมน เจ้าสมุทร',
                'link' => 'https://p2p-ns1.sage.stream/index.html?id=aquaman-2018',
                'image' => 'https://www.037hdmovie.com/wp-content/uploads/2018/12/Aquaman-2018.jpg',
                'youtube' => '2wcj6SrX4zw',
            ],
            [
                'name' => 'DOCTOR STRANGE ด็อกเตอร์ สเตรนจ์ จอมเวทย์มหากาฬ',
                'link' => 'https://p2p-ns1.sage.stream/index.html?id=doctor-strange-2016',
                'image' => 'https://www.037hdmovie.com/wp-content/uploads/2018/04/nET8xOVdi7MgpeF8jcL.jpg',
                'youtube' => 'HSzx-zryEgM',
            ],
            [
                'name' => 'THE MARTIAN (2015) กู้ตาย 140 ล้านไมล์',
                'link' => 'https://p2p-ns1.sage.stream/index.html?id=the-martian-2015',
                'image' => 'https://www.037hdmovie.com/wp-content/uploads/2018/04/McBMPYoF1WBmzfgr2xt.jpg',
                'youtube' => 'ej3ioOneTy8',
            ],
            [
                'name' => 'WONDER WOMAN (2017) วันเดอร์ วูแมน',
                'link' => 'https://p2p-ns1.sage.stream/index.html?id=wonder-woman-2017',
                'image' => 'https://www.037hdmovie.com/wp-content/uploads/2020/02/Wonder-Woman-2017-%E0%B8%A7%E0%B8%B1%E0%B8%99%E0%B9%80%E0%B8%94%E0%B8%AD%E0%B8%A3%E0%B9%8C-%E0%B8%A7%E0%B8%B9%E0%B9%81%E0%B8%A1%E0%B8%99.jpg',
                'youtube' => '1Q8fG0TtVAY',
            ],
            [
                'name' => 'Pearl Harbor',
                'link' => 'https://p2p-ns1.sage.stream/index.html?id=pearl-harbor-2001',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMTQ3MDc0MDc1NF5BMl5BanBnXkFtZTYwODI1ODY2._V1_SX300.jpg',
                'youtube' => 'oGYcxjywx0o',
            ],
            [
                'name' => 'Titanic',
                'link' => 'https://p2p-ns1.sage.stream/index.html?id=titanic-1997',
                'image' => 'https://m.media-amazon.com/images/M/MV5BMDdmZGU3NDQtY2E5My00ZTliLWIzOTUtMTY4ZGI1YjdiNjk3XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_SX300.jpg',
                'youtube' => 'CHekzSiZjrY',
            ],
        ));
        DB::table('Movie')->insert($movies);
    }
}
