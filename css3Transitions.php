////W3 Schools////
///Example Code////
<!DOCTYPE html>
<html>
<head>
<style> 
div {
    width: 100px;
    height: 100px;
    background: red;
    /* For Safari 3.1 to 6.0 */
    -webkit-transition-property: width;
    -webkit-transition-duration: 2s;
    -webkit-transition-timing-function: linear;
    -webkit-transition-delay: 1s;
    /* Standard syntax */
    transition-property: width;
    transition-duration: 2s;
    transition-timing-function: linear;
    transition-delay: 1s;
}

div:hover {
    width: 300px;
}
</style>

<p><b>Note:</b> This example does not work in Internet Explorer 9 and earlier versions.</p>

<div></div>

<p>Hover over the div element above, to see the transition effects.</p>
<p><b>Note:</b> The transition effect has a 1 second delay before starting.</p>

<style> 
div {
    width: 100px;
    height: 100px;
    background: red;
    -webkit-transition: width 2s, height 2s, -webkit-transform 2s; /* Safari */
    transition: width 2s, height 2s, transform 2s;
}

div:hover {
    width: 300px;
    height: 300px;
    -webkit-transform: rotate(180deg); /* Safari */
    transform: rotate(180deg);
}
</style>
</head>
<body>

<p><b>Note:</b> This example does not work in Internet Explorer 9 and earlier versions.</p>

<div></div>
@keyframes resize {
  0% {
    padding: 0;
  }
  50% {
    padding: 0 20px;
    background-color:rgba(255,0,0,0.2);
  }
  100% {
    padding: 0 100px;
    background-color:rgba(255,0,0,0.9);
  }
}

#box {
  animation-name: resize;
  animation-duration: 1s;
  animation-iteration-count: 4;
  animation-direction: alternate;
  animation-timing-function: ease-in-out;
}
<p>Hover over the div element above, to see the transition effect.</p>

</body>
</html>
