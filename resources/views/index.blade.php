<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="resources/bootstrap5/css/bootstrap.css">
        <link rel="stylesheet" href="resources/css/app.css">
        <link rel="stylesheet" href="css/fixed.css">
        <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Red+Hat+Text:400,500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <link rel="stylesheet" href="styles.css">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            /*--- Bootstrap Mobile Gutter Fix --*/
.row, .container-fluid {
margin-left: 0px!important;
margin-right: 0px!important;
}

/*--- Fixed Video Background iOS/Mobile Style--*/
.video-wrap {
  clip: rect(0, auto, auto, 0);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
#video {
  position: fixed;
  display: block;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center center;
  -webkit-transform: translateZ(0);
          transform: translateZ(0);
  will-change: transform;
  z-index: -1000;
}
video {
  position: fixed;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: -100;
  transform: translateX(-50%) translateY(-50%);
  background: url('') no-repeat;
  background-size: cover;
  transition: 1s opacity;
}

            :root{
   --red:#0000FF;
   --black:#252a34;
   --blue:#ff2828;
   --white:#eaeaea;
   --title:35px;
   --text:19px;
}

*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background: #EBF5FB !important;
    overflow-x: hidden;
    font-family: 'Red Hat Text', sans-serif;
}
.go-top{
    position: fixed;
    bottom: 100px;
    right: -100%;
    width: 50px;
    height: 50px;
    background: #fff;
    border:2px solid var(--red);
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    z-index: 1000;
    transition: 0.5s;
}
.mapa{
    width:"auto";
    height:auto;

    min-width: 80% !important;
    min-height: 400px !important;
}
.go-top:hover{
    background: var(--red);
    color:#fff;
    border: 2px solid var(--white);
}
.go-top:hover span{color:var(--white);}

.go-top > span{
   font-size: 30px;
   color: var(--black);
}


/** Skew **/
.skew-abajo{
    position: absolute;
	bottom: 0;
	left: 0;
	border-width: 0 0 10vh 100vw;
	border-style: solid;
	border-color: transparent transparent #fff transparent;
}
.skew-arriba{
    position: absolute;
	top: 0;
	left: 0;
	border-width: 10vh 100vw 0 0;
	border-style: solid;
	border-color: #fff transparent transparent transparent;
	z-index: 10;
}

/** Navegation Menu **/
#header{
    position: relative;
    width: 100%;
}
.menu{
    position: fixed;
    top:0;
    left: 0;
    width: 100%;
    height: 60px;
    background: #fff;;

    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 9999;
}
.menu .logo-box{margin-left: 20px;}
.menu .logo-box h1 a{
    text-decoration: none;
    font-size: var(--title);
    font-weight: 400;
    color:var(--black);
}
.menu .list-container{margin-right: 20px;}
.menu .list-container ul{display: flex;}
.menu .list-container ul li{list-style: none;}
.menu .list-container ul li a{
    text-decoration: none;
    margin: 0px 10px;
    padding:8px;
    color: var(--black);
    border-radius: 24px;
    transition: 0.3s;
    font-size: 16px;
}
.menu .list-container ul li a.active{
    background: var(--red);
    color:#fff;
}
.menu .list-container ul li a:hover{
    background: var(--red);
    color:#fff;
}

.btn-menu > .fa-bars{
    display: none;
}

@media only screen and (max-width:900px){
    .btn-menu > .fa-bars{
        display: block;
        position:absolute;
        right: 30px;
        top: 20px;
        font-size: 28px;
        color: var(--black);
        transition: 0.5s;
        cursor: pointer;
    }
    .btn-menu > .fa-times{color: var(--red);}
    .btn-menu > .fa-bars:hover{color:var(--red);}
    .menu .logo-box{margin-left: 30px;}
    .menu .list-container{
        position: fixed;
        top:60px;
        left:-100%;
        background:#fff;
        width: 100%;
        height: calc(100vh - 60px);
    }
    .menu .list-container .lists{
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border-top:4px solid var(--red);
    }
    .menu .list-container ul li{
        width: 90%;
        border-bottom: 2px solid var(--black);
        display: flex;
        justify-content: center;
    }
    .menu .list-container ul li a{
        font-size: 20px;
        text-align: center;
        padding:12px 0px;
    }
    .menu .list-container ul li a.active{
        background: none;
        color:var(--red);
    }
    .menu .list-container ul li a:hover{
        background: none;
        color:var(--red);
    }
}

