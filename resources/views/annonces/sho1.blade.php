<html>
    <head>
        <link rel="stylesheet" type="text/css" href="index.css" >
        <script src="https://kit.fontawesome.com/f770f9bca0.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Satisfy&family=Shadows+Into+Light&family=Work+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/f770f9bca0.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
    
* {
    margin: 0;
    padding: 0;
    font-family: 'Dancing Script', cursive;
    font-family: 'Satisfy', cursive;
font-family: 'Shadows Into Light', cursive;
font-family: 'Work Sans', sans-serif;
    box-sizing: border-box;
}

body {
    background: #fefefe;

}
.kenburns-top {
	-webkit-animation: kenburns-top 5s ease-out both;
	        animation: kenburns-top 5s ease-out both;
   

}
.kenburns-top img{
    width: 100%;
    height: 90%;
    position:-ms-page;
}


header {
  
    width: 100%;
    height: 90px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color:#000;
    padding: 0 100px;

}

.hamburger {
    display: none;
}

.logo {
    font-family: 'Dancing Script', cursive;
    font-family: 'Satisfy', cursive;
    font-size:30px;
    color: #fbfbfb;
    padding:0.1px;
    -webkit-animation: text-focus-in 1s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
            animation: text-focus-in 1s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
    

}
/* ----------------------------------------------
 * Generated by Animista on 2023-1-28 14:50:50
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation text-focus-in
 * ----------------------------------------
 */
 @-webkit-keyframes logo {
    0% {
      -webkit-filter: blur(12px);
              filter: blur(12px);
      opacity: 0;
    }
    100% {
      -webkit-filter: blur(0px);
              filter: blur(0px);
      opacity: 1;
    }
  }
  @keyframes logo {
    0% {
      -webkit-filter: blur(12px);
              filter: blur(12px);
      opacity: 0;
    }
    100% {
      -webkit-filter: blur(0px);
              filter: blur(0px);
      opacity: 1;
    }
  }
  

nav ul li {

    display: inline-block;
    padding: 0px 18px;
}

nav ul li a {
    color: #fefefe;
    text-decoration: none;
    font-size: 20px;
    display: inline-block;
    border-radius: 23px;
    padding: 10 25px;
    margin: 0 3px;


}
nav ul li a:hover{
    color: black;
    background: #fefefe;

}
nav ul li a.active{
    color: black;
    background: #fefefe;

}
@media only screen and (max-width:1320px){
    header {
        padding:0 50px;
    }
}
@media only screen and(max-width:1100px){
    header {
        padding:0 30px;

    }
}
@media only screen and (max-width:900px){
    .hamburger{
        display:block;
        cursor:pointer;

    }
    .humberger .line{
        width:30px;
        height:3px;
        background: #fefefe;
        margin:6px 0;
    }
}


.card {
    width: 230px;
    height: 354px;
    padding: .8em;
    background: #f5f5f5;
    position: relative;
    overflow: visible;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    margin:7px;
   

   }
   
   .card-img {
    background-color: #0b0b0a;
    height: 60%;
    width: 100%;
    border-radius: .5rem;
    transition: .3s ease;
   }
   
   .card-info {
    padding-top: 10%;
   }
   
   svg {
    width: 20px;
    height: 20px;
   }
   
   .card-footer {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 10px;
    border-top: 1px solid #ddd;
   }
   
   /*Text*/
   .text-title {
    font-weight: 900;
    font-size: 1.2em;
    line-height: 1.5;
   }
   
   .text-body {
    font-size: .9em;
    padding-bottom: 10px;
   }
   
   /*Button*/
   .cardbutton {
    border: 1px solid #252525;
    display: flex;
    padding: .3em;
    cursor: pointer;
    border-radius: 50px;
    transition: .3s ease-in-out;
   }
   
   /*Hover*/
   .card-img:hover {
    transform: translateY(-10%);
    box-shadow: rgba(226, 196, 63, 0.25) 0px 13px 47px -5px, rgba(180, 71, 71, 0.3) 0px 8px 16px -8px;
   }
   
   .cardbutto:hover {
    border: 1px solid #ddd;
    background-color:#ddd;
    
   }
