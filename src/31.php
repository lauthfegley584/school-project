<?php
// Project setup
require_once 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

// Reading and writing to Excel files
$workbook = IOFactory::load('example.xlsx');
$worksheet = $workbook->getActiveSheet();

// Calculating sum of cells in row 1 and column A
$row1_sum = (int) $worksheet->getCellByPosition(0, 1)->getNumberValue();

echo "Sum of cell A1: " . $row1_sum;
