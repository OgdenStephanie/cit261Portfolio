///examples from W3 Schools.com///
<!DOCTYPE html>
<html>
<head>
<style> 
div {
    width: 100px;
    height: 100px;
    background: red;
    position: relative;
    -webkit-animation: myfirst 5s infinite; /* Chrome, Safari, Opera */
    -webkit-animation-direction: alternate; /* Chrome, Safari, Opera */
    animation: myfirst 5s infinite;
    animation-direction: alternate;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes myfirst {
    0%   {background: red; left: 0px; top: 0px;}
    25%  {background: yellow; left: 200px; top: 0px;}
    50%  {background: blue; left: 200px; top: 200px;}
    75%  {background: green; left: 0px; top: 200px;}
    100% {background: red; left: 0px; top: 0px;}
}

@keyframes myfirst {
    0%   {background: red; left: 0px; top: 0px;}
    25%  {background: yellow; left: 200px; top: 0px;}
    50%  {background: blue; left: 200px; top: 200px;}
    75%  {background: green; left: 0px; top: 200px;}
    100% {background: red; left: 0px; top: 0px;}
}
</style>
</head>
<body>

<p><strong>Note:</strong> The animation-direction property is not supported in Internet Explorer 9 and earlier versions.</p>
<div></div>
<style> 
div {
    width: 100px;
    height: 50px;
    background: red;
    color: white;
    font-weight: bold;
    position: relative;
    -webkit-animation: mymove 5s infinite;  /* Chrome, Safari, Opera */
    animation: mymove 5s infinite;
}

/* Chrome, Safari, Opera */
#div1 {-webkit-animation-timing-function: linear;}
#div2 {-webkit-animation-timing-function: ease;}
#div3 {-webkit-animation-timing-function: ease-in;}
#div4 {-webkit-animation-timing-function: ease-out;}
#div5 {-webkit-animation-timing-function: ease-in-out;}

#div1 {animation-timing-function: linear;}
#div2 {animation-timing-function: ease;}
#div3 {animation-timing-function: ease-in;}
#div4 {animation-timing-function: ease-out;}
#div5 {animation-timing-function: ease-in-out;}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    from {left: 0px;}
    to {left: 300px;}
}

@keyframes mymove {
    from {left: 0px;}
    to {left: 300px;}
}
</style>
</head>
<body>

<p><strong>Note:</strong> The animation-timing-funtion property is not supported in Internet Explorer 9 and earlier versions.</p>
<div id="div1">linear</div>
<div id="div2">ease</div>
<div id="div3">ease-in</div>
<div id="div4">ease-out</div>
<div id="div5">ease-in-out</div>

</body>
</html>