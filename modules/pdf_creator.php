<?php
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetTextColor(500, 100, 150);
$pdf->SetFont('Arial', '', 17);
$pdf->Cell(0, 10, "SEAMAN EMPLOYMENT APPLICATION", 0, 0, 'C');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Write(19, "$add_form_1 $add_form_2 ");
if ($name != "") {
    $pdf->Image("data/$name", 140, 35, 40);
}

//$pdf->Cell(50, 60, "Foto", 1, 0, 'C', true);

$pdf->Ln(14);
$pdf->SetFont('Arial', '', 12);
$pdf->Write(6, "Rank:                   ");
$pdf->Write(6, "$add_form_4 ");
$pdf->Ln(6);
$pdf->Write(6, "Second Rank:      ");
$pdf->Write(6, "$add_form_5 ");
$pdf->Ln(6);
$pdf->Write(6, "Nationality:           ");
$pdf->Write(6, "$add_form_6 ");
$pdf->Ln(6);
$pdf->Write(6, "Place of birth:       ");
$pdf->Write(6, "$add_form_7 ");
$pdf->Ln(6);
$pdf->Write(6, "Date of birth:        ");
$pdf->Write(6, "$add_form_8 ");
$pdf->Ln(6);
$pdf->Write(6, "Address:               ");
$pdf->Write(6, "$add_form_15 ");
$pdf->Ln(6);
$pdf->Write(6, "Phone:                  ");
$pdf->Write(6, "$add_form_17");
$pdf->Ln(6);
$pdf->Write(6, "Phone 2:               ");
$pdf->Write(6, "$add_form_18");
$pdf->Ln(6);
$pdf->Write(6, "Email:                   ");
$pdf->Write(6, "$add_form_16");
$pdf->Ln(6);

