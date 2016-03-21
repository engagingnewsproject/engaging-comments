<head>
  <link href="_css/style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="_js/custom.js"></script>
  <script>
    var button_name = "<?php echo $_GET["button_name"] ?>";
  </script>
  <script src="_js/post-with-comments.js"></script>
</head>
<div class="content">
  <div class="post">
    <h1>We are doing a survey</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas lorem viverra velit porta aliquam. In purus nibh, convallis non condimentum a, convallis a velit. Morbi sapien justo, sagittis dictum suscipit at, commodo ac odio. Sed interdum velit eget ipsum semper sit amet venenatis lectus ultrices. Proin quis felis sed nunc sagittis euismod. Pellentesque feugiat felis sit amet nulla mollis mattis. Vestibulum non neque turpis, in bibendum purus. Sed mollis mollis mi, vel dapibus orci imperdiet ac.</p>
  </div>
  <div class="comments">
    <div class="new-comment">
      <span>Name: </span><input id="commenter-name" type="text" value=""></input>
      <br/>
      <textarea id="commenter-comment"></textarea>
      <br/>
      <input id="submit-comment" type="button" value="Submit"></input>
    </div>
    <div class="comment">
      <span>Makenzie says:</span>
      <input id="comment-1" type="button" value="<?php echo $_GET["button_name"] ?> (3)"></input>
      <input id="comment-1-like-count" style="display:none" value="3"></input>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas lorem viverra velit porta aliquam. In purus nibh, convallis non condimentum a, convallis a velit.</p>
      <span>Mon Nov 26 2012</span>
    </div>
    <div class="comment">
      <span>John says:</span>
      <input id="comment-2" type="button" value="<?php echo $_GET["button_name"] ?> (11)"></input>
      <input id="comment-2-like-count" style="display:none" value="11"></input>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas lorem viverra velit porta aliquam. In purus nibh, convallis non condimentum a, convallis a velit.</p>
      <span>Mon Nov 25 2012</span>
    </div>
    <div class="comment">
      <span>Suzy says:</span>
      <input id="comment-3" type="button" value="<?php echo $_GET["button_name"] ?> (0)"></input>
      <input id="comment-3-like-count" style="display:none" value="0"></input>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas lorem viverra velit porta aliquam. In purus nibh, convallis non condimentum a, convallis a velit.</p>
      <span>Mon Nov 24 2012</span>
    </div>
    <div class="comment">
      <span>Josh says:</span>
      <input id="comment-4" type="button" value="<?php echo $_GET["button_name"] ?> (13)"></input>
      <input id="comment-4-like-count" style="display:none" value="13"></input>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas lorem viverra velit porta aliquam. In purus nibh, convallis non condimentum a, convallis a velit.</p>
      <span>Mon Nov 24 2012</span>
    </div>
  </div>
</div>