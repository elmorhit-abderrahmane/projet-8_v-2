$(document).ready(function () {
  var studentsList;
  function getall() {
    $(".studentsList").html(" ");
    $.ajax({
      url: "api/getStudents.php",
      method: "GET",
      success: function (data) {
        studentsList = JSON.parse(data);
        console.log(studentsList);
        for (var i = 0; i < studentsList.length; i++) {
          $(".studentsList").append('<li><h2>'+"ID: "+studentsList[i]["ID"]+'</h2><h3>'+"libellé: "+studentsList[i]["libellé"]+'</h3><h4>'+"prix: "+studentsList[i]["prix"]+'<</li>');
        }
      }
    })
  }
  getall();
  s
 
})
