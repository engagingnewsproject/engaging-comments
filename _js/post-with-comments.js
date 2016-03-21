$(document).ready(function(){
  
  $("#submit-comment").click(function(event) {
    var commenter_name = $("#commenter-name").val();
    var new_comment = $("#commenter-comment").val();
    
    if (new_comment.length > 0) {
      submitComment(commenter_name, new_comment);
    } else {
      submitCommentError();
    }
    
    event.preventDefault();
  });   
  
  for (var i=0;i<10;i++) {
    $("#comment-" + i).click(function(event) {
      likeClicked(this);
    });
  }
  
  function likeClicked(element) {
    // returns comment-1 
    var element_id = $(element).attr("id");
    
    $(element).attr("disabled", "disabled");
    
    var current_like_count = $("#" + element_id + "-like-count").val();
    var new_count = parseInt(current_like_count) + 1;
    
    $(element).val(button_name + " (" + new_count + ")");
    

    //IP|datetime|type|comment|name
    //10.1.1.1|nov 14th 5pm|button|comment-1|like
    
    $.ajax({
			type: "POST",
			url: "_code/ProcessPoll.php",
			data: { button : button_name,  id : element_id }
		})
    
    //console.log("ipaddress" + "|" + element_id + "|" + "liked");
  }  
   
  function submitComment(name, comment) {
    var myDate = new Date();
    // TODO format date
    //var displayDate = (myDate.getMonth()+1) + '/' + (myDate.getDate()) + '/' + myDate.getFullYear();
    
    $(".new-comment").hide();
    
    $(".comments").prepend("<div class='comment'><span>" + name + 
      " says:</span><p>" + comment + 
      "</p><span>" + myDate.toDateString() + "</span></div>");

    //IP|datetime|type|comment|name
    //10.1.1.1|nov 14th 5pm|comment|this is a new comment|john doe
    $.ajax({
			type: "POST",
			url: "_code/ProcessPoll.php",
			data: { comment : comment,  name : name }
		})
    
    //console.log("ipaddress" + "|" + name + "|" + comment);
  }
   
  function submitCommentError() {
    $(".new-comment").append("<span class='error'>*Please enter a comment.</span>");
  }
});