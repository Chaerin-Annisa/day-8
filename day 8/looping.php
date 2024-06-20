    <h1>Latihan looping Chaerin</h1>
    <?php
    echo "<h3>Soal no 1</h3>";
    //looping "i Love PHP"
      /* 
            Soal No 1 
            Looping I Love PHP
            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) dan Looping yang ke dua menurun (Descending). 

            Output: 
            LOOPING PERTAMA
            2 - I Love PHP
            4 - I Love PHP
            6 - I Love PHP
            8 - I Love PHP
            10 - I Love PHP
            12 - I Love PHP
            14 - I Love PHP
            16 - I Love PHP
            18 - I Love PHP
            20- I Love PHP
            LOOPING KEDUA
            20 - I Love PHP
            18 - I Love PHP
            16 - I Love PHP
            14 - I Love PHP
            12 - I Love PHP
            10 - I Love PHP
            8 - I Love PHP
            6 - I Love PHP
            4 - I Love PHP
            2 - I Love PHP
        */
        echo "<looping pertama>"."<br>";
    for ($first = 20; $first <=2; $first+=2){
        echo "i love php <br>";
    }
        echo "<looping kedua>"."<br>";
    for ($first = 2; $first >=20; $firts-=2){
        echo "i love PHP <br>";
    }
    ?>

</body>
</html>