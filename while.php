<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* จัดให้ Body เป็น Flexbox เพื่อดันเนื้อหาทั้งหมดให้อยู่กึ่งกลางหน้าจอ */
        body {
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center; /* จัดกึ่งกลางแนวตั้ง */
            align-items: center;    /* จัดกึ่งกลางแนวนอน */
            font-family: Arial, sans-serif;
            
            /* 🩵 เปลี่ยนพื้นหลังหลักของหน้าเว็บเป็นสีฟ้าอ่อนพาสเทล (Soft Pastel Blue) */
            background-color: #04ff64; 
        }

        /* สร้างกล่องครอบเนื้อหาทั้งหมดเพื่อให้ดูเป็นระเบียบ */
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 12px; /* ปรับความโค้งมนเพิ่มขึ้นเล็กน้อยให้ดูทันสมัย */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.06); /* ปรับเงาให้นุ่มนวลเข้ากับพื้นหลังสีฟ้า */
            text-align: center; /* จัดตัวหนังสือในกล่องให้อยู่ตรงกลาง */
            max-width: 400px;
            width: 100%;
        }

        /* ตกแต่งฟอร์มและอินพุตเล็กน้อย */
        input[type="number"] {
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 80%;
            text-align: center;
        }

        input[type="submit"] {
            padding: 8px 20px;
            background-color: #04ff64;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* 🔹 คลาสสำหรับแถบสีสูตรคูณสลับสี */
        .row-item {
            padding: 4px 10px;
            border-radius: 4px;
            margin: 2px 0;
        }
        .bg-blue {
            background-color: #e6f2ff; /* แถบสีฟ้าอ่อน */
        }
        .bg-white {
            background-color: #ffffff; /* แถบสีขาว */
        }

        /* 🔑 สร้างการขยับยืดหดแบบเยลลี่ด้วย Keyframes */
        @keyframes jellyBounce {
            0% { transform: scale(1, 1); }
            30% { transform: scale(1.25, 0.75); } 
            40% { transform: scale(0.75, 1.25); } 
            50% { transform: scale(1.15, 0.85); } 
            65% { transform: scale(0.95, 1.05); } 
            75% { transform: scale(1.05, 0.95); } 
            100% { transform: scale(1, 1); }      
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>งานที่ 1 ภาณุวิชญ์ คชเวช<br>BIT.2/5 เลขที่ 09</h1>

        <p><a href="while.php" style="color: #04ff64; text-decoration: none;">While Loop</a></p>

        <form action="" method="GET">
            <label for="num">เลขแม่สูตรคูณ</label><br>
            <input type="number" name="num" id="num" required><br>
            <input type="submit" value="คำนวณ">
        </form>

        <?php
            if(isset($_GET["num"]) && $_GET["num"] !== ""){
                $num = $_GET["num"];

                echo "<div class='result'>";
                echo "<h3 style='margin-top: 0; margin-bottom: 10px;'>สูตรคูณแม่ " . $num . "</h3>";
                
                // เปลี่ยนเป็น While Loop ตรงนี้ครับ
                $i = 1;
                while($i <= 12){
                    // สลับคลาสสีฟ้าอ่อน (bg-blue) กับสีขาว (bg-white)
                    $bgClass = ($i % 2 == 0) ? 'bg-blue' : 'bg-white';
                    
                    echo "<div class='row-item " . $bgClass . "'>";
                    echo $num . " x " . $i . " = ". ($num * $i);
                    echo "</div>";
                    
                    $i++; // ห้ามลืมเพิ่มค่าเด็ดขาด ไม่งั้นเว็บค้างนะคุณภาณุวิชญ์!
                }
                echo "</div>";
            }
        ?>
    </div>

</body>
</html>