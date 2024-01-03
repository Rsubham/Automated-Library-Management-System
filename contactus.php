<?php
include "nav.php";
include "footer.php";
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <title>Welcome to MCA/CS Library RU</title>
</head>

<style>



* {
  box: sizing 100%;
  margin:0;
}



.container1 {
	
	border-radius: 5px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	margin-left:auto;
  margin-right:auto;
  margin-top: 5px;
  margin-bottom: auto;
	overflow: hidden;
	width: 900px;
	max-width: 100%;
  max-height: 100%;
	min-height: 480px;
  min-width:370px;
}

h2 {
  font-size:2rem;
  margin-bottom:1rem;
}
.form-container1 {
  display:flex;
}

.left-container1 {
  flex:1;
  height:480px;
}
.right-container1 {
  display:flex;
  flex:1;
  height:460px;
  justify-content:center;
  align-items:center;
}

.left-container1 {
  display:flex;
  flex:1;
  height:480px;
  justify-content:center;
  align-items:center;
}

.left-container1 p {
  font-size:0.9rem;
}

.right-inner-container1 {
  width:70%;
  height:80%;
  text-align:center;
}

.left-inner-container1 {
  height:50%;
  width:80%;
  text-align:center;
  line-height:22px;
}

input, textarea {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
  font-size:0.8rem;
}

input:focus, textarea:focus{
}

button {
	border-radius: 20px;
	border: 1px solid #00b4cf;
	background-color: #00b4cf;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
  cursor:pointer;
}

button:hover {
  opacity:0.7;
}
@media only screen and (max-width: 600px) {
  .left-container1{
    display: none;
  }
  .lg-view {
    display:none;  
  }
}

@media only screen and (min-width: 600px) {
  .sm-view {
    display:none;  
  }
}

form p {
  text-align:left;
}
</style>
<style type="text/css" media="screen">
    body {
        background-color: rgba(80, 121, 255, 0.288);
    }
</style>
<body background-color:red>
 

    <div class="container1">
      <div class="form-container1">
        <div class="left-container1">
          <div class="left-inner-container1">
          <h2>Let's Chat</h2>
          <p>Whether you have a question, want to share your feedback or            simply want to connect.</p>
            <br>
            <p>Feel free to send a message in the contact form</p>
        </div>
          </div>
        <div class="right-container1">
          <div class="right-inner-container1">
            <form action="contactdb.php" method="post">
          <h2 class="lg-view">Contact Us</h2>
          <h2 class="sm-view">Let's Chat</h2>
              
              <input type="text" placeholder="Name" name="name" required/>
          <input type="email" placeholder="Email" name="email" required/>
              <textarea rows="4" placeholder="Message" name="message" required ></textarea>
          <button>Submit</button>
        </form>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
     integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
     crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
     integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
     crossorigin="anonymous"></script>
</body>

</html>