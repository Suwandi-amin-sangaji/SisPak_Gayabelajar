<?php

function answer($kode){
    if($kode=='m1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m14'>Tidak</a>";
    }
    if($kode=='m2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m3-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m15'>Tidak</a>";
    }

    if($kode=='m3-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m4-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m5-a'>Tidak</a>";
    }
    if($kode=='m4-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m5-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s1'>Tidak</a>";
    }
    if($kode=='m5-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m6-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s1'>Tidak</a>";
    }
    if($kode=='m6-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s1'>Tidak</a>";
    }
    
    if($kode=='m7-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m8-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s11'>Tidak</a>";
    }    
    if($kode=='m8-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m9-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m10-a'>Tidak</a>";
    }
    if($kode=='m9-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m10-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s4'>Tidak</a>";
    }
    if($kode=='m10-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m11-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s4'>Tidak</a>";
    }
    if($kode=='m11-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m12-a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s4'>Tidak</a>";
    }


    if($kode=='m12-a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s4'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s4'>Tidak</a>";
    }
    // if($kode=='m13-a'){
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s10'>Ya</a>";
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s11'>Tidak</a>";
    // }

    // if($kode=='m3-b'){
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m4-b'>Ya</a>";
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m8-b'>Tidak</a>";
    // }
    // if($kode=='m4-b'){
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m5-b'>Ya</a>";
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s24'>Tidak</a>";
    // }
    // if($kode=='m5-b'){
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m6-b'>Ya</a>";
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m7-b'>Tidak</a>";
    // }
    // if($kode=='m6-b'){
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s13'>Ya</a>";
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s14'>Tidak</a>";
    // }
    // if($kode=='m7-b'){
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s15'>Ya</a>";
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s16'>Tidak</a>";
    // }    
    // if($kode=='m8-b'){
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m9-b'>Ya</a>";
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m10-b'>Tidak</a>";
    // }
    // if($kode=='m9-b'){
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s17'>Ya</a>";
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s18'>Tidak</a>";
    // }
    // if($kode=='m10-b'){
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m11-b'>Ya</a>";
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m12-b'>Tidak</a>";
    // }
    // if($kode=='m11-b'){
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s19'>Ya</a>";
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s20'>Tidak</a>";
    // }
    // if($kode=='m12-b'){
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s21'>Ya</a>";
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=m13-b'>Tidak</a>";
    // }
    // if($kode=='m13-b'){
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s22'>Ya</a>";
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s23'>Tidak</a>";
    // }

    if($kode=='m14'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m15'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m7-a'>Tidak</a>";
    }
    if($kode=='m15'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m16'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m17'>Tidak</a>";
    }    
    if($kode=='m16'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m17'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m18'>Tidak</a>";
    }
    if($kode=='m17'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m18'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='pertanyaan.php?kode=m7-a'>Tidak</a>";
    }
    if($kode=='m18'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s2'>Tidak</a>";
    }
    // if($kode=='m19'){
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s2'>Ya</a>";
    //     echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s1'>Tidak</a>";
    // }

}
function kesimpulan($jurusan){
    include 'koneksi.php';
    $sql = "SELECT * from tb_kesimpulan WHERE solusi='$jurusan' AND status='setuju'";
    $data = mysqli_query($koneksi,$sql);
    while ($row = mysqli_fetch_assoc($data)) {
        echo '<p>-'.$row['fakta'].'</p>';
    }  
}
function solusi($kode){    
    if ($kode=='s1') {
        $jurusan = "visual";
        kesimpulan($jurusan);        
    }
    if ($kode=='s2') {
        $jurusan = "audio";
        kesimpulan($jurusan);
    }
    if ($kode=='s3') {
        $jurusan = "read";
        kesimpulan($jurusan);
    }
    if ($kode=='s4') {
        $gaya = "kinestetik";
        kesimpulan($gaya);
    }

}
?>