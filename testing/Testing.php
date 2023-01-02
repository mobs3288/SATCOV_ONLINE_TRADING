<?php
// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit

require 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;

// Class untuk run Testing.
class Testing extends TestCase
{
    public function testAdmin(){
        // Class yang mau di TEST.
        require_once dirname(__FILE__).'/../src/model/Admin.php';
        // Kita pakai class yang mau kita test.
        $Admin = new Admin();

        $this->setOutputCallback(function() {});
        error_reporting(E_ERROR | E_PARSE); // Session start error

        $_POST['kode_saham'] = "YOLO";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertTrue($tes);

        $_POST['kode_saham'] = "YOLO";
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOLO";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOLO";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOLO";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = "Empat Puluh Ribu Enam Ratus Tujuh Puluh Delapan";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOLO";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = "Empat Puluh Ribu Enam Ratus Tujuh Puluh Delapan";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOLO";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 20;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOLO";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 49932;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOLO";
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOLO";
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = "Empat Puluh Ribu Enam Ratus Tujuh Puluh Delapan";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOLO";
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = 40900;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOLO";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOLO";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = "Dua Ribu Lima Ratus Tiga Puluh Satu";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOLO";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = 20;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOLO";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = 40900;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = "Empat Puluh Ribu Enam Ratus Tujuh Puluh Delapan";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 44;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 49932;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = "Empat Puluh Ribu Enam Ratus Tujuh Puluh Delapan";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 20;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = 40900;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = "Dua Ribu Lima Ratus Tiga Puluh Satu";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = 20;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOYOY";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = 40900;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOY";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOY";
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOY";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOY";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOY";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = "Empat Puluh Ribu Enam Ratus Tujuh Puluh Delapan";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOY";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 24;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOY";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 49932;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOY";
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOY";
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = "Empat Puluh Ribu Enam Ratus Tujuh Puluh Delapan";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOY";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 20;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOY";
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = 40900;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOY";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOY";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = "Dua Ribu Lima Ratus Tiga Puluh Satu";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOY";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = 20;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "YOY";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = 40900;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = 8411;
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = 8411;
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = 8411;
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = 8411;
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = 8411;
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = "Empat Puluh Ribu Enam Ratus Tujuh Puluh Delapan";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = 8411;
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 20;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = 8411;
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 49932;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = 8411;
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = 8411;
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = "Empat Puluh Ribu Enam Ratus Tujuh Puluh Delapan";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = 8411;
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = 40900;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = 8411;
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = 8411;
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = "Dua Ribu Lima Ratus Tiga Puluh Satu";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = 8411;
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = 20;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = 8411;
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = 40900;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "BKYN";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "BKYN";
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "BKYN";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = 17234;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "BKYN";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "BKYN";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = "Empat Puluh Ribu Enam Ratus Tujuh Puluh Delapan";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "BKYN";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 49;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "BKYN";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 49932;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "BKYN";
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "BKYN";
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = "Empat Puluh Ribu Enam Ratus Tujuh Puluh Delapan";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "BKYN";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 20;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "BKYN";
        $_POST['nama_saham'] = "You Only Live Once";
        $_POST['harga_saham'] = 40900;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "BKYN";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "BKYN";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = "Dua Ribu Lima Ratus Tiga Puluh Satu";
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "BKYN";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = 20;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = "BKYN";
        $_POST['nama_saham'] = "Bukan Yayan Corp.";
        $_POST['harga_saham'] = 40900;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);

