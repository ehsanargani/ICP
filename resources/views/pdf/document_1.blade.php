<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>samane </title>

    <!-- Vendor stylesheet files. REQUIRED -->
    <!-- BEGIN: Vendor  -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- END: core stylesheet files -->

    <!-- Plugin stylesheet files. OPTIONAL -->

    <link rel="stylesheet" href="assets/vendor/jqvmap/jqvmap.css">

    <link rel="stylesheet" href="assets/vendor/dragula/dragula.css">

    <link rel="stylesheet" href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css">

    <!-- END: plugin stylesheet files -->

    <!-- Theme main stlesheet files. REQUIRED -->
    <link rel="stylesheet" href="assets/css/chl-rtl.css">
    <link id="theme-list" rel="stylesheet" href="assets/css/theme-peter-river-rtl.css">
    <!-- END: theme main stylesheet files -->

    <!-- begin pace.js  -->
    <link rel="stylesheet" href="assets/vendor/pace/themes/blue/pace-theme-minimal.css">
    <script src="assets/vendor/pace/pace.js"></script>
    <!-- END: pace.js  -->
    

<style>
    td{
        width: 48%;
        background-color: #eee;
        margin: 2px;
        padding: 5px;
    }
    table{
        width: 100%;
        margin: auto;
    }
    </style>

</head>

<body dir="ltr">
  
@foreach ($cer as $result)

    <div class="container">
    <table>
        <tr>
            <td colspan="2" style="text-align:center;background-color: #1C0176; color:#fff">
            <p><label>نام شرکت</label> : {{$result->co_name}}</p>
            </td>    
        </td>
        <tr>
            <td><p><label>Type Of Inspection</label> : {{$result->cer_type}}</p></td>
            <td><p><label>Certificate No</label> : {{$result->cer_num}}</p></td>
        </tr>
         <tr>
            <td><p><label>issue date</label> : {{$result->issue_date}}</p></td>
            <td> <p>   <label>Buyer / Applicant</label> {{$result->buyer}}</p></td>
        </tr>
         <tr>
            <td><p><label>Seller / Beneficiary</label> : {{$result->seller}}</p></td>
            <td><p><label>Bank name</label> :{{$result->bank_name}}</p></td>
        </tr>
         <tr>
            <td><p><label>Bank name</label> :{{$result->bank_name}}</p></td>
            <td><p><label>Bank code</label> : {{$result->bank_code}}</p></td>
        </tr>
         <tr>
            <td><p> <label>P/l no</label> : {{$result->p_l_no}}</p></td>
            <td>  <p> <label>P/l date</label> : {{$result->p_l_date}}</p></td>
        </tr>
        <tr>
            <td>  <p>  <label>Iranian Customs Tarif no</label> : {{$result->iran_customs}}</p></td>
            <td>   <p> <label>B/L no</label> : {{$result->b_l_no}}</p></td>
        </tr>
    <tr>
            <td><p> <label>Date of Inspection</label> : {{$result->date_ins}}</p></td>
            <td>  <p> <label>Place of Inspection</label> : {{$result->place_ins}}</p></td>
        </tr>
    <tr>
            <td> <p><label>CB no</label> : {{$result->cb_no}}</p></td>
            <td>    <p> <label>Insurance no</label> : {{$result->ins_no}}</p></td>
        </tr>
    <tr>
            <td> <p>  <label>Insurance date</label> : {{$result->ins_date}}</p></td>
            <td>  <p> <label>Operator name</label> : {{$result->operator_name}}</p></td>
        </tr>
        
        
    </table>        
    </div>
    @endforeach
</body>
</html>
  
