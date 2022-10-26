"strict mode"


let sampleVar = "Hello world"; // this is a string


console.log(sampleVar);

const arr = [1,2,3,4]; // this is an array


console.log(arr);



const myObject = { // this is an object 
    name : "ryan",
    age : 21,
    details : function(){
        return `My name is ${this.name} and i am ${this.age} years 0ld`;
    }
}
console.log(myObject.details())



let name =  new String("ryan"); // this is an object type string 
let othername = "ryan"; //primitive type string

//this will return error because they have different data type
if(name === othername){
    console.log("perfect match!");
}
else{
    console.log("Do not match!");
}

//creating class


class Person{
    constructor(fname,gender,age){
        this.fname = fname;
        this.gender = gender;
        this.age = age;
    }
    
   details(){ // class method or class function 
        let genderDetector = ""; // gender Value will be HE if gender = male and SHE if gende = female
        if(this.gender == "Male" || this.gender == "male"){ // detects if the gender is male
            genderDetector = "He";
        }
        else{
            genderDetector = "She";
        }
        return `${genderDetector} is ${this.fname}, ${this.gender} and ${genderDetector} is ${this.age} years old`;
    }
    
}


const p1 = new Person("ryan","male",22); // instantiate  an object from Class Person
console.log(p1.details());
const p2 = new Person("anna","female",23);
console.log(p2.details());





//async and await



async function myFunction(){
    let myPromise =  new Promise(function(resolve){
        let x = 5;
        if(x == 5){
           resolve("success")
        }
        else{
            resolve("failed");
        }
    
    })

    console.log(await myPromise);
}


myFunction();


let x = 4, y = 6;

function add(){
    console.log(x + y);
}

add();

//this is an error 
console.log("error?");

//declaring date

const d =  new Date();
const year = d.getFullYear();
const month = d.getMonth();
const day = d.getDate();

console.log(d);



const arrMonths = ["Jan", "Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];

console.log(`Today is ${arrMonths[month]} ${day} of this year ${year}`);
