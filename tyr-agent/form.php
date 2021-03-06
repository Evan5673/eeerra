<?php include_once 'db.php'; ?>
<html>
<head>
<meta charset = "UTF-8">
<title>MountainAdventures</title>
<style type="text/css">
    * {
  margin: 0;
  padding: 0;
}

body {
  font-size: 1.2em;
  background-color: #fff;
  color: #555;
}

p {
  padding: 0 0 20px 0;
  line-height: 1.7em;
} 

input, textarea {
  outline: none;
  border: none;
  border: solid 1px #f2f2f2;
}

h3, h2 {
  font: normal 85% 'century gothic', arial;
  margin: 0 0 0 0;
  padding: 3px 0 5px 0;
  color: #000;
}

h2 {
  font-size: 140%;
}

hr {
  color: black;
}


.content {
  text-align: left;
  width: 30%;
  padding: 1% 0 0 5px;
  margin: 0 0 0 27%;
  float: left;
}

.reviews {
  margin-bottom: 4%;
  font-size: 0.9em;
  text-align: left;
  width: 30%;
  padding: 1% 0 0 5px;
  margin: 0 0 0 27%;
  float: left;
}

.reviews .review_text {

  background-color: #f2f2f2;
  color: black;
  padding: 1%;
  border-radius: 5px;
  border: solid 1px;
  width: 160%;
  height: 11%;
  padding-top: 2%;
  bottom: 2%;
  padding-left: 2%;
}

.send {

  margin-bottom: 4%;
}

.send input[type="text"], input[type="email"], textarea {

  border: solid 1px #000000;
  margin-bottom: 2%;
}

.send input[type="text"], [type="email"] {

  width: 38%;
  color: #5d5d5d;
  width: 46%;
  padding: 8px;
  border-radius: 5px;
}

.send textarea {

  width: 163%;
  height: 20%;
  border-radius: 5px;
}

.send input[type="submit"] {

  background-color: #b5c1f3;
  padding: 2%;
  color: black;
  border-radius: 5px;
  cursor:pointer;
}

.rating {
    float:left;
}

.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:140%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '??? ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}
</style>
<meta content="text/html; charset=utf-8">
</head>
<body>
<?php $result = mysqli_query($link, "SELECT * FROM `otzivi` ORDER BY id DESC") ?> 
 <?php while($res = mysqli_fetch_assoc($result)) { ?>

<div class="reviews">
  
<div class="review_text">
<b>??????:</b> <?= $res['name'] ?> | <b>????????:</b> <?= date("d.m.y | <b>??????????:</b> H.i", strtotime($res['date'])) ?> | <b>????????????:</b> <?= $res['rating'] ?>/5
<hr>
<br>
<?= $res['message'] ?> <br>
</div>
</div>

<?php } ?>
<div class="content">
<h2>?????????? ?? ????????????</h2>
<h3>?????? ???????? ?????????????????????? ?????? ????????????????????</h3>
<br>
<div class="send"> 
<form method="post" action="index.php" id="review">   
<h3>?????????????? ??????????????</h3>
<div class="rating">
<input type="radio" class="rating" id="star5" name="rating" value="5" /><label for="star5"></label>
<input type="radio" class="rating" id="star4" name="rating" value="4" /><label for="star4"></label>
<input type="radio" class="rating" id="star3" name="rating" value="3" /><label for="star3"></label>
<input type="radio" class="rating" id="star2" name="rating" value="2" /><label for="star2"></label>
<input type="radio" class="rating" id="star1" name="rating" value="1" /><label for="star1"></label>
</div>
<br>
<br>
<br>
<input type="text" name="name" placeholder="???????? ??????" required>
<input type="email" name="email" placeholder="?????? E-mail" required>
<input type="date" name="date" hidden="true">
<textarea name="message" placeholder="??????????????????"></textarea required>
<input type="submit" name="add" value="???????????????? ??????????">
</form>
</div>
</div>
</body>
</html>