.card1{
    display: flex;
    margin: 5%;
    margin-left: 9px;
    justify-content: space-between;
    margin-right: 9px;
    margin-top:12px
}   
.OK li a{
    margin:9px;
    font-size: 24px;
    
}
.fa-user{
    color:white ;
}
.ok li a:hover{
    
    font-size: 26px;
}
.fa-heart{
    color:#e91e63
}
.fa-magnifying-glass{
    color:white;
}
.input-container {
    width: 220px;
    position: relative;
    margin-left:41%;
    margin-top: 25px;
    
  }
  
  .icon {
    position: absolute;
    right: 10px;
    top: calc(50% + 5px);
    transform: translateY(calc(-50% - 5px));
  }
  
  .input {
    width: 100%;
    height: 40px;
    padding: 10px;
    transition: .2s linear;
    border: 2.5px solid black;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 2px;
  }
  
  .input:focus {
    outline: none;
    border: 0.5px solid black;
    box-shadow: -5px -5px 0px black;
  }
  
  .input-container:hover > .icon {
    animation: anim 1s linear infinite;
  }
  
  @keyframes anim {
    0%,
    100% {
      transform: translateY(calc(-50% - 5px)) scale(1);
    }
  
    50% {
      transform: translateY(calc(-50% - 5px)) scale(1.1);
    }
  }
.card a{
    text-decoration: none;
    color: #0b0b0a;
}



.dropdow ul li{
    padding:0.1px;
    color: #0b0b0a;
    background-color:aliceblue;
    display:none;
    width:120%;
    
   
   
    
}
.dropdow{
    margin-top:3%;
    margin-left:2%;
    margin-right:17%;
    
    
}

.loader-container{
  width:100%;
  height:100vh;
  background-color: #000000;
  position:fixed;
  
}
.loader{
  margin-left:47%;
  margin-top:18%;
  width:100px;
  height:100px;
  border:5px solid;
  color:#ffffff;
  border-radius:50%;
  border-top-color:transparent;
  animation:loader 1.2s linear infinite;


}
@keyframes loader{
    to{
      transform:rotate(360deg);
    }

  }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

    <body>
      <div class="loader-container">
        <div class="loader"></div>
      </div>
      <script>
        $(window).on("load",function(){
          $(".loader-container").fadeOut(1000);

        });
        </script>
       
        <header>
        <div class="logo"> Immobiler Manager</div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-navbar">
            <ul>
            <li>
                <a href="#" class="active">Home</a>
            </li>
           
           
            <li>
                <a href="#">About</a>
            </li>
            
            
        
            </li>
            </ul>
        </nav>
       
        <div class="OK">
           
            <li>
                <a href="{{ route('login') }}"><i class="fa-solid fa-user"></i></a>
            </li>
                
        </div>
                
                
           
        </div>
        
        </header>
        
        <div class="input-container">
           <form method="get" action="{{ route('annonces.search') }}">
                @csrf
                @method('POST')
            
                <input type="text" name="query" class="input" placeholder="search...">
                
            </form>
            
          </div>
          <div class="card1">
            @foreach($safouat->chunk(2) as $row)
                <div class="row">
                    @foreach($row as $a)
                        <div class="card">
                            <img src="/SerieLaravel/public/photos/{{ $a->photos()->first()->image }}" class="card-img">
                            <div class="card-info">
                                <p class="text-title"> {{$a->name}}</p>
                                <p class="text-body">{{$a->adresse}},Surface {{$a->surface}}</p>
                            </div>
                            <div class="card-footer">
                                <span class="text-title">{{$a->prix}}</span>
                                <div class="cardbutto">
                                    <a href="{{ route('annonces.show', $a->code) }}" ><i class="fa-solid fa-eye o"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
        <div class="pagination">
            {{ $safouat->links('pagination::bootstrap-4') }}
        </div>
        
          

        
        
    </body>
</html>