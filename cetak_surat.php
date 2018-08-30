<?php
require_once ('core/init.php');
require_once ('fpdf/fpdf.php');
$id_surat = $_GET['id'];
$surat = $crud->showCustom("*","surat","user","user.id_user = surat.id_user", "surat.id_surat = $id_surat");
$file = $surat[0]['gambar'];
$title = $surat[0]['judul'];
$user = $surat[0]['id_user'];
$tanggal_upload = $surat[0]['tanggal_upload'];
$tanggal_surat = $surat[0]['tanggal_surat'];
$uploader = $surat[0]['nama'];
$path = "surat/";
$files = $path.$file;
 $pdf = new FPDF();
 $pdf->Addpage();
 $pdf->SetFont('ARIAL','','9');
 $pdf->Cell(0,5,$title,1,1,"C");
 $pdf->SetFont('ARIAL','','9');
 $pdf->Cell(50,5,"Tanggal Upload : ".$tanggal_upload,1,0,"L");
 $pdf->Cell(50,5,"Tanggal Surat : ".$tanggal_surat,1,0,"L");
 $pdf->Cell(90,5,"Di Upload Oleh : ".$uploader,1,0,"L");
$pdf->Image("$files",9,22,192);
 $pdf->Output();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title ?></title>
</head>
