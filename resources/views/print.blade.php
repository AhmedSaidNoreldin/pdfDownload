<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>طباعة فاتورة</title>
</head>
<style>
    body{
        /*
        add  Watermark link img 
        background-image:url( Watermark link img  );
        */
        padding: 20px;
        font-family: arial, sans-serif;
    }
    .remove-bored{
        border: none;
    }
    .total-due{
        background-color: #1c7430;
        color: #fff3cd;
        font-weight: bold;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    td, th {
        border: 1px solid #dddddd;
        text-align: right;
        padding: 8px;
    }
</style>

<body dir="rtl">

<table width="100%" >
    <tr style="border: none" class="remove-bored">
        <td width="60%" class="remove-bored">Logo</td>
        <td class="td-info">
            <div>رقم الفاتورة  : #0000</div>
            <div>تاريخ الانشاء  : 2022-1-15</div>
            <div>تاريخ انتهاء الصلاحية   : 2022-1-17</div>
            <div>إجمالي المنتجات : 5</div>
        </td>
    </tr>
</table>
<br><br><br>

<h1 align="center">#0000</h1>
<h2>المعلومات</h2>
<table width="100%">
    <tr style="border: none">
        <td width="60%" class="remove-bored">
            <h4>من</h4><br>
            <div>إلاسم  : Site Name</div>
            <div>البريد الالكتروني : info@app.com</div>
        </td>
        <td class="remove-bored">
            <h4>إلي</h4><br>
            <div>الإسم  : customer name</div>
            <div>البريد : customer@app.com</div>
        </td>
    </tr>
</table>
<br><br><br>


<h2>المنتجات</h2>
<table width="100%">
    <tr>
        <th>العدد</th>
        <th>الإسم</th>
        <th>الوحدة</th>
        <th>السعر </th>
        <th>الكمية</th>
        <th>الإجمالي</th>
    </tr>
    <tr>
        <td>1</td>
        <td>product 1</td>
        <td>2</td>
        <td>10 LE</td>
        <td>12</td>
        <td>120 $ </td>
    </tr>
    <tr>
        <td>1</td>
        <td>product 1</td>
        <td>2</td>
        <td>10 LE</td>
        <td>12</td>
        <td>120 $ </td>
    </tr>
    <tr>
        <td>1</td>
        <td>product 1</td>
        <td>2</td>
        <td>10 LE</td>
        <td>12</td>
        <td>120 $ </td>
    </tr>
</table>
<br><br><br>
<h2>calculation</h2>
<table id="" width="100%">
    <tr>
        <th >الاجمالي</th>
        <th >التسوق</th>
        <th >Discount</th>
        <th >Total Due</th>
    </tr>
    <tr>
        <td >122 $</td>
        <td >10</td>
        <td >10 % </td>
        <td class="total-due">120 $</td>
    </tr>
</table>
</body>
</html>