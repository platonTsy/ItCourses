<?php
if(isset($_POST['submit'])) { //check if form was submitted
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $how_find = $_POST['how_find'];

//excel
    require_once '../Classes/PHPExcel.php';
    require_once '../Classes/PHPExcel/IOFactory.php';
    $objPHPExcel = PHPExcel_IOFactory::load('../Files/file.xls');
    $objWorksheet = $objPHPExcel->getActiveSheet();

//add the new row
    $num_rows = $objPHPExcel->getActiveSheet()->getHighestRow();
    $objWorksheet->insertNewRowBefore($num_rows + 1, 1);

//SAVING THE NEW ROW - on the last position in the table
    $objWorksheet->setCellValueByColumnAndRow(0, $num_rows + 1, $firstname);
    $objWorksheet->setCellValueByColumnAndRow(1, $num_rows + 1, $lastname);
    $objWorksheet->setCellValueByColumnAndRow(2, $num_rows + 1, $phone);
    $objWorksheet->setCellValueByColumnAndRow(3, $num_rows + 1, $email);
    $objWorksheet->setCellValueByColumnAndRow(4, $num_rows + 1, $course);
    $objWorksheet->setCellValueByColumnAndRow(5, $num_rows + 1, $how_find);

    $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
    $objWriter->save(str_replace('.php', '.xls', __FILE__));

    echo "Ваша заявка добавлена. Спасибо";
    header("location:/");
}
