<?php
require_once "../../functions/db.php";

function query($query)
{
    global $link;
    $result = mysqli_query($link, $query);
    $rows = [];
    while ($row  = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function add($data)
{
    global $link;
    $judul = htmlspecialchars($data['judul']);
    $info = htmlspecialchars($data['info']);
    $maps = $data['maps'];

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if (!empty(trim($judul)) && !empty(trim($info)) && !empty(trim($maps))) {
        $query = "INSERT INTO hotel VALUES('','$judul','$gambar','$info','$maps')";
        mysqli_query($link, $query);
    }


    return mysqli_affected_rows($link);
}

function edit($data)
{
    global $link;
    $id =    $data["id"];
    $judul = htmlspecialchars($data['judul']);
    $info = htmlspecialchars($data['info']);
    $maps = $data['maps'];
    $oldFile = htmlspecialchars($data['oldFile']);

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $oldFile;
    } else {
        $gambar = upload();
        if (!$gambar) {
            return false;
        }
    }
    $query = "UPDATE hotel SET judul= '$judul',gambar = '$gambar', info = '$info', maps = '$maps'  WHERE id = $id ";
    mysqli_query($link, $query);
    return mysqli_affected_rows($link);
}

function upload()
{
    $namefile = $_FILES['gambar']['name'];
    $sizefile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>
            alert('Pilih Gambar terlebih dahulu!');
        </script>";
        return false;
    }
    // img validation
    $formatValidation = ['jpg', 'png', 'jpeg'];
    $formatGambar = explode('.', $namefile);
    $formatGambar = strtolower(end($formatGambar));
    if (!in_array($formatGambar, $formatValidation)) {
        echo "<script>
            alert('yang di uploade bukan gambar');
        </script>";
        return false;
    }

    // img size validation
    if ($sizefile > 1000000) {
        echo "<script>
            alert('size terlalu besar');
        </script>";
        return false;
    }

    // generate new file
    $newFile = uniqid();
    $newFile .= '.';
    $newFile .= $formatGambar;

    move_uploaded_file($tmpName, 'img/' . $newFile);

    return $newFile;
}




function delete($id)
{
    global $link;
    mysqli_query($link, "DELETE FROM hotel WHERE id = $id");
    return mysqli_affected_rows($link);
}

function excerpt($string)
{
    $string = substr($string, 0, 107);
    return $string . "....";
}
