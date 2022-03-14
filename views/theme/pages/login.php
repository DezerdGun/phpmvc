
   <body>  
	<section id="form"><!--form-->
		<div class="container " >
			<div class="col">
				<div class="col-sm-4 fr">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="" method="get" enctype="multipart/form-data">
							<input type="text"  id="name" placeholder="Name" required/>
							<input type="email"  id="email" placeholder="Email Address" required/>
							<input type="password" id="password" placeholder="Password" required/>
               <input type="password_2" id="password_2" placeholder="Password" required/>
               <input type="file" id="img" placeholder="Password" required/>
							<button type="button" id="button"  onclick='reg_ajax()' class="btn btn-default">Регистратция </button>
              <button  class="btn btn-default get"><a href="?view=signup"> Авторизатция</a></button>
						</form>
				</div>	
					</div><!--/sign up form-->
   
      <div class="none">
      <div class="card-card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1 class="h1">Success</h1> 
        <p class="p">We received your purchase request;<br/> we'll be in touch shortly!</p>
      </div>
      </div>
   
				
				</div>
			</div>
		</div>
	</section><!--/form-->
  </body>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">

    <style>
		 body {
       
        text-align: center;
        padding: 40px 0;
		
      }
        .h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        .p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
		.checkmark {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card-card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
      .none{
        display:none;
      }
      
    </style>
 

	
 