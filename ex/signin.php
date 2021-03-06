<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
#signup {
    width: 350px;
    height: 265px;
    margin: 0px auto 50px auto;
    padding: 20px;
    position: relative;
    background: #fff url(data:image/png;base64,iVBORw0K[...]CYII=);
    border: 1px solid #ccc;
    border-radius: 3px;  
}

#signup::before, 
#signup::after {
    content: "";
    position: absolute;
    bottom: -3px;
    left: 2px;
    right: 2px;
    top: 0;
    z-index: -1;
    background: #fff;
    border: 1px solid #ccc;         
}

#signup::after {
    left: 4px;
    right: 4px;
    bottom: -5px;
    z-index: -2;
    box-shadow: 0 8px 8px -5px rgba(0,0,0,.3);
}
/*Heading*/
#signup h1 {
    position: relative;
    font: italic 1em/3.5em 'trebuchet MS',Arial, Helvetica;
    color: #999;
    text-align: center;
    margin: 0 0 20px;
}

#signup h1::before,
#signup h1::after{
    content:'';
    position: absolute;
    border: 1px solid rgba(0,0,0,.15);
    top: 10px;
    bottom: 10px;
    left: 0;
    right: 0;
}

#signup h1::after{
    top: 0;
    bottom: 0;
    left: 10px;
    right: 10px;
}
Using pseudo-elements (again) :)
/*Form elements
Not so much to say here. For the submit button, please notice the gradient transition workaround.*/
::-webkit-input-placeholder {
   color: #bbb;
}

:-moz-placeholder {
   color: #bbb;
}                       

.placeholder{
    color: #bbb; /* polyfill */
}       

#signup input{
    margin: 5px 0;
    padding: 15px;
    width: 100%;
    *width: 518px; /* IE7 and below */
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 3px; 
}

#signup input:focus{
        outline: 0;
        border-color: #aaa;
    box-shadow: 0 2px 1px rgba(0, 0, 0, .3) inset;
}       

#signup button{
    margin: 20px 0 0 0;
    padding: 15px 8px;          
    width: 100%;
    cursor: pointer;
    border: 1px solid #2493FF;
    overflow: visible;
    display: inline-block;
    color: #fff;
    font: bold 1.4em arial, helvetica;
    text-shadow: 0 -1px 0 rgba(0,0,0,.4);         
    background-color: #2493ff;
    background-image: linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0)); 
    transition: background-color .2s ease-out;
    border-radius: 3px;
    box-shadow: 0 2px 1px rgba(0, 0, 0, .3),
                0 1px 0 rgba(255, 255, 255, .5) inset;                               
}

#signup button:hover{
    background-color: #7cbfff;
        border-color: #7cbfff;
}

#signup button:active{
    position: relative;
    top: 3px;
    text-shadow: none;
    box-shadow: 0 1px 0 rgba(255, 255, 255, .3) inset;
}

</style>
</head>
<body>
	<form id="signup" action="" method="post">
    <h1>Start doing cool stuff in seconds.</h1>
    <input type="email" placeholder="Enter your email" name="useremail">
    <input type="password" placeholder="Enter your password" name="password">                 
    <span><!--?php echo $error; ?--></span>
	<button type="submit" name="submit">Sign in Now!</button>    
</form>

</body>
</html>