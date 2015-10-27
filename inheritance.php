//Inheritance Example//
////W3 Schools Example Sandbox Codes////////
<!DOCTYPE html>
<html>
<body>

<p>Creating a JavaScript Object.</p>

<p id="demo"></p>

<script>
var person = {
    firstName : "John",
    lastName  : "Doe",
    age       : 50,
    eyeColor  : "blue"
};

document.getElementById("demo").innerHTML =
person.firstName + " is " + person.age + " years old.";
</script>

</body>
</html>
(function(){ //boilerplate
        function text(childID, childSource, childName)  //the actual driver code
        {
            this.text = "hi";
            this.inherits = ['vwf/model/threejs/prim.js']; // other subdrivers to be merged into this
            this.setProperty ...
                        this.calledMethod ...
            this.getRoot = function()
            {
                return this.rootnode;
            }
            this.rootnode = new THREE.Object3D(); //all subdrivers must have a GetRoot function
        }
        //default factory code
        return function(childID, childSource, childName) {  //the factory function
            //name of the node constructor
            return new text(childID, childSource, childName); //returns a new subdriver
        }
})();