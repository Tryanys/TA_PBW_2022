<?php
    //koneksi
    $koneksi = mysqli_connect('localhost','root','','projek');
    
    //daftar
    if(isset($_POST['register'])){
        // tombol register diklik
        $Username = $_POST['Username'];
        $password = $_POST['password'];

        //fungsi enkripsi
        $epassword = password_hash($password, PASSWORD_DEFAULT);
        //insert to db
        $insert = mysqli_query($koneksi,"INSERT INTO user (Username,password) values ('$Username','$epassword')");

        if($insert){
            //berhasil
            header('location:index.php');
        } else{
            //gagal
            echo '
            <script>
                alert("Registrasi Gagal");
                window.location.href="register.php";
            </script>
            ';
        }
    }

    //login
    if(isset($_POST['login'])){
        // tombol login diklik
        $Username = $_POST['Username'];
        $password = $_POST['password'];

        //insert to db
        $cekdb = mysqli_query($koneksi,"SELECT * FROM user where Username ='$Username'");
        $hitung = mysqli_num_rows($cekdb);
        $pw = mysqli_fetch_array($cekdb);
        $passwordsekarang = $pw['password'];

        if($hitung>0){
            //jika ada verifikasi pass
            if(password_verify($password,$passwordsekarang)){
                //jika pas benar
                header('location:home.php');
            } else{
                echo '
            <script>
                alert("password salah");
                window.location.href="register.php";
            </script>
            ';
            }
            
        } else{
            //gagal
            echo '
            <script>
                alert("login Gagal");
                window.location.href="register.php";
            </script>
            ';
        }
    }
?>