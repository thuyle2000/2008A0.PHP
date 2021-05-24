<?php
include_once "myLib.php";

class Book
{
    public $id, $title, $author, $price, $edition;

    //ham dung
    public function __construct($id = 'null', $tua = 'unknown', $tacgia = 'Tam', $gia = 10, $lanXB = 1)
    {
        $this->id = $id;
        $this->title = $tua;
        $this->author = $tacgia;
        $this->price = $gia;
        $this->edition = $lanXB;
    }

    //ham lay danh muc sach trong bang [tbBook]
    public static function getList()
    {
        $cn = connectDB();  //ket noi voi DB [db2008A0]

        //doc het du lieu trong bang [tbbook] -> $result
        $sql = "select * from tbbook";
        $result = $cn->query($sql);     // $result = mysqli_query($cn, $sql);


        if ($result == false) {
            die("<h3>Data Not Found !<h3>");
        }

        //khai bao mang a[] chua cac dong du lieu trong result 
        $a = array();

        while ($row = $result->fetch_assoc()) {
            $a[] = $row;
        }

        // while ($sv = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        //     $a[] = $sv;
        // }

        $cn->close();   // disconnectDB($cn);
        return $a;
    }

    //ham lay danh muc sach theo tua trong bang [tbBook]
    public static function getListTitle($title)
    {
        $cn = connectDB();  //ket noi voi DB [db2008A0]

        //doc het du lieu trong bang [tbbook] -> $result
        $sql = "SELECT * FROM `tbbook` WHERE `title` Like '%$title%'";
        $result = $cn->query($sql);     // $result = mysqli_query($cn, $sql);


        if ($result == false) {
            die("<h3>Data Not Found !<h3>");
        }

        //khai bao mang a[] chua cac dong du lieu trong result 
        $a = array();

        while ($row = $result->fetch_assoc()) {
            $a[] = $row;
        }

        // while ($sv = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        //     $a[] = $sv;
        // }

        $cn->close();   // disconnectDB($cn);
        return $a;
    }

    //ham lay danh muc sach theo don gia trong bang [tbBook]
    public static function getListPrice($from, $to)
    {
        $cn = connectDB();  //ket noi voi DB [db2008A0]

        //doc het du lieu trong bang [tbbook] -> $result
        $sql = "SELECT * FROM `tbbook` WHERE (`price`>=$from AND `price`<=$to)";
        $result = $cn->query($sql);     // $result = mysqli_query($cn, $sql);


        if ($result == false) {
            die("<h3>Data Not Found !<h3>");
        }

        //khai bao mang a[] chua cac dong du lieu trong result 
        $a = array();

        while ($row = $result->fetch_assoc()) {
            $a[] = $row;
        }

        // while ($sv = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        //     $a[] = $sv;
        // }

        $cn->close();   // disconnectDB($cn);
        return $a;
    }


    //ham them 1 quyen sach moi vo bang [tbbook]
    public static function create(Book $book)
    {
        $cn = connectDB();  //ket noi voi DB [db2008A0]

        //chen du lieu cua $book trong bang [tbbook] 
        $sql = "INSERT INTO `tbbook` (`id`, `title`, `author`, `price`, `edition`) VALUES (NULL, '$book->title', '$book->author', '$book->price', '$book->edition')";

        $result = $cn->query($sql);
        $cn->close();

        return $result;
    }



    //ham xoa 1 quyen sach theo ma so id
    public static function delete($id)
    {
        $cn = connectDB();  //ket noi voi DB [db2008A0]

        //xoa sach trong bang [tbbook] theo ma so 
        $sql = "DELETE FROM `tbbook` WHERE `tbbook`.`id` = '$id'";
        $result = $cn->query($sql);

        $cn->close();
        return $result;
    }

    //ham thay doi thong tin sach theo ma so
    public static function edit($id, Book $bookEdit)
    {
        $cn = connectDB();  //ket noi voi DB [db2008A0]

        $sql = "UPDATE `tbbook` SET `title` = '$bookEdit->title', `author` = '$bookEdit->author', `price` = '$bookEdit->price', `edition` = '$bookEdit->edition' WHERE `tbbook`.`id` = '$id' ";

        $result = $cn->query($sql);

        $cn->close();
        return $result;
    }
}


// // test case

// $b1 = new Book;
// echo "<pre>";
// print_r($b1); 

// echo "<pre>";

// them sach moi
// $b2 = new Book(null, 'Framework Laravel', 'Apache', 120, 4);
// print_r($b2);
// Book::create($b2);


// $ds = Book::getList();
// print_r($ds);

// //xoa quyen sach co ma so 15
// Book::delete(8);


//sua thong tin sach - quyen 1
// $b = new Book(null, '(edited) PhP + HTML5 + CSS3', '(edited) Sun', 999, 9);
// Book::edit(1,$b);


// $ds = Book::getList();
// print_r($ds);

//tim cac quyen sach co don gia tu 100-300
// $ds = Book::getListPrice(100, 300);
// echo "<h3> Danh Muc sach co don gia tu 100-300 </h3>";
// print_r($ds);


//tim cac quyen sach co tua 'lap'
// $ds = Book::getListTitle('lap');
// echo "<h3> Danh Muc sach co tua 'lap' </h3>";
// print_r($ds);
