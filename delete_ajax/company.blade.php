<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
//sweet alert cdn
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

 <a href="{{ route('company.destroy',$element->id) }}" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" id="deleteCompany" data-id="{{ $element->id }}">
   Delete
</a>

<script>

$(document).ready(function () {

$("body").on("click","#deleteCompany",function(e){

   if(!confirm("Do you really want to do this?")) {
      return false;
    }

   e.preventDefault();
   var id = $(this).data("id");
   // var id = $(this).attr('data-id');
   var token = $("meta[name='csrf-token']").attr("content");
   var url = e.target;

   $.ajax(
       {
         url: url.href, //or you can use url: "company/"+id,
         type: 'DELETE',
         data: {
           _token: token,
               id: id
       },
       success: function (response){

           $("#success").html(response.message)

           Swal.fire(
             'Remind!',
             'Company deleted successfully!',
             'success'
           )
       }
    });
     return false;
  });
   

});

</script>
</body>
</html>