
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Yunoshev_lab4</title>
	<link rel="stylesheet" href="style.css">
	
</head>

<body>
	<div class="body">

		<?php include('header.php');?>
		<div class="contentLeft">
			<div class="contentLeftRight">
				<div id="Link1">
					<hr class="hr1">
					<hr class="hr6">
					<hr class="hr7">
					<hr class="hr8">
					<a href="lab4_index.php" class="linka" id="linka">Главная</a>
				</div>

				<div class="linkDiv">
					<hr class="hr2">
					<hr class="hr3">
					<hr class="hr4">
					<hr class="hr5">
					<a href="lab4_form.php" class="linka">Регистрация</a>
				</div>

				<div class="linkDiv">
					<hr class="hr2">
					<hr class="hr3">
					<hr class="hr4">
					<hr class="hr5">
					<a href="lab4_methods.php" class="linka">Методы</a>
				</div>

                <?php include('footer.php');?>
				

			</div>
		</div>

		<form class="contentRight" method="post" action="">
			<div class="contentRightTop">
				<p class="CRTlabel">Регистрация</p>
			</div>


			<div class="contentName">
				<p id="p-name">Имя: </p>
				<input type="text" id="input-name" name="input-name">
			</div>

			<div class="contentSex">
				<p id="p-sex">Пол: </p>
				<input type="radio" id="input-male" name="sex" checked="true" value="man"> Мужской
				<input type="radio" id="input-female" name="sex" value="woman"> Женский
			</div>

			<div class="contentDateOfBirth">
				<div> 
					<p id="p-day">День: </p>
					<input type="number" id="input-day" name="input-day" min="1" max="31">
				</div>

				<div>
					<p id="p-month">Месяц: </p>
					<input type="number" id="input-month" name="input-month" min="1" max="12">
				</div>

				<div>
					<p id="p-year">Год: </p>
					<input type="number" id="input-year" name="input-year" min="1900" max="2020">
				</div>

				<button id="btn-reg" type="submit" name="submt">Зарегистрироваться</button>

			</div>

        </form>
       
    </div>
    <div style="margin: auto; width: 200px;">
        <?php
                    if(isset($_POST["submt"]))
                    {
                        $name = $_POST['input-name'];
                        $radio = $_POST['sex'];
                        $day = $_POST['input-day'];
                        $month = $_POST['input-month'];
                        $year = $_POST['input-year'];
                    
                        $now_year = 2020;
                        $now_month = 11;
                        $now_day = 20;

                        $age = $now_year - $year;
                        if(!empty($name) && !empty($day) && !empty($month) && !empty($year)) 
                        {
                            if($radio=="man")
                            {
                                if ($age == 21)
                                {
                                    if($now_month < $month) 
                                    {
                                    $age--;
                                    }
                                    else {
                                        if (($now_day < $day) && $now_month == $month) {
                                        $age--;
                                        }
                                    }
                                }
                                if($age >= 21) {
                                    echo "Регистрация прошла успешно";
                                }
                                else {
                                    echo "Нельзя зарегистрироваться";
                                }
                            }
                            else 
                            {
                                if ($age == 18) {
                                    if($now_month < $month) 
                                    {
                                    $age--;
                                    }
                                    else 
                                    {
                                        if (($now_day < $day) && $now_month == $month) 
                                        {
                                        $age--;
                                        }
                                    }
                                }
                                if($age >= 18) 
                                {
                                    echo "Регистрация прошла успешно";
                                }
                                else 
                                {
                                    echo "Нельзя зарегистрироваться";
                                }
                            }
                    
                        } 
                        else 
                        {
                            echo "НЕ ХВАТАЕТ ДАННЫХ!!!";
                        }
                    }
                    		
        ?> 
    </div>
</body>

</html>