/** Navegation Menu **/

/** IMG Header **/
.img-header{
    position: relative;
    width: 100%;
    height: 100vh;
    background:url();
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
}
.img-header .welcome{
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);

    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.img-header .welcome h1{
    font-size: 50px;
    color:#fff;
    font-weight: 200;
}
.img-header .welcome hr{
    width: 400px;
    height: 2px;
    background: #fff;
    border: none;
    margin-top: 5px;
}
.img-header .welcome p{
    font-size: 20px;
    color: #fff;
    margin-top: 20px;
}
.img-header .welcome > button{
    width: 170px;
    height: 40px;
    background: rgb(19, 121, 255);

    border-radius: 24px;
    border:none;
    outline: none;
    font-size: 22px;
    color: #fff;
    text-align: center;
    margin-top: 20px;
    cursor: pointer;
    transition: 0.5s;
}
.img-header .welcome > button:hover{
    background:var(--blue);
    border: 2px solid white;
    font-size: 160%
}

@media only screen and (max-width:773px ){
    .img-header .welcome h1{font-size: 40px;}
    .img-header .welcome > button{width: 130px; font-size: 20px;}
}
@media only screen and (max-width:590px){
    .img-header .welcome h1{font-size: 30px;}
    .img-header .welcome hr{width: 100px;}
    .img-header .welcome p{font-size: 17px;}
    .img-header .welcome > button{width: 100px; font-size: 17px;}
}

/** Acerca de Nosotros **/
.acerca-de{
    width: 100%;
    margin-top: 120px;
}
.acerca-de .info-container{
    width: 80%;
    margin:auto;
    display: flex;
    justify-content: center;
    flex-direction: column;
}
.acerca-de .info-container h1{
    font-size: 50px;
    font-weight: 400;
    color: var(--black);
    text-align: center;
    margin-bottom: 20px;
}
.acerca-de .info-container p{
    text-align: center;
    font-size: 17px;
    color: var(--black);
    line-height: 35px;
    margin:10px 0px;
}
.acerca-de .info-container .about-gallery{
    width: 100%;
    display: flex;
    justify-content: center;
    margin: 50px 0px;
}
.acerca-de .info-container .about-gallery img{
    width: calc(33.333% - 10px);
    height: 300px;
    margin: 10px 10px;
    object-fit: cover;
    border-radius: 10px;
    cursor: pointer;

}
.marco{
    width: 100% ;
    margin-left: 10%;

    background-color:transparent;
    float: left;

}
.pa{
    width: 300px;
    min-width:100px  ;
    border:solid rgb(94, 94, 226) 3px;
    border-radius: 10%;
    position: relative;
    background-color:transparent;
}

.blog{
    margin-top:100px ;
}
.acerca-de .info-container .about-more{
    width: 100%;
    display: flex;
    justify-content: center;
}
.acerca-de .info-container .about-more button{
    width: 120px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    font-size: 20px;
    background: rgb(19, 121, 255);
    border: none;
    outline: none;
    border-radius: 20px;
    color: #fff;
    cursor: pointer;
    transition: 0.5s;
}
.acerca-de .info-container .about-more button:hover{background: var(--blue);}

@media only screen and (max-width:773px){
    .acerca-de .info-container .about-gallery{flex-direction: column;}
    .acerca-de .info-container .about-gallery img{width: 100%;}
}
@media only screen and (max-width:590px){
    .acerca-de .info-container h1{font-size: 30px;}
    .acerca-de .info-container p{font-size: 15px;}
}

