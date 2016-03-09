<?php

require_once '../Classes/PHPExcel.php';
require_once '../Classes/PHPExcel/IOFactory.php';
$objPHPExcel = PHPExcel_IOFactory::load("test.xls");
$objWorksheet = $objPHPExcel->getActiveSheet();

//add the new row
$num_rows = $objPHPExcel->getActiveSheet()->getHighestRow();
$objWorksheet->insertNewRowBefore($num_rows + 1, 1);
$name = isset($_POST['name']) ? $_POST['name'] : 'asdasdas';

    //SAVING THE NEW ROW - on the last position in the table
$objWorksheet->setCellValueByColumnAndRow(0,$num_rows+1,'sdaasdas');
$objWorksheet->setCellValueByColumnAndRow(1,$num_rows+1,'sdaasdas');
$objWorksheet->setCellValueByColumnAndRow(1,$num_rows+1,'sdaasdas');
$objWorksheet->setCellValueByColumnAndRow(1,$num_rows+1,'sdaasdas');
$objWorksheet->setCellValueByColumnAndRow(1,$num_rows+1,'sdaasdas');
$objWorksheet->setCellValueByColumnAndRow(1,$num_rows+1,'sdaasdas');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(str_replace('.php', '.xls', __FILE__));

//display the table
echo '<table>'."\n";
echo '<thead>
        <tr>
            <th>Company Name</th>
        </tr>
        </thead>'."\n";
echo '<tbody>'."\n";
foreach ($objWorksheet->getRowIterator() as $row) {
    echo '<tr>'."\n";
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(false);
    foreach ($cellIterator as $cell) {
        echo '<td>'.$cell->getValue().'</td>'."\n";
    }
    echo '</tr>'."\n";
}
echo '</tbody>'."\n";
echo '</table>'."\n";
?>