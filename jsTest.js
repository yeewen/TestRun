//Practical pattern for creating Objects

$(document).ready(function(){
	function Fruit(itsColor, itsName, itsNativeLand) {
		this.color = itsColor;
		this.name = itsName;
		this.nativeLand = itsNativeLand;
		this.showName = function() {
			document.write("This is : " + this.name + '<br/>');
		};
		this.nativeTo = function() {
			this.nativeLand.forEach(function(country){
				document.write("Available in : " + country + '<br/>');
			});
		};
	}
	var mango = new Fruit("yellow", "mango", ["South America", "Central America", "West Africa"]);
	var pineapple = new Fruit("orange", "pineapple", ["Malaysia", "United States"]);

	mango.showName();
	mango.nativeTo();

	document.write('<br/>');
	
	pineapple.showName();
	pineapple.nativeTo();
});


//Less practical pattern for creating Objects

//var mango = {
//	color: "yellow",
//	fruitName: "Mango",
//	sweetness: 8,
//	nativeToLand:["South America", "Central America"],
//
//	showName: function() {
//		console.log("This is : " + this.fruitName);
//	},
//
//	nativeTo: function() {
//		this.nativeToLand.forEach(function(eachCountry) {
//			console.log("Grown in: " + eachCountry);
//		});
//	}
//}
//
//mango.showName();
//mango.nativeTo();


//Object Constructor
//A constructor is a function used for initializing new objects, 
//and you use the new keyword to call the constructor.

//var mango = new Object();
//mango.color = "yellow";
//mango.shape = "irregular";
//mango.sweetness = 8;
//
//mango.howSweetAmI = function() {
//	console.log("Good2");
//}
//
//mango.howSweetAmI(); 


//Object literals
//Easiet way to create objects with the object literal
//This is an object with 4 items, using object literal

//var mango = {
//	color: "yellow",
//	shape: "round",
//	sweetness: 8,
//
//	howSweetAmI: function() {
//		console.log("Good");
//	}
//}