/** Nuestros proyectos **/
.our-projects{
    position: relative;
    width: 100%;
    height: 100%;
    background: url(imgl/imgm1.jpg);
    background-attachment:fixed;
    background-position: center;
    background-size: cover;
    margin-top: 100px;
}
.our-projects .deg-background{
    position:absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background:rgba(0,0,0,0.8);
}
.our-projects .ejeZproject{
    position: relative;
    width: 100%;
    height: 100%;
}
.our-projects .container-project{
    width: 90%;
    margin:auto;
    padding-top: 100px;
}
.our-projects .container-project .project-title{
    border:2px solid #fff;
    padding:10px;
    text-align: center;
    width: 50%;
    margin: auto;
}
.our-projects .container-project .project-title h2{
    font-size: 40px;
    color: #fff;
    font-weight: normal;
}
.our-projects .container-project .project-title hr{
   background:#fff;
   width: 50%;
   height: 3px;
   margin: 10px auto;
}
.our-projects .container-project .project-img{
    width: 100%;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 80px;
    padding-bottom: 100px;
}
.our-projects .container-project .project-img img{
  width: calc(30% - 10px);
  margin:10px;
  object-fit: cover;
  border-radius: 10px;
  cursor: pointer;
}
@media only screen and (max-width:773px){
    .our-projects .container-project .project-img img{width: 80%; margin-bottom: 30px;}
}
@media only screen and (max-width:446px){
    .our-projects .container-project .project-title h2{font-size: 30px;}
}

