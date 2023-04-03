<?php
	session_start();
	include("../../admincp/config/config.php");
	require('../../mail/sendmail.php');

	$id_khachhang = $_SESSION['id_khachhang'];
	$code_order = rand(0,9999);
	$insert_card = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status) VALUE('".$id_khachhang."','".$code_order."',1)";
	$cart_query = mysqli_query($mysqli,$insert_card);
	if($cart_query){
		//them gio hang chi tiet
		foreach($_SESSION['cart'] as $key => $value){
			$id_sanpham = $value['id'];
			$soluong = $value['soluong '];
			$insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham,code_cart,soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
			mysqli_query($mysqli,$insert_order_details);
		}

		$tieude = "Đơn đặt hàng của Website SuperCars thành công <3";
		$noidung = "<p>Cảm ơn quý khách đã đặt hàng của chúng tôi với mã đơn hàng là: ".$code_order."</p>";
		$noidung = "<h4>Đơn hàng bao gồm:</h4>";

		foreach($_SESSION['cart']as $key => $val){
                $noidung.="<ul style='border:1px solid blued;margin:10px'>
                                <li>".$val['tensanpham']."</li>
                                <li>".$val['masanpham']."</li>
                                <li>".$val['soluong ']."</li>
                                <li>".number_format($val['giasanpham']*$val['soluong '],0,',','.').' '.'Vnđ'."</li>

                            </ul>";
            }
		$maildathang = $_SESSION['email'];
		$mail = new Mailer();
		$mail->dathangmail($tieude,$noidung,$maildathang);
	}
	unset($_SESSION['cart']);
	header('Location:../../index.php?quanly=camon');
?>