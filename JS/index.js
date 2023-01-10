function nameGet(){

    let nameIs = "parrot";

    if (Number(nameIs) && !Number.isNaN(nameIs)) {
        console.log("Your Number is the square root of: " + nameIs * nameIs);
    }
    else {
        console.log("I need a number")
    }

} 

nameGet()