/** Testimonios **/
.testimonios{
    width: 100%;
    margin-top: 120px;
}
.testimonios .testimonios-title{
    width: 50%;
    margin:auto;
    text-align: center;
}
.testimonios .testimonios-title h2{
    font-size: 50px;
    font-weight: normal;
    color: var(--black);
    margin-bottom: 10px;
}
.testimonios .testimonios-title hr{
    width: 60%;
    height: 2px;
    margin:auto;
    background: var(--black);
}
.testimonios .box-testimonio{
    width: 90%;
    margin: 80px auto;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
.testimonios .box-testimonio .card-testimonio{
    width: 45%;
    margin: 20px;
}
.testimonios .box-testimonio .card-testimonio .card-img{
    display: flex;
    justify-content: center;
    margin-bottom: 30px;
}
.testimonios .box-testimonio .card-testimonio .card-img img{
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    cursor: pointer;
}
.testimonios .box-testimonio .card-testimonio .testimonio-text{
    border: 2px solid var(--red);
    padding:20px;
    border-radius: 20px;
    transition: 0.1s;
    cursor: pointer;
}
.testimonios .box-testimonio .card-testimonio .testimonio-text h4{
    font-size: 30px;
    font-weight: 400;
    color: var(--red);
    text-align: center;
    margin-bottom: 10px;
    transition: 0.1s;
}
.testimonios .box-testimonio .card-testimonio .testimonio-text p{
    font-size: 20px;
    text-align: center;
    line-height: 40px;
    color: var(--black);
}
.testimonios .box-testimonio .card-testimonio .testimonio-text:hover{
    border: 2px solid var(--blue);
}
.testimonios .box-testimonio .card-testimonio .testimonio-text:hover h4{
    color: var(--blue);
}

@media only screen and (max-width:890px){
    .testimonios .box-testimonio .card-testimonio .card-img img{width: 200px; height: 200px;}
    .testimonios .box-testimonio .card-testimonio{width: 100%;}
    .testimonios .box-testimonio .card-testimonio .testimonio-text h4{font-size: 25px;}
    .testimonios .box-testimonio .card-testimonio .testimonio-text p{font-size: 17px; line-height: 35px;}
}

/** Footer **/
.footer{
    position: relative;
    width: 100%;
    height: 100%;
    background: url(img/aaaa.png);
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
}
.footer .deg-footer{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
}
.footer .ejeZfooter{
    position: relative;
    width: 100%;
    height: 100%;
}
.footer .footer-content{
    padding-top: 100px;
    width: 90%;
    margin: auto;
    padding-bottom: 100px;
}
.footer .footer-content .footer-title{
    width: 50%;
    margin: auto;
    border:2px solid #fff;
    padding:15px;
}
.footer .footer-content .footer-title h2{
    font-size: 35px;
    font-weight: 400;
    color: #fff;
    text-align: center;
    margin-bottom: 5px;
}
.footer .footer-content .footer-title hr{
    background: #fff;
    height: 2px;
    width: 80%;
    margin:auto;
}
.footer .formulario-content{
    width: 60%;
    margin: 50px auto;
    background: #fff;
    padding:30px;
    border-radius: 50px;
    border: 1.5px solid var(--red);
}
.footer .formulario-content #formulario{
    display: flex;
    justify-content: center;
    flex-direction: column;
}
.footer .formulario-content #formulario label{
    font-size: 20px;
    text-align: center;
    color: var(--black);
    margin: 30px 0px 10px 0px;
}
.footer .formulario-content #formulario input{
    width: 90%;
    height: 40px;
    margin:auto;
    border-radius: 24px;
    outline: none;
    border:1.5px solid var(--red);
    text-align: center;
    font-size: 18px;
    color: var(--black);
}
.footer .formulario-content #formulario textarea{
    width: 90%;
    height: 200px;
    margin:auto;
    padding: 20px;
    border-radius: 24px;
    outline: none;
    border:1.5px solid var(--red);
    font-size: 15px;
    color: var(--black);
}
.footer .formulario-content #formulario .send{
    margin: 30px;
    display: flex;
    justify-content: center;
}
.footer .formulario-content #formulario button{
    width: 120px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    font-size: 20px;
    background: var(--red);
    border: none;
    outline: none;
    border-radius: 20px;
    color: #fff;
    cursor: pointer;
    transition: 0.5s;
}
.footer .formulario-content #formulario button:hover{
    background: var(--blue);
}
.footer .formulario-content #formulario .mensaje-form{
    width: 100%;
    margin:auto;
    padding:20px;
}
.footer .formulario-content #formulario .mensaje-form p{
    font-size:19px;
    color: var(--black);
    line-height: 35px;
}
.footer .footer-text{
    position:absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 40px;
    background:rgba(0,0,0,0.8);
    display: flex;
    justify-content: center;
    align-items: center;
    border-top: 2px solid #fff;
}
.footer .footer-text p{
    font-size: 20px;
    text-align: center;
    color: #fff;
}

@media only screen and (max-width:900px){
    .footer .formulario-content{width: 85%; padding:20px;}
    .footer .formulario-content #formulario input{width: 100%;}
    .footer .formulario-content #formulario textarea{width: 100%;}
}
@media only screen and (max-width:590px){
    .footer .formulario-content{width: 95%; padding:20px;}
    .footer .formulario-content #formulario label{font-size: 17px;}
    .footer .formulario-content #formulario input{width: 100%; font-size: 17px;}
    .footer .formulario-content #formulario textarea{width: 100%;}
    .footer .formulario-content #formulario .mensaje-form p{font-size: 17px;}
    .footer .footer-text{width: 100%; padding: 0px 30px;}
    .footer .footer-text p{font-size: 17px;}
}

.contenedor-cat{
    position: relative;
}
.IMA{
    color: #40423c;
    text-decoration: none;
    position: absolute;
    padding: 15px 30px 25px;
    left: 0;
    bottom: 0;
    width: 100%;
    font-weight: bold;
    font-size: 1.2em;
}
.raa{
    color: white !important;

    border-radius: 5%;
    margin-top: 10px;
    margin-left: 20%;
    margin-right: 20%;
}


