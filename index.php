<?php
/* function checkNum($number)
{
    if (($number == 5)) {
        throw new Exception("值不能等于5！");
    }
    return true;
}

for ($x = 0; $x <= 10; $x++) {
    try { {
            $k = checkNum($x);
        }
        echo "当前数字是：$x \n";
    } catch (Exception $e) {
        echo 'error';
    }
}
 */

/* function myTest()
{
    static $x = 0;
    echo $x;
    $x++;
    echo PHP_EOL; 
}

myTest();
myTest(); */

/* $name="runoob";
$a= <<<EOF
        "abc"$name<br>
        "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a; */

/* 
echo '<pre>';
if(42 == "42") {
    echo '1、值相等';
} else {
    echo '不相等';
}
 
echo PHP_EOL;// 换行符

if(42 === "42") {
    echo '2、类型相等';
} else {
    echo '3、不相等';
} */

/* echo '<pre>';
// 整型
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1
echo PHP_EOL;
// 浮点型
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1
 
// 字符串
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1
echo "\n";
echo "hello"; */

/* $t=date("H");
if ($t>"20")
{
    echo "Have a good day!";
} */

// echo $_SERVER['SCRIPT_URL'];
/* 
echo "<pre>";
echo '这是第"'.__LINE__.'"行';
echo "\n";
echo '该文件位于"'.__FILE__.'"';
echo "\n";
echo '该文件位于"'.__DIR__.'"'; */



?>
<!-- 欢迎<?php echo $_POST["fname"]; ?>!<br>
你的年龄是 <?php echo $_POST["age"]; ?>  岁。
 -->

<!-- <?php
        $q = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';
        if ($q) {
            if ($q == 'RUNOOB') {
                echo '菜鸟教程<br>http://www.runoob.com';
            } else if ($q == 'GOOGLE') {
                echo 'Google 搜索<br>http://www.google.com';
            } else if ($q == 'TAOBAO') {
                echo '淘宝<br>http://www.taobao.com';
            }
        } else {
        ?>
<form action="" method="get"> 
    <select name="q">
    <option value="">选择一个站点:</option>
    <option value="RUNOOB">Runoob</option>
    <option value="GOOGLE">Google</option>
    <option value="TAOBAO">Taobao</option>
    </select>
    <input type="submit" value="提交">
    </form>
<?php
        }
?> -->

<!-- <?php
        $q = isset($_POST['q']) ? $_POST['q'] : '';
        if (is_array($q)) {
            $sites = array(
                'RUNOOB' => '菜鸟教程: http://www.runoob.com',
                'GOOGLE' => 'Google 搜索: http://www.google.com',
                'TAOBAO' => '淘宝: http://www.taobao.com',
            );
            foreach ($q as $val) {
                // PHP_EOL 为常量，用于换行
                echo $sites[$val] . PHP_EOL;
            }
        } else {
        ?>
<form action="" method="post"> 
    <select multiple="multiple" name="q[]">
    <option value="">选择一个站点:</option>
    <option value="RUNOOB">Runoob</option>
    <option value="GOOGLE">Google</option>
    <option value="TAOBAO">Taobao</option>
    </select>
    <input type="submit" value="提交">
    </form>
<?php
        }
?> -->
<!-- 
<?php
$q = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';
if ($q) {
    if ($q == 'RUNOOB') {
        echo '菜鸟教程<br>http://www.runoob.com';
    } else if ($q == 'GOOGLE') {
        echo 'Google 搜索<br>http://www.google.com';
    } else if ($q == 'TAOBAO') {
        echo '淘宝<br>http://www.taobao.com';
    }
} else {
?><form action="" method="get"> 
    <input type="radio" name="q" value="RUNOOB" />Runoob
    <input type="radio" name="q" value="GOOGLE" />Google
    <input type="radio" name="q" value="TAOBAO" />Taobao
    <input type="submit" value="提交">
</form>
<?php
}
?> -->

<!-- <?php
        $q = isset($_POST['q']) ? $_POST['q'] : '';
        if (is_array($q)) {
            $sites = array(
                'RUNOOB' => '菜鸟教程: http://www.runoob.com',
                'GOOGLE' => 'Google 搜索: http://www.google.com',
                'TAOBAO' => '淘宝: http://www.taobao.com',
            );
            foreach ($q as $val) {
                // PHP_EOL 为常量，用于换行
                echo $sites[$val] . PHP_EOL;
            }
        } else {
        ?><form action="" method="post"> 
    <input type="checkbox" name="q[]" value="RUNOOB"> Runoob<br> 
    <input type="checkbox" name="q[]" value="GOOGLE"> Google<br> 
    <input type="checkbox" name="q[]" value="TAOBAO"> Taobao<br>
    <input type="submit" value="提交">
</form>
<?php
        }
?> -->
<!-- 
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>菜鸟教程(runoob.com)</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <?php
    // 定义变量并默认设置为空值
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "名字是必需的";
        } else {
            $name = test_input($_POST["name"]);
            // 检测名字是否只包含字母跟空格
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "只允许字母和空格";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "邮箱是必需的";
        } else {
            $email = test_input($_POST["email"]);
            // 检测邮箱是否合法
            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
                $emailErr = "非法邮箱格式";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // 检测 URL 地址是否合法
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "非法的 URL 的地址";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "性别是必需的";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP 表单验证实例</h2>
    <p><span class="error">* 必需字段。</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        名字: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        网址: <input type="text" name="website" value="<?php echo $website; ?>">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>
        备注: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
        <br><br>
        性别:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">女
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">男
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    echo "<h2>您输入的内容是:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>

</body>

</html> -->

<!-- <?php
        echo date("d", 10);
        ?> -->
<!-- <html>

<body>

    <?php
    $file = fopen("welcome.txt", "r") or exit("Unable to open file!");
    ?>

</body>

</html>
 -->

 <?php
var_dump(gd_info());
?>