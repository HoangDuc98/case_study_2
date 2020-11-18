<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }

    </style>
</head>
<body>
    <h3 style="text-align: center"> Các ghi chú  </h3> <br>
    <table>
        <tr>
            <td>
                <label for="cars"> Thể loại </label>
                <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </td>
            <td> <input type="text" placeholder="Tiêu đề" size="25px">
                <button>Tìm</button>
            </td>
        </tr>
    </table>
    <table >
        <tr>
            <td>
                <label for="cars"> STT </label>
                <select name="cars" id="cars">
                    <option value="volvo">1</option>
                    <option value="saab">2</option>
                    <option value="mercedes">3</option>
                    <option value="audi">4</option>
                </select>
            </td>
            <td>
                <label for="cars"> Tiêu đề </label>
                <select name="cars" id="cars">
                    <option value="volvo">1</option>
                    <option value="saab">2</option>
                    <option value="mercedes">3</option>
                    <option value="audi">4</option>
                </select>
            </td>
            <td>
                <label for="cars"> Phân loại </label>
                <select name="cars" id="cars">
                    <option value="volvo">1</option>
                    <option value="saab">2</option>
                    <option value="mercedes">3</option>
                    <option value="audi">4</option>
                </select>
            </td>
            <td>
                <select name="cars" id="cars">
                    <option value="volvo">1</option>
                    <option value="saab">2</option>
                    <option value="mercedes">3</option>
                    <option value="audi">4</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>...</td>
            <td>...</td>
            <td>
                <button>Xóa |</button>
                <button>Sửa</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>...</td>
            <td>...</td>
            <td>
                <button>Xóa |</button>
                <button>Sửa</button>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>...</td>
            <td>...</td>
            <td>
                <button>Xóa |</button>
                <button>Sửa</button>
            </td>
        </tr>

    </table>


</body>
</html>