$pdf->SetDrawColor(50, 50, 50);
$pdf->Ln(15);
// Создаем строку заголовков таблицы
$pdf->SetFont('Arial', '', 10);
//____________________________________________________
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(40, 10, "Married:", 1, 0, 'L', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50, 10, " $add_form_9", 1, 0, 'L', true);
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(45, 10, "Name Of Wife:", 1, 0, 'L', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(60, 10, " $add_form_10", 1, 0, 'L', true);
$pdf->Ln(10);
//____________________________________________________
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(40, 10, "Next of KIN Name:", 1, 0, 'L', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50, 10, " $add_form_12", 1, 0, 'L', true);
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(45, 10, "Next of KIN address:", 1, 0, 'L', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(60, 10, " $add_form_13", 1, 0, 'L', true);
$pdf->Ln(10);
//____________________________________________________
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(40, 10, "Next of KIN phone:", 1, 0, 'L', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50, 10, " $add_form_14", 1, 0, 'L', true);
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(45, 10, "Children:", 1, 0, 'L', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(60, 10, " $add_form_11", 1, 0, 'L', true);
$pdf->Ln(10);
//_____________________________________________________________________________________________________________
$pdf->Ln(10);
//_____________________________________________________________________________________________________________
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(55, 10, "Travel Pasport No.:", 1, 0, 'L', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50, 10, " $add_form_25", 1, 0, 'L', true);
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(40, 10, "Valid To:", 1, 0, 'L', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50, 10, " $add_form_26", 1, 0, 'L', true);
$pdf->Ln(10);
//____________________________________________________-----------------------
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(55, 10, "Seamen Pasport No.:", 1, 0, 'L', true);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50, 10, " $add_form_27", 1, 0, 'L', true);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(40, 10, "Valid To:", 1, 0, 'L', true);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50, 10, " $add_form_28", 1, 0, 'L', true);
$pdf->Ln(12);
//____________________________________________________-------------------------
$pdf->Ln(5);
//____________________________________________________
$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(110, 5, "Certificates", 1, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, "Number", 1, 0, 'C', true);
$pdf->Cell(30, 5, "Place Of Issue", 1, 0, 'C', true);
$pdf->Cell(25, 5, "Valide To", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(110, 5, "Certificate of Competency:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_29", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_30", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_31", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------

$pdf->Cell(110, 5, "Endorsement of Competency:", 1, 0, 'L', true);

$pdf->Cell(30, 5, "$add_form_32", 1, 0, 'C', true);

$pdf->Cell(30, 5, "$add_form_33", 1, 0, 'C', true);

$pdf->Cell(25, 5, "$add_form_34", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------

$pdf->Cell(110, 5, "GMDSS Operator:", 1, 0, 'L', true);

$pdf->Cell(30, 5, "$add_form_35", 1, 0, 'C', true);

$pdf->Cell(30, 5, "$add_form_36", 1, 0, 'C', true);

$pdf->Cell(25, 5, "$add_form_37", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------

$pdf->Cell(110, 5, "Endorsement of GMDSS operator:", 1, 0, 'L', true);

$pdf->Cell(30, 5, "$add_form_38", 1, 0, 'C', true);

$pdf->Cell(30, 5, "$add_form_39", 1, 0, 'C', true);

$pdf->Cell(25, 5, "$add_form_40", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------

$pdf->Cell(110, 5, "Oil tanker Certificate of Proficiency:", 1, 0, 'L', true);

$pdf->Cell(30, 5, "$add_form_41", 1, 0, 'C', true);

$pdf->Cell(30, 5, "$add_form_42", 1, 0, 'C', true);

$pdf->Cell(25, 5, "$add_form_43", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------

$pdf->Cell(110, 5, "Chemical tanker Certificate of Proficiency:", 1, 0, 'L', true);

$pdf->Cell(30, 5, "$add_form_44", 1, 0, 'C', true);

$pdf->Cell(30, 5, "$add_form_45", 1, 0, 'C', true);

$pdf->Cell(25, 5, "$add_form_46", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------

$pdf->Cell(110, 5, "Gas tanker Certificate of Proficiency:", 1, 0, 'L', true);

$pdf->Cell(30, 5, "$add_form_47", 1, 0, 'C', true);

$pdf->Cell(30, 5, "$add_form_48", 1, 0, 'C', true);

$pdf->Cell(25, 5, "$add_form_49", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------

$pdf->Cell(110, 5, "Certificate of Proficiency Aditional:", 1, 0, 'L', true);

$pdf->Cell(30, 5, "$add_form_50", 1, 0, 'C', true);

$pdf->Cell(30, 5, "$add_form_51", 1, 0, 'C', true);

$pdf->Cell(25, 5, "$add_form_52", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------

$pdf->Cell(110, 5, "Endorsement of Proficiency Aditional:", 1, 0, 'L', true);

$pdf->Cell(30, 5, "$add_form_53", 1, 0, 'C', true);

$pdf->Cell(30, 5, "$add_form_54", 1, 0, 'C', true);

$pdf->Cell(25, 5, "$add_form_55", 1, 0, 'C', true);
$pdf->Ln(5);
//------------------------------------------------.................................................................................
$pdf->Ln(5);
$pdf->Ln(5);
//---------------------------------------------------------------------------------------------------------------------------------

$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(110, 5, "Certificates", 1, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, "Number", 1, 0, 'C', true);
$pdf->Cell(30, 5, "Place Of Issue", 1, 0, 'C', true);
$pdf->Cell(25, 5, "Valide To", 1, 0, 'C', true);
$pdf->Ln(5);
//.................................................................................................................................
$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(110, 5, "Basic Safety Training and Instruction (A-VI/1-1-2-3-4):", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_56", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_57", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_58", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------

$pdf->Cell(110, 5, "Proficiency in survival craft and rescue boats (A-VI/2):", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_59", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_60", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_61", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Advanced fire fighting (A-VI/3):", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_62", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_63", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_64", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Medical Emergency-First Aid (A-VI/4-1-2-3):", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_65", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_66", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_67", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Medical Care on board ship (A-VI/4-4-5-6):", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_68", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_69", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_70", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Carriage of Dangerous and Hazardous Substances(B-V/b, B-V/c):", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_71", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_72", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_73", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Security training for seafarers with designated security duties:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_74", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_75", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_76", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------

$pdf->Cell(110, 5, "Security Awareness Training for all seafarers(A-VI/6-1):", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_77", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_78", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_79", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Ship Security Officer (SSO) (ISPS code):", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_80", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_81", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_82", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Ship Safety Officer (ISM code):", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_83", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_84", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_85", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Training for personnel serving on passenger ships:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_86", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_87", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_88", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Training in the use of radar plotting and ARPA (operational level):", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_89", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_90", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_91", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Training in radar displays, watch keeping, organization, search and rescue:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_92", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_93", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_94", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Training in operations of electronic charts:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_95", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_96", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_97", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Bridge team and resource management:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_98", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_99", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_100", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Ships handling arrangements:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_101", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_102", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_103", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Engine room resource management:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_104", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_105", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_106", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Basic training for liquefied gas tanker cargo operation:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_107", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_108", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_109", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Basic training for oil and chemical tanker cargo operation:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_110", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_111", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_112", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Oil tanker specialized training (V/1, A-V/1 p.9-14):", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_113", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_114", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_115", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Chemical tanker specialized training(V/1, A-V/1 p.16-21):", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_116", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_117", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_118", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Liquefied gas specialized training(V/1, A-V/1 p.23-34):", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_119", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_120", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_121", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Training in crude oil washing:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_122", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_123", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_124", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Training in operation of inert gas system:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_125", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_126", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_127", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Proficiency in fast rescue boats (VI/2,А-VI/2-2):", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_128", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_129", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_130", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Training in operation of compressed air breathing apparatus:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_140", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_141", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_142", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Certificate of Ship Crane Operator:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_143", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_144", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_145", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Certificate of Ship Painter:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_146", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_147", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_148", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Certificate of Ship Turner:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_149", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_150", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_151", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Certificate of Ship Welder:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_152", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_153", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_154", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------
//----------------------------------------------------
$pdf->Cell(110, 5, "Yellow Fever vaccination:", 1, 0, 'L', true);
$pdf->Cell(30, 5, "$add_form_155", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_156", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_157", 1, 0, 'C', true);
$pdf->Ln(20);
//----------------------------------------------------


//----------------------------------------------------/////////////////////////////////////////////////////////
$pdf->Cell(20, 5, "Height (cm):", 1, 0, 'L', true);
$pdf->Cell(15, 5, "$add_form_158", 1, 0, 'C', true);
$pdf->Cell(20, 5, "Weight (kgs):", 1, 0, 'L', true);
$pdf->Cell(15, 5, "$add_form_159", 1, 0, 'C', true);
$pdf->Cell(20, 5, "Overall size:", 1, 0, 'L', true);
$pdf->Cell(15, 5, "$add_form_160", 1, 0, 'C', true);
$pdf->Cell(30, 5, "Safety Shoes size:", 1, 0, 'L', true);
$pdf->Cell(15, 5, "$add_form_161", 1, 0, 'C', true);
$pdf->Ln(20);
//----------------------------------------------------/////////////////////////////////////////////////////////
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(200, 200, 200);
$pdf->Cell(195, 5, "Working Expirience", 1, 0, 'L', true);
$pdf->Ln(5);
//.................................................................................................................................
$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
//----------------------------------------------------

$pdf->Cell(25, 5, "Vessel name", 1, 0, 'L', true);
$pdf->Cell(20, 5, "Flag", 1, 0, 'C', true);
$pdf->Cell(25, 5, "Type", 1, 0, 'C', true);
$pdf->Cell(15, 5, "DWT", 1, 0, 'C', true);
$pdf->Cell(30, 5, "Main engineType", 1, 0, 'C', true);
$pdf->Cell(25, 5, "Company Name", 1, 0, 'C', true);
$pdf->Cell(20, 5, "Rank", 1, 0, 'C', true);
$pdf->Cell(35, 5, "Duration", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------111111111111111
$pdf->Cell(25, 5, "$add_form_162", 1, 0, 'L', true);
$pdf->Cell(20, 5, "$add_form_163", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_164", 1, 0, 'C', true);
$pdf->Cell(15, 5, "$add_form_165", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_166", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_167", 1, 0, 'C', true);
$pdf->Cell(20, 5, "$add_form_168", 1, 0, 'C', true);
$pdf->Cell(35, 5, "$add_form_169", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------222222222222222222
$pdf->Cell(25, 5, "$add_form_170", 1, 0, 'L', true);
$pdf->Cell(20, 5, "$add_form_171", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_172", 1, 0, 'C', true);
$pdf->Cell(15, 5, "$add_form_173", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_174", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_175", 1, 0, 'C', true);
$pdf->Cell(20, 5, "$add_form_176", 1, 0, 'C', true);
$pdf->Cell(35, 5, "$add_form_177", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------333333333333333
$pdf->Cell(25, 5, "$add_form_178", 1, 0, 'L', true);
$pdf->Cell(20, 5, "$add_form_179", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_180", 1, 0, 'C', true);
$pdf->Cell(15, 5, "$add_form_181", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_182", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_183", 1, 0, 'C', true);
$pdf->Cell(20, 5, "$add_form_184", 1, 0, 'C', true);
$pdf->Cell(35, 5, "$add_form_185", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------444444444444444
$pdf->Cell(25, 5, "$add_form_186", 1, 0, 'L', true);
$pdf->Cell(20, 5, "$add_form_187", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_188", 1, 0, 'C', true);
$pdf->Cell(15, 5, "$add_form_189", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_190", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_191", 1, 0, 'C', true);
$pdf->Cell(20, 5, "$add_form_192", 1, 0, 'C', true);
$pdf->Cell(35, 5, "$add_form_193", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------55555555555555555555
$pdf->Cell(25, 5, "$add_form_194", 1, 0, 'L', true);
$pdf->Cell(20, 5, "$add_form_195", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_196", 1, 0, 'C', true);
$pdf->Cell(15, 5, "$add_form_197", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_198", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_199", 1, 0, 'C', true);
$pdf->Cell(20, 5, "$add_form_200", 1, 0, 'C', true);
$pdf->Cell(35, 5, "$add_form_201", 1, 0, 'C', true);
$pdf->Ln(5);
//----------------------------------------------------66666666666666666666
$pdf->Cell(25, 5, "$add_form_202", 1, 0, 'L', true);
$pdf->Cell(20, 5, "$add_form_203", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_204", 1, 0, 'C', true);
$pdf->Cell(15, 5, "$add_form_205", 1, 0, 'C', true);
$pdf->Cell(30, 5, "$add_form_206", 1, 0, 'C', true);
$pdf->Cell(25, 5, "$add_form_207", 1, 0, 'C', true);
$pdf->Cell(20, 5, "$add_form_208", 1, 0, 'C', true);
$pdf->Cell(35, 5, "$add_form_209", 1, 0, 'C', true);
$pdf->Ln(5);


// close report pdf
$pdf->Output("CV.pdf", "I");

    //$pdf->Output();
