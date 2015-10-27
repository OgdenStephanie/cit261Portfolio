//code for using local storage database///
///examples from sixrevisions.com///

window.addEventListener('storage', function(event) {
  console.log('The value for ' + event.key + ' was changed from' + event.oldValue + ' to ' + event.newValue);
  }, false);
  
  //or//
  
  sessionStorage.setItem('myKey', 'myValue');
var myVar = sessionStorage.getItem('myKey');

localStorage.setItem('myKey', 'myValue');
var myVar = localStorage.getItem('myKey');