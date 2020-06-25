<style>
*{margin: 0; padding: 0; border-box; scroll-behavior: smooth;}
.nav_style{
    background-color: #a29bfe !important;
}
.nav_style a{
color: white !important;
}
.main_header{
    height:450px;
    width:100%;
}
.rightside h1{
    font-size:  3rem;
}
.rightside img{
    animation: corona 3s linear infinite ; 
}
@keyframes corona{
    0% {transform: rotate(0);}
    100% {transform: rotate(360deg);}
}
.leftside img{animation: heartbeat 5s linear infinite;}

@keyframes heartbeat{
    0%{
        transform: scale(.75);
    }
    20%{
        transform: scale(1);
    }
    40%{
        transform: scale(.75);
    }
    60%{
        transform: scale(1);
    }
    80%{
        transform: scale(1);
    }
    100%{
        transform: scale(.75);
    }
}
.sub_section{
    
    background-color: #fbfafd !important;
}

.footer_style{
    background-color: #a29bfe !important;
}
.footer_style h5{
    margin-bottom: 0px !important;
    padding:10px;
}


#button {
  display: inline-block;
  background-color: blue;
  width: 50px;
  height: 50px;
  text-align: center;
  border-radius: 50px;
  position: fixed;
  bottom: 30px;
  right: 30px;
  transition: background-color .3s, 
    opacity .5s, visibility .5s;
  opacity: 0;
  visibility: hidden;
  z-index: 1000;
  float = right;
}
#button::after {
  content: "\f077";
  font-family: FontAwesome;
  font-weight: normal;
  font-style: normal;
  font-size: 2em;
  line-height: 50px;
  color: #fff;
}
#button:hover {
  cursor: pointer;
  background-color: #333;
}
#button:active {
  background-color: #555;
}
#button.show {
  opacity: 1;
  visibility: visible;
}

/* Styles for the content section */

.content {
  width: 77%;
  margin: 50px auto;
  font-family: 'Merriweather', serif;
  font-size: 17px;
  color: #6c767a;
  line-height: 1.9;
}
@media (min-width: 500px) {
  .content {
    width: 43%;
  }
  #button {
    margin: 30px;
  }
}
.content h1 {
  margin-bottom: -10px;
  color: #03a9f4;
  line-height: 1.5;
}
.content h3 {
  font-style: italic;
  color: #96a2a7;
}
.navbar-toggler-icon{
  
}

/* Responsive  */

@media(max-width: 860px){
    .main_header{ height:700px; text-align:center;}
    .main_header h1{
        text-align:center;
        padding:0px;
        width:100%;
        font-size:50px;
        margin-left:30px;
    }
    .imgh{
        margin-bottom:20px;
    }
    
    .about_res{margin-left: 0rem !important; margin-top:10px !important;}
}
</style>