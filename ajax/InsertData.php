<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery.min.js"></script>
    <script>


        function fun(data){
            $("#hidId").val(data);
                var input ={
                    id:data,
                    method:'editjsondata'
                }
            async function post(data){
                const response = await fetch(`jsonfile/insertJson.php?editid=${data.id}&method=${data.method}&author=''`, {
                method: 'POST',
                headers: {'Content-type': 'application/json'},
                body: JSON.stringify(data)
            });
            
            const responseData = await response.json();
            $("#tbl1 tbody").empty();
            loadData();
            
            return responseData;
        }

        post(input)
        .then(data => {$("#txt1").val(data.author)})
        .catch(err => console.log(err));
        }


    </script>
</head>
<body>
    <form action="insertData.php" method="post">
    <label>Author</label>
    <input type="text" id="txt1" name="txt1" />
    
    <input type="hidden" id="hidId" name="hidId" />
    <!-- <input type="hidden" name=""> -->
    <input type="button" id="btn1" onclick="btn1Click()" name="btn1" value="Click Here" />


<br>



<br>
<table id="tbl1" border="1" align="center">
   <thead>
   <tr>
    <th>ID</th>
    <th>Author</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>
   </thead>
   <tbody>
   </tbody>
</table>


    </form>

    
    <script>
    window.onload = function () {
        loadData();
    }
    // function loadData() {
    //     $.ajax({
    //         url:'jsonfile/getData.php',
    //         type:'GET',
    //         data:{},
    //         dataType:'json',
    //         success:function (data) {
    //           for(var i=0; i<data.length;i++)
    //           {
    //             var dropVal = data[i].split(',');
    //               $("#tbl1").append("<tr><td>"+dropVal[0]+"</td><td>"+dropVal[1]+"</td></tr>");
    //           }  
    //         },
    //         error:function (data) {
    //             alert(data.responseText);
    //         }



    //     });
    // }

    function loadData(){

        async function showData(){
            const response = await fetch('jsonfile/getData.php');
            const data = await response.json();
            return data;
        }

        showData()
        .then(result => {
            for(var i=0; i<result.length; i++)
              {
                var dropVal = result[i].split(',');
                  $("#tbl1 tbody").append(`<tr>
                  <td>${dropVal[0]}</td><td>${dropVal[1]}</td>
                  <td><a href='#!' data-edit=${dropVal[0]} onclick="fun(${dropVal[0]})">Edit<a/></td>
                  <td><a href='#!' data-delete=${dropVal[0]}>Delete<a/></td>
                  </tr>`);
              }    
        })
        .catch(err => console.log(err));
    }

    function btn1Click() {
        var txtVal = $("#txt1").val();
        var hiddenfield = document.querySelector("#hidId").value;

        if(hiddenfield !== null){

            var input = {
            id: hiddenfield,
            data: txtVal,
            method: 'updatejsondata'
        }
        } else {
            var input = {
            id: "",
            data: txtVal,
            method: 'getjsondata'
        }
        }
        // $.ajax({
        //     url:'jsonfile/insertJson.php',
        //     type:'GET',
        //     data:{author:txtVal},
        //     dataType:'json',
        //     success:function (data) {
        //         alert(data);
        //     },
        //     error:function (data) {
        //         alert(data);
        //     }



        // });

        


        async function post(data){
           // var method = '';
        const response = await fetch(`jsonfile/insertJson.php?editid=${data.id}&author=${data.data}&method=${data.method}`, {
                method: 'POST',
                headers: {'Content-type': 'application/json'},
                body: JSON.stringify(data)
            });
            
            const responseData = await response.json();
            $("#tbl1 tbody").empty();
            loadData();
            
            return responseData;
        }

        post(input)
        .then(data => {alert(data); $("#txt1").val(""); $("#hidId").val("")})
        .catch(err => console.log(err));

       

    }
    
 


    
    </script>

</body>
</html>