<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\User;
use App\Models\Author;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Collection;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Collection::create([
        //     'author_id' => '1',
        //     'no_isbn'   => '9786020324784',
        //     'publisher_id'   => '1',
        //     'pdf' => 'apaan'
        // ]);

        User::create([
            'name'     => 'admin',
            'username' => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => 'password',
            'level' => 'admin'
        ]);
        User::create([
            'name'     => 'yazid',
            'username' => 'yazid',
            'email'    => 'yazid@gmail.com',
            'password' => 'password',
            'job'      => 'Full Stack Developer',
            'phone'    => '08977651650',
            'location' => 'Jakarta, Indonesia',
            'bio'      => 'Aku belum punya pacar :(',
            'instagram'=> '@yazid_mauln',
            'facebook' => 'yazid ganteng',
            'twitter'  => 'Programmernya mamah papah',
            'github'   => 'Ceplukk (Yazid Maulana Rizky)',
            'level' => 'user'
        ]);
        
        Author::create([
            'name' => 'Alvy Syahrin'
        ]);
        Author::create([
            'name' => 'Tere Liye'
        ]);
        Author::create([
            'name' => 'Rintik Sedu'
        ]);
        Author::create([
            'name' => 'Pidi Baiq'
        ]);
        Author::create([
            'name' => 'Leila S.Chudori'
        ]);
        Author::create([
            'name' => 'Eka Kurniawan'
        ]);
        Author::create([
            'name' => 'Inayah Putri'
        ]);
        Author::create([
            'name' => 'Toshikagu Kagawachi'
        ]);
        Author::create([
            'name' => 'Nadia Ristiviani'
        ]);

        Publisher::create([
            'name' => 'Gramedia Pustaka Utama',
            'address' => 'Jakarta'
        ]);
        Publisher::create([
            'name' => 'Depublish',
            'address' => 'Bandung'
        ]);
        Publisher::create([
            'name' => 'Grasindo',
            'address' => 'Tangerang'
        ]);

        Category::create([
            'category' => 'Romance'
        ]);
        Category::create([
            'category' => 'Misteri/Thriller'
        ]);
        Category::create([
            'category' => 'Science Finction/Fantasy'
        ]);
        Category::create([
            'category' => 'Historical'
        ]);
        Category::create([
            'category' => 'Biography'
        ]);
        Category::create([
            'category' => 'Otonom'
        ]);
        Category::create([
            'category' => 'Adventure'
        ]);
        Category::create([
            'category' => 'science'
        ]);


        Book::create([
            'id' => '9786020324784',
            'title' => 'Hujan',
            'author_id' => 1,
            'publisher_id' => 1,
            'category_id' =>  1,
            'released_at' => '2017-12-12',
            'synopsis' => 'Buku ini menceritakan tentang perjalanan hidup dan kisah cinta seorang wanita yang bernama Lail. 
            Lail dipaksa menjadi yatim piatu sejak usianya masih 13 tahun. Semua bermula saat mendadak terjadi bencana gempa dan gunung meletus yang langsung meluluhlantakkan kota tempatnya tinggal.',
            'cover_book' => 'gambar1'
        ]);
        // Book::create([
        //     'id' => '9786020627526',
        //     'title' => 'Bumi',
        //     'author_id' => 2,
        //     'publisher_id' => 3,
        //     'genre' =>  'romance',
        //     'released_at' => '2017',
        //     'synopsis' => 'Cerita ini bermula dari seorang gadis berusia 15 tahun, bernama Raib. Sebenarnya, Raib layaknya remaja pada umumnya, tetap dirinya memiliki satu kemampuan, yakni bisa menghilang. Bagaimana caranya? Hanya dengan meletakkan telapak tangan di wajahnya dan gadis itu bisa langsung tidak tampak di penglihatan.

        //     Sebenarnya, kemampuan aneh itu telah melekat padanya sejak dirinya masih berusia sekitar 2 tahun. Dahulu, Raib gemar bermain petak umpet dengan kedua orang tuanya, kemudian Raib yang sedang meletakkan kedua telapak tangan ke wajahnya tiba-tiba menghilang. Raib merasa bingung sekaligus heran. Ia merahasiakan kemampuan yang dimilikinya itu ke semua orang, termasuk ke orang tuanya.

        //     Meski pernah, orang tuanya merasa ada keanehan pada diri anaknya tersebut, Raib. Hal itu terjadi ketika Raib secara tiba-tiba muncul dihadapan mereka (orang tua Raib), padahal sebelumnya Raib berada di kamarnya. Akan tetapi, pada saat itu keanehan tersebut tidaklah dihiraukan oleh kedua orang tuanya, bahkan sampai saat ini.

        //     Seperti yang sudah dijelaskan di awal, Raib mempunyai teman dekat atau bisa dikatakan sahabat, Seli namanya. Mereka berdua sangatlah akrab. Selain itu, Raib mempunyai teman karib bernama Ali.

        //     Awalnya, Ali adalah seseorang yang menyebalkan bagi Raib sebab ada saja ulah dari Ali yang membuat Raib jadi keki. Hal itu dibuktikan dengan kelakukan Ali yang tidak bisa tertib di sekolah sampai aktivitas atau kegiatannya yang menciptakan barang-barang aneh demi mengikuti keseharian Raib. Akan tetapi, siapa sangka? Ali menjadi teman petualangan yang sangat bisa dipercaya dan diandalkan di waktu yang tepat.

        //     Kejadian awal mula dari petualangan mereka adalah saat Raib dan Ali mendapat hukuman dari Miss Keriting. Ya, Miss Keriting merupakan julukan untuk Miss Selena, yakni guru matematika mereka. Raib dan Ali dikeluarkan dari kelasnya dan tidak diizinkan untuk mengikuti jam pelajaran hingga kelas Miss Selena selesai. Raib yang saat itu dilanda bosan, ia akhirnya mengeluarkan kemampuan istimewanya, yaitu menghilang.

        //     Saat dirinya coba menghilang, bersamaan dengan itu Raib melihat sosok bayangan lelaki kurus dan tinggi, kemudian lelaki tersebut memanggil Raib, “Hai, Gadis kecil”. Raib pun kaget dan secara spontan melepaskan kedua tangannya yang menutupi wajahnya, bersamaan dengan itu pula, Ali kaget sebab Raib muncul dihadapannya secara tiba-tiba.

        //     Ali merasa curiga bahwa Raib memiliki kemampuan bisa menghilang. Tanpa hentinya, Ali bertanya kepada Raib. Meski demikian, Raib tidak mengakui bahwa dirinya dapat menghilang dan tetap pada komitmen untuk menjaga kemampuan ini menjadi rahasia pribadinya.

        //     Untuk kehidupan di rumah pun sama seperti remaja kebanyakan, Raib tinggal dan menetap bersama kedua orang tuanya dan dua kucing peliharaannya, yaitu si Putih dan si Hitam. Mereka berdua hidup rukun dan damai, sampai suatu ketika ada hal yang mengubah semua.

        //     Kucing Raib, yakni si Hitam yang biasanya menyambut Raib ketika pulang sekolah, mendadak tidak ada. Raib mencarinya ke seluruh sudut-sudut rumahnya, tetapi tetap saja tak ada si Hitam. Lantas, ia bertanya kepada mamanya mengenai keberadaan si Hitam. Saat itu mamanya terheran-heran sebab Raib hanya memelihara satu kucing yang dinamainya si Putih atau si Hitam, bukan si Putih dan si Hitam.

        //     Peristiwa keanehan berikutnya, yakni secara tiba-tiba muncul sebuah jerawat dengan ukuran yang cukup besar di dari Raib. Seperti remaja pada umumnya, Raib merasa kesal akan jerawat itu sebab menjadi bahan ejekan. Hingga di malam harinya, Raib mencoba menghilangkan jerawat itu di depan cermin kamarnya, dengan konsentrasi penuh jerawat itu pun menghilang dari dahi Raib.

        //     Kemudian, saat itu di dalam cermin muncul lagi sosok bayangan lelaki kurus dan tinggi yang pernah dijumpainya saat di sekolah secara tiba-tiba. Anehnya, lelaki itu bersama dengan kucing milik Raib yang hilang, yakni si Hitam. Lelaki tersebut memberikan tugas pada Raib untuk menghilangkan suatu benda, yakni novel tebal yang sedang dibacanya itu. Lelaki kurus tinggi itu hendak kembali menjumpai Raib esok di malam hari.

        //     Hingga keesokan harinya, lelaki itu hadir lagi di dalam cermin kamar Raib. Ia memaksa Raib untuk menghilangkan novel tersebut, tetapi Raib tidak berhasil. Akhirnya, Raib pun diancam oleh lelaki itu. Kucing setia milik Raib, yaitu si Putih secara tiba-tiba diterkam oleh si Hitam yang mana dirinya berukuran lebih jumbo dari biasanya. Apabila Raib tak lekas menghilangkan novel itu, si Putih yang akan lenyap.

        //     Peristiwa aneh selanjutnya, yaitu saat tower di belakang sekolah secara tiba-tiba roboh dan tepat mengenai Raib dan Seli. Namun, menakjubkannya adalah Raib mampu menghilangkan tower dan Seli mampu menyerap listrik dari tower tersebut. Mereka berdua pun heran serta masih tercengang satu sama lain, kemudian Ali menyadarkan dan segera membawa mereka berdua ke aula.

        //     Saat di aula, dari dinding aula secara tiba-tiba muncul lubang tempat di mana keluarnya lelaki kurus tinggi di cermin Raib beserta pasukannya. Mereka hendak membawa Raib kembali ke klan Bulan, yakni tempat Raib berasal. Sebab kini, Raib berada di klan Bumi, klan terendah. Hingga akhirnya, pertempuran dahsyat pun berlangsung, saat Miss Selena berupaya melindungi para muridnya dari lelaki tersebut yang ternyata bernama Tamus.

        //     Mereka bertiga, Raib, Seli, dan Ali berpindah berada di kamar Raib, kemudian berpindah lagi ke dunia Bulan melalui buku PR Matematika milik Raib. Mereka pun tersesat di kediaman Ilo, tepatnya di kamar Olu. Karena Olu berbaik hati, mereka diizinkan untuk bermalam di rumah Ilo dan diberikan fasilitas yang memadai meski mereka merasakan ada kejanggalan.

        //     Petualangan di klan Bulan pun dimulai. Berawal dari kekacauan di komite kota yang kemudian menghantarkan Raib pada Av, yakni kakek dari kakek buyut Ilo. Raib, Ali, dan Seli mempunyai peran yang amat penting untuk mengembalikan situasi keamanan di klan Bulan. Klan Bulan merupakan salah satu dari empat klan yang ada. Pertama, klan Bumi adalah klan terendak, lalu klan Bulan, kemudian klan Matahari, dan klan Bintang.

        //     Awalnya, keempat klan itu berjalan dan hidup dengan damai, tetapi seluruh sekat antardunia telah ditutup oleh si Tanpa Mahkota sebab kudeta kepemimpinannya. Seorang yang hendak merebut alih kepemimpinan. Namun, beruntungnya si Tanpa Mahkota dapat terpenjara oleh buku kematian.

        //     Tamus yang memorakporandakan kota, menginginkan Raib si pemegang buku kehidupan sekaligus buku PR nya guna mengembalikan si Tanpa Mahkota. Mulanya, Raib dijebak dengan penawanan Miss Selena, kemudian ketiga sahabat itu terpojokkan di ruang perpustakaan. Raib pun dipaksa untuk membebaskan si Tanpa Mahkota, tetapi Raib enggan dan menolaknya.

        //     Tamus beserta para prajurit dengan tanpa henti menyerang, tetapi Raib, Seli, dan Miss Selena terus menghadapi serta melawannya, hingga akhirnya pun satu persatu sudah mulai melemah.

        //     Kemudian, kejadian tidak terkira pun terjadi, di saat krusial dan mencemaskan, Raib mencoba untuk membuka buku itu. Dengan tiba-tiba, Ali berubah menjadi beruang besar yang menghantam Tamus dan melemparnya ke dalam lorong buku kematian bersama dengan si Tanpa Mahkota.

        //     Semua orang pun terheran, Raib, Seli, Av, bahkan Miss Selena, sementara Ali yang berhasil akan pertarungan itu tidak sadar bahwa dirinya dapat berubah menjadi seekor beruang besar.

        //     Bagaimanakah akhir kisah mereka? Dapatkan mereka kembali ke klan Bumi? 

        //     Ikuti kisah petualangan Raib, Seli, dan Ali dengan membaca novel Bumi serta miliki ke semua serial Bumi. Dengan demikian, kalian akan turut berjelajah bersama mereka ke klan-klan selanjutnya.',
        //     'cover_book' => 'gambar 2'
        // ]);
    }
}