.fondoc{
    background: linear-gradient(rgba(5,7,12,0.25),rgba(5,7,12,0.75)),url(../img/img-1.jpg);

    background-attachment:fixed;
    background-position: center;
    background-size: cover;
}
.contda{
    background: beige;
    border-radius: 2%;
}
.raaa{
    color: white !important;
    text-align: center;
    font-size: 2em;
    border-radius: 5%;
    margin-top: 10px;
    margin-left: 20%;
    margin-right: 20%;
}
.ccc{
    margin-left:500px !important;
    margin-right:500px !important;
}

        </style>
    </head>


  <!-- Ir Arriba -->
  <div class="go-top">
    <span class="fas fa-angle-up"></span>
  </div>

    <!-- Menu de Navegacion -->
    <header id="header">
    <nav class="menu">
     <div class="logo-box">
       <h1><a href="index.html">Acomita Web</a></h1>
       <span class="btn-menu"><i class="fas fa-bars"></i></span>
     </div>

     <div class="list-container">
        <ul class="lists">

            <li>@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif</li>
        </ul>

     </div>
    </nav>

    <!-- Imagen Header -->
    <div class="video-background">
      <div class="video-wrap">
          <div id="video">
              <video autoplay loop muted playsinline>
                  <source src="https://youtu.be/ijkaXPnozrY" type="">
              </video>
          </div>
      </div>
  </div>
    <div class="img-header">
     <div class="welcome">
       <h1>Bienvenidos Acomita Web</h1>
       <hr>
       <p>Centro comercial de Juliaca</p>
       <button id="abajo">Nosotros</button>

       <button id="abajo1">Productos</button>
       <button id="abajo2">Reseñas</button>
       <button id="abajo3">¿Dudas?</button>


     </div>
    </div>

    <div class="skew-abajo"></div>

    </header>

 <main>

    <!-- Acerca de nosotros -->
    <section class="acerca-de">
    <div class="info-container ">
      <h1>Acerca de Nosotros</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam molestie in risus eget iaculis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed at ultricies lacus. Sed ut ornare mi, ac blandit nibh. Nulla sollicitudin lorem consequat, porta est ut, scelerisque risus. Morbi iaculis a sem quis iaculis. Sed facilisis turpis placerat, aliquam augue in, aliquet lectus.</p>
      <p>Aliquam erat volutpat. Aliquam pellentesque velit ut neque consequat, id accumsan est cursus. Ut ut leo at dolor molestie porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer auctor gravida quam et faucibus. Vivamus vel porttitor leo, ac ornare odio. Praesent finibus mi urna, sed vehicula dolor bibendum vel.</p>
      <div class="about-gallery marco">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1639504029612!6m8!1m7!1sp1HjrqRJLl3LVTndBRVO-w!2m2!1d-15.4899196040966!2d-70.12705926414587!3f43.88404901494401!4f-1.3824840209574631!5f0.7820865974627469"  style="border-radius:5% ;" allowfullscreen="" loading="lazy" class="mapa"></iframe>
      <p class ="pa">Ven aqui y ten un recorrido virtual Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum voluptas totam, dolores esse inventore voluptates dolor, voluptatibus quos quasi nulla, explicabo atque iure minima amet ipsa hic sit repellat? Voluptatem.</p>

      </div>




      <div class="about-more"><button>Leer mas</button></div>

    </div>
    </section>

   <!-- Nuestros proyectos -->
   <section class="our-projects">
      <div class="skew-arriba"></div>
   <div class="deg-background"></div>

   <div class="ejeZproject">
      <div class="container-project">
        <div class="project-title">
          <h2>Nuestros Productos</h2>
          <hr>
        </div>
          <div class="project-img">

            <img src="https://radioondaazul.com/wp-content/uploads/2021/09/reactivacion-economica-plaza-tupac-amaru-.jpg" alt="">>
            <img src="https://lh5.googleusercontent.com/p/AF1QipORjFMJZh_kVPTfbQhO1pmvQGm4-XXWSfP3e0Gi=w650-h486-k-no" alt="">
            <img src="https://www.tvsur.com.pe/wp-content/uploads/2021/12/IMG-20211215-WA0106.jpg" alt="">


          </div>

   <div class="skew-abajo"></div>
   </section>

   <!-- Testimonios -->
   <section class="testimonios">
    <div class="testimonios-title">
     <h2>Reseñas</h2>
     <hr>
    </div>

     <div class="box-testimonio">
      <div class="card-testimonio">
        <div class="card-img"><img src="https://cdn.elnacional.com/wp-content/uploads/2019/11/John-Legend-Foto-Archivo-768x525.jpg" alt=""></div>
        <div class="testimonio-text">
        <h4>Amanta Castillo</h4>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec tellus quis orci tristique accumsan a quis tortor. Quisque ultricies diam vitae dolor varius, et molestie dolor faucibus."</p>
        </div>
      </div>

      <div class="card-testimonio">
          <div class="card-img"><img src="https://portal.andina.pe/EDPfotografia3/Thumbnail/2021/11/10/000822684W.jpg" alt=""></div>
          <div class="testimonio-text">
          <h4>Clara Smilla</h4>
          <p>"In a gravida enim. Ut nunc tortor, viverra et leo ut, mattis pretium velit. Phasellus vitae molestie tortor, blandit scelerisque tellus."</p>
          </div>
        </div>

        <div class="card-testimonio">
            <div class="card-img"><img src="https://r1.abcimg.es/resizer/resizer.php?nuevoanch…nifer-Aniston12-kxpF--620x349%40abc.jpg&medio=abc" alt=""></div>
            <div class="testimonio-text">
            <h4>Oscar Muñoz - Fundandor</h4>
            <p>"Sed pulvinar neque semper quam ultricies placerat. Suspendisse id posuere diam, sit amet malesuada urna. Proin eleifend consectetur convallis. Nulla dignissim ut elit a faucibus. Sed luctus sagittis gravida. Vivamus ante leo, finibus a rutrum ac, sodales vitae nisi."</p>
            </div>
          </div>

          <div class="card-testimonio">
              <div class="card-img"><img src="https://i.ytimg.com/vi/bSZ8ypl9pgc/hqdefault.jpg?s…j0AgKJDeAE=&rs=AOn4CLBSJNyIjI3nNju4qx1prm-8jznJaw" alt=""></div>
              <div class="testimonio-text">
              <h4>Roberto Perez</h4>
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec tellus quis orci tristique accumsan a quis tortor. Quisque ultricies diam vitae dolor varius, et molestie dolor faucibus."</p>
              </div>
            </div>

     </div>
   </section>

 </main>

 <!-- Footer -->
 <footer class="footer">
   <div class="skew-arriba"></div>
  <div class="deg-footer"></div>

  <div class="ejeZfooter">
  <div class="footer-content">
   <div class="footer-title">
     <h2>Envianos tu duda</h2>
     <hr>
   </div>

   <div class="formulario-content">
     <form id="formulario">
        <label for="user">Nombre:</label>
        <input type="text" id="user" name="user" placeholder="Ingresa tu Nombre">

        <label for="email">Correo Electronico:</label>
        <input type="email" id="email" name="email" placeholder="Ingresa tu Correo Electronico">

        <label for="message">Escribe tu mensaje</label>
        <textarea name="menssage" id="message"></textarea>

        <div class="send"><button>Enviar</button></div>

        <div class="mensaje-form">
          <p>Escribenos un mensaje, con gusto tendras una respuesta de parte de nosotros en muy poco tiempo.</p>
        </div>
     </form>
   </div>



  </div>
</div>
 </footer>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Acomita
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Productos
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> 539 Jr. Raúl Porras Barrenechea
            Juliaca, Puno</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            tupc@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Los mejores que se esatn durmiendo.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- Scripts -->
<script src="https://kit.fontawesome.com/35db202371.js"></script>
<script src="js/app.js"></script>

</body>
</html>
