<?php
//  if password correct connect to DB
$host = "localhost";
$username = "root";
$password = "root";
$database = "db_sender";
// creeate connection
$conn = new mysqli($host, $username, $password, $database);

if (mysqli_connect_error()) {
    die('Connect error (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
} else {
    $sql = " INSERT INTO `employers`(`id_id`, `form_1`, `form_2`, `form_3`, `form_4`, `form_5 `, `form_6 `, `form_7 `, `form_8 `, `form_9 `, `form_10 `, `form_11 `, `form_12 `, `form_13 `, `form_14 `, `form_15 `, `form_16 `, `form_17 `, `form_18 `, `form_19 `, `form_20 `, `form_21 `, `form_22 `, `form_23 `, `form_24 `, `form_25 `, `form_26 `, `form_27 `, `form_28 `, `form_29 `, `form_30 `, `form_31 `, `form_32 `, `form_33 `, `form_34 `, `form_35 `, `form_36 `, `form_37 `, `form_38 `, `form_39 `, `form_40 `, `form_41 `, `form_42 `, `form_43 `, `form_44 `, `form_45 `, `form_46 `, `form_47 `, `form_48 `, `form_49 `, `form_50 `, `form_51 `, `form_52 `, `form_53 `, `form_54 `, `form_55 `, `form_56 `, `form_57 `, `form_58 `, `form_59 `, `form_60 `, `form_61 `, `form_62 `, `form_63 `, `form_64 `, `form_65 `, `form_66 `, `form_67 `, `form_68 `, `form_69 `, `form_70 `, `form_71 `, `form_72 `, `form_73 `, `form_74 `, `form_75 `, `form_76 `, `form_77 `, `form_78 `, `form_79 `, `form_80 `, `form_81 `, `form_82 `, `form_83 `, `form_84 `, `form_85 `, `form_86 `, `form_87 `, `form_88 `, `form_89 `, `form_90 `, `form_91 `, `form_92 `, `form_93 `, `form_94 `, `form_95 `, `form_96`, `form_97`, `form_98`, `form_99`, `form_100`, `form_101`, `form_102`, `form_103`, `form_104`, `form_105`, `form_106`, `form_107`, `form_108`, `form_109`, `form_110`, `form_111`, `form_112`, `form_113`, `form_114`, `form_115`, `form_116`, `form_117`, `form_118`, `form_119`, `form_120`, `form_121`, `form_122`, `form_123`, `form_124`, `form_125`, `form_126`, `form_127`, `form_128`, `form_129`, `form_130`, `form_131`, `form_132`, `form_133`, `form_134`, `form_135`, `form_136`, `form_137`, `form_138`, `form_139`, `form_140`, `form_141`, `form_142`, `form_143`, `form_144`, `form_145`, `form_146`, `form_147`, `form_148`, `form_149`, `form_150`, `form_151`, `form_152`, `form_153`, `form_154`, `form_155`, `form_156`, `form_157`, `form_158`, `form_159`, `form_160`, `form_161`, `form_162`, `form_163`, `form_164`, `form_165`, `form_166`, `form_167`, `form_168`, `form_169`, `form_170`, `form_171`, `form_172`, `form_173`, `form_174`, `form_175`, `form_176`, `form_177`, `form_178`, `form_179`, `form_180`, `form_181`, `form_182`, `form_183`, `form_184`, `form_185`, `form_186`, `form_187`, `form_188`, `form_189`, `form_190`, `form_191`, `form_192`, `form_193`, `form_194`, `form_195`, `form_196`, `form_197`, `form_198`, `form_199`, `form_200`, `form_201`, `form_202`, `form_203`, `form_204`, `form_205`, `form_206`, `form_207`, `form_208`, `form_209`)
            VALUES (DEFAULT,  
            '$add_form_1',  '$add_form_2',  '$add_form_3',  '$add_form_4',  '$add_form_5', '$add_form_6',  '$add_form_7',  '$add_form_8',  '$add_form_9',  '$add_form_10 ', 
            '$add_form_11 ', '$add_form_12 ', '$add_form_13', '$add_form_14 ', '$add_form_15 ', '$add_form_16', '$add_form_17', '$add_form_18', 'Spare 19', 'Spare 20', 
            'Spare 21', 'Spare 22', 'Spare 23', 'Spare 24',  '$add_form_25', '$add_form_26', '$add_form_27', '$add_form_28',  '$add_form_29',  '$add_form_30', 
            '$add_form_31', '$add_form_32', '$add_form_33', '$add_form_34', '$add_form_35', '$add_form_36', '$add_form_37', '$add_form_38', '$add_form_39', '$add_form_40', 
            '$add_form_41', '$add_form_42', '$add_form_43', '$add_form_44', '$add_form_45', '$add_form_46', '$add_form_47', '$add_form_48', '$add_form_49', '$add_form_50', 
            '$add_form_51', '$add_form_52', '$add_form_53', '$add_form_54', '$add_form_55', '$add_form_56', '$add_form_57', '$add_form_58', '$add_form_59', '$add_form_60', 
            '$add_form_61', '$add_form_62', '$add_form_63', '$add_form_64', '$add_form_65', '$add_form_66', '$add_form_67', '$add_form_8', '$add_form_69', '$add_form_70', 
            '$add_form_71', '$add_form_72', '$add_form_73', '$add_form_74', '$add_form_75', '$add_form_76', '$add_form_77', '$add_form_78', '$add_form_79', '$add_form_80', 
            '$add_form_81', '$add_form_82', '$add_form_83', '$add_form_84', '$add_form_85', '$add_form_86', '$add_form_87', '$add_form_88', '$add_form_89', '$add_form_90', 
            '$add_form_91', '$add_form_92', '$add_form_93', '$add_form_94', '$add_form_95', '$add_form_96', '$add_form_97', '$add_form_98', '$add_form_99', '$add_form_100', 
            '$add_form_101', '$add_form_102', '$add_form_103', '$add_form_104', '$add_form_105', '$add_form_106', '$add_form_107', '$add_form_108', '$add_form_109', '$add_form_110', 
            '$add_form_111', '$add_form_112', '$add_form_113', '$add_form_114', '$add_form_115', '$add_form_116', '$add_form_117', '$add_form_118', '$add_form_119', '$add_form_120', 
            '$add_form_121', '$add_form_122', '$add_form_123', '$add_form_124', '$add_form_125', '$add_form_126', '$add_form_127', '$add_form_128', '$add_form_129', '$add_form_130', 
            'Spare 131', 'Spare132', 'Spare133', 'Spare 134', 'Spare 135', 'Spare 136', 'Spare 137', 'Spare 138', 'Spare 139', '$add_form_140', 
            '$add_form_141', '$add_form_142', '$add_form_143', '$add_form_144', '$add_form_145', '$add_form_146', '$add_form_147', '$add_form_148', '$add_form_149', '$add_form_150', 
            '$add_form_151', '$add_form_152', '$add_form_153', '$add_form_154', '$add_form_155', '$add_form_156', '$add_form_157', '$add_form_158', '$add_form_159', '$add_form_160', 
            '$add_form_161', '$add_form_162', '$add_form_163', '$add_form_164', '$add_form_165', '$add_form_166', '$add_form_167', '$add_form_168', '$add_form_169', '$add_form_170', 
            '$add_form_171', '$add_form_172', '$add_form_173', '$add_form_174', '$add_form_175', '$add_form_176', '$add_form_177', '$add_form_178', '$add_form_179', '$add_form_180', 
            '$add_form_181', '$add_form_182', '$add_form_183', '$add_form_184', '$add_form_185', '$add_form_186', '$add_form_187', '$add_form_188', '$add_form_189', '$add_form_190', 
            '$add_form_191', '$add_form_192', '$add_form_193', '$add_form_194', '$add_form_195', '$add_form_196', '$add_form_197', '$add_form_198', '$add_form_199', '$add_form_200', 
            '$add_form_201', '$add_form_202', '$add_form_203', '$add_form_204', '$add_form_205', '$add_form_206', '$add_form_207', '$add_form_208', '$add_form_209');";

    if ($conn->query($sql)) {
        // echo "New record added";
        // echo "<p>";
        // echo " <a href=\"index.html\">Proced to main menu</a> ";
        // echo "</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn_->error;
    }
    $conn->close();
}
