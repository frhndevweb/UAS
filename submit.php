<!DOCTYPE html>
<html>
<head>
    <title>Ulangan Akhir Semester 2 PAI Kelas 11</title>
</head>
<body>
    <h1>Ulangan Akhir Semester 2 PAI Kelas 11</h1>
    <form action="submit.php" method="post">
        <?php
        $questions = [
            "1. Siapa nabi yang mendapatkan julukan Khalilullah?",
            "2. Kitab suci yang diturunkan kepada Nabi Daud adalah?",
            "3. Surah pertama yang diturunkan di Mekah adalah?",
            "4. Puasa pada bulan Ramadan hukumnya adalah?",
            "5. Rukun Islam yang keempat adalah?",
            "6. Shalat lima waktu dalam sehari semalam disebut?",
            "7. Hari kebangkitan disebut juga dengan istilah?",
            "8. Malaikat yang bertugas mencatat amal manusia adalah?",
            "9. Haji wajib dilakukan oleh umat Islam yang mampu seumur hidup sekali merupakan salah satu syarat?",
            "10. Tindakan menolong sesama tanpa mengharapkan imbalan disebut?",
            "11. Surah Al-Fatihah terdiri dari berapa ayat?",
            "12. Zakat yang wajib dikeluarkan pada bulan Ramadan disebut?",
            "13. Rukun iman yang ketiga adalah?",
            "14. Kitab suci umat Islam adalah?",
            "15. Hari kiamat disebut juga dengan istilah?",
            "16. Puasa yang diwajibkan bagi umat Islam pada bulan Ramadan adalah puasa?",
            "17. Nabi Muhammad SAW lahir di kota?",
            "18. Siapa malaikat yang bertugas meniup sangkakala pada hari kiamat?",
            "19. Puasa di bulan Ramadan dimulai dari waktu?",
            "20. Surah yang paling pendek dalam Al-Qur'an adalah?",
            "21. Hari raya umat Islam yang jatuh setelah bulan Ramadan adalah?",
            "22. Ibadah haji dilaksanakan pada bulan?",
            "23. Shalat yang dilakukan pada malam hari disebut?",
            "24. Kitab suci yang diturunkan kepada Nabi Musa adalah?",
            "25. Nama lain dari surah Al-Ikhlas adalah?",
            "26. Siapa nabi yang dikenal dengan sebutan Ulul Azmi?",
            "27. Puasa di bulan Ramadan merupakan rukun Islam yang ke?",
            "28. Hari raya umat Islam yang jatuh setelah Idul Fitri adalah?",
            "29. Shalat yang dilakukan pada hari Jumat disebut?",
            "30. Siapa yang disebut sebagai Khulafaur Rasyidin?",
            "31. Malaikat yang bertugas mencabut nyawa adalah?",
            "32. Nabi yang dikenal dengan sebutan Ulul Azmi adalah?",
            "33. Hari raya Idul Adha jatuh pada tanggal?",
            "34. Shalat yang dilakukan pada malam hari bulan Ramadan disebut?",
            "35. Kitab suci yang diturunkan kepada Nabi Muhammad SAW adalah?",
            "36. Siapa malaikat yang bertugas menyampaikan wahyu?",
            "37. Surah terakhir dalam Al-Qur'an adalah?",
            "38. Haji dilaksanakan pada bulan?",
            "39. Puasa pada bulan Ramadan hukumnya adalah?",
            "40. Rukun Islam yang pertama adalah?",
            "41. Hari kebangkitan disebut juga dengan istilah?",
            "42. Malaikat yang bertugas mencatat amal baik dan buruk adalah?",
            "43. Zakat yang wajib dikeluarkan oleh umat Islam adalah?",
            "44. Rukun iman yang pertama adalah?",
            "45. Nabi yang menerima wahyu dalam bentuk kitab Zabur adalah?",
            "46. Shalat yang dilakukan pada pagi hari disebut?",
            "47. Nabi yang dikenal sebagai nabi terakhir adalah?",
            "48. Malaikat yang bertugas meniup sangkakala adalah?",
            "49. Surah pertama dalam Al-Qur'an adalah?",
            "50. Nabi yang dikenal dengan sebutan Khalilullah adalah?"
        ];

        $options = [
            ["A. Nabi Musa", "B. Nabi Ibrahim", "C. Nabi Muhammad", "D. Nabi Isa"],
            ["A. Injil", "B. Taurat", "C. Zabur", "D. Al-Qur'an"],
            ["A. Al-Fatihah", "B. Al-Alaq", "C. Al-Ikhlas", "D. An-Nas"],
            ["A. Sunnah", "B. Wajib", "C. Makruh", "D. Mubah"],
            ["A. Syahadat", "B. Shalat", "C. Puasa", "D. Zakat"],
            ["A. Shalat Sunah", "B. Shalat Fardhu", "C. Shalat Tahajud", "D. Shalat Dhuha"],
            ["A. Yaumul Hisab", "B. Yaumul Akhir", "C. Yaumul Mahsyar", "D. Yaumul Jaza"],
            ["A. Jibril", "B. Mikail", "C. Israfil", "D. Raqib dan Atid"],
            ["A. Rukun Islam", "B. Rukun Iman", "C. Syarat Sah", "D. Syarat Wajib"],
            ["A. Zakat", "B. Sedekah", "C. Infak", "D. Waqaf"],
            ["A. 5 ayat", "B. 6 ayat", "C. 7 ayat", "D. 8 ayat"],
            ["A. Zakat Fitrah", "B. Zakat Mal", "C. Zakat Nafs", "D. Zakat Harta"],
            ["A. Iman kepada Allah", "B. Iman kepada Malaikat", "C. Iman kepada Kitab", "D. Iman kepada Rasul"],
            ["A. Injil", "B. Taurat", "C. Al-Qur'an", "D. Zabur"],
            ["A. Yaumul Mahsyar", "B. Yaumul Jaza", "C. Yaumul Hisab", "D. Yaumul Qiyamah"],
            ["A. Puasa Sunah", "B. Puasa Wajib", "C. Puasa Nazar", "D. Puasa Qadha"],
            ["A. Mekah", "B. Madinah", "C. Taif", "D. Riyadh"],
            ["A. Israfil", "B. Jibril", "C. Mikail", "D. Munkar"],
            ["A. Subuh", "B. Dzuhur", "C. Maghrib", "D. Isya"],
            ["A. Al-Fatihah", "B. Al-Ikhlas", "C. Al-Kawthar", "D. Al-Lahab"],
            ["A. Idul Fitri", "B. Idul Adha", "C. Tahun Baru Hijriyah", "D. Maulid Nabi"],
            ["A. Ramadan", "B. Syawal", "C. Dzulhijjah", "D. Muharram"],
            ["A. Shalat Tahajud", "B. Shalat Witir", "C. Shalat Tarawih", "D. Shalat Lail"],
            ["A. Injil", "B. Taurat", "C. Al-Qur'an", "D. Zabur"],
            ["A. An-Nas", "B. Al-Falaq", "C. Al-Ikhlas", "D. Al-Fatihah"],
            ["A. Nabi Nuh", "B. Nabi Musa", "C. Nabi Isa", "D. Nabi Ibrahim"],
            ["A. Ketiga", "B. Keempat", "C. Kelima", "D. Kedua"],
            ["A. Idul Adha", "B. Maulid Nabi", "C. Tahun Baru Hijriyah", "D. Isra Miraj"],
            ["A. Shalat Wajib", "B. Shalat Jumat", "C. Shalat Sunah", "D. Shalat Id"],
            ["A. Sahabat", "B. Khulafaur Rasyidin", "C. Tabiin", "D. Ulama"],
            ["A. Israfil", "B. Jibril", "C. Mikail", "D. Izrail"],
            ["A. Nabi Nuh", "B. Nabi Ibrahim", "C. Nabi Musa", "D. Nabi Isa"],
            ["A. 10 Dzulhijjah", "B. 1 Syawal", "C. 12 Rabiul Awal", "D. 27 Rajab"],
            ["A. Shalat Witir", "B. Shalat Tahajud", "C. Shalat Tarawih", "D. Shalat Lail"],
            ["A. Injil", "B. Taurat", "C. Al-Qur'an", "D. Zabur"],
            ["A. Jibril", "B. Israfil", "C. Mikail", "D. Munkar"],
            ["A. Al-Fatihah", "B. Al-Nas", "C. Al-Ikhlas", "D. Al-Falaq"],
            ["A. Ramadan", "B. Syawal", "C. Dzulhijjah", "D. Muharram"],
            ["A. Sunnah", "B. Wajib", "C. Makruh", "D. Mubah"],
            ["A. Syahadat", "B. Shalat", "C. Puasa", "D. Zakat"],
            ["A. Yaumul Hisab", "B. Yaumul Akhir", "C. Yaumul Mahsyar", "D. Yaumul Jaza"],
            ["A. Jibril", "B. Mikail", "C. Israfil", "D. Raqib dan Atid"],
            ["A. Zakat Fitrah", "B. Zakat Mal", "C. Zakat Nafs", "D. Zakat Harta"],
            ["A. Iman kepada Allah", "B. Iman kepada Malaikat", "C. Iman kepada Kitab", "D. Iman kepada Rasul"],
            ["A. Nabi Musa", "B. Nabi Daud", "C. Nabi Isa", "D. Nabi Muhammad"],
            ["A. Shalat Subuh", "B. Shalat Dhuha", "C. Shalat Tahajud", "D. Shalat Witir"],
            ["A. Nabi Musa", "B. Nabi Isa", "C. Nabi Muhammad", "D. Nabi Ibrahim"],
            ["A. Israfil", "B. Jibril", "C. Mikail", "D. Munkar"],
            ["A. Al-Fatihah", "B. Al-Baqarah", "C. Al-Nas", "D. Al-Ikhlas"],
            ["A. Nabi Musa", "B. Nabi Ibrahim", "C. Nabi Muhammad", "D. Nabi Isa"]
        ];

        for ($i = 0; $i < count($questions); $i++) {
            echo "<p>" . $questions[$i] . "</p>";
            foreach ($options[$i] as $option) {
                echo '<input type="radio" name="question' . ($i+1) . '" value="' . $option . '"> ' . $option . '<br>';
            }
        }
        ?>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
