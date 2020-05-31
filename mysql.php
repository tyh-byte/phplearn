<?php
/* echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator
{
    function __construct($it)
    {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current()
    {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
    }

    function beginChildren()
    {
        echo "<tr>";
    }

    function endChildren()
    {
        echo "</tr>" . "\n";
    }
} */
$servername = "localhost";
$username = "root";
$password = "qweasdzxc";
$dbname = "mydb";

/* // 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功"; 
 */

/* try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    echo "连接成功";
} catch (PDOException $e) {
    echo $e->getMessage();
} */

/* try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    echo "连接成功"; 
}
catch(PDOException $e)
{
    echo $e->getMessage();
} */

/*  // 创建连接
$conn = new mysqli($servername, $username, $password);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 创建数据库
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();  */

/* try {
    $conn = new PDO("mysql:host=$servername", $username, $password);

    // 设置 PDO 错误模式为异常 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE myDBPDO";

    // 使用 exec() ，因为没有结果返回 
    $conn->exec($sql);

    echo "数据库创建成功<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null; */
/* 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} */

/* // 使用 sql 创建数据表
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
} */

/* $sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
 
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 */

/* try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    // 使用 exec() ，没有结果返回 
    $conn->exec($sql);
    echo "新记录插入成功";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null; */

/*$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ($conn->multi_query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} */
/* else {
    $sql = "INSERT INTO MyGuests(firstname, lastname, email)  VALUES(?, ?, ?)";
 
    // 为 mysqli_stmt_prepare() 初始化 statement 对象
    $stmt = mysqli_stmt_init($conn);
 
    //预处理语句
    if (mysqli_stmt_prepare($stmt, $sql)) {
        // 绑定参数
        mysqli_stmt_bind_param($stmt, 'sss', $firstname, $lastname, $email);
 
        // 设置参数并执行
        $firstname = 'John';
        $lastname = 'Doe';
        $email = 'john@example.com';
        mysqli_stmt_execute($stmt);
 
        $firstname = 'Mary';
        $lastname = 'Moe';
        $email = 'mary@example.com';
        mysqli_stmt_execute($stmt);
 
        $firstname = 'Julie';
        $lastname = 'Dooley';
        $email = 'julie@example.com';
        mysqli_stmt_execute($stmt);
    }
}

$conn->close(); */


/* 
// 预处理及绑定
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// 设置参数并执行
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "新记录插入成功";

$stmt->close();
$conn->close(); */

/* try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 设置 PDO 错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 预处理 SQL 并绑定参数
    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) 
    VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    // 插入行
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();

    // 插入其他行
    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();

    // 插入其他行
    $firstname = "Julie";
    $lastname = "Dooley";
    $email = "julie@example.com";
    $stmt->execute();

    echo "新记录插入成功";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null; */
/* 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close(); */
/* 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests"); 
    $stmt->execute();
 
    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";*/
?>


<?php
/* try {
    //解析config.ini文件
    $config = parse_ini_file(realpath(dirname(__FILE__) . '/config/config.ini'));
    //对mysqli类进行实例化
    $mysqli = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);
    if (mysqli_connect_errno()) {    //判断是否成功连接上MySQL数据库
        throw new Exception('数据库连接错误！');  //如果连接错误，则抛出异常
    } else {
        echo '数据库连接成功！';   //打印连接成功的提示
    }
} catch (Exception $e) {        //捕获异常
    echo $e->getMessage();    //打印异常信息
} */

/* 
$con=mysqli_connect("localhost","root","qweasdzxc","myDB");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

/* $result = mysqli_query($con,"SELECT * FROM myguests ORDER BY age");

while($row = mysqli_fetch_array($result))
{
    echo $row['firstname'] . " " . $row['lastname']." ".$row['age'];
    echo "<br>";
} 
mysqli_query($con,"DELETE FROM myguests WHERE lastname='moe'");

mysqli_close($con); */

?>

<!-- 
<html>

<body>

    <?php
    /* $conn = odbc_connect('mydb', '', '');
    if (!$conn) {
        exit("连接失败: " . $conn);
    }

    $sql = "SELECT * FROM person";
    $rs = odbc_exec($conn, $sql);

    if (!$rs) {
        exit("SQL 语句错误");
    }
    echo "<table><tr>";
    echo "<th>Companyname</th>";
    echo "<th>Contactname</th></tr>";

    while (odbc_fetch_row($rs)) {
        $firstname = odbc_result($rs, "firstname");
        $lastname = odbc_result($rs, "lastname");
        echo "<tr><td>$firstname</td>";
        echo "<td>$lastname</td></tr>";
    }
    odbc_close($conn);
    echo "</table>"; */
    ?>

</body>

</html> -->

<?php
/* //Initialize the XML parser
$parser = xml_parser_create();

//Function to use at the start of an element
function start($parser, $element_name, $element_attrs)
{
    switch ($element_name) {
        case "NOTE":
            echo "-- Note --<br>";
            break;
        case "TO":
            echo "To: ";
            break;
        case "FROM":
            echo "From: ";
            break;
        case "HEADING":
            echo "Heading: ";
            break;
        case "BODY":
            echo "Message: ";
    }
}

//Function to use at the end of an element
function stop($parser, $element_name)
{
    echo "<br>";
}

//Function to use when finding character data
function char($parser, $data)
{
    echo $data;
}

//Specify element handler
xml_set_element_handler($parser, "start", "stop");

//Specify data handler
xml_set_character_data_handler($parser, "char");

//Open XML file
$fp = fopen("test.xml", "r");

//Read data
while ($data = fread($fp, 4096)) {
    xml_parse($parser, $data, feof($fp)) or
        die(sprintf(
            "XML Error: %s at line %d",
            xml_error_string(xml_get_error_code($parser)),
            xml_get_current_line_number($parser)
        ));
}

//Free the XML parser
xml_parser_free($parser); */
?>


<?php
/* $xmlDoc = new DOMDocument();
$xmlDoc->load("test.xml");

$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item)
{
    print $item->nodeName . " = " . $item->nodeValue . "<br>";
} */
?>

<?php
$xml=simplexml_load_file("test.xml");
print_r($xml);
?>

<?php
$xml=simplexml_load_file("test.xml");
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body;
?>

<?php
$xml=simplexml_load_file("test.xml");
echo $xml->getName() . "<br>";
 
foreach($xml->children() as $child)
{
    echo $child->getName() . ": " . $child . "<br>";
}
?>