<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="frm">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>               
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>                
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="frmSubmit"></td>
            </tr>
            @csrf
        </table>
    </form>
    <div id="message"></div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    // jQuery ajax form submit example, runs when form is submitted
    $("#frm").submit(function(e) {
    e.preventDefault(); // prevent actual form submit
    $('#btn').attr('disabled',true);
    $('#btn').attr('value',"please wait....");
        //alert('Test');
        $.ajax({
            url:"{{url('form_submit')}}",
            data:$('#frm').serialize(),
            type:'post',
            success:function(result){
                //console.log(result);
                $('#message').html(result.msg);
                $('#frm')['0'].reset();//form data reset
                $('#btn').attr('disabled',true);
                $('#btn').attr('value',"Submitted wait....");
            }
        });
    });
    </script>
</body>
</html>