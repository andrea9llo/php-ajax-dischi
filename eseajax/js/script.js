function printData(array) {
  var target = $(".cds-container");
  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < array.length; i++) {
    var album = array[i];
    var context = album;
    var html = template(context);
    target.append(html);
  }

}

function getData(){
  $.ajax({
    url:"getAllDatab.php",
    method:"GET",
    success: function(data){
      printData(data);
    },
    error: function(error){
      console.log("error",error);
    }

  });
}

$(document).ready(function(){
  getData();
});
