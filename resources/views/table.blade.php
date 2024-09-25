<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

</head>
<body>
    
    <div class="container my-2" style="margin-top: 20px">
      
        <table class="table table-striped my-4" id="emptableid" width="100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>NID</th>
              <th>Father Name</th>
              <th>Father NID</th>
              <th>Father Mobile</th>
              <th>Mother Name</th>
              <th>Mother NID</th>
              <th>Mother Mobile</th>
              <th>Guardian Name</th>
              <th>Guardian NID</th>
              <th>Guardian Mobile</th>
              <th>Present Address</th>
              <th>Permanent Address</th>
              <th>Email</th>
              <th>Education</th>
              <th>Gender</th>
              <th>Religion</th>
              <th>Mobile</th>
              <th>Describe Yourself</th>
 
  
            </tr>
          </thead>
          <tbody>
            
          </tbody>
      
        </table>
      </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    
  <script type="text/javascript">
    
    $(document).ready(function() {

      $("#emptableid").DataTable({
              serverSide: true,
              processing:true,
              ajax: {
                url: "{{url('table')}}",
              },
              buttons: true,
              searching: false,
              scrollY: 500,
              scrollX: true,
              scrollCollapse: true,
              columns: [
                  {data: "id", name: 'ID'},
                  {data: "name", name: 'Name'},
                  {data: "nid", name: 'NID'},
                  {data: "father_name", name: 'father_name'},
                  {data: "father_nid", name: 'father_nid'},
                  {data: "father_mobile", name: 'father_mobile'},
                  {data: "mother_name", name: 'mother_name'},
                  {data: "mother_nid", name: 'mother_nid'},
                  {data: "mother_mobile", name: 'mother_mobile'},
                  {data: "guardian_name", name: 'guardian_name'},
                  {data: "guardian_nid", name: 'guardian_nid'},
                  {data: "guardian_mobile", name: 'guardian_mobile'},
                  {data: "present_address", name: 'present_address'},
                  {data: "permanent_address", name: 'permanent_address'},
                  {data: "email", name: 'Email'},
                  {data: "education", name: 'Education'},
                  {data: "gender", name: 'Gender'},
                  {data: "religion", name: 'Religion'},
                  {data: "mobile", name: 'Mobile'},
                  {data: "yourself", name: 'yourself'},
               
              ]  ,
              search:{
                "regex":true
              }
        });

    });

  </script>
</body>
</html>