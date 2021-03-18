
<?php
//cek session
if (!empty($_SESSION['admin'])) {
    $query = mysqli_query($config, "SELECT * FROM tbl_perusahaan");
    while ($data = mysqli_fetch_array($query)) {
        echo '
                <div class="col s12" id="header-perusahaan">
                    <div class="card blue-grey white-text">
                        <div class="card-content">';
        if (!empty($data['logo'])) {
            echo '<div class="circle left"><img class="logo" src="./upload/' . $data['logo'] . '"/></div>';
        } else {
            echo '<div class="circle left"><img class="logo" src="./asset/img/logo.png"/></div>';
        }



        if (!empty($data['nama'])) {
            echo '<h5 class="ins">' . $data['nama'] . '</h5>';
        } else {
            echo '<h5 class="ins">SMK Negeri 4 Bogor</h5>';
        }

        if (!empty($data['alamat'])) {
            echo '<p class="almt">' . $data['alamat'] . '</p>';
        } else {
            echo '<p class="almt"> Jl. Raya Tajur Kp. Buntar Kel. Muarasari Kec.Bogor Selatan 16137</p>';
        }
        echo '
                        </div>
                    </div>
                </div>';
    }
} else {
    header("Location: ../");
    die();
}
?>
