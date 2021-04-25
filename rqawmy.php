<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Identification of the Egytptian national ID number</title>

</head>

<body>

    <?php
// Check the form was submitted
if(!empty($_POST)) 
	{
$Gvrnt[1] = "القاهرة";
$Gvrnt[2] = "الإسكندرية";
$Gvrnt[3] = "بورسعيد";
$Gvrnt[4] = "السويس";
$Gvrnt[11] = "دمياط";
$Gvrnt[12] = "الدقهلية  ";
$Gvrnt[13] = "الشرقية";
$Gvrnt[14] = "القليوبية";
$Gvrnt[15] = "كفر الشيخ";
$Gvrnt[16] = "الغربية";
$Gvrnt[17] = "المنوفية";
$Gvrnt[18] = "البحيرة";
$Gvrnt[19] = "الإسماعيلية";
$Gvrnt[21] = "الجيزة";
$Gvrnt[22] = "بني سويف";
$Gvrnt[23] = "الفيوم";
$Gvrnt[24] = "المنيا";
$Gvrnt[25] = "أسيوط";
$Gvrnt[26] = "سوهاج";
$Gvrnt[27] = "قنا";
$Gvrnt[28] = "أسوان  ";
$Gvrnt[29] = "الأقصر";
$Gvrnt[31] = "البحر الأحمر";
$Gvrnt[32] = "الوادى الجديد";
$Gvrnt[33] = "مطروح";
$Gvrnt[34] = "شمال سيناء";
$Gvrnt[35] = "جنوب سيناء";
$Gvrnt[88] = "خارج الجمهورية";
//Check if the ID number is valid century,year,month,day,governrote!
			if(strlen($_POST['rqawmy']) != 14 || !preg_match("/^2|3[0-9]{2}(0[1-9]|1[012])(0[1-9]|[12]\d|3[01])(0[1-4]|1[1-9]|2[1-9]|3[1-5]|88)(\d{5})/", $_POST['rqawmy']))
		
			{				
				echo "تأكد من إدخال رقم قومي صحيح ";
				
			}	
				 else
					 {
						$_vldstrng =  $_POST['rqawmy'];
						$sextype = substr($_vldstrng,12,1);
						$date = substr($_vldstrng,1,6);
						
                       if (substr($_vldstrng,0,1) == 2){$century="19";}else{$century="20";};
						$birthdate = $century .= $date;
					    //if (substr($Gvrntcode,0,1) == 0)
                        $Gvrntcode = substr($_vldstrng,7,2);
                         if (substr($Gvrntcode,0,1) == 0)
                         {$Gvrntcode = substr($_vldstrng,8,1);} else {$Gvrntcode = substr($_vldstrng,7,2);}
						echo "<H1>الرقم المستعلم عنه<BR></H1><BR>"; 
                         if (!is_int($sextype/2)){echo "النوع : ذكر <BR>";} 
                           else {echo "النوع : أنثى <BR>";};
        				echo "تاريخ الميلاد  : $birthdate <BR>";	
						echo "مسجل في : ".$Gvrnt[$Gvrntcode] ." ";
					//echo date("Y/m/d","$birthdate");
					//$Formated_date = date_create("$birthdate");
				     //  echo $rqawmy;
					}
	}
	else 
	{
		echo "<H1>إستعلام الرقم القومي</H1><BR>";
		echo "<form action=rqawmy.php method=post><br>";
		echo "  الرقم القومي يتكون من ١٤ رقم <input type=number maxlength=14 name=rqawmy value=17710012108493>";
        echo "<input type=submit value=فحص></form>";



	}
?>
</body>

</html>