        $_POST['kode_saham'] = NULL;
        $_POST['nama_saham'] = NULL;
        $_POST['harga_saham'] = NULL;
        $tes = $Admin->add_saham();
        $this->assertFalse($tes);
    } 

    public function testCashBalance(){
        require_once dirname(__FILE__).'/../src/model/CashBalance.php';
        $CB = new CashBalance();
        $this->setOutputCallback(function() {});
        error_reporting(E_ERROR | E_PARSE); // Session start error

        $_SESSION['username'] = "avc";
        $tes = $CB->showAmount();
        $this->assertTrue($tes);

        $_SESSION['username'] = "hahahihihoho";
        $tes = $CB->showAmount();
        $this->assertFalse($tes);
        
        $_SESSION['username'] = NULL;
        $tes = $CB->showAmount();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['username'] = "7asley";
        $_SESSION['tot'] = 50000;
        $tes = $CB->Withdraw();
        $this->assertTrue($tes);

        $_POST['password'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = NULL;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = "sekalilagiasik";
        $_SESSION['tot'] = NULL;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = "sekalilagiasik";
        $_SESSION['tot'] = 950000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = "sekalilagiasik";
        $_SESSION['tot'] = 5000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = "sekalilagiasik";
        $_SESSION['tot'] = 0;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = "sekalilagiasik";
        $_SESSION['tot'] = -105250;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = "salep77";
        $_SESSION['tot'] = 5000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = "7aley";
        $_SESSION['tot'] = NULL;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = "sekalikali";
        $_SESSION['tot'] = 950000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = "sekalilagiaye";
        $_SESSION['tot'] = 5000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = "sekalagiasi";
        $_SESSION['tot'] = -1007500;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = "sekalagiasi";
        $_SESSION['tot'] = 0;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 5000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = NULL;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 950000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 5000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 0;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "7asley";
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = -8300;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 5000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = NULL;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 950000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 5000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 0;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = -500;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 5000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['username'] = "7adsley";
        $_SESSION['tot'] = 950000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 0;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = -9754;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 5000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = NULL;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 950000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 5000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 0;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = -127320;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['username'] = "7aslwey";
        $_SESSION['tot'] = 5000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['username'] = "7adsley";
        $_SESSION['tot'] = 950000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['username'] = "7asle";
        $_SESSION['tot'] = 5000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['username'] = "7asly";
        $_SESSION['tot'] = -500;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalagiasik";
        $_SESSION['username'] = "7aslwey";
        $_SESSION['tot'] = 5000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalagiasik";
        $_SESSION['username'] = "7aslwey";
        $_SESSION['tot'] = NULL;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['username'] = "7adsley";
        $_SESSION['tot'] = 950000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sealilagiasik";
        $_SESSION['username'] = "7asle";
        $_SESSION['tot'] = 5000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['username'] = "7sley";
        $_SESSION['tot'] = 0;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['username'] = "7aaley";
        $_SESSION['tot'] = -9754;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['username'] = "asley";
        $_SESSION['tot'] = 5000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['username'] = "asley";
        $_SESSION['tot'] = NULL;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['username'] = "7ley";
        $_SESSION['tot'] = 950000000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['username'] = "aley";
        $_SESSION['tot'] = 5000;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['username'] = "7aly";
        $_SESSION['tot'] = 0;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['username'] = "askey";
        $_SESSION['tot'] = 0;
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['username'] = "7asley";
        $_SESSION['tot'] = "a";
        $tes = $CB->Withdraw();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mckellenxj";
        $_SESSION['tot'] = 1750000;
        $tes = $CB->topUp();
        $this->assertTrue($tes);

        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = NULL;
        $tes = $CB->topUp();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mckellenxj";
        $_SESSION['tot'] = NULL;
        $tes = $CB->topUp();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mckellenxj";
        $_SESSION['tot'] = 2500;
        $tes = $CB->topUp();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mckellenxj";
        $_SESSION['tot'] = 1000000000;
        $tes = $CB->topUp();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mckellenxj";
        $_SESSION['tot'] = 0;
        $tes = $CB->topUp();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mckellenxj";
        $_SESSION['tot'] = -125000;
        $tes = $CB->topUp();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 1750000;
        $tes = $CB->topUp();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 2500;
        $tes = $CB->topUp();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 1000000000;
        $tes = $CB->topUp();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_SESSION['tot'] = 0;
        $tes = $CB->topUp();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mkeelenxj";
        $_SESSION['tot'] = NULL;
        $tes = $CB->topUp();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mcklenxj";
        $_SESSION['tot'] = 2500;
        $tes = $CB->topUp();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mxkellenxj";
        $_SESSION['tot'] = 1000000000;
        $tes = $CB->topUp();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mckellenxz";
        $_SESSION['tot'] = 0;
        $tes = $CB->topUp();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mckellenxz";
        $_SESSION['tot'] = -125000;
        $tes = $CB->topUp();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mckellenxz";
        $_SESSION['tot'] = "a";
        $tes = $CB->topUp();
        $this->assertFalse($tes);

    } 

    public function testGuest(){
        require_once dirname(__FILE__).'/../src/model/Guest.php';
        $G = new Guest();
        $this->setOutputCallback(function() {});
        error_reporting(E_ERROR | E_PARSE); // Session start error

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] ="mikewazowski";
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertTrue($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mdibnu";
        $_POST['password'] ="mikemikekepuncakgunung";
        $_POST['password_confirmation'] = "mikemikekepuncakgunung";
        $_POST['email'] = "ibnmhmd@gmail.com";
        $tes = $G->Register();
        $this->assertTrue($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] ="mikewazowski";
        $_POST['password_confirmation'] = "mikewaxzowski";
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] ="mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "ashiap";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "ashiap";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = NULL;
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = NULL;
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "miewazowski";
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = NULL;
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "miewazowski";
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikazowski";
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mikazowski";
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = NULL;
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = NULL;
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "udaradinginpengenbetotbass@gmail.com";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] ="mikewazowski";
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] ="mikewazowski";
        $_POST['password_confirmation'] = "mikewaxzowski";
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] ="mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mikewaxzowski";
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowskii";
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowsk";
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "ashiap";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mikewazowsk";
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "ashiap";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = NULL;
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = NULL;
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "miewazowski";
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = NULL;
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "miewazowski";
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "mi8nu";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikazowski";
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "mi8nu";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "mi8nu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "mi8nu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikazowski";
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mikazowski";
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = NULL;
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "nikewazowski";
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = NULL;
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "nikewazowski";
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = "Udinudinptot.tatang";
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewaxzowski";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "mi8nu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowsk";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = "ashiap";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mikewazowsk";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = NULL;
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = NULL;
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "miewazowski";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = NULL;
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "miewazowski";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = "Muhammad Ibnu";
        $_POST['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "mi8nu";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "mi8nu";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikazowski";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "mi8nu";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "mi8nu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mikazowski";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "mi8nu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowsku";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mikewazowsku";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = "ashiap";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = NULL;
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = NULL;
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mikewazowski";
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

        $_POST['nama_lengkap'] = NULL;
        $_POST['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $_POST['email'] = NULL;
        $tes = $G->Register();
        $this->assertFalse($tes);

    } 

    public function testInvestor(){
        require_once dirname(__FILE__).'/../src/model/Investor.php';
        $In = new Investor();
        $this->setOutputCallback(function() {});
        error_reporting(E_ERROR | E_PARSE); // Session start error

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertTrue($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = NULL;
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -25;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "skalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "skalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "skalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "skalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asdley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asdley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asdley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 12;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7adsley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7sley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 12;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7aslety";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "skalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "seklilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekailagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = 12;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagisik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asdley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "skalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "seklilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekailagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = 12;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asdley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7sley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "ekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekaligiasik";
        $_SESSION['lot'] = 12;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiaik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7aslety";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 12;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asdley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 12;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asdley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7sley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 12;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = "7aslety";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = 12;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = 12;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 15;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";

        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -25;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "BBCA";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -25;
        $_SESSION['kode_saham'] = "BBRI";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->sellStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "BBNI";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertTrue($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1500;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -25;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "skalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "skaligiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sklilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "skalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "skaligiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sklilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "skalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asdley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asdley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);
        
        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7sley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7aslety";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "skalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "seklilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekailagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagisik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asdley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "skailagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "seklilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asdley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7sley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "ekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekaligiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiaik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7aslety";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiaik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7aslety";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);
        
        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asdley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "asley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = "7asdley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7sley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);
        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7aley";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asey";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7asle";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = "7aslety";
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);
        
        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasik";
        $_SESSION['lot'] = -25;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagsik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekaligiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "ekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagiasi";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagsik";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekaligiasik";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekilagiasik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "ekalilagiasik";
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "seklilagiasik";
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilagias";
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sekalilaiasi";
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "sklilagisik";
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = "selagiasik";
        $_SESSION['lot'] = -25;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = "TLKM";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);
        
        $_POST['password'] = NULL;
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = -5;
        $_SESSION['kode_saham'] = NULL;
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 5;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = NULL;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 0;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);

        $_POST['password'] = NULL;
        $_SESSION['lot'] = 1000;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);
        
        $_POST['password'] = NULL;
        $_SESSION['lot'] = -25;
        $_SESSION['kode_saham'] = "XXYY";
        $_SESSION['username'] = NULL;
        $_SESSION['harga_saham'] = rand(50, 40000);
        $tes = $In->buyStock();
        $this->assertFalse($tes);



    }

    public function testPortofolio(){
        require_once dirname(__FILE__).'/../src/model/Portfolio.php';
        $Porto = new Portfolio();
        $this->setOutputCallback(function() {});
        error_reporting(E_ERROR | E_PARSE); // Session start error

        $_SESSION['username'] = "7asley";
        $tes = $Porto->showPortofolio();
        $this->assertTrue($tes);

        $_SESSION['username'] = "hahahihihoho";
        $tes = $Porto->showPortofolio();
        $this->assertFalse($tes);
    }

    public function testStock(){
        require_once dirname(__FILE__).'/../src/model/Stock.php';
        $St = new Stock();
        $this->setOutputCallback(function() {});
        error_reporting(E_ERROR | E_PARSE); // Session start error

        $_SESSION['level'] = NULL;
        $tes = $St->showStock();
        $this->assertTrue($tes);

        $_SESSION['level'] = "user";
        $tes = $St->showStock();
        $this->assertTrue($tes);

        $_SESSION['level'] = "admin";
        $tes = $St->showStock();
        $this->assertTrue($tes);

        $_POST['search'] = "AADC";
        $tes = $St->Search();
        $this->assertTrue($tes);

        $_POST['search'] = "Asep Arasep Dinamo Center Tbk.";
        $tes = $St->Search();
        $this->assertTrue($tes);

        $_POST['search'] = "STFU";
        $tes = $St->Search();
        $this->assertFalse($tes);

        $_POST['search'] = "UDARA DINGIN PENGEN TOTALITAS";
        $tes = $St->Search();
        $this->assertFalse($tes);
    }

    public function testTransaction(){
        require_once dirname(__FILE__).'/../src/model/Transaction.php';
        $Ts = new Transaction();
        $this->setOutputCallback(function() {});
        error_reporting(E_ERROR | E_PARSE); // Session start error

        $_SESSION['username'] = "7asley";
        $tes = $Ts->showAllTransaction();
        $this->assertTrue($tes);

        $_SESSION['username'] = "HAHAHIHIHOHO";
        $tes = $Ts->showAllTransaction();
        $this->assertFalse($tes);
    }

    public function testUser(){
        require_once dirname(__FILE__).'/../src/model/User.php';
        $Us = new User();
        $this->setOutputCallback(function() {});
        error_reporting(E_ERROR | E_PARSE); // Session start error

        $_POST['username'] = "7asley";
        $_POST['password'] = "sekalilagiasik";
        $tes = $Us->validate();
        $this->assertTrue($tes);

        $_POST['username'] = "bukankhalid";
        $_POST['password'] = "bismillah";
        $tes = $Us->validate();
        $this->assertTrue($tes);

        $_POST['username'] = "7asley";
        $_POST['password'] = "swkalikagiasik";
        $tes = $Us->validate();
        $this->assertFalse($tes);

        $_POST['username'] = "7asley";
        $_POST['password'] = NULL;
        $tes = $Us->validate();
        $this->assertFalse($tes);

        $_POST['username'] = "7asey";
        $_POST['password'] = "sekalilagiasik";
        $tes = $Us->validate();
        $this->assertFalse($tes);

        $_POST['username'] = "7asey";
        $_POST['password'] = "swkalikagiasik";
        $tes = $Us->validate();
        $this->assertFalse($tes);

        $_POST['username'] = "7asey";
        $_POST['password'] = NULL;
        $tes = $Us->validate();
        $this->assertFalse($tes);

        $_POST['username'] = NULL;
        $_POST['password'] = "sekalilagiasik";
        $tes = $Us->validate();
        $this->assertFalse($tes);

        $_POST['username'] = NULL;
        $_POST['password'] = "swkalikagoasik";
        $tes = $Us->validate();
        $this->assertFalse($tes);

        $_POST['username'] = NULL;
        $_POST['password'] = NULL;
        $tes = $Us->validate();
        $this->assertFalse($tes);

        $_SESSION['username'] = "anemia";
        $tes = $Us->showRole();
        $this->assertTrue($tes);

        $_SESSION['username'] = "bukanyayan";
        $tes = $Us->showRole();
        $this->assertTrue($tes);

        $_SESSION['username'] = NULL;
        $tes = $Us->showRole();
        $this->assertFalse($tes);

        $_SESSION['username'] = "tingkiwingko";
        $tes = $Us->showRole();
        $this->assertFalse($tes);

        $_SESSION['username'] = "anemia";
        $tes = $Us->showUsername();
        $this->assertTrue($tes);

        $_SESSION['username'] = NULL;
        $tes = $Us->showUsername();
        $this->assertFalse($tes);

        $_SESSION['username'] = "lalapoo";
        $tes = $Us->showUsername();
        $this->assertFalse($tes);

        $_SESSION['username'] = "anemia";
        $tes = $Us->showName();
        $this->assertTrue($tes);

        $_SESSION['username'] = NULL;
        $tes = $Us->showName();
        $this->assertFalse($tes);

        $_SESSION['username'] = "dispy";
        $tes = $Us->showName();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = "mikwazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = NULL;
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "mikewazowski";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = "mikwazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = NULL;
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "mikewazowski";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = "mikwazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "mikewazowski";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = NULL;
        $_POST['new_password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = "mikwazowski";
        $_POST['new_password'] = "mikewazowski";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = NULL;
        $_POST['new_password'] = "mikewazowski";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = "mikwazowski";
        $_POST['new_password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "mikewazowski";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);
        
        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = "mikwazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = NULL;
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = "mikwazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['old_password'] = NULL;
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = "mikwazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = NULL;
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = "mikwazowski";
        $_POST['new_password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = NULL;
        $_POST['new_password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "mikewazowski";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = NULL;
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = "mikwazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['old_password'] = NULL;
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = "mikwazowski";
        $_POST['new_password'] = "mikewazowski";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = "mikwazowski";
        $_POST['new_password'] = "mikewazowski";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = NULL;
        $_POST['new_password'] = "mikewazowski";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = "mikwazowski";
        $_POST['new_password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = NULL;
        $_POST['new_password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "mikewazowski";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "mikewazowski";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = "mikwazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = NULL;
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = "mikwazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = NULL;
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->changePassword();
        $this->assertFalse($tes);

        // TRUE HERE

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = "mikewazowski";
        $_POST['new_password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->changePassword();
        $this->assertTrue($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['old_password'] = "m1kewasowzki";
        $_POST['new_password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowski";
        $tes = $Us->changePassword();
        $this->assertTrue($tes);


        $_SESSION['username'] = "mi8nu";
        $_POST['password'] = "m1kewasowzk";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = "m1kewasowzk";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['password'] = "m1kewasowzk";
        $_POST['password_confirmation'] = "mkewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mkewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['password'] = "m1kewasowzk";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = "mkewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = "mkewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = "mkewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = "mkewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['password'] ="mkewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['password'] =NULL;
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['password'] ="m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['password'] ="m1kewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] ="m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] ="mkewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = "mkewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzki";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = "m1kewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['password'] = "mkewasowzki";
        $_POST['password_confirmation'] = "mikewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "mikewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['password'] = "mkewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = "mkewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = "mkewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "ibnu";
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = "mkewasowzki";
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = "m1kewasowzk";
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = "mi8nu";
        $_POST['password'] = "mkewasowzki";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $_POST['password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->deleteAccount();
        $this->assertFalse($tes);

        // TRUE HERE
        $_SESSION['username'] = "mi8nu";
        $_POST['password'] = "mikewazowski";
        $_POST['password_confirmation'] = "mikewazowski";
        $tes = $Us->deleteAccount();
        $this->assertTrue($tes);

        $_SESSION['user_temp'] = "airacilly";
        $_POST['new_password'] = NULL;
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->forgotPassword();
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airacilly";
        $_POST['new_password'] = "ailopyu";
        $_POST['password_confirmation'] = "iloptu";
        $tes = $Us->forgotPassword();
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airacilly";
        $_POST['new_password'] = "ailopyu";
        $_POST['password_confirmation'] = "airapiudara";
        $tes = $Us->forgotPassword();
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airacilly";
        $_POST['new_password'] = "ailopyu";
        $_POST['password_confirmation'] = NULL;
        $tes = $Us->forgotPassword();
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airacilly"; 
        $_POST['new_password'] = "airapiudara"; 
        $_POST['password_confirmation'] = "iloptu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airacilly"; 
        $_POST['new_password'] = "airapiudara"; 
        $_POST['password_confirmation'] = "ailopyu";
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airacilly"; 
        $_POST['new_password'] = "airapiudara"; 
        $_POST['password_confirmation'] = NULL; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airacilly"; 
        $_POST['new_password'] = NULL; 
        $_POST['password_confirmation'] = "iloptu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airacilly"; 
        $_POST['new_password'] = NULL; 
        $_POST['password_confirmation'] = "ailopyu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airacilly"; 
        $_POST['new_password'] = NULL; 
        $_POST['password_confirmation'] = "airapiudara"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airashiap"; 
        $_POST['new_password'] = "ailopyu"; 
        $_POST['password_confirmation'] = "iloptu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);
        
        $_SESSION['user_temp'] = "airashiap"; 
        $_POST['new_password'] = "ailopyu"; 
        $_POST['password_confirmation'] = "ailopyu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airashiap"; 
        $_POST['new_password'] = "ailopyu"; 
        $_POST['password_confirmation'] = "airapiudara"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airashiap"; 
        $_POST['new_password'] = "airapiudara"; 
        $_POST['password_confirmation'] = NULL; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airashiap"; 
        $_POST['new_password'] = "airapiudara"; 
        $_POST['password_confirmation'] = "iloptu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airashiap"; 
        $_POST['new_password'] = "airapiudara"; 
        $_POST['password_confirmation'] = "ailopyu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airashiap"; 
        $_POST['new_password'] = "airapiudara"; 
        $_POST['password_confirmation'] = "airapiudara"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airashiap"; 
        $_POST['new_password'] = "airapiudara"; 
        $_POST['password_confirmation'] = NULL; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airashiap"; 
        $_POST['new_password'] = NULL; 
        $_POST['password_confirmation'] = "iloptu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airashiap"; 
        $_POST['new_password'] = NULL; 
        $_POST['password_confirmation'] = "ailopyu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = "airashiap"; 
        $_POST['new_password'] = NULL; 
        $_POST['password_confirmation'] = "airapiudara"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);
        
        $_SESSION['user_temp'] = "airashiap"; 
        $_POST['new_password'] = NULL; 
        $_POST['password_confirmation'] = NULL; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = NULL; 
        $_POST['new_password'] = "ailopyu"; 
        $_POST['password_confirmation'] = "ailopyu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = NULL; 
        $_POST['new_password'] = "ailopyu"; 
        $_POST['password_confirmation'] = "iloptu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = NULL; 
        $_POST['new_password'] = "ailopyu"; 
        $_POST['password_confirmation'] = "airapiudara"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = NULL; 
        $_POST['new_password'] = "ailopyu"; 
        $_POST['password_confirmation'] = NULL; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = NULL; 
        $_POST['new_password'] = "airapiudara"; 
        $_POST['password_confirmation'] = "ailopyu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = NULL; 
        $_POST['new_password'] = "airapiudara"; 
        $_POST['password_confirmation'] = "iloptu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = NULL; 
        $_POST['new_password'] = "airapiudara"; 
        $_POST['password_confirmation'] = "airapiudara"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = NULL; 
        $_POST['new_password'] = "airapiudara"; 
        $_POST['password_confirmation'] = NULL; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = NULL; 
        $_POST['new_password'] = NULL; 
        $_POST['password_confirmation'] = "ailopyu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = NULL; 
        $_POST['new_password'] = NULL; 
        $_POST['password_confirmation'] = "iloptu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = NULL; 
        $_POST['new_password'] = NULL; 
        $_POST['password_confirmation'] = "airapiudara"; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);

        $_SESSION['user_temp'] = NULL; 
        $_POST['new_password'] = NULL; 
        $_POST['password_confirmation'] = NULL; 
        $tes = $Us->forgotPassword(); 
        $this->assertFalse($tes);
        
        // TRUE HERE
        $_SESSION['user_temp'] = "airacilly"; 
        $_POST['new_password'] = "ailopyu"; 
        $_POST['password_confirmation'] = "ailopyu"; 
        $tes = $Us->forgotPassword(); 
        $this->assertTrue($tes);

        $_SESSION['user_temp'] = "airacilly"; 
        $_POST['new_password'] = "airapiudara"; 
        $_POST['password_confirmation'] = "airapiudara"; 
        $tes = $Us->forgotPassword(); 
        $this->assertTrue($tes);

        $_SESSION['username'] = "bukanyayan";
        $tes = $Us->showPhoto();
        $this->assertTrue($tes);

        $_SESSION['username'] = "avc";
        $tes = $Us->showPhoto();
        $this->assertTrue($tes);

        $_SESSION['username'] = "HAHAHHIHOHO";
        $tes = $Us->showPhoto();
        $this->assertFalse($tes);

        $_SESSION['username'] = NULL;
        $tes = $Us->showPhoto();
        $this->assertFalse($tes);
    }
}
?>