<?php
include_once "myLib.php";

class Customer
{
    public $accNo, $custName, $custAdd, $accType, $balance, $password;

    public function __construct($accNo = null, $custName = null, $custAdd = null, $accType = "SA", $balance = "5000", $password = "123")
    {
        $this->accNo = $accNo;
        $this->custName = $custName;
        $this->custAdd = $custAdd;
        $this->accType = $accType;
        $this->balance = $balance;
        $this->password = $password;
    }


    public static function getByAccNo($accno)
    {
        $cn = connectDB();  //ket noi voi DB [db2008A0]

        //tim mau tin trong bang [customeracc] co ma so [$accno] -> $a
        $sql = "SELECT * FROM `customeracc` WHERE `accountno` Like '$accno'";
        $result = $cn->query($sql);     // $result = mysqli_query($cn, $sql);


        if ($result == false) {
            die("<h3>invalid account !<h3>");
        }

        //khai bao mang a[] chua cac dong du lieu trong result 
        $a = array();

        while ($row = $result->fetch_assoc()) {
            $a = $row;
        }

        $cn->close();   // disconnectDB($cn);
        return $a;
    }

    //ham them 1 quyen sach moi vo bang [customeracc]
    public static function create(Customer $cust)
    {
        $cn = connectDB();  //ket noi voi DB [db2008A0]

        //chen du lieu cua $cust vo trong bang [customeracc] 
        $sql = "INSERT INTO `customeracc` (`AccountNo`, `CustName`, `CustAddress`, `AccType`, `BalAmount`, `Password`) VALUES ('$cust->accNo', '$cust->custName', '$cust->custAdd', '$cust->accType', '$cust->balance', '$cust->password')";

        $result = $cn->query($sql);
        $cn->close();

        return $result;
    }
}
